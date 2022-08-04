  <?php
  error_reporting(0);
?>
<section class="content-header">
  <h1>
     About School Management
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
                          <label>Name of School:</label>
                            <input type="text" id="Name1" name="Name1" value="<?=$t_aboutus->Name;?>" class="form-control" >
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>History:</label>
                          <textarea type="text" id="History1" name="History1" class="form-control summernote"><?=$t_aboutus->History;?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Vision:</label>
                          <input type="text" id="Vision1" name="Vision1" value="<?=$t_aboutus->Vision;?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Mission:</label>
                          <input type="text" id="Mission1" name="Mission1" value="<?=$t_aboutus->Mission;?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Motto:</label>
                          <input type="text" id="Motto1" name="Motto1" value="<?=$t_aboutus->Motto;?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="hidden" name="updateId" id="updateId" value="<?=$t_aboutus->Id;?>">
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
    function submitForm(){
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
        var url='<?php echo base_url();?>index.php?adminController/addingabout';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Newsinformation").serialize()}; 
        $("#Newsinformation").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
      }
  </script>
  
    
    