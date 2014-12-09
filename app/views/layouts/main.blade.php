<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pxcreate.com/template/shopsimple/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Dec 2014 13:16:12 GMT -->
<head>
<meta charset="utf-8">
<title>ShopSimple - A Responsive Html5 Ecommerce Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- styles -->
 
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
 {{HTML::style('public/css/bootstrap.css');}}
 {{HTML::style('public/css/docs.css');}}
 {{HTML::style('public/js/google-code-prettify/prettify.css');}}
 {{HTML::style('public/css/style.css');}}
 {{HTML::style('public/css/flexslider.css');}}
 {{HTML::style('public/fancybox/jquery.fancybox-1.3.4.css');}}
 {{HTML::style('public/ico/favicon.html');}}

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav and touch icons -->
{{HTML::style('public/ico/favicon.html');}}
</head>
<body>
<!-- Header Start -->
<header>
  <!-- Sticky Navbar Start -->
  <div class="navbar navbar-fixed-top" id="main-nav">
    <div class="container">
      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <nav class="nav-collapse collapse" style="height:0px">
        <ul class="nav">
          <li class="active"><a href="index-2.html">Home</a>
          </li>
          <li><a href="myaccount.html">My Account </a>
          </li>
          <li><a href="shopping-cart.html">Shopping Cart</a>
          </li>
          <li><a href="checkout.html">Checkout</a>
          </li>
        </ul>
      </nav>
      <ul class="nav pull-right left-tablet">
        <li class="dropdown hover">
          <a data-toggle="" class="dropdown-toggle" href="#">US Doller <b class="caret"></b></a>
          <ul class="dropdown-menu currency">
            <li><a href="#">US Doller</a>
            </li>
            <li><a href="#">Euro </a>
            </li>
            <li><a href="#">British Pound</a>
            </li>
          </ul>
        </li>
        <li class="dropdown hover">
          <a data-toggle="" class="dropdown-toggle" href="#">English <b class="caret"></b></a>
          <ul class="dropdown-menu language">
            <li><a href="#">English</a>
            </li>
            <li><a href="#">Spanish</a>
            </li>
            <li><a href="#">German</a>
            </li>
          </ul>
        </li>
        <li class="dropdown hover topcart">
          <a  class="dropdown-toggle" href="#">
            <i class="carticon"></i> Shopping Cart <span class="label label-success font14">1 item(s)</span> - $589.50<b class="caret"></b></a>
          <ul class="dropdown-menu topcartopen">
            <li>
              <table>
                <tbody>
                  <tr>
                    <td class="image"><a href="product.html"><img title="product" alt="product" src="{{asset('public/img/prodcut-40x40.jpg')}}" height="50" width="50"></a></td>
                    <td class="name"><a href="product.html">MacBook</a></td>
                    <td class="quantity">x&nbsp;1</td>
                    <td class="total">$589.50</td>
                    <td class="remove"><i class="icon-remove"></i></td>
                  </tr>
                  <tr>
                    <td class="image"><a href="product.html"><img title="product" alt="product" src="{{asset('public/img/prodcut-40x40.jpg')}}" height="50" width="50"></a></td>
                    <td class="name"><a href="product.html">MacBook</a></td>
                    <td class="quantity">x&nbsp;1</td>
                    <td class="total">$589.50</td>
                    <td class="remove"><i class="icon-remove "></i></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <td class="textright"><b>Sub-Total:</b></td>
                    <td class="textright">$500.00</td>
                  </tr>
                  <tr>
                    <td class="textright"><b>Eco Tax (-2.00):</b></td>
                    <td class="textright">$2.00</td>
                  </tr>
                  <tr>
                    <td class="textright"><b>VAT (17.5%):</b></td>
                    <td class="textright">$87.50</td>
                  </tr>
                  <tr>
                    <td class="textright"><b>Total:</b></td>
                    <td class="textright">$589.50</td>
                  </tr>
                </tbody>
              </table>
              <div class="well pull-right">
                <a href="#" class="btn btn-success">View Cart</a>
                <a href="#" class="btn btn-success">Checkout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!--Sticky Navbar End -->
  <div class="header-white">
    <div class="container">
      <div class="row">
        <div class="span4">
          <a class="logo" href="index-2.html"><img src="{{asset('public/img/logo.png')}}" alt="ShopSimple" title="ShopSimple"></a>
        </div>
        <div class="span8">
          <div class="row">
            <div class="pull-right logintext">Welcome Px,  you can <a href="login.html">login </a>
              or <a href="register.html">create an account</a>
            </div>
          </div>
          <form class="form-search marginnull topsearch pull-right">
            <input type="text" class="input-large search-query search-icon-top" value="Search here..."  onFocus="if (this.value=='Search here...') this.value='';" onblur="if (this.value=='') this.value='Search here...';"
        >
          </form>
        </div>
      </div>
    </div>
    <div  id="categorymenu">
      <div class="container">
        <nav class="subnav">
          <ul class="nav-pills categorymenu">
            <li><a class="active"  href="index-2.html">Home</a>
              <div>
                <ul class="arrow">
                  <li><a href="home-sidebar.html">Home 2-column</a>
                  </li>
                  <li><a href="index-2.html">Home 1-column</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a   href="product.html">Products</a>
              <div>
                <ul class="arrow">
                  <li><a class="bold" href="product.html">Product Full </a>
                  </li>
                  <li><a class="bold" href="product-sidebar.html"> Product 2 Column </a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes <span class="label label-info">(new)</span></a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-success">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
                <ul class="arrow">
                  <li><a href="#"> Dresses</a>
                  </li>
                  <li><a href="#"> Sun Glasses</a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes </a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-important">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a  href="category-full.html">Category</a>
              <div>
                <ul class="arrow">
                  <li><a class="bold" href="category.html">Category - 2 Column</a>
                  </li>
                  <li><a class="bold" href="category-full.html">Category-Full</a>
                  </li>
                  <li><a href="#"> Men Products</a>
                  </li>
                  <li><a href="#"> Women Products</a>
                  </li>
                  <li><a href="#"> Child Products</a>
                  </li>
                  <li><a href="#"> Home and Furniture</a>
                  </li>
                  <li><a href="#">Electric Accessories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="typography.html">Features</a>
              <div>
                <ul class="arrow">
                  <li><a href="typography.html">Typography</a>
                  </li>
                  <li><a href="form.html">Form Elements</a>
                  </li>
                  <li><a href="buttons.html">Buttons</a>
                  </li>
                  <li><a href="javascript.html">Javascripts</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="shopping-cart.html">Shopping Cart</a>
            </li>
            <li><a href="checkout.html">Checkout</a>
            </li>
            <li><a href="compare.html">Compare</a>
            </li>
            </li>
            <li><a href="blog.html">Blog</a>
              <div>
                <ul class="arrow">
                  <li><a href="blog.html">Blog page</a>
                  </li>
                  <li><a href="bloggrid.html">Blog Grid View</a>
                  </li>
                  <li><a href="bloglist.html">Blog List VIew</a>
                  </li>
                </ul>
              </div>
            </li>
                </ul>
              </div>
            </li>
            <li><a href="contact.html">Contact</a>
            </li>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->

