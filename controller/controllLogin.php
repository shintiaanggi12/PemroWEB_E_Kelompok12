<?php

session_start();

// if( isset($_SESSION["login"]) ) {
// 	header("Location: dashboard.php");
// 	exit;
// };

$server = "localhost";
$user = "root";
$pass = "";
$database = "sdgs_desa";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));


if(isset($_POST["login"])) {
    // include "koneksi.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
	$_SESSION["username"] = $username;

    $result = mysqli_query($koneksi, "SELECT * FROM akun_user WHERE username='$username'");
    $hitung = mysqli_num_rows($result);

    if( $hitung === 1 ) {
        //prosedur seleksi password
        $fetch_pass = mysqli_fetch_assoc($result);
        $cek_pass = $fetch_pass['password'];
        if( $cek_pass !== $password) {
            echo '<script>
            alert("password salah!") </script>';
        }else{
            //set session
			$_SESSION["login"] = true;

			//cek remember me

			if( isset($_POST['remember']) ) {
				//buat cookie
				setcookie('login', 'true', time() + 60);
			}

			echo '<script>
            alert("login berhasil!") </script>';
			header("Location: dashboard.php");
        	exit;

        }
	}
}
?>
