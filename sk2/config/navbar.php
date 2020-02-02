<div class="navbar" style="display:grid;grid-template-rows:20% 80%;">
    <img id="logospan" src="img/alogoa.png" style="max-width:50px;justify-self:center;transition:0.3s;">
    <span id="barmenu" style="justify-self:center;padding:15px;cursor:pointer;align-items:center;justify-items:center;">
            <span class="barses" id="bars1" style="transition:0.3s;transform-origin:top left;"> </span>
            <span class="barses" id="bars2" style="transition:0.3s;"> </span>
            <span class="barses" id="bars3" style="transition:0.3s;transform-origin:bottom left;"> </span>
            <span class="menutextbars" style="color:gold;transition:0.3s;font-size:14px;font-family:Open Sans;font-weight:700;"> menu </span>
    </span>
</div>
<div class="hiddemenu" style="display:grid;grid-template-rows:20% 60% 20%">
    <img src="img/danidev.svg" style="max-width:150px;opacity:0;margin-left:3%;">
    <div id="menuspan">
        <span data-text="HOME" title="Sobre mi" data-page="home"> HOME </span>
        <span data-text="PROYECTOS" title="Proyectos" data-page="proyectos"> PROYECTOS </span>
        <span data-text="ABOUT" title="Sobre mi" data-page="about"> ABOUT </span>
        <span data-text="CONTACTO" title="Contacto" data-page="contacto"> CONTACTO </span>
    </div>
    <div class="socialmedia">

    </div>
