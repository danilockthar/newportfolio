<div class="boxes" id="socialmediax" style="width:100px;height:100px;background:gold;"> </div>

<div class="boxes" id="socialmediax2" style="width:100px;height:100px;background:red;margin-top:200px;display:block;"> </div>

<h1 class="counter"> CONTACTO </h1>

<script>
$(document).ready(function(){
    
    $(".counter").on("click", function(){
        
var basicTimeline = anime.timeline({
   update: function(anim) {
    $(".counter").text(Math.round(anim.progress)+'%');
  }
});

basicTimeline
  .add({
    targets: '#socialmediax',
    translateX: 320,
    rotate: 540,
    easing: 'easeOutExpo',
    duration: 1000
  })
  .add({
    targets: '#socialmediax',
    translateX: 820,
    easing: 'easeOutExpo',
    duration: 1000
  })
  .add({
    targets: '#socialmediax',
    translateX: 220,
    easing: 'easeOutExpo',
    duration: 400
  })
  .add({
    targets: '.boxes',
    translateX: 520,
    easing: 'easeOutExpo',
    duration: 500
  })
  .add({
    targets: '.boxes',
    translateX: 0,
    easing: 'easeOutExpo'
  });
    });
});
</script>