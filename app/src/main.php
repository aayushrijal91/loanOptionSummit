<header>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center gy-4">
            <div class="col-auto">
                <a href="./">
                    <?= renderImg("logo.png", "logo") ?>
                </a>
            </div>
            <div class="col-auto">
                <div class="font-articulat text-white fs-17">More Options. <span class="fw-900 font-articulat-heavy">More You</span><span class="text-secondary">.</span></div>
            </div>
        </div>
    </div>
</header>

<section class="banner pt-4">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6 py-4 text-center text-md-start">
                <div class="fs-33 fw-900 lh-1">Meet Julian & Robbie<span class="text-secondary">.</span></div>
                <div class="pt-2 pb-4 fs-11">Come find us at the Better Business Summit</div>
                <div class=""><?= renderImg('summit-awards.png', 'lib') ?></div>
            </div>
            <div class="col-md-auto">
                <?= renderImg('julian-and-robbie.png', 'lib', 'w-100') ?>
            </div>
        </div>
    </div>
</section>

<section class="partner">
    <div class="container">
        <div class="row justify-content-center align-items-center gy-5">
            <div class="col">
                <div class="text-primary fw-900 fs-36 lh-1 text-center text-md-start">Become a LoanOptions Partner<span class="text-secondary">.</span></div>
            </div>
            <div class="col-auto"><?= renderImg('superhero.png', 'lib') ?></div>
        </div>
    </div>
</section>

<section class="affiliate-partner">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe class="video-modal" src="https://www.youtube.com/embed/" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="affiliate-partner-img">
            <?= renderImg('affiliate-partner.png', 'lib') ?>
            <button type="button" class="btn btn-primary play-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?= renderImg('play-button.png', 'lib') ?></button>
        </div>
    </div>
</section>

<section class="seamless-integration">
    <div class="container">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-auto"><?= renderImg('seamless-integration.png', 'lib') ?></div>
            <div class="col-md">
                <div class="fw-900 fs-20 pb-2 lh-1">Seamless Integration<span class="text-secondary">.</span></div>
                <div class="fs-12">
                    <p class="pb-2">LoanOptions has launched our white labeled application journey. We can deploy this loan application journey on any website (even if your current one is old) and in any colours that suit your brand.</p>
                    <div>This seamless low code integration uses AI to match clients with more than 68 lenders to get them the best deal. Specialising in car loans, personal loans, business loans and equipment finance.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="implementation">
    <div class="container">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-md order-2 order-md-1">
                <div class="text-quartinary fw-900 fs-17 pb-2">It Can Be Yours Today<span class="text-secondary">.</span></div>
                <div class="fs-12 fw-500">
                    <p class="pb-2">Implementation is seamless and it takes <span class="fw-700">less than a day</span>. Your company can offer the same transparent quoting tools and matching technology embedded natively on your website!</p>
                    <div>We got so sick of seeing boring “enquire now” finance enquiry forms that lead nowhere and fail to offer the customer any real value from our dinosaur industry.</div>
                </div>
            </div>
            <div class="col-auto order-1 order-md-2"><?= renderImg('implementation.png', 'lib') ?></div>
        </div>
    </div>
</section>

<section class="solution">
    <div class="container">
        <div class="fs-20 fw-900 pb-4">With This Solution You Can<span class="text-secondary">...</span></div>
        <div class="row gx-2 gy-4">
            <div class="col-6 col-md-3">
                <?= renderImg('solution-1.png', 'lib', 'w-100') ?>
                <div class="pt-3 px-2 text-center fs-9 lh-1 fw-900">Capture Enquiries with Verified Phone Numbers</div>
            </div>
            <div class="col-6 col-md-3">
                <?= renderImg('solution-2.png', 'lib', 'w-100') ?>
                <div class="pt-3 px-2 text-center fs-9 lh-1 fw-900">Capture Full<br> Applications</div>
            </div>
            <div class="col-6 col-md-3">
                <?= renderImg('solution-3.png', 'lib', 'w-100') ?>
                <div class="pt-3 px-2 text-center fs-9 lh-1 fw-900">Capture Supporting Documents</div>
            </div>
            <div class="col-6 col-md-3">
                <?= renderImg('solution-4.png', 'lib', 'w-100') ?>
                <div class="pt-3 px-2 text-center fs-9 lh-1 fw-900">Have All Compliance Documents Digitally Signed</div>
            </div>
        </div>
        <div class="fs-20 fw-900 pt-4 text-end">Completely Seamless<span class="text-secondary">...</span></div>
    </div>
