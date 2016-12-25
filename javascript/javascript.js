var Netscape=(navigator.appName.indexOf("Netscape") != -1);
function Move(e) {
  if (!document.getElementById) return;
  obj=document.getElementById("mouse");
  if (Netscape)
    event=e;
  if (event.pageX) { // Netscape...
    xpointer=event.pageX;
    ypointer=event.pageY;
  }
  else if (event.x) { // Internet Explorer...
    xpointer=event.x;
	ypointer=event.y;
  }
  obj.style.left=xpointer - -15;
  obj.style.top=ypointer - -15;
}
function Setup() {
  if (!document.getElementById) return;
  if (Netscape) 
    document.captureEvents(Event.MOUSEMOVE);
  document.onmousemove=Move;
}

