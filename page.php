<?php get_header(); ?>

<main>
    <div class="page-content">
        <section class="container">
            <?php the_content(); ?>
        </section>
    </div>
</main>

<script>
    //cupom
    document.querySelector('.wc-block-components-totals-coupon a').innerText = 'Adicionar cupom';
</script>   

<?php get_footer(); ?>