<?php
$heading = $args['heading'];
$overline = $args['overline'];
$members = $args['members'];
?>

<section class="section-team gradient-brand-tr">
    <div class="py-even">
        <div class="container-narrow ">
            <div class="section-header space-y-4">
                <h5 class="heading-overline text-white"><?php echo $overline; ?></h5>
                <h2 class="heading-h2 text-white"><?php echo $heading; ?></h2>
            </div>

        </div>
        <div class="container-wide">
            <div class="team-grid mt-10 lg:mt-16 grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <?php foreach ($members as $member) :
                    // image, name, poisition, bio, qualifications (as list)
                    $image = $member['image'];
                    $name = $member['name'];
                    $position = $member['position'];
                    $bio = $member['bio'];
                    $qualifications = $member['qualifications'];
                ?>
                    <div class="team-member p-4 lg:p-6 bg-white rounded-2xl">
                        <div class="flex flex-wrap -mx-3">
                            <div class="px-3">
                                <div class=" w-[251px]">
                                    <div class="member-image ">
                                        <?php echo wp_get_attachment_image($image, 'large', false, array('class' => ' aspect-[251/320] w-full object-cover')); ?>
                                    </div>

                                    <a href="" class="btn w-full mt-4 px-4">
                                        <span class="mx-auto flex items-center justify-center ">
                                            <span class="block flex-none">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.3333 0C22.0406 0 22.7189 0.280951 23.219 0.781048C23.719 1.28115 24 1.95942 24 2.66667V21.3333C24 22.0406 23.719 22.7189 23.219 23.219C22.7189 23.719 22.0406 24 21.3333 24H2.66667C1.95942 24 1.28115 23.719 0.781048 23.219C0.280951 22.7189 0 22.0406 0 21.3333V2.66667C0 1.95942 0.280951 1.28115 0.781048 0.781048C1.28115 0.280951 1.95942 0 2.66667 0H21.3333ZM20.6667 20.6667V13.6C20.6667 12.4472 20.2087 11.3416 19.3936 10.5264C18.5784 9.71128 17.4728 9.25333 16.32 9.25333C15.1867 9.25333 13.8667 9.94667 13.2267 10.9867V9.50667H9.50667V20.6667H13.2267V14.0933C13.2267 13.0667 14.0533 12.2267 15.08 12.2267C15.5751 12.2267 16.0499 12.4233 16.3999 12.7734C16.75 13.1235 16.9467 13.5983 16.9467 14.0933V20.6667H20.6667ZM5.17333 7.41333C5.76742 7.41333 6.33717 7.17733 6.75725 6.75725C7.17733 6.33717 7.41333 5.76742 7.41333 5.17333C7.41333 3.93333 6.41333 2.92 5.17333 2.92C4.57571 2.92 4.00257 3.1574 3.57999 3.57999C3.1574 4.00257 2.92 4.57571 2.92 5.17333C2.92 6.41333 3.93333 7.41333 5.17333 7.41333ZM7.02667 20.6667V9.50667H3.33333V20.6667H7.02667Z" fill="white" />
                                                </svg>
                                            </span>
                                            <span class="ml-2 shrink grow-0 text-[0.94rem]"><?php echo $name; ?></span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <div class="member-info flex-1 px-3">
                                <h3 class="member-name font-semibold text-4xl"><?php echo $name; ?></h3>
                                <p class="member-position font-bold uppercase text-brand-primary-blue text-lg"><?php echo $position; ?></p>
                                <p class="member-bio mt-4 "><?php echo $bio; ?></p>
                                <div class="mt-4">
                                    <h4 class="text-[1.75rem] font-bold text-brand-secondary-dark-gray  font-heading">Qualifications</h4>
                                    <ul class="member-qualifications mt-4 space-y-2">
                                        <?php foreach ($qualifications as $qualification) :
                                            $qualification_name = $qualification['name'];
                                        ?>
                                            <li class="qualification">
                                                <div class="flex items-center">
                                                    <div class="">
                                                        <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.50004 5.33333L0.833374 8L8.83337 16L22.1667 2.66667L19.5 0L8.83337 10.6667L3.50004 5.33333Z" fill="#99BC0F" />
                                                        </svg>
                                                    </div>
                                                    <span class="ml-2 leading-tight font-bold text-base"><?php echo $qualification_name; ?></span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>