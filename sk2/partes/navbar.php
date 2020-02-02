<div class="navbar" style="display:grid;grid-template-columns:1fr 1fr 1fr;align-items:center;">
    <img id="logospan" src="img/sk2.png" style="max-width:200px;justify-self:center;transition:0.3s;">
    <div id="menuspan">
        <span data-text="HOME" title="Sobre mi" data-page="home"> home - </span>
        <span data-text="PROYECTOS" title="Proyectos" data-page="proyectos"> proyectos - </span>
        <span data-text="ABOUT" title="Sobre mi" data-page="about"> sobre nosotros - </span>
        <span data-text="CONTACTO" title="Contacto" data-page="contacto"> contacto - </span>
    </div>
    
    <div class="socialmedia">
        <a href="#!"> <i class="fab fa-facebook"></i></a>
        <a href="#!"> <i class="fab fa-instagram"></i></a>
    </div>
</div>
<script>
    
        $(function(){
	var History = window.History;
	
	if (History.enabled) {
		var page = get_url_value('page');
		var path = page ? page : 'home';
        /*if(path == 'home'){
            console.log("home");
        }else{
            load_page_content(path); 
        }*/
		load_page_content(path); 
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
        datos.nombre = "home";
        History.pushState({path: datos.nombre}, datos.nombre.capitalize(), './?page=' + datos.nombre); // When we do this, History.Adapter will also execute its contents. 		
  
    }); 
	var menushowed = false;
    $("#barmenu").on("click", function(){
        var animation = anime.timeline({
            });
        if(!menushowed){
            $("#bars2").css("transform", "translateX(-500px)");
            $("#bars1").css("transformOrigin", "top left");
            $("#bars1").css("transform", "rotate(40deg)");
            $("#bars3").css("transformOrigin", "bottom left");
            $("#bars3").css("transform", "rotate(-40deg)");
            $(".menutextbars").css("opacity", "0");
            
            animation
            .add({
                targets: '.hiddemenu',
                width: '40vw',
                easing: 'easeInOutSine',
                duration: 100
            })
            .add({
                targets: '.hiddemenu span',
                translateY: [-100, 0],
                easing: 'easeOutQuart',
                opacity: 1,
                delay: anime.stagger(100, {start: 10}),
                duration: 50
            })
            .add({
                targets: '.navbar img',
                translateY: 100,
                easing: 'easeInOutQuad',
                delay: 50,
                duration: 50
            })
            .add({
                targets: '.navbar img',
                opacity: 0,
                easing: 'easeInOutQuad',
                delay: 200,
                duration: 200
            })
            .add({
                targets: '.hiddemenu img',
                opacity: 1,
                translateY: [-100, 0],
                easing: 'easeOutQuad',
                delay: 150,
                duration: 100
            })
            
            
            
            // $(".navbar img").removeClass("showupimg");
            // $(".navbar img").addClass("showoffimg");
            // $(".hiddemenu img").removeClass("showoff");
            // $(".hiddemenu span").css("opacity", "0");
            // setTimeout(function(){
            //     $(".hiddemenu img").addClass("showup05");
            //     $(".navbar img").css("opacity", "0");
            //     $(".navbar img").css("z-index", "-100");
            // }, 800);
            // $(".hiddemenu span").eq(3).removeClass("showoff");
            // $(".hiddemenu span").eq(3).addClass("showup");
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(2).removeClass("showoff");
            //     $(".hiddemenu span").eq(2).addClass("showup");
            // }, 200);
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(1).removeClass("showoff");
            //     $(".hiddemenu span").eq(1).addClass("showup");
            // }, 400);
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(0).removeClass("showoff");
            //     $(".hiddemenu span").eq(0).addClass("showup");
            // }, 600);
            // $(".menutextbars").css("opacity", "0");
            menushowed = true;
        }else{
            $("#bars2").css("transform", "translateX(0px)");
            $("#bars1").css("transform", "rotate(0deg)");
            $("#bars1").css("transform", "translateX(0px)");
            $("#bars1").css("transformOrigin", "top left");
            $("#bars3").css("transform", "rotate(0deg)");
            $("#bars3").css("transformOrigin", "bottom left");
            $("#bars3").css("transform", "translateX(0px)");
            animation
            .add({
                targets: '.hiddemenu span',
                translateY: [0, -100],
                easing: 'easeOutQuart',
                opacity: 0,
                delay: anime.stagger(100, {start: 50}),
                duration: 100
            })
            .add({
                targets: '.hiddemenu img',
                opacity: 1,
                translateY: [0, -100],
                easing: 'easeOutQuart',
                delay: 200,
                duration: 200
            })
            .add({
                targets: '.navbar img',
                translateY: 0,
                opacity: 1,
                easing: 'easeInOutSine',
                delay: 50,
                duration: 50
            })
            // 1
            .add({
                targets: '.hiddemenu',
                width: '0vw',
                easing: 'easeInOutSine',
                duration: 100
            });
            
            
            
            
            // $(".hiddemenu span").eq(0).removeClass("showup");
            // $(".hiddemenu span").eq(0).addClass("showoff");
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(1).removeClass("showup");
            //     $(".hiddemenu span").eq(1).addClass("showoff");
            // },200);
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(2).removeClass("showup");
            //     $(".hiddemenu span").eq(2).addClass("showoff");
            // },400);
            // setTimeout(function(){
            //     $(".hiddemenu span").eq(3).removeClass("showup");
            //     $(".hiddemenu span").eq(3).addClass("showoff");
            // },600)
            // $(".hiddemenu img").removeClass("showup05");
            // $(".hiddemenu img").addClass("showoff");
            // $(".navbar img").removeClass("showoffimg");
            // setTimeout(function(){
            //     $(".navbar img").css("z-index", "1");
            //     $(".navbar img").addClass("showupimg");
            //     $(".navbar img").css("opacity", "1");
            // }, 800);
            
            // setTimeout(function(){
            //     $(".hiddemenu").css("width", "0vw");
            // }, 1400);
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
		    if(page == "home" || page == "about" || page == "contacto"){
		        if(menushowed){
                    var animation = anime.timeline({
                        update: function(anim) {
                            if(Math.round(anim.progress) == 100){
                                $(".area").html(data);
                                $("#loader").css("display", "none");
                                $(".area").css("opacity", "1");
                            }
                        }
                    });
                    animation
                    .add({
                        targets: '.hiddemenu span',
                        translateY: [0, -100],
                        easing: 'easeOutQuart',
                        opacity: 0,
                        delay: anime.stagger(100, {start: 50}),
                        duration: 100
                    })
                    .add({
                        targets: '.hiddemenu img',
                        opacity: 1,
                        translateY: [0, -100],
                        easing: 'easeOutQuart',
                        delay: 200,
                        duration: 200
                    })
                    .add({
                        targets: '.navbar img',
                        translateY: 0,
                        opacity: 1,
                        easing: 'easeInOutSine',
                        delay: 50,
                        duration: 50
                    })
                    // 1
                    .add({
                        targets: '.hiddemenu',
                        width: '0vw',
                        easing: 'easeInOutSine',
                        duration: 100
                    });
                    
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
                var animation = anime.timeline({
                    update: function(anim) {
                            if(Math.round(anim.progress) == 100){
                                repartir_data(page, data);
                                $("#loader").css("display", "none");
                                $(".area").css("opacity", "1");
                            }
                        }
                    });
                    animation
                    .add({
                        targets: '.hiddemenu span',
                        translateY: [0, -100],
                        easing: 'easeOutQuart',
                        opacity: 0,
                        delay: anime.stagger(100, {start: 50}),
                        duration: 100
                    })
                    .add({
                        targets: '.hiddemenu img',
                        opacity: 1,
                        translateY: [0, -100],
                        easing: 'easeOutQuart',
                        delay: 200,
                        duration: 200
                    })
                    .add({
                        targets: '.navbar img',
                        translateY: 0,
                        opacity: 1,
                        easing: 'easeInOutSine',
                        delay: 50,
                        duration: 50
                    })
                    // 1
                    .add({
                        targets: '.hiddemenu',
                        width: '0vw',
                        easing: 'easeInOutSine',
                        duration: 100
                    });
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

</style>
