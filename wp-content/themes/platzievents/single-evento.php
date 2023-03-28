<?php  get_header();  ?>
    <main class="container my-3">
        <!-- Ciclo de Eventos -->   
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                        
        ?> 
                <h1 class='my-3 text-center'> 
                    <?php
                        the_title();
                    ?> 
                </h1>
                <div class="row">
                    <div class="col-4">
                        <?php   
                            the_post_thumbnail('large');
                        ?> 
                    </div>
                    <div class="col-6">
                        <?php
                            the_content();
                        ?>
                    </div>
                </div>
                <!-- Eventos Relacionados -->
                <?php $ID_producto_actual = get_the_ID(); ?>
                <?php  $args = array(
                    'post_type' => 'evento',
                    'posts_per_page' => 3,
                    'post__not_in'  => array($ID_producto_actual),
                    'order' => 'ASC',
                    'orderby' => 'title', 
                    
                );  
                    $evento = new WP_Query($args);              
                ?>

                <?php  if($evento->have_posts(  )){ ?> 
                    <div class="row text-center justify-content-center eventos-relacionados">
                        <div class="col-12">
                            <h3>Eventos Relacionados</h3>
                        </div>
                        
                        <?php   while($evento->have_posts()){   ?>
                            <?php   $evento->the_post( );    ?>  
                                <div class="col-md col-12 my-3 text-center">
                                    <?php   the_post_thumbnail('thumbnail');    ?>
                                     <h4 class='my-2'>
                                        <a href="<?php   the_permalink();    ?>">
                                            <?php   the_title();    ?>
                                        </a>
                                        
                                        
                                     </h4>   
                                </div>
                        <?php   }    ?>   
                    </div>    
                <?php   }    ?>
                <!-- Navegación -->    
                <?php get_template_part( 'template-parts/post', 'navigation' ) ?>

            <!-- Fin del Ciclo de Eventos -->
            <?php     }    ?>   
        <?php  }  ?>
    </main>

<?php  get_footer();  ?>