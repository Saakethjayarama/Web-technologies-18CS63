<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website</title>
</head>
<body>
  <?php
    $handle = fopen('Ex.txt', 'r');
    $counter =(int) fread($handle, 20);
    echo $counter;
    fclose($handle);
    
    $handle = fopen('Ex.txt', 'w');
    fwrite($handle, $counter + 1);
    fclose($handle);
  ?>
</body>
</html>