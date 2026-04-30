<?php
/**
 * Template Name: Homepage
 */

get_header();
?>

<main id="main" role="main">

<?php
get_template_part('template-parts/hero');

get_template_part('template-parts/cards');

get_template_part('template-parts/feature-split');

get_template_part('template-parts/inverted-feature-split');

get_template_part('template-parts/secondary-feature-split');

?>
</main>
<?php

get_footer();