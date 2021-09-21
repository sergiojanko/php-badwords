<?php
$bad_word = 'ipsum';
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, neque exercitationem, incidunt eligendi repudiandae dolorem dolorum iusto quas nesciunt maxime atque iure. Eaque neque reprehenderit, voluptate repudiandae amet qui perspiciatis.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <p><?php echo str_replace($bad_word, '***', $text) ?></p>
</body>
</html>