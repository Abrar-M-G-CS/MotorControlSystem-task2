var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}




var slider1 = document.getElementById("slider1");
var  output1 = document.getElementById("value1");

output1.innerHTML = slider1.value;

slider1.oninput = function() {
    output1.innerHTML = this.value;
    
}


var slider2 = document.getElementById("slider2");
var  output2 = document.getElementById("value2");

output2.innerHTML = slider2.value;

slider2.oninput = function() {
    output2.innerHTML = this.value;
    
}


var slider3 = document.getElementById("slider3");
var  output3 = document.getElementById("value3");

output3.innerHTML = slider3.value;

slider3.oninput = function() {
    output3.innerHTML = this.value;
    
}


var slider4 = document.getElementById("slider4");
var  output4 = document.getElementById("value4");

output4.innerHTML = slider4.value;

slider4.oninput = function() {
    output4.innerHTML = this.value;
    
}



var slider5 = document.getElementById("slider5");
var  output5 = document.getElementById("value5");

output5.innerHTML = slider5.value;

slider5.oninput = function() {
    output5.innerHTML = this.value;
    
}
    
var slider6 = document.getElementById("slider6");
var  output6 = document.getElementById("value6");

output6.innerHTML = slider6.value;

slider6.oninput = function() {
    output6.innerHTML = this.value;
    
}