<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/Components/Galery/styles.css">
<?php echo file_get_contents("../../head.html")?>
<body>
<?php echo file_get_contents("../../Components/TopNav/template.html") ?>

    <div class="description">
        <h1>Description</h1>
        <p>There you may find a lot of guitar models, check their charactreristic, compare them and finally choose the best guitar for yourself!</p>
        
    </div>

    <!-- COOL SEARCH -->
    <div class="coolSearch-container">  
        <input type="text" class="coolSearch" onkeyup="showAppropriate()" name="search" placeholder="Search..">

        <!-- There should be a list of all possible guitars(guitar names) in gallery (maybe we will read the values from data base) -->
        <ul id="coolSearchUL">
            <li><a href="#">Adele</a></li>
            <li><a href="#">Agnes</a></li>
            <li><a href="#">Avelina</a></li>
            <li><a href="#">ADIDAS</a></li>
            <li><a href="#">ABRACHAM</a></li>
        
            <li><a href="#">Billy</a></li>
            <li><a href="#">Bob</a></li>
        
            <li><a href="#">Calvin</a></li>
            <li><a href="#">Christina</a></li>
            <li><a href="#">Cindy</a></li>
        </ul>
    </div>

    <div class="galery">
        <div class="control-part">
            <div class="filters" onclick="openFilterNav()"><span>Filters</span></div>          
           
            <div class="controlArrows">
                <div class="leftArrow"><span>&lt;</span></div>
                <div class="rightArrow"><span>&gt;</span></div>
            </div>

        </div>
       
        <div class="grid-container">
            <?php for ($i = 0; $i < 6; $i++){
                echo "<div class=\"gridItem\">{$i}</div>";
            }?>
        </div>
    
    </div>


    <script src="/scripts/coolSearch.js"></script>
    <script src="/scripts/overlayMenu.js"></script>
    <script src="/scripts/main.js"></script>
    <script src="/scripts/signIn.js"></script>
    <script src="/scripts/filterNav.js"></script>
</body>