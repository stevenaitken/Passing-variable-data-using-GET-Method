<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="description" content="A short description of the web page purpose/ intent">
    <meta name="author" content="Author's name 2021">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <title>Delete Records</title>

</head>
<body>

<header><h2>This example does not delete records but shows how to attach an id to a query string using the GET Method</h2></header>
    <?php

    $recordID = 444;

    ?>
<!-- append PHP variable to URL string method 1 -->

<a href="delete.php?id=23">Delete record#1</a>

<!-- append PHP variable to URL string method 2 -->

<p><a href="delete.php?id=<?php echo 26 ?>">Delete record#2</a></p>

<!-- append PHP variable to URL string method 3 wrting the HTML within PHP-->
<?php
echo '<p><a href="delete.php?id='.$recordID.'">Delete record#3</a></p>';
?>

<!-- append PHP variable to URL string method 4 -->
<p><a href="delete.php?id=<?php echo $recordID ?>">Delete record#4</a></p>


</body>
</html>
