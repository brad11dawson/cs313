function clickFunction() {
  alert("Clicked!");
}

//change color with regular js
function changeColor() {
  var newColor = document.getElementById("newColor").value;
  document.getElementById("one").style.backgroundColor = newColor;
}

//change color with jquery
$(document).ready(function () {
  $("#colorButton").click(function () {
    var color = $("#newColor").val();
    $("#one").css("background-color", color);
  });
  
  $("#hideButton").click(function () {
    $("#three").hide(1000);
  });
  
  $("#showButton").click(function () {
    $("#three").show(1000);
  });
});

