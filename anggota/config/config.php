<?php
date_default_timezone_set('Asia/Jakarta');
session_start();

$host="localhost";
$userdb="u625466052_ubmakmur";
$passdb="@354Dimas";
$namadb="u625466052_ubmakmur";
$con=mysqli_connect($host, $userdb, $passdb, $namadb);

function base_url($url = null){
	$base_url = "http://kksbaitulmakmur.site/admin";
	if($url != null){
		return $base_url."/".$url;
	}else{
		return $base_url;
	}
}

function base_url2($url = null){
    $base_url = "http://kksbaitulmakmur.site/anggota";
    if($url != null){
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}

$bulan = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desembar',
  );
  $bulanIndo = $bulan[date('m')];
?>