<?php
$a=array(1,3,5,3,7,2);
print_r($a);
    
$duplicate = array_unique($a);
$s = sort($a);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Duplikasi</h1>
    <?php echo implode($duplicate);?>

    <h1>Dari Kecil Kebesar</h1>
    <?php echo implode($a);?>

</body>
</html>