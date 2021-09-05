<?php

if(isset($_POST["submit"])){

    $category = form_process($_POST["category"]);
    $email = form_process($_POST["email"]);
    $password = $_POST["password"];


    if ($category == 'Select Category'){
        echo '<script>alert("Please select a valid category")</script>';
    }
    else if ($email == ''){
        echo '<script>alert("Please write email")</script>';
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script>alert("Please write valid email")</script>';
    }
    else if ($password == ''){
        echo '<script>alert("Please write password")</script>';
    }
    else {
        // User data to send using HTTP POST method in curl
        $data = array('email'=>$email, 'password'=>$password);
        $data_json = json_encode($data);

        if($category == 'Candidate'){
            $url = 'https://helium-backend.herokuapp.com/api/candidate/login.php';
        }
        else if($category == 'Interviewer'){
            $url = 'https://helium-backend.herokuapp.com/api/interviewer/login.php';
        }
        else if($category == 'HR'){
            $url = 'https://helium-backend.herokuapp.com/api/hr/login.php';
        }

        // curl initiate
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        
        curl_setopt($ch, CURLOPT_POST, 1);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response2  = curl_exec($ch);
        
        curl_close($ch);
        $response = json_decode($response2);

        if ($response->status === 'success'){
            
            $_SESSION["reg_category"] = $response->data[0]->category;
            $_SESSION["reg_name"] = $response->data[0]->name;
            $_SESSION["reg_email"] = $response->data[0]->email;

            if($category == 'Candidate'){
                header("Location: https://helium-front.herokuapp.com/?page=home");
                exit();
            }
            else if($category == 'Interviewer'){
                header("Location: https://helium-front.herokuapp.com/?page=home");
                exit();
            }
            else if($category == 'HR'){
                header("Location: https://helium-front.herokuapp.com/?page=hr_home");
                exit();
            }
            
        }
        else {
            echo $response->message;
            echo '<script>alert("Login details invalid")</script>';
        }
    }
}