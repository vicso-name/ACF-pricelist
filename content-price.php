<div class="container">
    <div class="row">
        <?php 
        $counter = 0; 
        if (have_rows('price_table')): 
            while (have_rows('price_table')): the_row();
                // Fetching fields
                $ServiceTitle = get_sub_field('title');
                $PriceValue = get_sub_field('price');
                $Subtitle = get_sub_field('subtitle');
                $counter++;
                
                // Define price class based on counter value
                $priceClass = match($counter) {
                    1 => 'intern',
                    2 => 'proff',
                    default => 'exclutive',
                };
        ?>

        <div class="col-md-4">
            <div class="price-card mb-5">
                <!--Price Table Header-->
                <header class="text-center price-header">
                    <h3 class='plan-title'><?php echo esc_html($ServiceTitle); ?></h3>
                    <p class="subtitle"><?php echo esc_html($Subtitle); ?></p>
                    <div class="packagePrice">$<?php echo esc_html($PriceValue); ?></div>
                </header>

                <!-- Price Table Body -->
                <main>
                    <div class="plan-includes">
                        <ul>
                            <?php 
                            if (have_rows('plan_includes')): 
                                while (have_rows('plan_includes')): the_row();
                                    $hourRate = get_sub_field('production');
                                    $design = get_sub_field('designed');
                            ?>
                            <li><?php echo esc_html($design); ?></li>
                            <li><?php echo esc_html($hourRate); ?></li>
                            <?php 
                                endwhile; 
                            endif;
                            ?>
                        </ul>
                    </div> 

                    <div class="price-features">
                        <ul class="<?php echo esc_attr($priceClass); ?>">
                            <?php 
                            if (have_rows('option_section')): 
                                while (have_rows('option_section')): the_row(); 
                                    $PriceOption = get_sub_field('option_item');
                            ?>
                            <li><?php echo esc_html($PriceOption); ?></li>
                            <?php 
                                endwhile; 
                            endif;
                            ?>
                        </ul>
                        <div class="price_button"></div>
                    </div>    
                </main>
            </div>                
        </div>
        <?php 
            endwhile; 
        endif;
        ?>
    </div>
</div>
