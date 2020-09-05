<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
<form action="get_upload.php" method="POST" enctype="multipart/form-data">
	<table align="center">
		<tr>
		<td align="right">Current server:</td>
		<td><input size="50" type="text" name="server" value=""></td>
		</tr>
		<tr>
		<td align="right">Username:</td>
		<td><input size="50" type="text" name="user"  value="">
		</td>
		</tr>
		<tr>
		<td align="right">Password:</td>
		<td><input size="50" type="text" name="password" value="" ></td>
		</tr>
		<tr>
		<td align="right">Path on the Server:</td>
		<td><input size="50" type="text" name="pathserver" ></td>
		</tr>
		<tr>
		<td align="right">Select File to Upload:</td>
		<td><input name="userfile" type="file" size="50"></td>
		</tr>
		</table>
		<table align="center">
		<tr>
		<td align="center"><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>


<?php 
//имя файла, который нужно загрузить
$filep = $_FILES['userfile']['tmp_name']; 
$ftp_server = $_POST['server'];
$ftp_user_name = $_POST['user'];
$ftp_user_pass = $_POST['password'];
$paths = $_POST['pathserver'];
//имя файла на сервере после того, как вы его загрузите
$name = $_FILES['userfile']['name'];

$conn_id = ftp_connect($ftp_server);

// входим при помощи логина и пароля
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
// проверяем подключение
if ((!$conn_id) || (!$login_result)) {
       echo "FTP connection has failed!";
       echo "Attempted to connect to $ftp_server for user: $ftp_user_name";
       exit;
   } else {
       echo "Connected to $ftp_server, for user: $ftp_user_name";
   }

   // загружаем файл
$upload = ftp_put($conn_id, 'public_html/'.$paths.'/'.$name, $filep, FTP_BINARY);
// проверяем статус загрузки
if (!$upload) {
       echo "Error: FTP upload has failed!";
   } else {
       echo "Good: Uploaded $name to $ftp_server";
   }

   ftp_close($conn_id);


   set_time_limit(300);
?>

</body>
</html>