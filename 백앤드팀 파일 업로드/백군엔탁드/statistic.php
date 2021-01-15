

<?php
echo "<h1>디자인 시급!!</h1>";
$type = $_POST['hidden_mbti'];
//type 파라미터 체크
//echo $type;
$conn = mysqli_connect(
    'localhost',
    'root',
    '1111',
    'pika');

$sql = 'SELECT * FROM usr_input where mbti_type ="'.$type.'";';
$res = mysqli_query($conn, $sql);
/* 쿼리 테스트용
if($res === false){
    echo "흐힣";
}else{
    echo "흐흐힣";
}
*/
$times_of_answer = array(0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.0);
$total = 0; // total
while($row = mysqli_fetch_array($res)){
    $total = $total+1;
    for($i =0;$i<12;$i++){
        $t = $i +1;
        if($row["q$t"] == 1){
            $times_of_answer[$i]= $times_of_answer[$i] + 1;
        }
    }
}

echo "<br><br><br>";


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>결과</title>
    <link rel="stylesheet" href="style1.css"/>
    
  </head>
  <body id="firstPageBody">
    <h1 id="firstPageH1"><?="당신과 같은 캐릭터를 닮은 사람은 총 $total 명입니다.";?></h1>
   
    <table>
    <tr>
        <th>질문 번호</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
        <th>Q5</th>
        <th>Q6</th>
        <th>Q7</th>
        <th>Q8</th>
        <th>Q9</th>
        <th>Q10</th>
        <th>Q11</th>
        <th>Q12</th>
</tr>
<tr>
        <th>1번 질문</th>
        <th><?=($times_of_answer[0]/$total)*100;?>%</th>
        <th><?=($times_of_answer[1]/$total)*100;?>%</th>
        <th><?=($times_of_answer[2]/$total)*100;?>%</th>
        <th><?=($times_of_answer[3]/$total)*100;?>%</th>
        <th><?=($times_of_answer[4]/$total)*100;?>%</th>
        <th><?=($times_of_answer[5]/$total)*100;?>%</th>
        <th><?=($times_of_answer[6]/$total)*100;?>%</th>
        <th><?=($times_of_answer[7]/$total)*100;?>%</th>
        <th><?=($times_of_answer[8]/$total)*100;?>%</th>
        <th><?=($times_of_answer[9]/$total)*100;?>%</th>
        <th><?=($times_of_answer[10]/$total)*100;?>%</th>
        <th><?=($times_of_answer[11]/$total)*100;?>%</th>
</tr>
<tr>
        <th>2번 질문</th>
        <th><?=(($total-$times_of_answer[0])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[1])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[2])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[3])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[4])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[5])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[6])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[7])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[8])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[9])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[10])/$total)*100;?></th>
        <th><?=(($total-$times_of_answer[11])/$total)*100;?></th>

</tr>
</table>
    
    <h2></h2>
    <script src="name.js"></script>
  </body>
</html>
