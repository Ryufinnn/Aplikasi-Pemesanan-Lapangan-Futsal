<?php
	include_once '../config/koneksi.php';

	$nama	= mysqli_escape_string($_POST['username']);
	$pass	= mysqli_escape_string($_POST['password']);

	$sql	= mysqli_query("SELECT * FROM admin WHERE username='$nama' && password='$pass'");
	$data	= mysqli_fetch_array($sql);

	if(mysqli_num_rows($sql) > 0){
		session_start();
		$_SESSION['id_user']	= $data['id_user'];;
		$_SESSION['username']	= $data['username'];
		$_SESSION['password']	= $data['password'];
		
		echo "<script language=javascript>
				window.location='home.php';
				</script>";
		exit;
		
	}else{
		echo "<script language=javascript>
				window.alert('Login GAGAL');
				history.back();
				</script>";
		exit;
	}
?>