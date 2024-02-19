alert("Welcome"); //pop up on the home page



let wayne = "";

wayne = () => {
  document.getElementById("demo").innerHTML += "wayne";
}

// The window object calls the function:
window.addEventListener("load", wayne);

// A button object calls the function:
document.getElementById("btn").addEventListener("click", wayne);

class Car {
  constructor(name, year) {
    this.name = name;
    this.year = year;
  }
  age(x) {
    return x - this.year;
  }
}

const date = new Date();
let currentYear = date.getFullYear();

const myCar = new Car("Pink Lamborghini Aventador", 2022);
document.getElementById("demo").innerHTML =
"My name is Wayne, and my " + myCar.name + " is " + myCar.age(currentYear) + " years old.";

setTimeout(function() { myFunction("you didn't see that!!!!!"); }, 3000);

function myFunction(value) {
  document.getElementById("demo").innerHTML = value;
}


function moveSquare() {
  let id = null;
  const elem = document.getElementById("animate");   
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 5);
  function frame() {
    if (pos == 350) {
      clearInterval(id);
    } else {
      pos++; 
      elem.style.top = pos + "px"; 
      elem.style.left = pos + "px"; 
    }
  }
}

function myFunction() {
  let text;
  let person = prompt("Please enter your name:", "Wayne");
  if (person == null || person == "") {
    text = "User cancelled the prompt.";
  } else {
    text = "Hello " + person + "! Reach me out for more details!";
  }
  document.getElementById("demo").innerHTML = text;
}