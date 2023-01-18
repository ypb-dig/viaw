<?php 
    //Template Name: Trabalhe conosco
    get_header('pages');
?>

<section class="bg-onda-contato my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <!--FORMULARIO-->
    <div class="container my-3 position-relative" style="z-index:999">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="fw-bold">Faça parte do nosso Banco de Talentos</h1>
                <h4>Envie seu Currículo para nós</h4>
            </div>
        </div>
		<?php echo do_shortcode("[contact-form-7 id='64' title='Trabalhe conosco']") ?>
    </div>
</section>


<?php get_footer(); ?>