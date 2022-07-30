  <?php
  error_reporting(0);
?>
<section class="content-header">
  <h1>
      Add News & Announcement
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
                            <input type="text" id="Name" name="Name" class="form-control" >
                        </div>
                      </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <label>Description:</label>
                          <textarea type="text" id="Description" name="Description" class="form-control summernote"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <label>Upload News Images:<span class="text-danger">*</span></label><span style="color: red;"><i>(Image Size:780*480)</i></span>
                        <input type="file" id="images" onchange="checkfilesize(this,'images','Image_err','addBtn')" onclick="remove_err('Image_err')" name="Image" class="form-control">
                        <span id="Image_err" class="text-danger"></span>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Type:</label>
                          <select id="type" class="form-control" name="type">
                            <option value="">News & Announcement Type</option>
                            <option value="News">News</option>
                            <option value="Announcement">Announcement</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      </div>
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <button type="button"  onclick="submitForm()" class="btn btn-success fa-pull-right btn-block"> Save</button>
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
        var url='<?php echo base_url();?>index.php?adminController/addingNews';
        var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#Newsinformation").serialize()}; 
        $("#Newsinformation").ajaxSubmit(options);
        setTimeout($.unblockUI, 600); 
      }
  </script>
  
    
    