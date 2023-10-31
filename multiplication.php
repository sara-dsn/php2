<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication</title>
</head>
<body>

<?php


echo '<table border="1"><section> <thead >';
echo '<tr>';
echo '<td>1</td> ';
    echo '<td>2</td> ';
    echo '<td>3</td> ';
    echo '<td>4</td> ';
    echo '<td>5</td> ';
    echo '<td>6</td>';
    echo '<td>7</td> ';
    echo '<td>8</td> ';
    echo '<td>9</td></tr> ';
for ($i = 1&$a=1; $i<=9&$a<=9; $i++&$a++) {
    $b=$a*3;
   $c=$a*4;
   $d=$a*5;
   $e=$a*6;
   $f=$a*7;
   $g=$a*8;
   $h=$a*9;
    echo '<tr><td>' . $i . '</td>';
    echo '<td>' . $a. '</td>';
        echo '<td>' . $b. '</td> ';
        echo '<td>' . $c. '</td> ';
        echo '<td>' . $d. '</td> ';
        echo '<td>' . $e. '</td> ';
        echo '<td>' . $f. '</td>';
        echo '<td>' . $g. '</td> ';
        echo '<td>' . $h. '</td></tr> ';
    
  
};

echo '</tbody></section> </table>';




?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>