<?php 
    //Template Name: Na Midia
    get_header('pages');
?>

<style>
	.fixed-top{
		position:relative;
	}
	.bg-blue{
		background:none;
	}
	.border-top{
		border-top:0;
	}
	.navbar {
		padding-top: 0;
	}
</style>

<section class="my-5" style="margin-top: -190px !important;padding-top: 220px;">
    
	<div class="container position-relative" style="z-index:99">
	    <div class="row">
            <?php the_content(); ?>
        </div>
		<div class="row">	
			<div class="col-lg-12">
				<div class="row" id="editorial">			
					<div class="col-12 mb-3">
						<p class="lh-1" style="font-size:54px"><strong>Editorial</strong></p>
					</div>
					
					<?php echo do_shortcode("[ajax_load_more id='5348181166' post_type='post' posts_per_page='3' category='editorial' category__not_in='3,1' scroll='false' button_label='Carregar mais'  button_loading_label='Carregando']"); ?>
			    </div>
				<div class="row mb-5" id="entrevistas">			
					<div class="col-12">
						<p class="lh-1" style="font-size:54px"><strong>Entrevistas</strong></p>
					</div>
					
					<?php echo do_shortcode("[ajax_load_more id='5348181165' post_type='post' posts_per_page='3' category='entrevistas' category__not_in='4,1' scroll='false' button_label='Carregar mais'  button_loading_label='Carregando']"); ?>		
			    </div>
				<div class="row mb-5" id="na-midia">	
					<div class="col-12">
						<p class="lh-1" style="font-size:54px"><strong>Na Mídia</strong></p>
					</div>
					<?php echo do_shortcode("[ajax_load_more id='5348181164' post_type='post' posts_per_page='3' category='posts-na-midia' category__not_in='4,3' scroll='false' button_label='Carregar mais'  button_loading_label='Carregando']"); ?>
			    </div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>