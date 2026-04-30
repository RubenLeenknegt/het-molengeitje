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

<section class="bg-[color:var(--color-secondary-bg)] px-6 py-20 sm:px-10 md:px-14 lg:px-20 rounded-4xl">
    <div class="mx-auto flex w-full max-w-[1440px] flex-col gap-4 md:flex-row md:items-stretch md:gap-5">
        <div class="order-1 w-full md:order-2 md:basis-2/5">
            <?php if ($image_url) : ?>
                <div class="h-full w-full overflow-hidden" style="border-radius: 120px 24px 24px 120px;">
                    <img
                        src="<?php echo esc_url($image_url); ?>"
                        alt="<?php echo esc_attr($image_alt); ?>"
                        class="h-full w-full object-cover"
                        loading="lazy"
                    >
                </div>
            <?php endif; ?>
        </div>

        <div class="order-2 w-full md:order-1 md:basis-3/5">
            <div class="h-full pr-70 ps-25 py-20 bg-white p-12 text-black" style="border-radius: 24px 120px 120px 24px;">
                <?php if ($title) : ?>
                    <h2 class="mb-10 pr-10 text-black [&_span]:text-(--color-secondary)"><?php echo $title ?></h2>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <p class="mb-10 text-black"><?php echo esc_html($description); ?></p>
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
