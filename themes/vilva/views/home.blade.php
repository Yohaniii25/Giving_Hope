<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Giving Hope - Making a difference, one step at a time</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/givinghope.css" rel="stylesheet">
   

</head>

<body id="section_1">

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                        No. 11, Wijerama Mawatha, Colombo 07, Sri Lanka
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            info@givinghope.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="images/logo.png" class="logo img-fluid" alt="Giving Hope Charity">
                <span>
                    Giving Hope Charity
                    <small>Non-profit Organization</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Causes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Volunteer</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                            <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                        </ul>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Testimonial</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contact</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="{{ route('donate') }}">Donate</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide/volunteer-helping-with-donation-box.jpg" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Giving Hope</h1>

                                        <p>Making a difference, one step at a time</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/volunteer-selecting-organizing-clothes-donations-charity.jpg" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Non-profit</h1>

                                        <p>A small act of kindness can change the world</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="images/slide/medium-shot-people-collecting-donations.jpg" class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>Humanity</h1>

                                        <p>Building a better world, one community at a time</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to Giving Hope Charity</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('donate') }}" class="d-block">
                                <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Become a <strong>volunteer</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('donate') }}" class="d-block">
                                <img src="images/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Caring</strong> Earth</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('donate') }}" class="d-block">
                                <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">Make a <strong>Donation</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{ route('donate') }}" class="d-block">
                                <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                        <img src="images/group-people-volunteering-foodbank-poor-people.jpg" class="custom-text-box-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-text-box">
                            <h2 class="mb-2">Our Story</h2>

                            <h5 class="mb-3">Giving Hope Charity, Non-Profit Organization</h5>

                            <p class="mb-0">Giving Hope Charity is a nonprofit organization dedicated to improving the lives of those in need by providing essential resources and support. We strive to empower individuals and communities to break the cycle of poverty and build a brighter future. Our programs focus on education, health care, and homelessness support. With your help, we can make a real difference in the lives of those who need it most.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box mb-lg-0">
                                    <h5 class="mb-3">Our Mission</h5>

                                    <p>Giving Hope Charity is to empower individuals and communities to break the cycle of poverty and build a brighter future</p>

                                    <!-- <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Charity Theme
                                            </li>

                                            <li class="custom-list-item d-flex">
                                                <i class="bi-check custom-text-box-icon me-2"></i>
                                                Semantic HTML
                                            </li>
                                        </ul> -->
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                    <div class="counter-thumb">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="1058" data-speed="1000"></span>
                                            <span class="counter-number-text"></span>
                                        </div>

                                        <span class="counter-text">Donations</span>
                                    </div>

                                    <div class="counter-thumb mt-4">
                                        <div class="d-flex">
                                            <span class="counter-number" data-from="1" data-to="500" data-speed="1000"></span>

                                        </div>

                                        <span class="counter-text">Volunteers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">Sandy Chan</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">Co-Founding Partner</p>

                            <p>The founder of Giving Hope Charity, Sarah Smith, is a driven and compassionate individual who has dedicated her life to helping those in need.
                                With a background in nonprofit management and a strong passion for social justice,
                                Sarah founded Giving Hope Charity with the goal of providing essential resources and support to individuals and communities struggling with poverty.</p>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="cta-section section-padding section-bg">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-5 col-12 ms-auto">
                        <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
                    </div>

                    <div class="col-lg-5 col-12">
                        <a href="#" class="me-4">Make a donation</a>

                        <a href="#section_4" class="custom-btn btn smoothscroll">Become a volunteer</a>
                    </div>

                </div>
            </div>
        </section> -->


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Our Causes</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/group-african-kids-paying-attention-class.jpg" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Children Education</h5>

                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $18,500
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $32,000
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="images/causes/poor-child-landfill-looks-forward-with-hope.jpg" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Community Center</h5>

                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus tempor</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $27,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $60,000
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="images/causes/african-woman-pouring-water-recipient-outdoors.jpg" class="custom-block-image img-fluid" alt="">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">Supply drinking water</h5>

                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0">
                                            <strong>Raised:</strong>
                                            $84,600
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>Goal:</strong>
                                            $100,000
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="volunteer-section section-padding" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="text-white mb-4">Volunteer</h2>

                        <!-- <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                            <h3 class="mb-4">Become a volunteer today</h3>

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="Jack Doe" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <input type="text" name="volunteer-subject" id="volunteer-subject" class="form-control" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="input-group input-group-file">
                                        <input type="file" class="form-control" id="inputGroupFile02">

                                        <label class="input-group-text" for="inputGroupFile02">Upload your CV</label>

                                        <i class="bi-cloud-arrow-up ms-auto"></i>
                                    </div>
                                </div>
                            </div>

                            <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                            <button type="submit" class="form-control">Submit</button>
                        </form> -->
                        <h3 class="mb-4">Become a volunteer today</h3>

                        <h6 class="mb-4">The requirements to be a volunteer</h6>

                        <ul class="custom-list mt-2">
                            <li class="custom-list-item d-flex">
                                <i class=" bi-check custom-text-box-icon me-2"></i>
                                <p class="text-white">Application
                                <p>
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class=" bi-check custom-text-box-icon me-2"></i>
                                <p class="text-white">ID and proof of address
                                <p>
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class=" bi-check custom-text-box-icon me-2"></i>
                                <p class="text-white">Training certificate
                                <p>
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class=" bi-check custom-text-box-icon me-2"></i>
                                <p class="text-white">Volunteer agreement
                                <p>
                            </li>
                            <li class="custom-list-item d-flex">
                                <i class=" bi-check custom-text-box-icon me-2"></i>
                                <p class="text-white">Reference letter
                                <p>
                            </li>
                        </ul>
                        <h6 class="text-white">Changing the world, one act of kindness at a time</h6>
                    </div>


                    <div class="col-lg-6 col-12">
                        <img src="images/smiling-casual-woman-dressed-volunteer-t-shirt-with-badge.jpg" class="volunteer-image img-fluid" alt="">

                        <div class="custom-block-body text-center">
                            <h4 class="text-white mt-lg-3 mb-lg-3">About Volunteering</h4>

                            <p class="text-white">Volunteering is the act of giving time and energy to help others without the expectation of financial compensation. It can take many forms, including working with a charitable organization, helping out in a community, or providing services to those in need</p>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- <section class="news-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 mb-5">
                        <h2>Latest News</h2>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div class="news-block">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg" class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Lifestyle,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Clothing Donation
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 12, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            32 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban area</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional charity theme based on Bootstrap</p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block mt-3">
                            <div class="news-block-top">
                                <a href="news-detail.html">
                                    <img src="images/news/medium-shot-people-collecting-foodstuff.jpg" class="news-image img-fluid" alt="">
                                </a>

                                <div class="news-category-block">
                                    <a href="#" class="category-block-link">
                                        Food,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Donation,
                                    </a>

                                    <a href="#" class="category-block-link">
                                        Caring
                                    </a>
                                </div>
                            </div>

                            <div class="news-block-info">
                                <div class="d-flex mt-2">
                                    <div class="news-block-date">
                                        <p>
                                            <i class="bi-calendar4 custom-icon me-1"></i>
                                            October 20, 2036
                                        </p>
                                    </div>

                                    <div class="news-block-author mx-5">
                                        <p>
                                            <i class="bi-person custom-icon me-1"></i>
                                            By Admin
                                        </p>
                                    </div>

                                    <div class="news-block-comment">
                                        <p>
                                            <i class="bi-chat-left custom-icon me-1"></i>
                                            35 Comments
                                        </p>
                                    </div>
                                </div>

                                <div class="news-block-title mb-2">
                                    <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>
                                </div>

                                <div class="news-block-body">
                                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus elementum, tempor risus vel, condimentum orci</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mx-auto">
                        <form class="custom-form search-form" action="#" method="get" role="form">
                            <input name="search" type="search" class="form-control" id="search" placeholder="Search" aria-label="Search">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>

                        <h5 class="mt-5 mb-3">Recent news</h5>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 16, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="news-block news-block-two-col d-flex mt-4">
                            <div class="news-block-two-col-image-wrap">
                                <a href="news-detail.html">
                                    <img src="images/news/close-up-happy-people-working-together.jpg" class="news-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="news-block-two-col-info">
                                <div class="news-block-title mb-2">
                                    <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>
                                </div>

                                <div class="news-block-date">
                                    <p>
                                        <i class="bi-calendar4 custom-icon me-1"></i>
                                        October 24, 2036
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="category-block d-flex flex-column">
                            <h5 class="mb-3">Categories</h5>

                            <a href="#" class="category-block-link">
                                Drinking water
                                <span class="badge">20</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Food Donation
                                <span class="badge">30</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Children Education
                                <span class="badge">10</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Poverty Development
                                <span class="badge">15</span>
                            </a>

                            <a href="#" class="category-block-link">
                                Clothing Donation
                                <span class="badge">20</span>
                            </a>
                        </div>

                        <div class="tags-block">
                            <h5 class="mb-3">Tags</h5>

                            <a href="#" class="tags-block-link">
                                Donation
                            </a>

                            <a href="#" class="tags-block-link">
                                Clothing
                            </a>

                            <a href="#" class="tags-block-link">
                                Food
                            </a>

                            <a href="#" class="tags-block-link">
                                Children
                            </a>

                            <a href="#" class="tags-block-link">
                                Education
                            </a>

                            <a href="#" class="tags-block-link">
                                Poverty
                            </a>

                            <a href="#" class="tags-block-link">
                                Clean Water
                            </a>
                        </div>

                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <h5 class="mb-4">Newsletter Form</h5>

                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required>

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section> -->

        <!-- Starting the testimonial section -->

        <section class="testimonial-section section-padding section-bg" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="mb-lg-3">Happy Customers</h2>

                        <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">The staff are dedicated and passionate about their mission, and it's been an honor to be a part</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Maria</span>, Boss</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Their assistance with housing and job training has allowed me to get back on my feet</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Thomas</span>, Partner</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Their organization is well-run and effective in addressing the needs of our most vulnerable citizens</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Jane</span>, Advisor</small>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h4 class="carousel-title">Their programs are well-designed and have a real impact on the lives of those they serve</h4>

                                        <small class="carousel-name"><span class="carousel-name-title">Bob</span>, Entrepreneur</small>
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                        <img src="images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                        <img src="images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                        <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>

                                    <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                        <img src="images/avatar/studio-portrait-emotional-happy-funny.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                    </li>
                                </ol>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Ending the testimonial section -->

        <!-- Starting the contact us content -->

        <section class="contact-section section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>Get in touch</h2>

                            <div class="contact-image-wrap d-flex flex-wrap">
                                <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg" class="img-fluid avatar-image" alt="">

                                <div class="d-flex flex-column justify-content-center ms-3">
                                    <p class="mb-0">Clara Barton</p>
                                    <p class="mb-0"><strong>HR & Office Manager</strong></p>
                                </div>
                            </div>

                            <div class="contact-info">
                                <h5 class="mb-3">Contact Information</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2"></i>
                                    No. 11, Wijerama Mawatha, Colombo 07, Sri Lanka
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2"></i>

                                    <a href="tel: 120-240-9600">
                                        011-240-9600
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2"></i>

                                    <a href="mailto:info@yohanii725@gmail.com">
                                        donate@charity.org
                                    </a>
                                </p>

                                <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Contact form</h2>

                            <p class="mb-4">Or, you can just send an email:
                                <a href="#">info@givinghope.com</a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Jack" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jackdoe@gmail.com" required>

                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                            <button type="submit" class="form-control">Send Message</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

        <!-- ending the contact us content -->
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/logo.png" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Causes</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Volunteer</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Testimonial</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="tel: 120-240-9600" class="site-footer-link">
                            011-240-9600
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            info@givinghope.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        No. 11, Wijerama Mawatha, Colombo 07, Sri Lanka
                    </p>

                    <a href="#" class="custom-btn btn mt-3">Get Direction</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">Copyright © 2023 <a href="#">Giving Hope</a> Charity Org.
                            Design: <a href="#" target="_blank">YohaniA</a></p>
                    </div>

                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <script>
            // Get the button
            let mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>