
// NAV MENU

let $MENU = document.querySelector(".topnav");
let $STICKYMENU = document.querySelector(".stickynav");


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


// SCROLLING PARSER
let isScrolling = false;
 
window.addEventListener("scroll", throttleScroll, false);
 
function throttleScroll(e) {
    if (isScrolling == false ) {
        window.requestAnimationFrame(function() { // deal with browser delay for handling events
          dealWithScrolling($MENU);
          isScrolling = false;
        });
    }
    isScrolling = true;
}   
 
// SHOW/HIDE STICKY MENU ICON
function dealWithScrolling(e) {
    if(!isFullyVisible(e) && !isPartiallyVisible(e)){
      $STICKYMENU.className = "stickynav isvisible";   
      
        
    } else{
       $STICKYMENU.className = "stickynav";
       
    }
}


// check if element(nav menu) is FULL visible
function isFullyVisible(el) {
    var elementBoundary = el.getBoundingClientRect();
   
    var top = elementBoundary.top;
    var bottom = elementBoundary.bottom;
   
    return ((top >= 0) && (bottom <= window.innerHeight));
}

// check if element is PARTIALLY visible
function isPartiallyVisible(el) {
  var elementBoundary = el.getBoundingClientRect();

  var top = elementBoundary.top;
  var bottom = elementBoundary.bottom;
  var height = elementBoundary.height;

  return ((top + height >= 0) && (height + window.innerHeight >= bottom));
}