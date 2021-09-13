

<section id="product-detail">
	<div class="container">
		<div class="products-wrap">
			<form action="" method="post" id="ProductDetailsForm">
				<?php if($row):?>
					<div class="breadcrumbs">
						<ul>
							<li class="home">
								<a href="trang-chu" title="Go to Home Page">Trang chủ</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="category3">
								<a href="<?php echo base_url() ?>/san-pham/<?php $link=$this->Mcategory->category_link($row['catid']); echo $link; ?>" title=""><?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li class="product"><?php echo $row['name'] ?></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 listimg-desc-product">
						<?php $this->load->view('frontend/modules/jcarousel');?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="product-view-content">
							<div class="product-view-name">
								<h1><?php echo $row['name'] ?></h1>
							</div>
							<div class="product-view-price">
									

							<div class="product-vendor hidden-xs hidden-sm nutrex" itemprop="brand" itemscope="" itemtype="http://schema.org/Brand"><b>
									<span class="chinhhang">Tình trạng: <?php if($row['number'] - $row['number_buy']==0 || $row['status'] == 0) echo 'Hết hàng'; else echo 'Còn hàng' ?></span><a href="/collections/nutrex">
									<span style="background: #383838; color: #fff;font-size: 14px;margin-bottom: 3px;padding: 4px 10px;" itemprop="name">Thương hiệu: <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></span>
								</a></b>
							</div>
					





									<div class="product-price col-lg-12 col-md-12 col-sm-12 col-xs-12" id="price-preview"><span >Giá bán:</span><span><?php echo number_format($row['price_sale'])?>₫</span></div>

								<?php if($row['price_sale']>0 && $row['sale']>0): ?>
									<div class="product-price col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<span class="price"><?php echo $row['price'] ?>₫</span>
										<span class="sale-flag">-<?php echo $row['sale'] ?>%</span>
									</div>
								<?php endif; ?>
							</div>
								

							
							<div class="">
								<h4>Mô tả:</h4>
								<p><?php echo $row['sortDesc'] ?></p>
							</div>
							<div class="actions-qty">
								<?php
								if($row['number'] - $row['number_buy']==0 || $row['status'] == 0){
									echo'<h2 style="color:red;">Ngừng kinh doanh</h2>';
								} else{
									echo '<div class="actions-qty__button">
									<button class="btn-detail btn-color-add btn-min-width btn-mgt" title="Mua ngay" type="button" aria-label="Mua ngay" class="fa fa-shopping-cart" onclick="onAddCart('.$row['id'].')"> Mua ngay</button>
								</div>';
								}
								?>
							</div>
								<br>
							<div class="thongtinkhuyenmai">
									<h2>KHUYẾN MÃI ĐẶC BIỆT</h2>
									<div class="content rte rte-summary">
										<!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> -->
										💖  <a style="color:#ff0000" href="">ƯU ĐÃI HOT THÁNG 12</a><br>
										📌 <a style="color:#ff0000" href=""> Ưu đãi dành cho khách hàng VIP</a><br>
										🎉 <a style="color:#ff0000" href="">Ưu đãi mua combo - Mang đến hiệu quả sử dụng cao hơn 50%</a><br>
										<em>*** Các chương trình khuyến mãi không áp dụng cùng nhau.</em>
									</div>
								</div>
							
							<div style="margin-top: 20px;">
								<b>Tình trạng</b>
								<br>
								<span>Nguyên hộp, sách hướng dẫn</span>
							</div>
							<div style="margin-top: 20px;">
								<b>Bảo hành</b>
								<br>
								<span>Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi nhà sản xuất.</span><a href="#" style="color:red"> (Chi tiết)</a>
							</div>
						</div>
					</div>
					<div class="product-v-desc col-md-10 col-12 col-xs-12">
						<?php echo $row['detail']?>
					</div>
					<div class="product-comment product-v-desc">
						<h3>Bình luận</h3>
						<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">

							<div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>" data-numposts="5"></div>
						</div>
					</div>
						<?php endif; ?>	
						</form>

					</div>
				</div>
			</section>


			

			<script>

				function onAddCart(id){
					var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
					jQuery.ajax({
						url: strurl,
						type: 'POST',
						dataType: 'json',
						data: {id: id},
						success: function(data) {
							var temp= 0;
							$.each(data, function(key,item){
									temp++;
							});
							$('#ajax_cart_quantity_').html(temp);

						}
					});
				}
			</script>
