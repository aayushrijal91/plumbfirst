<header>
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto fs-20 font-roboto text-grey">Melbourne wide local and reliable Plumbing Services.</div>
            <div class="col-auto">
                <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-1">
                    <div>
                        <div class="fs-20 fw-600 lh-0_8">24/7</div>
                        <div class="fs-12 fw-600 lh-0_8">service</div>
                    </div>
                    <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                    <div class="fs-20 fw-700"><?= $phone_number ?></div>
                </a>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <section class="banner">
        <div class="container">
            <div class="text-center pb-2">
                <?= renderImg('awards-banner.png', 'lib') ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-7">
                    <h1 class="fs-96 lh-1 fw-700 text-center py-4">On-Time Plumbers or We Pay You $100!*</h1>
                </div>
                <div class="col-12">
                    <div class="time_wrapper font-roboto fs-24 pt-2 pb-7 row justify-content-center">
                        <div class="col-auto"><span class="time" id="time">3:39:40pm</span></div>
                        <div class="col-auto">We're Open!</div>
                        <div class="col-auto position-relative">
                            <div class="pulse pulsating-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gx-3">
                <div class="col-auto">
                    <a href="#form" class="btn border btn-primary border-white rounded-0 text-white fs-18 px-6">Book Online</a>
                </div>
                <div class="col-auto">
                    <a href="tel:<?= $phone_number ?>" class="btn btn-secondary rounded-0 text-white py-3 px-4 gap-1">
                        <div>
                            <div class="fs-20 fw-600 lh-0_8">24/7</div>
                            <div class="fs-12 fw-600 lh-0_8">service</div>
                        </div>
                        <div class="animated-call-button"><?= renderImg('call-button.png', 'icons') ?></div>
                        <div class="fs-20 fw-700"><?= $phone_number ?></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner_guys"><?= renderImg('banner-tradies.png', 'lib') ?></div>
    </section>
</div>

<section class="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-primary fs-48 fw-700 text-center">We've got <span class="text-secondary">ALL your plumbing needs</span> covered!</h2>
                <div class="text-center fs-18 pt-4 pb-6 font-dmsans text-black fw-500">Our workmanship & dedication has propelled us in becoming a huge successful business with over 150 vehicles on the road daily & over 200 staff</div>
                <div class="row g-5">
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
                                <div class="fs-27 font-dmsans fw-700 pt-4 lh-1"><?= $service['title'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <section class="deals">
        <div class="container">
            <div class="fs-96 fw-700 text-center">You won't find better deals!</div>
            <div class="row justify-content-center justify-content-lg-between gx-xl-8">
                <div class="col-md-6 col-lg-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="px-4">
                                        <div class="fs-32 fw-700">Blocked Drains</div>
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
                <div class="col-md-6 col-lg-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="px-4">
                                        <div class="fs-32 fw-700 text-uppercase">
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
                <div class="col-md-6 col-lg-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="px-4">
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

<footer>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <div class="row gx-2 gx-md-3 text-white justify-content-center">
                    <div class="col-12 text-center pb-3 d-lg-none">
                        <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                            <?= renderImg("aiims.png", "logo") ?>
                        </a>
                    </div>
                    <div class="col-auto text-center">Copyright <?= date('Y') ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center"><?= $site ?></div>
                    <div class="col-auto">|</div>
                    <div class="col-auto text-center">All Rights Reserved</div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>