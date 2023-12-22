<?php get_header(); ?>

<main>
    <div class="page-content">
        <section class="container">
            <h1><?php the_title(); ?>
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