</section>

<section class="for-whom">
    <div class="container">
        <div class="row justify-content-center align-items-center gx-md-5 gy-4">
            <div class="col-md order-2 order-md-1">
                <div class="fs-20 fw-900 pb-3">Who is this for?</div>
                <div class="fs-12">
                    <p class="">The customer’s benefit from the technology, but this is aimed at helping Brokers, lead generators, equipment vendors, medical practices, dealerships, accountants, financial planners, travel agencies and anyone else who needs to offer their clients competitive and transparent loan options.</p>
                    <div>Due to the size & scale of our lending panel, it also provides other asset finance brokers additional lenders with whom they may not hold an accreditation with. It allows them to capture a lead or an entire application from start to finish including supporting documentation and digitally signed documents.</div>
                    <a href="#" class="btn d-inline-flex btn-secondary rounded-pill text-white fw-700 px-4 py-3 mt-4 fs-11">Become A Partner Today</a>
                </div>
            </div>
            <div class="col-auto order-1 order-md-2"><?= renderImg('sb.png', 'lib') ?></div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class=""><?= renderImg('logo.png', 'logo') ?></div>
        <div class="text-light fs-11 py-5">
            <div>Building F, Level 4, Suite 2/1 Homebush Bay Drive,</div>
            <div>Rhodes NSW 2138</div>
        </div>
        <div class="fs-11">
            <div class="fs-600 text-white">More options. More you.</div>
            <div class="text-primary-light">Compare realistic loan options with powerful data & AI mathcing<br> technology.</div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-auto">
                <a href="#" class="">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="24.2834" stroke="#C8A9F9" stroke-width="0.933201" />
                        <path d="M23.5668 33.25L23.5446 26.4559H20.6328V23.5441H23.5446V21.6029C23.5446 18.9831 25.1669 17.7206 27.504 17.7206C28.6234 17.7206 29.5856 17.8039 29.866 17.8412V20.579L28.2451 20.5798C26.9741 20.5798 26.728 21.1837 26.728 22.07V23.5441H30.3387L29.3681 26.4559H26.728V33.25H23.5668Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="col-auto">
                <a href="#" class="">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="24.2834" stroke="#C8A9F9" stroke-width="0.933201" />
                        <path d="M33.2501 20.147C32.6678 20.4382 32.0854 20.5353 31.406 20.6323C32.0854 20.2441 32.5707 19.6618 32.7648 18.8853C32.1825 19.2735 31.5031 19.4676 30.7266 19.6618C30.1442 19.0794 29.2707 18.6912 28.3972 18.6912C26.7472 18.6912 25.2913 20.147 25.2913 21.8941C25.2913 22.1853 25.2913 22.3794 25.3884 22.5735C22.7678 22.4765 20.3413 21.2147 18.7884 19.2735C18.4972 19.7588 18.4001 20.2441 18.4001 20.9235C18.4001 21.9912 18.9825 22.9617 19.856 23.5441C19.3707 23.5441 18.8854 23.35 18.4001 23.1559C18.4001 24.7088 19.4678 25.9706 20.9236 26.2617C20.6325 26.3588 20.3413 26.3588 20.0501 26.3588C19.856 26.3588 19.6619 26.3588 19.4678 26.2617C19.856 27.5235 21.0207 28.4941 22.4766 28.4941C21.4089 29.3676 20.0501 29.8529 18.4972 29.8529C18.206 29.8529 18.0119 29.8529 17.7207 29.8529C19.1766 30.7265 20.8266 31.3088 22.5736 31.3088C28.3972 31.3088 31.6001 26.4559 31.6001 22.2823C31.6001 22.1853 31.6001 21.9912 31.6001 21.8941C32.2795 21.4088 32.8619 20.8265 33.2501 20.147Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="col-auto">
                <a href="#" class=""><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="24.2834" stroke="#C8A9F9" stroke-width="0.933201" />
                        <path d="M25.4854 19.1192C27.5586 19.1192 27.8041 19.1279 28.6233 19.1648C29.1156 19.1707 29.6031 19.2613 30.0646 19.4327C30.4022 19.5574 30.7074 19.7564 30.9576 20.0151C31.2162 20.2653 31.4152 20.5704 31.5399 20.908C31.7113 21.3695 31.8019 21.8571 31.8078 22.3493C31.8447 23.1685 31.8534 23.417 31.8534 25.4872C31.8534 27.5575 31.8447 27.806 31.8078 28.6251C31.8019 29.1174 31.7113 29.605 31.5399 30.0665C31.411 30.4014 31.2133 30.7056 30.9595 30.9594C30.7057 31.2132 30.4015 31.4109 30.0666 31.5398C29.6051 31.7112 29.1175 31.8018 28.6253 31.8077C27.8061 31.8446 27.5576 31.8533 25.4874 31.8533C23.4171 31.8533 23.1686 31.8446 22.3494 31.8077C21.8572 31.8018 21.3696 31.7112 20.9081 31.5398C20.5706 31.4151 20.2654 31.2161 20.0152 30.9575C19.7566 30.7073 19.5575 30.4021 19.4328 30.0645C19.2615 29.603 19.1709 29.1155 19.1649 28.6232C19.1281 27.804 19.1193 27.5556 19.1193 25.4853C19.1193 23.415 19.1281 23.1666 19.1649 22.3474C19.1709 21.8551 19.2615 21.3676 19.4328 20.9061C19.5575 20.5685 19.7566 20.2633 20.0152 20.0131C20.2654 19.7545 20.5706 19.5555 20.9081 19.4308C21.3696 19.2594 21.8572 19.1688 22.3494 19.1629C23.1686 19.126 23.4171 19.1173 25.4874 19.1173M25.4854 17.7206C23.3763 17.7206 23.1123 17.7293 22.2825 17.7672C21.6389 17.7803 21.0023 17.9023 20.3995 18.1282C19.8812 18.3229 19.4118 18.6287 19.0242 19.0241C18.6288 19.4116 18.323 19.8811 18.1284 20.3994C17.9025 21.0021 17.7804 21.6388 17.7673 22.2823C17.7294 23.1122 17.7207 23.3762 17.7207 25.4853C17.7207 27.5944 17.7294 27.8584 17.7673 28.6882C17.7804 29.3318 17.9025 29.9684 18.1284 30.5712C18.323 31.0895 18.6288 31.5589 19.0242 31.9465C19.4118 32.3419 19.8812 32.6477 20.3995 32.8423C21.0029 33.0685 21.6402 33.1905 22.2844 33.2034C23.1123 33.2413 23.3763 33.25 25.4854 33.25C27.5945 33.25 27.8585 33.2413 28.6884 33.2034C29.3325 33.1905 29.9699 33.0685 30.5732 32.8423C31.089 32.6427 31.5574 32.3375 31.9485 31.9465C32.3396 31.5554 32.6447 31.087 32.8444 30.5712C33.0705 29.9678 33.1926 29.3305 33.2055 28.6863C33.2433 27.8584 33.2521 27.5944 33.2521 25.4833C33.2521 23.3723 33.2433 23.1103 33.2055 22.2804C33.1915 21.6374 33.0688 21.0014 32.8425 20.3994C32.6478 19.8811 32.342 19.4116 31.9466 19.0241C31.5591 18.6287 31.0896 18.3229 30.5713 18.1282C29.9686 17.9023 29.3319 17.7803 28.6884 17.7672C27.8585 17.7293 27.5945 17.7206 25.4854 17.7206Z" fill="white" />
                        <path d="M25.4854 21.4981C24.6968 21.4981 23.9259 21.732 23.2703 22.1701C22.6146 22.6082 22.1035 23.2309 21.8017 23.9595C21.5 24.688 21.421 25.4897 21.5748 26.2631C21.7287 27.0366 22.1084 27.747 22.666 28.3046C23.2237 28.8623 23.9341 29.242 24.7075 29.3959C25.481 29.5497 26.2827 29.4707 27.0112 29.169C27.7398 28.8672 28.3625 28.3561 28.8006 27.7004C29.2387 27.0448 29.4726 26.2739 29.4726 25.4853C29.4726 24.9617 29.3695 24.4432 29.1691 23.9595C28.9687 23.4757 28.675 23.0362 28.3048 22.6659C27.9345 22.2957 27.495 22.002 27.0112 21.8016C26.5275 21.6012 26.009 21.4981 25.4854 21.4981ZM25.4854 28.0738C24.9734 28.0738 24.473 27.922 24.0473 27.6376C23.6216 27.3532 23.2898 26.9489 23.0939 26.4759C22.898 26.0029 22.8467 25.4824 22.9466 24.9803C23.0465 24.4782 23.293 24.0169 23.655 23.6549C24.017 23.2929 24.4783 23.0463 24.9804 22.9465C25.4825 22.8466 26.003 22.8978 26.476 23.0938C26.949 23.2897 27.3533 23.6215 27.6377 24.0472C27.9222 24.4728 28.074 24.9733 28.074 25.4853C28.074 26.1718 27.8012 26.8302 27.3158 27.3157C26.8303 27.8011 26.1719 28.0738 25.4854 28.0738Z" fill="white" />
                        <path d="M29.6298 22.2726C30.1444 22.2726 30.5616 21.8555 30.5616 21.3409C30.5616 20.8263 30.1444 20.4091 29.6298 20.4091C29.1152 20.4091 28.6981 20.8263 28.6981 21.3409C28.6981 21.8555 29.1152 22.2726 29.6298 22.2726Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="col-auto">
                <a href="#" class="">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="24.2834" stroke="#C8A9F9" stroke-width="0.933201" />
                        <path d="M34.0022 21.8618C33.7838 20.3897 33.1287 19.3706 31.6 19.1441C29.1978 18.6912 25.4853 18.6912 25.4853 18.6912C25.4853 18.6912 21.7728 18.6912 19.3706 19.1441C17.8419 19.3706 17.0776 20.3897 16.9684 21.8618C16.75 23.3338 16.75 25.4853 16.75 25.4853C16.75 25.4853 16.75 27.6368 16.9684 29.1088C17.1868 30.5809 17.8419 31.6 19.3706 31.8265C21.7728 32.2794 25.4853 32.2794 25.4853 32.2794C25.4853 32.2794 29.1978 32.2794 31.6 31.8265C33.1287 31.4868 33.7838 30.5809 34.0022 29.1088C34.2206 27.6368 34.2206 25.4853 34.2206 25.4853C34.2206 25.4853 34.2206 23.3338 34.0022 21.8618ZM23.3015 28.8823V22.0882L28.761 25.4853L23.3015 28.8823Z" fill="white" />
                    </svg>

                </a>
            </div>
        </div>
        <div><?= renderImg('algorithm.png', 'lib') ?></div>
        <div class="row gx-2 justify-content-center pt-5">
            <div class="col-auto text-center"><a href="#" class="fs-11 text-primary-light text-decoration-none"><u>Discover Loan Options</u></a></div>
            <div class="col-auto text-center"><a href="#" class="fs-11 text-primary-light text-decoration-none"><u>Contact Us</u></a></div>
            <div class="col-auto text-center"><a href="#" class="fs-11 text-primary-light text-decoration-none"><u>Unsubscribe</u></a></div>
        </div>
    </div>
</footer>