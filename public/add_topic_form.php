<?php
	require_once('db/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Create topic</title>
</head>
<body>
	<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
		<tr>
			<form id="form1" name="form1" method="post" action="db/add_topic.php">
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
						</tr>
						<tr>
							<td width="14%"><strong>Topic</strong></td>
							<td width="2%">:</td>
							<td width="84%">
								<input name="topic" type="text" id="topic" size="50" />
							</td>
						</tr>
						<tr>
							<td valign="top"><strong>Detail</strong></td>
							<td valign="top">:</td>
							<td>
								<textarea name="detail" cols="50" rows="3" id="detail"></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>
								<input type="submit" name="Submit" value="Submit" />
								<input type="reset" name="Submit2" value="Reset" />
							</td>
						</tr>
					</table>
				</td>
				<input type="hidden" name="id">
			</form>
		</tr>
	</table>
</body>
</html>

