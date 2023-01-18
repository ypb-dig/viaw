<?php 
    //Template Name: Contato
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
</section>
<section>
    <!--FORMULARIO-->
    <div class="container my-3 position-relative" style="z-index:999">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold" style="font-size:54px">Quer economizar já?</h1>
                <h4>Entre em contato</h4>
            </div>
        </div>
		<?php echo do_shortcode("[contact-form-7 id='26' title='Formulário de contato']") ?>
    </div>
</section>


<?php get_footer(); ?>