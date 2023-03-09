<header>
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo", 'logo') ?>
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
            <div class="fs-96 fw-700 text-center pb-6">You won't find better deals!</div>
            <div class="row justify-content-center justify-content-lg-between gx-xl-8">
                <div class="col-md-6 col-lg-4">
                    <div class="deals_card">
                        <div class="card_inner">
                            <div class="top d-flex align-items-center">
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
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
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
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
                                <div class="d-flex justify-content-between align-items-center w-100 py-4">
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

<section class="brands">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="fs-64 lh-0_8 text-primary fw-700">We put homes first. Discover our other brands.</div>
            </div>
            <div class="col-lg-3">
                <div class="brands_card">
                    <?= renderImg('plumbfirst.png', 'lib') ?>
                    <div class="fs-18 text-tertiary py-4">
                        There for all your plumbing needs like blocked drains, hot water systems, and gas services.
                    </div>
                    <a href="#form" class="btn btn-primary text-white rounded-10 w-100 lh-1 fw-600 font-roboto fs-18">Learn more</a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="brands_card">
                    <?= renderImg('elecfirst.png', 'lib') ?>
                    <div class="fs-18 text-tertiary py-4">
                        What’s a home without power? ElecFirst offers all electrical services like lighting, switchboards and rewiring.
                    </div>
                    <a href="#form" class="btn btn-primary text-white rounded-10 w-100 lh-1 fw-600 font-roboto fs-18">Learn more</a>
                </div>
            </div>
            <div class="col-lg-3">
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
        <div class="container pt-9 pb-2 text-center">
            <a href="./" class="text-center">
                <?= renderImg("logo.png", "logo") ?>
            </a>
            <div class="row justify-content-center py-4">
                <div class="col-xl-10 text-center fs-72 fw-700 lh-1">Experience First Class Plumbing Services with PlumbFirst Melbourne</div>
            </div>
            <div class="row justify-content-center py-4">
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
                <div class="row align-items-center">
                    <div class="col-6 fs-36 fw-700">
                        Accredited &amp; Fully Licensed Plumbers
                    </div>
                    <div class="col">
                        <div class="row justify-content-between align-items-center">
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
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="./" class="text-center">
                                <?= renderImg("logo.png", "logo", 'logo') ?>
                            </a>
                        </div>
                        <div class="col-auto fs-24 fw-600">On-time Melbourne Plumbers or We Pay You $100!*</div>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="row align-items-center">
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
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto">
                    <span class="text-tertiary">Copyright <?= date('Y') ?></span>
                    <span class="text-secondary px-xl-5">/</span>
                    <span class="text-tertiary"><?= $site ?></span>
                    <span class="text-secondary px-xl-5">/</span>
                    <span class="text-tertiary">All Rights Reserved</span>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                        <?= renderImg("aiims.png", "logo") ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>