<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
			
					<?php if( !get_theme_mod('footer_social') ) activello_social_icons(); ?>
					<div class="col-sm-4 col-md-4">
						<div class="boxes_footer">
						  <p class="footer-text"><?php _e('About Us','aktivdata');?></p>
						  <hr>
						  <p class="footer-text">
						  <?php _e('Aktiv Data is specialized in '.'</br>'.' 
						  logistic solutions.We are'.'</br>'.'  developing cloud-based 
						  '.'</br>'.'software for  Forwarding,'.'</br>'.'Customs clearance and'.'</br>'.' Warehouse 
						  bookkeeping.','aktivdata');?>

						  
						 
							</p>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="boxes_footer">
						
						  <p class="footer-text"><?php _e('Contact Us','aktivdata');?></p>
						<hr>
						<p class="footer-text">
						Aktiv Data Oy Ab</br>
						Alholmsgatan 2</br>
						FI-68600 Jakobstad</br>
						Tel: +358 (0)6 7234432</br>
						
						</br>
						
						<p class="footer-text"><?php echo "Email:   sales@aktivdata.fi" ; ?></p>
						<p class="footer-text"><a href="http://localhost/wordpress/contact/"><button class="cancelbtn" type="button"><?php _e('Contact','aktivdata');?></button></a>
						</p>
						
						</div>
					</div>
						
					</div>
					
				</div>
				<div class="contact-to-top">
			<a href="http://localhost/wordpress/contact/">
			<button id="left" type="button" ><p class=""><?php _e('Contact','aktivdata');?></button>
			</a>
			
			</div>
			</br>
			
			</div>
			</div><!-- .site-info -->
			
			<!--<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer> 
		
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>