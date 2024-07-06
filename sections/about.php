<?php
$heading = $args['heading'];
$overline = $args['overline'];
$body_copy = $args['body_copy'];
$image = $args['image'];
$button = $args['button'];
$link_url = $button['url'];
$link_title = $button['title'];
$link_target = $button['target'] ? $button['target'] : '_self';
?>

<section class="section-about">
    <div class="container-narrow pt-12 lg:pt-20 pb-6 lg:pb-10">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/2 px-4">
                <div class="relative h-full">
                    <div class="relative min-h-[300px] lg:min-h-full">
                        <?php echo wp_get_attachment_image($image, 'large', false, array('class' => 'w-full h-full object-cover absolute top-0 left-0')); ?>

                    </div>
                    <div class="w-24 h-24 bg-white absolute top-0 left-0"></div>
                    <div class="w-24 h-24 bg-white absolute bottom-0 right-0"></div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 px-4">
                <h5 class="heading-overline"><?php echo $overline; ?></h5>
                <h2 class="heading-h2 mt-4 "><?php echo $heading; ?></h2>
                <p class="mt-8 text-lg"><?php echo $body_copy; ?></p>
                <a href="<?php echo $link_url; ?>" class="btn mt-8 "><?php echo $link_title; ?></a>

            </div>
        </div>

    </div>
</section>