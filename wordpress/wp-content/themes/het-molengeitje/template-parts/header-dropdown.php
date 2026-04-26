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

        <div class="flex flex-col gap-4">
            <a href="<?php echo esc_url(home_url('/aanmelden')); ?>" class="dropdown-cta-block">
                <p class="text-sm font-semibold uppercase tracking-[0.14em] text-black/60">CTA 01</p>
                <p class="mt-2 font-heading text-2xl text-black">Aanmelden voor dagbesteding</p>
                <p class="mt-2 text-sm text-black/70">We denken met je mee over een passende plek.</p>
            </a>

            <a href="<?php echo esc_url(home_url('/steunen')); ?>" class="dropdown-cta-block">
                <p class="text-sm font-semibold uppercase tracking-[0.14em] text-black/60">CTA 02</p>
                <p class="mt-2 font-heading text-2xl text-black">Steun Het Molengeitje</p>
                <p class="mt-2 text-sm text-black/70">Help ons groeien met een bijdrage of samenwerking.</p>
            </a>
        </div>
    </div>
</div>

