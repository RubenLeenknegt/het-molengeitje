<?php

$cards = get_field('cards');

if (!$cards) {
    return;
}

$left_title             = $cards['left_card_title'] ?? '';
$left_description       = $cards['left_card_description'] ?? '';
$left_button_link       = $cards['left_card_button_link'] ?? null;
$left_button_text       = $left_button_link['title'] ?? '';
$left_button_url        = $left_button_link['url'] ?? '';
$left_button_target     = $left_button_link['target'] ?? '';
$middle_title           = $cards['middle_card_title'] ?? '';
$middle_description     = $cards['middle_card_description'] ?? '';
$middle_button_link     = $cards['middle_card_button_link'] ?? null;
$middle_button_text     = $middle_button_link['title'] ?? '';
$middle_button_url      = $middle_button_link['url'] ?? '';
$middle_button_target   = $middle_button_link['target'] ?? '';
$right_button_link      = $cards['right_card_button_link'] ?? null;
$right_button_text      = $right_button_link['title'] ?? '';
$right_button_url       = $right_button_link['url'] ?? '';
$right_button_target    = $right_button_link['target'] ?? '';
$right_bg_image         = $cards['right_card_background_image'] ?? null;
$right_bg_url           = $right_bg_image['url'] ?? '';
?>

<section class="px-6 py-20 sm:px-10 md:px-14 lg:px-20 lg:py-30">
    <div class="grid w-full grid-cols-1 justify-center justify-items-center gap-6 md:grid-cols-2 xl:grid-cols-3 md:gap-8">
        <article class="flex min-h-96 w-full max-w-[26rem] flex-col rounded-3xl bg-[color:var(--color-secondary)] p-8 text-black">
            <?php if ($left_title) : ?>
                <h3 class="text-h3 text-black [&_span]:text-white"><?php echo $left_title ?></h3>
            <?php endif; ?>

            <?php if ($left_description) : ?>
                <p class="mt-4 text-black"><?php echo esc_html($left_description); ?></p>
            <?php endif; ?>

            <?php if ($left_button_text && $left_button_url) : ?>
                <div class="mt-auto pt-8">
                    <a
                        class="btn-primary"
                        href="<?php echo esc_url($left_button_url); ?>"
                        <?php if ($left_button_target) : ?>
                            target="<?php echo esc_attr($left_button_target); ?>"
                        <?php endif; ?>
                        rel="<?php echo $left_button_target === '_blank' ? 'noopener noreferrer' : 'noopener'; ?>"
                    >
                        <span><?php echo esc_html($left_button_text); ?></span>
                        <span class="btn-arrow">
                            <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </article>

        <article class="flex min-h-96 w-full max-w-[26rem] flex-col rounded-3xl bg-black p-8 text-white">
            <?php if ($middle_title) : ?>
                <h3 class="text-h3 text-white"><?php echo esc_html($middle_title); ?></h3>
            <?php endif; ?>

            <?php if ($middle_description) : ?>
                <p class="mt-4 text-white"><?php echo esc_html($middle_description); ?></p>
            <?php endif; ?>

            <?php if ($middle_button_text && $middle_button_url) : ?>
                <div class="mt-auto pt-8">
                    <a
                        class="btn-primary btn-primary--light"
                        href="<?php echo esc_url($middle_button_url); ?>"
                        <?php if ($middle_button_target) : ?>
                            target="<?php echo esc_attr($middle_button_target); ?>"
                        <?php endif; ?>
                        rel="<?php echo $middle_button_target === '_blank' ? 'noopener noreferrer' : 'noopener'; ?>"
                    >
                        <span><?php echo esc_html($middle_button_text); ?></span>
                        <span class="btn-arrow">
                            <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </article>

        <article
            class="flex min-h-96 w-full max-w-[26rem] flex-col rounded-3xl bg-black bg-cover bg-center p-8 text-white md:col-span-2 xl:col-span-1"
            <?php if ($right_bg_url) : ?>
                style="background-image: url('<?php echo esc_url($right_bg_url); ?>');"
            <?php endif; ?>
        >
            <?php if ($right_button_text && $right_button_url) : ?>
                <div class="mt-auto pt-8">
                    <a
                        class="btn-primary btn-primary--light"
                        href="<?php echo esc_url($right_button_url); ?>"
                        <?php if ($right_button_target) : ?>
                            target="<?php echo esc_attr($right_button_target); ?>"
                        <?php endif; ?>
                        rel="<?php echo $right_button_target === '_blank' ? 'noopener noreferrer' : 'noopener'; ?>"
                    >
                        <span><?php echo esc_html($right_button_text); ?></span>
                        <span class="btn-arrow">
                            <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                        </span>
                    </a>
                </div>
            <?php endif; ?>
        </article>
    </div>
</section>
