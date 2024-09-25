<?php $nama = [ "syauqie", "mauk", 19,]; ?>

<?php for ($i = 0; $i < count($nama); $i++) { ?>
    <?php echo $nama[$i]; ?>
<?php } ?>
<br>
<?php 

foreach ($nama as $nam) {
    echo "$nam " ;
}
echo "<br>";
if ($nam) {
    echo for($i = 0; $i < 5; $i++) {
        echo "syauqie <br>";
    }
} 
else {
    echo "false";
}
?>