<?php

		if(isset($_POST['submit'])) {
      error_reporting(E_NOTICE);
      function valid_email($str)
      {
      return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	  }
      if($_POST['firstname']!='' && $_POST['lastname']!='' && $_POST['phone']!='' && $_POST['email']!='' && valid_email($_POST['email'])==TRUE && $_POST['custom-options']!='' && strlen($_POST['comments'])>1)
      {

      	// Replace Email address with your own
          $to = preg_replace("([\r\n])", "", "philipdimanov@gmail.com");

		  $from = preg_replace("([\r\n])", "", $_POST['email']);
		  $subject = "RSPV form message from ".$_POST['firstname']." ".$_POST['lastname'];
		  $message = "From: ".$_POST['firstname']." ".$_POST['lastname']."\r\n<br>";
		  $message .= "Phone: ".$_POST['phone']."\r\n<br>";
		  $message .= "E-mail: ".$_POST['email']."\r\n<br>";
		  $message .= "Custom Options: ".$_POST['custom-options']."\r\n<br>";
		  $message .= "Message: ".$_POST['comments']."\r\n";
		  
		  $match = "/(bcc:|cc:|content\-type:)/i";
			if (preg_match($match, $to) ||
				preg_match($match, $from) ||
				preg_match($match, $message)) {
			  die ("Header injection detected.");
			}
          $headers = "From: ".$from."\r\n";
			  $headers .= "Reply-to: ".$from."\r\n";
		  $headers .= "Content-type: text/html; charset=utf-8 \r\n";
         
    if(mail($to, $subject, $message, $headers))
          {
              echo 1; //SUCCESS
          } else {
              echo 2; //FAILURE - server error
          }
      } else {
   	  echo 3; //FAILURE - invalid email
      }
	  } else {
		 die ("Direct access not allowed!");
	  }
	   

  ?>