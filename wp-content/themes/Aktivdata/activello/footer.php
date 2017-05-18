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
					<div class="col-sm-2 col-md-4">
						<div class="boxes_footer">
						  <p class="footer-text"><?php echo "ABOUT US" ; ?></p>
						  <hr>
						  <p class="footer-text">
						Aktiv Data Oy Ab</br>
						Alholmsgatan 2</br>
						FI-68600 Jakobstad</br>
						Tel: +358 (0)6 7234432</br>
						Fax: +358 (0)6 7248432</br>
						sales@aktivdata.fi</br>
						  
						 
							</p>
						</div>
					</div>
					<div class="col-sm-2 col-md-4">
						<div class="boxes_footer">
						  <p class="footer-text"><?php echo "Kontact"; ?></p>
						<hr>
						<p class="footer-text"><?php echo "Tel no:XXX-XXX-XXXXX" ; ?></p>
						<p class="footer-text"><?php echo "Email:something@something.com" ; ?></p>
						<BR/>
						<BR/>
						<BR/>
						<p class="footer-text"><a href="http://localhost/wordpress/contact/"><button class="cancelbtn" type="button">Contact US</button></a>
						</p>
						</div>
					</div>
					<div class="col-sm-2 col-md-4">
						<div class="boxes_footer">
						  <p class="footer-text"><?php echo "News Letter"; ?></p>
						<hr>
						<p class="footer-text"><?php echo "Prenumerera" ; ?></p>
						
						<p class="footer-text">
						
						<div class="imgcontainer_table">
						<form class="table_form" action="http://localhost/wordpress/action.php" method="POST" name="subscription_form">
						<table cellspacing="0" cellpadding="0" class="table_subscription">
						<tr>
						<td><label class="footer-text"><b>First Name</b></label></td>
						<td><label class="footer-text"><b>Last Name</b></label></td>
						</tr>
						<tr>
						<td><input name="firt_name" required="" type="text" placeholder="First name" /></td>
						<td><input name="last_name" required="" type="text" placeholder="Last name" /></td>
						</tr>
						<tr>
						<td><label class="footer-text"><b>Organisation</b></label></td>
						<td><label class="footer-text"><b>Email</b></label></td>
						</tr>
						</tr>
						<tr>
						<td><input name="organisation" required="" type="text" placeholder="Organisation" /></td>
						<td><input name="email" required="" type="text" placeholder="email" /></td>
						</tr>
						<tr>
						<td><button type="submit">Subscribe</button></td>
						</tr>
						</table>
						</div>
						</form>
						
						</p>
					
						</div>
					</div>
					
				</div>
				<div class="contact-to-top">
			<a href="http://localhost/wordpress/contact/">
			<button id="left" type="button" ><p class="">KONTACT</button>
			</a>
			</div>
			</div>
			</div><!-- .site-info -->
			
			<!--<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer> 
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>