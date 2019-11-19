<div class="area">
    <h1 style="font-family:Roboto;font-weight:bold;"> DANI PORTFOLIO <h1>
</div>

<style>
    .area{
        overflow-y:scroll;
        width:100%;
        height:100vh;
    }
    .area h1{
        font-size:80px;
    }
    .minifooter{
        bottom:0;
        position:absolute;
        width:100%;
        height:60px;
        background:#3b3b3b;
    }
</style>

<script> 
    $(document).ready(function(){
        $(".proyecto-cajas").on("mouseenter", function(){
            $(this).find("button").css("display", "block");
        });
        $(".proyecto-cajas").on("mouseleave", function(){
            $(this).find("button").css("display", "none");
        });

        $(".proyecto-cajas button").on("click", function(){
            var data = $(this).parent().attr("data-page");
            var datos = {};
            datos.nombre = data;
            $("#loader").css("display", "block");
            $("#loader").css("z-index", "100");
            $(".root").css("opacity", "0.6");
            $.post("https://broeders.com.ar/config/api.php",{"get_pages":datos}, function(data){
               $("#h1area").html(data.contenido);
               $("#loader").css("display", "none");
               $(".root").css("opacity", "1");
               $("#loader").css("z-index", "");
            });
        });
    });

</script>