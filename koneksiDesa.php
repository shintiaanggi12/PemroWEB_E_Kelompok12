<?php

session_start();

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
  header("Location: hasilSurvDesa.php");
}

?>
