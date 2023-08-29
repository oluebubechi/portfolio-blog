<?php
$message_sent = false;
 if(isset($_POST['email'])&& $_POST['email'] !=''){
   if(  filter_var($_POST['name'], FILTER_VALIDATE_EMAIL) ){
        //sumit the form
        $userName = $_POST['name'];
       $userEmail = $_POST['email'];
       $messageSubject = $_POST['subject'];
       $message = $_POST['message'];
       
       $to = "emmanuelokechukwu49890@gmail.com";
       $body = "";
       
       $body .= "From: ".$userName. "\r\n";
       $body .= "Email: ".$userEmail. "\r\n";
       $body .= "Message ".$message. "\r\n";
       
       //mail($to,$message,$body);
       
       $message_sent = true; 
   }
   else{
     $invalid_class_name = "form-invalid";
   }
         
 }


?>

<?php
if($message_sent);
?>
<h3>Thanks, we'll be in touch</h3>
<?php
else:
?>
<?php
endif:
?>
        
        