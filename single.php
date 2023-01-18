<?php
	get_header('pages');
    // get category slug in wordpress
    if ( is_single() ) {
        $cats =  get_the_category();
        $cat = $cats[0];
    } else {
        $cat = get_category( get_query_var( 'cat' ) );
    }
    $cat_slug = $cat->slug;
?>



<section class="my-5" style="margin-top: -190px !important;padding-top: 220px;">
	<div class="container position-relative" style="z-index:99">
		<div class="row">
			<div class="col-lg-8">
			    <div class="row">
			        <div class="col-md-12">
			            <div class="mh-612 bg-white mb-4">
        					<div class="card-diferenciais mh-612 bg-white mb-4">
            				  <div class="card-body">
								<h2 class="pb-3"><?php the_title(); ?></h2>
            					<?php the_content(); ?>
            				  </div>
            				</div>
        				</div>
					</div>					
			    </div>
			</div>
			<div class="col-lg-4">
				<div class="card-diferenciais border border-1 rounded shadow mh-612 bg-white mb-4 p-3">
					<div class="card-body">
						<h3 class="card-title fundadores py-2 fw-bold">Posts Recentes</h3>
						<div class="row">
							
							<?php if ( have_posts() ) : ?>
							<?php query_posts("category_name=".$cat_slug."&posts_per_page=4"); ?>
							<?php while ( have_posts() ) : the_post(); ?>
						
							<div class="col-lg-3 p-0">			
								<img class="img-fluid" src="<?php echo the_field('imagem_post') ?>"> 
							</div>
							<div class="col-lg-9">
								<a class="nav-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a><br>
							</div>
							
							<hr class="my-3" style="border:1px solid #d1cfcf">
							
							<?php endwhile; else: ?>
							<p>Não existe nenhum post.</p>
							<?php endif; ?>
							<?php wp_reset_query();?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>