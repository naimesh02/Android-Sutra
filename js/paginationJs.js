const firstPageLinks = document.querySelectorAll(".firstPage .pages");
// alert(firstPageLinks);
// JS code needed for first pagination effect
firstPageLinks.forEach((link) => {
	
  link.addEventListener("mouseover", mouseOverEvent);
  link.addEventListener("mouseleave", mouseLeaveEvent);
});

function mouseOverEvent(e) {

  firstPageLinks.forEach((link) => {
    link.style.opacity = 0.7;
  });

  e.target.style.opacity = 1;
  e.target.style.transform = "scale(1.2)";
}

function mouseLeaveEvent(e) {
	
  firstPageLinks.forEach((link) => {
    link.style.opacity = 1;
    e.target.style.transform = "scale(1)";
  });
}
