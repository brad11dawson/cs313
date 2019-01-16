function clickFunction() {
  alert("Clicked!");
}

function changeColor() {
  var newColor = document.getElementById("newColor").value;
  document.getElementById("one").style.backgroundColor = newColor;
}