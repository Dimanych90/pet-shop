@extends('layouts.master')

@section('title')
    Product Details

@endsection

@section('styles')

@endsection

@section('content')
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/banner/banner-2.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Product Details</h2>
                    <ul>
                        <li><a href="index.blade.php">home</a></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($product as $item)
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img">
                            <img id="zoompro" src="../../../public/storage/{{$item->image}}" data-zoom-image="../../../public/img/product-details/bl1.jpg" alt="zoom"/>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h2>{{$item->name}}</h2>

                            <div class="product-price">
                                <span>${{$item->price}} </span>
                            </div>

                            <div class="product-details-style shorting-style mt-30">
                                <label>color:</label>
                                <select>
                                    <option value=""> Choose an option</option>
                                    <option value=""> orange</option>
                                    <option value=""> pink</option>
                                    <option value=""> yellow</option>
                                </select>
                            </div>
                            <div class="quality-wrapper mt-30 product-quantity">
                                <label>Qty:</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                            </div>
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="#" title="Add to cart">
                                        <i class="ion-bag"></i>
                                        Add to cart
                                    </a>
                                </div>
                                <div class="product-list-action-right">
                                    <a href="#" title="Wishlist">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="social-icon mt-30">
                                <ul>
                                    <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                    <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-area pb-100">
            <div class="container">
                <div class="description-review-wrapper gray-bg pt-40">
                    <div class="description-review-topbar nav text-center">
                        <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                        <a data-toggle="tab" href="#des-details2">MORE INFORMATION</a>
                        <a data-toggle="tab" href="#des-details3">REVIEWS (2)</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>name:</span> Scanpan Classic Covered</li>
                                    <li><span>color:</span> orange , pink , yellow </li>
                                    <li><span>size:</span> xl, l , m , sl</li>
                                    <li><span>length:</span> 102cm, 110cm , 115cm </li>
                                    <li><span>Brand:</span> Nike, Religion, Diesel, Monki </li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="rattings-wrapper">
                                <div class="sin-rattings">
                                    <div class="star-author-all">
                                        <div class="product-rating f-left">
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <span>(5)</span>
                                        </div>
                                        <div class="ratting-author f-right">
                                            <h3>tayeb rayed</h3>
                                            <span>12:24</span>
                                            <span>9 March 2018</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                                </div>
                                <div class="sin-rattings">
                                    <div class="star-author-all">
                                        <div class="product-rating f-left">
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star"></i>
                                            <span>(4)</span>
                                        </div>
                                        <div class="ratting-author f-right">
                                            <h3>farhana shuvo</h3>
                                            <span>12:24</span>
                                            <span>9 March 2018</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <h3>Add your Comments :</h3>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="star-box">
                                            <h2>Rating:</h2>
                                                <div class="product-rating">
                                                <i class="ti-star theme-color"></i>
                                                <i class="ti-star theme-color"></i>
                                                <i class="ti-star theme-color"></i>
                                                <i class="ti-star"></i>
                                                <i class="ti-star"></i>
                                                <span>(3)</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <input placeholder="Email" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                    <input type="submit" value="add review">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-product-area pt-95 pb-80 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Most Populer</h4>
                    <h2>Related Products</h2>
                </div>
                <div class="related-product-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-4.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Dog Calcium Food</a></h4>
                            <div class="product-price">
                                <span class="new">$20.00 </span>
                                <span class="old">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-5.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Cat Buffalo Food</a></h4>
                            <div class="product-price">
                                <span class="new">$22.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-6.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Legacy Dog Food</a></h4>
                            <div class="product-price">
                                <span class="new">$50.00 </span>
                                <span class="old">$70.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-7.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Chicken Dry Cat Food</a></h4>
                            <div class="product-price">
                                <span class="new">$60.00 </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-8.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Stomach Dog Food</a></h4>
                            <div class="product-price">
                                <span class="new">$70.00 </span>
                                <span class="old">$90.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="product-details.blade.php">
                                <img src="../../../public/img/product/product-9.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="ti-plus"></i>
                                </a>
                                <a title="Add To Cart" href="#">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="product-action-wishlist">
                                <a title="Wishlist" href="#">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.blade.php">Nourish Puppy Food</a></h4>
                            <div class="product-price">
                                <span class="new">$80.00 </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Dog Calcium Food</h3>
                                <div class="product-price">
                                    <span>$19.00 </span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection

@section('scripts')

@endsection
