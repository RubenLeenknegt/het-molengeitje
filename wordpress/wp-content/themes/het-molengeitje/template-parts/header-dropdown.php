<?php
$primary_menu_exists = has_nav_menu('primary');
?>

<div
    id="site-dropdown"
    class="dropdown-panel absolute left-0 top-full w-full bg-white"
    data-dropdown-panel
>
    <div class="mx-auto grid w-full max-w-[1440px] gap-8 px-6 py-8 sm:px-10 md:grid-cols-[minmax(0,1fr)_320px] md:px-14 lg:px-20">
        <div class="pt-8">
            <?php if ($primary_menu_exists) : ?>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'dropdown-nav-list flex flex-col items-start gap-3',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ]);
                endif; ?>
        </div>

        <div class="hidden md:flex flex-col items-start gap-2.5">
            <div class="flex items-center justify-between gap-4 w-96 h-26 rounded-3xl border bg-secondary border-black/10 p-8 transition-colors bg-[--color-secondary]">
                <div class="leading-tight">
                    <h3 class="text-xl text-black">Ontdek</h3>
                    <h3 class="text-xl leading-2 text-white">Het molengeitje</h3>
                </div>
                <a href="/contact" class="btn-primary hidden md:inline-flex">
                    <span class="btn-arrow">
                        <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                    </span>
                </a>
            </div>

            <div class="flex items-center justify-between gap-4 w-96 h-26 rounded-3xl border border-black/10 p-8 transition-colors bg-black text-white">
                <h3 class="text-xl font-heading text-white">Routeplanner</h3>
                <a href="/contact" class="btn-primary hidden md:inline-flex">
                    <span class="btn-arrow">
                        <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/cta-arrow.svg'); ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
