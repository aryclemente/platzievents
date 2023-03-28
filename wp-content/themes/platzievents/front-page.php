<?php  get_header();  ?>

    <main class="container">
        <?php 
            if(have_posts())
            {
                while(have_posts())
                {
                    the_post();
        ?> 
        <h1 class="my-3">
                   
            <?php
                the_title();
            ?>
        </h1> 
            
            <?php
                the_content();
            ?>

        <?php
                }

            }
        
        ?>

        <div class="lista-eventos my-3">
            <h2 class="text-center">Eventos Academicos</h2>
                <div class="row">
            
                    <?php
                        
                        $args = array(
                            'post_type' => 'evento',
                            'post_per_page' => -1,
                            'order' => 'ASC',
                            'ordeby' => 'title',
                        );

                        $eventos = new WP_Query($args);

                        if($eventos->have_posts()){
                            while($eventos->have_posts()){
                                $eventos->the_post();
                    ?>
                            <div class="col-4">
                                <figure>
                                    <?php   
                                        the_post_thumbnail('large');
                                    ?>
                                </figure>
                                <h4 class='my-3 text-center'>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                            </div>
                                      
                    
                    <?php        }
                        }

                    ?>    
                </div>
            </div>

            <div class="lista-programas my-3">
            <h2 class="text-center">Programas Academicos</h2>
                <div class="row">
            
                    <?php
                        
                        $args = array(
                            'post_type' => 'programa',
                            'post_per_page' => -1,
                            'order' => 'ASC',
                            'ordeby' => 'title',
                        );

                        $programas = new WP_Query($args);

                        if($programas->have_posts()){
                            while($programas->have_posts()){
                                $programas->the_post();
                    ?>
                            <div class="col-4">
                                <figure>
                                    <?php   
                                        the_post_thumbnail('large');
                                    ?>
                                </figure>
                                <h4 class='my-3 text-center'>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                    
                                </h4>
                            </div>
                                      
                    
                    <?php        }
                        }

                    ?>    
                </div>
            </div>

    </main>
    

<?php  get_footer();  ?>