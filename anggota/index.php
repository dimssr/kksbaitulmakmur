<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Halaman Login</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">	  		
		      <form class="form-login" action="" method="post">		      	
		        <h2 class="form-login-heading">silahkan login</h2>
		        <div class="login-wrap">
	        	<?php 
				  include 'config/config.php';
				  if(isset($_POST['login'])){			                           
			                $level = trim(mysqli_real_escape_string($con, $_POST['level']));
			                if($level == "Anggota") {
			                	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
				                $pass_anggota = md5(trim(mysqli_real_escape_string($con, $_POST['pass_anggota'])));
			                	$sql_login = mysqli_query($con, "SELECT * FROM anggota WHERE username= '$username' AND pass_anggota = '$pass_anggota'") or die (mysqli_error($con));
			                if(mysqli_num_rows($sql_login) > 0){
			                    $data=mysqli_fetch_array($sql_login);
			                    $_SESSION['id_anggota'] = $data['id_anggota'];
			                    $_SESSION['username'] = $username;
			                    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			                    echo "<script>window.location='http://kksbaitulmakmur.site/anggota/dashboard/';</script>";
			                } else { ?>
			                    <div class="row">
			                        <div class="">
			                            <div class="alert alert-danger alert-dismissable" role="alert">
			                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			                                <strong>Login Gagal</strong> Username/Password Salah
			                            </div>
			                        </div>
			                    </div>
			                <?php
			                }
			                } elseif($level == "Nasabah") {
			                $username = trim(mysqli_real_escape_string($con, $_POST['username']));
			                $pass_nasabah= md5(trim(mysqli_real_escape_string($con, $_POST['pass_anggota'])));
		                	$sql_login = mysqli_query($con, "SELECT * FROM nasabah WHERE username= '$username' AND pass_nasabah = '$pass_nasabah'") or die (mysqli_error($con));
			                if(mysqli_num_rows($sql_login) > 0){
			                    $data=mysqli_fetch_array($sql_login);
			                    $_SESSION['id_nasabah'] = $data['id_nasabah'];
			                    $_SESSION['username'] = $username;
			                    $_SESSION['nm_lengkap'] = $data['nm_lengkap'];
			                    echo "<script>window.location='http://kksbaitulmakmur.site/anggota/dashboard-nasabah/';</script>";
			                    
			                } else { ?>
			                    <div class="row">
			                        <div class="">
			                            <div class="alert alert-danger alert-dismissable" role="alert">
			                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			                                <strong>Login Gagal</strong> Username/Password Salah
			                            </div>
			                        </div>
			                    </div>
			                <?php
			                }
			                }
			                
			            }
				  ?>
		            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
		            <br>
		            <input type="password" name="pass_anggota" class="form-control" placeholder="Password" required><br>
		            <select name="level" class="form-control" required>
		            	<option value="">--Level--</option>
		            	<option value="Anggota">Anggota</option>
		            	<option value="Nasabah">Nasabah</option>		            	
		            </select><br>
		            <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i> Login</button>
		            <button class="btn btn-secondary btn-block" onclick="window.location.href='http://kksbaitulmakmur.site/';"><i class="fa fa-arrow-left"></i> Kembali ke Landing Page</button>
		            <hr>		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot pass_anggota ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your pass_anggota.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>	
		          <!-- modal -->		
		      </form>	  		  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
