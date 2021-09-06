
<?php
if (!isset($_SESSION["reg_email"])){
    echo '<script>window.location.replace("https://helium-front.herokuapp.com/?page=index")</script>';
}


if(isset($_POST["submit1"])){

    $month = $_POST["selMonth"]; 
    $day = $_POST["selDay"];
    //$time = $_POST["selTime"];

    //get all interviewers slots for the day and month and time
    $api_url = 'https://helium-backend.herokuapp.com/api/slot/read_two.php?month='.$month.'&day='.$day;  

    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);

    //print_r($response_data);
    if($response_data->count < 1){
        echo '<script>alert("Date selected is not available")</script>';
    }
    else {
        echo "<script type='text/javascript'>displayTime('$json_data', '$month', '$day');</script>";
    }
    
}

if(isset($_POST["submit2"])){
       
    $month = $_POST["newMonth"];
    $day = $_POST["newDay"];
    $time = $_POST["selTime"];

    //confirm if the candidate is having a slot already
    //only one slot permitted

    $api_url = 'https://helium-backend.herokuapp.com/api/interview/read_email.php?email='.$_SESSION["reg_email"];  
    
    $json_data = file_get_contents($api_url);
    $response_data = json_decode($json_data);

    $count = $response_data->count;

    if ($count > 0){
        echo '<script>alert("You already have an interview scheduled!")</script>';
    } 
    else {

        //get all interviewers slots for the day and month and time
        $api_url = 'https://helium-backend.herokuapp.com/api/slot/read_three.php?month='.$month.'&day='.$day.'&time='.$time;  
        
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);

        $data = $response_data->data;

        $int_slots_arr = array();

        //generate an array of all interviews available for the interview with their number of candidates
        //set initially to 0 for all interviewers

        foreach ($data as $res) {
            $arr = array($res->email => 0);
            $int_slots_arr += $arr;
        }

        

        //get all interviews already booked for the day and month and time (slot)
        $api_url  = 'https://helium-backend.herokuapp.com/api/interview/read_three.php?month='.$month.'&day='.$day.'&time='.$time;  
        $json_data = file_get_contents($api_url);

        $response_data2 = json_decode($json_data);
        $data2 = $response_data2->data;

        //loop thru the interview array and and update the value of the int_slots_arr
        foreach ($data2 as $res) {
            foreach ($int_slots_arr as $key => $val){
                if($res->interviewer_email === $key){
                    $val++;
                }
            }
        }


        //check the availability of free interviewer for the interview
        //subtracting the no of scheduled interview from the available slots

        $slot_count = $response_data->count;
        $interview_count = $response_data2->count;

        if($slot_count > $interview_count){
            
            //get the details of the first member of the array
            $interviewer_email = '';
            $interviewer_num = reset($int_slots_arr) + 1; 


            foreach ($int_slots_arr as $key => $val){
                if($val < $interviewer_num){
                    $interviewer_num = $val;
                    $interviewer_email = $key;
                }
            }

      

            //create/schedule a new interview with the interviewer's details and the candidate
            $date = date("d-M-Y");

            $data = array(
                'candidate_email'=>$_SESSION["reg_email"], 
                'candidate_name'=>$_SESSION["reg_name"], 
                'interviewer_email'=>$interviewer_email,
                'int_month'=>$month,
                'int_day'=>$day,
                'int_time'=>$time,
                'status'=>'awaiting', //completed|failed|awaiting
                'ddate'=>$date 
            );

            $url = 'https://helium-backend.herokuapp.com/api/interview/create.php';

            // curl initiate
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            
            curl_setopt($ch, CURLOPT_POST, 1);
            
            curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $response  = curl_exec($ch);
            
            curl_close($ch);
            //print_r ($response);

            if ($response->status === 'success'){
                echo '<script>alert("Your interview has been scheduled for '. $month .'-'. $day .'-'. $time .'. Be prepared")</script>';
            }
            else {
                echo '<script>alert("Technical problem. Please report to Helium")</script>';
            }

        }

        else {
            echo '<script>alert("All interviewers fixed already, plese select a new time or day!")</script>';
        }

     }
        



}


?>

