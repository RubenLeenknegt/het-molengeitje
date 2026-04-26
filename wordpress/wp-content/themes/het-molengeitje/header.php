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
    <div class="mx-auto flex w-full max-w-[1440px] items-center justify-between gap-6 px-6 py-4 sm:px-10 md:px-14 lg:px-20">
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

            <a
                href="<?php echo esc_url(home_url('/contact')); ?>"
                class="hidden rounded-full px-5 py-2.5 bg-black text-sm font-semibold text-white transition-colors hover:bg-black/80 md:inline-flex"
            >
                Meld je aan
            </a>

            <button
                type="button"
                class="inline-flex items-center gap-3 rounded-full border border-black/20 px-4 py-2 text-sm font-semibold text-black transition-colors hover:border-black"
                data-dropdown-toggle
                aria-controls="site-dropdown"
                aria-expanded="false"
                aria-label="Toggle dropdown menu"
            >
                Menu
                <span class="relative block h-3 w-4" aria-hidden="true">
                    <span class="absolute left-0 top-0 block h-0.5 w-4 bg-black"></span>
                    <span class="absolute left-0 top-1.5 block h-0.5 w-4 bg-black"></span>
                    <span class="absolute left-0 top-3 block h-0.5 w-4 bg-black"></span>
                </span>
            </button>
        </div>
    </div>

    <?php get_template_part('template-parts/header', 'dropdown'); ?>
</header>