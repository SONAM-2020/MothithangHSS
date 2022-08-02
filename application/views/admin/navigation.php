<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>upload/<?php echo $this->session->userdata('Image');?>" onerror="this.src='<?php echo base_url();?>upload/user1-128x128.jpg'" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('UserName');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AddUsers/')">
            <i class="fa fa-laptop"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i>
            <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Addslider/')">Home Slider</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/newslist/')">News & Announcement</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/rules/')"><i class="fa fa-laptop"></i>
            <span>Non-Academic Mgnt.</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i>
            <span>Academic Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/topper/')"><i class="fa fa-circle-o"></i>Academic Topper</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/offer/')"><i class="fa fa-circle-o"></i>Academic Calender</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i>
            <span>School Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/offer/')"><i class="fa fa-circle-o"></i>History</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/offer/')"><i class="fa fa-circle-o"></i>Staff Management</a></li>
            <li><a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/offer/')"><i class="fa fa-circle-o"></i>Motithang Finest</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Guidelines/')">
            <i class="fa fa-laptop"></i>
            <span>Application Guidelines</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/userprofile/<?php echo $this->session->userdata('User_Id');?>')">
            <i class="fa fa-laptop"></i>
            <span>My Account</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
      </ul>
    </section>
  </aside>



