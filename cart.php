			<?php
				require "inc/header.php";
			?>
			<!-- end header  -->
			<?php
				require "inc/search-bar.php";
			?>
			<!-- end search bar  -->
            <div id="wp-content" class="mb-5">
                <div id="content">
                    <div class="container">
                        <div class="row">
                            <div class="cart col-md-12">
                                <table class="table table-borderless text-center">
                                    <thead class="">
                                        <tr class="text-uppercase">
                                            <th colspan="2">sản phẩm</th>
                                            <th>giá</th>
                                            <th>số lượng</th>
                                            <th>tổng</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-uppercase">
                                        <tr id="hungs001">
                                            <td class="this-img" data-label="Sản phẩm"><a href="" class="thumb-img"><img src="img/content/product-hot/hot-img1.jpg" class="img-fluid" alt=""></a></td>
                                            <td><a href="" class="this-name text-decoration-none float-left">name the product</a></td>
                                            <td class="price" data-label="Giá">100.000₫</td>
                                            <td class="num-pd" data-label="Số lượng">
                                                <div class="input-quantity">
                                                    <button type="submit" class="button minus text-center border-0 shadow-none">
                                                        <span class="icon-minus">-</span>
                                                    </button>
                                                    <input type="text" name="quantity" id="quantity" class="text-center p-1" value="2" min="1" max="5">
                                                    <button type="submit" class="button plus text-center border-0 shadow-none">
                                                        <span>+</span>
                                                    </button>
                                                </div>
                                            </td>
											<td class="all-price" data-label="Tổng cộng">200,000₫</td>
											<td class="delete" data-label="Xóa"><i class="fa fa-times-circle" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr id="hungs002">
                                            <td class="this-img" data-label="Sản phẩm"><a href="" class="thumb-img"><img src="img/content/product-hot/hot-img3.jpg" class="img-fluid" alt=""></a></td>
                                            <td><a href="" class="this-name">name the product</a></td>
                                            <td class="price" data-label="Giá">200.000₫</td>
                                            <td class="num-pd" data-label="Số lượng">
                                                <div class="input-quantity">
                                                    <button type="submit" class="button minus text-center border-0 shadow-none">
                                                        <span class="icon-minus">-</span>
                                                    </button>
                                                    <input type="text" name="quantity" id="quantity" class="text-center p-1" value="1" min="1" max="5">
                                                    <button type="submit" class="button plus text-center border-0 shadow-none">
                                                        <span>+</span>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="all-price" class="Tổng cộng">200,000₫</td>
                                            <td class="delete" data-label="Xóa"><i class="fa fa-times-circle" aria-hidden="true"></i></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="grid">
                                    <div class="container px-0">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="grid-item">
                                                    <h4 class="grid-name text-uppercase">ghi chú</h4>
                                                    <textarea name="" id="notes" cols="30" rows="10" style="width: 100%"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right mb-4">
                                                        <h4 class="grid-name text-uppercase">tổng tiền</h4>
                                                        <p class="total-price"><span class="mony-now">600,000₫</span></p>
                                                        <span class="sub-name">Vận chuyển và thuế tính lúc thanh toán</span>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row justify-content-end pl-5">
                                                            <div class="col-md-7 mb-2 mb-md-0">
                                                                <a href="aokhoat001.php" class="btn btn-block btn-to-shopping rounded-0 py-2">Tiếp tục mua hàng</a>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <a href="basket.php" class="btn btn-block btn-to-pay rounded-0 py-2">Thanh toán</a>
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
                </div>
            </div>
			<!-- end wp-content -->
			<?php
				require "inc/footer.php";
			?>
			<!-- end footer  -->
			<!-- ---- -->
			<?php
				require "inc/plugin-msg.php";
			?>
			<!-- end plugin msg  -->
			<!-- ---- -->
			<?php
				require "inc/backtop.php";
			?>
			<!-- end backtop  -->
			<?php
				require "inc/copyright.php";
			?>
			<!-- end copy right -->			
        </div>
        <?php
			require "inc/respon.php";
		?>
		<!-- end respon  -->
    </div>
</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="js/main-js.js"></script>
<script src="js/jsOfproduct.js"></script>
<script src="js/jsCart.js"></script>

<script src="js/masonry.pkgd.min.js"></script>
</html>