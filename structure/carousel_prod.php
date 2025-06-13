<style> .large-image { will-change: background;
    background-color: rgb(246, 255, 230);
border: 2px solid var(--tertiary);} 

.small-image { border: 2px solid var(--primary);} 
    .gallery-container img{object-fit:contain;}
</style>
<section class="section padding-global padding-section-small">
    <h2>Notre liste de Produits</h2>
    <div class="home-v2-overlay-style"></div>
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