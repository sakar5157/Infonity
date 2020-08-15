<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index" class="logo"><img src="./assets/img/infinity.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Infonity</a>
</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about">About Us</a></li>
										<!-- <li><a href="#">Join Us</a></li> -->
										<li><a href="contact">Contacts</a></li>
									</ul>
								</div> 
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<?php 
										if ($categories) {
											foreach ($categories as $key => $category) {
									?>
									<li><a href="<?php echo('category?id='.$category->id);?>"><?php echo($category->categoryname) ?>
									</a></li>
									<?php
											}
										}
									?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
        				<h4>Follow Us</h4>
            			<ul class="social-network social-circle">
             			<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             			<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
             			<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            			</ul>       
        			</div>
					<div class="col-md-3">
							<h3 class="footer-title">Join our Newsletter</h3>
						<div class="footer-widget">
							<div class="footer-newsletter">
								<form action="process/subscriber" method="post">
									<input class="input" type="email" name="email" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<?php 
									$Followus=new followus();
									$Followsus=$Followus->getAllFollowus();
									// debugger($Followsus,true);
									if($Followsus){
										foreach ($Followsus as $key => $followus) {
								?>
								<li><a href="<?php echo($followus->url); ?>" target="_blank"><i class="fa <?php echo($followus->icon); ?>" ></i></a></li>
								<?php
										}
									}
								 ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
</html>
