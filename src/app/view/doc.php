<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Helium Health Calendar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <style>
    .bline{border-bottom:1px solid #dee2e6;}
    .content-td {width:190px; height:80px; border-right:1px solid #dee2e6;}
    .content-th{font-weight:normal; height:80px; text-align:right; background:#dee2e6; padding-right:10px;}
 </style>

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
                    <li class="nav-item active">
                    <a class="nav-link" href="https://helium-front.herokuapp.com/?page=home">Home</span></a>
                    </li>
                    <li class="nav-item">
                    <?php
                    if($_SESSION["reg_category"] == 'Candidate'){ ?>
                        <a class="nav-link" href="https://helium-front.herokuapp.com/?page=candidate_slot">Slot</a>
                    <?php }
                    else {?>
                        <a class="nav-link" href="https://helium-front.herokuapp.com/?page=interviewer_slot">Slot</a>
                    <?php 
                    } ?>
                    </li>
                    <?php
                        if(isset($_SESSION["reg_email"])){
                    ?>
                    <li class="nav-item">
                        <form method="post">
                            <button type="submit" name="logout" id="logout" class="btn my-2 float-right" style="background:white; color:black; font-size:11px; margin-left:30px;">Logout</button>
                        </form>
                    </li>
                    <?php    
                        }
                    ?>

                    
                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron text-center">
        <div class="container">
        <h1 class="jumbotron-heading">Welcome to Helium Calendar</h1>
        <p class="lead text-muted">Read the documentation for the project and get started to using the API</p>
        <p>
            
        </p>
        </div>
    </section>



    <div class="container" id="main" style="margin-bottom:100px;">
       
        <h3>Quickstart</h3><br>

        <h4>Introduction</h4>
        <p>In this guide, we will introduce you to some of the fundamental concepts and resources related to Helium Calendar</p>
        <br>
        <h4>What is Helium Calendar</h4>
            <p>Helium Calendar is an interview calendar project for the company; Helium Health. With full RESTful API backend, the calendar 
            is helping the company in connecting the staff (interviewers) with their candidates. 
            The project is having three categories of users; the HR that will represent the company in moderating the 
            activities of the interviewer and the candidates. The candidates, that will be taking the interview and the staff interviewers.</p>
        <br>
        <h4>Website Overview</h4>
            <p>The website will be having password protected contents; allowing only the three recognized categories of users. 
            The login page shall be the landing page for the website.<p>

            <p>Every user will login to their individual home page where they will see the calendar for the month; 
            displaying and highlighting their slot for the interview.
            </p>

            <p>The Interviewers and the candidates will have a slot 
            page where they can independently create and select the best slot for themselves. 
            </p>

            <p>The HR will have only a page for registering the interviewers and the candidates and creating a login details for them. 
            The login details are to be sent to the registered individuals’ email automatically on registration and they can return to the 
            website with the login details afterward.
            </p>
            <br>
        <h4>API Overview</h4>
            <p>The website will be having a RESTful API backend that will be releasing different entry points for different operations. 
            </p>

    </div>

    <div class="container-fluid bg-dark">
        <div class="container" style="text-align:right; color:white; font-size:12px;">
           <div style="padding:20px;">
            <a href="https://helium-front.herokuapp.com/?page=doc">API Documentation</a> | <a href="https://helium-front.herokuapp.com/?page=api">API Reference</a>
           </div> 
        </div>
   </div>

</body>


</html>
