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

