<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <p><b>text:</b></p>
        <p><textarea rows="5" cols="20" name="text"></textarea></p>
        <p><button>Submit</button></p>
    </form>
<?php
$text = $_POST['text'];
echo "количество слов в тексте - " . str_word_count($text). "<br>";
echo "количество символов в тексте - " . strlen($text) . "<br>";
echo "количество символов в тексте без пробелов - " . strlen(str_replace(" ", '', $text)); 
?>
</body>

</html>