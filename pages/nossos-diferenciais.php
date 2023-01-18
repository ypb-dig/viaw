<?php 
    //Template Name: Nossos diferenciais
    get_header('pages');
?>

<section>
    <div>
        <div class="container mt-5 ">
            <?php the_content(); ?>
            <!--<div class="col-12 ">-->
            <!--    <h1 class="fw-bold">Benefícios <span class="text-uppercase text-info">via<span class="text-warning">\</span><b>w</b></span></h1>-->
            <!--</div>-->
            <div class="row text-center px-2">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-experiencia-2.png" class="card-img-top icone-mascara" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class=" text-capitalize pt-1 pb-2"><strong>experiência</strong></h5>
                            <p class="card-text-21">
                                <strong>Mais de 2.000 projetos concluídos</strong> com sucesso, em empresas de diferentes perfis e segmentos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-resultados-2.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class=" text-capitalize pt-1 pb-2"><strong>Resultados comprovados</strong></h5>
                            <p class="card-text-21">Redução de custos em empresa significativas, gerando <strong>bilhões em economia</strong> para os nossos clientes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-modelo-2.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="text-capitalize pt-1 pb-2"><strong>Modelos de Negócios</strong></h5>
                            <p class="card-text-21">
                                <strong>Cobrança 100% baseada no sucesso,</strong> com alinhamento total de interesses entre o cliente e a VIA\W. 
                                Parte da economia obtida remunera o projeto.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-equipe-2.png" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class=" text-capitalize pt-1 pb-2"><strong>Equipe</strong></h5>
                            <p class="card-text-21">
                                Um time experiente de gestores e especialistas em Telecom e TI, com profundo conhecimento técnico 
                                de negociação e gestão de projetos, regulatório e jurídico.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-metodologia-2.png" class="card-img-top icone-mascara" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class=" text-capitalize pt-1 pb-2"><strong>metodologia e sistema</strong></h5>
                            <p class="card-text-21">
                                Sistema próprio da VIA\W garante <strong>rapidez na entrega</strong> dos projetos e informações para <strong>"benchmarking"</strong> de custos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class=" icone-mascara mx-auto">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-diferenciais-reconhecimento-2.png" class="card-img-top icone-mascara" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class=" text-capitalize pt-1 pb-2"><strong>Reconhecimento</strong></h5>
                            <p class="card-text-21">
                                Escolhida por <strong>10 anos consecutivos</strong> como a melhor empresa no segmento de Consultoria e Projetos pelo Anuário Telecom.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <a href="<?php echo get_site_url(); ?>/contato" class="mt-4 nav-link btn sobre bg-btn-blue text-light mx-auto" style="border: 0; padding-top: 12px; height: 60px; width: 355px; font-size: 1.7rem; font-weight: 500; max-width: 100%;">
                            ENTRE EM CONTATO
                        </a>
                    </div>
                </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>