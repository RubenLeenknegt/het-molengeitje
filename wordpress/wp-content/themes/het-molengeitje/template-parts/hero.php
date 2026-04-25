<?php
$hero             = get_field('hero');
$title            = $hero['title'] ?? '';
$background_image = $hero['background_image'] ?? null;
$image_url        = $background_image['url'] ?? '';
$image_alt        = $background_image['alt'] ?? '';
$hero_icon_url    = get_theme_file_uri('/assets/media/svg/hero-icon.svg');
?>

<section
        class="relative min-h-screen bg-gray-900"
    <?php if ($image_url) : ?>
        style="background-image: url('<?php echo esc_url($image_url); ?>'); background-size: cover; background-position: center;"
    <?php endif; ?>
>
    <?php if ($image_url) : ?>
        <div class="absolute inset-0 bg-black/50"></div>
    <?php endif; ?>

    <div class="relative z-10 min-h-screen w-full px-20 pb-20 flex items-end">
        <div class="w-full flex flex-col gap-8 md:flex-row md:items-end md:justify-between">
            <div class="max-w-xl text-left text-white">
                <?php if ($title) : ?>
                    <h1 class="font-heading text-white"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
            </div>

            <div class="shrink-0 self-end">
                <img
                    src="<?php echo esc_url($hero_icon_url); ?>"
                    alt=""
                    class="h-auto w-28 md:w-36"
                >
            </div>
        </div>
    </div>
</section>
