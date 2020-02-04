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
    .hiddemenu span{
        opacity:0;
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
