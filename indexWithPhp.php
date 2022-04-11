<!DOCTYPE html>
<html lang="en">
<?php echo file_get_contents("./head.html")?>
<body>

    <!-- STICKY NAV -->

    <div class="stickynav" onclick="openNav()">
        <i class="fa fa-bars"></i>
    </div>
    <!-- TOP NAVIGATION -->

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="forms/galery.html">Galery</a>
        <a href="#tutors">Tutors</a>
        <a href="#ownProj">Own proj</a>
        <a href="#news">News</a>
        <a href="#aboutUs">About Us</a>
        <a href="#signIn" onclick="document.getElementById('signInForm').style.display='block'">Sign In</a>
        <a href="#signUp" onclick="document.getElementById('signUpForm').style.display='block'">Sign Up</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="entranceInf">
        <img src="assets/imgs/entranceInf/guitar1.jpg" alt="guitarImage (realy beautiful))" style="width:100%;">
        <div class="content">
          <h1>HISTORY</h1>
          <p>The guitar is a fretted musical instrument that typically has six strings. 
              It is held flat against the player's body and played by strumming or plucking the strings with the dominant hand, 
              while simultaneously pressing selected strings against frets with the fingers of the opposite hand. A plectrum or individual 
              finger picks may also be used to strike the strings. The sound of the guitar is projected either acoustically, by means of a resonant 
              chamber on the instrument, or amplified by an electronic pickup and an amplifier.</p>
        </div>
    </div>


    <div class="description">
        <img src="assets/imgs/description/crowd.jpg" alt="smth secret about author)">
        <div class="content">
            <h2>DESCRIPTION</h2>
            <p>The author of this site just like sometimes take a bottle of bear and play a guitar. <br>
                So, this site for people, who does the same as author. <br>
                If you like playing a guitar there you may find a lot of usefull info about <br>
                best guitar courses, guitar makers and models, hand-made guitars and so on. <br>
                It's very pleasant to see U on this site. <br>
                Have fun and play a guitar) <br>
                
            </p>
        </div>
    </div>
    <!-- DESCRIPTION PART -->


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
      <a href="#">Home</a>
      <a href="forms/galery.html">Galery</a>
      <a href="#">Tutors</a>
      <a href="#">Own proj</a>
      <a href="#">News</a>
      <a href="#">About Us</a>
     
    </div>
  
  </div>
  


    
    <script src="scripts/overlayMenu.js"></script>
    <script src="scripts/signIn.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>