<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Decart | Home</title>

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="icon" href="assets/images/logo_basket.png" type="image/gif">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <link rel="stylesheet" href="assets/css/style.css">

        <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

        <script defer src="assets/js/slider.js"></script>

    </head>
    <body>
        <header class="header">
            <!-- Logo -->
            <div class="header__logo">
                <img class="header__logo-img" srcset="assets/images/logo-1x.png 1x, assets/images/logo-2x.png 2x" alt="logo">
            </div>

            <!-- SearchBar -->
            <div class="header__search-bar">
                <input class="header__search-input" type="text" placeholder="Search Items">
                <button class="header__search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>

            <!-- Quick Links -->
            <div class="header__links">
                <div class="header__links-img header__links-img-account">
                    <svg>
                        <use xlink:href="assets/SVG/sprite.svg#icon-user"></use>   <!-- Account LOGO -->
                    </svg>
                    <span class="header__notification header__notification--account">12</span>
                </div>
                <div class="header__links-img header__links-img-cart">
                    <svg>
                        <use xlink:href="assets/SVG/sprite.svg#icon-cart"></use>   <!-- CART LOGO -->
                    </svg>
                    <span class="header__notification">7</span>
                </div>
            </div>
        </header>

        <!-- Categories Nav -->
        <nav class="categories">
            <ul>
                <li class="categories__link"><a href="#">Electronis <i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                    <ul>
                        <div class="container">
                            <div class="row">
                                <div class="col categories-links"> <!-- COLUMN -->
                                    <li><a class="categories-links__heading" href="#">Mobiles </a></li>
                                    <li><a class="categories-links__link" href="#">Mi</a></li>
                                    <li><a class="categories-links__link" href="#">Realme</a></li>
                                    <li><a class="categories-links__link" href="#">Samsung</a></li>
                                    <li><a class="categories-links__link" href="#">OPPO</a></li>
                                    <li><a class="categories-links__link" href="#">Apple</a></li>
                                    <li><a class="categories-links__link" href="#">Honour</a></li>
                                    <li><a class="categories-links__link" href="#">Vivo</a></li>
                                    <li><a class="categories-links__link" href="#">Asus</a></li>
                                    <li><a class="categories-links__link" href="#">Poco X2</a></li>
                                    <li><a class="categories-links__link" href="#">Infinix Hot 9</a></li>
                                    <li><a class="categories-links__link" href="#">realme Narzo 10</a></li>
                                    <li><a class="categories-links__link" href="#">IQOO 3</a></li>
                                    <li><a class="categories-links__link" href="#">Motorola razr</a></li>
                                    <li><a class="categories-links__link" href="#">realme Narzo 10A</a></li>
                                    <li><a class="categories-links__link" href="#">Motorola g8 power lite</a></li>
                                    <li><a class="categories-links__link" href="#">iPhone 11</a></li>
                                    <li><a class="categories-links__link" href="#">iPhone 11 Pro</a></li>
                                </div>

                                <div class="col categories-links"> <!-- COLUMN -->
                                    <li><a class="categories-links__heading" href="#">Mobile Accessories</a></li>
                                    <li><a class="categories-links__link" href="#">Mobile Cases</a></li>   
                                    <li><a class="categories-links__link" href="#">Headphones & Headsets</a></li>   
                                    <li><a class="categories-links__link" href="#">Power Banks</a></li>   
                                    <li><a class="categories-links__link" href="#">Screenguards</a></li>   
                                    <li><a class="categories-links__link" href="#">Memory Cards</a></li>   
                                    <li><a class="categories-links__link" href="#">Smart Headphones</a></li>   
                                    <li><a class="categories-links__link" href="#">Mobile Cables</a></li>   
                                    <li><a class="categories-links__link" href="#">Mobile Chargers</a></li>   
                                    <li><a class="categories-links__link" href="#">Mobile Holders</a></li>   
                                    <li><a class="categories-links__heading" href="#">Smart Wearable Tech</a></li>   
                                    <li><a class="categories-links__link" href="#">Smart Watches</a></li>   
                                    <li><a class="categories-links__link" href="#">Smart Glasses (VR)</a></li>   
                                    <li><a class="categories-links__link" href="#">Smart Bands</a></li>   
                                    <li><a class="categories-links__heading" href="#">Health Care Appliances</a></li>   
                                    <li><a class="categories-links__link" href="#">Bp Monitors</a></li>
                                    <li><a class="categories-links__link" href="#">Weighing Scale</a></li>
                                </div>

                                <div class="col categories-links"> <!-- COLUMN -->
                                    <li><a class="categories-links__heading" href="#">Laptops</a></li>
                                    <li><a class="categories-links__link" href="#">Gaming Laptos</a></li>
                                    <li><a class="categories-links__heading" href="#">Desktop PCs</a></li>
                                    <li><a class="categories-links__heading" href="#">Gaming & Accessories</a></li>
                                    <li><a class="categories-links__heading" href="#">Computer Accessories</a></li>
                                    <li><a class="categories-links__link" href="#">External Hard Disks</a></li>
                                    <li><a class="categories-links__link" href="#">Pendrives</a></li>
                                    <li><a class="categories-links__link" href="#">Laptop Skins & Decals</a></li>
                                    <li><a class="categories-links__link" href="#">Laptop Bags</a></li>
                                    <li><a class="categories-links__link" href="#">Mouse</a></li>
                                    <li><a class="categories-links__heading" href="#">Computer Peripherals</a></li>
                                    <li><a class="categories-links__link" href="#">Printers & Ink Cartridges</a></li>
                                    <li><a class="categories-links__link" href="#">Monitors</a></li>
                                    <li><a class="categories-links__heading" href="#">Tablets</a></li>
                                    <li><a class="categories-links__link" href="#">Apple iPads</a></li>
                                </div>

                                <div class="col categories-links"> <!-- COLUMN -->
                                    <li><a class="categories-links__heading" href="#">Televisions</a></li>
                                    <li><a class="categories-links__heading" href="#">Speakers</a></li>
                                    <li><a class="categories-links__link" href="#">Home Audio Speakers</a></li>
                                    <li><a class="categories-links__link" href="#">Home Theatres</a></li>
                                    <li><a class="categories-links__link" href="#">Soundbars</a></li>
                                    <li><a class="categories-links__link" href="#">Bluetooth Speakers</a></li>
                                    <li><a class="categories-links__link" href="#">DTH Set Top Box</a></li>
                                    <li><a class="categories-links__heading" href="#">Smart Home Automation</a></li>
                                    <li><a class="categories-links__link" href="#">Google Nest</a></li>
                                    <li><a class="categories-links__heading" href="#">Camera</a></li>
                                    <li><a class="categories-links__link" href="#">DSLR & Mirrorless</a></li>
                                    <li><a class="categories-links__link" href="#">Compact & Bridge Cameras</a></li>
                                    <li><a class="categories-links__link" href="#">Sports & Action</a></li>
                                    <li><a class="categories-links__heading" href="#">Camera Accessories</a></li>
                                    <li><a class="categories-links__link" href="#">Lens</a></li>
                                    <li><a class="categories-links__link" href="#">Tripods</a></li>
                                    <li><a class="categories-links__heading" href="#">Network Components</a></li>
                                    <li><a class="categories-links__link" href="#">Routers</a></li>
                                </div>

                                <div class="col categories-links"> <!-- COLUMN -->
                                    <li><a class="categories-links__heading" href="#">Featured</a></li>
                                    <li><a class="categories-links__link" href="#">Flipkart SmartBuy</a></li>
                                    <li><a class="categories-links__link" href="#">Li-Polymer Power Banks</a></li>
                                    <li><a class="categories-links__link" href="#">Sony PS4 Pro & Slim</a></li>
                                    <li><a class="categories-links__link" href="#">Apple Products</a></li>
                                    <li><a class="categories-links__link" href="#">Microsoft Store</a></li>
                                    <li><a class="categories-links__link" href="#">Lenovo Phab Series</a></li>
                                    <li><a class="categories-links__link" href="#">JBL Speakers</a></li>
                                    <li><a class="categories-links__link" href="#">Philips</a></li>
                                    <li><a class="categories-links__link" href="#">Dr. Morepen</a></li>
                                    <li><a class="categories-links__link" href="#">Complete Mobile Protection</a></li>
                                    <li><a class="categories-links__link" href="#">Mobiles No Cost EMI</a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="categories__link"><a href="#">TVs & Appliances <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Men <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Women <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Baby & Kids <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Home & Furniture <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Sports, Books & More <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
                <li class="categories__link"><a href="#">Offer Zone <i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <section class="slider">
            <div class="slider__slide slider__slide--active" data-slide="1">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <i onclick="prevSlide()" class="fa fa-angle-left" aria-hidden="true"></i>
                        <i onclick="nextSlide()" class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="slider__slide" data-slide="2">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <i onclick="prevSlide()" class="fa fa-angle-left" aria-hidden="true"></i>
                        <i onclick="nextSlide()" class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="slider__slide" data-slide="3">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <i onclick="prevSlide()" class="fa fa-angle-left" aria-hidden="true"></i>
                        <i onclick="nextSlide()" class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            

            <div class="slider__slide" data-slide="4">
                <div class="slider__wrap">
                    <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                    <div class="slider__content">
                        <i onclick="prevSlide()" class="fa fa-angle-left" aria-hidden="true"></i>
                        <i onclick="nextSlide()" class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="slider__indicators"></div>
        </section>

        <section class="deals">
            <div class="container-center">
                <div class="deals__content">
                    <div class="deals__top">
                        <h3 class="deals__heading">Deals of the Day</h3>
                        <button class="deals__button">View All</button>
                    </div>
                    <div class="deals__body row">
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>
                        <div class="col deals__card">
                            <figure class="deals__card-image">
                                <img src="assets/images/product-2.jpg" alt="">
                            </figure>
                            <div class="deals__card-heading">
                                <span>PlayStation 5</span>
                            </div>
                            <div class="deals__card-offer">
                                <span>From &#8377;39,999</span>
                            </div>
                            <div class="deals__card-category">
                                <span>Games</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html>