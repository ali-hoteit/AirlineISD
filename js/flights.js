var flight_number = 11
var limit = 0;

window.addEventListener("load", start, false)

function start(){
    // document.getElementById("table").addEventListener("click", removeflight, false)
}

function tablecell(x,y){
    var tablecell = document.createElement("TD")
    tablecell.setAttribute("id",x+flight_number)
    tablecell.innerHTML = y
    return tablecell
}

function adminint(){
    if(limit < 1){
        limit++
        document.getElementById("admin_form").setAttribute("style", "visibility: visible;")
        var newhead = document.createElement("th")
        newhead.innerHTML = "Remove ❌"
        document.getElementById("tablehead").appendChild(newhead)
        var list = document.getElementsByClassName("rows")
        // for(var x = 0; x < list.length ; x++){
        //     var y = document.createElement("td")
        //     var but = document.createElement("input")
        //     but.setAttribute("type","submit")
        //     but.setAttribute("value","   X   ")
        //     but.setAttribute("style","color: red; font-size: large;")
        //     but.setAttribute("class","removebut")
        //     but.setAttribute("name","deleteflight")
        //     y.appendChild(but)
        //     list[x].appendChild(y)
        // }
    }
}

function userint(){
    if(limit > 0){
        limit--
        document.getElementById("admin_form").setAttribute("style", "visibility: hidden;")
        var list = document.getElementsByClassName("rows")
        for(var x = 0; x < list.length ; x++){
            list[x].removeChild(list[x].lastChild)
        }
        document.getElementById("tablehead").removeChild(document.getElementById("tablehead").lastChild)
    }
}

function removeflight(e){
    if(e.target.className == "removebut"){
        if(flight_number == 1){
            alert("you can not leave the table EMPTY, add any flight down, then delete the one you clicked on it")
        }
        else{
            e.target.parentElement.parentElement.remove()
            flight_number--  
        }
    }
}