<?php
$footer_bg_url      = get_theme_file_uri('/assets/media/images/Footer-photo.png');
$left_menu_exists   = has_nav_menu('footer_left');
$right_menu_exists  = has_nav_menu('footer_right');
$cta_arrow_svg      = get_template_directory() . '/assets/media/svg/cta-arrow.svg';
?>

<footer class="relative min-h-screen bg-cover bg-center text-white" style="background-image: url('<?php echo esc_url($footer_bg_url); ?>');">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 mx-auto flex min-h-screen w-full max-w-[1440px] flex-col px-6 py-16 sm:px-10 md:px-14 lg:px-20">
        <div class="flex flex-1 flex-col gap-10 lg:flex-row lg:gap-16">
            <div class="flex w-full flex-col gap-8 lg:w-1/2">
                <h1 class="font-heading text-white">Beleef de boerderijpret bij Het Molengeitje</h1>

                <div class="flex flex-col gap-8 sm:flex-row sm:gap-12">
                    <div class="flex-1">
                        <span class="text-lg font-bold">Snel navigeren</span>
                        <?php if ($left_menu_exists) : ?>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_left',
                                'container'      => false,
                                'menu_class'     => 'mt-2 flex flex-col text-white',
                                'fallback_cb'    => false,
                                'depth'          => 1,
                            ]);
                            endif;
                            ?>
                    </div>

                    <div class="flex-1">
                        <span class="text-lg font-bold">Hulp nodig?</span>
                        <?php if ($right_menu_exists) : ?>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'footer_right',
                                'container'      => false,
                                'menu_class'     => 'mt-2 flex flex-col text-white',
                                'fallback_cb'    => false,
                                'depth'          => 1,
                            ]);
                            endif;
                            ?>
                    </div>
                </div>
            </div>

            <div class="flex w-full flex-col gap-6 lg:w-1/2">
                <div class="flex flex-col rounded-3xl bg-white p-8 text-black">
                    <h3 class=text-black">Contact</h3>
                    <div class="mt-6">
                        <a class="btn-primary" href="/contact">
                            <span class="btn-arrow">
                                <?php echo file_get_contents($cta_arrow_svg); ?>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col rounded-3xl bg-black p-8 text-white">
                    <h3 class="text-white">Adresgegevens</h3>
                    <p class="mt-4 text-sm text-white">Park Vossenberg</p>
                    <p class="mt-2 text-sm text-white">Antoniusstraat 1, 5171 DA Kaatsheuvel</p>
                    <div class="mt-6">
                        <a class="btn-primary btn-primary--light" href="#">
                            <span>Route</span>
                            <span class="btn-arrow">
                                <?php echo file_get_contents($cta_arrow_svg); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-start justify-between gap-4 pt-6 text-sm text-white/50 sm:flex-row sm:items-center">
            <div class="flex items-center gap-2">
                <span class="dashicons dashicons-copyright text-base"></span>
                <span>Copyright <?php echo esc_html(date('Y')); ?> Het molengeitje</span>
            </div>

            <a class="inline-flex items-center text-white/50 hover:text-white" href="#" aria-label="Instagram">
                <span class="dashicons dashicons-instagram text-xl"></span>
            </a>
        </div>
    </div>
</footer>

