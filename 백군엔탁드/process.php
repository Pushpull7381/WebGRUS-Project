
<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "59m3vk6974",
    "pika"
);



// storing sended parameter
$q1 =  $_POST['question1'];
$q2 =  $_POST['question2'];
$q3 =  $_POST['question3'];
$q4 =  $_POST['question4'];
$q5 =  $_POST['question5'];
$q6 =  $_POST['question6'];
$q7 =  $_POST['question7'];
$q8 =  $_POST['question8'];
$q9 =  $_POST['question9'];
$q10 =  $_POST['question10'];
$q11 =  $_POST['question11'];
$q12 =  $_POST['question12'];
$name = $_POST['name'];
// SEL MBTI
// E or I
$mbti ="";
if($q1 == $q2){
    if($q1 == 1){
        $mbti = $mbti."E";
    }else{
        $mbti = $mbti."I";
    }
}else{
    if($q3==1){
        $mbti = $mbti."E";
    }else{
        $mbti = $mbti."I";
    }
}
// N or S
if($q4 == $q5){
    if($q4 == 1){
        $mbti = $mbti."N";
    }else{
        $mbti = $mbti."S";
    }
}else{
    if($q6==1){
        $mbti = $mbti."N";
    }else{
        $mbti = $mbti."S";
    }
}
// T or F
if($q7 == $q8){
    if($q7 == 1){
        $mbti = $mbti."T";
    }else{
        $mbti = $mbti."F";
    }
}else{
    if($q9==1){
        $mbti = $mbti."T";
    }else{
        $mbti = $mbti."F";
    }
}
// J or P
if($q10 == $q11){
    if($q10 == 1){
        $mbti = $mbti."J";
    }else{
        $mbti = $mbti."P";
    }
}else{
    if($q12==1){
        $mbti = $mbti."J";
    }else{
        $mbti = $mbti."P";
    }
}


//Storing Data INTO DB
$sql = "SELECT * FROM usr_input";
$result = mysqli_query($conn, $sql);

$query = "INSERT INTO usr_input (name, mbti_type, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, created) VALUES('{$name}', '{$mbti}', {$q1}, {$q2}, {$q3}, {$q4}, {$q5}, {$q6}, {$q7}, {$q8}, {$q9}, {$q10}, {$q11}, {$q12}, NOW())";
$res = mysqli_query($conn, $query);
if($res === false){
    echo "Fail";
}else{
    echo "Complete";
}

echo "<script>location.replace('./result/{$mbti}.html');</script>";



?>
