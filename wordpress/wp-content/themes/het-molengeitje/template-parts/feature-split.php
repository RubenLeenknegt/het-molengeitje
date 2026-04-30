<?php

$feature_split = get_field('feature_split');

$title         = $feature_split['title'] ?? '';
$description   = $feature_split['description'] ?? '';
$button_text   = $feature_split['button_text'] ?? '';
$button_link   = $feature_split['button_link'] ?? null;
$button_url    = $button_link['url'] ?? '';
$button_target = $button_link['target'] ?? '';
$image         = $feature_split['image'] ?? null;
$image_url     = $image['url'] ?? '';
$image_alt     = $image['alt'] ?? '';
?>

<section class="bg-[color:var(--color-secondary-bg)] px-6 py-16 sm:px-10 sm:py-18 md:px-14 md:py-20 lg:px-20 lg:py-20 rounded-4xl">
    <div class="mx-auto flex w-full max-w-[1440px] flex-col gap-6 lg:flex-row lg:items-stretch lg:gap-5">
        <div class="order-1 w-full lg:order-2 lg:basis-5/12">
            <?php if ($image_url) : ?>
                <div class="h-full w-full overflow-hidden rounded-3xl md:rounded-3xl lg:rounded-[120px_24px_24px_120px]">
                    <img
                        src="<?php echo esc_url($image_url); ?>"
                        alt="<?php echo esc_attr($image_alt); ?>"
                        class="h-full w-full object-cover"
                        loading="lazy"
                    >
                </div>
            <?php endif; ?>
        </div>

        <div class="order-2 w-full lg:order-1 lg:basis-7/12">
            <div class="h-full bg-white p-8 sm:p-10 md:py-14 md:ps-14 md:pe-20 lg:py-20 lg:px-25 2xl:pr-70 text-black rounded-3xl md:rounded-3xl lg:rounded-[24px_120px_120px_24px]">
                <?php if ($title) : ?>
                    <h2 class="mb-6 sm:mb-8 md:mb-10 pr-0 sm:pr-6 md:pr-4 text-black [&_span]:text-(--color-secondary)"><?php echo $title ?></h2>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <p class="mb-6 sm:mb-8 md:mb-10 text-black"><?php echo esc_html($description); ?></p>
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
</section>