<!--content-->
@yield('content');
<!---Content End->

<!-- Footer -->
<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
          <h2>About Us </h2>
          <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
            <br>
            t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
        </div>
        <div class="span3 contact">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class="mobile"> +123 456 7890, +123 456 7890,<br>
              +123 456 7890</li>
            <li class="email"> test@test.com <br>
              test@test.com</li>
          </ul>
        </div>
        <div class="span3 twitter">
          <h2>Twitter </h2>
          <div id="twitter">
          </div>
        </div>
        <div class="span3 facebook">
          <h2>Facebook </h2>
         <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-height="240" data-show-faces="true" data-stream="false" data-border-color="#ffffff" data-header="false"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="footerlinks">
    <div class="container">
      <div class="shipingstrip">
        <div class="fl">
          <div class="control-group">
            <form class="form-horizontal">
              <div class="">
                <div class="input-prepend">
                  <span class="add-on"><i class="icon-envelope icon-w"></i></span>
                  <input type="text" id="inputIcon" placeholder="Subscribe to Newsletter" >
                  <button type="submit" class="btn btn-success" value="Subscribe">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="fr">
          <div class="shipping"> 24 hrs Free Shipping </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="#">Privacy Policy</a>
          </li>
          <li><a href="#">Terms &amp; Conditions</a>
          </li>
          <li><a href="#">Affiliates</a>
          </li>
          <li><a href="#">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> All images are copyright to their owners. </div>
        <div class="span6 textright"> ShopSimple @ 2012 </div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">Back to top</a>
</footer>
<!-- /maincontainer -->
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{HTML::script('public/js/jquery.js');}}
{{HTML::script('public/js/google-code-prettify/prettify.js');}}
{{HTML::script('public/js/bootstrap-transition.js');}}
{{HTML::script('public/js/bootstrap-alert.js');}}
{{HTML::script('public/js/bootstrap-modal.js');}}
{{HTML::script('public/js/bootstrap-dropdown.js');}}
{{HTML::script('public/js/bootstrap-scrollspy.js');}}
{{HTML::script('public/js/bootstrap-tab.js');}}
{{HTML::script('public/js/bootstrap-tooltip.js');}}
{{HTML::script('public/js/bootstrap-popover.js');}}
{{HTML::script('public/js/bootstrap-button.js');}}
{{HTML::script('public/js/bootstrap-collapse.js');}}
{{HTML::script('public/js/bootstrap-carousel.js');}}
{{HTML::script('public/js/bootstrap-typeahead.js');}}
{{HTML::script('public/js/bootstrap-affix.js');}}
{{HTML::script('public/js/application.js');}}
{{HTML::script('public/js/jquery.flexslider.js');}}
{{HTML::script('public/js/respond.min.js');}}
{{HTML::script('public/js/jflickrfeed.min.js');}}
{{HTML::script('public/js/cloud-zoom.1.0.2.js');}}

{{HTML::script('public/fancybox/jquery.fancybox-1.3.4.pack.js');}}
{{HTML::script('public/js/jquery.validate.js');}}
{{HTML::script('public/js/custom.js');}}
{{HTML::script('public/');}}
{{HTML::script('public/');}}



</body>

<!-- Mirrored from pxcreate.com/template/shopsimple/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Dec 2014 13:17:49 GMT -->
</html>