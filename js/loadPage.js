
var myVar;

function myContent() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("content").style.display = "block";
  document.getElementById("content1").style.display = "block";
}