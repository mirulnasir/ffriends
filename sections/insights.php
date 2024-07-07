<?php
$overline = $args['overline'];
$heading = $args['heading'];
?>

<section class="section-insights gradient-brand-tr">
    <div class="py-even">
        <div class="container-narrow ">
            <div class="section-header space-y-4">
                <h5 class="heading-overline text-white"><?php echo $overline; ?></h5>
                <h2 class="heading-h2 text-white"><?php echo $heading; ?></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10 lg:mt-16">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $latest_insights = get_posts($args);
                foreach ($latest_insights as $post) :
                    setup_postdata($post);
                    $title = get_the_title($post);
                    $excerpt = get_the_excerpt($post);
                    $permalink = get_the_permalink($post);
                    $category = get_the_category($post);
                    $category_name = $category[0]->name;
                    $date = get_the_date('F j, Y', $post);
                    $thumbnail_id = get_post_thumbnail_id($post);
                    $author_id = get_the_author_meta('ID', $post->post_author);
                    $author_name = get_the_author_meta('display_name', $author_id);
                ?>
                    <div class="bg-white rounded-xl overflow-hidden group">
                        <a href="<?php echo $permalink; ?>" class="">
                            <div class="">
                                <?php
                                if ($thumbnail_id) :
                                ?>
                                    <div class="w-full h-auto aspect-video overflow-hidden">
                                        <?php echo wp_get_attachment_image($thumbnail_id, 'large', false, array('class' => ' w-full h-full object-cover group-hover:scale-105 transition-all duration-1000')); ?>
                                    </div>
                                <?php
                                else :
                                ?>
                                    <div class=" bg-brand-secondary-dark-gray w-full h-auto aspect-video"></div>
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="p-4 md:p-6 space-y-4">
                                <h5 class="heading-h5 text-brand-primary-blue font-bold font-heading text-base"><?php echo $category_name; ?></h5>
                                <div class="space-y-3">
                                    <h3 class="heading-h3 text-brand-primary-black font-bold text-xl leading-none"><?php echo $title; ?></h3>
                                    <p class="text-brand-primary-dark-gray"><?php echo $excerpt; ?></p>
                                </div>
                                <div class="text-sm font-body font-semibold uppercase space-x-2">
                                    <span class=""><?php echo $date; ?></span>
                                    <span class="  text-brand-primary-blue"><?php echo $author_name; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</section>