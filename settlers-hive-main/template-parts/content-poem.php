

   <!-- Poem -->
   <div class="poem-wrapper">
        <div class="poem-image">
            <!-- TODO: Add image -->
            <img src="<?php the_field('poem-image'); ?>" alt="">
        </div>
        <div class="poem-text-wrapper">
            
            <?php the_field('poem-text'); ?>
            <small class="poem-author">
                <?php the_field('poem-author'); ?>
            </small>
        </div>
            
    </div>