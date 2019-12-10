
<article class="w-full max-w-3xl mx-auto mb-12 bg-purple-light rounded overflow-hidden shadow-base">
    <?php
    if ( has_post_thumbnail() ):
        the_post_thumbnail('medium', ['class'=>'w-full']);
    else: ?>
        <img class="w-full" src="https://via.placeholder.com/500x320?text=Placeholder+image" alt="Placeholder image">
    <?php
    endif; ?>
    <div class="px-6 py-4">
        <div class="my-6 flex">
                <div class="flex items-center">
                <?php
                    if ( has_post_thumbnail() ):
                        the_post_thumbnail('medium', ['class'=>'w-10 h-10 rounded-bl-sm mr-4']);
                    else: ?>
                    <img style="max-width: 4rem!important;max-height: 4rem!important;" src="https://via.placeholder.com/48x48" class="w-10 h-10 rounded-bl-sm mr-4" alt="<?php echo get_the_author(); ?>">
                <?php
                    endif; ?>
                        <div class="text-sm inline-block align-middle">
                            <a class="relative inline-block align-middle text-blue-600 font-medium no-underline hover:underline" title="Visita el perfil de <?php echo get_the_author(); ?>" href="#"><?php echo get_the_author(); ?></a>
                            <p class="text-gray-600 my-0"><?php echo get_the_date(); ?></p>
                        </div>
                </div>
        </div>
        <div class="font-bold text-xl mb-2"><a href="#"><?php the_title(); ?></a></div>
        <p class="text-gray-700 font-hairline text-base">
            <?php the_excerpt(); ?>
        </p>
    </div>
</article>