<?php
  error_reporting(0);
?>
<section class="content-header">
  <h1>
      News and Announcement
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
          <h3 class="box-title">News and Announcement</h3>
          <span><button class="btn btn-success fa-pull-right" onclick="addnews()" type="button"><i class="fa fa-plus"></i> Add News and Announcement</button></span>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>News Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>Type</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($t_news as $i=> $event): ?>
            <tr>
              <td><?=$i+1?></td>
              <td><?php echo $event['Name'];?></td>
              <td><?php echo $event['Description'];?></td>
              <td><img style="width: 100px; height: 100px;" src="<?php echo base_url();?><?php echo $event['Image'];?>"></td>
              
              <td><?php echo $event['Date'];?></td>
              <td><?php echo $event['Type'];?></td>
              <td>
                <?php if($event['Status']=="Active"){ ?><span class="label label-success"><?php echo $event['Status'];?></span>
                      <?php } else{?>   
                          <span class="label label-danger"><?php echo $event['Status'];?></span>
                      <?php }?>

              </td>

              <td>
                <button type="button" class="btn btn-primary btn-block" onclick="editnews('<?php echo $event['Id'];?>')" type="button"><i class="fa fa-eye"></i> View/Edit</button> 
                <button type="button" class="btn btn-block btn-danger"  onclick="deletenews('<?php echo $event['Id']?>')" ><i class="fa fa-edit"></i>Delete</button> 
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

 function addnews (id){
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
  var url='<?php echo base_url();?>index.php?adminController/loadpage/addnews/';
  $("#mainContentdiv").load(url);
    setTimeout($.unblockUI, 1000); 
}
  
  function editnews (id){
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
  var url='<?php echo base_url();?>index.php?adminController/loadpage/editnews/'+id;
  $("#mainContentdiv").load(url);
    setTimeout($.unblockUI, 1000); 
}
   function deletenews(id){
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
        var url='<?php echo base_url();?>index.php?adminController/Deletenews/'+id+'/newslist';
         $("#mainContentdiv").load(url);
         setTimeout($.unblockUI, 1000);
    }
  </script>
   