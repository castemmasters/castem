<header id="header" role="banner" >
  <nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
   <div class="container">
    <div class="row">
     <!-- Logo start -->
     <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
         </button>
         <div class="navbar-brand">
          <a href="/" class="page-scroll">
           <img class="img-responsive" src="images/logo1.png" alt="logo">
          </a> 
         </div>                   
     </div><!--/ Logo end -->
     <div class="collapse navbar-collapse clearfix navMenu" role="navigation">
      <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="page-scroll" href=<?php echoActiveClassIfRequestMatches("index","slider-part") ?>  >Home</a></li>
                <li><a class="page-scroll" href=<?php echoActiveClassIfRequestMatches("index","highlights") ?>>Highlights</a></li> 
                <li><a class="page-scroll" href=<?php echoActiveClassIfRequestMatches("index","scenario") ?>>Sample scenario</a></li>       
                <li><a target="_blank" href="docs/InvestorSummary.pdf" >Investors</a></li>
                <li><a class="page-scroll" href=<?php echoActiveClassIfRequestMatches("index","contact") ?>>Contact</a></li>
            </ul>
          </div><!--/ Navigation end -->
    </div><!--/ Row end -->
   </div><!--/ Container end -->
  </nav>
 </header><!--/ Header end -->
    <!-- END MAIN NAV -->
