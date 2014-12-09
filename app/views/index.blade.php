@extends('layouts.main')
@section('content')

<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
          <li>
            <img src="{{asset('public/img/banner1.jpg')}}" alt="" />
            <div class="bannerheading1">Deal of the Day</div>
            <div class="bannerheading2">Stylish Shoes Fashion</div>
            <div class="bannerpriceround">
              <div class="bannerpriceroundinner"><span class="oldprice">$260</span><span class="newprice">$199</span><span class="bestdeal">Best Deal</span></div>
            </div>
          </li>
          <li>
            <img src="{{asset('public/img/banner2.jpg')}}" alt="" />
            <div class="bannerheading1">Today's Glasses</div>
            <div class="bannerheading2">Glasses Match Your Style</div>
            <div class="bannerpriceround">
              <div class="bannerpriceroundinner"><span class="oldprice">$260</span><span class="newprice">$199</span><span class="bestdeal">Best Deal</span></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- Slider End-->
  
  <!-- Featured Product-->
  <section id="featured">
    <div class="container">
      <h1 class="headingfull"><span>Featured Products</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="#">First Fashion Fabrics</a>
          <div class="thumbnail">
            <span class="sale tooltip-test" >Sale</span>
            <a href="product.html"><img alt="" src="{{asset('public/img/product1.jpg')}}"></a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
              <span class="links pull-left"><a class="info" href="product.html">info</a>
              <a class="wishlist" href="wishlist.html">wishlist</a>
              <a class="compare" href="compare.html">compare</a>
              </span>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="#">First Fashion Fabrics</a>
          <div class="thumbnail">
            <a href="product.html">
              <img alt="" src="{{asset('public/img/product2.jpg')}}"></a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
              <span class="links pull-left"><a class="info" href="product.html">info</a>
              <a class="wishlist" href="wishlist.html">wishlist</a>
              <a class="compare" href="compare.html">compare</a>
              </span>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="#">First Fashion Fabrics </a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="product.html">
              <img alt="" src="{{asset('public/img/product1.jpg')}}"></a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
              <span class="links pull-left"><a class="info" href="product.html">info</a>
              <a class="wishlist" href="wishlist.html">wishlist</a>
              <a class="compare" href="compare.html">compare</a>
              </span>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="#">First Fashion Fabrics</a>
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="{{asset('public/img/product2.jpg')}}"></a>
            <div class="caption">
              <div class="price pull-left">
                <span class="oldprice">$2225.00</span>
                <span class="newprice">$2225.00</span>
              </div>
              <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
              <span class="links pull-left"><a class="info" href="product.html">info</a>
              <a class="wishlist" href="wishlist.html">wishlist</a>
              <a class="compare" href="compare.html">compare</a>
              </span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h1 class="headingfull"><span>Latest Products</span></h1>
          <ul class="thumbnails">
            <li class="span3">
              <a class="prdocutname" href="#">First Fashion Fabrics</a>
              <div class="thumbnail">
                <a href="product.html"><img alt="" src="{{asset('public/img/product-l1.jpg')}}"></a>
                <div class="caption">
                  <div class="price pull-left">
                    <span class="oldprice">$2225.00</span>
                    <span class="newprice">$2225.00</span>
                  </div>
                  <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                  <span class="links pull-left"><a class="info" href="product.html">info</a>
                  <a class="wishlist" href="wishlist.html">wishlist</a>
                  <a class="compare" href="compare.html">compare</a>
                  </span>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="#">First Fashion Fabrics</a>
              <div class="thumbnail">
                <span class="sale tooltip-test" >Sale</span>
                <a href="product.html">
                  <img alt="" src="{{asset('public/img/product-l2.jpg')}}"></a>
                <div class="caption">
                  <div class="price pull-left">
                    <span class="oldprice">$2225.00</span>
                    <span class="newprice">$2225.00</span>
                  </div>
                  <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                  <span class="links pull-left"><a class="info" href="product.html">info</a>
                  <a class="wishlist" href="wishlist.html">wishlist</a>
                  <a class="compare" href="compare.html">compare</a>
                  </span>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="#">First Fashion Fabrics </a>
              <div class="thumbnail">
                <a href="product.html">
                  <img alt="" src="{{asset('public/img/product-l1.jpg')}}"></a>
                <div class="caption">
                  <div class="price pull-left">
                    <span class="oldprice">$2225.00</span>
                    <span class="newprice">$2225.00</span>
                  </div>
                  <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                  <span class="links pull-left"><a class="info" href="product.html">info</a>
                  <a class="wishlist" href="wishlist.html">wishlist</a>
                  <a class="compare" href="compare.html">compare</a>
                  </span>
                </div>
              </div>
            </li>
            <li class="span3">
              <a class="prdocutname" href="#">First Fashion Fabrics</a>
              <div class="thumbnail">
                <span class="offer tooltip-test" >Offer</span>
                <a href="product.html"><img alt="" src="{{asset('public/img/product-l2.jpg')}}"></a>
                <div class="caption">
                  <div class="price pull-left">
                    <span class="oldprice">$2225.00</span>
                    <span class="newprice">$2225.00</span>
                  </div>
                  <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                  <span class="links pull-left"><a class="info" href="product.html">info</a>
                  <a class="wishlist" href="wishlist.html">wishlist</a>
                  <a class="compare" href="compare.html">compare</a>
                  </span>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection