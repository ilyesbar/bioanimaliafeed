

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <style>
    .owl-carousel .item {
      position: relative;
      height: 500px;
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat
    }

    .slogan {
      position: absolute;
      bottom: 30px;
      left: 5%;
      color: var(--tertiary);
     
width: 90%;
text-align: center;

       will-change: background;
    background-color:rgb(246, 255, 230); 
      padding: 15px 20px;
      font-size: 1.5rem;
      font-weight: bold;
      border-radius: 8px;
      opacity: 0.75;
    }
    .owl-carousel .item {
    border-radius: 10px;}
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot{display: none;}
  </style>
<section class="section padding-global" style="background:url('assets/images/009/bg_green.jpg'); no-repeat center; background-size: cover; padding-top:10px">

    <div class="w-layout-blockcontainer container-large w-container">
<div class="owl-carousel owl-theme">
  
  <div class="item" style="background-image: url('assets/images/slides/poules77.jpg');">
    <div class="slogan">Fiabilité & Performance Animale</div>
  </div>
  <div class="item" style="background-image: url('assets/images/slides/Feed-Mix.jpg');">
    <div class="slogan">L'excellence nutritionnelle au service de l'élevage national</div>
  </div>
 <div class="item" style="background-image: url('assets/images/slides/dinde.jpg');">
    <div class="slogan">Produits de qualité pour des animeaux en bonne santé </div>
  </div>
  <div class="item" style="background-image: url('assets/images/slides/vaches3.jpg');">
    <div class="slogan">Votre performance, notre priorité </div>
  </div>
   <div class="item" style="background-image: url('assets/images/slides/poule_pondeuse.jpg');">
    <div class="slogan">Votre performance, notre priorité </div>
  </div>
   
</div>
</div></section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    items: 1
  });
</script>

