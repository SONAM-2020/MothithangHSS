<?php header('Access-Control-Allow-Origin: *'); ?>
<?php $this->load->view('web/includes/header.php'); ?> 
<body id="bg">
    <div id="mainpublicContent">
      <div class="page-wraper">
      <?php $this->load->view('web/includes/nevagation.php'); ?>
    	<?php $this->load->view('web/includes/home.php'); ?> 
    </div>
  <?php
      $this->load->view('web/includes/footer.php');
  ?>
 
