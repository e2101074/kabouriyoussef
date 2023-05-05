<?php
$rmin = $_POST['min'];
$rmax = $_POST['max'];
$ruid = $_POST['user'];
$ip = $_SERVER['REMOTE_ADDR'];

echo "You reallr rock\n";
$now = date("Y-m-d H:i:s");//get a timestamp of this receiving
$record = $now.", ".$rmin.", ".$rmax.", ".$ruid.", ".$ip."\n";
$file = "record.txt";
if(file_exists($file)){
   $p = fopen($file), "a"); //open the record file in attach mode
}else{
   $p = fopen($file, "w");//create a new file
}
fwrite($p, $record);
flose($p);
?>