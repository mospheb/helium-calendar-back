<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Helium Health Calendar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link href="css/loginpage.css" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body style="background:#eee;">


  <div class="wrapper fadeInDown" style="padding-top:100px;">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first" style="padding-top:30px;">
        <h5 style="text-align:center;">HELIUM CALENDAR </h5>
        <p style="color:#bababa;"><Candidate Login></p>
      </div>

      <!-- Login Form -->
      <form method="post">
        <select name="category" class="fadeIn first cat" id = "cat" id = "cat">
          <option value="Select Category">Select Category</option>
          <option value="HR">HR</option>
          <option value="Interviewer">Interviewer</option>  
          <option value="Candidate">Candidate</option> </select>
        <input type="text" id="email" name="email" class="fadeIn second" name="email" placeholder="email">
        <input type="password" id="password" name="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" name="submit" id="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        
        <!-- <a class="underlineHover" href="#">Forgot Password?</a> -->
      </div>

    </div>
  </div>
</body>


</html>
