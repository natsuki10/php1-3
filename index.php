<?php
$question["問題"] = "日本の首都は？";
$answer["回答1"] = "大阪";
$answer["回答2"] = "北海道";
$answer["回答3"] = "箱根";
$answer["回答4"] = "東京";
echo $question["問題"] . "<br>";
foreach($answer as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>