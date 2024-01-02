<?php
// ファイルを開く
 $data =file_get_contents('data/data.txt');

// echo nl2br($data);
$read_file ='data/data.txt'; //読み込みファイル
$fp_r = fopen($read_file, "rb"); 



//第1＝ターゲット文字,第2＝元の文字列

$str1=explode("\n",$data);
// echo count( $str1);

for($i=0; $i <= count( $str1)-1; $i++){

    $str2[$i]=explode(",",$str1[$i]);

};


// var_dump($str1[0]);  
// echo "<p>---</p>";
// var_dump($str2[0]);  
// echo "<p>---</p>";
// var_dump($str1[0]);  
// echo "<p>---</p>";
// var_dump($str2[0][0]);  
// echo "<p>---</p>";
// // var_dump($str2[1]);  
// var_dump($str2[2]);  



// <a href="http://localhost/gs_code/php01/php01/write.php"></a>

// ファイル内容を1行ずつ読み込んで出力
// while($data2= fgets($fp_r) != false ){
   
//     echo nl2br($data2);

// }      

$view = '';
// for($i=0; $i <= count( $str1)-1; $i++){ 

//     $view .=  ' <tr>';
//     $view .=  ' <td>'. $str2[$i][0] .'</td>';
//     $view .=  ' <td>' .$str2[$i][1] .'</td>';
//     $view .=  ' <td>' .$str2[$i][2] .'</td>';
//     $view .=  ' <td>' .$str2[$i][3] .'</td>';
//     $view .=  ' <td>'. $str2[$i][4] .'</td>';
//     $view .=  ' <td>' .$str2[$i][5] .'</td>';
//     $view .=  ' </tr>';

// };
for($i=0; $i <= count( $str1)-3; $i++){ 
    $view .= ' <tr>';
    if (isset($str2[$i][0])) {
        $view .= ' <td>' . $str2[$i][0] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    if (isset($str2[$i][1])) {
        $view .= ' <td>' . $str2[$i][1] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    if (isset($str2[$i][2])) {
        $view .= ' <td>' . $str2[$i][2] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    if (isset($str2[$i][3])) {
        $view .= ' <td>' . $str2[$i][3] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    if (isset($str2[$i][4])) {
        $view .= ' <td>' . $str2[$i][4] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    if (isset($str2[$i][5])) {
        $view .= ' <td>' . $str2[$i][5] . '</td>';
    } else {
        $view .= ' <td>N/A</td>'; // Or whatever default value you want
    }
    $view .= ' </tr>';
   };


fclose($fp_r);

// ファイルを閉じる
?>
<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <table border="1" id="test_table" >

      <tr>
        <p>---------------------</p>
        <th>日付</th>
        <th>名前</th>
        <th>email</th>
        <th>性別</th>
        <th>URL</th>
        <th>コンテンツ</th>
       </tr>

       <?= $view ?>



    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>

