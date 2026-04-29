<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="relative z-50 bg-white" data-dropdown-root data-dropdown-open="false">
    <div class="mx-auto flex w-full max-w-[1440px] items-center justify-between gap-6 px-6 py-4 sm:px-10 md:px-14 lg:px-8">
        <div class="shrink-0">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="font-heading text-2xl text-black">
                    <?php bloginfo('name'); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="ml-auto flex items-center gap-4 md:gap-6">
            <p class="hidden text-sm font-semibold text-black md:block">Wil je vrijwilliger worden bij Het Molengeitje?</p>

            <a href="/contact" class="btn-primary hidden md:inline-flex text-sm">
                Meld je aan
                <span class="btn-arrow">
                <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
              </span>
            </a>

            <button
                    type="button"
                    class="hamburger-btn ml-20"
                    data-dropdown-toggle
                    aria-controls="site-dropdown"
                    aria-expanded="false"
                    aria-label="Toggle dropdown menu"
            >
                <span class="hamburger-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>

    <?php get_template_part('template-parts/header', 'dropdown'); ?>
</header>