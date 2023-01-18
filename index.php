<?php 
	//Template Name: Home
?>

 <?php get_header(); ?>

<style>
	.owl #clientes{
		display: flex;
    	justify-content: center;
    	align-items: center;
	}
	.owl-carousel .owl-item #clientes img {
		width: 100%;
	}
</style>

    <!--o que fazemos-->
    <section class="oque-fazemos">
        <div class="container">
            <div class="my-5 py-3">
                <h1 class="fw-bold">O que fazemos</h1>
                <h3>
                    Solução completa para o seu negócio.
                </h3>
                <div class="row text-white">
                    <div class="col-lg-6 col-md-12 d-flex align-items-stretch pt-3">
                        <div class="card rounded-10 bg-blue w-100 p-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 pb-3">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icon-negociacao.png" classs="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title text-uppercase">Renegociação de Contratos</h4>
                                        <p class="card-text lh-24 mt-4">Renegociação dos contratos de Telecom e TI para captura de ganhos expressivos no curto prazo.</p>
                                        <!--<p class="card-text lh-24 mt-4">Consultoria e adequação das entregas dos serviços de Telecom e TI, -->
                                        <!--com foco em redução de custo para captura de ganhos expressivos em curto prazo.</p>-->
                                        <a href="<?php echo get_site_url(); ?>/servicos/#renegociacao-tab" class="btn text-white text-capitalize bg-btn-blue">saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex align-items-stretch pt-3">
                        <div class="card rounded-10 bg-blue w-100 p-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 pb-3">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icon-auditoria.png" classs="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title text-uppercase">Recuperação de Valores</h4>
                                        <p class="card-text lh-24 mt-4">Conferência e contestação de contas do passado para ressarcimento de cobranças indevidas.</p>
                                        <!--<p class="card-text lh-24 mt-4">Contestação de contas anteriores para ressarcimento de cobranças indevidas.</p>-->
                                        <a href="<?php echo get_site_url(); ?>/servicos/#recuperacao-tab" class="btn text-white text-capitalize bg-btn-blue">saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-white">
                    <div class="col-lg-6 col-md-12 d-flex align-items-stretch pt-3">
                        <div class="card rounded-10 bg-blue w-100 p-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 pb-3">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icon-gestao-mobile.png" classs="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title text-uppercase">Gestão de Contas e Contratos</h4>
                                        <p class="card-text lh-24 mt-4 lh-24">Gestão automatizada das contas e contratos, de Telecom (Telecom Expense Management), TI (IT Expense Management), Cloud (Finops), Facilities, Impressão, Água, Energia, Impostos, e/ou qualquer outro custo e ativo a ser gerenciado ou auditado.</p>
                                        <!--<p class="card-text lh-24 mt-4">Acompanhamento recorrente de todas as regras e parâmetros contratados, controle de custos -->
                                        <!--e identificação de novas oportunidades.</p>-->
                                        <a href="<?php echo get_site_url(); ?>/servicos/#telecom-tab" class="btn text-white text-capitalize bg-btn-blue">saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex align-items-stretch pt-3">
                        <div class="card rounded-10 bg-blue w-100 p-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 pb-3">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icon-gestao.png" classs="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="card-title text-uppercase">Gestão de Ativos</h4>
                                        <p class="card-text lh-24 mt-4">Solução híbrida, incluindo pessoas e plataforma que proporciona toda gestão do inventário, utilização e custos dos ativos da sua empresa de forma ampla e centralizada.</p>
                                        <a href="<?php echo get_site_url(); ?>/servicos/#dispositivos-tab" class="btn text-white text-capitalize bg-btn-blue">saiba mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--porque a via w?-->
    <section class="my-5 py-3">
        <div class="container">
            <h1 class="fw-bold">Por que a <span class="text-uppercase text-info">via<span class="text-warning">\</span>w</span>?</h1>
            <div class="row align-items-center text-center pt-4">
                <div class="col-md col-12">
                    <h2 class="fw-bolder text-warning">+<span class="counter">400</span></h2>
                    <p class="card-text lh-24">Empresas em<br>nosso portfólio</p>
                </div>
                <div class="col-md col-12">
                    <h2 class="fw-bolder text-warning">+<span class="counter">2000</span></h2>
                    <p class="card-text lh-24">Contratos <br>renegociados</p>
                </div>
                <div class="col-md col-12">
                    <h2 class="fw-bolder text-warning"><span class="counter">10</span> anos</h2>
                    <p class="card-text lh-24">Eleita a melhor empresa <br>do país no segmento de<br> Consultoria e Projetos</p>
                </div>
                <div class="col-md col-12">
                    <h2 class="fw-bolder text-warning"><span class="counter">40</span>%</h2>
                    <p class="card-text lh-24">Média de <br>redução de custos</p>
                </div>
                <div class="col-md col-12">
                    <h2 class="fw-bolder text-warning">+<span class="counter">3</span> Bi</h2>
                    <p class="card-text lh-24">Economizados <br>para os nossos clientes</p>
                </div>
               
            </div>
        </div>
    </section>
    
    <!--Carrossel Clientes-->
    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/onda-azul-claro.png" class="img-fluid">
    <section class="nossos-clientes pt-5 pb-3">
        <div>
        </div>
        <div class="container">
            <div class="col-12">
                 <h1 class="text-capitalize fw-bold">Nossos Clientes</h1>
                 <h3>Conheça alguns de nossos clientes.</h3>
            </div>
            <div class="col-12 my-2">
                <div class="owl-carousel" id="clientes">
                  	<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/azul-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/amway-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/br-foods-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/camargo-correa-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/dasa-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/hypermarcas-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/itambe-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/grupo-doria-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/gol-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/localiza-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/mrv-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/nordex-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/rodobens-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/sulamerica-carrossel.png">
					</div>				
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/tam-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/tecnisa-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/vigor-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/usiminas-carrossel.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/unidas-carrossel.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/julio-simoes-jsl-carrossel.png">
					</div>		
