<!-- section slider start -->
<section id="slider-part">
 <div class="bg-overlay pattern"></div>
 <div class="container">
  <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft">
    <div class="slider-content text-center">
     <h2 class="slider-title">Stem <span>Cells</span></h2>
     <h4 class="slider-title">To <br> The Rescue</h4>
     <!--
     <div class="btn-container">
     <button class="btn btn-default featured">
     Discover
     </button>
     <button class="btn btn-default">
     Download Now
     </button>
     </div>
     -->
    </div>
   </div>
  </div><!-- row end -->
 </div>
 <!-- container end -->
</section>
<!-- section slider end -->
<!-- section highlights -->
<section id="about">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 wow fadeIn">
                <h1>Reach anyone with a smartphone </h1>
                <p>Millennials or otherwise, tech-savvy or not, all they need is a working smartphone </p>
                <hr class="colored">
            </div>
        </div>
        <div class="row text-center content-row">
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <div class="about-content">
                    <!-- <i class="fa fa-eye fa-4x"></i> -->
                    <div class="feature_icon">
                                <img src="img/no_app_icon.png" class="center-block img-responsive">
                            </div>
                    <h3>No appstore </h3>
                    <p>50% people never download any apps. Reach them via text or SMS. All the benefits of deep mobile engagement without the burden of mobile apps.
                       </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                <div class="about-content">
                    <!-- <i class="fa fa-edit fa-4x"></i> -->
                    <div class="feature_icon">
                                <img src="img/features_icon.png" class="center-block img-responsive">
                            </div>
                    <h3>Full-featured</h3>
                     Today's smartphone users expect a lot, and we are ready to impress them. Our library of features will get you started right away, just pick what you need. Don't see what you need? Just let us know.
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                <div class="about-content">
                    <!-- <i class="fa fa-tablet fa-4x"></i> -->
                    <div class="feature_icon">
                                <img src="img/back_office_icon.png" class="center-block img-responsive">
                            </div>
                    <h3>Back-office app</h3>
                    <p>Manage the features you have chosen like a pro. Our do-it-yourself iPad app is intuitive and easy to use. Be confident with the built-in preview.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                <div class="about-content">
                    <!-- <i class="fa fa-heart fa-4x"></i> -->
                    <div class="feature_icon">
                      <img src="img/iot_icon.png" class="center-block img-responsive">
                    </div>
                    <h3>Hardware &amp; IOT</h3>
                    <p>From simple printers and scanners to complex and secure IOT integration, we have you covered. Rely on us for a one-stop-shop. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section highlights end -->

<!-- section Contact start -->
<section id="contact" >
 <div class="bg-overlay pattern"></div>
 <div class="container">
  <div class="col-md-12">
   <div class=" text-center">
    <h2 class="sec-title">Contact <span>us</span></h2>
    <div class="line-btm c-white"></div>
    <p>
     Questions, comments please let us know
    </p>
   </div>
  </div>
  <!-- heading row end -->

  <div class="row" id="contactUsFormRow">
   <div class="col-md-12">
       <form class="contact-inner" id="contactUsForm" method="post" autocomplete="off">
     <div class="row">
      <div class="col-md-4">
       <div class="form-group">
        <label > Name</label>
        <input type="text" class="form-control" id="name" name="senderName" placeholder="Your Name" required>
       </div>
          <div class="validationErrorMessageClass" style="color:red"></div>
      </div>
      <div class="col-md-4">
       <div class="form-group">
        <label > Email</label>
        <input type="text" class="form-control" id="email" name="replyToEmail" placeholder="Your Email" data-fv-emailaddress='true' data-fv-emailaddress-message='please enter valid email' required >
       </div>
          <div class="validationErrorMessageClass" style="color:red"></div>
      </div>
      <div class="col-md-4">
       <div class="form-group">
        <label > Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
       </div>
          <div class="validationErrorMessageClass" style="color:red"></div>
      </div>
      <div class="col-md-12">
       <div class="form-group">
        <label > Message</label>
        <textarea id="message" name="description" cols="30" rows="8" class="form-control" placeholder="Message" required></textarea>
       </div>
          <div class="validationErrorMessageClass" style="color:red"></div>
      </div>
     </div>
     <!-- row end -->
     <div class="row">
      <div class="col-md-12 text-center">
       <button class="btn btn-default" id="contactSubmit" >
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div><!-- row end -->
  <div class="row" id="contactUsSuccessRow">
    <span class="glyphicon glyphicon-ok icon-size" aria-hidden="true"></span>
    <h1 id='contactUsSuccessDiv'></h1>
  </div>
  <div class="row" id="contactUsErrorRow">
    <!-- <span class="glyphicon glyphicon-remove icon-size" aria-hidden="true"></span> -->
    <h1 id='contactUsErrorDiv'></h1>
  </div>
 </div><!-- container end -->
</section>
<!-- section Contact end -->

<!-- Back To Top Button -->
<div id="back-top">
 <a href="#slider-part" class="page-scroll btn btn-primary" ><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- End Back To Top Button -->

<script>new WOW().init();</script>
<script>
	$.backstretch(["images/bg/bg1.jpg", "images/bg/bg2.jpg", "images/bg/bg3.jpg"], {
		fade : 950,
		duration : 10000
	});

</script>
<script>
	$('.counter').counterUp({
		delay : 100,
		time : 2000
	});
</script>
