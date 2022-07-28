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
                <img src="../NavPage/hambar.png" alt="">
                <p>Menu</p>
            </label>
        </div>
       <div class="nav-menu">
        <div class="nav-menu-header">
            <div class="logo">
                <a href="../home/home.html">
                    <img src="../NavPage/logo.png" alt="Mhss_logo">
                </a>
                <a href="../home/home.html">
                    <p>Motithang Higher Secondary School</p>
                </a>
            </div>
            <input type="checkbox" id="side-menu" class="hide">
            <div class=" close">
                <label for="side-menu" class = "menu">
                    <p >Close</p>
                    <img src="../NavPage/close.png" alt="">
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
                </div>
                <div class="nav-link-container">
                    <div class="announcement-links">
                        <a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/news/')">News and Events</a>
                        <a href="#"  onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/announcement/')">Announcements</a>
                    </div>
                    <div class="non-academic-links">
                        <label for="role" class = "role">Role</label>
                        <a href="">Policy</a>
                        <a href="../Alumni/alumni.html">Alumini</a>
                    </div>
                    <div class="academic-links">
                        <a href="../result/result.html">Results</a>
                        <a href="">Download</a>
                        <a href="">Academic Toppers</a>
                        <a href="../">Academic Calender</a>
                    </div>
                    <div class="about-us-links">
                        <a href="../about/about.html">About Motithang</a>
                        <a href="../Staff Profile/staffprofile.html">Staff Proflie</a>
                        <a href="../history/history.html">History</a>
                        <a href="../countryTopper/countrytopper.html">Country Toppers</a>
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
                            <a href="../newsEvents/NewsEvents.html">News and Events</a>
                            <a href="../announcements/announcement.html">Announcements</a>
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
                            <a href="../Alumni/alumni.html">Alumini</a>
                        </div>
                    </div>
                </div>
                <div class="academic-container">
                    <div class="label-container">
                        <label for="academic" class = "academic">Academic</label>
                    </div>
                    <div class="nav-link-container">
                        <div class="academic-links">
                            <a href="../result/result.html">Results</a>
                            <a href="">Download</a>
                            <a href="">Academic Toppers</a>
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
                            <a href="../about/about.html">About Motithang</a>
                            <a href="../Staff Profile/staffprofile.html">Staff Proflie</a>
                            <a href="../history/history.html">History</a>
                            <a href="../countryTopper/countrytopper.html">Country Toppers</a>
                        </div>
                    </div>
                </div>
                <div class="contact-us">
                    <div class="label-container">
                        <a href="../contactUs/contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
            
        </div>

       </div>
    </div>