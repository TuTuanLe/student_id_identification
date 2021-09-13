

<div class="main-content-wrapper">
					<div class="breadcrumbs">
	<div class="container">
		<div class="row">
	
<nav class="breadcrumb " role="navigation" aria-label="breadcrumbs">
	<ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
	<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a href="index.php" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a>
				<meta itemprop="position" content="1">		
			</li>
		
	
	</ol>
</nav>

		</div>
	</div>
</div>

<div class="container ">
	<div class="row">
		<!--Begin Content-->
		<div class="col-lg-12 group-pd">
			<div class="row ">
				<div class="col-md-9 col-sm-12 col-xs-12 group-pd">
					
					<!-- Begin: Nội dung blog --> 
					<div class="content-blog">

						
						
						
                    <?php foreach ($list as $item) :?>	
								
						<div class="topLine">
							<div class="col-lg-5 col-md-5 col-sm-3 col-xs-12">
							<div class="blog-item-img">
									
								<a  href="tin-tuc/<?php echo $item['alias']; ?>">
									<img class="img-responsive" src="public/images/posts/<?php echo $item['img']; ?>">
								</a>
								
							</div>
							</div>
							<div class="dd col-lg-7 col-md-7 col-sm-9 col-xs-12">
								<h2><a href="tin-tuc/<?php echo $item['alias']; ?>"><?php echo $item['title']; ?></a></h2>
								<!--	<span class="first-bor"><i class="fa fa-clock-o" aria-hidden="true"></i> 01/12/2020</span>
								<span><a href="#"> Tin tức	</a></span>
							<span><em class="views">
									
									</em></span> -->
								<p>Cuối năm 2020 đến rồi, bạn đã sẵn sàng cùng iRace tút dáng đón Tết nguyên đáng chưa? Tháng này iFitness sẽ "lì xì" bạn vô vàng ưu đãi khủng. Cùng khám phá ngay nào!&nbsp;1.&nbsp;ƯU ĐÃI ĐẶC BIỆT KHI MUA SỮA TĂNG CƠ WHEYLABS&nbsp;WheyLabs 100% Isolate Protein sản phẩm chất...
									<a href=href="tin-tuc/<?php echo $item['alias']; ?>">Xem thêm <i class="fa fa-angle-double-right"></i></a>
								</p>
							</div>
						</div>
						
						
                        <?php endforeach; ?> 	
						
					
						
						

					</div>
					<div class="col-lg-12 pagination-blog">
						<div class="row">

							<!-- Begin: Phân trang blog --> 
							<div id="pagination" class="pw">
	
	<div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
		
	</div>
	<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 text-center">
		
		
		
		<span class="page-node current">1</span>
		
		
		
		<a class="page-node" href="/blogs/tin-tuc?page=2">2</a>
		
		
		
		<a class="page-node" href="/blogs/tin-tuc?page=3">3</a>
		
		
		
		<span class="page-node ">…</span>
		
		
		
		<a class="page-node" href="/blogs/tin-tuc?page=7">7</a>
		
		
	</div>
	<div class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
		
		<a class="pull-right next" href="/blogs/tin-tuc?page=2"><span>Trang sau <i class="fa fa-angle-right"></i></span></a>
		
	</div>
	
