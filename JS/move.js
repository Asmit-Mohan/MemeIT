function mov(idd){
	
	dragElement(document.getElementById(idd));
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
	
}

function fontt(font, divv)
{
  if (font && divv) {
    var fonts = document.getElementById(font).value;
  document.getElementById(divv).style.fontSize = fonts + "pt";
  }
  
}

function clr(colr, divv)
{
  
  if (colr && divv) {
    var color = document.getElementById(colr).value;
  document.getElementById(divv).style.color = color;
  }
  
}

function family(familly, divv) {
  if (familly && divv) {
    
    var font = document.getElementById(familly).value;
  document.getElementById(divv).style.fontFamily = font;
  }
}


function load(gifs) {
  
  document.getElementById('img').src = gifs;
}

      
$(function(){
        $("#textarea1").on("input", function(){
          $("#abcheader").text($(this).val());
        });
});
      $(function(){
        $("#textarea2").on("input", function(){
          $("#mydivheader").text($(this).val());
        });
      });

