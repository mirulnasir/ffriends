<?php

/**
 * Template part for displaying the insights section
 */
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
                $rss = new DOMDocument();
                $rss->load('https://thepropertytribune.com.au/feed/');
                $items = $rss->getElementsByTagName('item');
                $items = iterator_to_array($items);
                $items = array_slice($items, 0, 6);


                foreach ($items as $node) :

                    $title = $node->getElementsByTagName('title')->item(0)->nodeValue;
                    $date = $node->getElementsByTagName('pubDate')->item(0)->nodeValue;
                    $date = date('F j, Y', strtotime($date));
                    $excerpt = $node->getElementsByTagName('description')->item(0)->nodeValue;
                    $link = $node->getElementsByTagName('link')->item(0)->nodeValue;
                    $author = $node->getElementsByTagName('creator')->item(0)->nodeValue;
                    $category = $node->getElementsByTagName('category')->item(0)->nodeValue;
                    $thumbnail = $node->getElementsByTagName('enclosure')->item(0);
                    $thumbnail_url = $thumbnail->getAttribute('url');

                ?>

                    <div class="bg-white rounded-xl overflow-hidden group">
                        <a href="<?php echo $link; ?>" class="">
                            <div class="">
                                <?php
                                if ($thumbnail_url) :
                                ?>
                                    <div class="w-full h-auto aspect-video overflow-hidden">
                                        <img src="<?php echo $thumbnail_url ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-1000">
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
                                    <span class="  text-brand-primary-blue"><?php echo $author; ?></span>
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