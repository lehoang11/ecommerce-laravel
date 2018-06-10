<?php $__env->startPush('css'); ?>
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/static/css/frontend/wan-carousel.css')); ?>"> 
    <!-- dt product slider -->
    <link href="<?php echo e(asset('public/static/css/frontend/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/static/css/frontend/slick-theme.css')); ?>" rel="stylesheet">
    <!-- END CSS for this page -->
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- DESKTOP -->
<div class="desktop contain d-none d-sm-block min-w1270">
	<!-- banner -->
	<div class="main-banner">
		<div class="banner-wrap">
			<div class="wan-carousel wan-carousel-1" style="width: 100%;">
			    <div class="carousel-list">
					<img src="<?php echo e(asset('public/image/site/banner/bn1.jpg')); ?>" alt="img">
					<img src="<?php echo e(asset('public/image/site/banner/bn2.jpg')); ?>" alt="img">
					<img src="<?php echo e(asset('public/image/site/banner/bn3.jpg')); ?>" alt="img">
					<img src="<?php echo e(asset('public/image/site/banner/bn2.jpg')); ?>" alt="img">
			    </div>
			</div>
		</div>
	</div>
	<!-- /banner -->
	<div class="container-fluid wrap">
		<div class="row">
			<section class="home-content col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
				<!-- slider product -->
				<div class="product-slider">
					<header class="header-title">
						<div class="title">ĐỀ XUẤT</div>
					</header>
                    <div class="content-wrap responsive">
                    <?php if($productOfer): ?>
						<?php $__currentLoopData = $productOfer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="item">
							<div class="thumb">
								<a href="<?php echo e(action('ProductController@productshow',['slug'=>$item->slug,'id'=>$item->id])); ?>">
									<img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?>">
								</a>
								<span class="sale-tag">-18 %</span>
							</div>
							<div class="info">
								<div class="name">
									<a href="<?php echo e(action('ProductController@productshow',['slug'=>$item->slug,'id'=>$item->id])); ?>"><?php echo e($item->name); ?></a>
								</div>
								<div class="price-box">
									<strong><?php echo e($item->price_sale); ?> VNĐ</strong>
									<span><?php echo e($item->price); ?> VNĐ</span>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
                  </div>
                </div>
                <!-- /slider product -->
				<!-- deal shock-->
	            <div class="deal-product wrap d-none d-sm-block">				    
			        <div class="deal-title-box">
			            <div class="title">Deal sốc trong ngày</div>
			            <ul class="title-breadcrumb">
                        <li><a href="#">DEAL HOT MỖI NGÀY</a></li>
			                                </ul>
			            <a href="#" class="see-all"><span>Xem tất cả</span>
			                <i class="see-ico"></i>
			            </a>
			        </div>
			        <div class="deal-content">
			        	<?php if($productDeal): ?>
			            <ul>
							<?php $__currentLoopData = $productDeal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                <li>
							    <div class="item">
							        <div class="thumb">
							            <a href="<?php echo e(action('ProductController@productshow',['slug'=>$item->slug,'id'=>$item->id])); ?>">
						                <img class="lazy" data-original="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->name); ?>" title="<?php echo e($item->name); ?>" src="<?php echo e(asset($item->image)); ?>" style="display: inline;">
							            </a>
				                            <span class="sale-tag">-52 %</span>
					                        <div class="bg-hover">
						                <a href="<?php echo e(action('ProductController@productshow',['slug'=>$item->slug,'id'=>$item->id])); ?>" class="btn btn-default" title="view-detail">Detail</a>
							            </div>
							        </div>
							        <div class="info">
							            <div class="name">
							                <a href="<?php echo e(action('ProductController@productshow',['slug'=>$item->slug,'id'=>$item->id])); ?>"><?php echo e($item->name); ?></a>
							            </div>
							            <div class="price-box">
							                <strong><?php echo e($item->price_sale); ?> VNĐ</strong>
							                <span><?php echo e($item->price); ?> VNĐ</span>
							            </div>
							        </div>
							    </div>
							</li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			            </ul>
			            <?php endif; ?>
			        </div>   
				</div>
				<!-- /deal shock -->
			</section>
			<aside class="home-sidebar col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
				<div class="care-product-wrap">
					<div class="care-product-item">
						<a href="#">
							<img class="img-responsive" src="<?php echo e(asset('public/image/product/2018/03/g2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="care-product-item">
						<a href="#">
							<img class="img-responsive" src="<?php echo e(asset('public/image/product/2018/03/gl1.jpg')); ?>" alt=""/>
						</a>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
<!-- /DESKTOP -->
<!-- MOBILE -->
<div class="mobile containn d-block d-sm-none d-md-none d-lg-none">
	<!-- banner -->
	<div class="main-banner-mb">
		<div class="banner-wrap">
			<img src="<?php echo e(asset('public/image/site/banner/bn2.jpg')); ?>" alt="img">
		</div>
	</div>
	<!-- /banner -->
	<!-- deal shock -->
	<div class="container-mb deal-shock-mb">
		<div class="wrap">
			<div class="header-title">
				<div class="title">Deal tốt hôm nay</div>
			</div>
			<div class="content-box">
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-box">
				<a href="#">Xem thêm</a>
			</div>
		</div>
	</div>
	<!-- /deal shock -->
		<!-- deal shock -->
	<div class="container-mb deal-shock-mb">
		<div class="wrap">
			<div class="header-title">
				<div class="title">Deal tốt hôm nay</div>
			</div>
			<div class="content-box">
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="thumb">
						<a href="#">
							<img src="<?php echo e(asset('public/image/product/2018/03/2.jpg')); ?>" alt=""/>
						</a>
					</div>
					<div class="info">
						<div class="name">
							<a href="#">giày thể thao nam han quốc, kiểu style men</a>
						</div>
						<div class="price-box">
							<strong>299.000đ</strong>
							<span>400.000đ</span>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-box">
				<a href="#">Xem thêm</a>
			</div>
		</div>
	</div>
	<!-- /deal shock -->
</div>
<!-- /MOBILE -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<!-- BEGIN Java Script for this page --> 
<script type="text/javascript" src="<?php echo e(asset('public/static/js/frontend/wan-carousel.js')); ?>"></script>
 <script>
	  $(".wan-carousel-1").WanCarousel({
	    callback: function(element, index){
	      console.log(element);
	      console.log(index);
	    }
	  });

  </script>
  <!-- dt product slider -->
      <script src="<?php echo e(asset('public/static/js/frontend/slick.js')); ?>"></script>
    <script>
    $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 760,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    </script>
<!-- END Java Script for this page -->
<?php $__env->stopPush(); ?>
<?php echo $__env->make('site.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>