<section id="product-all" class="collection">
	<div class="banner-product">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="public/images/sp.png">
            </div>
        </div>
    </div>
	<div class="slider">
		<div class="container">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-menu pull-left">
                    <?php $this->load->view('frontend/modules/category'); ?>
                </div>
                <?php $this->load->view('frontend/modules/product-sale'); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 product-content">
            <div class="row box-bd-content">
                <div class="col-lg-12 content-product-list group-pd">
                    
                    <div id="plain-list" class="owl-carousel owl-theme owl-loaded">
                    
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="width: 750px; transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s;">
                            <?php if(count($list)==0): ?>
                                <p>Không có sản phẩm !</p>
                            <?php else : ?>
                                    <?php foreach ($list as $row) :?>
                        <div class="owl-item active" style="width: 228px; margin-right: 14px;">
                            <div class="item"> <!--sử dụng  -->
                                <div class="product-block product-resize rainbow_0">
                                    <div class="product-img image-resize view view-third clearfix">
                                        <div class="product_gift_label hidden" product-id="1020042452">
                                            <img class="gift"src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                                        </div>
                                        
                                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>" title="<?php echo $row['name'] ?>">
                                            <img class="  ls-is-cached lazyloaded"src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                                        </a>
                                        <div class="functional-buttons hidden-xs clearfix">
                                            <div class="cart">
                                                <a class="btn-buy ajax_add_to_cart btn button "  onclick="onAddCart('<?php echo $row['id'] ?>')" >
                                                    <span><i class="fa fa-cart-plus" aria-hidden="true"></i>Thêm vào giỏ</span> 
                                                </a>
                                            </div>
                                            <div class="quickview">
                                                <a class="btn-like mask-view quick-view btn btn-outline" href="<?php echo $row['alias'] ?>"">
                                                    <i class="fa fa-eye"></i><span>Xem nhanh</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detail clearfix">
                                        
                                        <h3 class="pro-name clearfix">
                                            <a href="<?php echo $row['alias'] ?>" ><?php echo $row['name'] ?> </a>
                                        </h3>
                                        <?php if($row['sale'] > 0) :?>
                                        <!-- sử dụng pull-right -->
                                        <div class="content_price">
                                            <p class="pro-price"><?php echo(number_format($row['price_sale'])); ?>₫</p>
                                            <p class="pro-price-del"></p>
                                        </div>	
                                        <?php else: ?>
                                            <div class="content_price">
                                                <p class="pro-price"><?php echo(number_format($row['price_sale'])); ?>₫</p>
                                                <p class="pro-price-del"></p>
                                            </div>	
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <?php endforeach; ?> 
                            </div>

                        </div>

                        <?php endif; ?>          
                    </div>				
                </div>
    </div>
           </div>
        </div>
</div>
</section>

<div class="container">


</div>













<script>
    function onAddCart(id){
        var strurl="<?php echo base_url();?>"+'/sanpham/addcart';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {id: id},
            success: function(data) {
                document.location.reload(true);
                alert('Thêm sản phẩm vào giỏ hàng thành công !');
            }
        });
    }
    function sortby(option){
        var strurl="<?php echo base_url();?>"+'/sanpham/index';
        jQuery.ajax({
            url: strurl,
            type: 'POST',
            dataType: 'json',
            data: {'sapxep': option},
            success: function(data) {
                $('#list-product').html(data);
            }
        });
    }
</script>