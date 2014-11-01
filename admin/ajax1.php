<?php
include '../config.php';
include 'functions/functions.php';
$action = $_REQUEST['action'];

switch($action) {

	case "load":
		$query 	= mysql_query("SELECT * FROM `ach_config` ORDER BY id ASC");
		$count  = mysql_num_rows($query);
		if($count > 0) {
			while($fetch = mysql_fetch_array($query)) {
				$record[] = $fetch;
			}
		}
		?>
        <table class="as_gridder_table table">
            <tr class="grid_header">
                <td><div class="grid_heading">Contribution Type</div></td>
                <td><div class="grid_heading">Email Id</div></td>
            </tr>
            <tr id="addnew">
            	<td>&nbsp;</td>
            	<td colspan="2">
                <form id="gridder_addform" method="post">
                <table width="100%" class="table">
                <tr>
                    <td><input type="text" name="name" id="name" class="gridder_add" /></td>
                    <td><input type="text" name="emailId" id="emailId" class="gridder_add" /></td>
				</tr>
                </table>                    
                </form>
            </tr>
            <?php
            if($count <= 0) {
            ?>
            <tr id="norecords">
                <td colspan="3" align="center">No records found <a href="addnew" id="gridder_insert" class="gridder_insert"><img src="images/insert.png" alt="Add New" title="Add New" /></a></td>
            </tr>
            <?php } else {
            $i = 0;
            foreach($record as $records) {
            $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo 'even'; } else { echo 'odd'; } ?>">
                <td><div class="grid_content editable"><span><?php echo $records['name']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("name|".$records['id']); ?>" value="<?php echo $records['name']; ?>" /></div></td>
                <td><div class="grid_content editable"><span><?php echo $records['emailId']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("emailId|".$records['id']); ?>" value="<?php echo $records['emailId']; ?>" /></div></td>
                </div></td>
            </tr>
            <?php
                }
            }
            ?>
            </table>
        <?php
	break;
	
	case "update":
		$value 	= $_POST['value'];
		$crypto = decrypt($_POST['crypto']);
		$explode = explode('|', $crypto);
		$columnName = $explode[0];
		$rowId = $explode[1];
		$query = mysql_query("UPDATE `ach_config` SET `$columnName` = '$value' WHERE id = '$rowId' ");
	break;
	
}
?>