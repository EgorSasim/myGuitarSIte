// Show appropriate fields when the certain type of guitar choosen
let $GuitarType = document.querySelector('.guitarType');
let $classicGitCharacteristics = document.querySelector('.classicGuitarScpecifications');
let $electronicGitCharacteristics = document.querySelector('.electronicGuitarScpecifications');
let $acousticGitCharacteristics = document.querySelector('.acousticGuitarScpecifications');

$GuitarType.onchange =() => {
  showAppropriateGuitarCharacteristics($GuitarType.selectedIndex);
}

function showAppropriateGuitarCharacteristics(gitType)
{
  $acousticGitCharacteristics.style.display = $electronicGitCharacteristics.style.display =  $classicGitCharacteristics.style.display = "none";
  if(gitType == 1)
    showGuitarCharacteristics($classicGitCharacteristics);
  else if(gitType == 2)
    showGuitarCharacteristics($electronicGitCharacteristics);
  else if(gitType == 3)
    showGuitarCharacteristics($acousticGitCharacteristics);
}


function showGuitarCharacteristics(gitCharacteristics){
  gitCharacteristics.style.display = "block";
}




/* Set the width of the side navigation to 500px */
function openFilterNav() {
    document.getElementById("myFilterNav").style.width = "500px";    
  }
  
  /* Set the width of the side navigation to 0 */
  function closeFilterNav() {
    document.getElementById("myFilterNav").style.width = "0";
}