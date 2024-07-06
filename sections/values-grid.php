<?php
$values = $args['values'];
$heading = $args['heading'];
$overline = $args['overline'];
?>
<section class="section-values">
    <div class="container-narrow py-extra-bottom">
        <div class="section-header space-y-4">
            <h5 class="heading-overline"><?php echo $overline; ?></h5>
            <h2 class="heading-h2"><?php echo $heading; ?></h2>
        </div>
        <div class="values-grid mt-10 lg:mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <?php foreach ($values as $value) : ?>
                <div class="value">
                    <div class="flex flex-wrap gap-2">
                        <div class="">
                            <svg class="w-8 h-8 p-1" width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.828 9.99999L3.41467 0.585327L0.585335 3.41466L7.172 9.99999L0.585334 16.5853L3.41467 19.4147L12.828 9.99999Z" fill="#1C75BC" />
                            </svg>

                        </div>
                        <div class="flex-1 space-y-4">
                            <h4 class="value-title font-bold text-[1.75rem] leading-none"><?php echo $value['heading']; ?></h4>
                            <p class="value-description"><?php echo $value['body_copy']; ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>