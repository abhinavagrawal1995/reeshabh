<?php 
if(isset($_POST['submit'])){
    $to = "admin@reeshabhkaran.com"; // this is your Email address
	//$to = "abhinavagrawal1995@gmail.com"; // this is your Email address
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
	$subject="From website";
    if(mail($to,$subject,$message,$headers))
		echo "yolo";
    
    
    header('Location: thanks.html'); 
    }
	else echo "Something went wrong";
?>