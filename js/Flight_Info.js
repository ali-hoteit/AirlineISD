var meal = 0;
var seat = 0;
var luggage = 0;
var total = 0;

window.addEventListener("load", start, false)

function start(){
    document.getElementById("luggage").addEventListener("mousemove", display, false);
    document.getElementById("1").addEventListener("click", mealfun, false);
    document.getElementById("2").addEventListener("click", seatlocationfun, false);
    document.getElementById("stat").addEventListener("click", statusfun, false);
    total = parseInt(document.getElementById("raw_cost").innerHTML);
}

function display(){
    document.getElementById("display_number").innerHTML = document.getElementById("luggage").value+" kg";
    if(document.getElementById("luggage").value != 50){
        luggage = 15;
        document.getElementById("luggage change").innerHTML = "<u>luggage change</u> you asked for additional luggage weight (>50 kg) <em>extra fees +15$</em>"
    }
    else{
        document.getElementById("luggage change").innerHTML = "no additional fees on luggage weight"
        luggage = 0;

    }
    var result = total+meal+seat+luggage;
    document.getElementById("send_cost").setAttribute("value", result);
    document.getElementById("total_cost").innerHTML = result+"$"
}

function mealfun(){
    if(document.getElementById("1").value == "Standard"){
        document.getElementById("meal change").innerHTML = "<u>meal change</u> Basic --> Standard <em>extra fees +5$</em>"
        meal = 5;
    }
    else if(document.getElementById("1").value == "Premium"){
        document.getElementById("meal change").innerHTML = "<u>meal change</u> meal Basic --> Premium <em>extra fees +10$</em>"
        meal = 10;
    }
    else{
        document.getElementById("meal change").innerHTML = "no additional fees on meal"
        meal = 0;
    }
    var result = total+meal+seat+luggage;
    document.getElementById("send_cost").setAttribute("value", result);
    document.getElementById("total_cost").innerHTML = result+"$"
}

function seatlocationfun(){
    if(document.getElementById("2").value >= 'a' && document.getElementById("2").value <= 'i'){
        document.getElementById("seat change").innerHTML = "<u>seat change</u> your seat loaction is within the first class of the airplane <em>extra fees +25$</em>"
        seat = 25;
    }
    else{
        document.getElementById("seat change").innerHTML = "no additional fees on seat location"
        seat = 0;
    }
    var result = total+meal+seat+luggage;
    document.getElementById("send_cost").setAttribute("value", result);
    document.getElementById("total_cost").innerHTML = result+"$"
}

function statusfun(){
    if(document.getElementById("stat").value == "Reservation"){
        document.getElementById("pin").setAttribute("disabled", true)
    }
    else{
        document.getElementById("pin").removeAttribute("disabled")
    }
}