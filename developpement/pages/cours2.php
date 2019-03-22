<?php include("../inc/header.php") ?>

<div class="page-title parallax parallax10"> 
    <div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">   

                    <div class="page-title-heading">
                        <h2 class="title">TOUTS LES COURS</h2>
                    </div><!-- /.page-title-heading -->

                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/developpement/index.php">Acceuil</a></li>
                             <li>Cours</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 

                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
</div><!-- /page-title parallax -->
    	
        <section class="main-content blog-posts flat-row course-grid">
            <div class="container">
                <div class="blog-title clearfix">
                    <h1 class="bold">TOUTS LES COURS</h1>
                </div>
                    <div class="row">
                        <div class="flat-post-ordering clearfix">
                            <div class="sort-views">
                                <label class="modern-select">
                                    <select name="select_category" class="orderby">
                                        <option value="menu_order" selected="selected">Selectionner les Categories</option>
                                        <option value="Bureautique">Bureautique</option>
                                        <option value="Langage de Programmation">Langage de Programmation</option>
                                        <option value="Services">Services</option>
                                    </select>
                                </label>

                                <label class="modern-select">
                                     <select name="select_category" class="orderby">
                                        <option value="menu_order" selected="selected">Trier par</option>
                                        <option value="newest">Le plus récent</option>
                                        <option value="oldest">Le plus vieux</option>
                                    </select>
                                </label>

                                <div class="list-grid">
                                    <a data-layout = "course-grid" class="course-grid-view active" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                                    <a data-layout = "course-list" class="course-list-view" href="#"><i class="fa fa-list" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="post-warp clearfix">


                            <!-- COURS -->

                            <div class="flat-course flat-hover-zoom">
                                <div class="featured-post">  

                                    <div class="overlay">
                                        <div class="link"></div>
                                    </div>

                                    <div class="entry-image">
                                        <a href="#"><img src="../images/cours/powerpoint.jpg" alt="Powerpoint"></a>
                                    </div>

                                </div><!-- /.featured-post -->

                                <div class="course-content">

                                    <h4><a href="#">Cours Powerpoint</a> </h4>   
                                    <p>Dans ce cours, nous allons apprendre a utiliser un logiciel de presentation Powerpoint.</br></br></p>

                                </div><!-- /.course-content -->
                            </div>

                            <!-- FIN COURS -->



                        </div><!-- / .post-wrap -->

                        <div class="blog-pagination">
                            <ul class="flat-pagination"> 
                                <li><a href="cours.php">1</a></li>
                                <li><span class="active">2</span></li>
                                                              
                                <!--<li class="next">
                                    <a href="#">Suivant</a>
                                </li>-->                             
                            </ul><!-- /.flat-pagination -->
                        </div>



                    </div><!-- /row -->
            </div><!-- /container -->
        </section><!-- /main-content -->




<?php include("../inc/footer.php") ?>