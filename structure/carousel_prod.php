<style> .large-image { will-change: background;
    background-color: rgb(246, 255, 230);
border: 2px solid var(--tertiary);} 

.small-image { border: 2px solid var(--primary);} 
    .gallery-container img{object-fit:contain;}
</style>
<section class="section padding-global padding-section-small">
    

    <div class=" align-center">
            <h2 data-w-id="fb462289-f3a8-22b1-6e12-f86a273d7907"
                            style="transform: translate3d(0px, 32px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 0; transform-style: preserve-3d;"
                            class="title home-v3-blog">Notre Sélection <span class="text-span">d’Aliments   </span> 
                        </h2>
                        <div class="spacer-small"></div>
                       
                        <div class="spacer-medium"></div>
    </div>
    <div class="home-v2-overlay-style align-center"></div>

    <div data-w-id="4723f713-5fee-203c-6121-c890fa39a73c" class="home-v2-carousel-wrapper">
        <div style="transform: translate3d(-1183.46px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"
            class="loop-gallery">
            <div class="gallery-container">
                
             <?php include('structure/gallery.php'); ?>
           
            </div>
              
            <div class="gallery-container">
                
             <?php include('structure/gallery.php'); ?>
           
            </div>
           
            <div class="gallery-container display-none">
                
             <?php include('structure/gallery.php'); ?>
           
            </div>
            
          
        </div>
    </div>
    <div class="w-layout-blockcontainer container-large w-container"></div>
</section>