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
    .sub-item{color:#888; font-size:13px;}
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
                    <a class="nav-link" href="#">Home </span></a>
                    </li>
                    <li class="nav-item">
                    <?php
                    if($_SESSION["reg_category"] == 'Candidate'){ ?>
                        <a class="nav-link" href="/?page=candidate_slot">Slot</a>
                    <?php }
                    else {?>
                        <a class="nav-link" href="/?page=interviewer_slot">Slot</a>
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
       
        <h3>API Documentation</h3><br>

        <p>The website will be having a RESTful API backend that will be releasing different entry points for different operations. Here are the useful entry points available and the expected details to pass each request
        </p>
        <p>The entry points have been divided based on the category of users and the general activities on the application
        </p><br>
        
        <h4>HR</h4>

        <p><strong>/login</strong><br><br>
            https://helium-backend.herokuapp.com/api/hr/login.php<br><br>

            Request = POST<br><br>
            Body Params:<br>
            <span class="sub-item">
            email : String<br>
            password : String<br><br>
            </span>
            

            Header:<br>
            <span class="sub-item">
                header(‘Access-Control-Allow-Origin: *');<br>
                header('Content-Type: application/json');<br><br>
            </span>
            Response:<br>
            <span class="sub-item">
                Success<br>
                -	success<br>
                Error<br>
                -	error<br>
            </span>
        </p>
        
        <div id="candidate" style="margin-top:30px;">
            <h4>Candidate</h4>

            <p><strong>/create</strong><br><br>
                https://helium-backend.herokuapp.com/api/candidate/create.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    name: String
                    email : String
                    password : String
                    interviewed: String //true | false
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"message":"Candidate registered", "status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"Candidate not registered", "status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/login</strong><br><br>
                https://helium-backend.herokuapp.com/api/candidate/login.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    email : String
                    password : String
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"name":"xxx","email":"xxx","category":"xxx"}],"status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_single</strong><br><br>
                https://helium-backend.herokuapp.com/api/candidate/read_single.php?id=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    id: String //candidate id
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"id":"xxx","name":"xxx","email":"xxx","password":"xxx","interviewed":"xxx",",”count":”xxx”}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No candidate found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read</strong><br><br>
                https://helium-backend.herokuapp.com/api/candidate/read.php<br><br>

                Request = GET<br><br>
                
                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","name":"xxx","email":"xxx","password":"xxx","interviewed":"xxx"}]"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No candidate found","count":0}<br>
                    </span>
                
            </p>

        </div>

        <div id="interviewer" style="margin-top:30px;">
            <h4>Interviewer</h4>

            <p><strong>/create</strong><br><br>
                https://helium-backend.herokuapp.com/api/interviewer/create.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    name: String
                    email : String
                    password : String
                    completed_interview: Integer //0
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"message":"Interviewer registered", "status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"Interviewer not registered", "status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/login</strong><br><br>
                https://helium-backend.herokuapp.com/api/interviewer/login.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    email : String
                    password : String
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"name":"xxx","email":"xxx","category":"xxx"}],"status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_single</strong><br><br>
                https://helium-backend.herokuapp.com/api/interviewer/read_single.php?id=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    id: String //interviewer id
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"id":"xxx","name":"xxx","email":"xxx","password":"xxx","completed_interview":"xxx",",”count":”xxx”}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No interviewer found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read</strong><br><br>
                https://helium-backend.herokuapp.com/api/interviewer/read.php<br><br>

                Request = GET<br><br>
                
                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","name":"xxx","email":"xxx","password":"xxx","completed_interview":"xxx"}]"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No interviewer found","count":0}<br>
                    </span>
                
            </p>

        </div>    

        <div id="slot" style="margin-top:30px;">
            <h4>Slot</h4>

            <p><strong>/create</strong><br><br>
                https://helium-backend.herokuapp.com/api/slot/create.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    name: String
                    email : String
                    month: String
                    day: Integer
                    time: String
                    date: String
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"message":"Slot created", "status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"Slot not registered", "status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_single</strong><br><br>
                https://helium-backend.herokuapp.com/api/slot/read_single.php?email=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    email: String //interviewer email
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"id":"xxx","name":"xxx","email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, ”count":”xxx”}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_two</strong><br><br>
                https://helium-backend.herokuapp.com/api/slot/read_two.php?month=xxx&day=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September
                    day: Integer //example: 25 
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","name":"xxx","email":"xxx","int_month":"xxx","int_day":"xxx","int_time":"xxx", "ddate":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_three</strong><br><br>
                https://helium-backend.herokuapp.com/api/slot/read_three.php?month=xxx&day=xxx&time=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September
                    day: Integer //example: 25 
                    time: String //example: 10:00am-11:00am 
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","name":"xxx","email":"xxx","int_month":"xxx","int_day":"xxx","int_time":"xxx", "ddate":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_four</strong><br><br>
                https://helium-backend.herokuapp.com/api/slot/read_four.php?month=xxx&day=xxx&time=xxx&email=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September
                    day: Integer //example: 25 
                    time: String //example: 10:00am-11:00am 
                    email: String //interviewer’s email
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","name":"xxx","email":"xxx","int_month":"xxx","int_day":"xxx","int_time":"xxx", "ddate":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

        </div>


        <div id="slot" style="margin-top:30px;">
            <h4>Interview</h4>

            <p><strong>/create</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/create.php<br><br>

                Request = POST<br><br>
                
                Body Params:<br>
                <span class="sub-item">
                    candidate_name: String
                    candidate_email : String
                    interviewer_email : String
                    int_month: String
                    int_day: Integer
                    int_time: String
                    status: String
                    ddate: String
                </span><br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"message":"Interview scheduled", "status":"success"}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"Interview scheduled", "status":"error"}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_single</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/read_single.php?month=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example September
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"id":"xxx","candidate_name":"xxx","candidate_email":"xxx","interviewer_email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, "status":"xxx", ”count":”xxx”}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No Interview Scheduled","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_email</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/read_email.php?email=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    email: String
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"id":"xxx","candidate_name":"xxx","candidate_email":"xxx","interviewer_email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, "status":"xxx", ”count":”xxx”}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No Interview Scheduled","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_three</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/read_three.php?month=xxx&day=xxx&time=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September
                    day: Integer //example: 25 
                    time: String //example: 10:00am-11:00am 
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","candidate_name":"xxx","candidate_email":"xxx","interviewer_email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, "status":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_candidate_two</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/read_candidate_two.php?month=xxx&email=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September 
                    email: String 
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","candidate_name":"xxx","candidate_email":"xxx","interviewer_email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, "status":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

            <br>

            <p><strong>/read_interviewer_two</strong><br><br>
                https://helium-backend.herokuapp.com/api/interview/read_interviewer_two.php?month=xxx&email=xxx<br><br>

                Request = GET<br><br>
                
                Query Params:<br>
                <span class="sub-item">
                    month: String //example: September 
                    email: String 
                </span>
                
                <br><br>

                Header:<br>
                <span class="sub-item">
                    header(‘Access-Control-Allow-Origin: *');<br>
                    header('Content-Type: application/json');<br><br>
                </span>
                Response:<br>
                    Success<br>
                    <span class="sub-item">
                        {"data":[{"id":"xxx","candidate_name":"xxx","candidate_email":"xxx","interviewer_email":"xxx","int_month":"xxx","int_day":"xxx", “int_time":"xxx”, “ddate":"xxx”, "status":"xxx"}],"count":xxx}<br>
                    </span>
                    Error<br>
                    <span class="sub-item">
                        {"message":"No record found","count":0}<br>
                    </span>
                
            </p>

        </div>

    </div>

   <div class="container-fluid bg-dark">
        <div class="container" style="text-align:right; color:white; font-size:12px;">
           <div style="padding:20px;">
            <a href="https://helium-front.herokuapp.com/?page=doc">API Documentation</a> | API Reference
           </div> 
        </div>
   </div>

</body>


</html>
