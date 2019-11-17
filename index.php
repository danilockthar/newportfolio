<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/swiper.min.css">
</head>
<body>
    <img id="loader" style="display:none;position:absolute;text-align:center;justify-self:center;" src="img/circles.svg">

    <div class="root">
        <?php include 'partes/navbar.php';?>
        <?php include 'partes/area.php';?>
    </div>
    <script src="path/to/swiper.min.js"></script>
</body>
</html>
<script>
    $( document ).ready(function() {
       
    });
</script>
<style>
    *{
        margin:0;
        padding:0;
        overflow:hidden;
    }
    #loader{
        position: fixed;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        width:300px;
    }
    .root{
        display:grid;
        grid-template-columns:20% 80%;
        background-image:url("img/balloon.jpg");
        background-size:cover;
    }
    #proyecto-root{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;

    }
    .proyecto-cajas{
        text-align:center;
        background:red;
        width:100%;
        height:200px;
        display:grid;
        align-items:center;
        justify-content:center;
    }
   
    .proyecto-cajas button{
        display:block;
        width:100px;
        background:gold;
        padding:8px;
        color:black;
        border:none;
        cursor:pointer;
    }
</style>