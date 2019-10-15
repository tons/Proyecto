<?php require_once('inc/config.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require_once("inc/head.php") ?>
  </head>
  <body>
    <div id="all">

        <?php require_once("inc/topheader.php"); ?>

        <section style="background: url('img/photogrid.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
            <div class="container">
                <!-- Carousel Start-->
                <div class="home-carousel">
                    <div class="dark-mask mask-primary"></div>
                    <div class="container">
                        <div class="homepage owl-carousel">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 text-right">
                                        <p><img src="img/logo.png" alt="" class="ml-auto"></p>
                                        <h1>Multipurpose responsive theme</h1>
                                        <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
                                    </div>
                                    <div class="col-md-7"><img src="img/template-homepage.png" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-7 text-center"><img src="img/template-mac.png" alt="" class="img-fluid"></div>
                                    <div class="col-md-5">
                                        <h2>46 HTML pages full of features</h2>
                                        <ul class="list-unstyled">
                                            <li>Sliders and carousels</li>
                                            <li>4 Header variations</li>
                                            <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                                            <li>+ 11 extra pages showing template features</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-5 text-right">
                                        <h1>Design</h1>
                                        <ul class="list-unstyled">
                                            <li>Clean and elegant design</li>
                                            <li>Full width and boxed mode</li>
                                            <li>Easily readable Roboto font and awesome icons</li>
                                            <li>7 preprepared colour variations</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-7"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                                    <div class="col-md-5">
                                        <h1>Easy to customize</h1>
                                        <ul class="list-unstyled">
                                            <li>7 preprepared colour variations.</li>
                                            <li>Easily to change fonts</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel End-->
            </div>
        </section>

        <section id="productoListHome">
            <div class="container">
                <div class="row bar">
                    <div class="col-md-12">
                        <p class="text-muted lead text-center">Los destacados de <?= date('F') ?></p>
                        <div class="products-big">
                            <div class="row products">
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                                            <p class="price">
                                                <del>$280</del> $143.00
                                            </p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon sale">SALE</div>
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                                            <p class="price">
                                                <del>$280</del> $143.00
                                            </p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon sale">SALE</div>
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">White Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">White Blouse Versace</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                        <div class="ribbon-holder">
                                            <div class="ribbon new">NEW</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="product">
                                        <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                                        <div class="text">
                                            <h3 class="h5"><a href="shop-detail.html">Fur coat</a></h3>
                                            <p class="price">$143.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 banner mb-small text-center"><a href="#"><img src="img/banner2.jpg" alt="" class="img-fluid"></a></div>
                        </div>
                        <div class="pages">
                            <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-white">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-desktop"></i></div>
                            <h3 class="h4">Webdesign</h3>
                            <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-print"></i></div>
                            <h3 class="h4">Print</h3>
                            <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-globe"></i></div>
                            <h3 class="h4">SEO and SEM</h3>
                            <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-lightbulb-o"></i></div>
                            <h3 class="h4">Consulting</h3>
                            <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-envelope-o"></i></div>
                            <h3 class="h4">Email Marketing</h3>
                            <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-user"></i></div>
                            <h3 class="h4">UX</h3>
                            <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar background-pentagon no-mb text-md-center">
            <div class="container">
                <div class="heading text-center">
                    <h2>Testimonials</h2>
                </div>
                <p class="lead">We have worked with many clients and we always like to hear they come out from the cooperation happy and satisfied. Have a look what our clients said about us.</p>
                <!-- Carousel Start-->
                <ul class="owl-carousel testimonials list-unstyled equal-height">
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="img/person-2.jpg" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                                <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="img/person-3.png" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="img/person-4.jpg" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="testimonial d-flex flex-wrap">
                            <div class="text">
                                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                            </div>
                            <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                                <div class="icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonial-info d-flex">
                                    <div class="title">
                                        <h5>John McIntyre</h5>
                                        <p>CEO, TransTech</p>
                                    </div>
                                    <div class="avatar"><img alt="" src="img/person-1.jpg" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Carousel End-->
            </div>
        </section>

        <section style="background: url(img/fixed-background-2.jpg) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="icon icon-outlined icon-lg"><i class="fa fa-file-code-o"></i></div>
                <h3 class="text-uppercase">Do you want to see more?</h3>
                <p class="lead">We have prepared for you more than 40 different HTML pages, including 5 variations of homepage.</p>
                <p class="text-center"><a href="-back-template/index2.html" class="btn btn-template-outlined-white btn-lg">See another homepage</a></p>
            </div>
        </section>

        <section class="bg-white bar">
            <div class="container">
                <div class="heading text-center">
                    <h2>From the blog</h2>
                </div>
                <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. <a href="-back-template/blog.html">Check our blog</a></p>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-4.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                            </div>
                            <div class="text">
                                <h4><a href="#">Fashion Now </a></h4>
                                <p class="author-category">By <a href="#">John Snow</a> in <a href="-back-template/blog.html">Webdesign</a></p>
                                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-3.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                            </div>
                            <div class="text">
                                <h4><a href="#">What to do</a></h4>
                                <p class="author-category">By <a href="#">John Snow</a> in <a href="-back-template/blog.html">Webdesign</a></p>
                                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-5.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                            </div>
                            <div class="text">
                                <h4><a href="#">5 ways to look awesome</a></h4>
                                <p class="author-category">By <a href="#">John Snow</a> in <a href="-back-template/blog.html">Webdesign</a></p>
                                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="home-blog-post">
                            <div class="image"><img src="img/portfolio-6.jpg" alt="..." class="img-fluid">
                                <div class="overlay d-flex align-items-center justify-content-center"><a href="#" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                            </div>
                            <div class="text">
                                <h4><a href="#">Fashion Now </a></h4>
                                <p class="author-category">By <a href="#">John Snow</a> in <a href="-back-template/blog.html">Webdesign</a></p>
                                <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p><a href="#" class="btn btn-template-outlined">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bar bg-gray">
            <div class="container">
                <div class="heading text-center">
                    <h2>Nuestros Clientes</h2>
                </div>
                <ul class="list-unstyled owl-carousel customers no-mb">
                    <li class="item"><img src="img/customer-1.png" alt="" class="img-fluid"></li>
                    <li class="item"><img src="img/customer-2.png" alt="" class="img-fluid"></li>
                    <li class="item"><img src="img/customer-3.png" alt="" class="img-fluid"></li>
                    <li class="item"><img src="img/customer-4.png" alt="" class="img-fluid"></li>
                    <li class="item"><img src="img/customer-5.png" alt="" class="img-fluid"></li>
                    <li class="item"><img src="img/customer-6.png" alt="" class="img-fluid"></li>
                </ul>
            </div>
        </section>

        <?php require_once("inc/banner-footer.php"); ?>

        <?php require_once("inc/footer.php"); ?>

  </body>
</html>
