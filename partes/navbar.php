<div class="navbar">
    <span id="logospan"> <img class="logotipo" src="img/brodcontornodos.png"> </span>
    <span id="menuspan">
        <a href="#!" data-page="proyectos"> PROYECTOS </a>
        <a href="#!" data-page="home"> ABOUT </a>
        <a href="#!" data-page="contacto"> CONTACTO </a>
    </span>
</div>

<script>
    $( document ).ready(function() {
        $("#logospan").on("click",function(){
            $("#loader").css("display", "block");
            $("#loader").css("z-index", "100");
            $(".root").css("opacity", "0.6");
            var datos = {};
            datos.nombre = "intro";
            $.post("https://broeders.com.ar/config/api.php",{"get_pages":datos}, function(data){
                console.log(data);
               $("#h1area").html(data.contenido);
               $("#loader").css("display", "none");
               $(".root").css("opacity", "1");
               $("#loader").css("z-index", "");
            });
        });
        
       const repartir_data = (name, data) => {
           var html = "";
           switch (name) {
                case "proyectos":
                    for(val of data){
                        html += `<div class="proyecto-cajas" data-page="${val.nombre}" style="background-image:url(${val.urlimage});background-size:cover;">
                                <button style="display:none">Ver Proyecto</button>
                            </div>
                        `;
                    }
                    $(".area").html(`<div id="proyecto-root">`+html+`</div>`);
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
                        var data = JSON.parse(data.contenido);
                        repartir_data("IDproyecto", data);
                        $("#loader").css("display", "none");
                        $(".root").css("opacity", "1");
                        $("#loader").css("z-index", "");
                        });
                    });
                break;
                case "IDproyecto":
                    console.log(data);
                    html = `<div class="proyecto${data.nombre}">
                                <img src="${data.urlimage}" style="width:100%">
                                <h2> ${data.contenido} </h2>
                            </div>
                        `;
                    $(".area").html(html);
                break;
           }
            
       }

        $("#menuspan a").on("click", function(){
            $("#loader").css("display", "block");
            $("#loader").css("z-index", "100");
            $(".root").css("opacity", "0.3");
            var datos = {};
            datos.nombre = $(this).attr("data-page");
            $.post("https://broeders.com.ar/config/api.php",{"get_pages":datos}, function(data){
               var data = JSON.parse(data.contenido);
               repartir_data(datos.nombre, data);
               $("#loader").css("display", "none");
               $(".root").css("opacity", "1");
               $("#loader").css("z-index", "");
            });
        });
    });
</script>
<style>
    #logospan{
        cursor:pointer;
        align-items:center;
        margin-top:25px;
    }
    .logotipo{
        width:200px;
        z-index:14;
    }
    .navbar{
        display:grid;
        grid-template-columns:1fr;
        grid-template-rows: 25% 75%;
        grid-row-gap:80px;
        text-align: center;
        opacity:0.6;
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
        text-align:right;
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
