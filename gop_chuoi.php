
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php
$arr1=[];
$arr2=[];
if ($_SERVER("REQUEST_METHOD")=="POST"){
    $input=$_POST['input'];
    $input2=$_POST['input2'];

    array_push($arr1,$input);
    for ($i = 0; $i < count($arr1); $i++) {
        echo $arr1[$i];
        var_dump($arr1);


    array_push($arr2,$input2);
    for ($i=0;$i<count($arr2);$i++){
        echo $arr1[$i];
    }var_dump($arr2);
}

?>
<body>
<form method="post">
    <input type="text" name="input">
    <button type="submit" name="submit">Submit</button>
    <input type="text" name="input2">
    <button type="submit" name="submit2">Submit</button>
</form>
</body>
</html>
