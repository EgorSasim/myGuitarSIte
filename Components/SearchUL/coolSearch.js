function showAppropriate() {
    // Set the amount of results under of COOLSEARCH (HELL YEAH!!!) bar
    let RESAMOUNT = 0;
    
    // Declare variables
    let input, filter, ul, li, a, i, txtValue;
    input = document.querySelector(".coolSearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("coolSearchUL");
    li = ul.querySelectorAll('#coolSearchUL li');
    
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if ( (txtValue.toUpperCase().indexOf(filter) > -1)  && (RESAMOUNT++ < 3)) {
        ul.style.display = "block"
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
    RESAMOUNT = 0;
}

function hideAfterUse(){
    let input, ul;
    input = document.querySelector('.coolSearch');
    ul = document.getElementById("coolSearchUL");
    if (!(document.activeElement === input))
        ul.style.display = "none";   
}



window.addEventListener('click',  function() {hideAfterUse()});