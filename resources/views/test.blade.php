<?php

//getting time difference in seconds.
$secondsDifference=strtotime(date('Y-m-d H:i:s'))-strtotime('2023-02-23 13:40:00');
//converting seconds to minutes.
echo '2023-02-23 13:40:00 '. date('Y-m-d H:i:s');
echo "<br>";
echo $secondsDifference;
echo "<br>";
echo intval($secondsDifference);
echo "<br>";
echo intval($secondsDifference/60);
echo "<br>";
echo $secondsDifference/60;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo gethostname();
echo "<br>";

$localIP = getHostByName(getHostName());
  
// Displaying the address 
echo $localIP;
echo "<br>";



$host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
echo $host;

$clientIP = request()->ip();   
$host = request()->getHttpHost();
$host = request()->getHost();

echo "<br>";

echo get_client_ip();
echo "<br>";
echo 'User IP - '.$_SERVER['REMOTE_ADDR'];

 $ipaddress = getenv("REMOTE_ADDR") ;
 Echo "Your IP Address is " . $ipaddress;



echo "<br>";

echo getRealIP();

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function getRealIP()
    {
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            $ip = $_SERVER["HTTP_FORWARDED"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }

        // Strip any secondary IP etc from the IP address
        if (strpos($ip, ',') > 0) {
            $ip = substr($ip, 0, strpos($ip, ','));
        }
        return $ip;
    }




?>