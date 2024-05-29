<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DIGITAL COIN Cryptocurrency Market and Trading Site Template">
    <meta name="author" content="Ansonika">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icon_fonts/css/all_icons.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link rel='stylesheet' id='font-awesome-latest-css'
        href='https://en.windsorbrokers.com/wp-content/plugins/mega-addons-for-visual-composer/css/font-awesome/css/all.css?ver=6.4.3'
        media='all' />

</head>

<body>

    <div id="page">

        <header class="header menu_2">
            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div><!-- /Preload -->
            <div id="logo">
                <a href="/"><img src="{{ asset('img/logo.png') }}" width="192" height="42"
                        data-retina="true" alt=""></a>
            </div>
            <ul id="top_menu">
                <li><a href="https://www.mercatobrokers.net/login" class="login">Login</a></li>
                <li><a href="/0" class="search-overlay-menu-btn">Search</a></li>
                <li class="hidden_tablet"><a href="https://www.mercatobrokers.net/register/trader" class="btn_1 rounded">Start trading</a></li>
            </ul>
            <!-- /top_menu -->
            <a href="javascript:void(0)" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>

                    @php
                        $navs = App\Navbar::where('navbar_id', null)->orderBy('order', 'ASC')->get();
                    @endphp
                    @foreach ($navs as $index => $nav)
                        <li><span><a 

                            @if ($nav->url != '')
                                href="{{ $nav->url }}"
                            @elseif ($nav->page)
                                href="{{ route('page', $nav->page->slug) }}"
                            @else
                                href="/#{{ $index }}"
                            @endif

                            
                                    
                            @if ($nav->target == 1) target="new" @endif>{{ $nav->getTranslatedAttribute('name', app()->getLocale()) }}</a></span>

                            @if ($nav->navs->count() > 0)
                                <ul>
                                    @foreach ($nav->navs()->orderBy('order', 'ASC')->get() as $n)
                                        @if ($n->url != '')
                                            <li><span><a href="{{ $n->url }}"
                                                        @if ($n->target == 1) target="new" @endif>{{ $n->getTranslatedAttribute('name', app()->getLocale()) }}</a></span>
                                            </li>
                                        @else
                                            <li><span><a href="{{ route('page', $n->page->slug) }}"
                                                        @if ($n->target == 1) target="new" @endif>{{ $n->getTranslatedAttribute('name', app()->getLocale()) }}</a></span>
                                            </li>
                                        @endif
                                    @endforeach

                                </ul>
                            @endif
                        </li>
                    @endforeach


                </ul>
            </nav>
            <!-- Search Menu -->
            <div class="search-overlay-menu">
                <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
                <form id="searchform" method="get">
                    <input value="" name="q" type="search" placeholder="Search..." />
                    <button type="submit"><i class="icon_search"></i>
                    </button>
                </form>
            </div><!-- End Search Menu -->
        </header>
        <!-- /header -->

        @yield('content')
        <!-- /main -->

        @include('layouts.components.need_help')

        <footer class="pb-4 bg-black">
            <div class="pt-3 pb-3 bg-footer1">
                <div class="container text-capitalize">
                    <div class="row links-footer small">

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Mercatobrokers</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li>
                                    <a href="#/about-us">About Mercatobrokers</a>
                                </li>
                                <li>
                                    <a href="#/news">
                                        Mercatobrokers News</a>
                                </li>
                                <li>
                                    <a href="#/why-Mercatobrokers">Why Mercatobrokers</a>
                                </li>
                                <li>
                                    <a href="#/careers">Careers</a>
                                </li>
                                <li>
                                    <a href="#/vision">Vision</a>
                                </li>
                                <li>
                                    <a href="#/Mission">Mission</a>
                                </li>
                                <li>
                                    <a href="#/contact-us">Contact Us</a>
                                </li>

                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Markets</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li><a href="#/forex">Forex</a></li>
                                <li><a href="#/indices">Indices</a></li>
                                <li><a href="#/commodities">Commodities</a></li>
                                <li><a href="#/metals">Metals</a></li>
                                <li><a href="#/cryptocurrencies">Crypto</a></li>
                                <li><a href="#/shares">Share</a></li>


                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Accounts Types</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li><a href="#register">Demo Account</a></li>
                                <li><a href="#register">Standard Account</a></li>
                                <li><a href="#register">Mercatobrokers Account</a></li>
                                <li><a href="#register">Professional Account</a></li>
                                <li><a href="#register">Client Portal</a></li>


                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Partnership</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li><a href="#aaaaaaaaaaaaa">Introducing Brokers</a></li>
                                <li><a href="#/cpa_affiliate">Affiliate Program</a></li>
                                <li><a href="#/ib_commission">IB Commission</a></li>
                                <li><a href="#/white_label">White label</a></li>



                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Market Research</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li><a href="#/financial_news">Financial News</a></li>
                                <li><a href="#/technical_analysis_articles">Analysis Articles</a></li>
                                <li><a href="#/technical_analysis_videos">Analysis Videos</a></li>
                                <li><a href="#/webinars">Webinars</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-6 mt-3">
                            <ul>
                                <li>
                                    <strong>Education</strong>
                                    <div class="dis5"></div>
                                </li>
                                <li><a href="#register">Open Account</a></li>
                                <li><a href="https://www.mercatobrokers.net/register/trader">Start Trading</a></li>
                                <li><a href="#/faq">Mercatobrokers&nbsp;FAQ</a></li>


                            </ul>
                        </div>


                    </div>
                    <div class="dis30"></div>
                </div>
            </div>
            <div class="container">
                <div class="small desk-footer">
                    <div class="widget-area col-xs-12 col-sm-12 col-md-12 col-lg-10">
                        <div id="block-10" class="widget hr widget_block small">
                            <ol style="list-style: disc">
                                <p class="mt-3"></p>
                                <li>Address: United Arab Emirates, Dubai, Shiekh Zayed Road, Nasima Tower, Office 306.

                                    Iraq, Erbil, Dream City Main Street, Office 308.
                              </li>
                                <li>Phone: <a href="tel:+964 750 536 45 45">+964 750 536 45 45</a></li>
                                <li>Phone: <a href="tel:+964 770 537 45 45">+964 770 537 45 45</a></li>
                                <li>Email: <a
                                        href="mailto:info@mercatobrokers.com">info@mercatobrokers.com</a>
                                </li>
                                
                            </ol>
                            <div class="titlemax mb-0">
                                <strong>Risk Warning:</strong>
                            </div>
                            <p>Trading derivatives carries significant risks. It is not suitable for all investors and
                                if you are a professional client, you could lose substantially more than your initial
                                investment. When acquiring our derivative products, you have no entitlement, right or
                                obligation to the underlying financial assets. Past performance is no indication of
                                future performance and tax laws are subject to change. The information on this website
                                is general in nature and doesn't take into account your personal objectives, financial
                                circumstances, or needs. Accordingly, before acting on the advice, you should consider
                                whether the advice is suitable for you having regard to your objectives, financial
                                situation and needs. We encourage you to seek independent advice if necessary. Please
                                read our legal documents and ensure that you fully understand the risks before you make
                                any trading decisions.</p>
                            <div class="titlemax mb-0 mt-3">
                                <strong>Disclaimer:</strong>
                            </div>
                            <p>This site contains external links to websites controlled or offered by third parties. the
                                information contained on this site is intended for information purposes only and it
                                should not be regarded as advice nor as a recommendation to buy, sell or otherwise deal
                                with any particular currency or precious metal trade. Mercatobrokers Investment LLC
                                hereby disclaims responsibility for any information or materials posted at any of the
                                sites linked to this site. Mercatobrokers Investment LLC does not endorse or recommend
                                any products or services offered on that website. Clients carry the sole responsibility
                                for all transactions or investments carried out at Mercatobrokers Investment LLC.</p>
                            <p>Regional Restrictions: We do not offer our services to residents of certain jurisdictions
                                such as the United States and to jurisdictions on the FATF and EU/UN sanctions lists.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-sm-12 col-md-10 d-flex align-items-center">
                        <p class="mb-0 href-link-footer">
                            <a class="small" href="#/legal_forms_documents">Legal Forms &amp; Documents</a>
                            |
                            <a class="small" href="#/risk_warnings">Risk Warnings</a> |
                            <a class="small" href="#/cookies_policy">Cookies Policy</a> |
                            <a class="small" href="#/privacy_policy">PRIVACY POLICY</a>
                        </p>
                    </div>
                    <div class="col-sm-3 col-md-2 d-sm-block d-none">
                        <img src="{{ asset('img/logo.png') }}" class="pull-right img-fluid">
                    </div>
                </div>
            </div>
        </footer>

        <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/common_scripts.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('assets/validate.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    @yield('scripts')

</body>

</html>
