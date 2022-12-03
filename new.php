<?php 
define("PAGETITLE",'<h1>Hello Kitty</h1>');
echo PAGETITLE;
echo "<br>";
echo "ServerName: ".$_SERVER['SERVER_NAME'];
echo "<br>";
echo "ServerAddress: ".$_SERVER['SERVER_ADDR'];
echo "<br>";
echo "ServerPort: ".$_SERVER['SERVER_PORT'];
echo "<br>";
echo "FileName: ".basename(__FILE__);
echo"<br>";
echo "FilePath: ".__FILE__;
echo"<br>";
$age=10;
switch(true){
    case $age<5:
        print "Stay at home";
        break;
    case $age==5:
        print "Go to Kindergarden";
        break;
    case in_array($age,range(6,12)):
        print "Go to grade";
        break;            
}
echo phpinfo();
?>