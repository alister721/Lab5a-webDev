<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
 
  <body>
    <h1>The area of a rectangle with a width of 4 and 2 is <?php echo calAreaRectangle(4,2)?></h1>

  </body>

  <?php
    function calAreaRectangle ($width, $height){
        $area = $width*$height;
        return $area;
    }
  ?>
</html>
