<?php
$faq_group = get_field('frequently_asked_questions');

if (!$faq_group) {
    return;
}

$title         = $faq_group['title'] ?? '';
$subtitle      = $faq_group['subtitle'] ?? '';
$button        = $faq_group['button'] ?? null;
$button_text   = $button['title'] ?? '';
$button_url    = $button['url'] ?? '';
$button_target = $button['target'] ?? '';

$questions = [
    [
        'question' => $faq_group['question_title_1'] ?? '',
        'answer'   => $faq_group['question_answer__1'] ?? '',
    ],
    [
        'question' => $faq_group['question_title_2'] ?? '',
        'answer'   => $faq_group['question_answer__2'] ?? '',
    ],
    [
        'question' => $faq_group['question_title_3'] ?? '',
        'answer'   => $faq_group['question_answer__3'] ?? '',
    ],
    [
        'question' => $faq_group['question_title_4'] ?? '',
        'answer'   => $faq_group['question_answer__4'] ?? '',
    ],
    [
        'question' => $faq_group['question_title_5'] ?? '',
        'answer'   => $faq_group['question_answer__5'] ?? '',
    ],
    [
        'question' => $faq_group['question_title_6'] ?? '',
        'answer'   => $faq_group['question_answer__6'] ?? '',
    ],
];

?>

<section class="bg-[color:var(--color-tertiary-bg)] rounded-4xl px-6 py-16 sm:px-10 sm:py-18 md:px-14 md:py-20 lg:px-20 lg:py-20">
    <div class="mx-auto w-full max-w-[1440px]">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-[2fr_3fr] lg:items-stretch">
            <div class="w-full">
                <div class="flex min-h-96 w-full flex-col rounded-3xl bg-black p-8 text-white sm:p-15">
                    <?php if ($title) : ?>
                        <h2 class="text-3xl font-heading text-white"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <div class="mt-56">
                        <?php if ($subtitle) : ?>
                            <h3 class="text-white text-lg"><?php echo esc_html($subtitle); ?></h3>
                        <?php endif; ?>

                        <?php if ($button_url) : ?>
                            <div class="mt-6">
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
                </div>
            </div>

            <div class="w-full">
                <div class="h-full w-full rounded-3xl bg-white p-6 sm:p-8 md:p-15">
                    <div class="flex flex-col">
                        <?php foreach ($questions as $item) : ?>
                            <details class="faq-item border-b border-black/10 py-5 last:border-b-0">
                                <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                                    <span class="text-lg font-heading text-black">
                                        <?php echo esc_html($item['question']); ?>
                                    </span>
                                    <span class="flex items-center gap-2">
                                        <span class="faq-icon faq-icon-plus">
                                            <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/add.svg'); ?>
                                        </span>
                                        <span class="faq-icon faq-icon-minus">
                                            <?php echo file_get_contents(get_template_directory() . '/assets/media/svg/remove.svg'); ?>
                                        </span>
                                    </span>
                                </summary>
                                <div class="py-6 pe-24">
                                    <p class="text-sm text-black/80">
                                        <?php echo esc_html($item['answer']); ?>
                                    </p>
                                </div>
                            </details>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
