<?php
extract($_POST);
include('../config.php');
include('../attach.php');

session_start();

if($_POST['act'] == 'req'.$idpost):
	$name = 'loggedinfellow';
    $email = 'loggedinfellowemail';

    $employeename = htmlentities($employeename);
    $files = htmlentities($files);
    $startdate = htmlentities($startdate);
    $employeementduration = htmlentities($employeementduration);
    $salary = htmlentities($salary);
    $salaryproject = htmlentities($salaryproject);
    $contactname = htmlentities($contactname);
    $contactemail = htmlentities($contactemail);
    
    $message = 'Employee name: '.$employeename.
    			', Employee resume : '.$files.
    			', Start date: '.$startdate.
    			',Duration of employment (if applicable):'.$employeementduration.
    			',Salary of employee:'.$salary.
    			',Project from which the salary should be taken:'.$salaryproject.
    			', Contact Name: '.$contactname.
    			', Contact Email: '.$contactemail ;
    
    $name = getUserName($_SESSION['login_user']);
    $email = getEmailId($_SESSION['login_user']);
    // Connect to the database
	if(strlen($name) <= '1' || $name == 'undefined'){ $name = 'Guest';}
    //insert the comment in the database
    mysql_query("INSERT INTO requests (name, requestId, details) VALUES( '$name', '$idpost', '$message')");
    
    $req_config = getRequest($idpost);
    
    $from = $req_config["emailId"]; // sender
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
	if(strlen($files)>0)
    	mail_attachment($files, dirname(__FILE__).'/../', $from, $from, $from, $from, $req_config["name"], $message);
    else
	    mail($from,$req_config["name"],$message,"From: $from\n");        
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
	<p>Failed to save request</p>
	<?php echo mysql_errno() . ": " . mysql_error() . "\n";?>
	<?php echo $idpost?>
	
	<?php }?>
<?php endif; ?>