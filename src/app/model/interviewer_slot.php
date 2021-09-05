
<?php

if (!isset($_SESSION["reg_email"])){
    header("Location: https://helium-front.herokuapp.com/?page=index");
    exit();
}

if(isset($_POST["submit"])){

    $selTracker = $_POST["selTracker"];
    $selMonth = $_POST["selMonth"];
    $selDay = $_POST["selDay"];
    $selTime = $_POST["selTime"];

    if ($selTracker === 'false'){
        echo '<script>alert("Please select a non-weekend day")</script>';
    }
    else if($selTime == ''){
        echo '<script>alert("Please select a time")</script>';
    }
    else {
        
        //check interviewer's slot for that time
        $api_url = 'https://helium-backend.herokuapp.com/api/slot/read_four.php?month='.$selMonth.'&day='.$selDay.'&time='.$selTime.'&email='.$_SESSION["reg_email"];
       
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);

        $count = $response_data->count;

        if($count > 0){
            echo '<script>alert("You have a slot for that time already")</script>';
        }
        else {
             //insert into slot
            // User data to send using HTTP POST method in curl

            $date = date("d-M-Y");
            $data = array('name'=>$_SESSION["reg_name"], 'email'=>$_SESSION["reg_email"], 'ddate'=>$date, 'int_day'=>$selDay, 'int_month'=>$selMonth, 'int_time'=>$selTime);
            $data_json = json_encode($data);

            $url = 'https://helium-backend.herokuapp.com/api/slot/create.php';

            // curl initiate
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $response2  = curl_exec($ch);

            $response = json_decode($response2);
            
            curl_close($ch);
            //print_r ($response);

            if ($response->status == 'success'){
                echo '<script>alert("Slot successfully created")</script>';
            }
            else {
                echo '<script>alert("Problem creating your slot")</script>';
            }
        }
     
        
    }
}


?>