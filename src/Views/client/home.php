

<section class="hero-section set-bg" data-setbg="/giaodien_USER/theplaza-master/img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="/giaodien_USER/theplaza-master/img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2023</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-left"><img src="/giaodien_USER/theplaza-master/img/slider-img-removebg-preview (1).png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2023</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
<section class="intro-section spad pb-0">
    <div class="section-title">
        <h2>pemium products</h2>
        <p>We recommend</p>
    </div>
    <div class="intro-slider">
        <ul class="slidee">
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="/giaodien_USER/theplaza-master/img/intro/1.jpg" alt="#">
                    </figure>
                    <div class="product-info">
                        <h5>Pink Sunglasses</h5>
                        <p>$319.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="/giaodien_USER/theplaza-master/img/intro/2.jpg" alt="#">
                    </figure>
                    <div class="product-info">
                        <h5>Black Nighty</h5>
                        <p>$319.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="/giaodien_USER/theplaza-master/img/intro/3.jpg" alt="#">
                        <div class="bache">NEW</div>
                    </figure>
                    <div class="product-info">
                        <h5>Yellow Sholder bag</h5>
                        <p>$319.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="/giaodien_USER/theplaza-master/img/intro/4.jpg" alt="#">
                    </figure>
                    <div class="product-info">
                        <h5>Yellow Sunglasses</h5>
                        <p>$319.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="intro-item">
                    <figure>
                        <img src="/giaodien_USER/theplaza-master/img/intro/5.jpg" alt="#">
                    </figure>
                    <div class="product-info">
                        <h5>Black Sholder bag</h5>
                        <p>$319.50</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="scrollbar">
            <div class="handle">
                <div class="mousearea"></div>
            </div>
        </div>
    </div>
</section>
<!-- Intro section end -->





<!-- Product section -->
<section class="product-section spad">
    <div class="container">
        <h1>top 10 san pham</h1>

        <div class="row" id="product-filter">
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <?php foreach ($getLatestLimit10 as $item) : ?>
                        <figure>
                            <img src="<?= $item['p_img'] ?>" alt="">
                            <div class="pi-meta">
                                <div class="pi-m-left">
                                    <a href="/detail?id=<?=$item['p_id']?>"><img src="/giaodien_USER/theplaza-master/img/icons/eye.png" alt=""></a>
                                    <p>quick view</p>
                                </div>
                                <div class="pi-m-right">
                                    <img src="/giaodien_USER/theplaza-master/img/icons/heart.png" alt="">
                                    <p>save</p>
                                </div>
                            </div>
                        </figure>
                        <div class="product-info">
                            <h6><a href="/detail?id=<?=$item['p_id']?>"><?= $item['p_name'] ?></a></h6>
                            <p><?= number_format($item['p_price']) ?></p>
                            <form action="/addToCart" method="POST">
                                <input type="hidden" name="price" value="<?= $item['p_price'] ?>">
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="id" value="<?= $item['p_id'] ?>">
                                <button type="submit" class="site-btn btn-line">ADD TO CART</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>



        </div>
    </div>
</section>

<!-- Product section end -->