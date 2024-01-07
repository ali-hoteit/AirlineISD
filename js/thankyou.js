window.addEventListener("load", start, false);

var x = null
var y = null

function start() {
    x = window.setInterval("fullsize()", 1)
}

var i = 0
var speed = 5

function fullsize() {
    var thumb_up = document.getElementById("like")
    if (i <= 572) {
        thumb_up.setAttribute("style", "height: " + (i * 0.763986014 + "px;") + "width: " + (i + "px;"))
        i += speed
    }
    else {
        y = window.setInterval("fly()", 5)
        i = 0
        window.clearInterval(x)
    }
};

function fly() {
    var flyplane = document.getElementById("airplane")
    if (i < 600) {
        flyplane.setAttribute("style", "transform: translate(" + i + "px," + 0 + "px);")
        i += speed
    }
    else {
        flyplane.setAttribute("style", "transform: translate(" + 600 + "px," + 0 + "px); transform: rotate(-20deg);")
        window.clearInterval(y)
    }
}