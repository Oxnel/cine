<?php
    $p=rand(1,100200);
    $ap="az";
    $zp="bt";
    $cle=$p;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cle.php" method="post">
        <input type="text" value="<?php echo "az".$cle ?>">
        <button type="submit" value="generer">Générer</button>
    </form>
 
</body>
</html>