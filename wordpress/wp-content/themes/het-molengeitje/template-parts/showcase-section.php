<?php

$showcase_section = get_field('showcase_section');

$title            = $showcase_section['title'] ?? '';
$description      = $showcase_section['description'] ?? '';
$button_link      = $showcase_section['button_link'] ?? null;
$button_text      = $button_link['title'] ?? '';
$button_url       = $button_link['url'] ?? '';
$button_target    = $button_link['target'] ?? '';
$bullet_point_1   = $showcase_section['bullet_point_1'] ?? '';
$bullet_point_2   = $showcase_section['bullet_point_2'] ?? '';
$bullet_point_3   = $showcase_section['bullet_point_3'] ?? '';
$bullet_point_4   = $showcase_section['bullet_point_4'] ?? '';
$background_image = $showcase_section['background_image'] ?? null;
$bg_url           = $background_image['url'] ?? '';
$bg_alt           = $background_image['alt'] ?? '';
$bullets          = array_filter([
    $bullet_point_1,
    $bullet_point_2,
    $bullet_point_3,
    $bullet_point_4,
]);

?>

<section class="bg-white px-4 py-0 sm:px-10 md:px-14 md:py-20 lg:py-4 lg:px-16 xl:py-5 xl:px-20 rounded-4xl">
    <div
        class="mx-auto flex w-full max-w-[1440px] overflow-hidden rounded-4xl bg-cover bg-center"
        <?php if ($bg_url) : ?>
            style="background-image: url('<?php echo esc_url($bg_url); ?>');"
            role="img"
            aria-label="<?php echo esc_attr($bg_alt); ?>"
        <?php endif; ?>
    >
        <div class="w-full bg-black/50 px-4 py-8 sm:px-10 sm:py-12 md:px-14 md:py-16 lg:px-20 lg:py-16 xl:px-30 xl:py-20">
            <div class="grid w-full max-w-6xl grid-cols-1 gap-8 text-left text-white xl:grid-cols-[3fr_2fr] xl:gap-24">
                <div class="flex flex-col">
                    <?php if ($title) : ?>
                        <h2 class="mt-6 mb-6 sm:mb-8 md:mb-15 text-white [&_span]:text-(--color-secondary)"><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if ($description) : ?>
                        <p class="mb-6 sm:mb-8 md:mb-10 text-white/90"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>

                    <?php if ($button_url) : ?>
                        <div class="mt-2 xl:mt-25">
                            <a
                                class="btn-primary btn-primary--light"
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
                        </div>
                    <?php endif; ?>
                </div>

                <div class="flex flex-col">
                    <?php if (!empty($bullets)) : ?>
                        <ul class="mt-2 xl:mt-46 flex w-full flex-col">
                            <?php foreach ($bullets as $bullet) : ?>
                                <li class="flex items-start gap-3">
                                    <span class="mt-0.5 inline-flex h-6 w-6 flex-none items-center justify-center text-white">
                                <li class="flex items-start gap-3">
                                    <span class="mt-0.5 inline-flex h-6 w-6 flex-none items-center justify-center text-white">
                                        <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/checkmark.svg'); ?>
                                    </span>
                                    <span class="mb-5 text-white/90 sm:text-nowrap"><?php echo esc_html($bullet); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>