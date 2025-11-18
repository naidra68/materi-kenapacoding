<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>
<body>
    <?php
        $salam = "hello there";
        $boolean = true; // output: 1
        $num = 123;
        $float = 3.14; // float or double
        $arr = ['a', 'b', 3, true];
        $var = null;
    ?>
    <h1><?php echo $salam; ?></h1>
    <h1><?php echo gettype($salam); ?></h1>
    <h1><?php var_dump($salam); ?></h1>
    <h1><?php echo is_string($salam); ?></h1>
    <hr>
    <h1><?php echo $num; ?></h1>
    <h1><?php echo gettype($num); ?></h1>
    <h1><?php var_dump($num); ?></h1>
    <h1><?php echo is_int($num); ?></h1>
    <hr>
    <h1><?php echo $float; ?></h1>
    <h1><?php echo gettype($float); ?></h1>
    <h1><?php var_dump($float); ?></h1>
    <h1><?php echo is_float($float); ?></h1>
    <hr>
    <!-- <h1><?php echo $arr; ?></h1> -->
    <h1><?php echo gettype($arr); ?></h1>
    <h1><?php var_dump($arr); ?></h1> 
    <hr>
    <h1><?php echo $var; ?></h1>
    <h1><?php echo gettype($var); ?></h1>
    <h1><?php var_dump($var); ?></h1> 
</body>
</html>