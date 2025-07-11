<?php
$id_produk = @$_GET ['id_produk'];

mysqli_query($con,"delete from produk_bmt where id_produk = '$id_produk'") or die (mysqli_error($con));
?>   

<script type=" text/javascript">
	window.location.href="?page=produk";
</script>
