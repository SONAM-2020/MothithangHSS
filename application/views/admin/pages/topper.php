<?php
  error_reporting(0);
?>
<section class="content-header">
  <h1>
      Academic Management
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
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Creating Academic Topper</h3>
          <span><button class="btn btn-success fa-pull-right" onclick="addinfo()" type="button"><i class="fa fa-plus"></i> Add Academic Topper</button></span>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Photo</th>
              <th>Percentage(%)</th>
              <th>Class</th>
              <th>Year</th>
              <th>Type</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($t_academic_topper as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['Name'];?></td>
               <td><img style="width: 100px; height: 100px;" src="<?php echo base_url();?><?php echo $event['image'];?>"></td>
              <td><?php echo $event['Percentage'];?></td>
              <td><?php echo $event['Class'];?></td>
              <td><?php echo $event['Year'];?></td>
              <td><?php echo $event['Type'];?></td>
              <td> 
                 <button type="button" class="btn btn-block btn-danger"  onclick="deleteuser('<?php echo $event['Id']?>')" ><i class="fa fa-edit"></i>Delete</button> 
              </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="modal modal-default" id="addusersDetails">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header" style="background: green;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span id="medelheaderspan"></span></h4>
          </div>
          <?php echo form_open('#' , array('class' => 'form-horizontal validatable','id'=>'addformId', 'enctype' => 'multipart/form-data'));?>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Name:<span class="text-danger">*</span></label>
                            <input type="text" id="Name" name="Name" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Images</label>
                             <label>Upload Files (PDF):<span class="text-danger">*</span></label>
                            <input type="file" id="images"  name="Image" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Percentage:<span class="text-danger">*</span></label>
                            <input type="text" id="Percentage" name="Percentage" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Class:<span class="text-danger">*</span></label>
                          <select id="Class" class="form-control" name="Class">
                            <option value="">Select Class</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11 Arts">11 Arts</option>
                            <option value="11 Commerce">11 Commerce</option>
                            <option value="11 Science">11 Science</option>
                            <option value="12 Arts">12 Arts</option>
                            <option value="12 Commerce">12 Commerce</option>
                            <option value="12 Science">12 Science</option>
                          </select>
                          <span id="status_err" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Year:<span class="text-danger">*</span></label>
                            <input type="text" id="Year" name="Year" class="form-control">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                          <label>Topper Type:<span class="text-danger">*</span></label>
                          <select id="type" class="form-control" name="type">
                            <option value="">Select Topper Type</option>
                            <option value="BCSE">BCSE</option>
                            <option value="BHSEC">BHSEC</option>
                            <option value="Academic Topper">Academic Topper</option>
                          </select>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addusersinfo()">Save changes</button>
              </div>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
  setTimeout(function(){
      $('#messageId').hide();
  }, 5000);
 $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
 function addinfo(){
    $('#actiontype').val('add');
    $('#medelheaderspan').html('Upload Rules (pdf)');
    $('#btnspan').html('<i class="fa fa-save"></i> Upload Rules');
    $('#addusersDetails').modal('show');
  }
function addusersinfo(){
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
      var url='<?php echo base_url();?>index.php?adminController/addingtopper';
      var options = {target: '#mainContentdiv',url:url,type:'POST',data: $("#addformId").serialize()}; 
      $("#addformId").ajaxSubmit(options);
      setTimeout($.unblockUI, 600); 
      $('#addusersDetails').modal('hide');
}
     function deleteuser(id){
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
        var url='<?php echo base_url();?>index.php?adminController/deletingtopper/'+id+'/topper';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
  </script>
   