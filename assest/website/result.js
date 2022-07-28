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