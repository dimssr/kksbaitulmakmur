<?php
$id_admin = @$_GET ['id_admin'];

mysqli_query($con,"delete from admin where id_admin = '$id_admin'") or die (mysqli_error($con));
?>   

<script type=" text/javascript">
	window.location.href="?page=admin-user";
</script>
