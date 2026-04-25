<?php
$hero             = get_field('hero');
$title            = $hero['title'] ?? '';
$background_image = $hero['background_image'] ?? null;
$image_url        = $background_image['url'] ?? '';
$image_alt        = $background_image['alt'] ?? '';
$hero_icon_url    = get_theme_file_uri('/assets/media/svg/hero-icon.svg');
?>

<section
        class="relative min-h-[90svh] md:min-h-[90dvh] overflow-hidden bg-cover bg-right lg:bg-center bg-white rounded-b-[42px]"
    <?php if ($image_url) : ?>
        style="background-image: url('<?php echo esc_url($image_url); ?>');"
    <?php endif; ?>
>
    <?php if ($image_url) : ?>
        <div class="absolute inset-0 rounded-b-[42px] bg-black/30"></div>
    <?php endif; ?>

    <div class="relative z-10 min-h-[90svh] md:min-h-[90dvh] w-full px-6 pb-10 sm:px-10 sm:pb-14 md:px-14 md:pb-16 lg:px-20 lg:pb-20 flex items-end">
        <div class="w-full flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
            <div class="max-w-xl text-left text-white">
                <?php if ($title) : ?>
                    <h1 class="font-heading text-white text-5xl md:text-6xl lg:text-h1"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
            </div>

            <div class="hidden md:block shrink-0 self-end">
                <img
                    src="<?php echo esc_url($hero_icon_url); ?>"
                    alt=""
                    class="h-auto w-28 lg:w-36"
                >
            </div>
        </div>
    </div>
</section>
