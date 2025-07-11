<?php
$rek_tabungan = @$_GET ['rek_tabungan'];

mysqli_query($con,"delete from tabungan_anggota where rek_tabungan = '$rek_tabungan'") or die (mysqli_error($con));
mysqli_query($con,"delete from total_tabungan_anggota where rek_tabungan = '$rek_tabungan'") or die (mysqli_error($con));
?>   

<script type=" text/javascript">
	window.location.href="?page=tabungan_anggota";
</script>
