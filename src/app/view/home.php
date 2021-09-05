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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                
                <li class="nav-item">
                    <form method="post">
                        <button type="submit" name="logout" id="logout" class="btn my-2 float-right" style="background:white; color:black; font-size:11px; margin-left:30px;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section class="jumbotron text-center">
        <div class="container">
        <h1 class="jumbotron-heading">Helium Calendar</h1>
        <p class="lead text-muted">Check out the slots for your interview and prepare ahead. Please be ready at least 20 minutes before the time to check your 
        internet connection, audio and video.</p>
        <p>
            
        </p>
        </div>
    </section>

    <div id="loader" style="margin-top:100px; margin-top:200px;">
        <table id="loader" width="100%" style="margin-top:40px;">
            <tr>
                <td align="center"> <img src="../assets/loader.gif" width="120px"/></td>
            </tr>
        </table>
    </div>

    <div id="main" style="margin-bottom:40px; display:none">

    <div class="container-fluid" style="padding-top:30px; padding-bottom:30px; padding-left:40px;">
    <h3>September</h3>
    </div>

    <div class="row">
        <div class="col-md-2">
         <table width="100%">
            <tr>
                <th class="content-th">Day</th>
            </tr>
            <tr>
                <th class="content-th">10:00am-11:00am</th>
            </tr>
            <tr>
                <th class="content-th">11:00am-12:00pm</th>
            </tr>
            <tr>
                <th class="content-th">12:00pm-1:00pm</th>
            </tr>
            <tr>
                <th class="content-th">1:00pm-2:00pm</th>
            </tr>
            <tr>
                <th class="content-th">2:00pm-3:00pm</th>
            </tr>
            <tr>
                <th class="content-th">3:00pm-4:00pm</th>
            </tr>
            <tr>
                <th class="content-th">4:00pm-5:00pm</th>
            </tr>
            <tr>
                <th class="content-th">5:00pm-6:00pm</th>
            </tr>
         </table>
        </div>
        <div class="col-md-10">
        <div style="overflow-x:auto;">
        <table class="table" style="width:1200px; table-layout:fixed; margin:auto;">
            <thead>
                <tr valign="middle" align="center">
                <?php
                 $i = 0;
                 while($i < 31){ $i++ ?>
                    <td class="align-middle" style="width:190px; height:80px; border-right:1px solid #dee2e6;"><?php echo $i; ?></td>
                <?php } ?>
                </tr>
            </thead>
            <tbody>
                <tr id="10:00am-11:00am" align="center">
                    <td class="content-td align-middle" id="a1"></td>
                    <td class="content-td align-middle" id="a2"></td>
                    <td class="content-td align-middle" id="a3"></td>
                    <td class="content-td align-middle" id="a4"></td>
                    <td class="content-td align-middle" id="a5"></td>
                    <td class="content-td align-middle" id="a6"></td>
                    <td class="content-td align-middle" id="a7"></td>
                    <td class="content-td align-middle" id="a8"></td>
                    <td class="content-td align-middle" id="a9"></td>
                    <td class="content-td align-middle" id="a10"></td>
                    <td class="content-td align-middle" id="a11"></td>
                    <td class="content-td align-middle" id="a12"></td>
                    <td class="content-td align-middle" id="a13"></td>
                    <td class="content-td align-middle" id="a14"></td>
                    <td class="content-td align-middle" id="a15"></td>
                    <td class="content-td align-middle" id="a16"></td>
                    <td class="content-td align-middle" id="a17"></td>
                    <td class="content-td align-middle" id="a18"></td>
                    <td class="content-td align-middle" id="a19"></td>
                    <td class="content-td align-middle" id="a20"></td>
                    <td class="content-td align-middle" id="a21"></td>
                    <td class="content-td align-middle" id="a22"></td>
                    <td class="content-td align-middle" id="a23"></td>
                    <td class="content-td align-middle" id="a24"></td>
                    <td class="content-td align-middle" id="a25"></td>
                    <td class="content-td align-middle" id="a26"></td>
                    <td class="content-td align-middle" id="a27"></td>
                    <td class="content-td align-middle" id="a28"></td>
                    <td class="content-td align-middle" id="a29"></td>
                    <td class="content-td align-middle" id="a30"></td>
                    <td class="content-td align-middle" id="a31"></td>
                    
                </tr>
                <tr id="11:00am-12:00pm" align="center">
                    <td class="content-td align-middle" id="b1"></td>
                    <td class="content-td align-middle" id="b2"></td>
                    <td class="content-td align-middle" id="b3"></td>
                    <td class="content-td align-middle" id="b4"></td>
                    <td class="content-td align-middle" id="b5"></td>
                    <td class="content-td align-middle" id="b6"></td>
                    <td class="content-td align-middle" id="b7"></td>
                    <td class="content-td align-middle" id="b8"></td>
                    <td class="content-td align-middle" id="b9"></td>
                    <td class="content-td align-middle" id="b10"></td>
                    <td class="content-td align-middle" id="b11"></td>
                    <td class="content-td align-middle" id="b12"></td>
                    <td class="content-td align-middle" id="b13"></td>
                    <td class="content-td align-middle" id="b14"></td>
                    <td class="content-td align-middle" id="b15"></td>
                    <td class="content-td align-middle" id="b16"></td>
                    <td class="content-td align-middle" id="b17"></td>
                    <td class="content-td align-middle" id="b18"></td>
                    <td class="content-td align-middle" id="b19"></td>
                    <td class="content-td align-middle" id="b20"></td>
                    <td class="content-td align-middle" id="b21"></td>
                    <td class="content-td align-middle" id="b22"></td>
                    <td class="content-td align-middle" id="b23"></td>
                    <td class="content-td align-middle" id="b24"></td>
                    <td class="content-td align-middle" id="b25"></td>
                    <td class="content-td align-middle" id="b26"></td>
                    <td class="content-td align-middle" id="b27"></td>
                    <td class="content-td align-middle" id="b28"></td>
                    <td class="content-td align-middle" id="b29"></td>
                    <td class="content-td align-middle" id="b30"></td>
                    <td class="content-td align-middle" id="b31"></td>
                </tr>
                <tr id="12:00pm-1:00pm" align="center">
                    <td class="content-td align-middle" id="c1"></td>
                    <td class="content-td align-middle" id="c2"></td>
                    <td class="content-td align-middle" id="c3"></td>
                    <td class="content-td align-middle" id="c4"></td>
                    <td class="content-td align-middle" id="c5"></td>
                    <td class="content-td align-middle" id="c6"></td>
                    <td class="content-td align-middle" id="c7"></td>
                    <td class="content-td align-middle" id="c8"></td>
                    <td class="content-td align-middle" id="c9"></td>
                    <td class="content-td align-middle" id="c10"></td>
                    <td class="content-td align-middle" id="c11"></td>
                    <td class="content-td align-middle" id="c12"></td>
                    <td class="content-td align-middle" id="c13"></td>
                    <td class="content-td align-middle" id="c14"></td>
                    <td class="content-td align-middle" id="c15"></td>
                    <td class="content-td align-middle" id="c16"></td>
                    <td class="content-td align-middle" id="c17"></td>
                    <td class="content-td align-middle" id="c18"></td>
                    <td class="content-td align-middle" id="c19"></td>
                    <td class="content-td align-middle" id="c20"></td>
                    <td class="content-td align-middle" id="c21"></td>
                    <td class="content-td align-middle" id="c22"></td>
                    <td class="content-td align-middle" id="c23"></td>
                    <td class="content-td align-middle" id="c24"></td>
                    <td class="content-td align-middle" id="c25"></td>
                    <td class="content-td align-middle" id="c26"></td>
                    <td class="content-td align-middle" id="c27"></td>
                    <td class="content-td align-middle" id="c28"></td>
                    <td class="content-td align-middle" id="c29"></td>
                    <td class="content-td align-middle" id="c30"></td>
                    <td class="content-td align-middle" id="c31"></td>
                </tr>
                <tr id="1:00pm-2:00pm" align="center">
                    <td class="content-td align-middle" id="d1"></td>
                    <td class="content-td align-middle" id="d2"></td>
                    <td class="content-td align-middle" id="d3"></td>
                    <td class="content-td align-middle" id="d4"></td>
                    <td class="content-td align-middle" id="d5"></td>
                    <td class="content-td align-middle" id="d6"></td>
                    <td class="content-td align-middle" id="d7"></td>
                    <td class="content-td align-middle" id="d8"></td>
                    <td class="content-td align-middle" id="d9"></td>
                    <td class="content-td align-middle" id="d10"></td>
                    <td class="content-td align-middle" id="d11"></td>
                    <td class="content-td align-middle" id="d12"></td>
                    <td class="content-td align-middle" id="d13"></td>
                    <td class="content-td align-middle" id="d14"></td>
                    <td class="content-td align-middle" id="d15"></td>
                    <td class="content-td align-middle" id="d16"></td>
                    <td class="content-td align-middle" id="d17"></td>
                    <td class="content-td align-middle" id="d18"></td>
                    <td class="content-td align-middle" id="d19"></td>
                    <td class="content-td align-middle" id="d20"></td>
                    <td class="content-td align-middle" id="d21"></td>
                    <td class="content-td align-middle" id="d22"></td>
                    <td class="content-td align-middle" id="d23"></td>
                    <td class="content-td align-middle" id="d24"></td>
                    <td class="content-td align-middle" id="d25"></td>
                    <td class="content-td align-middle" id="d26"></td>
                    <td class="content-td align-middle" id="d27"></td>
                    <td class="content-td align-middle" id="d28"></td>
                    <td class="content-td align-middle" id="d29"></td>
                    <td class="content-td align-middle" id="d30"></td>
                    <td class="content-td align-middle" id="d31"></td>
                </tr>
                <tr id="2:00pm-3:00pm" align="center">
                    <td class="content-td align-middle" id="e1"></td>
                    <td class="content-td align-middle" id="e2"></td>
                    <td class="content-td align-middle" id="e3"></td>
                    <td class="content-td align-middle" id="e4"></td>
                    <td class="content-td align-middle" id="e5"></td>
                    <td class="content-td align-middle" id="e6"></td>
                    <td class="content-td align-middle" id="e7"></td>
                    <td class="content-td align-middle" id="e8"></td>
                    <td class="content-td align-middle" id="e9"></td>
                    <td class="content-td align-middle" id="e10"></td>
                    <td class="content-td align-middle" id="e11"></td>
                    <td class="content-td align-middle" id="e12"></td>
                    <td class="content-td align-middle" id="e13"></td>
                    <td class="content-td align-middle" id="e14"></td>
                    <td class="content-td align-middle" id="e15"></td>
                    <td class="content-td align-middle" id="e16"></td>
                    <td class="content-td align-middle" id="e17"></td>
                    <td class="content-td align-middle" id="e18"></td>
                    <td class="content-td align-middle" id="e19"></td>
                    <td class="content-td align-middle" id="e20"></td>
                    <td class="content-td align-middle" id="e21"></td>
                    <td class="content-td align-middle" id="e22"></td>
                    <td class="content-td align-middle" id="e23"></td>
                    <td class="content-td align-middle" id="e24"></td>
                    <td class="content-td align-middle" id="e25"></td>
                    <td class="content-td align-middle" id="e26"></td>
                    <td class="content-td align-middle" id="e27"></td>
                    <td class="content-td align-middle" id="e28"></td>
                    <td class="content-td align-middle" id="e29"></td>
                    <td class="content-td align-middle" id="e30"></td>
                    <td class="content-td align-middle" id="e31"></td>
                </tr>
                <tr id="3:00pm-4:00pm" align="center">
                <td class="content-td align-middle" id="f1"></td>
                    <td class="content-td align-middle" id="f2"></td>
                    <td class="content-td align-middle" id="f3"></td>
                    <td class="content-td align-middle" id="f4"></td>
                    <td class="content-td align-middle" id="f5"></td>
                    <td class="content-td align-middle" id="f6"></td>
                    <td class="content-td align-middle" id="f7"></td>
                    <td class="content-td align-middle" id="f8"></td>
                    <td class="content-td align-middle" id="f9"></td>
                    <td class="content-td align-middle" id="f10"></td>
                    <td class="content-td align-middle" id="f11"></td>
                    <td class="content-td align-middle" id="f12"></td>
                    <td class="content-td align-middle" id="f13"></td>
                    <td class="content-td align-middle" id="f14"></td>
                    <td class="content-td align-middle" id="f15"></td>
                    <td class="content-td align-middle" id="f16"></td>
                    <td class="content-td align-middle" id="f17"></td>
                    <td class="content-td align-middle" id="f18"></td>
                    <td class="content-td align-middle" id="f19"></td>
                    <td class="content-td align-middle" id="f20"></td>
                    <td class="content-td align-middle" id="f21"></td>
                    <td class="content-td align-middle" id="f22"></td>
                    <td class="content-td align-middle" id="f23"></td>
                    <td class="content-td align-middle" id="f24"></td>
                    <td class="content-td align-middle" id="f25"></td>
                    <td class="content-td align-middle" id="f26"></td>
                    <td class="content-td align-middle" id="f27"></td>
                    <td class="content-td align-middle" id="f28"></td>
                    <td class="content-td align-middle" id="f29"></td>
                    <td class="content-td align-middle" id="f30"></td>
                    <td class="content-td align-middle" id="f31"></td>
                </tr>
                <tr id="4:00pm-5:00pm" align="center">
                <td class="content-td align-middle" id="g1"></td>
                    <td class="content-td align-middle" id="g2"></td>
                    <td class="content-td align-middle" id="g3"></td>
                    <td class="content-td align-middle" id="g4"></td>
                    <td class="content-td align-middle" id="g5"></td>
                    <td class="content-td align-middle" id="g6"></td>
                    <td class="content-td align-middle" id="g7"></td>
                    <td class="content-td align-middle" id="g8"></td>
                    <td class="content-td align-middle" id="g9"></td>
                    <td class="content-td align-middle" id="g10"></td>
                    <td class="content-td align-middle" id="g11"></td>
                    <td class="content-td align-middle" id="g12"></td>
                    <td class="content-td align-middle" id="g13"></td>
                    <td class="content-td align-middle" id="g14"></td>
                    <td class="content-td align-middle" id="g15"></td>
                    <td class="content-td align-middle" id="g16"></td>
                    <td class="content-td align-middle" id="g17"></td>
                    <td class="content-td align-middle" id="g18"></td>
                    <td class="content-td align-middle" id="g19"></td>
                    <td class="content-td align-middle" id="g20"></td>
                    <td class="content-td align-middle" id="g21"></td>
                    <td class="content-td align-middle" id="g22"></td>
                    <td class="content-td align-middle" id="g23"></td>
                    <td class="content-td align-middle" id="g24"></td>
                    <td class="content-td align-middle" id="g25"></td>
                    <td class="content-td align-middle" id="g26"></td>
                    <td class="content-td align-middle" id="g27"></td>
                    <td class="content-td align-middle" id="g28"></td>
                    <td class="content-td align-middle" id="g29"></td>
                    <td class="content-td align-middle" id="g30"></td>
                    <td class="content-td align-middle" id="g31"></td>
                </tr>
                <tr id="5:00pm-6:00pm" align="center">
                <td class="content-td align-middle bline" id="h1"></td>
                    <td class="content-td align-middle bline" id="h2"></td>
                    <td class="content-td align-middle bline" id="h3"></td>
                    <td class="content-td align-middle bline" id="h4"></td>
                    <td class="content-td align-middle bline" id="h5"></td>
                    <td class="content-td align-middle bline" id="h6"></td>
                    <td class="content-td align-middle bline" id="h7"></td>
                    <td class="content-td align-middle bline" id="h8"></td>
                    <td class="content-td align-middle bline" id="h9"></td>
                    <td class="content-td align-middle bline" id="h10"></td>
                    <td class="content-td align-middle bline" id="h11"></td>
                    <td class="content-td align-middle bline" id="h12"></td>
                    <td class="content-td align-middle bline" id="h13"></td>
                    <td class="content-td align-middle bline" id="h14"></td>
                    <td class="content-td align-middle bline" id="h15"></td>
                    <td class="content-td align-middle bline" id="h16"></td>
                    <td class="content-td align-middle bline" id="h17"></td>
                    <td class="content-td align-middle bline" id="h18"></td>
                    <td class="content-td align-middle bline" id="h19"></td>
                    <td class="content-td align-middle bline" id="h20"></td>
                    <td class="content-td align-middle bline" id="h21"></td>
                    <td class="content-td align-middle bline" id="h22"></td>
                    <td class="content-td align-middle bline" id="h23"></td>
                    <td class="content-td align-middle bline" id="h24"></td>
                    <td class="content-td align-middle bline" id="h25"></td>
                    <td class="content-td align-middle bline" id="h26"></td>
                    <td class="content-td align-middle bline" id="h27"></td>
                    <td class="content-td align-middle bline" id="h28"></td>
                    <td class="content-td align-middle bline" id="h29"></td>
                    <td class="content-td align-middle bline" id="h30"></td>
                    <td class="content-td align-middle bline" id="h31"></td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>
    </div>


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
