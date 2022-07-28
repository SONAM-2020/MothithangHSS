var smb_counter = 1;
var stop_slide = [];
var dzo_counter = 1;
var eng_counter = 1;
var math_counter = 1;
var sci_counter = 1;
var com_counter = 1;
var humi_counter = 1;
var sup_counter = 1;


// console.log(document.getElementById("smb" + smb_counter))
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "smb") {
            check = 1
            document.getElementById("smb1").checked = true;
            smb_counter = 1
        }
    }
    if (check == 0) {
        smb_counter += 1;
        if (smb_counter <= 9) {

            document.getElementById("smb" + smb_counter).checked = true;
        }
        else {
            document.getElementById("smb1").checked = true;
            smb_counter = 1
        }
    }

}, 3000)
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "dzo") {
            check = 1
            document.getElementById("dzo1").checked = true;
            dzo_counter = 1
        }
    }
    if (check == 0) {
        dzo_counter += 1;
        if (dzo_counter < 12) {
            document.getElementById("dzo" + dzo_counter).checked = true;
        }
        else {
            document.getElementById("dzo1").checked = true;
            dzo_counter = 1
        }
    }

}, 3000)

setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "eng") {
            check = 1
            document.getElementById("eng1").checked = true;
            eng_counter = 1
        }
    }
    if (check == 0) {
        eng_counter += 1;
        if (eng_counter <= 10) {
            document.getElementById("eng" + eng_counter).checked = true;
        }
        else {
            document.getElementById("eng1").checked = true;
            eng_counter = 1
        }
    }

}, 3000)
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "mat") {
            check = 1
            document.getElementById("mat1").checked = true;
            math_counter = 1
        }
    }
    if (check == 0) {
        math_counter += 1;
        if (math_counter <= 11) {
            document.getElementById("mat" + math_counter).checked = true;
        }
        else {
            document.getElementById("mat1").checked = true;
            math_counter = 1
        }
    }

}, 3000)

setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "sci") {
            check = 1
            document.getElementById("sci1").checked = true;
            sci_counter = 1
        }
    }
    if (check == 0) {
        sci_counter += 1;
        if (sci_counter <= 12) {
            document.getElementById("sci" + sci_counter).checked = true;
        }
        else {
            document.getElementById("sci1").checked = true;
            sci_counter = 1
        }
    }

}, 3000)
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "com") {
            check = 1
            document.getElementById("com1").checked = true;
            com_counter = 1
        }
    }
    if (check == 0) {
        com_counter += 1;
        if (com_counter <= 10) {
            document.getElementById("com" + com_counter).checked = true;
        }
        else {
            document.getElementById("com1").checked = true;
            com_counter = 1
        }
    }

}, 3000)
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "humi") {
            check = 1
            document.getElementById("humi1").checked = true;
            humi_counter = 1
        }
    }
    if (check == 0) {
        humi_counter += 1;
        if (humi_counter <= 8) {
            document.getElementById("humi" + humi_counter).checked = true;
        }
        else {
            document.getElementById("humi1").checked = true;
            humi_counter = 1
        }
    }

}, 3000)
setInterval(function () {
    var check = 0
    for (var i = 0; i <= stop_slide.length; i++) {
        if (stop_slide[i] == "sup") {
            check = 1
            document.getElementById("sup1").checked = true;
            sup_counter = 1
        }
    }
    if (check == 0) {
        sup_counter += 1;
        if (sup_counter <= 11) {
            document.getElementById("sup" + sup_counter).checked = true;
        }
        else {
            document.getElementById("sup1").checked = true;
            sup_counter = 1
        }
    }

}, 3000)


function showall(button, department) {
    var element = button.parentElement
    if (element.classList.contains("departments")) {
        element.classList.remove("departments")
        element.classList.add("details")
        stop_slide.push(department)
        button.innerHTML = "<p>Close <i class='fa-solid fa-xmark'></i></p>"
    } else {
        element.classList.remove("details")
        element.classList.add("departments")
        button.innerHTML = '<p>See all<i class="fa-solid fa-circle-right"></i></p>'
        for (var i = 0; i <= stop_slide.length; i++) {
            stop_slide[i]
            if (stop_slide[i] == department) {
                stop_slide.splice(i)
                return
            }
        }
    }
}