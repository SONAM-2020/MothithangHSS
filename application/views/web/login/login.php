<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Motithang Higher Secondary School</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assest/website/style.css">
</head>
<style type="text/css">
  .button1 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
  }
</style>
<body id="mainpublicContent">
<div id="login-form-wrap">
  <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
    <div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-la-2"></div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-la-8">
      <h3> Administrator Login</h3>
    <?php echo form_open('?baseController/login' , array('class' =>'form-horizontal','id' => 'login-form'));?>
    <?php if($message!=''){?>
      <div class="form-group has-feedback" id="mismatcherr" >
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="text-danger"> <?php echo $message;?></span>
          </div>
      </div>
    <?php }?>
    <span id="messagetodisplay"></span>
    <label>Email Address</label>
    <input type="email" name="email" onclick="remove_err('email_err')" id="email">
    <span id="email_err" class="text-danger"></span>
    <label>Password</label>
    <input type="password" id="password" onclick="remove_err('password_err')" name="password" >
    <span id="password_err" class="text-danger"></span>
    <br>
    <button class="button1" onclick="login()">Login</button>
    <br><br><br>
  </form>
</div>
</div>
</div>
</div>


<script>
function login(){
  if(validate()){
      $.blockUI
      ({ 
        css: 
        { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
        } 
      });
     $('#loginform').submit();
      setTimeout($.unblockUI, 600);
  }
}
function validate(){
  var retval=true;
  if($('#email').val()==""){
    $('#email_err').html('Please provide your email');
    retval=false;
  }
  if($('#password').val()==""){
     $('#password_err').html('Your password is required'); 
     retval=false;
  }
  return retval;
}
function remove_err(err_Id){
  $('#'+err_Id).html('');
}

function removevalidationhceckbox(errid,id){
    if($('#'+id).prop('checked')){
         $('#'+errid).html('');
    }
}
   function loadpage(url){
    $.blockUI
        ({ 
          css: 
          { 
              border: 'none', 
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
          } 
        });
      $("#mainpublicContent").load(url);
      setTimeout($.unblockUI, 1000); 
    }
</script>
</body>
</html>