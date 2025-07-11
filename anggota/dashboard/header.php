<?php 
include '../config/config.php';
if(!isset($_SESSION['username'])){
  echo "<script>window.location='".base_url('')."';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>KKS Baitul Makmur Barokah</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('') ?>/assets/css/bootstrap.css" rel="stylesheet">
     <link href="<?php echo base_url('') ?>/assets/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('') ?>/assets/select2/dist/css/select2-bootstrap.min.css" rel="stylesheet" />
   
    <!-- Datatables CSS -->
    <link href="<?php echo base_url('') ?>/assets/css/datatables.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('') ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('') ?>/assets/css/style-responsive.css" rel="stylesheet">
    <script src="<?php echo base_url('') ?>/assets/ckeditor/ckeditor.js"></script>
     <link rel="stylesheet" href="<?php echo base_url('') ?>/assets/css/custom.css">

    <script language="javascript">
    function getkey(e)
    {
    if (window.event)
       return window.event.keyCode;
    else if (e)
       return e.which;
    else
       return null;
    }
    function goodchars(e, goods, field)
    {
    var key, keychar;
    key = getkey(e);
    if (key == null) return true;
     
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();
    goods = goods.toLowerCase();
     
    // check goodkeys
    if (goods.indexOf(keychar) != -1)
        return true;
    // control keys
    if ( key==null || key==0 || key==8 || key==9 || key==27 )
       return true;
        
    if (key == 13) {
        var i;
        for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
                break;
        i = (i + 1) % field.form.elements.length;
        field.form.elements[i].focus();
        return false;
        };
    // else return false
    return false;
    }
    </script>
  </head>
  <body>

  <section id="container" >
      <!--header start-->
      <header class="header black-bg" style="background-color: #2e7d32; color: white;">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo" style="color: #ffeb3b;"><b>KKS Baitul Makmur Barokah</b></a>
    <!--logo end-->

    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="http://kksbaitulmakmur.site/anggota/logout.php" style="background-color: #f4511e; color: white; border-radius: 5px; padding: 5px 15px;">Logout</a></li>
        </ul>
    </div>
      </header>

      <!--header end-->