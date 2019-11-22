<div class="navbar">
    <span id="logospan"> <img class="logotipo" src="img/brodcontornodos.png"> </span>
    <span id="menuspan">
        <a href="#!" title="Proyectos" data-page="proyectos"> PROYECTOS </a>
        <a href="#!" title="Sobre mi" data-page="home"> ABOUT </a>
        <a href="#!" title="Contacto" data-page="contacto"> CONTACTO </a>
    </span>
    <span id="social">
        <a href="https://www.facebook.com/Broeders-330124020993897/" target="blank"><i class="fab fa-facebook-square fa-2x"></i></a>
        <i class="fab fa-instagram fa-2x"></i>
        <i class="fab fa-github-square fa-2x"></i>
    </span>
</div>

<script>
    
        $(function(){
	var History = window.History;
	
	if (History.enabled) {
		var page = get_url_value('page');
		var path = page ? page : 'home';
		// Load the page
		load_page_content(path);
	} else {
		return false;
	}

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
    
    $("#menuspan a").on("click", function(e){
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
	
    // ----------
    var startTime;
    var elapsedTime;
	function load_page_content(page) {
        startTime = Date.now();

        var interval = setInterval(function() {
            elapsedTime = Date.now() - startTime;
            
        }, 100);
        /*$("#loader").css("display", "block");
        $("#loader").css("z-index", "100");
        $("html").css("background", "#BB000E");
        $(".root").css("opacity", "0.4");*/
        $("#loader").css("display", "block");
        $("#loader").css("z-index", "100");
        $(".work").css("height", "50vh");
        $(".dowork").css("height", "50vh");
        $(".dowork2").css("width", "50vw");
        $(".dowork3").css("width", "50vw");
		$.post("https://broeders.com.ar/config/api.php",{"get_pages":page}, function(data){
            var data = JSON.parse(data.contenido);
            clearInterval(interval);
            console.log(elapsedTime);
            repartir_data(page, data);
            setTimeout(function(){
                $(".loaders")
                $(".work").css("height", "00vh");
                $(".dowork").css("height", "00vh");
                $(".dowork2").css("width", "0vw");
                $(".dowork3").css("width", "0vw");
                $("#loader").css("display", "none");
                $("#loader").css("z-index", "100");
            },elapsedTime > 800 ? 200 : 500);
           
   
            
           /* $("#loader").css("display", "none");
            $("html").css("background", "");
            $(".root").css("opacity", "1");
            $("#loader").css("z-index", "");*/
        });
	}
	
	function get_url_value(variable) {
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
        grid-template-rows: 25% 50% 25%;
        grid-row-gap:20px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6);*/
        width:100%;
        height:100vh;
    }
    #social{
        transition:0.3s;
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        align-items:center;
        justify-items:center;
    }
    #social i{
        color:#534e48;
        font-size:25px;
    }
    #social i:hover{
        color:white;
    }
    #menuspan{
        display:grid;
        grid-template-rows:20px 20px 20px;
        grid-row-gap:30px;
    }
    #menuspan a{
        transition:0.3s;
        margin-top:50px;
        text-align:right;
        line-height:0.1;
        padding:20px;
        font-size:20px;
        text-decoration:none;
        color: #534e48;
        font-weight:800;
        font-family:'Muli', 'sans-serif';
    }
    #menuspan a:hover{
        color: white;
    }
</style>
