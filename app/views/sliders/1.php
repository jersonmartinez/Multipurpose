<section id="home-slider">
    <div id="slider" class="sl-slider-wrapper">

		<div class="sl-slider">
		
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

				<div class="bg-img bg-img-1"></div>

				<div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="animated fadeInDown"><?php echo $Info->experience; ?></h2>
                        <span class="animated fadeInDown"><?php echo $Info->getPhrase(1); ?></span>
                        <!-- <a href="#" class="btn btn-blue btn-effect">Join US</a> -->
                        <a class="button iq-mt-20 iq-mb-80" href="#" role="button">Read More</a>
                    </div>
                </div>
				
			</div>
			
			<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
			
				<div class="bg-img bg-img-2"></div>
				<div class="slide-caption">
                    <div class="caption-content">
                        <h2><?php echo $Info->estimates; ?></h2>
                        <span><?php echo $Info->getPhrase(2); ?></span>
                        <a class="button iq-mt-20 iq-mb-80" href="#" role="button">Read More</a>
                    </div>
                </div>
				
			</div>
			
			<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
				
				<div class="bg-img bg-img-3"></div>
				<div class="slide-caption">
                    <div class="caption-content">
                        <h2><?php echo $Info->services; ?></h2>
                        <span><?php echo $Info->getPhrase(3); ?></span>
                        <a class="button iq-mt-20 iq-mb-80" href="#" role="button">Read More</a>
                    </div>
                </div>

			</div>

		</div><!-- /sl-slider -->

        <!-- 
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
        </nav>
        -->
        
        <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
            <a href="javascript:;" class="sl-prev">
                <i class="fa fa-angle-left fa-3x"></i>
            </a>
            <a href="javascript:;" class="sl-next">
                <i class="fa fa-angle-right fa-3x"></i>
            </a>
        </nav>
        

		<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
		</nav>

	</div><!-- /slider-wrapper -->
</section>