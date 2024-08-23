<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengulangan</title>
</head>
<body>
<?php

for( $i = 0; $i < 5; $i++ ) {
    echo "Hello World <br>";
}
?><br>

<?php

$i = 0;
while( $i < 5 ) {
    echo "Hello World! <br>";
    $i++;
}
?><br>

<?php

$i = 0;
do {
    echo "Hello World <br>";
$i++;
} while( $i < 5 );

?>
</body>
</html>