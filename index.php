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

  <div class="rootwork">
    <div class="work loaders">   </div>
    <div class="dowork loaders"></div>
    <div class="dowork2 loaders"></div>
    <div class="dowork3 loaders"></div>
</div>
    <div class="root">
        <?php include 'partes/navbar.php';?>
        <?php include 'partes/area.php';?>
    </div>


</body>
</html>
<script>
    
</script>
<style>
    *{
        margin:0;
        padding:0;
        overflow:hidden;
    }
    
    .rootwork{
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    .loaders{
        animation-name: "identifier";
        animation-iteration-count: infinite;
        animation-delay: 15s;

    }
    @keyframes identifier {
    from{ transform: rotate(0deg) ;}
        
    to { transform: rotate(360deg); }
    }
    .work{
        top:0;
        position:fixed;
        transition:0.7s;
        width:100%;
        height:0vh;
        z-index:1;
        background: #0c0c0c;
    }
    .dowork{
        position:fixed;
        transition:0.7s;
        bottom:0;
        background:#0c0c0c;
        width: 100%;
        height:0vh;
        z-index:1;
    }
    .dowork2{
        position:fixed;
        transition:0.7s;
        left:0;
        background:#0c0c0c;
        width: 0%;
        height:100%;
        z-index:1;
    }
    .dowork3{
        position:fixed;
        transition:0.7s;
        right:0;
        background:#0c0c0c;
        width: 0%;
        height:100%;
        z-index:1;
    }
    #loader{
        position: fixed;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        width:100px;
    }
    .root{
        display:grid;
        grid-template-columns:20% 80%;
        background-image:url("img/leaves.jpg");
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