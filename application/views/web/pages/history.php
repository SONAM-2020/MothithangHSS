<body>
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
                <img src="<?php echo base_url();?>upload/hambar.png" alt="">
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
            <input type="radio" name = "nav-radio" onclick = "checkRole()" id = "announcement">
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
                        <a href="../newsEvents/NewsEvents.html">News and Events</a>
                        <a href="../announcements/announcement.html">Announcements</a>
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
    <div class="img-container">
        <img src="<?php echo base_url();?>upload/Mhss 1.png" alt="image" class="image1">
        <p class="historyTopic">HISTORY</p>
    </div>
    <nav>
        <ul class="nav">
           <a href="../about/about.html"><b><li>About Us /</li></b></a> 
            <a href="./history.html"><li>History of MHSS</li></a>
           <a href="../countryTopper/countrytopper.html"><li>Country Topper</li></a>
            <a href="../Staff Profile/staffprofile.html"><li>Staff Profiles</li></a>
        </ul>
    </nav>
    <hr width="100%">
    <div class="history">
        Motithang Higher Secondary School, located in Motithang, which means an abode of pearls,
        was established on April 1, 1975. When it started it was known as Motithang Central School.
        The school had one building and a total student population of two hundred and thirty-five.
        There were classes ranging from one to eight with fourteen teachers including the principal.
        <br><br>
        
        The school was then upgraded to a junior high school level with the phasing out of classes one
        and two, and upgrading of the school till class ten in 1989. One primary level was phased out
        every year till the school became a full-fledged high school with classes ranging from seven to eight.
        <br><br>
        
        The school was upgraded to a higher secondary in 2006 with Mrs. Maina Kharga as the principal. The
        school also had its first All Bhutan Class Ten Topper in 2000 under the leadership of its then
        principal Mrs. Maina Kharga, making it one of the top high schools in the country. From then
        onwards, the school has produced many such toppers.
    </div>

    <div class="prev_principals">
        <p> LIST OF PRINCIPALS TILL DATE</p>
    </div>

    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>2013</b>
    </div>
    <div class="prin_container">
        <div class="first">
        </div>
        
        <div class="last">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MR. SANGAY KHANDU
                </p>
            </div>
        </div>
    </div>
    
    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>2012</b>
    </div>
    <div class="prin_container">
        <div class="first">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MR. NORBU GYELTSHENS
                </p>
            </div>
        </div>
        
        <div class="last"></div>
    </div>

    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>2007</b>
    </div>
    <div class="prin_container">
        <div class="first">
        </div>

        <div class="last">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MRS. KARMA ZANGMO
                </p>
            </div>
        </div>
    </div>

    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>1999</b>
    </div>
    <div class="prin_container">
        <div class="first">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MRS. MAINA KHARGA
                </p>
            </div>
        </div>

        <div class="last"></div>
    </div>
    
    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>1994</b>
    </div>
    <div class="prin_container">
        <div class="first">
        </div>
        
        <div class="last">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MRS. PEM SHERAB
                </p>
            </div>
        </div>
    </div>
    
    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>1988</b>
    </div>
    <div class="prin_container">
        <div class="first">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    AUM GAGEY LHAM
                </p>
            </div>
        </div>
        
        <div class="last"></div>
    </div>
    
    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>1987</b>
    </div>
    <div class="prin_container">
        <div class="first"></div>
        
        <div class="last">
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MRS. NAMGAY OM
                </p>
            </div>
        </div>
    </div>
    
    <div class="year">
        <i class="fa-solid fa-circle"></i> <br>
        <b>1975</b>
    </div>
    <div class="prin_container">
        <div class="first noborder" >
            <img src="<?php echo base_url();?>upload/principal.png" alt="principal" class="principal_img">
            <div class="name-container">
                <p class="Pname">
                    MR. A DHAR
                </p>
            </div>
        </div>
        
        <div class="last"></div>
        
        <div class="last-gap"></div>
    </div>
    
<script src = "../NavPage/nav.js"></script>
<script src="https://kit.fontawesome.com/868d304e73.js" crossorigin="anonymous"></script>
</body>