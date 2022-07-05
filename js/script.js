
// SCREEN SIZE Start //
window.onscroll = function() {scrollFunction()};
var screensize_flag = 0;
var screensize = window.matchMedia("(max-width: 992px)");

function navByScreen(screensize) {
    if(screensize.matches) {
        screensize_flag = 1;
    }
    else {
        screensize_flag = 0;
    }
}
navByScreen(screensize);
// SCREEN SIZE End //


// NAV DROPDOWN Start //
function dropbtn_onclick() {
    document.getElementById("nav-dropdown-content").classList.toggle("dropdown-show");
}

window.onclick = function(e) {
    if(e.target.className !== "fa fa-bars"){
        var dropdown = document.getElementById("nav-dropdown-content");
        if(dropdown.classList.contains("dropdown-show")){
            dropdown.classList.remove("dropdown-show");
        }
    }
}
// NAV DROPDOWN End //


// SMOOTH SCROLL Start //
function goHome(geturl) { location.href = geturl; }
function smoothScroll(a) {
    var element = document.getElementById(a);
    element.scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "nearest"
    });
}
function scrollFunction() {
    var windowHeight = window.innerHeight;
    var footerHeight = document.getElementById("footer").clientHeight;
    var scrollHeight = document.documentElement.scrollHeight;
    var addHeight = windowHeight + footerHeight;
    var top = scrollHeight - addHeight;
    try {
        if(document.body.scrollTop > top || document.documentElement.scrollTop > top){
            if(document.getElementById("medtable").classList.contains("fixed"))
                document.getElementById("medtable").classList.remove("fixed");
            if(!document.getElementById("medtable").classList.contains("absolute"))
                document.getElementById("medtable").classList.add("absolute");
        }
        else {
            if(document.getElementById("medtable").classList.contains("absolute"))
                document.getElementById("medtable").classList.remove("absolute");
            if(!document.getElementById("medtable").classList.contains("fixed"))
                document.getElementById("medtable").classList.add("fixed");
        }
    }
    catch(err){}
}
// SMOOTH SCROLL End //


// ZIPCODE VALIDATE Start //
function validateZipcode(){
    var x = document.forms["zipcodeform"]["zipcode"].value;
    if ( x == "" ) {
        document.getElementById("tooltip1").style.opacity = 1;
        document.getElementById("tooltip1").style.bottom = "110%";
        setTimeout(function() {
            document.getElementById("tooltip1").style.opacity = 0;
            document.getElementById("tooltip1").style.bottom = "100%";
        }, 5000);
        return false;
    }
    else if ( x.length < 5 ) {
        document.getElementById("tooltip2").style.opacity = 1;
        document.getElementById("tooltip2").style.bottom = "110%";
        setTimeout(function() {
            document.getElementById("tooltip2").style.opacity = 0;
            document.getElementById("tooltip2").style.bottom = "100%";
        }, 5000);
        return false;
        return false;
    }
}
// ZIPCODE VALIDATE End //

// GET QOUTE FORM validation [Start] //
function qouteValidate(){
    var res = 0;
    let fname = document.forms['quoteform']['fname'].value;
    let lname = document.forms['quoteform']['lname'].value;
    let phone = document.forms['quoteform']['phone'].value;
    let email = document.forms['quoteform']['email'].value;
    let address = document.forms['quoteform']['address'].value;
    let date = document.forms['quoteform']['date'].value;
    let q1 = document.forms['quoteform']['q1'].value;
    let q2 = document.forms['quoteform']['q2'].value;
    let q3 = document.forms['quoteform']['q3'].value;
    let q5 = document.forms['quoteform']['q5'].value;
    let q6 = document.forms['quoteform']['q6'].value;

    var quoteform = new FormData(document.getElementById("quoteform"));

    if (fname == '') {
        document.getElementById("fname-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("fname-error").innerHTML = ""; }

    if (lname == '') {
        document.getElementById("lname-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("lname-error").innerHTML = ""; }

    if (phone == '') {
        document.getElementById("phone-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("phone-error").innerHTML = ""; }

    if (email == '') {
        document.getElementById("email-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("email-error").innerHTML = ""; }

    if (address == '') {
        document.getElementById("address-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("address-error").innerHTML = ""; }

    if (date == '') {
        document.getElementById("date-error").innerHTML = "Empty";
        ++res;
    }
    else { document.getElementById("date-error").innerHTML = ""; }

    if (q1 == '') {
        document.getElementById("q1-error").innerHTML = "Please provide an answer!";
        ++res;
    }
    else { document.getElementById("q1-error").innerHTML = ""; }

    if (q2 == '') {
        document.getElementById("q2-error").innerHTML = "Please provide an answer!";
        ++res;
    }
    else { document.getElementById("q2-error").innerHTML = ""; }

    if (q3 == '') {
        document.getElementById("q3-error").innerHTML = "Please provide an answer!";
        ++res;
    }
    else { document.getElementById("q3-error").innerHTML = ""; }

    if (quoteform.getAll("q4[]").length < 1){
        document.getElementById("q4-error").innerHTML = "Please provide at least 1 answer!";
        ++res;
    }
    else { document.getElementById("q4-error").innerHTML = ""; }

    if (q5 == '') {
        document.getElementById("q5-error").innerHTML = "Please provide an answer!";
        ++res;
    }
    else { document.getElementById("q5-error").innerHTML = ""; }

    if (q6 == '') {
        document.getElementById("q6-error").innerHTML = "Please provide an answer!";
        ++res;
    }
    else { document.getElementById("q6-error").innerHTML = ""; }

    if (res > 0) return false;
    else return true;
}
// GET QOUTE FORM validation [End] //