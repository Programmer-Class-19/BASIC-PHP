<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Utilitas extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		if ($this->session->userdata('status') !='admin_login') {
			redirect(base_url().'auth?alert=belum_login');
		}
		$this->load->model('m_reset');
	}

	public function index()
	{
		$this->load->view('admin/v_utilitas');
	}

	public function db()
	{
	    $this->load->dbutil();   
	    $backup =& $this->dbutil->backup();  
	    $this->load->helper('file');
	    write_file('db', $backup);
	    $this->load->helper('download');
	    force_download('backup-ujian-online.zip', $backup);
	}

	public function resetdb()
	{
		$this->m_reset->mytruncate();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Reset Database Success !,<br></b> Anda telah berhasil mereset database</div>');
		redirect(base_url('utilitas'));
	}

	public function restore()   
    {
        $this->load->helper('file');
		$fupload = $_FILES['file'];
		$nama = $_FILES['file']['name'];
		if(isset($fupload)){
			$lokasi_file = $fupload['tmp_name'];
			$direktori="db/$nama";
			move_uploaded_file($lokasi_file, "$direktori");
		}

		$isi_file=file_get_contents('db/'.$nama);
		$string_query=rtrim($isi_file, "\n;" );
		$array_query=explode(";", $string_query);
		foreach($array_query as $query){
			$this->db->query($query);
		}

		$path_to_file = 'db/'.$nama;
        if(unlink($path_to_file)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-message"><i class="icon fa fa-check"></i><b>Restore Database Success !,<br></b> Anda telah berhasil merestore database</div>');
			redirect(base_url('utilitas'));
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message"><i class="icon fa fa-check"></i><b>Error !,<br></b></div>');
			redirect(base_url('utilitas'));
        }
    }
}