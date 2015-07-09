<?php 
	$cfgServer = "localhost";  //IP of your router 
	$cfgPort    = 8085;                //port, 22 if SSH 
	$cfgTimeOut = 10; 

	$usenet = fsockopen($cfgServer, $cfgPort, $errno, $errstr, $cfgTimeOut); 

$v1;
$v2;
$v3;
$v4;
$v5;
$v6;
$json;

if(!$usenet) 
        { 
        echo "Connexion failed\n"; 
        exit(); 
        } 
else 
        { 
        fputs ($usenet, '?WATCH={"enable":true,"json":true}');  
                 $v1=fgets($usenet, 4096); 
                 $v2=fgets($usenet, 4096);
                 $v3=fgets($usenet, 4096);
                 $v4=fgets($usenet, 4096);
                 $v5=fgets($usenet, 4096);
                 $v6=fgets($usenet, 4096);
 
         
                 fclose($usenet);
 /*                $json=json_decode($v5,true);
                 $time=$json['time'];
                 $lat=$json['lat'];
                 $lon=$json['lon'];
                 $alt=$json['alt'];
                 $speed=$json['speed'];
				echo "Zeit : $time \n<BR>"; 
				echo "lat: $lat\n<BR>";
				echo "lon: $lon\n<BR>";
				echo "alt: $alt\n<BR>";
				echo "speed: $$v5\n<BR>"; */    
                 
        } 
        echo $v5;
        
       
 
?> 