<?php

	/*Author: Chengkang Xu*/

	include('php/Base.php');


	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$comment="email: ".$email."\r\n"."comment:"."\r\n".$_POST['comment'];
	
	$comment = wordwrap($comment, 70, "\r\n");
	
	mail('xu411@purdue.edu', $subject, $comment);
		
	header("Location: success-inq.php");
	die();
	
?>
