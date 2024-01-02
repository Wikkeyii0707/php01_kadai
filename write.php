<?php

$name= $_POST['name'];
$email= $_POST['email'];
$gender= $_POST['gender'];
$URL= $_POST['URL'];
$contents= $_POST['contents'];


$time = date('Y-m-d H:i:s') ;
file_put_contents('data/data.txt', $time .",". $name .",". $email .",". $gender .",". $URL .",". $contents . "\n"  ,FILE_APPEND);

// ファイルに書き込み

//文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
