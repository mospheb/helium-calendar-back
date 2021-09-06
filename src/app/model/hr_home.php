<?php
if (!isset($_SESSION["reg_email"])){
    echo '<script>window.location.replace("https://helium-front.herokuapp.com/?page=index")</script>';
}

if(isset($_POST["submit"])){

$category = form_process($_POST["category"]);
$name = form_process($_POST["name"]);
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
    $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'completed_interview'=>0);
    $data_json = json_encode($data);

    if($category == 'Candidate'){
        $url = 'https://helium-backend.herokuapp.com/api/candidate/create.php';
        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'interviewed'=>false);
        $data_json = json_encode($data);
    }
    else if($category == 'Interviewer'){
        $url = 'https://helium-backend.herokuapp.com/api/interviewer/create.php';
        $data = array('name'=>$name, 'email'=>$email, 'password'=>$password, 'completed_interview'=>0);
        $data_json = json_encode($data);
    }
    

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

    if ($response->status === 'success'){
        
        echo '<script>alert("Account created successfully")</script>';
    }
    else {
        echo '<script>alert("Account not created")</script>';
    }
}
}