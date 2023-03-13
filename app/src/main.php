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
                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-3">
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
                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-3 d-inline-flex">
                    <div>
                        <div class="fs-20 fw-600 lh-0_8">24/7</div>
                        <div class="fs-12 fw-600 lh-0_8">service</div>
                    </div>
                    <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                    <div class="fs-27 fw-600"><?= $phone_number ?></div>
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
    <?php $services = array(
        [
            'image' => 'blocked-drains.jpg',
            'title' => 'Blocked Drains',
            'embed' => 'https://www.youtube.com/embed/I-wmPXd5dyA'
        ],
        [
            'image' => 'gas-plumbing.jpg',
            'title' => 'Gas Plumbing',
            'embed' => 'https://www.youtube.com/embed/ZZENR5rjLdI'
        ],
        [
            'image' => 'hot-water-service.jpg',
            'title' => 'Hot Water Service',
            'embed' => 'https://www.youtube.com/embed/lPbSxlBIz2Q'
        ],
        // [
        //     'image' => 'pipe-relining.jpg',
        //     'title' => 'Pipe Relining',
        //     'embed' => ''
        // ],
        [
            'image' => 'emergency-plumbing.jpg',
            'title' => 'Emergency Plumbing',
            'embed' => 'https://www.youtube.com/embed/2Cb_bcdc350'
        ],
        [
            'image' => 'general-plumbing.jpg',
            'title' => 'General Plumbing',
            'embed' => 'https://www.youtube.com/embed/2Cb_bcdc350'
        ],
        [
            'image' => 'renovations.jpg',
            'title' => 'Renovations',
            'embed' => 'https://www.youtube.com/embed/nV2Myh1Aq1k'
        ]
    ); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-xxl-10">
                <h2 class="text-primary fs-48 fw-700 text-center">We've got <span class="text-secondary">ALL your plumbing needs</span> covered!</h2>
                <div class="text-center fs-18 pt-4 pb-5 pb-md-6 font-dmsans text-black fw-500">Our workmanship & dedication has propelled us in becoming a huge successful business with over 150 vehicles on the road daily & over 200 staff</div>
                <div class="row g-md-5 g-lg-4 g-xl-5" id="services_slider">
                    <?php foreach ($services as $key => $service) : ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="service_card">
                                <div class="thumbnail">
                                    <iframe id="video-<?= $key ?>" class="video-modal" src="<?= $key == 0 ? $service['embed'] . '?autoplay=1&mute=1' : $service['embed'] ?>" title="<?= $service['title'] ?>" autoplay="true" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
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
                        <h3 class="text-dark fs-72 fw-700 lh-1 mb-5 d-none d-lg-block">4500+ loved<br class="d-none d-xl-block"> their plumbfirst experience</h3>
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
                                <div class="col-auto">
                                    <p class="fs-96 lh-1 fw-700 mb-0"><?= $reviewn ?></p>
                                </div>
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
            <div class="text-center py-4 d-none d-md-inline-block">
                <a href="tel:<?= $phone_number ?>" class="btn btn-dark text-white rounded-3 fs-30 fw-600 px-4">Call <?= $phone_number ?></a>
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
                        <div class="col-auto">
                            <a href="https://www.facebook.com/plumbfirst/" target="_blank">
                                <svg width="10" height="17" viewBox="0 0 10 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.02293 16.5031L3 9.50305H0V6.50305H3V4.50305C3 1.80385 4.67151 0.503052 7.07938 0.503052C8.23277 0.503052 9.22406 0.588922 9.51294 0.627302V3.44812L7.84296 3.44888C6.53343 3.44888 6.27987 4.07115 6.27987 4.98429V6.50305H10L9 9.50305H6.27986V16.5031H3.02293Z" fill="#F05325" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="https://www.instagram.com/plumbfirstplumbers/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F05325" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="https://www.linkedin.com/company/plumbfirst/" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F05325" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="https://www.google.com/maps/place/PlumbFirst+Melbourne/@-38.005604,145.1315015,9z/data=!4m6!3m5!1s0x6ad688e952a5bdfb:0x29ccacffba0399dd!8m2!3d-38.005604!4d145.1315016!16s%2Fg%2F11c3ts913m" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F05325" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center justify-content-md-between align-items-center pt-5 pt-xl-3 gy-3 gy-md-0">
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
<div class="sticky-button text-center d-md-none">
    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-3">
        <div>
            <div class="fs-20 fw-600 lh-0_8">24/7</div>
            <div class="fs-12 fw-600 lh-0_8">service</div>
        </div>
        <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
        <div class="fs-20 fw-700"><?= $phone_number ?></div>
    </a>
</div>