<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,800,900&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6936f4c3fb.js" crossorigin="anonymous"></script>
    <script src="js/bundled/html4+html5/jquery.history.js"></script>
</head>
<body>
    <img id="loader" style="display:none;position:absolute;text-align:center;justify-self:center;color:gold;" src="img/circles.svg">

    
  
    <div class="root">
        <?php include 'partes/navbar.php';?>
        <?php include 'partes/area.php';?>
    </div>
    

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
        background-image:url("img/white.jpg");
        background-size:cover;
    }
   
    #proyecto-root{
        display:grid;
        grid-template-columns:1fr 1fr 1fr;

    }
    .proyecto-cajas{
        text-align:center;
        width:100%;
        height:200px;
        display:grid;
        align-items:center;
        justify-content:center;
        background:red;

    }
    .proyecto-cajas:hover{

        background-color: rgba(0, 0, 0, .1);
    }
    .proyecto-cajas button{
        display:block;
        width:100px;
        background:#ffb303;
        padding:8px;
        color:black;
        font-weight:600;
        border:none;
        cursor:pointer;
    }
</style>