<!-- 					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/ceagro.png">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/btg.png">
					</div>
					<div class="text-center my-3 py-3 mb-3"> 
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/bauducco.png">
					</div> -->
                </div>
            </div>
        </div>
    </section>
    
    <!--Carrossel Cases-->
    <section class="nossos-cases pb-5 pt-3 ">
        <div class="container">
            <div class="col-12">
                 <h1 class="fw-bold">Cases de Sucesso</h1>
                 <h3>O que nossos clientes dizem sobre o nosso trabalho.</h3>
            </div>
            <div class="col-12 my-2">
                <div class="owl-carousel" id="cases">
                    <!--Azul-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/azul.png" style="max-width:100%">
                        <p class="text-depo1">
                            O resultado atingiu uma redução da ordem de 38% sobres os custos praticados anteriormente."<br><br>
                            <strong>
                                Kleber Linhares<br>
                                CIO
                            </strong>
                        </p>
                    </div>  
                    
                    <!--Dasa-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/dasa.jpg" alt="Logo Dasa">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução dos custos mensais expressiva para Rede de Dados (MPLS e Internet), Telefonia Fixa e Móvel sobre 
                            os custos praticados anteriormente, além de uma recuperação de valores sobre contas já pagas."<br><br>
                            <strong>
                                Ricardo Orlando <br>
                                Diretor
                            </strong>
                        </p>
                    </div>
                    
                    <!--Grupo Doria-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/grupo_doria.jpg" alt="Logo Grupo Doria">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução de 71% sobre os custos praticados anteriormente, em linha com as nossas metas orçamentárias, 
                            e com baixo impacto operacional devido à manutenção da maioria das operadoras atuais."<br><br>
                            <strong>
                                Celia Pompeia <br>
                                Vice-Presidente
                            </strong>
                        </p>
                    </div>
                    
                    <!--Hebron-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/hebron.png" alt="Logo Hebron" style="max-width:100%">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução de 53% sobre os custos praticados anteriormente, em linha com as nossas metas orçamentárias, 
                            e com baixo impacto operacional."<br><br>
                            <strong>
                                Fernanda M. Neumann Monteiro Henrique<br>
                                Diretora Administrativa e RH
                            </strong>
                        </p>
                    </div>
                  
                    <!--Nordex-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/nordex.jpg" alt="Logo Nordex">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução de 68,14% sobre os custos praticados anteriormente, em linha com as nossas metas orçamentárias, 
                            e com baixo impacto operacional."<br><br>
                            <strong>
                                Willian Kaue M. de Freitas
                            </strong>
                        </p>
                    </div>
                  
                    <!--Rodobens-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/rodobens.jpg" alt="Logo Rodobens">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução significativa sobre os custos praticados anteriormente, em linha com as nossas metas orçamentárias 
                            e com baixo impacto operacional."<br><br>
                            <strong>
                                Herbert Escobedo Piedra <br>
                                Suprimentos
                            </strong>
                        </p>
                    </div>
                  
                    <!--Vigor-->
                    <div class="border-card my-5 mx-3 p-3 shadow bg-white">
                        <img class="px-4 pt-3" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/vigor.jpg" alt="Logo Vigor">
                        <p style="font-size:16px;font-size: 20px;line-height: 22px;padding: 25px;">
                            O resultado atingiu uma redução significativa sobre os custos praticados anteriormente, em linha com as nossas metas orçamentárias 
                            e com baixo impacto operacional."<br><br>
                            <strong>
                                Sérgio Bambace <br> Tecnologia da Informação
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="mb-5 pb-3">
        <div style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/bg-home-economizar.png'); height: 355px; margin-top: -20px" class="align-items-center">
            <div class="container text-center">
                <div class="row" style="padding-top: 100px">
                    <div class="col-lg-12">
                        <h1 class="fw-bold text-light sub">Quer economizar?</h1>
                    </div>
                    <div class="col-lg-4 col-md-6 col-10 m-auto bg-warning-f rounded-10 position-relative mt-5" style="z-index:1;">
                         <a class="nav-link text-dark fw-bolder text-uppercase fs-4 text-center" href="<?php echo get_site_url(); ?>/contato">entre em contato</a>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="my-5 py-3">
        <div class="container">
            <h1 class="fw-bold text-capitalize">na mídia</h1>
            <h3>Veja nossos materiais</h3>
            <div class="row text-center pt-3">
				<?php if ( have_posts() ) : ?>
				<?php query_posts("category_name=blog&posts_per_page=3"); ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="col-lg-4 col-md-12 mb-3 d-flex align-items-stretch">
                    <div class="shadow w-100">
                        <div id="bg-image-card" class="rounded-3" style="background-image:url(<?php echo the_field('imagem_post'); ?>)">
                            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/bg-faixaBranca.png" class="card-img-top" style="margin-top:200px" alt="...">
                            <!--<img src="<?php echo get_template_directory_uri() ?>/images/background/bg-faixaBranca.png" class="card-img-top" style="margin-top:200px" alt="...">-->
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pb-2"><?php the_title(); ?></h4>
                            <a href="<?php the_permalink() ?>" class="text-decoration-none l-azul card-link">Leia mais</a>
                        </div>
                    </div>
                </div>

				<?php endwhile; else: ?>
				<p>Não existe nenhum post.</p>
				<?php endif; ?>
				<?php wp_reset_query();?>

            </div>
            <div class="col-12 text-center position-relative" style="z-index:1;">
                <div class="mx-auto cta-blog border border-5 border-warning rounded-10 mt-5">
                    <a class="nav-link text-dark text-center fw-bold" href="<?php echo get_site_url(); ?>/na-midia">Veja todos os conteúdos</a>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--footer-->
    <?php get_footer();?>

    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 12,
                time: 800
            });
        });
    </script>
    <script>
        $('#clientes').owlCarousel({
            autoplay:true,
			autoplayTimeout:10000,
			autoplayHoverPause:false,
			margin:0,
			loop:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true,
					center:true
                },
                750:{
                    items:2,
                    nav:true
                },
                900:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    dots: true
                },
                1500:{
                    items:4,
                    nav:true,
                    dots: true
                }
            }
        })
        $('.owl-carousel').find('.owl-nav').removeClass('disabled');
        $('.owl-carousel').on('changed.owl.carousel', function(event) {
        	$(this).find('.owl-nav').removeClass('disabled');
        });
        
        $('#cases').owlCarousel({
            loop:true,
            responsiveClass:true,
            margin:0,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:2,
                    nav:true,
                    dots: true
                }
            }
        })
        $('#cases').find('.owl-nav').removeClass('disabled');
        $('#cases').on('changed.owl.carousel', function(event) {
        	$(this).find('.owl-nav').removeClass('disabled');
        });
    </script>
    
</body>
</html>