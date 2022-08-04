<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
  error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Administrator Login</h2>

<?php echo form_open('?baseController/login' , array('class' =>'form-horizontal','id' => 'login-form'));?>
  <!-- <div class="imgcontainer">
    <img src="<?php echo base_url();?>/uploads/user1-128x128.jpg" alt="Avatar" class="avatar" >
  </div> -->

  <div class="container">

    <?php if($message!=''){?>
      <div class="form-group has-feedback" id="mismatcherr" >
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <span class="text-danger"> <?php echo $message;?></span>
          </div>
      </div>
    <?php }?>
    <span id="messagetodisplay"></span>
    <label for="uname"><b>Username</b></label>
    <input type="text" name="email" onclick="remove_err('email_err')" id="email" placeholder="Enter Username" >
    <span id="email_err" class="text-danger"></span>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="password" onclick="remove_err('password_err')" name="password" placeholder="Enter Password">
    <span id="password_err" class="text-danger"></span>
        
    <button  onclick="login()">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

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