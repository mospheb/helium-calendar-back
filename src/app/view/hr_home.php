<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Helium Health Calendar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Helium Calendar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form method="post">
            <button type="submit" name="logout" id="logout" class="btn my-2 float-right" style="background:white; color:black; font-size:11px; margin-left:30px;">Logout</button>
        </form>
      </li>
    </ul>
    </div>
  </div>
</nav>

<main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Helium Calendar</h1>
          <p class="lead text-muted">Please register the interviewers and the candidates. Ensure that interviewers have added their slots before notifying 
          the candidates to visit the site for selecting best slot for their interviews </p>
          
        </div>
      </section>

      <div style="margin-top:20px; max-width:600px; margin:auto;">
      
        <div style="padding:30px;">

          <form method="post" style="margin-top:1.5rem;">

              <div class="form-group">
                <label>Select Category</label>
                  <select name="category" id="category" class="browser-default custom-select">
                      <option name="Select Category">Select Category</option>
                      <option name="Interviewer">Interviewer</option>
                      <option name="Candidate">Candidate</option>
                  </select>
              </div>

              <div class="form-group">
                  <label>Full Name </label>
                  <input type="text" name="name" id="name" class="form-control" >
                  
              </div>

              <div class="form-group">
                  <label>Email </label>
                  <input type="text" name="email" id="email" class="form-control">
            
              </div>

              <div class="form-group">
                  <label>Password </label>
                  <input type="password" name="password" id="password" class="form-control" >
                  
              </div>
              
              
              <div class="form-group">
              <button type="submit" name="submit" id="submit" class="btn btn-lg btn-block subtn" style="background:#56BAED; color:white; padding:12px;">SUBMIT</button>
                  
              </div>
          </form> 
           
        </div>
      </div>

    </main>

    <div class="container-fluid bg-dark">
        <div class="container" style="text-align:right; color:white; font-size:12px;">
           <div style="padding:20px;">
            <a href="https://helium-front.herokuapp.com/?page=doc">API Documentation</a> | <a href="https://helium-front.herokuapp.com/?page=api">API Reference</a>
           </div> 
        </div>
   </div>

</body>


</html>
