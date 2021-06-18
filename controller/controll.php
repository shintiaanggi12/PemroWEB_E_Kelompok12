<?php

session_start();


$server = "localhost";
$user = "root";
$pass = "";
$database = "sdgs_desa";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

// controll login
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
          echo "<script>
              alert('Login gagal !');
               </script>";
        }else{
            //set session
			$_SESSION["login"] = true;

			//cek remember me

			if( isset($_POST['remember']) ) {
				//buat cookie
				setcookie('login', 'true', time() + 60);
			}

      echo "<script>
          alert('Login berhasil !');
          document.location='dashboard.php';
           </script>";
			// header("Location: dashboard.php");
        	exit;

        }
	}
}

// controll survey desa

if(isset($_POST["simpan"])) {
  $emailDesa = $_POST["emailDesa"];
  $webDesa = $_POST["webDesa"];
  $facebookDesa = $_POST["facebookDesa"];
  $twitterDesa = $_POST["twitterDesa"];
  $instagramDesa = $_POST["instagramDesa"];
  $youtubeDesa = $_POST["youtubeDesa"];
  $status = $_POST["status"];
  $jmlRT = $_POST["jmlRT"];
  $jmlRW = $_POST["jmlRW"];
  $SKdesa = $_POST["SKdesa"];
  $nomerSK = $_POST["nomerSK"];
  $peta = $_POST["peta"];
  $nomerSKBUPATI = $_POST["nomerSKBUPATI"];
  $luasDesa = $_POST["luasDesa"];
  $lokasiDesa = $_POST["lokasiDesa"];
  $tipografi = $_POST["tipografi"];
  $jmlWARGA = $_POST["jmlWARGA"];
  $kantorDesa = $_POST["kantorDesa"];
  $kepemilikanKantor = $_POST["kepemilikanKantor"];
  $lokasiKantor = $_POST["lokasiKantor"];
  $penyelenggaraan = $_POST["penyelenggaraan"];
  $jamKerja = $_POST["jamKerja"];
  $koordinatLintang = $_POST["koordinatLintang"];
  $koordinatBujur = $_POST["koordinatBujur"];
  $lintangUtara = $_POST["lintangUtara"];
  $lintangSelatan = $_POST["lintangSelatan"];
  $ketinggian = $_POST["ketinggian"];
  // $emailDesa = $_POST["emailDesa"];
  // $password = $_POST["password"];
	$_SESSION["emailDesa"] = $emailDesa;
  $_SESSION["webDesa"] = $webDesa;
  $_SESSION["facebookDesa"] = $facebookDesa;
  $_SESSION["twitterDesa"] = $twitterDesa;
  $_SESSION["instagramDesa"] = $instagramDesa;
  $_SESSION["youtubeDesa"] = $youtubeDesa;
  $_SESSION["status"] = $status;
  $_SESSION["jmlRT"] = $jmlRT;
  $_SESSION["jmlRW"] = $jmlRW;
  $_SESSION["SKdesa"] = $SKdesa;
  $_SESSION["nomerSK"] = $nomerSK;
  $_SESSION["peta"] = $peta;
  $_SESSION["nomerSKBUPATI"] = $nomerSKBUPATI;
  $_SESSION["luasDesa"] = $luasDesa;
  $_SESSION["lokasiDesa"] = $lokasiDesa;
  $_SESSION["tipografi"] = $tipografi;
  $_SESSION["jmlWARGA"] = $jmlWARGA;
  $_SESSION["kantorDesa"] = $kantorDesa;
  $_SESSION["kepemilikanKantor"] = $kepemilikanKantor;
  $_SESSION["lokasiKantor"] = $lokasiKantor;
  $_SESSION["penyelenggaraan"] = $penyelenggaraan;
  $_SESSION["jamKerja"] = $jamKerja;
  $_SESSION["koordinatLintang"] = $koordinatLintang;
  $_SESSION["koordinatBujur"] = $koordinatBujur;
  $_SESSION["lintangUtara"] = $lintangUtara;
  $_SESSION["lintangSelatan"] = $lintangSelatan;
  $_SESSION["ketinggian"] = $ketinggian;
  echo "<script>
      alert('Simpan data suksess!');
      document.location='hasilSurvDesa.php';
       </script>";
  // header("Location: hasilSurvDesa.php");
}

// simpan survey Individu
if(isset($_POST["simpan2"])) {
  $noRTRW = $_POST["noRTRW"];
  $noKK = $_POST["noKK"];
  $NIK = $_POST["NIK"];

  $_SESSION["noRTRW"] = $noRTRW;
  $_SESSION["noKK"] = $noKK;
  $_SESSION["NIK"] = $NIK;
  echo "<script>
      alert('Simpan data suksess!');
      document.location='surveyIndividu.php';
       </script>";
}

// controll simpan database
//jika tombol simpan diklik
	if(isset($_POST['upload']))
	{
			//Data akan disimpan Baru
      $email = $_POST["emailDesa"];
      $web = $_POST["webDesa"];
      $facebook = $_POST["facebookDesa"];
			$simpan = mysqli_query($koneksi, "INSERT INTO surveyDesa (email, web, facebook)
										  VALUES ('$email','$web','$facebook')
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='dashboard.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='dashboard.php';
				     </script>";
			}
		}

    if(isset($_POST['upload2']))
  	{
  			//Data akan disimpan Baru
        $email = $_SESSION["emailDesa"];
        $web = $_SESSION["webDesa"];
        $facebook = $_SESSION["facebookDesa"];
  			$simpan = mysqli_query($koneksi, "INSERT INTO surveyDesa (email, web, facebook)
  										  VALUES ('$email','$web','$facebook')
  										 ");
  			if($simpan) //jika simpan sukses
  			{
  				echo "<script>
  						alert('Simpan data suksess!');
  						document.location='dashboard.php';
  				     </script>";
  			}
  			else
  			{
  				echo "<script>
  						alert('Simpan data GAGAL!!');
  						document.location='dashboard.php';
  				     </script>";
  			}
  		}

      if(isset($_POST['upload3']))
    	{
    			//Data akan disimpan Baru
          $noRTRW = $_SESSION["noRTRW"];
          $noKK = $_SESSION["noKK"];
          $NIK = $_SESSION["NIK"];
    			$simpan = mysqli_query($koneksi, "INSERT INTO surveyIndividu (no_RTRW, no_KK, NIK)
    										  VALUES ('$noRTRW','$noKK','$NIK')
    										 ");
    			if($simpan) //jika simpan sukses
    			{
    				echo "<script>
    						alert('Simpan data suksess!');
    						document.location='dashboard.php';
    				     </script>";
    			}
    			else
    			{
    				echo "<script>
    						alert('Simpan data GAGAL!!');
    						document.location='dashboard.php';
    				     </script>";
    			}
    		}


?>
