<?php
$id_anggota = @$_GET ['id_anggota'];

mysqli_query($con,"delete from anggota where id_anggota = '$id_anggota'") or die (mysqli_error($con));
?>   

<script type=" text/javascript">
	window.location.href="?page=anggota";
</script>
