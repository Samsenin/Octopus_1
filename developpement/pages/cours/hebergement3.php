<?php include("../../inc/header.php") ?>


<div class="page-title parallax parallax10" style="background-position: 50% 88px;"> 
        <div class="overlay"></div>            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">  

                        <div class="page-title-heading">
                            <h2 class="title">Utiliser un client FTP</h2>
                        </div><!-- /.page-title-heading -->


                        <div class="breadcrumbs">
                            <ul>                            <!-- LIENS -->
                                <li><a href="/developpement/index.php">Acceuil</a></li>
                                <li><a href="/developpement/pages/intro_hebergement.php">Hebergement</a></li>
                                <li>Cours Client FTP</li>
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

                        <h1 class="bold">Envoyez vos site sur le WEB</h1>
                            
                        <div class="entry-content">
                            <h4 class="title-1 bold">À PROPOS DU COURS</h4>
                            <p>
                                Votre site est tout beau, tout propre, tout prêt… mais comme il est sur votre disque dur, personne d'autre ne va pouvoir en profiter !

Vous aimeriez donc l'envoyer sur le Web, mais… vous ne savez pas comment faire.
Nous allons découvrir dans cette annexe tout ce qu'il faut savoir pour envoyer son site sur le Web :<br/>

1. Comment réserver un nom de domaine ?<br/>

2. Qu'est-ce qu'un hébergeur et comment cela fonctionne-t-il ?<br/>

3. <b>Enfin, comment utiliser un client FTP pour pouvoir transférer les fichiers sur le Net ?</b>

                             </p> 

                            <div class="flat-spacer h8px"></div>
                            <h4 class="title-2">LES PREREQUIS</h4>
                            <p>
                                Connaitre les Bases de l'HTML et le CSS, Avoir créer un nom de domaine ainsi qu'utiliser un hebergeur, qui nous permettras de stocker les fichiers de notre pages web.
                            </p>   
                        </div><!-- /.entry-post -->


    <section class="flat-row pad-bottom-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="flat-accordion">

                            <!-- DEBUT toggle -->
                            <div class="flat-toggle">
                                <h6 class="toggle-title "><b>intéressons-nous maintenant au transfert de fichier en FTP.</b></h6>
                                <div class="toggle-content">

        <!-- CSS ICI -->
        <style type="text/css">
            
            .xmp{
                color: red;
            }


        </style>


        <p>

<b>Utiliser un client FTP</b>

        <p>
           FTP signifie File Transfer Protocol et, pour faire court et simple, c'est le moyen que l'on utilise pour envoyer nos fichiers. Il existe des logiciels permettant d'utiliser le FTP pour transférer vos fichiers sur Internet.Bien entendu, des logiciels FTP, il en existe des centaines, gratuits, payants, français, anglais, etc. Pour que nous soyons sur la même longueur d'onde, je vais vous proposer celui que j'utilise, qui est gratuit et en français : FileZilla (figure suivante).</p> 

<img  src="/developpement/images/issam/exo3.png" /><br/><br/>



          <p>  je vais vous montrer quelle est la marche à suivre avec FileZilla. Et la première étape, c'est bien entendu de le télécharger !.
                </p>
                <br/>
                <p> Prenez la version correspondant à votre système d'exploitation : <a href="https://telecharger.tomsguide.fr/FileZilla,0301-248-63192.html" target="_blank">ici pour Windows,</a> <a href="https://telecharger.tomsguide.fr/FileZilla,0301-248-32035.html" target="_blank"> ici pour Mac OS</a>  <a href="https://telecharger.tomsguide.fr/FileZilla,0301-248-32037.html" target="_blank">ou là pour Linux.</a><br/><br/>
 
Lancez le logiciel, vous devriez voir quelque chose ressemblant à la figure suivante.</p>



        <img  src="/developpement/images/issam/exo4.png" /><br/><br/>





<p>  Il y a quatre grandes zones à connaître dans la fenêtre :<br/><br/>

1 : En haut, vous verrez apparaître les messages qu'envoie et reçoit le logiciel. Si vous avez un peu de chance, vous verrez même la machine vous dire bonjour (si si, je vous jure). En général, cette zone ne nous intéresse pas vraiment, sauf s'il y a des messages d'erreur en rouge…:<br/><br/>

2 : À gauche, c'est votre disque dur. Dans la partie du haut, vous avez les dossiers et, dans la partie du bas, la liste des fichiers du dossier actuel.:<br/><br/>

3 : À droite, c'est la liste des fichiers envoyés sur le serveur sur Internet. Pour le moment il n'y a rien car on ne s'est pas connecté, mais cela va venir, ne vous en faites pas.:<br/><br/>

4 : Enfin, en bas, vous verrez apparaître les fichiers en cours d'envoi (et le pourcentage d'envoi)..</p><br/><br/>











        <!---->

        

       


                                </div>
                            </div>
                            <!-- / FIN toggle -->





                            <!-- DEBUT toggle -->

                             <div class="flat-toggle">
                                <h6 class="toggle-title "><b>Configurer le client FTP.</b></h6>
                                <div class="toggle-content">


                                    <p>Quel que soit l'hébergeur que vous avez choisi, cela fonctionne toujours de la même manière. On va vous fournir trois informations qui sont indispensables pour que FileZilla puisse se connecter au serveur :<br/><br/>

    • <b>L'IP ou l'hôte</b> : c'est « l'adresse » du serveur. Le plus souvent, on vous donnera une information du typeftp.mon-site.com, mais il peut aussi s'agir d'une suite de nombres comme 122.65.203.27.<br/><br/>

   • <b>Le login</b> : c'est votre identifiant, on vous probablement demandé de le choisir. Vous avez peut-être mis votre pseudo, ou le nom de votre site. Mon login pourrait par exemple exemple21.<br/><br/>

   • <b>Le mot de passe</b> : soit on vous a demandé de choisir un mot de passe, soit (c'est plus probable) on vous en a attribué un d'office (un truc imprononçable du genre crf45u7h).<br/><br/><br/>

   Si vous avez ces trois informations, vous allez pouvoir continuer.
Si vous ne les avez pas, il faut que vous les cherchiez, c'est indispensable. On vous les a probablement envoyées par e-mail. Sinon, n'hésitez pas à les demander à votre hébergeur (IP, login et mot de passe).
                                        

                                    </p>




                                      </div>
                            </div>



                              <!-- / FIN toggle -->

                           






 <div class="flat-toggle">
                                <h6 class="toggle-title"><b>Video pour FTP</b></h6>
                                <div class="toggle-content">

            

        


                        <video src="/developpement/media/test2final.mp4" controls width="100%"></video>



                              



                                </div>
                            </div>










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