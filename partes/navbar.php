<div class="navbar">
    <span id="logospan"> <img class="logotipo" src="img/brodcontornodos.png"> </span>
    <span id="menuspan">
        <a href="#!" data-page="home"> HOME </a>
        <a href="#!" data-page="proyectos"> PROYECTOS </a>
        <a href="#!" data-page="contacto"> CONTACTO </a>
    </span>
</div>

<script>
    $( document ).ready(function() {
        $("#menuspan a").on("click", function(){
            $("#loader").css("display", "block");
            $("#loader").css("z-index", "100");
            $(".root").css("opacity", "0.6");
            var datos = {};
            datos.nombre = $(this).attr("data-page");
            $.post("https://broeders.com.ar/config/api.php",{"get_pages":datos}, function(data){
                var contenido = JSON.parse(data.contenido);
                console.log(contenido);
               $("#h1area").html(contenido.nombre);
               $("#loader").css("display", "none");
               $(".root").css("opacity", "1");
               $("#loader").css("z-index", "");
            });
        });
    });
</script>
<style>
    #logospan{
        align-items:center;
        margin-top:10px;
    }
    .logotipo{
        width:200px;
    }
    .navbar{
        display:grid;
        grid-template-columns:1fr;
        grid-template-rows: 20% 80%;
        grid-row-gap:80px;
        text-align: center;
        
        width:100%;
        height:100vh;
        background:#1f1f1f;
    }
    #menuspan{
        display:grid;
        grid-template-rows:20px 20px 20px;
        grid-row-gap:30px;
    }
    #menuspan a{
        line-height:0.1;
        padding:20px;
        background:blue;
        font-size:20px;
        text-decoration:none;
        color: white;
        font-family:'Roboto', 'sans-serif';
    }
    #menuspan a:hover{
        background:#ef212c;
        border-bottom:2px solid gold;
    }
</style>
