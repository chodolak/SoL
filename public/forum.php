<?php
	require_once('db/config.php');

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect");
	mysql_select_db(DB_DATABASE)or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysql_query($sql);
?>
<head>
<link rel="stylesheet" href="style/forum.css" media="screen">
<link rel="icon" type="image/png" href="images/favicon.png">
</head>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
	<tr id="forumHeader">
		<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
		<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
		<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
	</tr>

	<?php
		while($rows=mysql_fetch_array($result)){ // Start looping table row
	?>

	<tr>
		<td style="text-align: center;" bgcolor="#FFFFFF">
			<?php echo $rows['id']; ?>
		</td>
		<td bgcolor="#FFFFFF">
			<a href="view_topic?id=<?php echo $rows['id']; ?>">
				<?php echo $rows['topic']; ?>
			</a>
			<BR>
		</td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
	</tr>

	<?php
		// Exit looping and close connection
		}
		mysql_close();
	?>
	<tr id="forumFooter">
		<td colspan="5" align="right" bgcolor="#E6E6E6">
			<a href="add_topic_form"><strong>Create New Topic</strong></a>
			<span>|</span>
			<a href="index">Back to home page</a>
		</td>
	</tr>
</table>
