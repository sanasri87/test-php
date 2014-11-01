<h2>Feedback Form</h2>
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  From: <input type="text" name="from"><br>
  Subject: <input type="text" name="subject"><br>
  Message: <textarea rows="10" cols="40" name="message"></textarea><br>
  <input type="submit" name="submit" value="Submit Feedback">
  </form>
  <?php 
} else {    // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    $from = "noreply@company.com"; // sender
	$subject = $_POST["subject"];
    $message = "hdfjlk ldjf ajf ladj faldflajdfdlf dljf lafj;al jf<br/>dflkdjfjf<br/>dflkdjflkdjflkajfljaljflkajfkdsjhdfjlk ldjf ajf ladj faldflajdfdlf dljf lafj;al jf<br/>dflkdjflkdjflkajfljaljflkajfkdsjhdfjlk ldjf ajf ladj faldflajdfdlf dljf lafj;al jj";
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("sanasri87@gmail.com",$subject,$message,"From: $from\n");
    echo "Thank you for sending us feedback";
  }
}
?>

