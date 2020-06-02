<?php include 'header.php' ?>


<div class="container">
  <div class="row">
  	<div class="col-sm-8">
      
  		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQG6JVwgoaPjRUVjU_LML_VzetCrxftbmIwTg2wsf3AnXnm79G&usqp=CAU"  class="center">
  	</div>
    <div class="col-sm-4">
    	<h2>Advertisement</h2>
    </div>
    <div class="container_title">
	    <div class="decorative-title">
	      <div class="decorative-bar left vertical thick"></div>
	      <div class="decorative-bar left horizontal thick"></div>
	      <div class="decorative-bar left horizontal thin"></div>
	      	<span>APPLICATION</span>
	      <div class="decorative-bar right vertical thick"></div>
	      <div class="decorative-bar right horizontal thick"></div>
	      <div class="decorative-bar right horizontal thin"></div>
	    </div>
  </div>
  <p class="cat_title_1"><strong>What is Lorem Ipsum?</strong></p>
  <p class="cat_content_1"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <p class="cat_title_1"><strong>Why do we use it?</strong></p>
  <p class="cat_content_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

  </div>
</div>
<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("divdrag"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}
</script>

<?php include 'footer.php' ?>