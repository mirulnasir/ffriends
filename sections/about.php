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

<div class="about">
    <div class="max-w-8xl mx-auto px-8 lg:px-12 pt-12 lg:pt-20 pb-6 lg:pb-10">
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
                <h5 class="text-brand-primary-blue uppercase text-lg font-bold"><?php echo $overline; ?></h5>
                <h2 class="text-5xl capitalize mt-4 font-bold"><?php echo $heading; ?></h2>
                <p class="mt-8 text-lg"><?php echo $body_copy; ?></p>
                <a href="<?php echo $link_url; ?>" class="bg-brand-primary-blue text-white px-6 py-4 uppercase font-bold rounded-lg inline-flex mt-8"><?php echo $link_title; ?></a>

            </div>
        </div>

    </div>
</div>