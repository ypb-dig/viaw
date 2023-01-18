<?php 
    //Template Name: Nossos Clientes
    get_header('pages');
?>


<style>
/*     ul.nav-fill .nav-item, .nav-fill>.nav-link {
        width: 100%;
    } */
	img{
		max-width:100%;
		height:auto;
	}
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        background-color: #4c859f;
        line-height: 20px;
        border-radius: 0;
    }
    ul.nav-fill .nav-item, .nav-fill>.nav-link{
        line-height: 20px;
    }
    ul.nav-tabs li{
        border-bottom:1px solid #4c859f;
    }
    ul.nav-tabs{
        border-right: 4px solid #4c859f;
        margin-top:0;
    }
/* 	.clients::before{
		content: "";
		width: 387px;
		height: 33px;
		background: url(https://www.viaw.com.br/wp-content/uploads/2022/09/border-top-client.png);
		position: absolute;
		right: 80px;
		margin-top: -32px;
	}
	.clients::after {
		content: "";
		width: 387px;
		height: 33px;
		background: url(https://www.viaw.com.br/wp-content/uploads/2022/09/border-bottom-client.png);
		position: absolute;
		left: 410px;
		margin-top: -2px;
	} */
</style>

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
            <div class="col-md-12 my-5 clients">
                <div class="row">
					<div class="col-md-6 mb-3">
						<label>Segmentos:</label><br>
						<select class="p-2" onclick="selected(this.value)">
							<option>-- Selecione um Segmento --</option>
							<option value="saude-seguro">Saúde, Seguro e Assistência Médica</option>
							<option value="bancos">Bancos e Serviços Financeiros</option>
							<option value="industria">Indústria</option>
							<option value="varejo" selected>Varejo</option>
							<option value="logistica">Logística, Segurança e Infra</option>
							<option value="tecnologia">Tecnologia</option>
							<option value="agro">Agro</option>
							<option value="construcao">Construção</option>
							<option value="energia">Energia</option>
							<option value="servicos">Serviços</option>
						</select>
					</div>