</div>
<script>
    
        $(function(){
	var History = window.History;
	
	if (History.enabled) {
		var page = get_url_value('page');
		var path = page ? page : 'intro';
        if(path == 'intro'){
            console.log("intro");
        }else{
            load_page_content(path); 
        }
		
	} else {
		return false;
	}
    /* <a href="#!" title="Proyectos" data-page="proyectos"> PROYECTOS </a>
        <a href="#!" title="Sobre mi" data-page="home"> ABOUT </a>
        <a href="#!" title="Contacto" data-page="contacto"> CONTACTO </a>*/
	// Content update and back/forward button handler
	History.Adapter.bind(window, 'statechange', function() {
		var State = History.getState();	
		// Do ajax
		load_page_content(State.data.path);
		// Log the history object to your browser's console
		History.log(State);
    });
    String.prototype.capitalize = function() {
        return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
    };

    // Navigation link handler
    
    $("#menuspan span").on("click", function(e){
        e.preventDefault();
        var datos = {};
        datos.nombre = $(this).attr("data-page");
        History.pushState({path: datos.nombre}, datos.nombre.capitalize(), './?page=' + datos.nombre); // When we do this, History.Adapter will also execute its contents. 		
    });
     $("#logospan").on("click",function(){
        var datos = {};
        datos.nombre = "intro";
        History.pushState({path: datos.nombre}, datos.nombre.capitalize(), './?page=' + datos.nombre); // When we do this, History.Adapter will also execute its contents. 		
  
    }); 
	var menushowed = false;
    $("#barmenu").on("click", function(){
        if(!menushowed){
            $("#bars2").css("transform", "translateX(-500px)");
            $("#bars1").css("transformOrigin", "top left");
            $("#bars1").css("transform", "rotate(40deg)");
            $("#bars3").css("transformOrigin", "bottom left");
            $("#bars3").css("transform", "rotate(-40deg)");
            $(".hiddemenu").css("width", "40vw");
            $(".navbar img").removeClass("showupimg");
            $(".navbar img").addClass("showoffimg");
            $(".hiddemenu img").removeClass("showoff");
            $(".hiddemenu span").css("opacity", "0");
            setTimeout(function(){
                $(".hiddemenu img").addClass("showup05");
                $(".navbar img").css("opacity", "0");
                $(".navbar img").css("z-index", "-100");
            }, 800);
            $(".hiddemenu span").eq(3).removeClass("showoff");
            $(".hiddemenu span").eq(3).addClass("showup");
            setTimeout(function(){
                $(".hiddemenu span").eq(2).removeClass("showoff");
                $(".hiddemenu span").eq(2).addClass("showup");
            }, 200);
            setTimeout(function(){
                $(".hiddemenu span").eq(1).removeClass("showoff");
                $(".hiddemenu span").eq(1).addClass("showup");
            }, 400);
            setTimeout(function(){
                $(".hiddemenu span").eq(0).removeClass("showoff");
                $(".hiddemenu span").eq(0).addClass("showup");
            }, 600);
            $(".menutextbars").css("opacity", "0");
            menushowed = true;
        }else{
            $("#bars2").css("transform", "translateX(0px)");
            $("#bars1").css("transform", "rotate(0deg)");
            $("#bars1").css("transform", "translateX(0px)");
            $("#bars1").css("transformOrigin", "top left");
            $("#bars3").css("transform", "rotate(0deg)");
            $("#bars3").css("transformOrigin", "bottom left");
            $("#bars3").css("transform", "translateX(0px)");
            $(".hiddemenu span").eq(0).removeClass("showup");
            $(".hiddemenu span").eq(0).addClass("showoff");
            setTimeout(function(){
                $(".hiddemenu span").eq(1).removeClass("showup");
                $(".hiddemenu span").eq(1).addClass("showoff");
            },200);
            setTimeout(function(){
                $(".hiddemenu span").eq(2).removeClass("showup");
                $(".hiddemenu span").eq(2).addClass("showoff");
            },400);
            setTimeout(function(){
                $(".hiddemenu span").eq(3).removeClass("showup");
                $(".hiddemenu span").eq(3).addClass("showoff");
            },600)
            $(".hiddemenu img").removeClass("showup05");
            $(".hiddemenu img").addClass("showoff");
            $(".navbar img").removeClass("showoffimg");
            setTimeout(function(){
                $(".navbar img").css("z-index", "1");
                $(".navbar img").addClass("showupimg");
                $(".navbar img").css("opacity", "1");
            }, 800);
            
            setTimeout(function(){
                $(".hiddemenu").css("width", "0vw");
            }, 1400);
            menushowed = false;
            $(".menutextbars").css("opacity", "1");
        }
    });
    // ----------
    var startTime;
    var elapsedTime;
	function load_page_content(page) {
	    
        $("#menuspan span").each(function(k, val){
            $(val).removeClass("activo");
            console.log($(val).attr("data-text"));
            var datatext = $(val).attr("data-text");
            if(page === $(val).attr("data-text").toLowerCase()){
                $(val).addClass("activo");
            }
        });
        $("#bars2").css("transform", "translateX(0px)");
            $("#bars1").css("transform", "rotate(0deg)");
            $("#bars1").css("transform", "translateX(0px)");
            $("#bars1").css("transformOrigin", "top left");
            $("#bars3").css("transform", "rotate(0deg)");
            $("#bars3").css("transformOrigin", "bottom left");
            $("#bars3").css("transform", "translateX(0px)");
            $("#loader").css("display", "block");
            $(".area").css("opacity", "0.5");
		$.post("https://broeders.com.ar/config/api.php",{"get_pages":page}, function(data){
		    console.log(data, "ladataman");
		    if(page == "intro" || page == "about" || page == "contacto"){
		        if(menushowed){
                    $(".hiddemenu span").eq(0).removeClass("showup");
                    $(".hiddemenu span").eq(0).addClass("showoff");
                    setTimeout(function(){
                        $(".hiddemenu span").eq(1).removeClass("showup");
                        $(".hiddemenu span").eq(1).addClass("showoff");
                    },200);
                    setTimeout(function(){
                        $(".hiddemenu span").eq(2).removeClass("showup");
                        $(".hiddemenu span").eq(2).addClass("showoff");
                    },400);
                    setTimeout(function(){
                        $(".hiddemenu span").eq(3).removeClass("showup");
                        $(".hiddemenu span").eq(3).addClass("showoff");
                    },600)
                    $(".hiddemenu img").removeClass("showup05");
                    $(".hiddemenu img").addClass("showoff");
                    $(".navbar img").removeClass("showoffimg");
                    setTimeout(function(){
                        $(".navbar img").css("z-index", "1");
                        $(".navbar img").addClass("showupimg");
                        $(".navbar img").css("opacity", "1");
                    }, 800);
                    setTimeout(function(){
                        $(".hiddemenu").css("width", "0vw");
                        $(".area").html(data);
                        $("#loader").css("display", "none");
                        $(".area").css("opacity", "1");
                    }, 1400);
                    menushowed = false;
                    $(".menutextbars").css("opacity", "1");
                }else{
                    $(".area").html(data);
                    $("#loader").css("display", "none");
                    $(".area").css("opacity", "1");
                }
		    }else{
		        var data = JSON.parse(data[0].contenido);
            if(menushowed){
                $(".hiddemenu span").eq(0).removeClass("showup");
                $(".hiddemenu span").eq(0).addClass("showoff");
                setTimeout(function(){
                    $(".hiddemenu span").eq(1).removeClass("showup");
                    $(".hiddemenu span").eq(1).addClass("showoff");
                },200);
                setTimeout(function(){
                    $(".hiddemenu span").eq(2).removeClass("showup");
                    $(".hiddemenu span").eq(2).addClass("showoff");
                },400);
                setTimeout(function(){
                    $(".hiddemenu span").eq(3).removeClass("showup");
                    $(".hiddemenu span").eq(3).addClass("showoff");
                },600)
                $(".hiddemenu img").removeClass("showup05");
                $(".hiddemenu img").addClass("showoff");
                $(".navbar img").removeClass("showoffimg");
                setTimeout(function(){
                    $(".navbar img").css("z-index", "1");
                    $(".navbar img").addClass("showupimg");
                    $(".navbar img").css("opacity", "1");
                }, 800);
                setTimeout(function(){
                    $(".hiddemenu").css("width", "0vw");
                    repartir_data(page, data);
                    $("#loader").css("display", "none");
                    $(".area").css("opacity", "1");
                }, 1400);
                menushowed = false;
                $(".menutextbars").css("opacity", "1");
            }else{
                repartir_data(page, data);
                $("#loader").css("display", "none");
                    $(".area").css("opacity", "1");
            }
		    }
		    
        });
	}
	
	function get_url_value(variable) {
        console.log(variable);
	   var query = window.location.search.substring(1);
	   var vars = query.split("&");
	   for (var i=0;i<vars.length;i++) {
			   var pair = vars[i].split("=");
			   if(pair[0] == variable){return pair[1];}
	   }
	   return(false);
    }
    // -------------------- // -------------------
       
        
        const repartir_data = (name, data) => {
           if(data.proyecto){
               name = "IDproyecto";
           }
           var html = "";
           switch (name) {
                case "proyectos":
                    for(val of data){
                        html += `<div class="proyecto-cajas" data-page="${val.nombre}"  style="background-image:url(${val.urlimage});background-size:cover;">
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
                        var datos = {};
                        datos.nombre = $(this).parent().attr("data-page");
                        History.pushState({path: datos.nombre}, datos.nombre, './?page=' + datos.nombre); // When we do this, History.Adapter will also execute its contents. 		

                    });
                break;
                case "IDproyecto":
                    html = `<div class="proyecto${data.nombre}">
                                <i class="fas fa-window-close fa-4x close-button" style="position:absolute;right:0;margin-right:50px;margin-top:50px;color:white;cursor:pointer;"></i>
                                <img src="${data.urlimage}" style="width:100%">
                                <h2> ${data.contenido} </h2>
                            </div>
                        `;
                    $(".area").html(html);
                    $(".close-button").on("click", function(){
                        window.history.back();
                        load_page_content("proyectos");
                    });
                break;
                case "contacto":
                    html = `<div class="contacto">
                            </div>
                    `;
                    $(".area").html(html);
                break;
                case "intro":
                    html = `<div class="home">
                            </div>
                    `;
                    $(".area").html(html);
                break;
           }
            
       }/*
       // MENU ONCLICK EVENTO //
        $("#menuspan a").on("click", function(e){
            e.prevenDefault();
            $("#loader").css("display", "block");
            $("#loader").css("z-index", "100");
            $(".root").css("opacity", "0.3");
            var datos = {};
            datos.nombre = $(this).attr("data-page");
            $.post("https://broeders.com.ar/config/api.php",{"get_pages":datos}, function(data){
                history.pushState(datos.nombre, null, "index.php?s="+datos.nombre);
               var data = JSON.parse(data.contenido);
               repartir_data(datos.nombre, data);
               $("#loader").css("display", "none");
               $(".root").css("opacity", "1");
               $("#loader").css("z-index", "");
            });
        }); */
});
        

        
  
</script>
<style>
#barmenu{
    display:grid;
    grid-template-rows:6px 6px 6px 20px;
    grid-row-gap:3px;
}
.activo{
    color:gold !important;
}
#barmenu .barses{
    width:30px;
    height:4px;
    border-radius:30px;
    background:gold;
}
    #logospan{
        cursor:pointer;
        align-items:center;
    }
    .logotipo{
        width:200px;
        z-index:14;
    }
    .hiddemenu{
        justify-content:center;
        align-items:center;
        transition:0.3s;
        position:absolute;
        left:6%;
        width:0px;
        height:100vh;
        background:#4519bf;
        z-index:100;
    }
    
    .navbar{
        width:100%;
        display:grid;
        align-items:center;
        background:#4519bf;
    }
    #menuspan{
        display:grid;
        grid-template-rows:50px 50px 50px 50px;
        grid-row-gap:30px;
        padding:15px;
        justify-content:center;
        align-items:center;
    }
    #menuspan span{
        font-family: 'Archivo Black', sans-serif;
        cursor:pointer;
        user-select: none;
        font-size:55px;
        text-decoration:none;
        text-align:left;
        color: transparent;
        -webkit-text-stroke: 1px gold;
        font-weight:800;
        transition: all 400ms ease-in-out;
    }
    #menuspan span:before{
        width: 0;
        color: gold;
        overflow: hidden;
        text-align:left;
        -webkit-text-stroke: 0px gold;
        position: absolute;
        content: attr(data-text);
        transition: all 400ms ease-in-out;
        
    }
    #menuspan span:hover:before{
        width:100%;
        transition: all 400ms ease-in-out;
    }
    .showup2{
        animation: aparecer 2s 1;
        animation-fill-mode: forwards;
    }
    .showoff2{
        animation: desaparecer 2s 1;
        animation-fill-mode: forwards;
    }
    .showup4{
        animation: aparecer 4s 1;
        animation-fill-mode: forwards;
    }
    .showoff4{
        animation: desaparecer 4s 1;
        animation-fill-mode: forwards;
    }
    .showup3{
        animation: aparecer 3s 1;
        animation-fill-mode: forwards;
    }
    .showoff3{
        animation: desaparecer 3s 1;
        animation-fill-mode: forwards;
    }
    .showup5{
        animation: aparecer 5s 1;
        animation-fill-mode: forwards;
    }
    .showoff5{
        animation: desaparecer 5s 1;
        animation-fill-mode: forwards;
    }
    .showup{
        animation: aparecer 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showoff{
        animation: desaparecer 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showup05{
        animation: aparecer 0.5s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showoff05{
        animation: desaparecer 0.5s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showupimg{
        animation: aparecer2 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showoffimg{
        animation: desaparecer2 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
    }
    .showupimg2{
        animation: aparecer2 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
        animation-delay:4s;
    }
    .showoffimg2{
        animation: desaparecer2 1s 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-in-out;
        animation-delay:4s;
    }
    /* KEYFRAMES */
    
    @keyframes aparecer
{
  0% {
    transform:translateY(-50px);
    opacity:0;
  }
  100% {
    transform:translateY(0px);
    opacity:1;
  }
}
@keyframes desaparecer
{
  0% {
    transform:translateY(0px);
    opacity:1;
  }
  100% {
    transform:translateY(-50px);
    opacity:0;
  }
}
@keyframes aparecer2
{
  0% {
    transform:translateY(80px);
    opacity:0;
  }
  100% {
    transform:translateY(0px);
    opacity:1;
  }
}
@keyframes desaparecer2
{
  0% {
    transform:translateY(0px);
  }
  60% {
    transform:translateY(80px);
  }
  100% {
    transform:translateY(80px);
    opacity:0;
  }
}
</style>
