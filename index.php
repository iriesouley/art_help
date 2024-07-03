<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page d'accueil - Artisans d'Afrique</title>

        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fichiers_css/accueil.css" />
        
    </head>
<body>
    <section class = "sectionPrincipal">
        <header>
            <aside class="boxlogobanniere">
                <!--<img class="imagelogobanniere" src ="image_accuel/baniere_header.jpg" alt ="Photo d'entête de page" />-->
                <div class = "overlay">
                    <div class = "boxLogo">
                        <img class="imagelogo" src ="image_accuel/Art_help-02.png" alt ="Photo logo" />
                    </div>
                    <div class = "boxBienvenue">
                        <h1 class="texte_accroche">BIENVENUE  SUR  ART' HELP</h1>
                        <p class="boxbandeinfo">
                            <marquee behavior="scroll" scrollamount="5">
                                Aide aux artisans - Votre satisfaction est <span class="spanAvantTextebandeinfo">notre priorité</span>
                            </marquee>
                        </p>
                    </div>
                    <div class = "boxConnexion">
                        <a class = "connexion" href="#">Connexion</a>
                    </div>
                    

                    <div class="menuPrincipal">
                        <!--<div class="logo">Logo</div>-->
                        <nav>
                            <a href="#">Accueil</a>
                            <a href="#">Inscription Artisan</a>
                            <a href="#">Rechercher un Artisan</a>
                            <a href="#">À propos</a>
                            <a href="#">Contact</a>
                        </nav>
                        
                    </div>
                </div>
                
            </aside>

        </header>
        <section class = "sectionSecondaire">
            <div class="banner">
                <!--<div class = "slider">
                    <img class = "imageBanniere" src ="image_accuel/collier_bijoux4.png" alt ="Photo banniere" />
                </div>-->

                <div class="slideshow-container" >

                    <div class="boxImageUniqueBanniere">
                        <!--<div class="numbers">1 / 5</div>-->
                        <img class="imageUniqueBanniere" src="image_accuel/sliderphotos/image_couture.jpg" alt ="Photo banniere"/>
                    </div>

                    <div class="myslides fade">
                        <!--<div class="numbers">1 / 5</div>-->
                        <img class="imageBanniere" src="image_accuel/sliderphotos/slider_1_collier_bijoux4.png" alt ="Photo banniere"/>
                    </div>

                    <div class="myslides fade">
                        <!--<div class="numbers">2 / 5</div>-->
                        <img class="imageBanniere" src="image_accuel/sliderphotos/slider_2_poterie.jpg" alt ="Photo banniere"/>
                    </div>

                    <div class="myslides fade">
                        <!--<div class="numbers">3 / 5</div>-->
                        <img class="imageBanniere" src="image_accuel/sliderphotos/slider_3_peinture.jpg" alt ="Photo banniere"/>
                    </div>

                    <div class="myslides fade">
                        <!--<div class="numbers">4 / 5</div>-->
                        <img class="imageBanniere" src="image_accuel/sliderphotos/slider_4_tissage.png" alt ="Photo banniere"/>
                    </div>

                    <div class="myslides fade">
                        <!--<div class="numbers">5 / 5</div>-->
                        <img class="imageBanniere" src="image_accuel/sliderphotos/slider_5_coiffure.jpg" alt ="Photo banniere"/>
                    </div>

                </div>
                    
                <h1>Des artisans compétents pour la réalisation de vos projets</h1>

            </div>
            <!--------------------------------------------------------------------------------------------------->
            <!---------------------------------------------------------------------------------------------------->
            <script type="text/javascript">
                var slideIndex = 1;

                showSlide(slideIndex);

                function plusSlides(n){
                showSlide(slideIndex += n);
                }

                function plusSlidesPrev(m){
                /*var monPrevIndex = 0;
                slideIndex = slideIndex += m;

                if (slideIndex += m > slides.length) { slideIndex = 1};

                if (slideIndex += m < 1) { slideIndex = slides.length};*/

                showSlide(slideIndex += m);
                }


                function currentSlide(n) {
                showSlide(slideIndex = n);
                }


                function showSlide(n){

                var i;

                var slides = document.getElementsByClassName("myslides");

                /*var dots = document.getElementsByClassName("dots");*/

                if (n > slides.length) { slideIndex = 1};

                if (n < 1) { slideIndex = slides.length};

                for (i=0;i<slides.length;i++) {

                slides[i].style.display = "none";

                };

                /*for (i=0;i<dots.length;i++) {

                dots[i].className = dots[i].className.replace(" active","");

                };*/

                slides[slideIndex-1].style.display = "block";

                /*dots[slideIndex-1].className += " active";*/
                /*slideIndex++;*/

                }
                /*----------------- DECLENCHEMENT AUTO SLIDER ----------------------------------------*/
                var intervalId;
                			
                var slideIndexAuto = 1;
                autoSlide(slideIndexAuto);
                function autoSlide(n) {
                    var i;

                var slides = document.getElementsByClassName("myslides");

                /*var dots = document.getElementsByClassName("dots");*/

                if (n > slides.length) { slideIndexAuto = 1};

                if (n < 1) { slideIndexAuto = slides.length};

                for (i=0;i<slides.length;i++) {

                slides[i].style.display = "none";

                };

                /*for (i=0;i<dots.length;i++) {

                dots[i].className = dots[i].className.replace(" active","");

                };*/

                slides[slideIndexAuto-1].style.display = "block";

                /*dots[slideIndexAuto-1].className += " active";*/
                slideIndexAuto++;

                if (slideIndexAuto>5) {slideIndexAuto=1}

                    slideIndex = slideIndexAuto-1;/*Récupération de l'index slider auto pour slider avec boutons de navigation;*/
                }

                intervalId = setInterval(autoSlide, 3000);
                /*setInterval(function () { showSlide(1);}, 2000);*/



            </script>

            <!--------------------------------------------------------------------------------------------------->
            
            <div class = "sous-section1">
                <div class="aProposDuSite">
                    <h2>À propos de ART' HELP</h2>
                    <p>ART’ HELP est une plateforme innovante dédiée à la promotion et à la gestion des artisans en Afrique de l'Ouest. Notre mission est de connecter les artisans qualifiés avec des clients à la recherche de compétences spécifiques, tout en facilitant la visibilité et la croissance des artisans. Nous offrons une interface conviviale permettant aux artisans de créer et de gérer leur profil, de présenter leurs réalisations et de mettre à jour leurs informations à tout moment. Les clients peuvent facilement rechercher et trouver des artisans qualifiés selon leurs besoins, consulter des profils détaillés, et entrer en contact direct pour discuter de projets. Chez ART’ HELP, nous croyons en la valeur et la diversité des compétences artisanales et nous nous engageons à soutenir la communauté des artisans en leur offrant une plateforme pour prospérer et atteindre un public plus large. Rejoignez-nous et découvrez comment nous pouvons vous aider à réaliser vos objectifs, que vous soyez artisan ou client.</p>
                </div>
                <div class="boxConnexion1">
                    <img class = "imageApropos" src ="image_accuel/figurines_femmes_africaines.jpg" alt ="Photo à propos" />
                    <em style = "font-size: 9px;">Figurines femmes africaines</em>
                </div>
            </div>
            
            <div class = "sous-section2">
                <!--<div class="BoximageCommentCaMarche">
                    <img class = "imageCommentCaMarche" src ="image_accuel/pagne_kente3.png" alt ="Photo comment ça marche" />
                </div>-->
                <div class="BoxCommentCamarche">
                    <h2>Comment ça marche ?</h2>
                    <p>Bienvenue sur ART’ HELP, votre plateforme dédiée à la promotion et la gestion des artisans en Afrique de l'Ouest. Les artisans peuvent facilement créer un profil en s'inscrivant, en fournissant leurs informations personnelles, leur métier, leur localisation, et une description détaillée de leur activité, tout en ajoutant des photos de leurs réalisations. Les clients peuvent utiliser notre moteur de recherche pour trouver des artisans en fonction de critères tels que le métier et la localisation, puis consulter les profils détaillés pour voir les compétences et les réalisations des artisans. Les artisans peuvent également mettre à jour leurs informations à tout moment en accédant à leur tableau de bord. Enfin, les clients peuvent contacter directement les artisans via les coordonnées fournies sur leur profil pour discuter et collaborer sur des projets. Notre plateforme est conçue pour être intuitive et efficace, facilitant la rencontre entre artisans qualifiés et clients en quête de compétences spécifiques. Rejoignez-nous dès aujourd'hui pour bénéficier d'une visibilité accrue et d'opportunités de collaboration enrichissantes.</p>
                </div>
            </div>

            <div class = "sous-section1_b">
                <div class="aProposDuSite" style = "display: none";>
                    <h2>À propos de nous</h2>
                    <p>Brève description de l'application et de ses objectifs.<br/>Lorem ipsum dolor, 
                    sit amet consectetur adipisicing elit. Quaerat nesciunt quae quia accusantium nulla 
                    odio aperiam tenetur temporibus cumque excepturi, reprehenderit aliquid sunt molestias 
                    necessitatibus iure quas nisi repellendus corporis!</p>
                </div>
                <div class="boxConnexion2">
                    <form action = "">
                        <h2>Se connecter</h2>
                        <div class = "input-box">
                            <input type = "text" placeholder ="Username" required>
                        </div>
                        <div class = "input-box">
                            <input type = "password" placeholder ="Password" required>
                        </div>
                        <div class = "remember-forgot">
                            <label><input type = "checkbox">Remember me</label>
                            <a href ="#">Forgot password ?</a>
                        </div>

                        <button type = "submit" class = "btn">Login</button>

                        <div class = "register-link">
                            <p>Don't have an account ? <a href = "#">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class = "sous-section3">
                <div class="rubrique">
                    <h2>Témoignages</h2>
                    <p>Avis et retours des utilisateurs.</p>
                </div>
            </div>

            
            <footer>
                <div class = "footer">
                    <div class="boxFooter">
                        <div class="contactezNous">
                        <p class="sousTitreFooter">Contactez-nous</p>
                        <p class = "footerItem">01 BP 00 Abidjan 10 <br/>Abidjan , Côte d'Ivoire</p>

                        <p class = "footerItem">Phone: +225 075500000 <br/>E-mail: art'help@gmail.com</p>

                        </div>
                        <div class="lienUtiles">
                            <p class="sousTitreFooter">Liens utiles</p>
                            <p class="footerItem"><a href="#">Rechercher un artisan</a><br/><a href="#">Contact</a></p>
                            <p class="footerItem"><a href="#">Se connecter</a><br/><a href="#">S'inscrire maintenant</a></p>
                        </div>
                        <div class="mentionsLegales">
                            <p class="sousTitreFooter">Mentions légales</p>
                            <p><br/><a class = "footerItem" href="#">Mentions légales</a><br/><br/><br/><br/><br/><br/><br/></p>
                        </div>
                        <div class = "boxLogoFooter">
                            <img class="imagelogoFooter" src ="image_accuel/Art_help-02.png" alt ="Photo logo" />
                        </div>
                    </div>
                    
                </div>
            </footer>
        </section>
    </section>
</body>
</html>
