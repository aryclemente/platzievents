<?php  get_header();  ?>
    <main class="container my-3">
        <!-- Ciclo de Programas -->   
        <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    $taxonomy = get_the_terms( get_the_ID() , 'categoria-programas');   
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
                <!-- Programas Relacionados -->
                <?php $ID_programa_actual = get_the_ID(); ?>
                <?php  $args = array(
                    'post_type' => 'programa',
                    'posts_per_page' => 3,
                    'post__not_in'  => array($ID_programa_actual),
                    'order' => 'ASC',
                    'orderby' => 'title', 
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categoria-programas',
                            'field' => 'slug',
                            'terms' => $taxonomy[0]->slug
                        )
                    )
                    
                );  
                    $programa = new WP_Query($args);              
                ?>

                <?php  if($programa->have_posts(  )){ ?> 
                    <div class="row text-center justify-content-center programas-relacionados">
                        <div class="col-12">
                            <h3>Programas Relacionados</h3>
                        </div>
                        
                        <?php   while($programa->have_posts()){   ?>
                            <?php   $programa->the_post( );    ?>  
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

            <!-- Fin del Ciclo de Programas -->
            <?php     }    ?>   
        <?php  }  ?>
    </main>

<?php  get_footer();  ?>