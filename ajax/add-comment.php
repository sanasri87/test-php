<?php


extract($_POST);
session_start();
if($_POST['act'] == 'add-com'):
	$idpost = htmlentities($idpost);
	$name = htmlentities($name);
    $email = htmlentities($email);
    $comment = htmlentities($comment);
    
    
    // Connect to the database
	include('../config.php'); 
	if(strlen($name) <= '1' || $name == 'undefined'){ $name = 'Guest';}
    //insert the comment in the database
    mysql_query("INSERT INTO comments (name, email, comment, id_post)VALUES( '$name', '$email', '$comment', '$idpost')");
    if(!mysql_errno()){
?>
    <div class="cmt-cnt">
		<div class="thecom">
	        <h5><?php echo $name; ?></h5><span  class="com-dt"><?php echo date('d-m-Y H:i'); ?></span>
	        <br/>
	       	<p><?php echo $comment; ?></p>
	    </div>
	</div><!-- end "cmt-cnt" -->

	<?php } ?>
<?php endif; ?>