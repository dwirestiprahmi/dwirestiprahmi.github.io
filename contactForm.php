<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailfrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "dwirestipr@gmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an E-mail from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }

?>