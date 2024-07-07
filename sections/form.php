<?php

/**
 * Template part for displaying the form section
 */
$form = $args['form'];
$image = $args['image'];
$heading = $args['heading'];
?>

<section class="section-form">
    <div class="container-narrow py-even">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-2/3 px-4">
                <?php if ($heading) : ?>
                    <h2 class="font-bold font-heading text-4xl"><?php echo $heading; ?></h2>
                <?php endif; ?>
                <div class="contact-form mt-10 lg:mt-16">
                    <?php echo $form; ?>
                </div>
            </div>
            <div class="form-image w-full lg:w-1/3 px-4 mt-8 lg:mt-0">
                <div class="relative h-[calc(100%-4rem)]">
                    <div class="relative min-h-[300px] lg:min-h-full">
                        <?php echo wp_get_attachment_image($image, 'large', false, array('class' => 'w-full h-full object-cover absolute top-0 left-0')); ?>

                    </div>
                    <div class="w-24 h-24 bg-white absolute top-0 left-0"></div>
                    <div class="w-24 h-24 bg-white absolute bottom-0 right-0"></div>
                </div>

            </div>
        </div>
    </div>
</section>