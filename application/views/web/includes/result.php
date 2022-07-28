<div class="img-container">
    <img src="../image/contactus.png" alt="image" class="image1">
    <p class="result">Result</p>
</div>

<div class="result_container">
        <div class="result_field">
            <p class="guide">
                choose the class/stream to view the result
            </p>
            
            <div class="option_container">
                <p class="class">
                    Class
                </p>
                
                <div class="class_option">
                    <p class="options" id="class_option">
                        Class 9 <span class="iconify iconify_9" data-icon="akar-icons:pointer-right-fill"></span>
                    </p>
                </div>
                
                <div class="class_option" id="class_option1"> 
                    <p class="options">
                        Class 10 <span class="iconify" data-icon="akar-icons:pointer-right-fill"></span>
                    </p>
                </div>
                
                <div class="class_option" id="class_11" >
                    <span class="options">
                        Class 11 <span class="iconify" data-icon="akar-icons:pointer-right-fill"></span>
                    </span>
                </div>
                
                <div class="class_option" id="class_12">
                    <span class="options">
                        Class 12 <span class="iconify" data-icon="akar-icons:pointer-right-fill"></span>
                    </span>
                </div>
            </div>


            <div class="result_option" id="result_option">
                <p>
                    Test Result
                </p>
                <p>
                    
                    Mid-term
                </p>
                <p>
                    
                    Annual
                </p>
            </div>
            <div class="result_option1" id="result_option1">
                <p>
                    Test Result 2
                </p> 
                <p>
                    
                    Mid-term
                </p>
                <p>
                    
                    Annual
                </p>
            </div>
            
            <div class="stream_choice" id="stream_choice">
                <p class="stream_options" id="stream_science_11" >
                    Science 11 <span class="iconify" data-icon="akar-icons:pointer-right-fill" ></span>
                </p>
                <p class="stream_options" id="stream_commerce_11">
                    Commerce 11<span class="iconify" data-icon="akar-icons:pointer-right-fill" ></span>
                </p>
                <p class="stream_options" id="stream_arts_11">
                    Arts 11<span class="iconify" data-icon="akar-icons:pointer-right-fill"  ></span>
                </p>
            </div>
            
            
            
            <div class="stream_11_science" id="11_science">
                <p>
                    Test Result S
                </p> 
                <p>
                    
                    Mid-term
                </p>
                <p>
                    
                    Annual
                </p>
            </div>
            
            <div class="stream_11_commerce" id="11_commerce">
                <p>
                    Test Result C
                </p> 
                <p>
                    
                    Mid-term
                </p>
                <p>
                    
                    Annual
                </p>
            </div>
            
            <div class="stream_11_Arts" id="11_Arts">
                <p>
                    Test Result A
                </p> 
                <p>
                    
                    Mid-term
                </p>
                <p>
                    
                    Annual
                </p>
            </div>
            
            <div class="stream_choice1" id="stream_choice_12">
                <p class="stream_options" id="stream_science_12">
                    Science 12<span class="iconify" data-icon="akar-icons:pointer-right-fill"  ></span>
                </p>
                <p class="stream_options" id="stream_commerce_12">
                    Commerce <span class="iconify" data-icon="akar-icons:pointer-right-fill" ></span>
                </p>
                <p class="stream_options" id="stream_arts_12">
                    Arts <span class="iconify" data-icon="akar-icons:pointer-right-fill"  ></span>
                </p>
            </div>
            

            <a href="#modal-dialog"><input type="button" name="mark_button" id="button" value="Upload Marks" class="button"></a> 
            
            
            
        </div>
        <div class="modal-dialog" id="modal-dialog">
            <form class="login_form">
                <div class="close_r">
                    +
                 </div>
                 <p class="login_Head">Teacher Login</p>
                 
                 <input type="text" name="user_name" id="user_name" placeholder="USERNAME" class="username">
                 <input type="password" placeholder="PASSWORD" class="username">
                 
                 <input type="submit" value="Login" class="submit">
                 
                </form>
        </div>
       
    </div>


    <script>
        show = document.getElementById("class_option")
