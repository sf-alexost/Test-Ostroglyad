<?php 
if(isset($_POST['submit'])){
    $to = "order@salesgenerator.pro"; 
    $from = "alexost585@gmail.com"; 
    $message = "E-mail " . $_POST['email'] . "Phone " .  $_POST['phone'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>
