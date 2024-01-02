<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP課題１</title>

</head>

<body>
    <div class="menu">
        <h3>menu</h3>
    
        <h4>アンケートアプリ課題</h4>
        </div>

    <form action="write.php" method="post">
        
        <p>お名前: <input type="text" name="name"></p>
        <p>EMAIL: <input type="email" name="email"></p>
        <p>性別: 
        <input type="radio" name="gender" id="male" value="男性"  checked  /> <label for="male">男性</label> 
        <input type="radio" name="gender" id="female" value="女性" /><label for="female">女性</label>
        <input type="radio" name="gender" id="other" value="その他"  /><label for="other">その他</label></p>
        <p>参考URL : <input type="url" name="URL"></p>
        <label>コンテンツ<textArea name="contents" rows="4" cols="40"></textArea></label><br>

     
        <input type="submit" value="送信">
    </form>
</body>

</html>
