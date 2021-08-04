<?php

   $servername = 'africaf1'
   $username = 'gabrieladams';
   $password = '@Gabriel_mysql1738';
   
   // create conn
   $conn = new mysqli($servername, $username, $password);
   
   // check connection
   if($conn->connect_error) {
       die('connection failed: ' . $conn->connect_error);
   } else {
       echo 'connected successfully'
   }

//     // $to = "gabrieladams1738@gmail.com";
//     $from = 'ast@gmail.com';
// 	$to = $_POST['email'];
// 	$name = $_POST['name'];
//     // $subject = $_POST['subject'];
//     // $number = $_POST['number'];
//     // $cmessage = $_POST['message'];

//     $headers = "from: $from";
// 	$headers = "from: " . $from . "\r\n";
// 	$headers .= "to: ". $email . "\r\n";
// 	$headers .= "MIME-Version: 1.0\r\n";
// 	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//     $subject = "We have received your message";

//     $logo = 'img/logo.png';
//     // $link = '#';

// 	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
// 	$body .= "<table style='width: 100%;'>";
// 	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
// 	$body .= "<img src='{$logo}' alt='' /><br /><br />";
// 	$body .= "</td></tr></thead><tbody><tr>";
// 	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
// 	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
// 	$body .= "</tr>";
// 	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
// 	$body .= "<tr><td></td></tr>";
// 	$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
// 	$body .= "</tbody></table>";
// 	$body .= "</body></html>";
	
// 	if(mail($to, $subject, $body,)) {
// 	    echo 'Email has been received and an email sent to you'
// 	} else {
// 	    echo 'Failed'
// 	}

// 	$send = mail($email, $subject, $body, $headers);
	
// 	echo 'Email has been sent to you'


$servername = 'africaf1';
$username = 'gabrieladams';
$password = '@Gabriel_mysql1738';

// create conn
$conn = new mysqli($servername, $username, $password);

// check connection
//   if($conn->connect_error) {
//       die('connection failed: ' . $conn->connect_error);
//   } else {
//       echo 'connected successfully'
//   }

if(mysqli_connect_error()) {
    die('connection failed: ' . mysqli_connect_error)
} else {
    echo 'connected successfully'
}

?>