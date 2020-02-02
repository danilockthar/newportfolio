<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6936f4c3fb.js" crossorigin="anonymous"></script>
    <script src="js/bundled/html4+html5/jquery.history.js"></script>
    <script src="js/anime.min.js"></script>
</head>
<body>
  <img src="img/oval.svg" id="loader" style="max-width:200px;">
  <div class="rootwork">
    <div class="work" id="work2"></div>
    <div class="work" id="work3"></div>
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
    .rootwork{

    }
    .work{
        transition:0.4s;
        height:0vh;
        position:fixed;
    }
    #work2{
        background:#bf1919;
        width:100%;
        z-index:4;
        top:0;
        left:20%;
    }
    #work3{
        background:#bf1919;
        width:100%;
        z-index:4;
        bottom:0;
        left:20%;
    }
    *{
        margin:0;
        padding:0;
        overflow:hidden;
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
    
    
    #loader{
        display:none;
        position: fixed;
        top: 50%;
        left: 50%;
        /* bring your own prefixes */
        transform: translate(-50%, -50%);
        width:100px;
        z-index:100;
    }
    .root{
        height:100vh;
        display:grid;
        grid-template-rows:15% 95%;
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