<!--                     <div class="col-md-12 d-none">
                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                          <li class="nav-item nav-pills py-0" role="presentation">
                            <a class="nav-link active" id="bancos-tab" data-toggle="tab" href="#saude-seguro" role="tab" aria-controls="saude-seguro" aria-selected="true">Saúde, Seguro e Assistência Médica</a>
                          </li>
						  <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="bancos-tab" data-toggle="tab" href="#bancos" role="tab" aria-controls="bancos" aria-selected="false">Bancos e Serviços Financeiros</a>
                          </li>
						  <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="industria-tab" data-toggle="tab" href="#industria" role="tab" aria-controls="industria" aria-selected="false">Indústria</a>
                          </li>
						
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="varejo-tab" data-toggle="tab" href="#varejo" role="tab" aria-controls="varejo" aria-selected="false">Varejo</a>
                          </li>
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="logistica-tab" data-toggle="tab" href="#logistica" role="tab" aria-controls="logistica" aria-selected="false">Logística, Segurança e Infra</a>
                          </li>
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="tecnologia-tab" data-toggle="tab" href="#tecnologia" role="tab" aria-controls="tecnologia" aria-selected="false">Tecnologia</a>
                          </li>
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="agro-tab" data-toggle="tab" href="#agro" role="tab" aria-controls="agro" aria-selected="false">Agro</a>
                          </li>
						  <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="construcao-tab" data-toggle="tab" href="#construcao" role="tab" aria-controls="construcao" aria-selected="false">Construção</a>
                          </li>
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="energia-tab" data-toggle="tab" href="#energia" role="tab" aria-controls="energia" aria-selected="false">Energia</a>
                          </li>
                          <li class="nav-item nav-pills py-0 rounded-3" role="presentation">
                            <a class="nav-link" id="servicos-tab" data-toggle="tab" href="#servicos" role="tab" aria-controls="servicos" aria-selected="false">Serviços</a>
                          </li>
                        </ul>
                    </div> -->
                    <div class="col-md-12 bg-light painel" style="border-radius:10px">
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade seguro" id="saude-seguro" role="tabpanel" aria-labelledby="saude-seguro-tab">
                              <div class="row my-3 align-items-center">
								  <div class="my-2">
									  <h3>Saúde, Seguro e Assistência Médica</h3>
								  </div>
                                <?php
                					$query1 = new WP_Query( array( 
                						'post_type' => 'cliente',
                						'category_name' => 'saude-seguro', 
                						'orderby' => 'id',
                    					'order'   => 'ASC',
                						'posts_per_page' => 50) 
                					);
                					while ( $query1->have_posts() ) {
                					$query1->the_post();
                				?>
                                    <div class="col-md-2 pb-2">
                                        <?php echo the_post_thumbnail( 'full' ); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade bancos" id="bancos" role="tabpanel" aria-labelledby="bancos-tab">
                          <div class="row mt-3 align-items-center">
							  <div class="my-2">
								  <h3>Bancos e Serviços Financeiros</h3>
							  </div>
                            <?php
            					$query2 = new WP_Query( array( 
            						'post_type' => 'cliente',
            						'category_name' => 'bancos', 
            						'orderby' => 'id',
                					'order'   => 'ASC',
            						'posts_per_page' => 50) 
            					);
            					while ( $query2->have_posts() ) {
            					$query2->the_post();
            				?>
							  <div class="col-md-2 pb-2">
								  <?php echo the_post_thumbnail( 'full' ); ?>
							  </div>
                              <?php } ?>
							</div>
                        </div>
						<div class="tab-pane fade industria" id="industria" role="tabpanel" aria-labelledby="industria-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Indústria</h3>
								 </div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'industria', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade varejo show" id="varejo" role="tabpanel" aria-labelledby="varejo-tab" style="display:block">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Varejo</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'varejo', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade logistica" id="logistica" role="tabpanel" aria-labelledby="logistica-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Logística, Segurança e Infra</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'logistica', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade tecnologia" id="tecnologia" role="tabpanel" aria-labelledby="tecnologia-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Tecnologia</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'tecnologia', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade agro" id="agro" role="tabpanel" aria-labelledby="agro-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Agro</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'agro', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade construcao" id="construcao" role="tabpanel" aria-labelledby="construcao-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Construção</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'construcao', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade energia" id="energia" role="tabpanel" aria-labelledby="energia-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Energia</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'energia', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
						<div class="tab-pane fade servicos" id="servicos" role="tabpanel" aria-labelledby="servicos-tab">
                          	<div class="row mt-3 align-items-center">
								<div class="my-2">
									  <h3>Serviços</h3>
								</div>
								<?php
									$query3 = new WP_Query( array( 
										'post_type' => 'cliente',
										'category_name' => 'servicos', 
										'orderby' => 'id',
										'order'   => 'ASC',
										'posts_per_page' => 50) 
									);
									while ( $query3->have_posts() ) {
									$query3->the_post();
								?>
                                <div class="col-md-2 pb-2">
                                    <?php echo the_post_thumbnail( 'full' ); ?>
                                </div>
                            	<?php } ?>
							</div>
                     	</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    $('#myTab a').on('click', function (event) {
      event.preventDefault()
      $(this).tab('show')
    })
</script>
		
<script>
	function selected(value){
		var seguroSaude = document.getElementsByClassName('seguro');
		var bancos = document.getElementsByClassName('bancos');
		var industria = document.getElementsByClassName('industria');
		var varejo = document.getElementsByClassName('varejo');
		var logistica = document.getElementsByClassName('logistica');
		var tecnologia = document.getElementsByClassName('tecnologia');
		var agro = document.getElementsByClassName('agro');
		var construcao = document.getElementsByClassName('construcao');
		var energia = document.getElementsByClassName('energia');
		var servicos = document.getElementsByClassName('servicos');
		
		if(value == "saude-seguro"){
    		seguroSaude[0].style.display = 'block';
			seguroSaude[0].classList.add("show");
  		}else{
  			seguroSaude[0].style.display = 'none';
  		}
		if(value == "bancos"){
    		bancos[0].style.display = 'block';
			bancos[0].classList.add("show");
  		}else{
  			bancos[0].style.display = 'none';
  		}
		if(value == "industria"){
    		industria[0].style.display = 'block';
			industria[0].classList.add("show");
  		}else{
  			industria[0].style.display = 'none';
  		}
		if(value == "varejo"){
    		varejo[0].style.display = 'block';
			varejo[0].classList.add("show");
  		}else{
  			varejo[0].style.display = 'none';
  		}
		if(value == "logistica"){
    		logistica[0].style.display = 'block';
			logistica[0].classList.add("show");
  		}else{
  			logistica[0].style.display = 'none';
  		}
		if(value == "tecnologia"){
    		tecnologia[0].style.display = 'block';
			tecnologia[0].classList.add("show");
  		}else{
  			tecnologia[0].style.display = 'none';
  		}
		if(value == "agro"){
    		agro[0].style.display = 'block';
			agro[0].classList.add("show");
  		}else{
  			agro[0].style.display = 'none';
  		}
		if(value == "construcao"){
    		construcao[0].style.display = 'block';
			construcao[0].classList.add("show");
  		}else{
  			construcao[0].style.display = 'none';
  		}
		if(value == "energia"){
    		energia[0].style.display = 'block';
			energia[0].classList.add("show");
  		}else{
  			energia[0].style.display = 'none';
  		}
		if(value == "servicos"){
    		servicos[0].style.display = 'block';
			servicos[0].classList.add("show");
  		}else{
  			servicos[0].style.display = 'none';
  		}
	}		
</script>
