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
            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 group-pd group-center">
             <div class="product-wrap">
               <div class="collection__title">
                   <h1><span>Tất cả sản phẩm</span></h1>
                   <div id="sort-by" class="hidden-xs browse-tags">
                    <span>sắp sếp theo</span>
                      <form class="form-inline form-viewpro">
                        <div class="form-group">
                            <?php 
                            $html_list="";
                            $html_list.='<select id ="sortControl" class = "sort-by form-control input-sm" onchange="sortby(this.value)">';
                            if($this->session->userdata('sortby')){
                                $data = $this->session->userdata('sortby');
                                $sort = $data[0].'-'.$data[1];
                                if($sort == 'number_buy-desc'){
                                    $html_list.='<option value="number_buy-desc" selected>Bán chạy nhất</option>';
                                }else{
                                    $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                }
                                if($sort == 'name-asc'){
                                    $html_list.='<option value="name-asc" selected>A → Z</option>';
                                }else{
                                    $html_list.='<option value="name-asc" >A → Z</option>';
                                }
                                if($sort == 'name-desc'){
                                    $html_list.='<option value="name-desc" selected>Z → A</option>';
                                }else{
                                    $html_list.='<option value="name-desc">Z → A</option>';
                                }
                                if($sort == 'price-asc'){
                                    $html_list.='<option value="price-asc" selected>Giá tăng dần</option>';
                                }else{
                                    $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                }
                                if($sort == 'price-desc'){
                                    $html_list.='<option value="price-desc" selected>Giá giảm dần</option>';
                                }else{
                                    $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                }
                                if($sort == 'created-desc'){
                                    $html_list.='<option value="created-desc" selected>Hàng mới nhất</option>';
                                }else{
                                    $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                }
                                if($sort == 'created-asc'){
                                    $html_list.='<option value="created-asc" selected>Hàng cũ nhất</option>';
                                }else{
                                    $html_list.='<option value="created-asc">Hàng cũ nhất</option>';
                                }
                            }else{
                               $html_list.='<option value="number_buy-desc">Bán chạy nhất</option>';
                                $html_list.='<option value="name-asc">A → Z</option>';
                                $html_list.='<option value="name-desc">Z → A</option>';
                                $html_list.='<option value="price-asc">Giá tăng dần</option>';
                                $html_list.='<option value="price-desc">Giá giảm dần</option>';
                                $html_list.='<option value="created-desc">Hàng mới nhất</option>';
                                $html_list.='<option value="created-desc">Hàng cũ nhất</option>';
                            }
                            $html_list.='</select>';
                            echo $html_list;
                            ?>
                        </div>
                    </form>
                    <br>
                </div>
                <div class="collection-filter" id = "list-product">
                  <div class="category-products clearfix">
                    <div class="products-grid clearfix">
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
                                                                    <a class="btn-buy ajax_add_to_cart btn button " onclick="onAddCart('<?php echo $row['id'] ?>')" data-toggle="modal" data-target="#myModal" >
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
                                        
                                        <?php endif;?>
                                        </div>
                                    </div>
                                    <div class = "text-center pull-right">
                                        <ul class ="pagination">
                                            <?php echo $strphantrang; ?>
                                        </ul>
                                    </div>
                                
                                </div>				
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>





<div class="container">


</div>

    















<script type="text/javascript">
    function sortby(option){
        jQuery.ajax({
            url: "<?php echo base_url();?>"+'/sanpham/index',
            type: 'POST',
            dataType: 'json',
            data: {'sapxep': option},
            success: function(data) {
                $('#list-product').html(data);
            }
        });
    }
</script>
