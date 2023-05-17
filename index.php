<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1-3</title>
</head>
<body>
    <?php
    $question = array(
        "問題" => "日本の首都は？"
    );
    ?>
    <h1><?php echo $question["問題"]; ?></h1>
    <?php
    $answer = array (
        "回答１" => "大阪",
        "回答２" => "北海道",
        "回答３" => "箱根",
        "回答４" => "東京",
    );
    ?>
    <p><?php 
    foreach ($answer as $key => $value) {
        echo $key . $value . "<br>";
    }
    ?></p>
</body>
</html>