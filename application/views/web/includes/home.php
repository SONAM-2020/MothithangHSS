<div class="home-content">
        <div class="slider-container">
            <input type="radio" checked = true class = "1" name = "home-slider-btn" id = "home-slide1">
            <div class="slider-nav">
                <label for="home-slide1" class = "slider-btn"></label>
            </div>
            <div class="auto-slidenav">
                <div class="auto-slide1"></div>
            </div>
            <?php foreach($t_homeslider as $i=> $event): ?>
            <div class="slider first-slide">
                <img src="<?php echo base_url();?>uploads/slider/<?php echo$event['Image'];?>"></" alt="">
                <div class="slider-content">
                    <h1><?php echo $event['Name'];?></h1>
                    <p class = "home-center"><?php echo $event['Desicription'];?></p>
                    <a href= "<?php echo $event['URL'];?>" class = "home-center"><button>Learn More</button></a>
                </div>
            </div>
            <?php endforeach;?>              
            
        </div>
        <div class="mi-vi">
        <div class="mivi-container">
            <div class="mivi-slider">
            <input type="radio" name = "mivi-slider-btn" class = "misson-btn" checked = true id = "mission">
            <input type="radio" name = "mivi-slider-btn" class = "vision-btn" id = "vision">
            <div class="home-mission">
                <h1>MISSION</h1>
                <p>Cultivate a conductive and nurturing learning environment
                     that enhances academic excellence, and produces nationally rooted, globally competent 
                     individuals, governed by the principles of Gross National Happiness. </p>
                    </div>
            <div class="home-vision">
                <h1>VISION</h1>
                <p>To be a model institution of learning based 
                    on the values of ‘<i>Tha Damtse</i>’ and ‘<i>Ley-Jum-Drey </i>’, guided 
                    by the principles of Gross National Happiness.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="an-ca-container">
        <div class="announcement-container">
            <h1>ANNOUNCEMENT</h1>
            <div class="division"></div>
            <div class="announcement">
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, labore error itaque ad amet rem modi maxime explicabo harum, doloribus sed!</h3>
                <p class = "an-date">June 6, 2022</p>
            </div>
            <div class="division"></div>
            <div class="announcement">
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, labore error itaque ad amet rem modi maxime explicabo harum, doloribus sed!</h3>
                <p class = "an-date">June 6, 2022</p>
            </div>
            <div class="division"></div>
            <div class="announcement">
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, labore error itaque ad amet rem modi maxime explicabo harum, doloribus sed!</h3>
                <p class = "an-date">June 6, 2022</p>
            </div>
            <div class="division"></div>
            <div class = "View-link">
                <a href="../announcements/announcement.html">View More<i class="fa-solid fa-circle-right"></i></a>
            </div>
        </div>
        <div class="calender-container">
            <h1>Calender</h1>
            <div class="division"></div>
            <div class="calender">
                <div class="calender-date">
                    <p>8</p>
                    <p>JUN 2022</p>
                </div>
                <h3>Inter-House Debate</h3>
            </div>
            <div class="calender">
                <div class="calender-date">
                    <p>15</p>
                    <p>AUG 2022</p>
                </div>
                <h3>Orientation for Students before Vacation</h3>
            
            </div>
            <div class="calender">
                <div class="calender-date">
                    <p>31</p>
                    <p>AUG 2022</p>
                </div>
                <h3>Reporting date after vacation</h3>
            </div>
            <div class = "View-link">
                <a href="">View More<i class="fa-solid fa-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="staff-slider-container">
    <h1>Meet Our Staff Members</h1>
    <div class="staff-division">
        <div class="division-line"></div>
    </div>
    <div class="staff">
        <div class="staff-slider">
            <input type="radio" name = "staff-slider-radio" checked = true id = "slidebutton0" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton1" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton2" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton3" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton4" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton5" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton6" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton7" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton8" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton9" style = "display: none">
                <input type="radio" name = "staff-slider-radio" id = "slidebutton10" style = "display: none">
                <div class="card-contain" id = "firstcard">
                    <div class="card first-card">
                        <div class="head"></div>
                        <div class="image-container">
                            <div class="image">
                                <img src="<?php echo base_url();?>upload/chairperson.jpg" alt="Dasho Pema Jungney">
                            </div>
                        </div>
                        <div class="details">
                            <p class = "b">DASHO PEMA JUNGNEY</p>
                        </div>
                        <div class="post ">
                            <p>CHAIRMAN</p>
                        </div>
                    </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/sonam.jpg" alt="Dasho SONAM PENJOR">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">DASHO SONAM PENJOR</p>
                    </div>
                    <div class="post ">
                        <p>DY.CHAIRMAN</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/jigme choden.jpg" alt="Jigme Choden">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">JIGME CHODEN</p>
                    </div>
                    <div class="post ">
                        <p>PRINCIPAL</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/tshering zam.jpg" alt="Tshering zam">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MRS TSHERING ZAM</p>
                    </div>
                    <div class="post ">
                        <p>ACADEMIC HEAD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/Tshering zangmo.jpg" alt="Tshering Zangmo">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MRS TSHERING ZANGMO</p>
                    </div>
                    <div class="post b">
                        <p>CCD HEAD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/jambay.jpg" alt="jambay">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MR. JAMBAY DORJI</p>
                    </div>
                    <div class="post">
                        <p>STAFF SECRETARY</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/sangay.jpg" alt="Sangay">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">LOPEN SANGAY PENJOR</p>
                    </div>
                    <div class="post">
                        <p>HOD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/Bishlal Biswa.jpg" alt="Bishlal">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MR BISHAL BISWA</p>
                    </div>
                    <div class="post">
                        <p>HOD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/sippy parjule.jpg" alt="Sippy Parjuli">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MRS. SIPPY PARJULI</p>
                    </div>
                    <div class="post">
                        <p>HOD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="" alt="Dawa Tshering">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MR. DAWA TSHERING</p>
                    </div>
                    <div class="post">
                        <p>HOD</p>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="card">
                    <div class="head"></div>
                    <div class="image-container">
                        <div class="image">
                            <img src="<?php echo base_url();?>upload/sc.jpg" alt="Sonam Choden">
                        </div>
                    </div>
                    <div class="details">
                        <p class = "b">MRS. SONAM CHODEN</p>
                    </div>
                    <div class="post">
                        <p>HOD</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="staff-link">
                <a href="../Staff Profile/staffprofile.html">See all<i class="fa-solid fa-circle-right"></i></a>
            </div>
        </div>

    </div>
    <div class="Events-container">
        <h1>Recent Events and News</h1>
        <div class="event-division">
            <div class="division-line"></div>
        </div>
        <div class="event-grid">
            <a href="../detail_news/news.html" class="first-event Event">
                
                <img src="<?php echo base_url();?>upload/Event1.png" alt="">
                <div class="title">
                    <h3>2nd Round of Student Representative Council Meetings was Held</h3>
                    <div class="event-link">
                        <p><span><i class="fa-solid fa-circle-right"></i></span>Read More</p>
                    </div>
                </div>
            </a>
            
            <a href="../detail_news/news.html"  class="second-event Event">
                <img src="<?php echo base_url();?>upload/Event2.png" alt="">
                <div class="title">
                    <h3>Yangchenphu HSS Versus Motithang HSS</h3>
                    <div class="event-link">
                        <p><span><i class="fa-solid fa-circle-right"></i></span>Read More</p>
                    </div>
                </div>
            </a>
            <a href="../detail_news/news.html" class="Third-event Event">
                <img src="<?php echo base_url();?>upload/Event3.png" alt="">
                <div class="title">
                    <h3>2nd issue of Newletter Published</h3>
                    <div class="event-link">
                        <p><span><i class="fa-solid fa-circle-right"></i></span>Read More </p>
                    </div>
                </div>
            </a>
            <a href="../detail_news/news.html"  class="fourth-event Event">
                <img src="<?php echo base_url();?>upload/Event4.png" alt="">
                <div class="title">
                    <h3>Final Junior class Basketball match</h3>
                    <div class="event-link">
                        <p><span><i class="fa-solid fa-circle-right"></i></span>Read More </p>
                    </div>
                </div>
            </a>
        </div>
        <div class = "View-link">
            <a href="../newsEvents/NewsEvents.html">View More<i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="map-container">
        <div class="contact-info">
            <h1>Our Motto</h1>
            <div class="motto-container">
                <div class="motto">
                    <p id = "motto"> Inculcate the GNH values to students. Mold the minds of youth to attain GNH goals.</p>
                    
                </div>
            </div>
            <div class="button-container">
                <a href="../contactUs/contact.html"><button>Contact Us</button></a>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.812261120861!2d89.62085361437904!3d27.475103542268055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e196a0fc8dae49%3A0xc403111ee9fe0af0!2sMotithang%20Higher%20Secondary%20School!5e0!3m2!1sen!2sbt!4v1658591126344!5m2!1sen!2sbt" width="625" height="459" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<script>
    var slider_counter
