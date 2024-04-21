<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div class="page-content-php">
    <div id="user-info">
    <?php
    $length = $_GET["length"];

    echo "Your length is: " . $length . ".";
    ?>
    </div>
  </div>
</body>
</html>