<header>
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-6 col-md-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo", 'logo') ?>
                </a>
            </div>
            <div class="col-auto fs-20 font-roboto text-grey d-none d-xl-block">Melbourne wide local and reliable Plumbing Services.</div>
            <div class="col-auto d-none d-md-block">
                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-1">
                    <div>
                        <div class="fs-20 fw-600 lh-0_8">24/7</div>
                        <div class="fs-12 fw-600 lh-0_8">service</div>
                    </div>
                    <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                    <div class="fs-27 fw-600"><?= $phone_number ?></div>
                </a>
            </div>
            <div class="col-auto d-md-none">
                <div class="time_wrapper font-roboto lh-1 fw-500 row text-primary justify-content-center">
                    <div class="col-auto position-relative">
                        <div class="pulse pulsating-circle"></div>
                    </div>
                    <div class="col">
                        <div class="time">3:39:40pm</div>
                        <div class="">We're Open!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <section class="banner">
        <div class="container">
            <div class="text-center font-roboto text-primary-light fw-300 fs-14 pb-5 d-lg-none">Melbourne wide local and reliable Plumbing Services.</div>
            <div class="text-center fs-20 font-roboto text-primary-light pb-5 d-none d-lg-block d-xl-none">Melbourne wide local and reliable Plumbing Services.</div>
            <div class="text-center pb-2 d-none d-md-block">
                <?= renderImg('awards-banner.png', 'lib') ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto d-md-none"><?= renderImg('pr-sm.png', 'lib') ?></div>
                <div class="col-xl-7">
                    <h1 class="heading fs-96 lh-1 fw-700 text-center py-3 py-md-4">On-Time Plumbers or We Pay You $100!*</h1>
                </div>
                <div class="col-12">
                    <div class="time_wrapper font-roboto fs-24 pt-2 pb-5 pb-md-7 row justify-content-center">
                        <div class="col-auto"><span class="time">3:39:40pm</span></div>
                        <div class="col-auto">We're Open!</div>
                        <div class="col-auto position-relative">
                            <div class="pulse pulsating-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center d-xl-none"><?= renderImg('van-sm.png', 'lib') ?></div>
            <div class="text-center d-none d-md-block">
                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-1 d-inline-flex">
                    <div>
                        <div class="fs-20 fw-600 lh-0_8">24/7</div>
                        <div class="fs-12 fw-600 lh-0_8">service</div>
                    </div>
                    <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                    <div class="fs-20 fw-700"><?= $phone_number ?></div>
                </a>
            </div>
        </div>
        <div class="banner_guys">
            <?= renderImg('banner-tradies.png', 'lib',  'd-none d-lg-block') ?>
            <?= renderImg('banner-guy-sm.png', 'lib', 'd-lg-none') ?>
        </div>
    </section>
