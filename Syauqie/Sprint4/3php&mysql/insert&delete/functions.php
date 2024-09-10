<?php 
$conn = mysqli_connect("Localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}

?>


<?php 

        function tambah($data) {
        global $conn;
        
        $nama = $data["nama"];
        $nrp = $data["nrp"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambar = $data["gambar"];

        $query = "INSERT INTO mahasiswa
        VALUES
        ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";

        mysqli_query($conn, $query);
    }

?>