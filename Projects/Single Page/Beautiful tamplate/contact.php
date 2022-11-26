<?php
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$comment = ($_GET['comment']) ?$_GET['comment'] : $_POST['comment'];

if ($_POST) $post=1;


if (!$name) $errors[count($errors)] = 'স্যার দয়া করে আপনার মূল্যবান নামটি  দিন আপনি আপনার ‌ নামটি দিতে ভুলে গেছেন <h1>My Name is MD Abdur Rakib </h1>.';
if (!$email) $errors[count($errors)] = 'স্যার দয়া করে আপনার ইমেইলটি দিন আপনি আপনার ‌ইমেইল‌টি দিতে ভুলে গেছেন <h1>My Name is MD Abdur Rakib </h1>.';
if (!$comment) $errors[count($errors)] = 'স্যার দয়া করে আপনার মূল্যবান কমেন্টি করুন ।‌ আপনি আপনার ‌ মূল্যবান কমেন্টি দিতে ভুলে গেছেন <h1>My Name is MD Abdur Rakib </h1>.';

if (!$errors) {

	
	$to = 'freelancerrakib786@gmail.com';	
	
	$from = $name . ' <' . $email . '>';
	
	
	$subject = 'Message via Beauttio from ' . $name;	
	$message = 'Name: ' . $name . '<br/><br/>
		       Email: ' . $email . '<br/><br/>		
		       Message: ' . nl2br($comment) . '<br/>';

	
	$result = sendmail($to, $subject, $message, $from);
	
	
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your message.';
		else echo 'দুঃখিত অজানা সমস্যা । পরে আবার চেষ্টা করুন ধন্যবাদ । রাকিব.';
		
	
	} else {
		echo $result;	
	}


} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="index.php"><h2>Back</h2></a>';
	exit;
}



function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result) return 1;
	else return 0;
}

?>