var timer_motto = 0;
var staff_margin = 0
var staff_counter = 0
setInterval(function () {
    var radios = document.getElementsByName("home-slider-btn")
    for (var radio of radios) {
        if (radio.checked) {
            var slider_counter = parseInt(radio.classList[0])
            if (slider_counter != 4) {
                slider_counter += 1
                document.getElementById("home-slide" + slider_counter).checked = true
            }
            else {
                document.getElementById("home-slide1").checked = true
            }
            break
        }
    }
}, 7000)

setInterval(function () {
    var mivi = document.getElementsByName("mivi-slider-btn")
    for (var radio of mivi) {
        if (radio.checked) {
            var active = radio.classList[0]
            if (active != "vision-btn") {
                document.getElementById("vision").checked = true
                break
            }
            else {
                document.getElementById("mission").checked = true
                break
            }
        }

    }
}, 10000)

setInterval(function () {
    var card = document.getElementById("firstcard")
    staff_counter += 1
    if (staff_counter < 11) {
        document.getElementById("slidebutton" + staff_counter).checked = true
    }
    else {
        staff_counter = 0
        document.getElementById("slidebutton" + staff_counter).checked = true

    }
}, 3000)


</script>

<SCript src="<?php echo base_url();?>assest/website/home.js"></SCript>