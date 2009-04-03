function getLeft(elem) {
    var left = 0;
    while( elem != null ) {
	left += elem.offsetLeft;
	elem = elem.offsetParent;
    }
    return left;
}
    
function getTop(elem) {
    var top = 0;
    while( elem != null ) {
	top += elem.offsetTop;
	elem = elem.offsetParent;
    }
    return top;
}

function getXY(event) {
    if( event == null ) { event = window.event; }
    if( event == null ) { return null;          }
    if( event.pageX || event.pageY ) {
        return { x: event.pageX, 
		 y: event.pageY };
    }
    return null;
}
