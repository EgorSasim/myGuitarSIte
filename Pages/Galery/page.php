<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/Components/Galery/styles.css">
<link rel="stylesheet" href="/Components/Galery/coolSearch.css">
<link rel="stylesheet" href="/Components/Galery/filterNav.css">
<?php

use base\GaleryElement;

 include "../../Components/Galery/GaleryElement.php"; echo file_get_contents("../../head.html")?>
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
            <?php
            $elems = array(
                new \base\GaleryElement("jopa"),
                new \base\GaleryElement("jopa"),
                new \base\GaleryElement("jop3a"),
            );
            
            foreach ($elems as $key => $value) {
                echo $value->print_name();
            }                
            ?>
        </div>
    
    </div>

        <!-- SIGN UP MODAL PART -->
    <!-- The Modal (contains the Sign Up form) -->
    <div id="signUpForm" class="signUpModal">
        <span onclick="document.getElementById('signUpForm').style.display='none'" class="close" title="Close signUpModal">&times;</span>
        <form class="signUpModal-content" action="/action_pageSignUp.php">
        <div class="signUpContainer">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
            <button type="button" onclick="document.getElementById('signUpForm').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="submit" class="signup sbmtBtn">Sign Up</button>
            </div>
        </div>
        </form>
    </div>
    


    <!-- SIGN IN MODAL PART -->
    
    <!-- The Modal -->
    <div id="signInForm" class="signInModal">
        <span onclick="document.getElementById('signInForm').style.display='none'"
        class="close" title="Close signInModal">&times;</span>
    
        <!-- signInModal Content -->
        <form class="signInModal-content animate" action="/action_page.php">
        <div class="signInImgcontainer">
            <img src="/assets/imgs/signIn/personIco.jpg" alt="Avatar" class="avatar">
        </div>
    
        <div class="signInModalFirstContainer">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
    
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
    
            <button type="submit">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
       
            <button type="button" onclick="document.getElementById('signInForm').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
        </form>
    </div>

     <!-- OVERLAY MENU -->

    <!-- The overlay -->
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      
        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="../index.html">Home</a>
          <a href="#">Galery</a>
          <a href="#">Tutors</a>
          <a href="#">Own proj</a>
          <a href="#">News</a>
          <a href="#">About Us</a>
         
        </div>
      
    </div>


    <!-- FILTER MENU -->


    <div id="myFilterNav" class="filterNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeFilterNav()">&times;</a>
        <h3>Type</h3>
        <select>
            <option value="classicGitar">Classic</option>
            <option value="electricGuitar">Electric</option>
            <option value="acousticGuitar">Acoustic</option>
        </select>
    </div>


    <script src="/scripts/coolSearch.js"></script>
    <script src="/scripts/overlayMenu.js"></script>
    <script src="/scripts/main.js"></script>
    <script src="/scripts/signIn.js"></script>
    <script src="/scripts/filterNav.js"></script>
</body>