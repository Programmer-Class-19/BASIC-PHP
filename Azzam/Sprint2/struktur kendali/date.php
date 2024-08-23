<?php
    echo date("l, d-M-Y", time()+60*60*24*100);
?>
<br>
<?php
    echo date("l, D M Y", time()-60*60*24*200);
?>
<br>
<?php
    echo time();
?>
<br>
<?php
    echo mktime (0,0,0,6,13,2000);
?>
<br>
<?php
    echo date("l", mktime(0,0,0,10,19,2004));
?>
<br>
<?php
    echo date("l", mktime(0,0,0,6,13,2000));
?>
<br>
<?php
    echo date("l", strtotime("13 jun 2000"));
?>
<br>
<?php
    echo date("l", strtotime("19 okt 2004"));
?>