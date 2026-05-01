<?php

$feature_split = get_field('inverted_feature_split');

$title         = $feature_split['title'] ?? '';
$description   = $feature_split['description'] ?? '';
$button_link   = $feature_split['button_link'] ?? null;
$button_text   = $button_link['title'] ?? '';
$button_url    = $button_link['url'] ?? '';
$button_target = $button_link['target'] ?? '';
$image         = $feature_split['image'] ?? null;
$image_url     = $image['url'] ?? '';
$image_alt     = $image['alt'] ?? '';
?>

<section class="bg-white px-6 py-16 sm:px-10 sm:py-18 md:px-14 md:py-20 lg:pt-40 lg:px-20 lg:pb-10 rounded-4xl">
    <div class="mx-auto flex w-full max-w-[1440px] items-center justify-center py-8 px-6 sm:py-12 sm:px-10 md:py-12 md:px-25 bg-[color:var(--color-secondary-bg)] rounded-4xl">
        <div class="flex w-full flex-col gap-6 lg:flex-row lg:items-center lg:gap-5">

            <div class="w-full lg:basis-9/20">
                <?php if ($image_url) : ?>
                    <div class="h-[424px] w-full overflow-hidden rounded-3xl lg:rounded-[24px_120px_120px_24px]">
                        <img
                                src="<?php echo esc_url($image_url); ?>"
                                alt="<?php echo esc_attr($image_alt); ?>"
                                class="h-full w-full object-cover"
                                loading="lazy"
                        >
                    </div>
                <?php endif; ?>
            </div>

            <div class="w-full lg:basis-11/20">
                <div class="h-full py-8 px-0 sm:py-10 md:pe-16 lg:py-10 lg:px-10 2xl:ps-48 text-black">
                    <?php if ($title) : ?>
                        <h2 class="mb-4 sm:mb-5 md:mb-8 pr-0 sm:pr-6 md:pr-0 text-black [&_span]:text-white"><?php echo $title ?></h2>
                    <?php endif; ?>

                    <?php if ($description) : ?>
                        <p class="mb-4 sm:mb-5 md:mb-8 text-black"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>

                    <?php if ($button_text && $button_url) : ?>
                        <a
                        class="btn-primary"
                        href="<?php echo esc_url($button_url); ?>"
                        <?php if ($button_target) : ?>
                            target="<?php echo esc_attr($button_target); ?>"
                        <?php endif; ?>
                        rel="<?php echo $button_target === '_blank' ? 'noopener noreferrer' : 'noopener'; ?>"
                        >
                        <span><?php echo esc_html($button_text); ?></span>
                        <span class="btn-arrow">
                                <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                            </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>