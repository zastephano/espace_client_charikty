<?php
// on se connecte � notre base
$base = mysqli_connect ('localhost', 'cafigec_charikty', 'pp=.Wt6BQ?ur');
mysqli_select_db ($base, 'cafigec_charikty') ;
if ($base->connect_error) {
    die("Connection failed: " . $base->connect_error);
}
?>