window.addEventListener( "load", start, false );

var x = null
var y = null

function start(){
    x = window.setInterval("fullsize()",1)
}

var i = 0
var rotate_angle = 0.0
var j = 0
var speed = 5

function fullsize() {
    var thumb_up = document.getElementById("like")
    if (i <= 410){
        thumb_up.setAttribute("style", "height: " + (i * 0.763986014 + "px;") + "width: " + (i + "px;"))
        i += speed +10
    }
    else{
        i = 0
        document.getElementById("airplane_audio").play()
        y = window.setInterval("fly()",3)
        window.clearInterval(x)
    }
  };

  function fly(){
    var flyplane = document.getElementById("airplane")
    if(i < 500){
        flyplane.setAttribute("style", "transform: translate("+i+"px, 0px);")
        i += speed
    }
    else if (i >= 500 && i < 600){
        flyplane.setAttribute("style", "transform: translate("+i+"px, 0px) rotate("+rotate_angle+"deg);")
        i += speed
        rotate_angle -= 1.3;
    }
    else if (i >= 600 && i < 990){
        flyplane.setAttribute("style", "transform: translate("+i+"px,"+j+"px) rotate("+rotate_angle+"deg);")
        i += speed
        j -= 2
    }
    else{
        window.clearInterval(y)
    }
  }

//   function changesrc(){
//     document.getElementById("redirect").setAttribute("href", "../html/flights.html")
//   }