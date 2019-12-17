
<article class="w-full max-w-2xl mx-auto mb-12 bg-purple-light rounded overflow-hidden shadow-base">
    
    <div class="px-6 py-4">
        <div class="my-6 flex">
            <div class="flex w-1/6">
                <img src="<?php echo THEMEPATH; ?>/assets/images/woblii-logo.svg" class="inline-block contain w-16 h-16 rounded-bl-sm mr-4" alt="Woblii">
            </div>
            <div class="flex items-center w-5/6">
                <div class="text-sm inline-block align-middle md:-ml-6">
                    <p class="inline-block align-bottom text-gray-600 my-0 text-2xl"><?php echo get_the_author(); ?></p>
                    <p class="inline-block align-bottom text-gray-600 my-0"><?php echo get_the_date(); ?></p>
                </div>
            </div>
        </div>
        <div class="flex-no-wrap text-gray-700 font-hairline text-base md:pl-20">
            <div class="block w-full font-bold text-xl mb-2"><a href="#"><?php the_title(); ?></a></div>
            <div class="block w-full text-gray-700 font-hairline text-base">
                <?php wpautop(the_excerpt()); ?>
            </div>
        </div>
    </div>
<?php
    if ( has_post_thumbnail() )
        the_post_thumbnail('medium', ['class'=>'w-full']); ?>
    
</article>