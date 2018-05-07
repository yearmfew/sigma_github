<?php include 'header_inner.php'; ?>
		
		<!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs sec-color">
            <img src="images/banner/contact.jpg" alt="Breadcrubs" />
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="page-title">İletişim</h1>
                            <ul>
                                <li>
                                    <a class="active" href="index.php">Anasayfa</a>
                                </li>
                                <li>İletişim</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs End -->
		
		<!-- Contact Start Here -->
		<div class="contact-page3 contact-page sec-spacer">
			<div class="container">
				<div class="row control-inner">
					<div class="col-sm-4">
						<div id="address" class="info-details">
							<i class="fa fa-map-marker" aria-hidden="true"></i> 
							<div class="info-text">
								RS Construction,<br>
								New York Estate Executor.
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div id="phone" class="info-details">
							<i class="fa fa-phone" aria-hidden="true"></i> 
							<div class="info-text">
								Phone: <a href="tel:(+088)589-8745">(+088)589-8745</a><br>
								Fax: <a href="tel:+3301-341-0476">+3301-341-0476</a>
							</div>  
						</div>
					</div>
					<div class="col-sm-4">
						<div id="email" class="info-details">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<div class="info-text">
								Email: <a href="mailto:support@rstheme.com">support@rstheme.com</a><br>
								Web: <a href="#">www.keenitsolution.com</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row">
							<div class="col-md-6 col-sm-12 mb-margin">
								<div class="cmap2" id="googleMap"></div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="contact-form-area">
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <fieldset>
                                            <div class="row">                                      
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>First Name*</label>
                                                        <input type="text" id="fname" name="fname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Last Name*</label>
                                                        <input type="text" id="lname" name="lname" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="email" id="email" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <input type="text" id="subject" name="subject" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"> 
                                                <div class="col-md-12 col-sm-12 col-xs-12">    
                                                    <div class="form-group">
                                                        <label>Message *</label>
                                                        <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">         
                                                    <div class="form-group mb-0">
                                                        <button class="btn-send" type="submit">send message</button>
                                                    </div>
                                                </div>
                                            </div>    
                                        </fieldset>
                                    </form>
                                </div>          
							</div>
						</div>                 
					</div>
				</div>
			</div>
		</div>

		<!-- contact End  -->     
       
      <?php include("footer.php"); ?>