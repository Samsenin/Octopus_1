<?php include("../../inc/header.php") ?>

<div class="page-title parallax parallax10" style="background-position: 50% 88px;"> 
        <div class="overlay"></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">  

                        <div class="page-title-heading">
                            <h2 class="title">COURS JAVASCRIPT</h2>
                        </div><!-- /.page-title-heading -->


                        <div class="breadcrumbs">
                            <ul>                            <!-- LIENS -->
                                <li><a href="/developpement/index.php">Acceuil</a></li>
                                <li><a href="/developpement/pages/intro_javascript.php">Javascript</a></li>
                                <li>Cours Javascript</li>
                            </ul>                   
                        </div><!-- /.breadcrumbs --> 


                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
</div><!-- /page-title parallax -->
        

    <section class="main-content blog-posts course-single">
        <div class="container">
             <div class="row">
                <div class="col-md-12">
                    <div class="blog-title-single">

                <!-- CONTENU -->
                <!-- METTEZ VOTRE PARTIE ICI -->

                        <h1 class="bold">JAVASCRIPT</h1>
                            
                        <div class="entry-content">
                            <h4 class="title-1 bold">À PROPOS DU COURS</h4>
                            <p>
                                JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs avec l'utilisation (par exemple) de Node.js. C'est un langage orienté objet à prototype, c'est-à-dire que les bases du langage et ses principales interfaces sont fournies par des objets qui ne sont pas des instances de classes, mais qui sont chacun équipés de constructeurs permettant de créer leurs propriétés, et notamment une propriété de prototypage qui permet d'en créer des objets héritiers personnalisés. En outre, les fonctions sont des objets de première classe. Le langage supporte le paradigme objet, impératif et fonctionnel. JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances npm, avec environs 500 000 paquets en août 2017.
                             </p> 

                            <div class="flat-spacer h8px"></div>
                            <h4 class="title-2">LES PREREQUIS</h4>
                            <p>
                                Connaitre les Bases de l'HTML et le CSS !
                            </p>   
                        </div><!-- /.entry-post -->


    <section class="flat-row pad-bottom-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="flat-accordion">

                            <!-- DEBUT toggle -->
                            <div class="flat-toggle">
                                <h6 class="toggle-title">Audio</h6>
                                <div class="toggle-content">

        <!-- CSS ICI -->
        <style type="text/css">
            
            .xmp{
                color: red;
            }


        </style>


        <p>
        Les formats audio !</br></br>

        Pour diffuser de la musique ou n'importe quel son, il existe de nombreux formats. La plupart d'entre eux sont compressés (comme le sont les images JPEG, PNG et GIF) ce qui permet de réduire leur poids :</br>

        MP3 : vous ne pouvez pas ne pas en avoir entendu parler ! C'est l'un des plus vieux, mais aussi l'un des plus compatibles (tous les appareils savent lire des MP3), ce qui fait qu'il est toujours très utilisé aujourd'hui.</br>

        AAC : utilisé majoritairement par Apple sur iTunes, c'est un format de bonne qualité. Les iPod, iPhone et autres iPad savent les lire sans problème.</br>

        OGG : le format Ogg Vorbis est très répandu dans le monde du logiciel libre, notamment sous Linux. Ce format a l'avantage d'être libre, c'est-à-dire qu'il n'est protégé par aucun brevet.</br>

        WAV (format non compressé) : évitez autant que possible de l'utiliser car le fichier est très volumineux avec ce format. C'est un peu l'équivalent du Bitmap (BMP) pour l'audio.</br>

        La compatibilité dépend des navigateurs, mais elle évolue dans le bon sens au fil du temps. Pensez à consulter Caniuse.com pour connaître la compatibilité actuelle du MP3, AAC,  OGG, WAV...</br>
        </p>

        <p>
            Pour inserer une piste audio il suffit de crée la balise : <xmp class="xmp"><audio></audio></xmp> Puis dans la balise audio ajouter la source du fichier :
            <xmp class="xmp"><audio src="musique.mp3"></audio></xmp>
        </p>

        <!---->

        <p>Si vous entrez cette balise, il ne se passera rien : </br>
        Pour afficher les controles, il faut ajouter dans la balise audio : <xmp class="xmp"><audio src="musique.mp3" controls></audio></xmp>
        </p>

        <audio src="/developpement/media/SpongeBobFunSong.mp3" controls></audio>


                                </div>
                            </div>
                            <!-- / FIN toggle -->


                            <!-- DEBUT toggle -->
                            <div class="flat-toggle">
                                <h6 class="toggle-title">Video</h6>
                                <div class="toggle-content">

<p>
                Les formats vidéo !</br></br>
                Le stockage de la vidéo est autrement plus complexe. On a besoin de trois éléments :</br>

                Un format conteneur : c'est un peu comme une boîte qui va servir à contenir les deux éléments ci-dessous. On reconnaît en général le type de conteneur à l'extension du fichier : AVI, MP4, MKV…</br>

                Un codec audio : c'est le format du son de la vidéo, généralement compressé. Nous venons de les voir, on utilise les mêmes : MP3, AAC, OGG…</br>

                Un codec vidéo : c'est le format qui va compresser les images. C'est là que les choses se corsent, car ces formats sont complexes et on ne peut pas toujours les utiliser gratuitement. Les principaux à connaître pour le Web sont :</br>

                H.264 : l'un des plus puissants et des plus utilisés aujourd'hui… mais il n'est pas 100% gratuit. En fait, on peut l'utiliser gratuitement dans certains cas (comme la diffusion de vidéos sur un site web personnel), mais il y a un flou juridique qui fait qu'il est risqué de l'utiliser à tout va.</br>

                Ogg Theora : un codec gratuit et libre de droits, mais moins puissant que H.264. Il est bien reconnu sous Linux mais, sous Windows, il faut installer des programmes pour pouvoir le lire.</br>

                WebM : un autre codec gratuit et libre de droits, plus récent. Proposé par Google, c'est le concurrent le plus sérieux de H.264 à l'heure actuelle.</br>
            </p>

            <p>
            Pour inserer une video il suffit de crée la balise : <xmp style="color: red"><video></video></xmp> Puis dans la balise video ajouter la source du fichier :
            <xmp style="color: red"> <video src="video.mp4"></video> </xmp>
            </p>

            <!---->

            <p>Si vous entrez cette balise, il ne se passera rien : </br>
            Pour afficher les controles, il faut ajouter dans la balise video : <xmp style="color: red"> <video src="video.mp4" controls></video> </xmp>
            </p>


            <video src="/developpement/media/OnePunchMan.mp4" controls width="100%"></video>



                                </div>
                            </div>
                            <!-- / FIN toggle -->











                        </div><!-- /.flat-accordion -->
                        </div><!-- / .col-md-12 -->

                    </div><!-- /.row -->
            </div>
    </section>








                    <!-- FIN CONTENU -->

                    </div><!-- /.main-post -->
                </div><!-- /blog-title-single -->
                <!-- /col-md-12 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /main-content -->

<?php include("../../inc/footer.php") ?>