</div>













							<!-- End: Phân trang blog --> 
						</div>

					</div>
				</div>
				<div class="col-md-3  hidden-sm hidden-xs">
					<!-- Begin sidebar blog -->
					<div class="sidebar">
	
	<!-- Begin: Danh mục tin tức -->
	<div class="news-menu list-group hidden-xs">
		<span class="list-group-item active">Danh mục sản phẩm</span>
		<ul class="nav sidebar" id="menu-blog">
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  first">
				<a href="/collections/giam-can-dot-mo">
					<i class="fa fa-chevron-right"></i><span class="lbl">Giảm Cân - Đốt Mỡ</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-1" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-1">
					
					
					<li class="first">
						<a href="/collections/thuc-pham-giam-can" title="Thực phẩm giảm cân">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Thực phẩm giảm cân</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/giam-mo-cat-net" title="Giảm mỡ cắt nét">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Giảm mỡ cắt nét</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/tra-giam-can-detox" title="Trà giảm cân - Detox">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Trà giảm cân - Detox</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			<li class=" ">
				<a href="/collections/tang-can">
					<i class="fa fa-chevron-right"></i><span>Tăng cân</span>
				</a>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/tang-co">
					<i class="fa fa-chevron-right"></i><span class="lbl">Tăng cơ</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-3" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-3">
					
					
					<li class="first">
						<a href="/collections/whey-protein" title="Whey Protein">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Whey Protein</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/amino-axit" title="Amino Axit">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Amino Axit</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/casein" title="Casein">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Casein</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/protein-bar" title="Protein Bar">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Protein Bar</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/protein-danh-cho-nguoi-an-chay" title="Dành Cho Người Ăn Chay">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Dành Cho Người Ăn Chay</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/tang-suc-manh-suc-ben">
					<i class="fa fa-chevron-right"></i><span class="lbl">Tăng Sức Mạnh &amp; Sức Bền</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-4" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-4">
					
					
					<li class="first">
						<a href="/collections/pre-workout-dung-truoc-khi-tap" title="Pre - Workout (Dùng trước khi tập)">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Pre - Workout (Dùng trước khi tập)</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/creatine" title="Creatine">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Creatine</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/bcaas" title="BCAAs">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>BCAAs</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/glutamine" title="Glutamine">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Glutamine</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/multivitamin" title="Multivitamin">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Multivitamin</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/dau-ca-va-omegas" title="Dầu cá và Omegas">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Dầu cá và Omegas</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/gel-dien-giai-phuc-hoi-co" title="Gel điện giải phục hồi cơ">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Gel điện giải phục hồi cơ</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/ho-tro-suc-khoe">
					<i class="fa fa-chevron-right"></i><span class="lbl">Hỗ trợ sức khỏe</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-5" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-5">
					
					
					<li class="first">
						<a href="/collections/su-dung-hang-ngay" title="Sử dụng hàng ngày">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Sử dụng hàng ngày</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/vitamin" title="Vitamin">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Vitamin</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/xuong-khop" title="Xương khớp">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Xương khớp</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/tim-mach-huyet-ap" title="Tim mạch &amp; Huyết áp">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Tim mạch &amp; Huyết áp</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/khoang-chat" title="Khoáng chất">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Khoáng chất</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/tang-cuong-hoc-mon" title="Tăng cường hóc môn">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Tăng cường hóc môn</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/me-va-be" title="Mẹ và Bé">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Mẹ và Bé</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/ho-tro-mat-thi-luc" title="Hỗ trợ mắt &amp; Thị lực">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Hỗ trợ mắt &amp; Thị lực</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/phu-kien-the-thao">
					<i class="fa fa-chevron-right"></i><span class="lbl">Phụ kiện thể thao</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-6" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-6">
					
					
					<li class="first">
						<a href="/collections/dong-ho-thong-minh" title="Đồng hồ thông minh">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Đồng hồ thông minh</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/thiet-bi-thong-minh" title="Thiết bị thông minh">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Thiết bị thông minh</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/thanh-xa-tay-cam" title="Thanh xà &amp; Tay cầm">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Thanh xà &amp; Tay cầm</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/that-lung-day-dai" title="Thắt lưng &amp; Dây đai">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Thắt lưng &amp; Dây đai</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/tham-tap-yoga" title="Thảm tập Yoga">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Thảm tập Yoga</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/bao-tay-quan-tay" title="Bao tay &amp; Quấn tay">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Bao tay &amp; Quấn tay</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/binh-lac-shaker" title="Bình lắc shaker">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Bình lắc shaker</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/balo-vest-nuoc" title="Balo - Vest nước">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Balo - Vest nước</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/binh-nuoc-the-thao" title="Bình nước thể thao">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Bình nước thể thao</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/day-khang-luc-dan-hoi" title="Dây kháng lực đàn hồi">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Dây kháng lực đàn hồi</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			<li class=" ">
				<a href="/collections/gel-dien-giai-phuc-hoi-co">
					<i class="fa fa-chevron-right"></i><span>Gel Điện Giải Phục Hồi Cơ</span>
				</a>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/combo">
					<i class="fa fa-chevron-right"></i><span class="lbl">Combo Sản phẩm</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-8" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-8">
					
					
					<li class="first">
						<a href="/collections/combo-tang-co" title="Combo Tăng Cơ">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Combo Tăng Cơ</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/combo-tang-can" title="Combo Tăng Cân">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Combo Tăng Cân</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/combo-giam-can" title="Combo Giảm Cân">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Combo Giảm Cân</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/combo-bo-sung-nang-luong" title="Combo Bổ sung năng lượng">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Combo Bổ sung năng lượng</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<li class="item has-sub  ">
				<a href="/collections/mon-the-thao">
					<i class="fa fa-chevron-right"></i><span class="lbl">Môn thể thao</span>
					<span data-toggle="collapse" data-parent="#cssmenu" href="#sub-item-9" class="sign">
						<img src="//hstatic.net/0/0/global/design/theme-default/arrow-down.png">
					</span>
				</a>
				<ul class="nav children collapse" id="sub-item-9">
					
					
					<li class="first">
						<a href="/collections/gym-fitness" title="Gym &amp; Fitness">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Gym &amp; Fitness</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/chay-bo" title="Chạy bộ">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Chạy bộ</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/dap-xe" title="Đạp xe">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Đạp xe</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/boi-loi" title="Bơi lội">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Bơi lội</span>
						</a>
					</li>
					
					
					
					<li class="">
						<a href="/collections/triathlon" title="Triathlon">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Triathlon</span>
						</a>
					</li>
					
					
					
					<li class="last">
						<a href="/collections/yoga" title="Yoga">
							<i class="fa fa-angle-double-right" aria-hidden="true"></i><span>Yoga</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			
			
			
			
			<li class=" last">
				<a href="/pages/thuong-hieu">
					<i class="fa fa-chevron-right"></i><span>Thương hiệu</span>
				</a>
			</li>
			
			
		</ul>
		<script>
		$(document).ready(function(){
			//$('ul li:has(ul)').addClass('hassub');
			$('#menu-blog ul ul li:odd').addClass('odd');
			$('#menu-blog ul ul li:even').addClass('even');
			$('#menu-blog > ul > li > a').click(function() {
				$('#menu-blog li').removeClass('active');
				$(this).closest('li').addClass('active');
				var checkElement = $(this).nextS();
				if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
					$(this).closest('li').removeClass('active');
					checkElement.slideUp('normal');
				}
				if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
					$('#menu-blog ul ul:visible').slideUp('normal');
					checkElement.slideDown('normal');
				}
				if($(this).closest('li').find('ul').children().length == 0) {
					return true;
				} else {
					return false;
				}
			});

			$('.drop-down-1').click(function(e){		
				if ( $(this).parents('li').hasClass('has-sub') ){
					e.preventDefault();
					if($(this).hasClass('open-nav')){
						$(this).removeClass('open-nav');
						$(this).parents('li').children('ul.lve2-blog').slideUp('normal').removeClass('in');
					}else {
						$(this).addClass('open-nav');
						$(this).parents('li').children('ul.lve2-blog').slideDown('normal').addClass('in');
					}
				}else {

				}
			});

		});

		$(".news-menu  ul.navs li.active").parents('ul.children').addClass("in");
		</script>
	</div>
	<!-- End: Danh mục tin tức -->
	
	
	
	
	
	
	<!--Begin: Bài viết mới nhất-->
					
					<div style="position:relative" class="pos-best-sellers products_block bestsellers">
						<div class="block-title">
							<h4 class="title_possellers">
								KHUYẾN MÃI HOT
							</h4>
						</div>
						<div class="block_content_bestsellers">
							<div class="Topsellers block_content products-block owl-carousel owl-theme owl-loaded" style="display: block; opacity: 1;">



								
								
							<div class="owl-stage-outer"><div class="owl-stage" style="width: 506px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item active" style="width: 253px; margin-right: 0px;"><div class="item_out">





