<?php 
    //Template Name: Seja um Parceiro
    get_header('pages');
?>


<section class="bg-onda-contato my-5 parceiros">
    <div class="container">
        <div class="row">
            <div class="col-12 pb-5">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="col-12">
            <h1 class="fw-bold">Por que ser um Parceiro <span class="text-uppercase text-info">via<span class="text-warning">\</span>w</span>?</h1>
        </div>
        <div class="row text-center px-2">
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class=" icone-mascara-parceiro mx-auto">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icone-potencial.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body card-text-21">
                        <p >Elevado potencial de mercado com necessidade de redução de custos de Telecom.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class=" icone-mascara-parceiro mx-auto">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icone-expansao.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body card-text-21">
                        <p >Expansão e novas oportunidades de receita com comissionamento atrativo e recorrente.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class=" icone-mascara-parceiro mx-auto">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icone-campanhas.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body card-text-21">
                        <p >Campanhas de incentivos contínuas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class=" icone-mascara-parceiro mx-auto">
                        <img src="<?php echo get_template_directory_uri() ?>/images/icone-apoio.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body card-text-21">
                        <p >Apoio na geração de negócios.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section>
    <!--FORMULARIO-->
    <div class="container my-3 position-relative" style="z-index:999">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold" style="font-size:54px">Faça parte do Time de Parceiros</h1>
            </div>
        </div>
		<?php echo do_shortcode("[contact-form-7 id='74' title='Seja um parceiro']") ?>
    </div>
</section>


<?php get_footer(); ?>