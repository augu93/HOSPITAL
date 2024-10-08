<html>
<body>
<form method = "post">
    Width: <input type="number" name="width"> <br><br>
    Length: <input type="number" name="length"> <br><br>
     <input type = "submit" name ="submit" value="calculator">
</form>
</body>
<?php
    if($_POST )
    {
      $width = $_POST['width'];
      $length = $_POST['length'];
      $area = $width*$length;
    echo "The area of a rectangle with $width x $length is $area";
    }
?>
</html>