<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/vien-uong-dot-mo-giam-can-hydroxycut-hardcore-elite-180-vien" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/hydroxycut-elite-180caps_cbef1b18c15d40238c3408fc014fa55a_small.jpg" alt="Hydroxycut Hardcore Elite 180 caps">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/vien-uong-dot-mo-giam-can-hydroxycut-hardcore-elite-180-vien" title="Viên uống đốt mỡ giảm cân Hydroxycut Hardcore Elite 180 Viên">
				Viên uống đốt mỡ giảm cân Hydroxycut Hardcore Elite 180 Viên
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">750,000₫</p>
			


		</div>
	</div>
</div>







<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/sua-tang-can-elite-labs-usa-mass-muscle-gainer-4-62kg" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/elite-labs-mass-muscle-gainer-cookies-and-cream-10lbs_small.jpg" alt="Mass Muscle Gainer Cookie and Cream 4.62kg">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/sua-tang-can-elite-labs-usa-mass-muscle-gainer-4-62kg" title="Sữa Tăng Cân Mass Muscle Gainer 4.62kg 5 mùi">
				Sữa Tăng Cân Mass Muscle Gainer 4.62kg 5 mùi
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">1,900,000₫</p>
			


		</div>
	</div>
</div>







<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/sua-tang-can-extreme-massive-mass-gainer-11-34kg" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/extreme-massive-mass-gainer-choco-25lbs_small.jpg" alt="Extreme Massive Mass Gainer Chocolate 25lbs">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/sua-tang-can-extreme-massive-mass-gainer-11-34kg" title="Sữa Tăng Cân Extreme Massive Mass Gainer 11.34kg 4 mùi">
				Sữa Tăng Cân Extreme Massive Mass Gainer 11.34kg 4 mùi
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">3,000,000₫</p>
			


		</div>
	</div>
