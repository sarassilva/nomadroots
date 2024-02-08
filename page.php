<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/checkout.css" type="text/css" media="screen" />


<main>
    <div class="page-content">
        <section class="container">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </section>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    var cupomLink = document.querySelector('.wc-block-components-totals-coupon-link').innerHTML = 'Adicionar cupom';
});

</script>   

<?php get_footer(); ?>