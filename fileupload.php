<?php

if ($_POST['test'] != '') {
    echo 'Unfortunately, by filling out the hidden field, you have been identified as a potential spambot and your message has been terminated.';
} else {

//Validate the name:
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    echo "You forgot to enter your name.<br>";
}

//Validate the phone:
if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    echo "You forgot to enter your phone number.<br>";
}

//Validate the e-mail:
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "You forgot to enter your e-mail.<br>";
}

//Validate the message:
if (!empty($_POST['message'])) {
    $message = $_POST['message'];
} else {
    echo "You forgot to enter a message.";
}

if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    // Obtain file upload variables:
    $attachment = $_FILES['attachment']['tmp_name']; 
    $attachment_type = $_FILES['attachment']['type']; 
    $attachment_name = $_FILES['attachment']['name'];

    if (file($attachment)) { 
    // Read the file to be attached ('rb' = read binary):
    $file = fopen($attachment,'rb'); 
    $data = fread($file,filesize($attachment)); 
    fclose($file);

    // Generate a boundary string:
    $semi_rand = md5(time()); 
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

    // Add the headers for a file attachment:
    $headers = "\nMIME-Version: 1.0\n" . 
    "Content-Type: multipart/mixed;\n" . 
    " boundary=\"{$mime_boundary}\"";

    // Add a multipart boundary above the plain message:
    $message = "This is a multi-part message in MIME format.\n\n" . 
    "--{$mime_boundary}\n" . 
    "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
    "Content-Transfer-Encoding: 7bit\n\n" . 
    $message . "\n\n";

    // Base64 encode the file data:
    $data = chunk_split(base64_encode($data));  

    // Add file attachment to the message:
    $message .= "--{$mime_boundary}\n" . 
    "Content-Type: {$attachment_type};\n" . 
    " name=\"{$attachment_name}\"\n" . 
    //"Content-Disposition: attachment;\n" . 
    //" filename=\"{$attachment_name}\"\n" . 
    "Content-Transfer-Encoding: base64\n\n" . 
    $data . "\n\n" . 
    "--{$mime_boundary}--\n"; 
    }  

    $body = "$name\n$phone\n$email\n\n$message";
    mail("*@*.com", "Starcrest Escrow, Inc. Website - Real Property Sale", $body, $headers);
    header("Location: confirm.html");
}

}

?>