</div>
								</div></div><div class="owl-item" style="width: 253px; margin-right: 0px;"><div class="item_out">







<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/sua-tang-can-applied-nutrition-critical-mass-6kg" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/critical-mass-6kg-white-choc-rasp_1cce45ad779d4c298e408861a7a1a976_small.jpg" alt=" Sữa tăng cân Applied Nutrition Critical Mass 6kg - 3 mùi ">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/sua-tang-can-applied-nutrition-critical-mass-6kg" title="Sữa tăng cân Applied Nutrition Critical Mass 6kg - 3 mùi">
				Sữa tăng cân Applied Nutrition Critical Mass 6kg - 3 mùi
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">1,980,000₫</p>
			


		</div>
	</div>
</div>





<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/sua-tang-co-giam-mo-applied-nutrition-iso-xp-2kg" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/iso-xp-tub-2kg-cafe-latte_4082bbd3a705478191a0e69da78c07b9_small.jpg" alt="Applied Nutrition ISO-XP 2kg cafe latte">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/sua-tang-co-giam-mo-applied-nutrition-iso-xp-2kg" title="Sữa Tăng Cơ Giảm Mỡ Applied Nutrition ISO-XP 2kg">
				Sữa Tăng Cơ Giảm Mỡ Applied Nutrition ISO-XP 2kg
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">1,710,000₫</p>
			


		</div>
	</div>
</div>









<div class="seller-item item">
	<div class="sellers-img">
		<a href="/products/sua-tang-can-tang-co-muscletech-mass-tech-extreme-2000-10kg" title="" class="products-block-image content_img clearfix">
			<img class="replace-2x img-responsive" src="//product.hstatic.net/1000185761/product/mass-tech-extreme-2000-22lbs-triple-chocolate_small.jpg" alt="MuscleTech Mass-Tech Extreme 2000 10kg">
		</a>
	</div>
	<div class="product-content">
		<h5 class="bs-title">
			<a href="/products/sua-tang-can-tang-co-muscletech-mass-tech-extreme-2000-10kg" title="Sữa tăng cân tăng cơ MuscleTech MassTech Extreme 2000 22lbs (10kg)">
				Sữa tăng cân tăng cơ MuscleTech MassTech Extreme 2000 22lbs (10kg)
			</a>
		</h5>
		<div class="price-box-side">
			<p class="price">2,200,000₫</p>
			<p class="old-price">2,700,000₫</p>


		</div>
	</div>
</div>
								</div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" ><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" ><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
						</div>
					</div>
					
					<div class="list-banner-1 banner-left hidden-xs hidden-sm"><a href="https://ifitness.vn/products/sua-tang-co-nitro-tech-performance-series-4-54kg?utm_source=iFitness&amp;utm_medium=Banner&amp;utm_campaign=Product-Right&amp;utm_content=NitroTech-4-54kg"><img alt="banner left ifitness 2" src="//theme.hstatic.net/1000185761/1000461179/14/left_image_ad.jpg?v=1557"></a></div>
					
					<div class="list-banner-1 banner-left hidden-xs hidden-sm"><a href="https://ifitness.vn/products/sua-tang-can-elite-labs-usa-mass-muscle-gainer-4-62kg?utm_source=iFitness&amp;utm_medium=Banner&amp;utm_campaign=Product-Right&amp;utm_content=MassMusclegGainer"><img alt="banner left ifitness" src="//theme.hstatic.net/1000185761/1000461179/14/left_image_ad_2.jpg?v=1557"></a></div>
			

</div>
					<!-- End sidebar blog -->
				</div>
			</div>
		</div>
		<!--End Content-->
	</div>
</div>


				</div>