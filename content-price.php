<div class="container">
    <div class="row">
        <?php $counter = 0; ?>
        <?php while ( have_rows('price_table') ) : the_row();
            $ServiceTitle = get_sub_field('title');
            $PriceValue = get_sub_field('price');
            $Subtitle = get_sub_field('subtitle');
        ?>
        <?php 
            $counter ++;
            if($counter == 1){
                $priceClass = "intern";
            }else if ($counter == 2){
                $priceClass = "proff";
            }else{
                $priceClass = "exclutive";
            }             
        ?>
        
        <div class="col-md-4">
            <div class="price-card mb-5">
                
                <!--Price Table Header-->
                <header class="text-center price-header">
                    <h3 class='plan-title'><?php echo $ServiceTitle ?></h3>
                    <p class="subtitle"><?php echo  $Subtitle;  ?></p>
                    <div class="packagePrice">$<?php echo $PriceValue ?></div>
                </header>

                <!-- Price Table Body -->
                <main>
                    <div class="plan-includes">
                        <ul>
                            <?php while(have_rows('plan_includes')) : the_row();
                                $hourRate = get_sub_field('production');
                                $design = get_sub_field('designed');
                            ?>
                            <li><?php echo $design ?></li>
                            <li><?php echo $hourRate ?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div> 

                    <div class="price-features">
                        <ul class="<?php echo $priceClass ?>">
                            <?php while(have_rows('option_section')) : the_row(); $PriceOption = get_sub_field('option_item');?>
                            <li><?php echo ($PriceOption); ?></li>
                            <?php endwhile ?>
                        </ul>
                        <div class="price_button"></div>
                    </div>    

                </main>
            </div>                
        </div>
        <?php endwhile ?>
    </div>
</div>