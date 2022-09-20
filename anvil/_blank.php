<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anvil | Blank Canvas</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= THEME_DIR ?>assets/components/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= THEME_DIR ?>assets/components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= THEME_DIR ?>assets/components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= THEME_DIR ?>assets/css/LTE.css">
  <link rel="stylesheet" href="<?= THEME_DIR ?>assets/css/skins/skin-anvil-default.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500">

</head>

<body class="hold-transition skin-anvil-default fixed sidebar-mini">
<div class="wrapper">

  <?php include_once('inc/header.php');?>

  <?php include_once('inc/main-sidebar.php');?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php
        // Needs updating
        // we're simply looking for the Module name
        if (isset($view_module)) {
          echo ucfirst($view_module);
        }
        else {
          echo ucfirst(segment(1));
        }
        ?> :
        <small><?= $headline ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <?php
       //
       echo Template::display($data)
      ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('inc/footer.php');?>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?= THEME_DIR ?>assets/components/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= THEME_DIR ?>assets/components/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= THEME_DIR ?>assets/components/jquery/jquery.slimscroll.min.js"></script>
<!-- App -->
<script src="<?= THEME_DIR ?>assets/js/lte.js"></script>

</body>
</html>