show_10 = document.getElementById("class_option1")

show_10.addEventListener('click',showContent1)
show.addEventListener('click',showContent)

function showContent(){
    show_1 = document.getElementById('result_option1')
    show_1.style.display = 'none'

    show1 = document.getElementById("result_option")
    show1.style.display = 'flex';

    show_stream = document.getElementById("stream_choice")
    show_stream.style.display = 'none'

    show_stream12 = document.getElementById('stream_choice_12')
    show_stream12.style.display = 'none';

    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';


    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';
}

function showContent1(){
    show_1 = document.getElementById('result_option1')
    show_1.style.display = 'flex';

    show1 = document.getElementById("result_option")
    show1.style.display = 'none';

    show_stream = document.getElementById("stream_choice")
    show_stream.style.display = 'none';

    show_stream12 = document.getElementById('stream_choice_12')
    show_stream12.style.display = 'none';

    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none'

    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';

}


class11 = document.getElementById('class_11')
class11.addEventListener('click',showStreamChoice11)

function showStreamChoice11(){
    show_stream = document.getElementById("stream_choice")
    show_stream.style.display = 'flex';

    show_1 = document.getElementById('result_option1')
    show_1.style.display = 'none';

    show1 = document.getElementById("result_option")
    show1.style.display = 'none';

    show_stream12 = document.getElementById('stream_choice_12')
    show_stream12.style.display = 'none';

    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none'

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';
    
    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';

}

class12 = document.getElementById('class_12')
class12.addEventListener('click',showStream12)

function showStream12(){

    show_stream12 = document.getElementById('stream_choice_12')
    show_stream12.style.display = 'flex';

    show_1 = document.getElementById('result_option1')
    show_1.style.display = 'none';

    show1 = document.getElementById("result_option")
    show1.style.display = 'none';

    show_stream = document.getElementById("stream_choice")
    show_stream.style.display = 'none'

    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none'


    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';


}

science_11_stream = document.getElementById('stream_science_11')
science_11_stream.addEventListener('click',show_11_stream_science)

function show_11_stream_science(){
    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'flex';

    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';
    
    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';

}

commerce_11_stream = document.getElementById('stream_commerce_11')
commerce_11_stream.addEventListener('click',show_11_stream_commerce)

function show_11_stream_commerce(){
    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'flex';

    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none';

    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';
}

Arts_11_stream = document.getElementById('stream_arts_11')
Arts_11_stream.addEventListener('click', show_11_stream_arts)

function show_11_stream_arts(){
    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'flex';


    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';
}


stream_science_12 = document.getElementById('stream_science_12')
stream_science_12.addEventListener('click',show_11_stream_science)

stream_commerce_12 = document.getElementById('stream_commerce_12')
stream_commerce_12.addEventListener('click',show_11_stream_commerce)

stream_arts_12 = document.getElementById('stream_arts_12')
stream_arts_12.addEventListener('click',show_11_stream_arts)


button = document.getElementById('button')
button.addEventListener('click',show_login_form)

function show_login_form(){
    show = document.getElementById('modal-dialog')
    show.style.display = 'flex'

    show_1 = document.getElementById('result_option1')
    show_1.style.display = 'none'

    show1 = document.getElementById("result_option")
    show1.style.display = 'none';

    show_stream = document.getElementById("stream_choice")
    show_stream.style.display = 'none'

    show_stream12 = document.getElementById('stream_choice_12')
    show_stream12.style.display = 'none';

    stream_arts_11 = document.getElementById("11_Arts")
    stream_arts_11.style.display = 'none';


    stream_11_science = document.getElementById('11_science')
    stream_11_science.style.display = 'none';

    stream_11_commerce = document.getElementById('11_commerce')
    stream_11_commerce.style.display = 'none';

}

close_form1 = document.querySelector(".close_r")
close_form1.addEventListener('click', close_form)


function close_form(){
    show = document.getElementById('modal-dialog')
    show.style.display = 'none'
}
    </script>