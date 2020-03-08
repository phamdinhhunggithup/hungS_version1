            <?php
				require "inc/header.php";
			?>
			<!-- end header  -->
			<?php
				require "inc/search-bar.php";
			?>
			<!-- end search bar  -->
            <div id="tab-pane-photo-realistic" class="position-fixed w-100 h-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-img position-relative">
                                <div class="box-img-header my-4">
                                    <div class="row position-relative">
                                        <div class="col-lg-8 mx-auto">
                                            <div class="thumb-img text-center w-100 overflow-hidden" style="width: 200px; height: 555px;"><img src="img/content/product-hot/hot-img1a_5.jpg" style="height: 100%;" class="img-fluid d-inline overflow-auto" alt=""></div>
                                        </div>
                                        <div class="col-md-2 close-pane position-absolute">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" name="next" class="btn-control text-center rounded-circle text-white next position-absolute pl-2" style="right: 0;">
                                    <span class="fa fa-angle-right"></span>
                                </button>
                                <button type="button" name="prev" class="btn-control text-center rounded-circle text-white prev position-absolute pr-2" style="left: 0;">
                                    <span class="fa fa-angle-left"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="breadcrumb" class="mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.php" class="text-uppercase text-decoration-none">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active text-uppercase">áo khoát</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="add-basket" aria-modal="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="title-quantity ml-5 py-2">
                            <i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>
                            Hiện đang có <strong>3</strong> sản phẩm trong giỏ hàng
                            <button class="close" data-dismiss="modal"><span class="fa fa-times-circle"></span></button>
                        </div>
                        <div class="modal-header pb-1 pt-2 text-center"> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 item-border pd-name text-uppercase">sản phẩm</div>
                                    <div class="col-md-2 item-border pd-price text-uppercase">đơn giá</div>
                                    <div class="col-md-2 item-border pd_quantity text-uppercase">số lượng</div>
                                    <div class="col-md-2 pd_total text-uppercase">thành tiền</div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="popup-item col-md-12 py-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="modal-img">
                                                            <a href=""><img src="img/content/product-hot/hot-img1a_5.jpg" class="img-fluid" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="modal-info">
                                                            <a href="" class="name-pd text-uppercase mb-3">name the product</a>
                                                            <a href="" class="delete-pd" title="Xóa" data-toggle="tooltip">
                                                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                                                                Bỏ sản phẩm này
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="price-current">100,000₫</div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="input-quantity">
                                                    <button type="submit" class="button minus text-center">
                                                        <span class="icon-minus">-</span>
                                                    </button>
                                                    <input type="text" name="quantity" id="quantity" class="text-center p-1" value="1" min="1" max="5">
                                                    <button type="submit" class="button plus text-center">
                                                        <span>+</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="total-price">
                                                    200.000₫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popup-item col-md-12 py-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="modal-img">
                                                            <a href=""><img src="img/content/product-hot/hot-img1a_5.jpg" class="img-fluid" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="modal-info">
                                                            <a href="" class="name-pd text-uppercase mb-3">name the product</a>
                                                            <a href="" class="delete-pd" title="Xóa" data-toggle="tooltip">
                                                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                                                                Bỏ sản phẩm này
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="price-current">100,000₫</div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="input-quantity">
                                                    <button type="submit" class="button minus text-center">
                                                        <span class="icon-minus">-</span>
                                                    </button>
                                                    <input type="text" name="quantity" class="text-center" id="quantity" value="1" min="1" max="5">
                                                    <button type="submit" class="button plus text-center">
                                                        <span>+</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="total-price">
                                                    200.000₫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popup-item col-md-12  py-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="modal-img">
                                                            <a href=""><img src="img/content/product-hot/hot-img1a_5.jpg" class="img-fluid" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="modal-info">
                                                            <a href="" class="name-pd text-uppercase mb-3">name the product</a>
                                                            <a href="" class="delete-pd" title="Xóa" data-toggle="tooltip">
                                                                <i class="fa fa-trash mr-1" aria-hidden="true"></i>
                                                                Bỏ sản phẩm này
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="price-current">100,000₫</div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="input-quantity">
                                                    <button type="submit" class="button minus text-center">
                                                        <span class="icon-minus">-</span>
                                                    </button>
                                                    <input type="text" name="quantity" class="text-center" id="quantity" value="1" min="1" max="5">
                                                    <button type="submit" class="button plus text-center">
                                                        <span>+</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <div class="total-price">
                                                    200.000₫
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer py-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="popup_amount d-flex justify-content-between">
                                            <a href="" data-dismiss="modal" class="continueShopping">
                                                <i class="fa fa-arrow-circle-left mr-1" aria-hidden="true"></i>
                                                Tiếp tục mua hàng
                                            </a>
                                            <div class="full-payment">
                                                Tổng cộng: <span class="price-all ml-3">600,000₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 clearfix">
                                        <div class="pay text-uppercase float-right"><a href="basket.php" class="text-decoration-none text-center text-white">thanh toán</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wp-content">
                <div id="content">
                    <section id="main-product">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="parent_ row no-gutters">
                                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="img-product text-center">
                                                        <a href="" class="thumb-img">
                                                            <img src="img/content/product-hot/hot-img1.jpg" class="img-fluid d-inline" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-8 mx-auto">
                                                    <div class="photo-realistic">
                                                        <h4 class="">Hình ảnh thực tế</h4>
                                                        <ul class="owl-carousel owl-theme carousel-pd">
                                                            <li class="item" title="Lướt sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="0"><img src="img/content/product-hot/hot-img1a_5.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="1"><img src="img/content/product-hot/hot-img1a_2.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="2"><img src="img/content/product-hot/hot-img1a_3.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="3"><img src="img/content/product-hot/hot-img1a_4.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="4"><img src="img/content/product-hot/hot-img1a_7.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="5"><img src="img/content/product-hot/hot-img1a_6.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="6"><img src="img/content/product-hot/hot-img1a_8.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="7"><img src="img/content/product-hot/hot-img1a_2.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="8"><img src="img/content/product-hot/hot-img1a_3.jpg" class="img-fluid" alt=""></a></li>
                                                            <li class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="9"><img src="img/content/product-hot/hot-img1a_4.jpg" class="img-fluid" alt=""></a></li>
                                                            <div class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="10"><img src="img/content/product-hot/hot-img1a_7.jpg" class="img-fluid" alt=""></a></div>
                                                            <div class="item" title="Lước sang để xem nhiều hơn" data-toggle="tooltip"><a href="" class="see-all" data-index="11"><img src="img/content/product-hot/hot-img1a_6.jpg" class="img-fluid" alt=""></a></div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <section class="info-product pl-4">
                                                <h2 class="name-p text-uppercase" title="phamdinhhung" data-toggle="tooltip">áo khoát thời trang</h2>
                                                <aside class="code-p">Mã sản phẩm: <strong class="text-uppercase">PDHUNG0041V3</strong></aside>
                                                <div class="relative mt-1">
                                                    <span class="price d-block">100,000₫</span>
                                                    <div class="option-color my-3 mb-5">
                                                        <h4 class="name-option mb-2">Màu sắc:</h4>
                                                        <ul class="list-color d-flex justify-content-start">
                                                            <li><a href="" class="p-2 active"><img src="img/content/product-hot/hot-img1.jpg" class="img-fluid" alt=""></a></li>
                                                            <li><a href="" class="p-2"><img src="img/content/product-hot/hot-img1a.jpg" class="img-fluid" alt=""></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-quantity mb-5 ml-0 ml-lg-2">
                                                        <h4 class="name-option mb-2">Số lượng:</h4>
                                                        <button type="submit" class="button minus text-center">
                                                            <span class="icon-minus">-</span>
                                                        </button>
                                                        <input type="text" name="quantity" class="text-center" id="quantity" value="1" min="1" max="5">
                                                        <button type="submit" class="button plus text-center">
                                                            <span>+</span>
                                                        </button>
                                                    </div>
                                                    <div class="row no-gutters action-option text-center mb-3 ml-0 ml-lg-2">
                                                        <div class="col-lg-6 mb-2 mb-lg-0 pr-lg-2 pr-0">
                                                            <a href="cart.php" class="btn-action-p rounded-0 btn btn-block notification d-none d-lg-block" data-toggle="modal" data-target="#add-basket"><span class="text-uppercase">thêm vào giỏ hàng</span></a>
                                                            <a href="cart.php" class="btn-action-p rounded-0 btn btn-block notification mt-0 d-block d-lg-none"><span class="text-uppercase">thêm vào giỏ hàng</span></a>
                                                        </div>
                                                        <div class="col-lg-6 pl-lg-2 pl-0">
                                                            <a href="basket.php" type="submit" class="btn-action-p rounded-0 btn btn-block pay-now"><span class="text-uppercase">mua ngay</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="row no-gutters list-store text-center mb-4 ml-0 ml-lg-2">
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btn btn-block rounded-0 text-decoration-none text-white" data-toggle="modal" data-target="#show-list-store">
                                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                                Kiểm tra sản phẩm đang có tại cửa hàng nào
                                                            </button>
                                                        </div>
                                                            <div class="modal fade" id="show-list-store">
                                                            <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="title-popup">Danh sách địa chỉ còn hàng</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <ul class="list-store">
                                                                                <li class="mb-2">
                                                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                                    520 Hà Huy Giáp - Q.12 - TP HCM
                                                                                    <aside class="phone">038 5763 717 - 037 987 654</aside>
                                                                                </li>
                                                                                <li class="mb-2">
                                                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                                    320 vườn lài - Q.Tân Phú - TP HCM
                                                                                    <aside class="phone">038 123 456 - 036 345 678</aside>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button class="btn btn-block py-2 text-white" data-dismiss="modal">Đóng</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="support-option ml-2">
                                                        <p><strong class="text-center text-uppercase">» giao hàng miễn phí toàn quốc</strong></p>
                                                        <p><strong class="text-center text-uppercase">» đổi trả trong vòng 7 ngày</strong></p>
                                                        <p><strong class="text-center text-uppercase">» hotline bán hàng 038 5763 717</strong></p>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="info-relative">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <nav aria-label="tabs" id="nav-tab">
                                        <div class="nav nav-tabs text-center">
                                            <a href="#tab-content-1" class="nav-item nav-link active" data-toggle="tab">
                                                Mô tả
                                            </a>
                                            <a href="#tab-content-2" class="nav-item nav-link" data-toggle="tab">
                                                Đánh giá <span class="num-cmt">3</span>
                                            </a>
                                            <a href="#tab-content-3" class="nav-item nav-link" data-toggle="tab">
                                                Bình luận
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane fade show active" id="tab-content-1">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 animate-1 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-1 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-2 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-2 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_4.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-3 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_5.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-3 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_6.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-4 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_7.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-md-6 mb-3 animate-4 zoom" data-aos="zoom">
                                                    <img src="img/content/product-hot/hot-img1a_8.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-content-2">
                                            <div class="row">
                                                <div class="col-lg-8 col-12">
                                                    <div class="reviews">
                                                        <div class="media mb-4">
                                                            <a href="" class="reviewer mr-3 rounded-circle">
                                                                <img src="img/avatar/buivuluan.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5 class="name-reviewer">Luân Bùi Vũ</h5>
                                                                <div class="vote">
                                                                    <div class="num-start">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="content-review">Mình mún gửi hàng đi vĩnh long được không shop ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="media my-4">
                                                            <a href="" class="reviewer mr-3">
                                                                <img src="img/avatar/hoangvy.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5 class="name-reviewer">Hoàng vy</h5>
                                                                <div class="vote">
                                                                    <div class="num-start mb-1">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="content-review">Sản phẩm chất lượng nhân viên nhiệt tình</p>
                                                            </div>
                                                        </div>
                                                        <div class="media my-4">
                                                            <a href="" class="reviewer mr-3">
                                                                <img src="img/avatar//tranphuongtrinh.jpg" class="img-fluid" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <h5 class="name-reviewer">Trần phương trịnh</h5>
                                                                <div class="vote">
                                                                    <div class="num-start mb-1">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <p class="content-review">Mình đag ế mà mua đồ bên shop cái mình có bồ ln rồi nek..!!</p>
                                                                <div class="media my-4">
                                                                    <a href="" class="reviewer mr-3">
                                                                        <img src="img/avatar/trangdai.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h5 class="name-reviewer">Trang Đài</h5>
                                                                        <div class="vote">
                                                                            <div class="num-start mb-1">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                        <p class="content-review">Bạn cũng mua bà sao bạn không có bồ</p>
                                                                    </div>
                                                                </div>
                                                                <div class="media my-4">
                                                                    <a href="" class="reviewer mr-3">
                                                                        <img src="img/avatar/tranphuongtrinh.jpg" class="img-fluid" alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h5 class="name-reviewer">Trần Phương Trịnh</h5>
                                                                        <div class="vote">
                                                                            <div class="num-start mb-1">
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                            </div>
                                                                        </div>
                                                                        <p class="content-review">Tại bạn yếu 🤣</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="posted-review">
                                                        <div class="comment text-center">
                                                            <h5 class="text-uppercase mb-3">Thêm đánh giá</h5>
                                                            <div class="login-box">
                                                                <a href="" class="text-decoration-none">Đăng nhập để đánh giá</a>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab-content-3">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="comment-fb">
                                                        <div id="fb-root"></div>
                                                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>  
                                                        <div class="fb-comments" data-href="https://facebook.com/0pham7dinh1hung1" data-width="100" data-numposts="5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="box">
                                                <div class="box-head">
                                                    <div class="row">
                                                        <div class="col-md-8 mx-auto text-center">
                                                            <h2 class="name-box mb-1">Sản phẩm bạn vừa xem</h2>
                                                            <aside class="sub-name">Những sản phẩm thời trang bạn đã xem - Hãy mua ngay</aside>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row mb-4">
                                                        <div class="col-md-8 mx-auto">
                                                            <p class="notification text-underline text-center">Bạn đã xem <strong class="num-p">5</strong> sản phẩm</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-12">
                                                            <div class="owl-carousel owl-theme">
                                                                <div class="item">
                                                                    <div class="p-item overflow-hidden">
                                                                        <div class="p-img mb-5">
                                                                            <a href="" class="thumb-img">
                                                                                <img src="img/content/product-hot/hot-img15.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="p-info d-flex justify-content-center position-relative">
                                                                            <div class="p-1 position-absolute see-more">
                                                                                <ul class="list-p d-flex justify-content-center">
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img15.jpg" alt="">
                                                                                    </a></li>
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img15a.jpg" alt="">
                                                                                    </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="price text-center d-block">120.000 ₫</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="p-item overflow-hidden">
                                                                        <div class="p-img mb-5">
                                                                            <a href="" class="thumb-img">
                                                                                <img src="img/content/product-hot/hot-img16.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="p-info d-flex justify-content-center position-relative">
                                                                            <div class="p-1 position-absolute see-more">
                                                                                <ul class="list-p d-flex justify-content-center">
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img16.jpg" alt="">
                                                                                    </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="price text-center d-block">120.000 ₫</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="p-item overflow-hidden">
                                                                        <div class="p-img mb-5">
                                                                            <a href="" class="thumb-img">
                                                                                <img src="img/content/product-hot/hot-img17.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="p-info d-flex justify-content-center position-relative">
                                                                            <div class="p-1 position-absolute see-more">
                                                                                <ul class="list-p d-flex justify-content-center">
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img17.jpg" alt="">
                                                                                    </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="price text-center d-block">120.000 ₫</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="p-item overflow-hidden">
                                                                        <div class="p-img mb-5">
                                                                            <a href="" class="thumb-img">
                                                                                <img src="img/content/product-hot/hot-img18.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="p-info d-flex justify-content-center position-relative">
                                                                            <div class="p-1 position-absolute see-more">
                                                                                <ul class="list-p d-flex justify-content-center">
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img18.jpg" alt="">
                                                                                    </a></li>
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img18a.jpg" alt="">
                                                                                    </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="price text-center d-block">120.000 ₫</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="p-item overflow-hidden">
                                                                        <div class="p-img mb-5">
                                                                            <a href="" class="thumb-img">
                                                                                <img src="img/content/product-hot/hot-img20.jpg" class="img-fluid" alt="">
                                                                            </a>
                                                                        </div>
                                                                        <div class="p-info d-flex justify-content-center position-relative">
                                                                            <div class="p-1 position-absolute see-more">
                                                                                <ul class="list-p d-flex justify-content-center">
                                                                                    <li><a href="" class="thumb-img">
                                                                                        <img src="img/content/product-hot/hot-img20.jpg" alt="">
                                                                                    </a></li>
                                                                                </ul>
                                                                            </div>
                                                                            <span class="price text-center d-block">120.000 ₫</span>
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
                    </section>
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