<div id="proyecto-root">
<div class="proyecto-cajas" data-page="achiev" style="background-image:url('img/achiev.jpg');background-size:cover;background-position:center;"><button style="display:none">Ver Proyecto</button></div> 
<div class="proyecto-cajas" data-page="longlong" style="background-image:url('img/long.jpg');background-size:cover;background-position:center;"><button style="display:none">Ver Proyecto</button></div> 
<div class="proyecto-cajas" data-page="balloon" style="background-image:url('img/balloon.jpg');background-size:cover;background-position:center;"><button style="display:none">Ver Proyecto</button></div> 
<div class="proyecto-cajas">5 </div>
<div class="proyecto-cajas"> 6</div>
<div class="proyecto-cajas"> 7</div>
<div class="proyecto-cajas">8 </div>
<div class="proyecto-cajas"> 9</div>
</div>

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