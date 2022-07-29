<body id="mainpublicContent">
    <div class="nav-bar">
        <div class="logo">
            <a href="../home/home.html">
                <img src="<?php echo base_url();?>upload/logo.png" alt="Mhss_logo">
            </a>
            <a href="../home/home.html">
                <p>Motithang Higher Secondary School</p>
            </a>
        </div>
        <input type="checkbox" id="side-menu" class="hide">
        <div class="menu">
            <label for="side-menu" class="menu">
                <img src="<?php echo base_url();?>upload/hambar.png" alt = "hamburger menu">
                <p>Menu</p>
            </label>
        </div>
       <div class="nav-menu">
        <div class="nav-menu-header">
            <div class="logo">
                <a href="../home/home.html">
                    <img src="<?php echo base_url();?>upload/logo.png" alt="Mhss_logo">
                </a>
                <a href="../home/home.html">
                    <p>Motithang Higher Secondary School</p>
                </a>
            </div>
            <input type="checkbox" id="side-menu" class="hide">
            <div class=" close">
                <label for="side-menu" class = "menu">
                    <p >Close</p>
                    <img src="<?php echo base_url();?>upload/close.png" alt="">
                </label>
                
            </div>
        </div>
        <div class="menu-body">
            <input type="radio" name = "nav-radio" id="announcement">
            <input type="radio" name = "nav-radio" id = "non-academic">
            <input type="radio" name = "nav-radio" onclick = "checkRole()" id = "academic">
            <input type="radio" name = "nav-radio" onclick = "checkRole()" id = "about-us">
            <input type="checkbox" id = "role">
            <div class="nav-maincontainer">

                <div class="full-size-nav">
                    <div class="label-container">
                    <label for="announcement" class = "announcement">Announcements</label>
                    <label for="non-academic" class = "non-academic">Non-Academic</label>
                    <label for="academic" class = "academic">Academic</label>
                    <label for="about-us" class = "about-us">About Us</label>
                    <a href="../contactUs/contact.html">Contact Us</a>
                    <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/login/')">Administrator Login</a>
                </div>
                <div class="nav-link-container">
                    <div class="announcement-links">
                        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/news/')">News and Events</a>
                        <a href="#"  onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/announcement/')">Announcements</a>
                    </div>
                    <div class="non-academic-links">
                        <label for="role" class = "role">Role</label>
                        <a href="">Policy</a>
                        <a href="index.php?baseController/loadpage/alumni/')">Alumini</a>
                    </div>
                    <div class="academic-links">
                        <a href="index.php?baseController/loadpage/result/')">Results</a>
                        <a href="">Download</a>
                        <a href="">Academic Toppers</a>
                        <a href="../">Academic Calender</a>
                    </div>
                    <div class="about-us-links">
                        <a href="index.php?baseController/loadpage/aboutus/')">About Motithang</a>
                        <a href="index.php?baseController/loadpage/staffprofiles/')">Staff Proflie</a>
                        <a href="index.php?baseController/loadpage/history/')">History</a>
                        <a href="index.php?baseController/loadpage/countrytopper/')">Country Toppers</a>
                    </div>
                </div>
                <div class="nav-sublink-container">
                    <div class="sub-links">
                        
                        <a href="">Management</a>
                        <a href="">Committe</a>
                        <a href="">Coordinator</a>
                        <a href="">Assistant</a>
                        <a href="">Captains</a>
                        <a href="">Others</a>
                    </div>
                </div>
            </div>
            <div class="mobile-nav">
                <div class="announcements-container">
                    <div class="label-container">
                        <label for="announcement" class = "announcement">Announcement</label>
                    </div>
                    <div class="nav-link-container">
                        <div class="announcement-links">
                            <a href="index.php?baseController/loadpage/NewsEvent/')">News and Events</a>
                            <a href="index.php?baseController/loadpage/announcement/')">Announcements</a>
                        </div>
                    </div>
                </div>
                <div class="non-academic-container">
                    <div class="label-container">
                        <label for="non-academic" class = "non-academic">Non-Academic</label>
                    </div>
                    <div class="nav-link-container">
                        <div class="non-academic-links">
                            <label for="role" class = "role">Role</label>
                            
                            <div class="nav-sublink-container">
                                <div class="sub-links">
                                    <a href="">Management</a>
                                    <a href="">Committe</a>
                                    <a href="">Coordinator</a>
                                    <a href="">Assistant</a>
                                    <a href="">Captains</a>
                                    <a href="">Others</a>
                                </div>
                            </div>
                            <a href="">Policy</a>
                            <a href="index.php?baseController/loadpage/alumni/')">Alumini</a>
                        </div>
                    </div>
                </div>
                <div class="academic-container">
                    <div class="label-container">
                        <label for="academic" class = "academic">Academic</label>
                    </div>
                    <div class="nav-link-container">
                        <div class="academic-links">
                            <a href="index.php?baseController/loadpage/result/')">Results</a>
                            <a href="">Download</a>
                            <a href="index.php?baseController/loadpage/academictopper/')">Academic Toppers</a>
                            <a href="">Academic Calender</a>
                        </div>

                    </div>
                </div>
                <div class="about-us-container">
                    <div class="label-container">
                        <label for="about-us" class = "about-us">About Us</label>
                    </div>
                    <div class="nav-link-container">
                        <div class="about-us-links">
                            <a href="index.php?baseController/loadpage/aboutus/')">About Motithang</a>
                            <a href="index.php?baseController/loadpage/staffprofiles/')">Staff Proflie</a>
                            <a href="index.php?baseController/loadpage/history/')">History</a>
                            <a href="index.php?baseController/loadpage/countrytopper/')">Country Toppers</a>
                        </div>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="label-container">
                        <a href="index.php?baseController/loadpage/contactus/')">Contact Us</a>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="label-container">
                        <a href="index.php?loginController/loadpage/login/')">Administrator Login</a>
                    </div>
                </div>
            </div>
        </div>
            
        </div>

       </div>
    </div>