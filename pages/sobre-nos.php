<?php 
    //Template Name: Sobre Nós
    get_header('pages');
?>

<!--<section class="my-5">-->
<!--    <div class="container position-relative" style="z-index:999">-->
<!--        	<div class="col-12 mb-3">
				<p class="lh-1" style="font-size:54px"><strong>Nossos Diferenciais</strong></p>
			</div>
<!--		<div class="row">-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/experiencia.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Experiência</h5>-->
<!--					<p class="card-text-17"><strong>Mais de 2.000 projetos concluídos</strong> com sucesso, em empresas de diferentes perfis e segmentos.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/resultados.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Resultados Comprovados</h5>-->
<!--					<p class="card-text-17">Média de <strong>40% de redução de custos</strong> nos projetos, gerando mais de <strong>R$3 bilhões</strong> em economia para os nossos clientes.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/modelo-negocios.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Modelo de Negócios</h5>-->
<!--					<p class="card-text-17"><strong>Cobrança 100% baseada no sucesso,</strong> com alinhamento total de interesses entre o cliente e a VIA\W. Parte da economia obtida remunera o projeto.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/equipe.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Equipe</h5>-->
<!--					<p class="card-text-17">Um time experiente de gestores e de especialista em Telecom e TI, com profundo conhecimento técnico de negociação e gestão de projetos, regulatório e jurídico.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/metodologia.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Metodologia e Sistema</h5>-->
<!--					<p class="card-text-17">Sistema próprio da VIA\W garante <strong>rapidez na entrega</strong> dos projetos e informações para <strong>“benchmarking”</strong> de custos.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="d-flex col-lg-4 align-items-stretch">-->
<!--				<div class="card-diferenciais bg-white rounded-3 shadow p-3 mb-4 text-center">-->
<!--				  <div class="card-body">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/reconhecimento.png">-->
<!--					<h5 class="card-title pt-4 pb-2 fw-bold">Reconhecimento</h5>-->
<!--					<p class="card-text-17">Escolhida por <strong>9 anos consecutivos</strong> como a melhor empresa no segmento de Consultoria e Projetos pelo Anuário Telecom.</p>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-12 text-center">-->
<!--				<a href="<?php echo get_site_url(); ?>/contato" class="btn sobre btn-info text-white">ENTRE EM CONTATO</a>-->
<!--			</div>-->
<!--		</div>-->
<!--    </div>-->
<!--</section>-->

<!--adicionar classes  bg-onda bg-onda-contato na div de baixo-->

<section class="my-5">
    
    <div class="container">
        <p class="lh-1" style="font-size:54px"><strong>História da<span class="text-uppercase text-info"> via<span class="text-warning">\</span>w</span></strong></p>
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>

</section>

<!--bg sobre-nos-->
<section class="mt-5" style="margin-bottom:-100px">
    <div style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/bg-valores.png'); min-height:734px; background-size: cover;" class="py-5  align-items-center" >
    
    	<div class="container mt-6 mb-5">
    	    <div class="text-center pt-5">
    	        <h2 class=" sub"><strong><span class="text-warning">Nosso Propósito</span></strong></h2>
    	        <div class="text-white card-text-21">
    	            <p>Ser uma empresa admirável e a melhor consultoria do país para Encantar nossos Clientes com 
    	            <strong class="font-36" style="line-height: 40px">Confiança, Respeito e Ética</strong></p>
    	        </div>
            </div>
    	    <div class="text-center pt-5 mb-3">
    	        <h2 class="sub"><strong><span class="text-warning">Nossa Missão</span></strong></h2>
    	        <div class="card-text-21 text-white">
    	            <p>Entregar o melhor serviço de consultoria em Telecom e TI, trazendo as melhores oportunidades e eficiência para os nossos Clientes.</p>
                </div>
            </div>
    	    <div class="text-center pt-5">
    	        <div>
    	            <h2 class="sub"><strong><span class="text-warning">Nossos Valores</span></strong></h2>
	            </div>
    	    </div>
            <div class="py-3">
    	        <div class="row">
    	            <div class="col-md-4 valores">
    	                <div class="bg-light rounded-3 my-2">
        	                <div class="row p-2 align-items-center">
        	                    <div class="col-md-3 col-3">
        	                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-sobre-nos-medalha.png" alt="">
        	                    </div>
        	                    <div class="col-md-9 col-9">
        	                        <p class="m-0 card-text-21">Desenvolver uma cultura de Excelência e Meritocracia</p>
        	                    </div>
        	                </div>
    	                </div>
    	            </div>
    	            <div class="col-md-4 valores my-2">
    	                <div class="bg-light rounded-3">
        	                <div class="row p-2 align-items-center">
        	                    <div class="col-md-3 col-3">
        	                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-sobre-nos-equipe.png" alt="">
        	                    </div>
        	                    <div class="col-md-9 col-9">
        	                        <p class="m-0 card-text-21">Equipe que Inspira, Agrega e Transforma</p>
        	                    </div>
        	                </div>
    	                </div>
    	            </div>
    	            <div class="col-md-4 valores my-2">
    	                <div class="bg-light rounded-3">
        	                <div class="row p-2 align-items-center">
        	                    <div class="col-md-3 col-3">
        	                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/09/icone-sobre-nos-grafico.png" alt="">
        	                    </div>
        	                    <div class="col-md-9 col-9">
        	                        <p class="m-0 card-text-21">Resultados Extraordinários nos Impulsionam</p>
        	                    </div>
        	                </div>
        	            </div>
        	        </div>
    	        </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="my-5 socios">-->
    
