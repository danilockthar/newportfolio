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
</head>
<body>
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
        overflow-y:hidden;
    }
    .root{
        display:grid;
        grid-template-columns:20% 80%;
    }
</style>