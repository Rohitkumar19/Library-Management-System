<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
  <div id="header">
<h1>LIBRARY BOOK ISSUING</h1>
</div>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding: 1px;
	font-family:"Comic Sans MS", cursive, sans-serif;
		}
</style>
    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Student log in</a></li>
        <li class="tab"><a href="#login">Staff log in</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Log in here</h1>
          
          <form action="checklog.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Roll No.<span class="req">*</span>
              </label>
              <input type="text" name="rollno" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="Password" required autocomplete="off"/>
            </div>
          </div>
		  

          
          <button type="submit" class="button button-block"/>login</button>
		  <br>
		  <p class="forgot"><a href="http://localhost/folder/forgotpassword.php">Forgot Password?</a></p>
		  <p class="forgot" style="text-align:left;"><a href="http://localhost/folder/indexl.php">New? SIGN UP HERE</a></p>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Login for Library staff only...!!!</h1>
          
          <form action="chklogin.php" method="post">
          
            <div class="field-wrap">
            <label>
              Staff Id<span class="req">*</span>
            </label>
            <input type="text" name="lid"required autocomplete="off"/>
          </div>
		  
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="lpass" required autocomplete="off"/>
          </div>
          
          <p class="forgot" style="text-align:left;"><a href="http://localhost/folder/staffsignup.php">Sign up</a></p>
          
          <p class="forgot"><a href="http://localhost/folder/staffforgotpassword.php">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
