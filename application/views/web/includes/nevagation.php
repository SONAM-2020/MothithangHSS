
    <header class="header rs-nav header-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="faq-1.html"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                            <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul>
                            <li>
                                <select class="header-lang-bx">
                                    <option data-icon="flag flag-uk">English UK</option>
                                    <option data-icon="flag flag-us">English US</option>
                                </select>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <!-- Header Logo ==== -->
                    <div class="menu-logo">
                        <a href="index.html"><img src="<?php echo base_url();?>assest/website/assets/images/logo-white.png" alt=""></a>
                    </div>
                    <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                <!-- Search Button ==== -->
                                <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
                        <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
                    <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                        <div class="menu-logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav"> 
                            <li class="active"><a href="#">Home</a>
                            </li>
                            <li><a href="javascript:;">Announcement <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">News & Events</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Announcement</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Non-Academic <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Rule</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Policy</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Alumini</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Academic <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Result</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Downloads</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Academic Topper</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Academic Calender</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">About Us <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">About Mothithang</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Staff Profile</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">History</a></li>
                                    <li><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Mothithang Finist</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#" onclick="loadpage('<?php echo base_url();?>index.php?baseController/loadpage/aboutus/')">Contact Us</a>
                        </ul>
                        <div class="nav-social-link">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
