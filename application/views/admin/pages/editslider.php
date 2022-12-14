  <?php
  error_reporting(0);
?>
<section class="content-header">
  <h1>
      Home Slider Management
  </h1>
</section>
<section class="content">
      <?php  
        if($message!='Undefined' && $message!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$message?></h5>
              </div>
          </div>
      <?php
      } if($messagefail!='Undefined' && $messagefail!=''){
      ?>
      <div class="row" id="messageId">
              <div class="col-xs-12 col-sm-12 col-md-12 col-la-12">
                  <h5 style="text-align: center;"><?=$messagefail?></h5>
              </div>
          </div>
      <?php
      }
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-body">
              <?php echo form_open('#' , array('class' => 'form-horizontal validatable', 'enctype' => 'multipart/form-data','id'=>'Newsinformation'));?>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Name:</label>
                            <input type="text" id="Name1" name="Name1" class="form-control" value="<?=$t_slider->Name;?>">
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Description:</label>
                          <textarea type="text" id="Description1" name="Description1" class="form-control summernote"><?=$t_slider->Desicription;?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label>Slider Images:</label><span style="color: red;"><i>(Recommended Size:870x370px)</i></span>
                        <img src="<?php echo base_url();?>uploads/slider<?=$t_slider->Image;?>" alt="no imaged" onerror="this.src='<?php echo base_url();?>upload/user.png'" width="30%" align="left">
                        <input type="file" id="Image" name="Image">
                        Choose image to change
                        <input type="hidden" name="currentlogoinivalue" value="<?=$t_slider->Image;?>">
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="hidden" name="updateId" id="updateId" value="<?=$t_slider->Id;?>">
                        <button type="button"  onclick="submitForm()" class="btn btn-success fa-pull-right btn-block"> Save Changes</button>
                      </div>
                    </div>
                   </div>
                  
              </div>
            </from>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">
  $('.summernote').summernote({
      height:250
    });
</script>
<script>
    function validate(){
      let returnt=true;
      if($('#name').val()==""){
        $('#name_err').html('Please mention Title');
        $('#name').focus();
        returnt=false;
      }
      if($('#description').val()==""){
        $('#description_err').html('Please mention Description');
        $('#description').focus();
        returnt=false;
      }
      return returnt;
    }
    function submitForm(){
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
        var url='<?php echo base_url();?>index.php?adminController/Editslider';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Newsinformation").serialize()}; 
        $("#Newsinformation").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
      }
    }
  </script>
  
    
    