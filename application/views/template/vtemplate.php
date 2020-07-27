<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link rel="shortcut icon" href="assets/images/lambang_crast.png" width="20px">
	<title>Crast Radio FM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/lambang_crast.png">
	
	<!-- CSS tambahan untuk halaman tertentu -->
  <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/lambang_crast.png" width="20px">
  <title>Crast FM</title>
<?php
	if (isset($css)) {
		$this->load->view($css);
	}
	?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mediaelementplayer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fl-bigmug-line.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/header.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/homearticle.css">
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
	<link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet">
    
</head>

<?php
        $this->load->view('template/header.php');		
		?>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	
       
		
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
			
			<!-- ============================================================== -->
			<!-- End Bread crumb and right sidebar toggle -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			
			<div class="container-fluid" >
				<!-- Content here-->
				<?php if (isset($content)) {
					$this->load->view($content);
				}
				?>
			</div>
			
			</body>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
	
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
	
	
	<div class="clr"></div>
	<footer class="footer ">
            <?php $this->load->view('template/footer.php'); ?>
			</footer>
	