</div>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-xxl-10">
                <h2 class="text-primary fs-48 fw-700 text-center">We've got <span class="text-secondary">ALL your plumbing needs</span> covered!</h2>
                <div class="text-center d-md-none pt-4">
                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-1 d-inline-flex">
                        <div>
                            <div class="fs-20 fw-600 lh-0_8">24/7</div>
                            <div class="fs-12 fw-600 lh-0_8">service</div>
                        </div>
                        <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                        <div class="fs-20 fw-700"><?= $phone_number ?></div>
                    </a>
                </div>
                <div class="text-center fs-18 pt-4 pb-5 pb-md-6 font-dmsans text-black fw-500">Our workmanship & dedication has propelled us in becoming a huge successful business with over 150 vehicles on the road daily & over 200 staff</div>
                <div class="row g-md-5 g-lg-4 g-xl-5" id="services_slider">
                    <?php $services = array(
                        [
                            'image' => 'blocked-drains.jpg',
                            'title' => 'Blocked Drains'
                        ],
                        [
                            'image' => 'gas-plumbing.jpg',
                            'title' => 'Gas Plumbing'
                        ],
                        [
                            'image' => 'hot-water-service.jpg',
                            'title' => 'Hot Water Service'
                        ],
                        [
                            'image' => 'pipe-relining.jpg',
                            'title' => 'Pipe Relining'
                        ],
                        [
                            'image' => 'emergency-plumbing.jpg',
                            'title' => 'Emergency Plumbing'
                        ],
                        [
                            'image' => 'general-plumbing.jpg',
                            'title' => 'General Plumbing'
                        ],
                        [
                            'image' => 'commercial-plumbing.jpg',
                            'title' => 'Commercial Plumbing'
                        ],
                        [
                            'image' => 'real-estate.jpg',
                            'title' => 'Real Estate &<br>Strata Plumbing'
                        ],
                        [
                            'image' => 'renovations.jpg',
                            'title' => 'Renovations'
                        ]
                    ); ?>

                    <?php foreach ($services as $service) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service_card">
                                <?= renderImg($service['image'], 'lib') ?>
                                <div class="title fs-27 font-dmsans fw-700 pt-4 lh-1"><?= $service['title'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="customers pt-md-5 position-relative mt-xxl-5 overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-9">
                <div class="row justify-content-between crow">
                    <div class="col-lg-5">
                        <h3 class="text-dark fs-72 fw-700 lh-1 mb-5 d-none d-lg-block">4500+ loved their plumbfirst experience</h3>
                        <div class="cta card rounded-0 border-0 mb-4 mb-md-5 bg-transparent ">
                            <div class="card-body p-0 position-relative">
                                <span class="tag fw-700 fs-36 lh-1 bg-primary text-white d-inline-block py-1 ms-4 ps-2 pe-3 position-relative"><?= date('Y') ?> Product Review Winner</span>
                            </div>
                        </div>
                        <h3 class="text-dark fs-72 fw-700 lh-1 text-center d-lg-none">4500+ loved their plumbfirst experience</h3>
                        <div class="text-center d-lg-none pt-4 pb-5">
                            <?= renderImg("cpr2.png", 'lib') ?>

                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="fs-96 fw-700 lh-1">4.5</div>
                                        <div>
                                            <svg width="41" height="33" viewBox="0 0 41 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.8753 0.575439H40.8753L30.2783 32.5754H0.27832L10.8753 0.575439Z" fill="#F05325" />
                                                <path d="M22.6067 13.9929L20.3381 7.26196L18.0694 13.9929H11.2634L16.8103 18.4787L14.6301 25.4112L20.3381 21.127L26.046 25.4112L23.8658 18.4787L29.4127 13.9929H22.6067Z" fill="white" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fs-12 fw-800">Customer Rating</div>
                                </div>
                                <div class="col-auto"><p class="fs-96 lh-1 fw-700 mb-0"><?= $reviewn ?></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto text-white d-none d-lg-block">
                        <div class="d-flex reviews h-100 cover">
                            <div class="me-2 left position-relative review">
                                <div class="position-relative z-1 p-4">
                                    <?= renderImg("cpr1.png", 'lib', 'mb-5') ?>
                                    <div class="ms-n4">
                                        <div class="d-flex align-items-center">
                                            <p class="fs-96 fw-700 lh-1 mb-0">4.5</p>
                                            <svg width="82" height="65" viewBox="0 0 82 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.5275 0.633545H81.5275L60.3335 64.6335H0.333496L21.5275 0.633545Z" fill="#F05325" />
                                                <path d="M44.9903 27.4685L40.453 14.0066L35.9157 27.4685H22.3037L33.3974 36.44L29.0371 50.3051L40.453 41.7367L51.8688 50.3051L47.5085 36.44L58.6022 27.4685H44.9903Z" fill="white" />
                                            </svg>
                                        </div>
                                        <p class="fs-24 fw-600">Customer Rating</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right position-relative review">
                                <div class="position-relative z-1 p-4">
                                    <?= renderImg("cpr2.png", 'lib', 'mb-5') ?>
                                    <div class="ms-n4">
                                        <p class="fs-96 lh-1 fw-700 mb-0"><?= $reviewn ?></p>
                                        <p class="fs-24 fw-600">Client Reviews</p>
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

<section class="testimonials">
    <div class="container-fluid px-0">
        <div class="slidert">
            <?php $testi = [
                [
                    'name' => 'Randy',
                    'heading' => 'Perfect plumbing job',
                    'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
                ],
                [
                    'name' => 'Phil',
                    'heading' => 'Gas Line replacement',
                    'content' => 'Alex K and his crew were on time, accurate and their attention to detail was strong. Wouldn’t hesitate to use Plumb a first again.<br>Albeit they’re not the cheapest, definitely trustworthy and you’ll know the job will be done to the highest quality.',
                ],
                [
                    'name' => 'Kevin',
                    'heading' => 'Excellent',
                    'content' => 'Dear Sir/Madam <br>Liam did a terrific job installing two cisterns and new pipes for the bathroom. He was cordial and polite on arrival and throughout the day, and I would not hesitate to recommend to friends, family and even enemies! Regards Satisfied Customer',
                ],
                [
                    'name' => 'Missy',
                    'heading' => 'Hot water system installed - Thanks Tai',
                    'content' => 'Tai finalised the installation of the new hot water system this morning. Clearly explained the duration of the work, professionally installed the system, and communicated with the team to follow up a few points to be followed up. Thanks!',
                ],
                [
                    'name' => 'Qball R.',
                    'heading' => 'Kitchen sink & water mains fixed quick. Thanks Blaine',
                    'content' => "After the first tradesman was not able to make it they sent out a second. He called to let us know what time he would be here and was spot on time. Blaine was very professional and quick having it all sorted in just over an hour. His attitude was great and I'd recommend him for anyone wanting the job done quickly and professionally.",
                ],
                [
                    'name' => 'Randy',
                    'heading' => 'Perfect plumbing job',
                    'content' => 'Had a burst waterline called plumbfirst came on time explained the problem and what had to be done. Tristan did a perfect job was very polite under trying conditions thanks.',
                ],
            ];
            $n = 0;
            foreach ($testi as $key => $value) {
                $n++;
            ?>
                <div>
                    <div class="<?= ($n % 2 ? 'mt-md-5 pt-md-5' : '') ?>">
                        <div class="card-o card rounded-0 mx-2 ">
                            <div class="card-header bg-white p-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <?php
                                    $ti = dirname(dirname(__FILE__));
                                    if (file_exists($ti . "/assets/images/lib/t" . $n . ".png")) {
                                        echo renderImg("t$n.png", 'lib', 'me-2');
                                    } else {
                                    ?>
                                        <p class="mb-0 h3 me-2"><span class="badge rounded-circle bg-primary text-white"><?= $value['name'][0] ?></span></p>
                                    <?php
                                    }
                                    ?>
                                    <p class="mb-0 h5 text-dark"><?= $value['name'] ?></p>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="fw-700 fs-14 text-tertiary text-center">User Score</div>
                                <div class="d-flex justify-content-center pt-2 pb-4"><?= renderImg("tstars.png", "icons") ?></div>
                                <div class="text-dark fs-24 text-center mb-4 fw-700">“<?= $value['heading'] ?>”</div>
                                <div class="font-roboto text-tertiary"><?= $value['content'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<div class="container-fluid">
    <section class="deals">
        <div class="container">
            <div class="fs-96 fw-700 text-center pb-5 pb-md-6 lh-1">You won't find better deals!</div>
            <div class="row justify-content-center justify-content-xl-between gy-5 gy-xl-0 gx-xxl-8">
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-32 fw-700 lh-1">Blocked Drains</div>
                                        <div class="fs-86 fw-700 lh-1">$77*</div>
                                        <div class="fs-22 fw-600 lh-1 pt-2">We do all types of drains</div>
                                    </div>
                                    <?= renderImg('blocked-pipe.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-700 rounded-15 text-center">Unblock your drains today!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-32 fw-700 text-uppercase lh-1">
                                            <span class="text-secondary">Easily</span> Save
                                        </div>
                                        <div class="fs-86 fw-700 lh-1">$100</div>
                                        <div class="fs-32 fw-700 lh-1 pt-2">On All New<br> Water Heaters*</div>
                                    </div>
                                    <?= renderImg('metro-heaters.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-700 rounded-15 text-center">All Water Heater Brands!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
                                    <div class="px-3 px-md-4">
                                        <div class="fs-86 fw-700 text-uppercase lh-1">
                                            Zero
                                        </div>
                                        <div class="fs-32 fw-700 lh-1 pt-2">Interest Payment<br> Plans Available<br> (no interest ever!)</div>
                                    </div>
                                    <?= renderImg('humm.png', 'lib') ?>
                                </div>
                            </div>
                            <div class="bg-dark text-capitalize fs-32 p-3 lh-1 fw-700 rounded-15 text-center">0% Interest Payment Plans</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="brands">
    <div class="container">
        <div class="row gy-5 gy-xl-0">
            <div class="col-md-6 col-xl-3 d-flex align-items-center">
                <div class="heading fs-64 lh-0_8 text-primary fw-700">We put homes first. Discover our other brands.</div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="brands_card">
                    <?= renderImg('plumbfirst.png', 'lib') ?>
                    <div class="fs-18 text-tertiary py-4">
                        There for all your plumbing needs like blocked drains, hot water systems, and gas services.
                    </div>
                    <a href="#form" class="btn btn-primary text-white rounded-10 w-100 lh-1 fw-600 font-roboto fs-18">Learn more</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="brands_card">
                    <?= renderImg('elecfirst.png', 'lib') ?>
                    <div class="fs-18 text-tertiary py-4">
                        What’s a home without power? ElecFirst offers all electrical services like lighting, switchboards and rewiring.
                    </div>
                    <a href="#form" class="btn btn-primary text-white rounded-10 w-100 lh-1 fw-600 font-roboto fs-18">Learn more</a>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="brands_card">
                    <?= renderImg('comfyfirst.png', 'lib') ?>
                    <div class="fs-18 text-tertiary py-4">
                        Turn up the heat or chill down with ComfyFirst. Offering air conditioning, heating, repairs and maintenance services.
                    </div>
                    <a href="#form" class="btn btn-primary text-white rounded-10 w-100 lh-1 fw-600 font-roboto fs-18">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <footer>
        <div class="container pt-5 pt-md-7 pt-lg-9 pb-2 text-center">
            <div class="row justify-content-center">
                <div class="col-9 col-md-6 col-lg-5 col-xl-12">
                    <a href="./" class="text-center">
                        <?= renderImg("logo.png", "logo") ?>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-xl-10 text-center heading fs-72 fw-700 lh-1">Experience First Class Plumbing Services with PlumbFirst Melbourne</div>
            </div>
            <div class="row justify-content-center py-4 d-none d-md-flex">
                <div class="col-auto">
                    <a href="tel:<?= $phone_number ?>" class="btn btn-dark text-white rounded-3 fs-30 fw-600 px-4">Call <?= $phone_number ?></a>
                </div>
                <div class="col-auto">
                    <a href="#form" class="btn btn-secondary text-white rounded-3 fs-30 fw-600 px-5">Book Online</a>
                </div>
            </div>
        </div>
        <div class="accreditation">
            <div class="container">
                <div class="row align-items-center gy-5 gy-xl-0">
                    <div class="col-xl-6 heading fs-36 fw-700 text-center text-xl-start lh-1">
                        Accredited &amp; Fully Licensed Plumbers
                    </div>
                    <div class="col">
                        <div class="row justify-content-between align-items-center" id="license_slider">
                            <div class="col-auto"><?= renderImg('ausstandard.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('strata.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('best-handyman.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('ebix.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('master-plumber.png', 'logo') ?></div>
                            <div class="col-auto"><?= renderImg('seniors-card.png', 'logo') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-3 pb-4">
            <div class="row justify-content-between align-items-center gy-3 gy-xl-0">
                <div class="col-auto col-lg-12 col-xl-auto">
                    <div class="row justify-content-center align-items-center gy-3 gy-md-0">
                        <div class="col-5 col-md-auto">
                            <a href="./" class="text-center">
                                <?= renderImg("logo.png", "logo", 'logo') ?>
                            </a>
                        </div>
                        <div class="col-12 col-xl-auto tagline fs-24 fw-600 text-center">On-time Melbourne Plumbers or We Pay You $100!*</div>
                    </div>
                </div>

                <div class="col-xl-auto font-roboto">
                    <div class="row align-items-center justify-content-between justify-content-md-center">
                        <div class="col-auto d-flex gap-2 align-items-center">
                            <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.02293 16.5031L3 9.50305H0V6.50305H3V4.50305C3 1.80385 4.67151 0.503052 7.07938 0.503052C8.23277 0.503052 9.22406 0.588922 9.51294 0.627302V3.44812L7.84296 3.44888C6.53343 3.44888 6.27987 4.07115 6.27987 4.98429V6.50305H10L9 9.50305H6.27986V16.5031H3.02293Z" fill="#F05325" />
                            </svg>
                            @plumbfirst
                        </div>
                        <div class="col-auto d-flex gap-2 align-items-center">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8 3.30305C15.6 2.00305 15 1.10305 13.6 0.903052C11.4 0.503052 8 0.503052 8 0.503052C8 0.503052 4.6 0.503052 2.4 0.903052C1 1.10305 0.3 2.00305 0.2 3.30305C0 4.60305 0 6.50305 0 6.50305C0 6.50305 0 8.40305 0.2 9.70305C0.4 11.0031 1 11.9031 2.4 12.1031C4.6 12.5031 8 12.5031 8 12.5031C8 12.5031 11.4 12.5031 13.6 12.1031C15 11.8031 15.6 11.0031 15.8 9.70305C16 8.40305 16 6.50305 16 6.50305C16 6.50305 16 4.60305 15.8 3.30305ZM6 9.50305V3.50305L11 6.50305L6 9.50305Z" fill="#F05325" />
                            </svg>
                            @plumberfirstmelbourne
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-between align-items-center pt-5 pt-xl-0 gy-3 gy-md-0">
                <div class="col-auto font-roboto text-tertiary copyright">
                    <span>Copyright <?= date('Y') ?></span>
                    <span class="text-secondary px-2 px-xl-5">/</span>
                    <span><?= $site ?></span>
                    <span class="text-secondary px-2 px-xl-5">/</span>
                    <span>All Rights Reserved</span>
                </div>
                <div class="col-auto">
                    <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                        <?= renderImg("aiims.png", "logo") ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>