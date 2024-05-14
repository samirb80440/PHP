<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test</title>
</head>
<body>
  <thead>
    <tr>
   <th><?php 
 for ($i = 0; $i <= 9; $i++)
 {
     Echo $i.'<br>';
     
     for ($j = 0; $j <= 9; $j++)
     {
         echo $i.' x '.$j.' = '.$i*$j.'<br>';
     }
 }
  ?></th 
  </tr>
  </thead>
</body>
</html>