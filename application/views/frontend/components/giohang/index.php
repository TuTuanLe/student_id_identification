

<div id="cart">
	<div class="container" style="padding-right:0px;padding-left:0px;">
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="row content-cart-left ">
			
				<div id="layout-page" class="col-md-12">
					<span class="header-page clearfix">
						<h2>Giỏ hàng của bạn </h2> 	
					</span>
										
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if($this->session->userdata('cart')):
					$cart = $this->session->userdata('cart');
					?>
						<form action="" method="post" id="cartformpage">
							<table>
								<thead>
									<tr>
										<th width="10%" class="image">Hình</th>
										<th width="40%" class="item">Sản phẩm</th>
										<th width="20%" class="qty">Số lượng</th>
										<th width="20%" class="single_price">Đơn giá</th>
										<th width="10%" class="price">Thành tiền</th>
									</tr>
								</thead>
								<tbody>
										<?php foreach ($cart as $key => $value) :
											$row = $this->Mproduct->product_detail_id($key);
										?>
										<tr class="list-carts ">
											<td class="image">
												<div class="product_image">
													<a href="<?php echo $row['alias'] ?>">
														<img src="public/images/products/<?php echo $row['avatar'] ?>" alt="<?php echo $row['name'] ?>">
													</a>
												</div>
											</td>
											<td class="item">
												<a style="color:#3a3a3c;" href="<?php echo $row['alias'] ?>">
													<?php echo $row['name'] ?>
												</a>
												<span class="variant_title">Bánh</span>
												<a  onclick="onRemoveProduct(<?php echo $row['id']; ?>)" class="cart hidden-xs click-delete">
													<i class="fa fa-trash fa-lg"></i> Bỏ sản phẩm
												</a>
											</td>

											<td class="item">
												<div class="quantity clearfix">
												<input name="quantity" id="<?php echo $row['id'] ?>" class="form-control" type="number" value="<?php echo $value ?>" min="1" max="1000" onchange="onChangeSL(<?php echo $row['id'] ?>)">
											</div>
											</td>
											<td class="single_price">
												<p class="product-price"><span style="color:#383838;font-size:14px;">Giá sản phẩm:</span> <?php 
													if($row['price_sale'] > 0){
														echo (number_format($row['price_sale'])).' VNĐ';
													}
													?>
												 </p>

											</td>
											<td class="price">
											<?php 
													if($row['price_sale'] > 0){
														echo (number_format($row['price_sale']*$value)).' VNĐ';
													}else{
														echo (number_format($row['price'] * $value)).' VNĐ';
													}
													?>
											</td>
										</tr>
										<?php endforeach; ?>
										<?php $total = 0; ?>
										<?php $temp = 0; ?>
										<?php foreach ($cart as $key => $value) : 
											$row = $this->Mproduct->product_detail_id($key);?>
											<?php
											if($row['price_sale'] > 0)
												$sum = $row['price_sale'] * $value;
											else
												$sum = $row['price'] * $value;
											$total += $sum;
											$temp++;
											?>	
										<?php endforeach; ?>
											
										

										
									
									<tr class="summary" style="background: #fdfdfd;">
										<td class="image">&nbsp;</td>
										<td>&nbsp;</td>
										<td class="text-center"><b>Tổng cộng:</b></td>
										<td style="font-weight: bold;">( <?php echo $temp?> sản phẩm)</td>
										<td class="price">
											<span class="total" id="total-carts">
												<strong><?php echo (number_format($total)).' VNĐ'; ?></strong>
											</span>
										</td>
									</tr>
								</tbody>
							</table>
							<br>
						

							<div class="col-md-8 col-xs-12 cart-buttons inner-right inner-left nopadding">
								<div class="buttons clearfix">
									<button type="button" onclick="window.location.href='info-order'" id="checkout" class="button-default button button-medium" name="checkout" value="">Thanh toán</button>
									<a href="index.php" class="continue"><i class="fa fa-reply" aria-hidden="true"></i> Tiếp tục mua hàng</a>
								</div>
							</div>
						</form>
						<?php endif;?>
					</div>
				</div>
			</div>
			
		</div>

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="content-cart-left">

				<div class="adr box bg-white" id="box_delivery_policies">
					<div class="header">
						<h4 class="title">MIỄN PHÍ GIAO HÀNG</h4>
					</div>
					<div class="body">
						<div class="adr list" id="delivery_policies_list">
							<div class="item frist">
								<div class="icon"><i class="adr huge icon truck"></i></div>
								<div class="text"><div style="     font-size: 12px; "> <strong>TPHCM:</strong> với ĐH trên 600.000đ<br> <strong>Toàn quốc:</strong> Hỗ trợ 50% phí ship ĐH <br>trên 1.000.000đ</div></div>
							</div>
							<div class="item ">
								<div class="icon"><i class="adr huge icon location2"></i></div>
								<div class="text"><div style="font-size: 12px; "> <strong>UY TÍN &amp; CHẤT LƯỢNG</strong></div>100% sản phẩm chính hãng<br>Thanh toán khi nhận hàng</div>
							</div>
							<div class="item ">
								<div class="icon"><i class="adr huge icon box"></i></div>
								<div class="text"><div style="font-size: 12px; "> <strong>MUA HÀNG NHANH</strong><br><span style="color:#fbae40;font-size:18px;"><strong>039 669 4769</strong></span><br> <span>KTX A 703</span></div></div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
			
	</div>

</div>

<script>
		function onChangeSL(id){
			var sl = document.getElementById(id).value;
			var strurl="<?php echo base_url();?>"+'/sanpham/update';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id, sl:sl},
				success: function(data) {
					document.location.reload(true);
				}
			});
		}
		function onRemoveProduct(id){
			var strurl="<?php echo base_url();?>"+'/sanpham/remove';
			jQuery.ajax({
				url: strurl,
				type: 'POST',
				dataType: 'json',
				data: {id: id},
				success: function(data) {
					document.location.reload(true);
					alert('Xóa sản phẩm thành công !!');
				}
			});
		}
</script>