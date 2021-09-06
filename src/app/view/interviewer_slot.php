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
                <li class="nav-item active">
                <a class="nav-link" href="https://helium-front.herokuapp.com/?page=home">Home </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Slot <span class="sr-only">(current)</span></a>
                </li>
                
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
            <h1 class="jumbotron-heading">Interviewer Slot</h1>
            </div>
        </section>

        <div style="margin-top:20px; max-width:900px; margin:auto;">
            <div style="padding:30px;">

                <div class="bday_row">
                    <form method="post">
                        <div class="form-group">
                            <input type="hidden" name="selTracker" id="selTracker" value="true"/>
                            <button type="submit" name="submit" id="submit" class="btn my-2 float-right" style="background:#56BAED; color:white; font-size:11px;">SUBMIT SLOT</button>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Month</label>
                                    <select name="selMonth" id="selMonth" class="browser-default custom-select" [(ngModel)] = "registerService.formData.bday" required>
                                        
                                        <option name="September">September</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Day </label>
                                    <select name="selDay" id="selDay" class="browser-default custom-select" onchange="javascript:valueselect(this)">
                                        <!--<option selected>Select Gender</option>-->
                                        <?php
                                            $i = 0;
                                            while($i < 31){ $i++ ?>
                                                <option name="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="9:00am-10:00am" /> <label>9:00am-10:00am</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="10:00am-11:00am" (change) = "radioHandler($event)"/> <label>10:00am-11:00am</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="11:00am-12:00pm" (change) = "radioHandler($event)"/> <label>11:00am-12:00am</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="12:00pm-1:00pm" (change) = "radioHandler($event)"/> <label>12:00pm-1:00pm</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="1:00pm-2:00pm" (change) = "radioHandler($event)"/> <label>1:00pm-2:00pm</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="2:00pm-3:00pm" (change) = "radioHandler($event)"/> <label>2:00pm-3:00pm</label>
                                    </div>
                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="3:00pm-4:00pm" (change) = "radioHandler($event)"/> <label>3:00pm-4:00pm</label>
                                    </div>

                                    <div class="form-check" style="padding-top:12px;">
                                        <input class="form-check-input" type="radio" name="selTime" value="4:00pm-5:00pm" (change) = "radioHandler($event)"/> <label>4:00pm-5:00pm</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
