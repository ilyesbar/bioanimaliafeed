<script>
  document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-accordion");

    faqItems.forEach((item) => {
      const question = item.querySelector(".faq-question");
      const answer = item.querySelector(".faq-answer");

      question.addEventListener("click", function () {
        const isOpen = answer.style.height && answer.style.height !== "0px";

        // Fermer tous les autres
        faqItems.forEach((otherItem) => {
          const otherAnswer = otherItem.querySelector(".faq-answer");
          if (otherAnswer !== answer) {
            otherAnswer.style.height = "0px";
          }
        });

        // Ouvrir ou fermer l’élément cliqué
        if (isOpen) {
          answer.style.height = "0px";
        } else {
          answer.style.height = answer.scrollHeight + "px";
        }
      });
    });
  });
</script>

<!-- 
              <section class="section padding-global padding-section-small">
                <div class="w-layout-blockcontainer container-large w-container"> -->
                    
            <section class="section padding-global padding-section-medium">
                <div        class="w-layout-blockcontainer container-large w-container">
                    <div class="w-layout-grid faq-wrapper">
                        <div 
                            style="transform: translate3d(0px, 25%, 0px) scale3d(1, 1, 1) rotateX(5deg) rotateY(15deg) rotateZ(-5deg) skew(20deg, -5deg);
                                
                                              opacity: 1; transform-style: preserve-3d;"
                            class="faq-image-wrapper"><img
                                src="assets/images/goats-farm-sunny-day.jpg" loading="lazy"
                                sizes="(max-width: 991px) 100vw, (max-width: 1279px) 800px, 768px"
                                alt="" class="faq-image-style"
                                style=" border-radius :20px; "></div>
                        <div 
                            class="faq-content-wrapper max-width-large">
                            <h2 
                                style="transform: translate3d(0px, 32px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                                class="title faq-volunteer "> Nos Valeurs <span class="text-span">Fondamentales</span>  </h2>
                            <div class="spacer-small"></div>
                            <p 
                                style="transform: translate3d(0px, 32px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                                class="paragraph faq-qa">Nos valeurs fondamentales définissent notre identité et guident chacune de nos décisions. Elles constituent le socle de notre engagement envers nos partenaires, nos clients et notre environnement.</p>
                            <div class="spacer-small"></div>
                            <div 
                                style="transform: translate3d(0px, 32px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;"
                                class="faq-component max-width-large margin-top">
                                <div class="faq-accordion">
                                    <div 
                                        style="background-color: rgb(255, 255, 255);" class="faq-question">
                                        <div style="color:rgb(0,0,0)" class="heading-style-h6 faq">
                                            Qualité supérieure
                                        </div>
                                        <div style="color:rgb(142,204,20)" class="faq-icon w-embed"><svg width="100%"
                                                height="100%" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5303 20.8839C16.2374 21.1768 15.7626 21.1768 15.4697 20.8839L7.82318 13.2374C7.53029 12.9445 7.53029 12.4697 7.82318 12.1768L8.17674 11.8232C8.46963 11.5303 8.9445 11.5303 9.2374 11.8232L16 18.5858L22.7626 11.8232C23.0555 11.5303 23.5303 11.5303 23.8232 11.8232L24.1768 12.1768C24.4697 12.4697 24.4697 12.9445 24.1768 13.2374L16.5303 20.8839Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div style="width: 100%; height: 0px;" class="faq-answer">
                                        <div class="margin-bottom margin-small">
                                            <p class="paragraph faq-qa">Nous collaborons exclusivement avec des fournisseurs internationaux sélectionnés avec rigueur pour garantir des produits de haute qualité.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-accordion">
                                    <div 
                                        style="background-color: rgb(255, 255, 255);" class="faq-question">
                                        <div style="color:rgb(0,0,0)" class="heading-style-h6 faq">Expertise technique</div>
                                        <div style="color:rgb(142,204,20)" class="faq-icon w-embed"><svg width="100%"
                                                height="100%" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5303 20.8839C16.2374 21.1768 15.7626 21.1768 15.4697 20.8839L7.82318 13.2374C7.53029 12.9445 7.53029 12.4697 7.82318 12.1768L8.17674 11.8232C8.46963 11.5303 8.9445 11.5303 9.2374 11.8232L16 18.5858L22.7626 11.8232C23.0555 11.5303 23.5303 11.5303 23.8232 11.8232L24.1768 12.1768C24.4697 12.4697 24.4697 12.9445 24.1768 13.2374L16.5303 20.8839Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div style="width: 100%; height: 0px;" class="faq-answer">
                                        <div class="margin-bottom margin-small">
                                            <p class="paragraph faq-qa">Notre équipe spécialisée en nutrition animale met son savoir-faire au service de solutions adaptées et performantes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-accordion">
                                    <div 
                                        style="background-color: rgb(255, 255, 255);" class="faq-question">
                                        <div style="color:rgb(0,0,0)" class="heading-style-h6 faq">Service client</div>
                                        <div style="color:rgb(142,204,20)" class="faq-icon w-embed"><svg width="100%"
                                                height="100%" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5303 20.8839C16.2374 21.1768 15.7626 21.1768 15.4697 20.8839L7.82318 13.2374C7.53029 12.9445 7.53029 12.4697 7.82318 12.1768L8.17674 11.8232C8.46963 11.5303 8.9445 11.5303 9.2374 11.8232L16 18.5858L22.7626 11.8232C23.0555 11.5303 23.5303 11.5303 23.8232 11.8232L24.1768 12.1768C24.4697 12.4697 24.4697 12.9445 24.1768 13.2374L16.5303 20.8839Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div style="width: 100%; height: 0px;" class="faq-answer">
                                        <div class="margin-bottom margin-small">
                                            <p class="paragraph faq-qa">Nous offrons une assistance continue, avec des réponses personnalisées et des solutions sur mesure à chaque besoin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-accordion">
                                    <div 
                                        style="background-color: rgb(255, 255, 255);" class="faq-question">
                                        <div style="color:rgb(0,0,0)" class="heading-style-h6 faq"> Développement local</div>
                                        <div style="color:rgb(142,204,20)" class="faq-icon w-embed"><svg width="100%"
                                                height="100%" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5303 20.8839C16.2374 21.1768 15.7626 21.1768 15.4697 20.8839L7.82318 13.2374C7.53029 12.9445 7.53029 12.4697 7.82318 12.1768L8.17674 11.8232C8.46963 11.5303 8.9445 11.5303 9.2374 11.8232L16 18.5858L22.7626 11.8232C23.0555 11.5303 23.5303 11.5303 23.8232 11.8232L24.1768 12.1768C24.4697 12.4697 24.4697 12.9445 24.1768 13.2374L16.5303 20.8839Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div style="width: 100%; height: 0px;" class="faq-answer">
                                        <div class="margin-bottom margin-small">
                                            <p class="paragraph faq-qa">Nous contribuons activement à l’économie algérienne à travers la création d’emplois et le soutien aux initiatives locales.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-accordion">
                                    <div 
                                        style="background-color: rgb(255, 255, 255);" class="faq-question">
                                        <div style="color:rgb(0,0,0)" class="heading-style-h6 faq">Innovation</div>
                                        <div style="color:rgb(142,204,20)" class="faq-icon w-embed"><svg width="100%"
                                                height="100%" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.5303 20.8839C16.2374 21.1768 15.7626 21.1768 15.4697 20.8839L7.82318 13.2374C7.53029 12.9445 7.53029 12.4697 7.82318 12.1768L8.17674 11.8232C8.46963 11.5303 8.9445 11.5303 9.2374 11.8232L16 18.5858L22.7626 11.8232C23.0555 11.5303 23.5303 11.5303 23.8232 11.8232L24.1768 12.1768C24.4697 12.4697 24.4697 12.9445 24.1768 13.2374L16.5303 20.8839Z"
                                                    fill="currentColor"></path>
                                            </svg></div>
                                    </div>
                                    <div style="width: 100%; height: 0px;" class="faq-answer">
                                        <div class="margin-bottom margin-small">
                                            <p class="paragraph faq-qa">Grâce à une veille technologique constante, nous développons des produits à la pointe pour répondre aux défis du secteur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="background-design-wrapper">
                        <div class="background-design-element top-left-30px"></div>
                        <div class="background-design-element top-left-50px"></div>
                        <div class="background-design-element top-left-80px"></div>
                    </div>
                    <div class="background-design-wrapper">
                        <div class="background-design-element bottom-right-30px"></div>
                        <div class="background-design-element bottom-right-50px display-none"></div>
                        <div class="background-design-element bottom-right-80px"></div>
                    </div>
                </div>
            </section>