<!--	<div class="container">-->
<!--		<div class="col-12 mb-3">-->
<!--			<p class="lh-1" style="font-size:54px"><strong>Sócios Fundadores</strong></p>-->
<!--		</div>-->
<!--		<div class="row">-->
<!--			<div class="col-lg-4">-->
<!--				<div class="card-diferenciais bg-white border border-1 rounded shadow mb-4 text-center ">-->
<!--				  <div class="card-body p-0">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/sergio.png" class="w-100 img-fluid">-->
<!--				  </div>-->
<!--				  <div class="card-body">-->
<!--					  <h3 class="card-title fundadores pt-2 fw-bold">Sergio Wainer</h3>-->
<!--					  <p style="color:#4c859f;font-weight:bold;font-size:22px">Co-Ceo</p>-->
<!--					  <div class="text-center">-->
<!--						  <a href="https://www.linkedin.com/in/sergio-wainer-64b56b2/" target="_blank">-->
<!--							  <img src="<?php echo get_template_directory_uri() ?>/images/sobre-nos/icone-linkedin.png" alt="">-->
<!--						  </a>-->
<!--					  </div>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4">-->
<!--				<div class="card-diferenciais bg-white border border-1 rounded shadow mb-4 text-center">-->
<!--			        <div class="card-body p-0">-->
<!--					    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/nelson.png" class="w-100 img-fluid">-->
<!--				    </div>-->
<!--				    <div class="card-body">-->
<!--    					<h3 class="card-title fundadores pt-2 fw-bold">Nelson Reis</h3>-->
<!--    					<p style="color:#4c859f;font-weight:bold;font-size:22px">Co-Ceo</p>		-->
<!--						<div class="text-center">-->
<!--							<a href="https://www.linkedin.com/in/nelson-reis-ab739112/" target="_blank">-->
<!--								<img src="<?php echo get_template_directory_uri() ?>/images/sobre-nos/icone-linkedin.png" alt="">-->
<!--							</a>-->
<!--						</div>-->
<!--				    </div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4">-->
<!--				<div class="card-diferenciais bg-white border border-1 rounded shadow mb-4 text-center  ">-->
<!--				  <div class="card-body p-0">-->
<!--					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/05/ronaldo.png" class="w-100 img-fluid">-->
<!--				  </div>-->
<!--				  <div class="card-body">-->
<!--					<h3 class="card-title fundadores pt-2 fw-bold">Ronaldo Iabrudi</h3>-->
<!--					<p style="color:#4c859f;font-weight:bold;font-size:22px">Membro do Conselho</p>		-->
<!--					<div class="text-center">-->
<!--					    <a href="https://www.linkedin.com/in/ronaldoiabrudi/" target="_blank">-->
<!--					        <img src="<?php echo get_template_directory_uri() ?>/images/sobre-nos/icone-linkedin.png" alt="">-->
<!--					    </a>-->
<!--					</div>-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->


<?php get_footer(); ?>