<?php include("../inc/header.php") ?>

<div class="page-title parallax parallax10" style="background-position: 50% -151px;"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title">CONTACTER NOUS</h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/developpement/index.php">Acceuil</a></li>
                            <li>Contact</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">

                            <a href="#LeafletMap">

                            <div class="contact-address">
                                <div class="style1">                                    
                                   <img src="../images/icon/c1.png" alt="image">
                                </div> 
                                <div class="details">
                                    <h5>Notre Adresse</h5>
                                    <p>32 rue de l'Escouvrier,</p>
                                    <p>95200 Sarcelles</p>
                                </div>
                            </div>

                            </a>


                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="../images/icon/c2.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Telephone</h5>
                                    <p>Telephone : (+33)06.71.91.17.24 </p>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="../images/icon/c3.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Vous souhaitez-nous ecrire</h5>
                                    <p>contact@codingvalley.com</p>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="flat-spacer d74px"></div>
                </div>

                <div id="respond" class="comment-respond contact style2">
                    <h1 class="title comment-title">Laissez nous un message</h1>
                    <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="http://themesflat.com/html/educate/contact/contact-process.php" novalidate="novalidate">
                        <div class="field clearfix">      
                            <div class="wrap-type-input">                    
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Nom" name="name" id="name" required="">
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required="">
                                </div>
                                <div class="input-wrap last Subject">
                                    <input type="text" value="" placeholder="Sujet (optionnel )" name="subject" id="subject">
                                </div>  
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required=""></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button class="flat-button bg-orange">Envoyer votre Message</button>
                        </div>
                    </form><!-- /.comment-form -->                     
                </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>


        <!-- Map -->
        <section class="row-map" id="LeafletMap">
            <div class="container-fluid">
                <div class="row">

                    <div id="Leaflet"></div>

                </div>
            </div><!-- /.container -->
        </section>




<?php include("../inc/footer.php") ?>