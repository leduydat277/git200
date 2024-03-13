<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.box1,
.box3 {
    background-color: pink;
    height: 50px;
}

.box2 {
    height: 80px;
}
</style>


<body>
    <div class="box1"></div>
    <div class="box2">
        <?php require "./mvc/views/pages/".$data["number"].".php";
        ?>
    </div>

</body>

</html>