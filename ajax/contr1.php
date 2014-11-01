<?php
extract($_POST);
include('../config.php');
session_start();

if($_POST['act'] == 'contr'.$idpost):
	$name = 'loggedinfellow';
    $email = 'loggedinfellowemail';

    $articlename = htmlentities($articlename);
    $journalname = htmlentities($journalname);
    $conferencename = htmlentities($conferencename);
    $publicationdate = htmlentities($publicationdate);
    $internalauthors = htmlentities($internalauthors);
    $externalauthors = htmlentities($externalauthors);
    $patentfiled = htmlentities($patentfiled);
    $scopuslink = htmlentities($scopuslink);
    $contactname = htmlentities($contactname);
    $contactemail = htmlentities($contactemail);
    
    $message = 'Name of article: '.$articlename.
    			', Name of journal : '.$journalname.
    			', Name of conference: '.$conferencename.
    			', Date of publication: '.$publicationdate.
    			', Internal Authors: '.$internalauthors.
    			', External Authors: '.$externalauthors.
    			', Has a patent been filed: '.$patentfiled.
    			', Scopus link of article: '.$scopuslink.
    			', Contact Name: '.$contactname.
    			', Contact Email: '.$contactemail ;
    
    $name = getUserName($_SESSION['login_user']);
    $email = getEmailId($_SESSION['login_user']);
    // Connect to the database
	if(strlen($name) <= '1' || $name == 'undefined'){ $name = 'Guest';}
    //insert the comment in the database
    mysql_query("INSERT INTO achievements (name, achievementId, details) VALUES( '$name', '$idpost', '$message')");
    
    $ach_config = getAchievement($idpost);
    
    $from = $ach_config["emailId"]; // sender
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($from,$ach_config["name"],$message,"From: $from\n");
    
    if(!mysql_errno()){
?>
    <div class="cmt-cnt">
		<div class="thecom">
	        <h5><?php echo $name; ?></h5><span  class="com-dt"><?php echo date('d-m-Y H:i'); ?></span>
	        <br/>
	       	<p><?php echo $message; ?></p>
	    </div>
	</div><!-- end "cmt-cnt" -->

	<?php }else{ ?>
	<p>Failed to save achievement</p>
	<?php echo mysql_errno() . ": " . mysql_error() . "\n";?>
	<?php echo $idpost?>
	
	<?php }?>
<?php endif; ?>