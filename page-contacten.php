<?php get_template_part('header_en'); ?>

      <article>
            <div class="contents flex">
      <div id="page_title_area" class="title_area4" style="background-image:url(image/contact.jpg);"><h1>Contact us<br>consultation</h1></div>
				
      <div id="corporate_page" class="section">
							
          
							<div id="mail" class="section">
								<p class="mail__info">Thank you for your interest in our service.Please fill out the form required below and submit it. We will contact you from charge.</p>
	
								</p>
								<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; endif; ?>
								
        </div>
							</div>
							
							
      </div>
						</div>
        </article>




<?php get_template_part('footer_en'); ?>