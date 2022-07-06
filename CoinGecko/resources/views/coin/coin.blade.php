<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptocurrency Price</title>
    <link href="{{ mix('css/index.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/public.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ mix('js/jquery.min.js') }}" type="text/javascript" defer></script>
</head>

<body>
    <!-- Top Header -->
    <livewire:top-header />
    <!-- End Top Header -->
    <!-- Header -->
    @include("components.header")
    <div class="container ">
        <div id="unobtrusive-flash-messages" class="mt-2"></div>
        <div class="row tw-justify-center tw-items-center my-2 ad-spacer" data-target="ads.banner">

            <div id="bsa-zone_1509402283990-0_123456" data-google-query-id="CKKV6_3I5PgCFVKH_QcdlCMMLg">
                <div id="google_ads_iframe_/22743369056/CoinGecko_S2S_Leaderboard_ATF_ROS_0__container__" style="border: 0pt none; margin: auto; text-align: center; width: 728px; height: 90px;"><iframe frameborder="0" src="https://66395d703c3fc96f91378bffaa69eef1.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html" id="google_ads_iframe_/22743369056/CoinGecko_S2S_Leaderboard_ATF_ROS_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" width="728" height="90" data-is-safeframe="true" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" role="region" aria-label="Advertisement" tabindex="0" data-google-container-id="1" style="border: 0px; vertical-align: bottom;" data-ruffle-polyfilled="" data-load-complete="true"></iframe></div>
            </div>
        </div>
        <div class="alert alert-success tw-text-center tw-hidden" role="alert" id="addAlertSuccessNotification">
            Price alert successfully saved! <br><a class="tw-font-medium tw-underline tw-text-alertsuccess dark:tw-text-alertsuccess" href="https://coingecko.app.link/pricealertsaved">Open our mobile app</a> to receive alerts on the go 🙌
        </div>
        <div class="tw-grid tw-grid-cols-1 lg:tw-grid-cols-3" x-data="{ create_portfolio_modal_open: false }" data-controller="coins-information">
            <div class="tw-col-span-3 md:tw-col-span-2">
                <div class="tw-grid tw-grid-cols-2">
                    <div class="tw-col-span-2 md:tw-col-span-2">
                        <div class="tw-inline-flex tw-items-center tw-px-2 tw-py-0.5 tw-rounded-md tw-text-xs tw-font-medium tw-bg-gray-800 tw-text-gray-100 tw-mb-1 md:tw-mb-0 md:tw-mt-0 dark:tw-bg-gray-600 dark:tw-bg-opacity-40">
                            Rank #{{ $Response["market_cap_rank"] }}
                        </div>
                        <div class="tw-flex tw-text-gray-900 dark:tw-text-white tw-mt-2 tw-items-center">
                            <img class="tw-rounded-full" alt="{{ $Response['id'] }} Price ({{ $Response['symbol'] }})" height="28" width="28" src="{{ $Response['image']['large'] }}">
                            <div class="mr-md-3 tw-pl-2 md:tw-mb-0 tw-text-xl tw-font-bold tw-mb-0">
                                {{ $Response['id'] }} ({{ $Response['symbol'] }})
                            </div>
                        </div>
                        <div class="tw-grid-cols-3 tw-mb-1 md:tw-flex">
                            <div class="tw-col-span-3 lg:tw-col-span-2">
                                <div class="tw-text-4xl tw-font-bold tw-my-2 tw-flex tw-items-center">
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-text-3xl"><span class="no-wrap" data-price-{{ $Response['symbol'] }}="1.0" data-coin-id="1" data-coin-symbol="{{ $Response['symbol'] }}" data-target="price.price" data-price-previous="20124.743">{{$Response["market_data"]["current_price"]["usd"] > 1 ? (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($Response["market_data"]["current_price"]["usd"] , 'USD') : sprintf("$%.6f", number_format($Response["market_data"]["current_price"]["usd"] ,6,'.',''))}}</span></span>
                                    <span class="live-percent-change tw-ml-2 tw-text-xl">
                                        <span class="text-green" data-json="{&quot;aed&quot;:3.8012021275042462,&quot;ars&quot;:3.9784180148392134,&quot;aud&quot;:3.7244967615221283,&quot;bch&quot;:0.8984022881634675,&quot;bdt&quot;:3.811643977662892,&quot;bhd&quot;:3.7967385586856617,&quot;bmd&quot;:3.798941340656513,&quot;bnb&quot;:-1.766931966816018,&quot;brl&quot;:4.622570487164629,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:3.8863206117902616,&quot;chf&quot;:3.891567433550722,&quot;clp&quot;:6.478536533911196,&quot;cny&quot;:3.6059175279307887,&quot;czk&quot;:4.530877399156501,&quot;dkk&quot;:4.453930521895737,&quot;dot&quot;:0.6154375768251047,&quot;eos&quot;:-0.6476869298647515,&quot;eth&quot;:-0.8587412330941556,&quot;eur&quot;:4.431845505126081,&quot;gbp&quot;:3.767920390631452,&quot;hkd&quot;:3.7945101350383945,&quot;huf&quot;:5.505320848240049,&quot;idr&quot;:3.5963243160087996,&quot;ils&quot;:2.834480819620589,&quot;inr&quot;:3.482536119446581,&quot;jpy&quot;:3.7232894774060368,&quot;krw&quot;:3.2399267204744895,&quot;kwd&quot;:3.7827237063240267,&quot;lkr&quot;:4.150670118157927,&quot;ltc&quot;:0.6381598934437788,&quot;mmk&quot;:3.8395242864968155,&quot;mxn&quot;:4.426843257879066,&quot;myr&quot;:3.916374241822641,&quot;ngn&quot;:3.806439458258696,&quot;nok&quot;:4.1831341156867605,&quot;nzd&quot;:3.7067954478423397,&quot;php&quot;:4.596634791446529,&quot;pkr&quot;:5.225830153353309,&quot;pln&quot;:4.9136028860936936,&quot;rub&quot;:4.627071531759481,&quot;sar&quot;:3.783513222480851,&quot;sek&quot;:3.892504460880078,&quot;sgd&quot;:3.717998065027698,&quot;thb&quot;:4.548409211149134,&quot;try&quot;:5.24196197072059,&quot;twd&quot;:3.612593027224912,&quot;uah&quot;:3.8260384462167063,&quot;usd&quot;:3.798941340656513,&quot;vef&quot;:3.798941340656491,&quot;vnd&quot;:3.8573235561052654,&quot;xag&quot;:4.456560093747297,&quot;xau&quot;:5.4735615707996885,&quot;xdr&quot;:3.878864510404683,&quot;xlm&quot;:1.7520378698821517,&quot;xrp&quot;:1.13148026058244,&quot;yfi&quot;:1.9074834675077863,&quot;zar&quot;:5.157826636763919,&quot;bits&quot;:-0.011532272503992415,&quot;link&quot;:1.4793590560346175,&quot;sats&quot;:-0.01153227250399521}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="true" data-target="percent-change.percent" data-show-solid-arrow="true"><i class="fas fa-caret-up"></i>3.8%</span>
                                    </span>
                                </div>
                                <div class="text-2xs text-danger">
                                </div>
                                <div class="tw-text-gray-500 text-normal dark:tw-text-white dark:tw-text-opacity-60 tw-mb-3">
                                    <div class="tw-mb-0.5">
                                        1.00000000 {{ $Response['symbol'] }}
                                        <span class="live-percent-change">
                                            <span class="text-danger" data-json="{&quot;aed&quot;:3.8012021275042462,&quot;ars&quot;:3.9784180148392134,&quot;aud&quot;:3.7244967615221283,&quot;bch&quot;:0.8984022881634675,&quot;bdt&quot;:3.811643977662892,&quot;bhd&quot;:3.7967385586856617,&quot;bmd&quot;:3.798941340656513,&quot;bnb&quot;:-1.766931966816018,&quot;brl&quot;:4.622570487164629,&quot;{{ $Response['symbol'] }}&quot;:0.0,&quot;cad&quot;:3.8863206117902616,&quot;chf&quot;:3.891567433550722,&quot;clp&quot;:6.478536533911196,&quot;cny&quot;:3.6059175279307887,&quot;czk&quot;:4.530877399156501,&quot;dkk&quot;:4.453930521895737,&quot;dot&quot;:0.6154375768251047,&quot;eos&quot;:-0.6476869298647515,&quot;eth&quot;:-0.8587412330941556,&quot;eur&quot;:4.431845505126081,&quot;gbp&quot;:3.767920390631452,&quot;hkd&quot;:3.7945101350383945,&quot;huf&quot;:5.505320848240049,&quot;idr&quot;:3.5963243160087996,&quot;ils&quot;:2.834480819620589,&quot;inr&quot;:3.482536119446581,&quot;jpy&quot;:3.7232894774060368,&quot;krw&quot;:3.2399267204744895,&quot;kwd&quot;:3.7827237063240267,&quot;lkr&quot;:4.150670118157927,&quot;ltc&quot;:0.6381598934437788,&quot;mmk&quot;:3.8395242864968155,&quot;mxn&quot;:4.426843257879066,&quot;myr&quot;:3.916374241822641,&quot;ngn&quot;:3.806439458258696,&quot;nok&quot;:4.1831341156867605,&quot;nzd&quot;:3.7067954478423397,&quot;php&quot;:4.596634791446529,&quot;pkr&quot;:5.225830153353309,&quot;pln&quot;:4.9136028860936936,&quot;rub&quot;:4.627071531759481,&quot;sar&quot;:3.783513222480851,&quot;sek&quot;:3.892504460880078,&quot;sgd&quot;:3.717998065027698,&quot;thb&quot;:4.548409211149134,&quot;try&quot;:5.24196197072059,&quot;twd&quot;:3.612593027224912,&quot;uah&quot;:3.8260384462167063,&quot;usd&quot;:3.798941340656513,&quot;vef&quot;:3.798941340656491,&quot;vnd&quot;:3.8573235561052654,&quot;xag&quot;:4.456560093747297,&quot;xau&quot;:5.4735615707996885,&quot;xdr&quot;:3.878864510404683,&quot;xlm&quot;:1.7520378698821517,&quot;xrp&quot;:1.13148026058244,&quot;yfi&quot;:1.9074834675077863,&quot;zar&quot;:5.157826636763919,&quot;bits&quot;:-0.011532272503992415,&quot;link&quot;:1.4793590560346175,&quot;sats&quot;:-0.01153227250399521}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="true" data-target="" data-show-solid-arrow="false">0.0%<i class="far fa-level-up" data-icon-up-class="fa-level-up" data-icon-down-class="fa-level-down"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="tw-col-start-1 md:tw-col-start-4 md:tw-col-end-7">
                                    <div class="tw-flex tw-items-center tw-mt-3">
                                        <div class="dropdown" data-controller="coin-add-this">
                                            <button class="btn btn-sm tw-outline-btn-md center tw-p-0 tw-w-12 tw-mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-action="mouseover->coin-add-this#loadAddThis" aria-haspopup="true" aria-expanded="false">
                                                🚀
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="tw-mb-2 tw-text-sm tw-w-full">
                                                    <div class="tw-pl-0 dropdown-item">
                                                        <a class="addthis_button_facebook tw-text-black dark:tw-text-white tw-ml-4 at300b" data-action="click->application#gtagEventTrackLink" data-source="{{ $Response['id'] }}" data-destination="facebook" data-event-category="click_share_add_this" title="Facebook" href="#">
                                                            <i class="fab fa-facebook-square tw-pr-2"></i><span>Share on Facebook</span>
                                                        </a>
                                                    </div>
                                                    <div class="tw-pl-0 dropdown-item">
                                                        <a class="addthis_button_twitter tw-text-black dark:tw-text-white tw-ml-4 at300b" data-action="click->application#gtagEventTrackLink" data-source="{{ $Response['id'] }}" data-destination="twitter" data-event-category="click_share_add_this" title="Twitter" href="#">
                                                            <i class="fab fa-twitter-square tw-pr-2"></i><span>Share on Twitter</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr class="tw-my-2 tw-px-0">
                                                <div class="tw-text-sm tw-mb-2 tw-mt-2 tw-px-4">
                                                    <i class="fas fa-link tw-text-sm dark:tw-text-white"></i>
                                                    <span class="tw-ml-2 tw-text-sm dark:tw-text-white">Copy Link</span>
                                                </div>
                                                <div class="tw-flex tw-text-sm tw-px-4" data-controller="voucher">
                                                    <input type="text" class="tw-h-10 tw-bg-primary-100 tw-border-none tw-px-4 tw-rounded tw-rounded-r-none focus:tw-outline-none" value="https://www.coingecko.com/en/coins/{{ $Response['id'] }}" readonly="" data-target="voucher.code">
                                                    <button type="button" class="btn btn-secondary tw-h-10 tw-rounded tw-rounded-l-none tw-border-primary-100" data-action="voucher#copyCode click->application#gtagEventTrackLink" data-source="{{ $Response['id'] }}" data-event-category="click_share_copy"><i class="far fa-clone text-2xl" data-target="voucher.buttonIcon"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <span tabindex="0" class="btn btn-sm tw-outline-btn-md tw-inline-flex tw-items-center tw-mr-1 tw-w-11 tw-pl-4" data-toggle="modal" data-target="#addAlertModal" data-placement="bottom" data-html="true">
                                            🔔
                                        </span>
                                        <div class="modal fade" id="addAlertModal">
                                            <div class="modal-dialog modal-content">
                                                <div class="modal-header modal-header-primary bg-light text-dark">
                                                    <h5 class="modal-title">Add Price Alert</h5>
                                                    <a href="#" data-dismiss="modal" class="text-dark mt-2 close-btn">
                                                        🔔
                                                    </a>
                                                </div>
                                                <div class="modal-body" data-controller="add-alerts">
                                                    <div class="tw-flex flex-column tw-items-center tw-justify-center my-2 text-muted m-0 mb-3">
                                                        When the price hits the target price, an alert will be sent to you via browser notification. To receive alerts, please allow web browser notification permission.
                                                    </div>
                                                    <div data-target="add-alerts.loggedInContent" style="display: none;">
                                                        <div class="center pb-2">
                                                            <button class="btn-sm btn-danger p-1 ml-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">-20%</button>
                                                            <button class="btn-sm btn-danger p-1 ml-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">-10%</button>
                                                            <button class="btn-sm btn-danger p-1 mr-3 ml-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">-5%</button>
                                                            <button class="btn-sm btn-primary p-1 ml-3 mr-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">+5%</button>
                                                            <button class="btn-sm btn-primary p-1 mr-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">+10%</button>
                                                            <button class="btn-sm btn-primary p-1 mr-1 w-12" type="button" name="button" data-action="click->add-alerts#updateAlertPrice">+20%</button>
                                                        </div>
                                                        <form data-target="add-alerts.form" action="/en/alerts" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                                                            <input type="hidden" name="coin_id" id="coin_id" value="1">
                                                            <div class="input-group tw-flex flex-nowrap">
                                                                <div class="center text-xl">1 {{ $Response['symbol'] }} = </div>
                                                                <input type="text" name="target_price" id="target_price" class="form-control mx-2 text-right">
                                                                <select name="vs_currency" id="vs_currency" class="form-control col-2" data-target="add-alerts.currencyInput">
                                                                    <option selected="selected" value="ETH">ETH</option>
                                                                    <option value="LTC">LTC</option>
                                                                    <option value="BCH">BCH</option>
                                                                    <option value="BNB">BNB</option>
                                                                    <option value="EOS">EOS</option>
                                                                    <option value="XRP">XRP</option>
                                                                    <option value="XLM">XLM</option>
                                                                    <option value="LINK">LINK</option>
                                                                    <option value="DOT">DOT</option>
                                                                    <option value="YFI">YFI</option>
                                                                    <option value="USD">USD</option>
                                                                    <option value="AED">AED</option>
                                                                    <option value="ARS">ARS</option>
                                                                    <option value="AUD">AUD</option>
                                                                    <option value="BDT">BDT</option>
                                                                    <option value="BHD">BHD</option>
                                                                    <option value="BMD">BMD</option>
                                                                    <option value="BRL">BRL</option>
                                                                    <option value="CAD">CAD</option>
                                                                    <option value="CHF">CHF</option>
                                                                    <option value="CLP">CLP</option>
                                                                    <option value="CNY">CNY</option>
                                                                    <option value="CZK">CZK</option>
                                                                    <option value="DKK">DKK</option>
                                                                    <option value="EUR">EUR</option>
                                                                    <option value="GBP">GBP</option>
                                                                    <option value="HKD">HKD</option>
                                                                    <option value="HUF">HUF</option>
                                                                    <option value="IDR">IDR</option>
                                                                    <option value="ILS">ILS</option>
                                                                    <option value="INR">INR</option>
                                                                    <option value="JPY">JPY</option>
                                                                    <option value="KRW">KRW</option>
                                                                    <option value="KWD">KWD</option>
                                                                    <option value="LKR">LKR</option>
                                                                    <option value="MMK">MMK</option>
                                                                    <option value="MXN">MXN</option>
                                                                    <option value="MYR">MYR</option>
                                                                    <option value="NGN">NGN</option>
                                                                    <option value="NOK">NOK</option>
                                                                    <option value="NZD">NZD</option>
                                                                    <option value="PHP">PHP</option>
                                                                    <option value="PKR">PKR</option>
                                                                    <option value="PLN">PLN</option>
                                                                    <option value="RUB">RUB</option>
                                                                    <option value="SAR">SAR</option>
                                                                    <option value="SEK">SEK</option>
                                                                    <option value="SGD">SGD</option>
                                                                    <option value="THB">THB</option>
                                                                    <option value="TRY">TRY</option>
                                                                    <option value="TWD">TWD</option>
                                                                    <option value="UAH">UAH</option>
                                                                    <option value="VEF">VEF</option>
                                                                    <option value="VND">VND</option>
                                                                    <option value="ZAR">ZAR</option>
                                                                    <option value="XDR">XDR</option>
                                                                    <option value="XAG">XAG</option>
                                                                    <option value="XAU">XAU</option>
                                                                    <option value="BITS">BITS</option>
                                                                    <option value="SATS">SATS</option>
                                                                </select>
                                                            </div>
                                                            <div class="center">
                                                                <input type="hidden" name="initial_price" id="initial_price" value="20137.695917123358" data-target="add-alerts.initialPriceInput">
                                                                <span class="mr-1">Current Price is</span>
                                                                <span data-target="add-alerts.currentPrice" data-price-json="{&quot;aed&quot;:73967.7708731857,&quot;ars&quot;:2545341.007979114,&quot;aud&quot;:29713.512666546052,&quot;bch&quot;:191.108213602486,&quot;bdt&quot;:1882236.022051192,&quot;bhd&quot;:7591.226679094313,&quot;bmd&quot;:20137.695917123358,&quot;bnb&quot;:85.05785950746278,&quot;brl&quot;:109480.57748533657,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:26312.21555075205,&quot;chf&quot;:19537.673129576742,&quot;clp&quot;:19701110.66964007,&quot;cny&quot;:135111.856986347,&quot;czk&quot;:490079.02291748003,&quot;dkk&quot;:147170.87315700657,&quot;dot&quot;:2916.888228411844,&quot;eos&quot;:20530.244323666146,&quot;eth&quot;:17.739486761400766,&quot;eur&quot;:19777.3318486864,&quot;gbp&quot;:16907.97197054321,&quot;hkd&quot;:158018.18402663575,&quot;huf&quot;:8145657.723084552,&quot;idr&quot;:302194320.0107197,&quot;ils&quot;:70351.64481734783,&quot;inr&quot;:1591522.6052367447,&quot;jpy&quot;:2733390.1553107304,&quot;krw&quot;:26305250.40503909,&quot;kwd&quot;:6185.696054862765,&quot;lkr&quot;:7242424.74931899,&quot;ltc&quot;:404.3941409115542,&quot;mmk&quot;:37292257.71978314,&quot;mxn&quot;:417350.0224086363,&quot;myr&quot;:89099.23558531216,&quot;ngn&quot;:8363789.245258825,&quot;nok&quot;:204180.12644289684,&quot;nzd&quot;:32795.143997351624,&quot;php&quot;:1124861.4269735415,&quot;pkr&quot;:4184428.4079427943,&quot;pln&quot;:94638.71297819442,&quot;rub&quot;:1208261.8355781808,&quot;sar&quot;:75589.13732225697,&quot;sek&quot;:212339.11532067833,&quot;sgd&quot;:28306.733505167635,&quot;thb&quot;:729689.512245443,&quot;try&quot;:346791.26138878043,&quot;twd&quot;:600163.7312803299,&quot;uah&quot;:595059.2079815621,&quot;usd&quot;:20137.695917123358,&quot;vef&quot;:2016.387492181556,&quot;vnd&quot;:470781909.8098694,&quot;xag&quot;:1058.764333585691,&quot;xau&quot;:11.579980660182633,&quot;xdr&quot;:14761.937992047275,&quot;xlm&quot;:185795.67958601625,&quot;xrp&quot;:62273.45048701736,&quot;yfi&quot;:3.261725782703417,&quot;zar&quot;:338476.4067446003,&quot;bits&quot;:999745.0644509584,&quot;link&quot;:3227.3543334048486,&quot;sats&quot;:99974506.44509584}">$20,137.70</span>
                                                            </div>
                                                            <div class="mt-2 center input-group tw-flex flex-nowrap">
                                                                <input type="hidden" name="persistent" id="persistent" value="0">
                                                                <input type="checkbox" name="persistent" id="persistent" value="1">
                                                                <span class="ml-2">Recurring</span>
                                                            </div>
                                                            <div class="center mt-3">
                                                                <input type="submit" name="commit" value="Save" class="btn btn-success" data-disable-with="Save">
                                                            </div>
                                                        </form>
                                                        <div class="tw-flex tw-items-end flex-column">
                                                            <a target="_blank" class="m-2" href="/en/alerts">See all alerts</a>
                                                        </div>
                                                    </div>
                                                    <a class="nav-link center" data-target="#signInModal, add-alerts.loggedOutContent" data-toggle="modal" href="">Sign In to Set Price Alert</a>
                                                    <div class="alert alert-danger tw-text-center tw-hidden" role="alert" id="alertErrorMessage">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-mr-1 tw-flex tw-justify-center flex-md-row tw-items-center justify-content-md-start" data-controller="favorites">

                                            <div tabindex="-1" aria-labelledby="new-portfolio-form-modal">
                                                <div class="tw-fixed tw-z-10 tw-inset-0 tw-overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="create_portfolio_modal_open" x-transition:enter="tw-transition tw-transition-opacity tw-ease-out tw-duration-300" x-transition:enter-start="tw-opacity-0 tw-transform" x-transition:enter-end="tw-opacity-100 tw-transform" x-transition:leave="tw-transition tw-ease-in tw-duration-300" x-transition:leave-end="tw-opacity-0 tw-transform" style="display: none;">
                                                    <div class="tw-flex tw-items-end tw-justify-center tw-min-h-screen tw-pt-4 tw-px-4 tw-pb-20 tw-text-center sm:tw-block sm:tw-p-0">
                                                        <div class="tw-fixed tw-inset-0 tw-bg-gray-900 tw-bg-opacity-40 dark:tw-bg-black dark:tw-bg-opacity-40 tw-transition-opacity" aria-hidden="true"></div>
                                                        <span class="tw-hidden sm:tw-inline-block sm:tw-align-middle sm:tw-h-screen" aria-hidden="true"></span>
                                                        <div class="tw-inline-block tw-align-bottom tw-bg-white tw-rounded-lg tw-px-4 tw-pt-5 tw-pb-4 tw-text-left tw-overflow-hidden tw-shadow-xl tw-transform tw-transition-all sm:tw-w-full sm:tw-my-8 sm:tw-align-middle sm:tw-p-6 dark:tw-bg-dark-10 sm:tw-max-w-lg" id="new-portfolio-form-modal" @click.away="create_portfolio_modal_open = false" x-show="create_portfolio_modal_open" x-transition:enter="tw-transition tw-ease-out tw-duration-300" x-transition:enter-start="tw-opacity-0 tw-transform tw--translate-y-5" x-transition:enter-end="tw-opacity-100 tw-transform tw-translate-y-0" x-transition:leave="tw-transition tw-ease-in tw-duration-300" x-transition:leave-end="tw-opacity-0 tw-transform tw--translate-y-5" style="display: none;">
                                                            <div><i @click="create_portfolio_modal_open= false" data-view-component="true" class="fa-times far tw-text-2xl tw-text-gray-400 hover:tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 dark:hover:text-opacity-87"></i> </div>
                                                            <div class="tw-mt-3 tw-text-left sm:tw-mt-5">
                                                                <div class="tw-text-2xl tw-font-medium tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87" id="modal-title">
                                                                    <span class="translation_missing" title="translation missing: en.coins.coins_information.new_portfolio">New Portfolio</span>
                                                                </div>
                                                                <div class="tw-mt-2">
                                                                    <input type="text" class="form-control pt-4 pb-4" required="" placeholder="My Portfolio" data-target="favorites.title">
                                                                    <span class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                            <div class="tw-text-center">
                                                                <div class="tailwind-reset tw-mt-5 tw-grid tw-grid-cols-1 tw-gap-3 sm:tw-mt-6 sm:tw-grid-cols-2 sm:tw-grid-flow-row-dense">
                                                                    <button id="new-portfolio-form-confirm-button" @click="create_portfolio_modal_open = false" type="button" data-view-component="true" class="sm:tw-col-start-2 dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-px-6 tw-py-3.5 tw-text-sm">
                                                                        <span class="translation_missing" title="translation missing: en.coins.coins_information.create">Create</span>
                                                                    </button>
                                                                    <button @click="create_portfolio_modal_open = false" type="button" data-view-component="true" class="sm:tw-col-start-1 dark:focus:tw-text-white dark:hover:tw-bg-opacity-5 dark:hover:tw-bg-white dark:hover:tw-text-white dark:tw-border-opacity-10 dark:tw-border-white dark:tw-text-opacity-87 dark:tw-text-white disabled:tw-opacity-50 focus:tw-border-opacity-0 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 tw-bg-transparent tw-border tw-border-gray-300 tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-gray-700 tw-justify-center tw-px-6 tw-py-3.5 tw-text-sm">
                                                                        <span class="translation_missing" title="translation missing: en.portfolios.portfolio_modal_form_v2.cancel">Cancel</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu p-3 dropdown-popup dropdown-menu-content portfolios-dropdown" data-target="favorites.portfolioDropdownContent"></div>
                                            <button data-target="#signInModal" data-unfavorite-coin-confirm-modal="unfavorite-coin-confirm-modal" data-unfavorite-coin-confirm-button="unfavorite-coin-confirm-button" data-new-portfolio-confirm-modal="new-portfolio-form-modal" data-new-portfolio-confirm-button="new-portfolio-form-confirm-button" data-action="click->favorites#trigger" data-coin-id="1" data-coin-slug="{{ $Response['id'] }}" data-coin-image="https://assets.coingecko.com/coins/images/1/thumb/{{ $Response['id'] }}.png?1547033579" data-toggle="modal" data-coin-symbol="{{ $Response['symbol'] }}" data-source="star_button" data-price-{{ $Response['symbol'] }}="1.0" data-new-portfolio-button-label="<span class=&quot;translation_missing&quot; title=&quot;translation missing: en.layouts.application.portfolio.add_to_new_portfolio&quot;>Add To New Portfolio</span>" data-toast-success-message="{{ $Response['symbol'] }} added to Portfolio" data-toast-success-hyperlink-text="Start your portfolio - Add a transaction!" class="btn btn-sm center tw-p-0 tw-w-12 tw-mr-1 far fa-star tw-inline-flex tw-h-8 tw-items-center tw-py-2 tw-border tw-border-gray-300 tw-text-sm tw-leading-4 tw-font-medium tw-rounded-md tw-bg-transparent hover:tw-bg-gray-50 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 focus:tw-border-opacity-0 dark:tw-text-white dark:hover:tw-bg-white dark:hover:tw-bg-opacity-10 dark:tw-border-white dark:tw-border-opacity-10" aria-haspopup="true" aria-expanded="false">
                                                ⭐
                                            </button>
                                        </div>
                                        <div class="tw-block tw-inline-flex tw-py-0.5 tw-h-5 tw-items-center tw-px-2 tw-rounded-md tw-text-xs tw-font-medium tw-bg-gray-100 tw-text-gray-800 tw-mb-1 md:tw-mb-0 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-5">
                                            <i class="far fas tw-mr-0.5 star-color fa-star"></i> 1,106,406 people like this
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tw-col-span-2 lg:tw-col-span-2" data-controller="coins-information">
                        <div class="tw-grid tw-grid-cols-2">
                            <div class="tw-col-span-2 lg:tw-col-span-1">
                                <progress class="tw-flex tw-justify-between tw-w-full high-low-range-slider tw-mt-3" min="0" max="1228.8746856153994" value="737.0202868838569"></progress>
                                <div class="tw-pt-2 tw-pb-2 tw-w-full tw-grid tw-grid-cols-3 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <div class="tw-text-gray-900 dark:tw-text-white tw-font-medium tw-col-span-1">
                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:71259.0696033822,&quot;ars&quot;:2447951.27351895,&quot;aud&quot;:28646.572019396524,&quot;bch&quot;:189.2962923740724,&quot;bdt&quot;:1813126.1098766453,&quot;bhd&quot;:7313.550295033892,&quot;bmd&quot;:19400.675630239515,&quot;bnb&quot;:84.58377342650611,&quot;brl&quot;:104643.36421438617,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:25327.892446087677,&quot;chf&quot;:18805.831514740676,&quot;clp&quot;:18491713.57006363,&quot;cny&quot;:130409.40151890709,&quot;czk&quot;:468836.6108763138,&quot;dkk&quot;:140895.48609772656,&quot;dot&quot;:2898.7720331991436,&quot;eos&quot;:20411.654266518257,&quot;eth&quot;:17.59699808065862,&quot;eur&quot;:18938.027718485184,&quot;gbp&quot;:16294.026040893583,&quot;hkd&quot;:152241.36981912766,&quot;huf&quot;:7720613.1952352915,&quot;idr&quot;:291703708.6073733,&quot;ils&quot;:68412.50547153527,&quot;inr&quot;:1537962.505479863,&quot;jpy&quot;:2635271.3735579536,&quot;krw&quot;:25479725.955503073,&quot;kwd&quot;:5960.236765770908,&quot;lkr&quot;:6953795.631946035,&quot;ltc&quot;:399.46073630298673,&quot;mmk&quot;:35913355.70537912,&quot;mxn&quot;:399657.79811805906,&quot;myr&quot;:85741.28594784332,&quot;ngn&quot;:8057100.589238458,&quot;nok&quot;:195981.93908830933,&quot;nzd&quot;:31622.94607188534,&quot;php&quot;:1075427.9324725731,&quot;pkr&quot;:3976617.149842886,&quot;pln&quot;:90206.33204346735,&quot;rub&quot;:1154827.1569575698,&quot;sar&quot;:72833.47323212738,&quot;sek&quot;:204383.47927268708,&quot;sgd&quot;:27292.016846893115,&quot;thb&quot;:697944.1559667732,&quot;try&quot;:329518.05049516406,&quot;twd&quot;:579238.2120218078,&quot;uah&quot;:573130.9957374622,&quot;usd&quot;:19400.675630239515,&quot;vef&quot;:1942.5896508558774,&quot;vnd&quot;:453296786.100545,&quot;xag&quot;:1010.912510274616,&quot;xau&quot;:10.979036345908836,&quot;xdr&quot;:14210.723289691614,&quot;xlm&quot;:182326.6569291224,&quot;xrp&quot;:61422.57840928218,&quot;yfi&quot;:3.193182472683706,&quot;zar&quot;:321874.6693137404,&quot;bits&quot;:997861.8382261775,&quot;link&quot;:3170.714733131101,&quot;sats&quot;:99786183.82261775}" data-target="price.price" data-price-previous="19400.675630239515">$19,400.68</span>
                                    </div>
                                    <div class="tw-text-gray-900 dark:tw-text-white tw-font-medium tw-col-span-1 tw-text-center">
                                        24H Range
                                    </div>
                                    <div class="tw-text-gray-900 dark:tw-text-white tw-font-medium tw-col-span-1 tw-text-right">
                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:75772.75090114132,&quot;ars&quot;:2603546.4356724303,&quot;aud&quot;:30354.980480359016,&quot;bch&quot;:194.0197289593114,&quot;bdt&quot;:1927972.8719545044,&quot;bhd&quot;:7777.0722849231925,&quot;bmd&quot;:20629.550315854915,&quot;bnb&quot;:88.55223541706128,&quot;brl&quot;:111174.36454770477,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:26890.041209308027,&quot;chf&quot;:19982.81391345284,&quot;clp&quot;:19647583.720820203,&quot;cny&quot;:138628.515167513,&quot;czk&quot;:497582.69066338835,&quot;dkk&quot;:149535.35841950547,&quot;dot&quot;:2970.84022349006,&quot;eos&quot;:21033.31441020833,&quot;eth&quot;:17.90177445902046,&quot;eur&quot;:20097.968063315937,&quot;gbp&quot;:17254.555884180994,&quot;hkd&quot;:161881.1128060287,&quot;huf&quot;:8290068.994453003,&quot;idr&quot;:309949591.18620175,&quot;ils&quot;:72745.88013104754,&quot;inr&quot;:1633044.4863007125,&quot;jpy&quot;:2802864.797989104,&quot;krw&quot;:27011544.26831726,&quot;kwd&quot;:6337.274079728732,&quot;lkr&quot;:7394261.9117761105,&quot;ltc&quot;:407.15560525015843,&quot;mmk&quot;:38188174.09536615,&quot;mxn&quot;:423563.8641301008,&quot;myr&quot;:91172.29762092074,&quot;ngn&quot;:8567452.246174535,&quot;nok&quot;:207680.26172350033,&quot;nzd&quot;:33443.65738319915,&quot;php&quot;:1143031.7884961807,&quot;pkr&quot;:4229515.600373792,&quot;pln&quot;:95432.36164979573,&quot;rub&quot;:1227976.0455062909,&quot;sar&quot;:77446.94205702451,&quot;sek&quot;:216847.51814510918,&quot;sgd&quot;:28992.770013902424,&quot;thb&quot;:741551.0584219873,&quot;try&quot;:350333.0864188798,&quot;twd&quot;:615193.8405986596,&quot;uah&quot;:609434.173298224,&quot;usd&quot;:20629.550315854915,&quot;vef&quot;:2065.6368731265457,&quot;vnd&quot;:482009443.12994957,&quot;xag&quot;:1072.5453804930235,&quot;xau&quot;:11.678388433805456,&quot;xdr&quot;:15110.85679265932,&quot;xlm&quot;:188552.56946916512,&quot;xrp&quot;:63132.865044397615,&quot;yfi&quot;:3.3075442073097863,&quot;zar&quot;:340994.088990892,&quot;bits&quot;:1001614.9618446775,&quot;link&quot;:3229.6487721275757,&quot;sats&quot;:100161496.18446775}" data-target="price.price" data-price-previous="20629.550315854915">$20,629.55</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-grid tw-grid-cols-2">
                            <div class="tailwind-reset tw-col-span-2 lg:tw-col-span-1">
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 lg:tw-border-t-0 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        Market Cap
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="Market Cap = Current Price x Circulating Supply <br/><br/>
Refers to the total market value of a cryptocurrency’s circulating supply. It is similar to the stock market’s measurement of multiplying price per share by shares readily available in the market (not held &amp; locked by insiders, governments)<br/><br/>
<a href=&quot;https://www.coingecko.com/en/methodology&quot;>Read More</a>
" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                        <span class="no-wrap" data-price-{{ $Response['symbol'] }}="19086568.0" data-target="price.price" data-price-previous="384112275752.024">$384,112,275,752</span>
                                    </span>
                                </div>
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        24 Hour Trading Vol
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="A measure of a cryptocurrency trading volume across all tracked platforms in the last 24 hours. This is tracked on a rolling 24-hour basis with no open/closing times.<br/><br/>
<a href=&quot;https://www.coingecko.com/en/methodology&quot;>Read More</a>
" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                        <span class="no-wrap" data-price-{{ $Response['symbol'] }}="1170827.90358574" data-no-decimal="false" data-target="price.price" data-price-previous="23562610656.891792">$23,562,610,657</span>
                                    </span>
                                </div>
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        Fully Diluted Valuation
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="FDV = Current Price x Max Supply <br/><br/> The market capitalization (valuation) if the max supply of a coin is in circulation. Note that it can take 3, 5, 10 or more years before the FDV can be reached, depending on how the emission schedule is designed." data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium"><span class="no-wrap" data-price-{{ $Response['symbol'] }}="21000000.0" data-target="price.price" data-price-previous="422619603000">$422,619,603,000</span></span>
                                </div>
                            </div>
                            <div class="tailwind-reset lg:tw-pl-4 tw-col-span-2 lg:tw-col-span-1">
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        Circulating Supply
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="The amount of coins that are circulating in the market and are tradeable by the public. It is comparable to looking at shares readily available in the market (not held &amp; locked by insiders, governments).<br/><br/>
<a href=&quot;https://www.coingecko.com/en/methodology&quot;>Read More</a>
" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium tw-mr-1">
                                        19,086,568
                                        <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium" tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="<div class='col-md-12' style='font-size: 13px;'>

    <a rel=&quot;nofollow noopener&quot; target=&quot;_blank&quot; href=&quot;https://blockchain.info/q/totalbc&quot;>https://blockchain.info/q/totalbc</a>


  <div class='row pt-1 pb-1 border-top'>
    <div class='col-6'>Est. Circulating Supply</div>
    <div class='col-6 text-right'>19,086,568</div>
  </div>


</div>
" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                </div>
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        Total Supply
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="The amount of coins that have already been created, minus any coins that have been burned (removed from circulation). It is comparable to outstanding shares in the stock market. <br/><br/>Total Supply = Onchain supply - burned tokens" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium tw-mr-1">
                                        21,000,000
                                    </span>
                                </div>
                                <div class="tw-flex tw-justify-between tw-w-full tw-h-10 tw-py-2.5 tw-border-b tw-border-gray-200 dark:tw-border-opacity-10 tw-pl-0">
                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                                        Max Supply
                                        <span tabindex="0" data-toggle="popover" data-trigger="focus" data-placement="top" data-delay="{&quot;show&quot;:0,&quot;hide&quot;:300}" data-content="The maximum number of coins coded to exist in the lifetime of the cryptocurrency. It is comparable to the maximum number of issuable shares in the stock market. <br/><br/>Max Supply = Theoretical maximum as coded" data-html="true" data-original-title="" title=""><i class="far fa-question-circle"></i></span>
                                    </span>
                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                        21,000,000
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tw-col-span-3 lg:tw-col-span-1 coin-links-section lg:tw-ml-6">
                <div class="" data-target="ads.banner">
                    <div class="lg:tw-ml-3 tw-flex flex-wrap sm:tw-mt-2 lg:tw-mt-0">
                        <div class="tw-mb-1 tw-mr-1">
                            <div x-data="{open: false}" data-view-component="true" class="tw-relative tw-inline-block tw-text-left">
                                <div @click="open = !open">
                                    <button type="button" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                        Buy / Sell
                                        <i :class="{'tw-rotate-180': open}" data-view-component="true" class="fa-chevron-down fas tw-ml-2 tw-transform"></i>
                                    </button>
                                </div>
                                <div @click.away="open = false" x-show="open" x-transition:enter="tw-transition tw-ease-out tw-duration-100" x-transition:enter-end="tw-transform tw-opacity-100 tw-scale-100" x-transition:enter-start="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave="tw-transition tw-ease-in tw-duration-75" x-transition:leave-end="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave-start="tw-transform tw-opacity-100 tw-scale-100" style="width: 370px; display: none" data-view-component="true" class="dark:tw-border dark:tw-border-white dark:tw-border-opacity-12 dark:tw-ring-white-12 dark:tw-bg-dark-20 dark:tw-divide-white dark:tw-divide-opacity-12 focus:tw-outline-none tw-absolute tw-bg-white tw-divide-gray-100 tw-divide-y tw-mt-2 tw-origin-top-right tw-ring-1 tw-ring-black tw-ring-opacity-5 tw-rounded-md tw-shadow-lg tw-w-56 tw-z-10">
                                    <div data-view-component="true" class="tw-py-1">
                                        <div class="tw-p-2">
                                            <div data-controller="buy-sell-ads">
                                                <div id="buysell-button-01" data-target="buy-sell-ads.bsPopover" data-zone-key="CEADCKJN"></div>
                                                <div id="buysell-button-02" data-target="buy-sell-ads.bsPopover" data-zone-key="CEADC23L"></div>
                                                <div id="buysell-button-03" data-target="buy-sell-ads.bsPopover" data-zone-key="CEADC23I">
                                                    <div id="_custom_" data-attributes="{&quot;type&quot;:&quot;custom&quot;,&quot;key&quot;:&quot;CEADC23I&quot;,&quot;segment&quot;:&quot;placement:coingecko-button&quot;,&quot;options&quot;:{&quot;target&quot;:&quot;#buysell-button-03&quot;,&quot;template&quot;:&quot;\n              <div class=\&quot;p-2 px-2\&quot;>\n                <div>\n                  <a target=\&quot;_blank\&quot; rel=\&quot;noopener nofollow\&quot; href=\&quot;##statlink##\&quot;>\n                    <img alt=\&quot;##companyTagline##\&quot; src=\&quot;##image##\&quot; style=\&quot;width: 20px; height: 20px;\&quot;>##companyTagline##</img>\n                    <div class=\&quot;text-muted mt-1\&quot; style=\&quot;line-height: 1;\&quot;>\n                      <small>##description##</small>\n                    </div>\n                  </a>\n                </div>\n              </div>\n            &quot;,&quot;script_id&quot;:&quot;_bsa_srv-CEADC23I_5&quot;,&quot;platforms&quot;:[&quot;desktop&quot;,&quot;mobile&quot;]},&quot;ads&quot;:[{&quot;active&quot;:&quot;1&quot;,&quot;ad_via_link&quot;:&quot;http://ads.new/checkout/new/?utm_source=coingecko-buy-sell-03-all-coins&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=custom&quot;,&quot;bannerid&quot;:&quot;458637&quot;,&quot;companyTagline&quot;:&quot;FTX - By Traders, For Traders&quot;,&quot;creativeid&quot;:&quot;518630&quot;,&quot;description&quot;:&quot;Buy and sell cryptocurrencies with low fees and up to 20x leverage.&quot;,&quot;evenodd&quot;:&quot;0&quot;,&quot;external_id&quot;:&quot;142220&quot;,&quot;height&quot;:&quot;0&quot;,&quot;i&quot;:&quot;0&quot;,&quot;identifier&quot;:&quot;f070b6c6c5a0a72ba101a0ffa384eb5b&quot;,&quot;image&quot;:&quot;https://cdn4.buysellads.net/uu/1/119029/1656645564-FTX.png&quot;,&quot;longimp&quot;:&quot;T4IJXJZ4TTTTTTFRZI3N6TTTTTTQKLN4KVTTTTTT54JAPYETTTTTT&quot;,&quot;longlink&quot;:&quot;TCIJXJZ4TTTTTTFRZI3N6TTTTTTQKLN4KVTTTTTT54JAPYETTTTTTOLUKJICNOZYKHKI5KBB5VBDCN4457U6KRZL57CE&quot;,&quot;num_slots&quot;:&quot;1&quot;,&quot;rendering&quot;:&quot;custom&quot;,&quot;statimp&quot;:&quot;//srv.buysellads.com/ads/imp/x/GTND42JMCAYDE2QYCY7LYKQNCWSDL27ECEAICZ3JCYBIK5QECT7DV2JKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJWNBADLKM7UCBZG2Y&quot;,&quot;statlink&quot;:&quot;//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCY7LYKQNCWSDL27ECEAICZ3JCYBIK5QECT7DV2JKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ&quot;,&quot;timestamp&quot;:&quot;1657121047&quot;,&quot;width&quot;:&quot;0&quot;,&quot;zoneid&quot;:&quot;48343&quot;,&quot;zonekey&quot;:&quot;CEADC23I&quot;}]}">
                                                        <div class="p-2 px-2">
                                                            <div>
                                                                <a target="_blank" rel="noopener nofollow" href="//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCY7LYKQNCWSDL27ECEAICZ3JCYBIK5QECT7DV2JKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ?segment=placement:coingecko-button;">
                                                                    <img alt="FTX - By Traders, For Traders" src="https://cdn4.buysellads.net/uu/1/119029/1656645564-FTX.png" style="width: 20px; height: 20px;">FTX - By Traders, For Traders
                                                                    <div class="text-muted mt-1" style="line-height: 1;">
                                                                        <small>Buy and sell cryptocurrencies with low fees and up to 20x leverage.</small>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-flex flex-row-reverse">
                                                <small class="text-muted">Sponsored</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-mb-1 tw-mr-1">
                            <div x-data="{open: false}" data-view-component="true" class="tw-relative tw-inline-block tw-text-left">
                                <div @click="open = !open">
                                    <button type="button" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                        Long / Short
                                        <i :class="{'tw-rotate-180': open}" data-view-component="true" class="fa-chevron-down fas tw-ml-2 tw-transform"></i>
                                    </button>
                                </div>
                                <div @click.away="open = false" x-show="open" x-transition:enter="tw-transition tw-ease-out tw-duration-100" x-transition:enter-end="tw-transform tw-opacity-100 tw-scale-100" x-transition:enter-start="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave="tw-transition tw-ease-in tw-duration-75" x-transition:leave-end="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave-start="tw-transform tw-opacity-100 tw-scale-100" style="width: 360px; display: none" data-view-component="true" class="dark:tw-border dark:tw-border-white dark:tw-border-opacity-12 dark:tw-ring-white-12 dark:tw-bg-dark-20 dark:tw-divide-white dark:tw-divide-opacity-12 focus:tw-outline-none tw-absolute tw-bg-white tw-divide-gray-100 tw-divide-y tw-mt-2 tw-origin-top-right tw-ring-1 tw-ring-black tw-ring-opacity-5 tw-rounded-md tw-shadow-lg tw-w-56 tw-z-10">
                                    <div data-view-component="true" class="tw-py-1">
                                        <div class="tw-p-2">
                                            <div data-controller="buy-sell-ads">
                                                <div id="longshort-button-01" data-target="buy-sell-ads.lsPopover" data-zone-key="CEADC2JU">
                                                    <div id="_custom_" data-attributes="{&quot;type&quot;:&quot;custom&quot;,&quot;key&quot;:&quot;CEADC2JU&quot;,&quot;segment&quot;:&quot;placement:coingecko-button&quot;,&quot;options&quot;:{&quot;target&quot;:&quot;#longshort-button-01&quot;,&quot;template&quot;:&quot;\n              <div class=\&quot;p-2 px-2\&quot;>\n                <div>\n                  <a target=\&quot;_blank\&quot; rel=\&quot;noopener nofollow\&quot; href=\&quot;##statlink##\&quot;>\n                    <img alt=\&quot;##companyTagline##\&quot; src=\&quot;##image##\&quot; style=\&quot;width: 20px; height: 20px;\&quot;>##companyTagline##</img>\n                    <div class=\&quot;text-muted mt-1\&quot; style=\&quot;line-height: 1;\&quot;>\n                      <small>##description##</small>\n                    </div>\n                  </a>\n                </div>\n              </div>\n            &quot;,&quot;script_id&quot;:&quot;_bsa_srv-CEADC2JU_6&quot;,&quot;platforms&quot;:[&quot;desktop&quot;,&quot;mobile&quot;]},&quot;ads&quot;:[{&quot;active&quot;:&quot;1&quot;,&quot;ad_via_link&quot;:&quot;http://ads.new/checkout/new/?utm_source=coingecko-long-short-01-{{ $Response['id'] }}&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=custom&quot;,&quot;bannerid&quot;:&quot;453264&quot;,&quot;companyTagline&quot;:&quot;FTX - By Traders, For Traders&quot;,&quot;creativeid&quot;:&quot;510909&quot;,&quot;description&quot;:&quot;Buy and sell cryptocurrencies with low fees and up to 20x leverage.&quot;,&quot;evenodd&quot;:&quot;0&quot;,&quot;external_id&quot;:&quot;134008&quot;,&quot;height&quot;:&quot;0&quot;,&quot;i&quot;:&quot;0&quot;,&quot;identifier&quot;:&quot;67fc90f8f0dc421e334e1b61fe97c248&quot;,&quot;image&quot;:&quot;https://cdn4.buysellads.net/uu/1/113175/1652099785-FTX.png&quot;,&quot;longimp&quot;:&quot;T4GJXJZ4TTTTTTFTQF3N6TTTTTTKBBC4KVTTTTTT54JAPYETTTTTT&quot;,&quot;longlink&quot;:&quot;TCGJXJZ4TTTTTTFTQF3N6TTTTTTKBBC4KVTTTTTT54JAPYETTTTTTOLUKJICNOZYKHKI5KBB5VBDCN4457U6KRZL57CE&quot;,&quot;num_slots&quot;:&quot;1&quot;,&quot;rendering&quot;:&quot;custom&quot;,&quot;statimp&quot;:&quot;//srv.buysellads.com/ads/imp/x/GTND42JMCAYDE2QYCWBLYKQNCWSDL2JMCYYDTZ3JCYBIK5QECAAIEKQKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJWNBADLKM7UCBZG2Y&quot;,&quot;statlink&quot;:&quot;//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCWBLYKQNCWSDL2JMCYYDTZ3JCYBIK5QECAAIEKQKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ&quot;,&quot;timestamp&quot;:&quot;1657121047&quot;,&quot;width&quot;:&quot;0&quot;,&quot;zoneid&quot;:&quot;48367&quot;,&quot;zonekey&quot;:&quot;CEADC2JU&quot;}]}">
                                                        <div class="p-2 px-2">
                                                            <div>
                                                                <a target="_blank" rel="noopener nofollow" href="//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCWBLYKQNCWSDL2JMCYYDTZ3JCYBIK5QECAAIEKQKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ?segment=placement:coingecko-button;">
                                                                    <img alt="FTX - By Traders, For Traders" src="https://cdn4.buysellads.net/uu/1/113175/1652099785-FTX.png" style="width: 20px; height: 20px;">FTX - By Traders, For Traders
                                                                    <div class="text-muted mt-1" style="line-height: 1;">
                                                                        <small>Buy and sell cryptocurrencies with low fees and up to 20x leverage.</small>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="longshort-button-02" data-target="buy-sell-ads.lsPopover" data-zone-key="CEADC53J"></div>
                                                <div id="longshort-button-03" data-target="buy-sell-ads.lsPopover" data-zone-key="CEADC53L">
                                                    <div id="_custom_" data-attributes="{&quot;type&quot;:&quot;custom&quot;,&quot;key&quot;:&quot;CEADC53L&quot;,&quot;segment&quot;:&quot;placement:coingecko-button&quot;,&quot;options&quot;:{&quot;target&quot;:&quot;#longshort-button-03&quot;,&quot;template&quot;:&quot;\n              <div class=\&quot;p-2 px-2\&quot;>\n                <div>\n                  <a target=\&quot;_blank\&quot; rel=\&quot;noopener nofollow\&quot; href=\&quot;##statlink##\&quot;>\n                    <img alt=\&quot;##companyTagline##\&quot; src=\&quot;##image##\&quot; style=\&quot;width: 20px; height: 20px;\&quot;>##companyTagline##</img>\n                    <div class=\&quot;text-muted mt-1\&quot; style=\&quot;line-height: 1;\&quot;>\n                      <small>##description##</small>\n                    </div>\n                  </a>\n                </div>\n              </div>\n            &quot;,&quot;script_id&quot;:&quot;_bsa_srv-CEADC53L_8&quot;,&quot;platforms&quot;:[&quot;desktop&quot;,&quot;mobile&quot;]},&quot;ads&quot;:[{&quot;active&quot;:&quot;1&quot;,&quot;ad_via_link&quot;:&quot;http://ads.new/checkout/new/?utm_source=coingecko-long-short-03-all-coins&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=custom&quot;,&quot;bannerid&quot;:&quot;453265&quot;,&quot;companyTagline&quot;:&quot;KuCoin&quot;,&quot;creativeid&quot;:&quot;510910&quot;,&quot;description&quot;:&quot;Buy and sell cryptocurrencies from one of the top exchanges in the world.&quot;,&quot;evenodd&quot;:&quot;0&quot;,&quot;external_id&quot;:&quot;134009&quot;,&quot;height&quot;:&quot;0&quot;,&quot;i&quot;:&quot;0&quot;,&quot;identifier&quot;:&quot;295782f56941154ccf1a6f435ab77ba5&quot;,&quot;image&quot;:&quot;https://cdn4.buysellads.net/uu/1/113175/1652100238-KuCoin.png&quot;,&quot;longimp&quot;:&quot;T4F3XJZ4TTTTTTF3QF3N6TTTTTTKABC4KVTTTTTT54JAPYETTTTTT&quot;,&quot;longlink&quot;:&quot;TCF3XJZ4TTTTTTF3QF3N6TTTTTTKABC4KVTTTTTT54JAPYETTTTTT5DPKHKCAR37P7NWAO4H2HJI5BBHQ3YU5NIMFH7E&quot;,&quot;num_slots&quot;:&quot;1&quot;,&quot;rendering&quot;:&quot;custom&quot;,&quot;statimp&quot;:&quot;//srv.buysellads.com/ads/imp/x/GTND42JMCAYDE2QYCKA4YKQNCWSDL2JMCYYD4Z3JCYBIK5QECAAIEKJKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJWNBADLKM7UCBZG2Y&quot;,&quot;statlink&quot;:&quot;//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCKA4YKQNCWSDL2JMCYYD4Z3JCYBIK5QECAAIEKJKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ&quot;,&quot;timestamp&quot;:&quot;1657121047&quot;,&quot;width&quot;:&quot;0&quot;,&quot;zoneid&quot;:&quot;48382&quot;,&quot;zonekey&quot;:&quot;CEADC53L&quot;}]}">
                                                        <div class="p-2 px-2">
                                                            <div>
                                                                <a target="_blank" rel="noopener nofollow" href="//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCKA4YKQNCWSDL2JMCYYD4Z3JCYBIK5QECAAIEKJKCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ?segment=placement:coingecko-button;">
                                                                    <img alt="KuCoin" src="https://cdn4.buysellads.net/uu/1/113175/1652100238-KuCoin.png" style="width: 20px; height: 20px;">KuCoin
                                                                    <div class="text-muted mt-1" style="line-height: 1;">
                                                                        <small>Buy and sell cryptocurrencies from one of the top exchanges in the world.</small>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tw-flex flex-row-reverse">
                                                <small class="text-muted">Sponsored</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-mb-1 tw-mr-1">
                            <div x-data="{open: false}" data-view-component="true" class="tw-relative tw-inline-block tw-text-left">
                                <div @click="open = !open">
                                    <button type="button" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                        Earn Crypto
                                        <i :class="{'tw-rotate-180': open}" data-view-component="true" class="fa-chevron-down fas tw-ml-2 tw-transform"></i>
                                    </button>
                                </div>
                                <div @click.away="open = false" x-show="open" x-transition:enter="tw-transition tw-ease-out tw-duration-100" x-transition:enter-end="tw-transform tw-opacity-100 tw-scale-100" x-transition:enter-start="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave="tw-transition tw-ease-in tw-duration-75" x-transition:leave-end="tw-transform tw-opacity-0 tw-scale-95" x-transition:leave-start="tw-transform tw-opacity-100 tw-scale-100" style="width: 360px; display: none" data-view-component="true" class="dark:tw-border dark:tw-border-white dark:tw-border-opacity-12 dark:tw-ring-white-12 dark:tw-bg-dark-20 dark:tw-divide-white dark:tw-divide-opacity-12 focus:tw-outline-none tw-absolute tw-bg-white tw-divide-gray-100 tw-divide-y tw-mt-2 tw-origin-top-right tw-ring-1 tw-ring-black tw-ring-opacity-5 tw-rounded-md tw-shadow-lg tw-w-56 tw-z-10">
                                    <div data-view-component="true" class="tw-py-1">
                                        <div class="tw-p-2">
                                            <div data-controller="buy-sell-ads">
                                                <div id="earnloan-button-01" data-target="buy-sell-ads.elPopover" data-zone-key="CEADC23U"></div>
                                                <div id="earnloan-button-02" data-target="buy-sell-ads.elPopover" data-zone-key="CEADC2JI">
                                                    <div id="_custom_" data-attributes="{&quot;type&quot;:&quot;custom&quot;,&quot;key&quot;:&quot;CEADC2JI&quot;,&quot;segment&quot;:&quot;placement:coingecko-button&quot;,&quot;options&quot;:{&quot;target&quot;:&quot;#earnloan-button-02&quot;,&quot;template&quot;:&quot;\n              <div class=\&quot;p-2 px-2\&quot;>\n                <div>\n                  <a target=\&quot;_blank\&quot; rel=\&quot;noopener nofollow\&quot; href=\&quot;##statlink##\&quot;>\n                    <img alt=\&quot;##companyTagline##\&quot; src=\&quot;##image##\&quot; style=\&quot;width: 20px; height: 20px;\&quot;>##companyTagline##</img>\n                    <div class=\&quot;text-muted mt-1\&quot; style=\&quot;line-height: 1;\&quot;>\n                      <small>##description##</small>\n                    </div>\n                  </a>\n                </div>\n              </div>\n            &quot;,&quot;script_id&quot;:&quot;_bsa_srv-CEADC2JI_1&quot;,&quot;platforms&quot;:[&quot;desktop&quot;,&quot;mobile&quot;]},&quot;ads&quot;:[{&quot;active&quot;:&quot;1&quot;,&quot;ad_via_link&quot;:&quot;http://ads.new/checkout/new/?utm_source=coingecko-earn-loan-02-all-coins&amp;utm_medium=ad_via_link&amp;utm_campaign=in_unit&amp;utm_term=custom&quot;,&quot;bannerid&quot;:&quot;458634&quot;,&quot;companyTagline&quot;:&quot;KuCoin&quot;,&quot;creativeid&quot;:&quot;518627&quot;,&quot;description&quot;:&quot;Earn stable profits with professional asset management.&quot;,&quot;evenodd&quot;:&quot;0&quot;,&quot;external_id&quot;:&quot;142219&quot;,&quot;height&quot;:&quot;0&quot;,&quot;i&quot;:&quot;0&quot;,&quot;identifier&quot;:&quot;9e7416410c5f183f389e22777106a2e0&quot;,&quot;image&quot;:&quot;https://cdn4.buysellads.net/uu/1/118164/1656573286-KuCoin_1_.png&quot;,&quot;longimp&quot;:&quot;T42JXJZ4TTTTTTFBZI3N6TTTTTTQCLN4KVTTTTTT54JAPYETTTTTT&quot;,&quot;longlink&quot;:&quot;TC2JXJZ4TTTTTTFBZI3N6TTTTTTQCLN4KVTTTTTT54JAPYETTTTTT5DPKHKCAR37P7NWAO4H2HJI5BBHQ3YU5NIMFH7E&quot;,&quot;num_slots&quot;:&quot;1&quot;,&quot;rendering&quot;:&quot;custom&quot;,&quot;statimp&quot;:&quot;//srv.buysellads.com/ads/imp/x/GTND42JMCAYDE2QYCWYLYKQNCWSDL27ECEAITZ3JCYBIK5QECT7DVK7KCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJWNBADLKM7UCBZG2Y&quot;,&quot;statlink&quot;:&quot;//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCWYLYKQNCWSDL27ECEAITZ3JCYBIK5QECT7DVK7KCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ&quot;,&quot;timestamp&quot;:&quot;1657121047&quot;,&quot;width&quot;:&quot;0&quot;,&quot;zoneid&quot;:&quot;48363&quot;,&quot;zonekey&quot;:&quot;CEADC2JI&quot;}]}">
                                                        <div class="p-2 px-2">
                                                            <div>
                                                                <a target="_blank" rel="noopener nofollow" href="//srv.buysellads.com/ads/click/x/GTND42JMCAYDE2QYCWYLYKQNCWSDL27ECEAITZ3JCYBIK5QECT7DVK7KCYBIE2QECT7D4KQ7CA7IPK3LCTYIC2QKC6SDP27JC6AIKK3EHJNCLSIZ?segment=placement:coingecko-button;">
                                                                    <img alt="KuCoin" src="https://cdn4.buysellads.net/uu/1/118164/1656573286-KuCoin_1_.png" style="width: 20px; height: 20px;">KuCoin
                                                                    <div class="text-muted mt-1" style="line-height: 1;">
                                                                        <small>Earn stable profits with professional asset management.</small>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="earnloan-button-03" data-target="buy-sell-ads.elPopover" data-zone-key="CEADC2JW"></div>
                                            </div>
                                            <div class="tw-flex flex-row-reverse">
                                                <small class="text-muted">Sponsored</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tw-hidden lg:tw-block tw-flex flex-column tw-mx-2 lg:tw-mx-3" data-target="coins-information.mobileOptionalInfo">
                    <div class="tw-hidden lg:tw-block tw-text-xl tw-font-bold tw-mb-0">
                        Info
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Website</span>
                        <div class="tw-flex flex-wrap tw-font-normal">
                            <a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://www.{{ $Response['id'] }}.org">{{ $Response['id'] }}.org</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://{{ $Response['id'] }}.org/{{ $Response['id'] }}.pdf">Whitepaper</a>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Explorers</span>
                        <div class="tw-flex">
                            <div class="dropdown center tw-h-7 tw-bg-gray-100 tw-rounded-md tw-rounded-l-md tw-rounded-r-md dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 cursor-pointer tw-my-0.5">
                                <a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-flex tw-items-center tw-justify-center tw-h-7 tw-text-sm tw-font-medium tw-text-gray-800 dark:tw-text-white dark:tw-bg-opacity-10 hover:tw-bg-gray-200 dark:hover:tw-bg-opacity-20 tw-rounded-l-md" href="https://blockchair.com/{{ $Response['id'] }}/">Blockchair</a>
                                <div class="tw-bg-gray-300 dark:tw-bg-gray-100 tw-rounded-md tw-rounded-l-none tw-flex tw-items-center tw-justify-center tw-h-7 tw-text-sm tw-font-medium tw-text-gray-800 dark:tw-text-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-ellipsis-h tw-text-sm tw-m-2">
                                    </span>
                                </div>
                                <div class="dropdown-menu tw-py-1 dropdown-menu-right tw-text-black lg:tw-w-56 tw-max-h-52 overflow-auto tw-text-black lg:tw-w-56 tw-rounded-md tw-shadow-lg tw-border tw-border-black tw-border-opacity-5 dark:tw-border dark:tw-border-white dark:tw-border-opacity-12" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item tw-text-sm tw-pl-4 tw-py-2" target="_blank" rel="nofollow noopener" href="https://{{ $Response['symbol'] }}.com/">{{ $Response['symbol'] }}</a>
                                    <a class="dropdown-item tw-text-sm tw-pl-4 tw-py-2" target="_blank" rel="nofollow noopener" href="https://{{ $Response['symbol'] }}.tokenview.com/">Tokenview</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-self-start tw-py-1 tw-my-0.5 tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Wallets</span>
                        <div class="tw-flex flex-wrap tw-font-normal">
                            <span data-controller="buy-sell-ads">
                                <div id="sponsored-wallet" data-target="buy-sell-ads.sponsoredWallet" data-zone-key="CEAI45QL"></div>
                            </span><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://gcko.io/ledger">Ledger</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://gcko.io/trezor">Trezor</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://electrum.org/">Electrum</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://www.xdefi.io/">Xdefi</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://gcko.io/trustwallet">Trust Wallet</a>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Community</span>
                        <div class="tw-flex flex-wrap tw-font-normal">
                            <a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://reddit.com/r/{{ $Response['id'] }}"><i class="fab mr-1 fa-reddit"></i>Reddit</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://twitter.com/{{ $Response['id'] }}"><i class="fab mr-1 fa-twitter"></i>Twitter</a><a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://www.facebook.com/134466763256650"><i class="fab mr-1 fa-facebook"></i>Facebook</a>
                            <a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://{{ $Response['id'] }}talk.org/">{{ $Response['id'] }}talk.org</a>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Search on</span>
                        <a rel="nofollow noopener" target="_blank" class="tw-text-gray-800 dark:tw-text-white tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20" href="https://twitter.com/search?q=${{ $Response['symbol'] }}">
                            <i class="far tw-text-sm tw-ml-0 align-middle tw-cursor-pointer fa-far fa-search"></i> Twitter
                        </a>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Source Code</span>
                        <div class="tw-flex flex-wrap tw-font-normal">
                            <a target="_blank" rel="nofollow noopener" class="tw-px-2.5 tw-py-1 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20 " href="https://github.com/{{ $Response['id'] }}"><i class="fab mr-1 fa-github"></i>Github</a>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">API id</span>
                        <div class="tw-px-2.5 tw-py-1.5 tw-my-0.5 tw-mr-1 tw-rounded-md tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-800 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-opacity-20" data-controller="coin-contract-address">
                            {{ $Response['id'] }}
                            <i data-address="{{ $Response['id'] }}" data-action="mousedown->coin-contract-address#copyAddress
                mouseenter->coin-contract-address#changeCursorToPointer" data-toggle="tooltip" data-placement="top" data-title="Click to copy" class="far tw-text-sm tw-ml-0 align-middle tw-cursor-pointer fa-far fa-clone" data-original-title="" title=""></i>
                        </div>
                    </div>
                    <div class="coin-link-row tw-mb-0">
                        <span class="tw-min-w-3/10 2xl:tw-min-w-1/4 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-mr-2">Tags</span>
                        <div class="tw-flex flex-wrap tw-font-normal tw-my-0.5" data-controller="category-tags">
                            <div class="dropdown center tw-h-7 tw-bg-gray-100 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 cursor-pointer tw-rounded-md">
                                <a class="tw-px-2.5 tw-flex tw-items-center tw-justify-center tw-h-7 tw-text-sm tw-font-medium tw-text-gray-800 dark:tw-text-white dark:tw-bg-opacity-10 hover:tw-bg-gray-200 dark:hover:tw-bg-opacity-20 tw-rounded-l-md" href="/en/categories/cryptocurrency">Cryptocurrency</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tw-grid tw-grid-cols-3 tw-mb-0">
                <div class="tw-col-span-3 tw-text-center tw-bg-gray-100 tw-h-8 center tw-mt-2 lg:tw-hidden tw-rounded-md dark:tw-bg-white dark:tw-bg-opacity-10 tw-font-medium cursor-pointer" data-target="coins-information.showButton" data-action="click->coins-information#show">
                    <span class="tw-text-gray-900 dark:tw-text-white tw-text-sm">Show More Info</span>
                </div>
                <div class="tw-hidden md:tw-hidden tw-col-span-3 tw-text-center tw-bg-gray-100 tw-h-8 center tw-mt-2 tw-rounded-md dark:tw-bg-white dark:tw-bg-opacity-10 tw-font-medium" data-target="coins-information.hideButton" data-action="click->coins-information#hide">
                    <span class="tw-text-gray-900 dark:tw-text-white tw-text-sm">Hide Info</span>
                </div>
            </div>
        </div>
        <hr class="lg:tw-hidden">
        <div class="full-width-mobile">

        </div>
        <div id="panel" class="nav-scroller">
            <ul class="nav tw-overflow-y-hidden tw-z-0 primary-tabs tw-border-solid tw-border-b tw-border-t-0 tw-border-l-0 tw-border-r-0 tw-border-gray-200 dark:tw-border-opacity-10 pb-0" id="navigationTab" role="tablist" data-controller="coin-outer-tab tab-switch" data-tab-switch-home="#overview" data-tab-switch-id="navigationTab">
                <li class="nav-item tw-mr-8">
                    <a class="tw-text-gray-500 hover:tw-text-gray-700 hover:tw-border-gray-300 tw-whitespace-nowrap tw-font-medium tw-text-sm tw-pb-3 nav-link tw--mb-px tw-pl-0 tw-pr-0 dark:tw-text-white active" data-toggle="tab" data-action="click->tab-switch#addHashToUrlAndPushState" href="#overview">Overview</a>
                </li>
                <li class="nav-item tw-mr-8">
                    <a class="tw-text-gray-500 hover:tw-text-gray-700 hover:tw-border-gray-300 tw-whitespace-nowrap tw-font-medium tw-text-sm tw-pb-3 nav-link tw--mb-px tw-pl-0 tw-pr-0 dark:tw-text-white" id="navigationTabMarketsChoice" data-toggle="tab" data-action="click->tab-switch#addHashToUrlAndPushState" data-url="/en/coins/1/markets_tab" href="#markets">Markets</a>
                </li>
                <li class="nav-item tw-mr-8">
                    <a class="tw-text-gray-500 hover:tw-text-gray-700 hover:tw-border-gray-300 tw-whitespace-nowrap tw-font-medium tw-text-sm tw-pb-3 nav-link tw--mb-px tw-pl-0 tw-pr-0 dark:tw-text-white " data-target="currency.currencyLink" href="https://www.coingecko.com/en/coins/{{ $Response['id'] }}/usd#panel">Converter</a>
                </li>
                <li class="nav-item tw-mr-8">
                    <a class="tw-text-gray-500 hover:tw-text-gray-700 hover:tw-border-gray-300 tw-whitespace-nowrap tw-font-medium tw-text-sm tw-pb-3 nav-link tw--mb-px tw-pl-0 tw-pr-0 dark:tw-text-white " href="/en/coins/{{ $Response['id'] }}/historical_data#panel">Historical Data</a>
                </li>
                <li class="nav-item tw-mr-8">
                    <a class="tw-text-gray-500 hover:tw-text-gray-700 hover:tw-border-gray-300 tw-whitespace-nowrap tw-font-medium tw-text-sm tw-pb-3 nav-link tw--mb-px tw-pl-0 tw-pr-0 dark:tw-text-white" href="/en/explain/{{ $Response['id'] }}_halving">{{ $Response['id'] }} Halving Countdown</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane show active" id="overview">
                <div class="tab-content inner-tab-scroller">
                    <ul class="nav nav-pills pl-0 md:tw-pb-0 tw-leading-10 md:tw-leading-0 tw-pt-4" role="tablist" data-controller="tab-switch coin-inner-tab" data-tab-switch-home="#general" data-tab-switch-id="innerTab">
                        <li class="inner-tab">
                            <a class="tw-px-4 tw-py-2 tw-mr-2 tw-rounded-2xl tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-700 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-primary-500 active" data-toggle="tab" role="tab" data-action="click->tab-switch#addHashToUrlAndPushState" id="general-tab" href="#general" data-url="">General</a>
                        </li>
                        <li class="inner-tab">
                            <a class="tw-px-4 tw-py-2 tw-mr-2 tw-rounded-2xl tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-700 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-primary-500 " data-toggle="tab" role="tab" data-action="click->tab-switch#addHashToUrlAndPushState" id="social-tab" href="#social" data-url="/en/coins/1/social_tab">Social</a>
                        </li>
                        <li class="inner-tab">
                            <a class="tw-px-4 tw-py-2 tw-mr-2 tw-rounded-2xl tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-700 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-primary-500 " data-toggle="tab" role="tab" data-action="click->tab-switch#addHashToUrlAndPushState" id="developer-tab" href="#developer" data-url="/en/coins/1/developer_tab">Developer</a>
                        </li>
                        <li class="inner-tab">
                            <a class="tw-px-4 tw-py-2 tw-mr-2 tw-rounded-2xl tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-700 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-primary-500 " data-toggle="tab" role="tab" data-action="click->tab-switch#addHashToUrlAndPushState" id="widgets-tab" href="#widgets" data-url="/en/coins/1/widgets_tab">Widgets</a>
                        </li>
                        <li class="inner-tab">
                            <a class="tw-px-4 tw-py-2 tw-mr-2 tw-rounded-2xl tw-text-sm tw-font-medium tw-bg-gray-100 tw-text-gray-700 hover:tw-bg-gray-200 dark:tw-text-white dark:tw-bg-white dark:tw-bg-opacity-10 dark:hover:tw-bg-opacity-20 dark:focus:tw-bg-primary-500 " data-toggle="tab" role="tab" data-action="click->tab-switch#addHashToUrlAndPushState" id="analysis-tab" href="#analysis" data-url="/en/coins/1/analysis_tab">Analysis</a>
                        </li>
                    </ul>
                    <div class="tab-pane show active" id="general">
                        <div class="row no-gutters md:tw-mt-6">
                            <div class="col-lg-8 pr-md-3">
                                <h1 class="tw-text-gray-900 dark:tw-text-white tw-items-center tw-mt-4 tw-mb-2 tw-text-black tw-text-lg md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">
                                    {{ $Response['id'] }} Price Chart ({{ $Response['symbol'] }}/<span data-target="currency.currencyCode">USD</span>)
                                </h1>
                                <p class="tw-text-sm tw-text-gray-500 tw-mt-1 dark:tw-text-gray-400">
                                    Last updated 03:22PM UTC. Currency in <span data-target="currency.currencyCode">USD</span>.
                                </p>

                                <div class="ajax chart-parent">
                                    <div class="price-chart" data-controller="price-chart" data-price-chart-title-icon="https://assets.coingecko.com/coins/images/1/small/{{ $Response['id'] }}.png?1547033579" data-price-chart-title="{{ $Response['id'] }} Chart" data-price-chart-watermark="true">
                                        <div class="filter-chart tw-flex tw-flex-wrap flex-column flex-md-row tw-justify-center justify-content-md-between" data-target="price-chart.filterChart">
                                            <div class="tw-flex left-0 tw-mb-2">
                                                <div class="tw-relative tw-z-0 tw-inline-flex tw-shadow-sm tw-rounded-md chart-selector" data-target="price-chart.chartMode">
                                                    <button type="button" class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-l-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 active" data-action="click->price-chart#updateChart" data-action-type="type-price">
                                                        Price
                                                    </button>
                                                    <button type="button" class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10" data-target="price-chart.marketCapButton" data-action="click->price-chart#updateChart" data-action-type="type-market-cap">
                                                        Market Cap
                                                    </button>
                                                    <button type="button" class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-r-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10" id="chart-toggle-trading-view" data-action="click->price-chart#updateChart" data-action-type="type-trading-view">
                                                        TradingView
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="tw-h-8 tw-mb-2 md:tw-mb-0 tw-relative tw-z-0 tw-inline-flex tw-shadow-sm tw-rounded-md chart-selector left-0" data-target="price-chart.toolbar">
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-l-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white active graph-stats-btn-24h" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="24_hours" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/24_hours.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/24_hours.json" href="javascript:;">24h</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn-7d" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="7_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/7_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/7_days.json" href="javascript:;">7d</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn-14d" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="14_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/14_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/14_days.json" href="javascript:;">14d</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn-30d" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="30_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/30_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/30_days.json" href="javascript:;">30d</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn-90d" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="90_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/90_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/90_days.json" href="javascript:;">90d</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn graph-stats-btn-180d tw-hidden md:tw-flex" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="180_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/180_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/180_days.json" href="javascript:;">180d</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn graph-stats-btn-1y tw-hidden md:tw-flex" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="365_days" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/365_days.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/365_days.json" href="javascript:;">1y</a>
                                                <a class="tw-bg-white dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-r-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white graph-stats-btn graph-stats-btn-max" data-action="click->price-chart#updateChart" data-action-type="duration" data-action-detail="max" data-graph-stats-url="https://www.coingecko.com/price_charts/1/usd/max.json" data-market-cap-graph-stats-url="https://www.coingecko.com/market_cap/1/usd/max.json" href="javascript:;">Max</a>
                                            </div>
                                        </div>
                                        <div class="filter-chart tw-flex tw-justify-between md:tw-justify-end">
                                            <div class="tailwind-reset tw-relative tw-z-0 tw-inline-flex tw-shadow-sm tw-rounded-md chart-selector tw-mb-2" data-target="price-chart.chartModeButtonGroup">
                                                <button type="button" class="tw-bg-white dark:tw-bg-white hover:tw-bg-gray-50 dark:tw-bg-opacity-5 dark:tw-text-white dark:hover:tw-bg-opacity-10 tw-h-8 tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-l-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 active" aria-pressed="true" data-action="click->price-chart#updateChart" data-action-type="chart-mode" data-action-detail="line" data-target="price-chart.chartModeButton">
                                                    <i class="fas fa-chart-line"></i>
                                                </button>
                                                <button type="button" class="btn btn-icon shadow-none tw-bg-white dark:tw-bg-white hover:tw-bg-gray-50 dark:tw-bg-opacity-5 dark:hover:tw-bg-opacity-10 tw-rounded-md tw-rounded-l-none md:tw-rounded-none tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 dark:tw-border-opacity-10 center tw-w-11 dark:focus:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 dark:focus:tw-bg-opacity-10" aria-pressed="true" data-assign-active-class="false" data-action="click->price-chart#updateChart" data-action-type="chart-mode" data-action-detail="candlestick" data-price-chart-title="{{ $Response['id'] }} Chart" data-price-chart-watermark="true" data-target="price-chart.chartModeButton">
                                                    <svg viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g id="noun_Heikin-Ashi_973938" transform="translate(23.000000, 9.000000)" fill="#000000">
                                                                <path d="M42.954918,10.92 L36.545082,10.92 L36.545082,0 L34.454918,0 L34.454918,10.92 L28.045082,10.92 C27.4877049,10.92 27,11.41 27,11.97 L27,51.03 C27,51.59 27.4877049,52.08 28.045082,52.08 L34.454918,52.08 L34.454918,63 L36.545082,63 L36.545082,52.08 L42.954918,52.08 C43.5122951,52.08 44,51.59 44,51.03 L44,11.97 C44,11.41 43.5122951,10.92 42.954918,10.92 Z" id="Path" class="chart-svg"></path>
                                                                <path d="M15.954918,18.8837209 L9.54508197,18.8837209 L9.54508197,8 L7.45491803,8 L7.45491803,18.8837209 L1.04508197,18.8837209 C0.487704918,18.8837209 0,19.372093 0,19.9302326 L0,44.0697674 C0,44.627907 0.487704918,45.1162791 1.04508197,45.1162791 L7.45491803,45.1162791 L7.45491803,56 L9.54508197,56 L9.54508197,45.1162791 L15.954918,45.1162791 C16.5122951,45.1162791 17,44.627907 17,44.0697674 L17,19.9302326 C17,19.372093 16.5122951,18.8837209 15.954918,18.8837209 Z" id="Path" class="chart-svg"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <a class="tw-hidden d-md-inline-block tw-bg-white hover:tw-bg-gray-50 dark:tw-bg-white dark:tw-bg-opacity-5 dark:tw-text-white tw-h-8 tw--ml-px tw-relative tw-inline-flex tw-items-center tw-px-4 tw-py-2 tw-rounded-r-md tw-border-solid tw-border tw-cursor-pointer tw-border-gray-300 tw-text-sm tw-font-medium tw-text-gray-700 hover:tw-bg-gray-50 dark:hover:tw-bg-opacity-10 focus:tw-z-10 focus:tw-outline-none focus:tw-bg-gray-200 hover:tw-bg-gray-50 dark:tw-border-opacity-10 dark:focus:tw-bg-opacity-10 dark:hover:tw-text-white coingecko tw-px-2 tw-pt-1.5" data-target="currency.currencyLink" href="https://www.coingecko.com/en/coins/{{ $Response['id'] }}/usd#panel"><i class="far fa-expand-arrows"></i></a>
                                            </div>
                                        </div>
                                        <div class="tw-z-10 img-auto graph-stats-loading spinner-grow spinner-grow-sm text-info" style="display: none;" data-target="price-chart.spinner">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <p data-target="price-chart.ohlcSorry" style="display: none;">We're indexing our data. Come back later!</p>
                                        <div id="coin_portfolio_price_chart_1_9c501661" style="height: 600px; overflow: hidden;" data-target="price-chart.chart" data-vs-currency="usd" data-initial-url="https://www.coingecko.com/price_charts/1/usd/24_hours.json" data-ohlc-url="https://www.coingecko.com/ohlc/1/series/CURRENCY/DURATION.json" data-custom-chart-url="https://www.coingecko.com/price_charts/1/usd/custom.json" data-custom-chart-market-cap-url="https://www.coingecko.com/market_cap/1/usd/custom.json" data-nav-max-chart-url="https://www.coingecko.com/price_charts/1/usd/max.json" data-is-portfolio="false" data-is-rebase="false" data-coin-id="1" data-highcharts-chart="3">
                                            <div style="position: relative; height: 0px; z-index: 1;"><input name="min" class="highcharts-range-selector" type="date" min="2013-04-28" style="margin-top: 40px;" data-hc-time="1657034772028" max="2022-07-05"><input name="max" class="highcharts-range-selector" type="date" max="2022-07-06" style="margin-top: 40px;" data-hc-time="1657121043641" min="2022-07-05"></div>
                                            <div id="highcharts-7kfvg1g-3189" dir="ltr" class="highcharts-container cg-highcharts"><svg version="1.1" class="highcharts-root" xmlns="http://www.w3.org/2000/svg" width="830" height="600" viewBox="0 0 830 600">
                                                    <desc>Created with Highcharts 9.2.2</desc>
                                                    <defs>
                                                        <linearGradient id="gradient-standard" x1="0" y1="0" x2="0" y2="1">
                                                            <stop offset="0"></stop>
                                                            <stop offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="highcharts-7kfvg1g-3190-">
                                                            <rect x="0" y="0" width="810" height="412"></rect>
                                                        </clipPath>
                                                        <clipPath id="highcharts-7kfvg1g-3479-">
                                                            <rect x="0" y="0" width="810" height="330"></rect>
                                                        </clipPath>
                                                        <clipPath id="highcharts-7kfvg1g-3768-">
                                                            <rect x="0" y="0" width="810" height="82"></rect>
                                                        </clipPath>
                                                        <clipPath id="highcharts-7kfvg1g-4250-">
                                                            <rect x="0" y="0" width="810" height="40"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect class="highcharts-background" x="0.5" y="0.5" width="828" height="598" rx="0" ry="0"></rect>
                                                    <rect class="highcharts-plot-background" x="10" y="84" width="810" height="412"></rect>
                                                    <image preserveAspectRatio="none" x="715" y="380" width="100" height="28" xlink:href="//static.coingecko.com/packs/media/images/coingecko-greyscale-b3d1c0a3.png" class="dark:tw-opacity-25"></image>
                                                    <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 13.5 84 L 13.5 414 M 13.5 414 L 13.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 80.5 84 L 80.5 414 M 80.5 414 L 80.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 147.5 84 L 147.5 414 M 147.5 414 L 147.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 216.5 84 L 216.5 414 M 216.5 414 L 216.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 283.5 84 L 283.5 414 M 283.5 414 L 283.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 350.5 84 L 350.5 414 M 350.5 414 L 350.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 418.5 84 L 418.5 414 M 418.5 414 L 418.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 485.5 84 L 485.5 414 M 485.5 414 L 485.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 553.5 84 L 553.5 414 M 553.5 414 L 553.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 618.5 84 L 618.5 414 M 618.5 414 L 618.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 685.5 84 L 685.5 414 M 685.5 414 L 685.5 496" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 752.5 84 L 752.5 414 M 752.5 414 L 752.5 496" opacity="1"></path>
                                                    </g>
                                                    <g class="highcharts-grid highcharts-xaxis-grid highcharts-navigator-xaxis" data-z-index="1">
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 69.5 545 L 69.5 585" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 245.5 545 L 245.5 585" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 422.5 545 L 422.5 585" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 598.5 545 L 598.5 585" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 774.5 545 L 774.5 585" opacity="1"></path>
                                                    </g>
                                                    <g class="highcharts-grid highcharts-yaxis-grid yaxis-primary" data-z-index="1">
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 414.5 L 820 414.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 359.5 L 820 359.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 304.5 L 820 304.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 249.5 L 820 249.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 194.5 L 820 194.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 139.5 L 820 139.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 83.5 L 820 83.5" opacity="1"></path>
                                                    </g>
                                                    <g class="highcharts-grid highcharts-yaxis-grid highcharts-navigator-yaxis" data-z-index="1">
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 585.5 L 820 585.5" opacity="1"></path>
                                                        <path data-z-index="1" class="highcharts-grid-line" d="M 10 557.5 L 820 557.5" opacity="1"></path>
                                                    </g>
                                                    <rect class="highcharts-plot-border" data-z-index="1" x="9.5" y="83.5" width="811" height="413"></rect>
                                                    <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                                                        <path class="highcharts-axis-line" d="M 10 496.5 L 820 496.5"></path>
                                                        <path class="highcharts-tick" d="M 13.5 496 L 13.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 80.5 496 L 80.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 147.5 496 L 147.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 216.5 496 L 216.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 283.5 496 L 283.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 350.5 496 L 350.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 418.5 496 L 418.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 485.5 496 L 485.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 553.5 496 L 553.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 618.5 496 L 618.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 685.5 496 L 685.5 506" opacity="1"></path>
                                                        <path class="highcharts-tick" d="M 752.5 496 L 752.5 506" opacity="1"></path>
                                                    </g>
                                                    <g class="highcharts-axis highcharts-xaxis highcharts-navigator-xaxis" data-z-index="2">
                                                        <path class="highcharts-axis-line" d="M 10 585 L 820 585"></path>
                                                    </g>
                                                    <g class="highcharts-axis highcharts-yaxis yaxis-primary" data-z-index="2">
                                                        <path class="highcharts-axis-line" d="M 10 84 L 10 414"></path>
                                                    </g>
                                                    <g class="highcharts-axis highcharts-yaxis highcharts-navigator-yaxis" data-z-index="2">
                                                        <path class="highcharts-axis-line" d="M 10 545 L 10 585"></path>
                                                    </g>
                                                    <g class="highcharts-series-group" data-z-index="3">
                                                        <g class="highcharts-series highcharts-series-0 highcharts-area-series highcharts-color-primary" data-z-index="0.1" transform="translate(10,84) scale(1 1)" clip-path="url(#highcharts-7kfvg1g-3479-)">
                                                            <path d="M 1.40625 296.8513613473067 L 4.2187499989335 292.7101590322943 L 7.0312500001512 290.04347516525354 L 9.8437499990847 291.83681009417387 L 12.656250000302 278.1759197685856 L 15.468749999236 279.1895604665073 L 18.281250000454 274.05268470717937 L 21.093749999387 272.260789133422 L 23.906250000605 268.1890301920524 L 26.718749999538 266.52154254139316 L 29.531250000756 264.2110467078684 L 32.34374999969 261.27288160436575 L 35.156250000907 256.88452396036985 L 37.968749999841 253.73833415310517 L 40.781250001059 248.50595054617173 L 43.593749999992 245.35391274298695 L 46.406249998926 251.78805202951588 L 49.218750000143 254.0949036250318 L 52.031249999077 258.49826678896045 L 54.843750000294 261.25917522860664 L 57.656249999228 259.90353713119845 L 60.468750000446 258.0913590111851 L 63.281249999379 249.16034538009632 L 66.093750000597 239.2005174369955 L 68.90624999953 231.4180009891715 L 71.718750000748 238.07751064139438 L 74.531249999682 232.76821709260403 L 77.343750000899 226.63504798946713 L 80.156249999833 220.10220364502646 L 82.968750001051 225.00406385640548 L 85.781249999984 222.16784925233588 L 88.593749998918 227.1910023629722 L 91.406250000135 220.0918225948351 L 94.218749999069 233.67755380054237 L 97.031250000287 229.37755748516756 L 99.84374999922 227.48538270090006 L 102.65625000044 227.4331120367963 L 105.46874999937 215.30172963689358 L 108.28125000059 212.36592887322456 L 111.09374999952 195.94155807050322 L 113.90625000074 193.3790596102547 L 116.71874999967 190.33022481659137 L 119.53125000089 182.35411186695382 L 122.34374999982 153.66810622797385 L 125.15625000104 146.082367400823 L 127.96874999998 134.7188935392297 L 130.78124999891 129.3801902728145 L 133.59375000013 123.9552346012878 L 136.40624999906 114.47904315839281 L 139.21875000028 115.66561807131126 L 142.03124999921 107.90998114564835 L 144.84375000043 105.61659572440658 L 147.65624999936 72.5440293706339 L 150.46875000058 66.93888622621273 L 153.28124999951 64.6083612328299 L 156.09375000073 76.27822023599117 L 158.90624999967 75.318976270778 L 161.71875000088 60.14809498728425 L 164.53124999982 37.42134590231444 L 167.34375000103 56.05493612122291 L 170.15624999997 26.498930511918786 L 172.9687499989 31.24875281716578 L 175.78125000012 29.20717231940216 L 178.59374999905 35.00462227941193 L 181.40625000027 45.88559305138028 L 184.2187499992 58.85123311004651 L 187.03125000042 58.56840262192594 L 189.84374999936 56.416210717426736 L 192.65625000057 55.373216089016296 L 195.46874999951 65.5110780927069 L 198.28125000072 90.0413609187145 L 201.09374999966 92.8910834975454 L 203.90625000088 87.84619818103201 L 206.71874999981 100.17361712322781 L 209.53125000103 106.88533390721895 L 212.34374999996 99.72730255036012 L 215.15624999889 86.6917957291563 L 217.96875000011 79.33188102613508 L 220.78124999904 90.75285845905083 L 223.59375000026 85.63910501311736 L 226.4062499992 79.05948921731411 L 229.21875000041 81.78893678617766 L 232.03124999935 89.31128159296182 L 234.84375000057 87.16108037242483 L 237.6562499995 86.33377024917644 L 240.46875000072 92.43494140091491 L 243.28124999965 101.98111711928425 L 246.09375000087 90.65509734482228 L 248.9062499998 90.58661263490359 L 251.71875000102 83.45431251226057 L 254.53124999995 85.58669236193171 L 257.34374999889 82.28373131546425 L 260.1562500001 74.53597813622088 L 262.96874999904 80.91130385145487 L 265.78125000025 90.16659744444559 L 268.59374999919 86.63706770669384 L 271.40625000041 87.17107478530139 L 274.21874999934 121.69527310033627 L 277.03125000056 124.10967988001408 L 279.84374999949 121.24967215398792 L 282.65625000071 121.33704622942074 L 285.46874999964 122.25941015074326 L 288.28125000086 123.46847392587748 L 291.09374999979 123.6121959978291 L 293.90625000101 116.87445569669589 L 296.71874999994 112.45565428744172 L 299.53124999888 117.5747935023222 L 302.3437500001 114.9724742274415 L 305.15624999903 122.76828789673448 L 307.96875000025 131.60861104772653 L 310.78124999918 119.04339116413422 L 313.5937500004 112.10265242596884 L 316.40624999933 110.16803981226309 L 319.21875000055 104.68464772352513 L 322.03124999948 95.26972672536925 L 324.8437500007 95.23409809153148 L 327.65624999963 99.77561602151175 L 330.46875000085 95.28375528692035 L 333.28124999979 124.83162771918163 L 336.093750001 116.78760110443727 L 338.90624999994 111.06272427135693 L 341.71874999887 115.66451164691716 L 344.53125000009 118.40521641411652 L 347.34374999902 123.47830356805841 L 350.15625000024 145.70631904494294 L 352.96874999917 161.69404505288665 L 355.78125000039 156.69027846273588 L 358.59374999932 189.13087969029905 L 361.40625000054 189.84402584480966 L 364.21874999947 194.10764238407128 L 367.03125000069 202.33805205181926 L 369.84374999963 191.49274927851445 L 372.65625000084 191.106515046044 L 375.46874999978 195.1441455463459 L 378.28125000099 183.67654960367378 L 381.09374999993 196.55863028138242 L 383.90624999886 192.47636042371465 L 386.71875000008 191.9102060681887 L 389.53124999901 193.99592764459427 L 392.34375000023 190.13013734545376 L 395.15624999916 198.4832824025426 L 397.96875000038 184.43500315695258 L 400.78124999932 209.28748668443018 L 403.59375000053 201.07675868159086 L 406.40624999947 202.5192205016811 L 409.21875000068 200.54419829865728 L 412.03124999962 197.25870106702902 L 414.84375000084 184.82920038156087 L 417.65624999977 187.79777638631575 L 420.46875000099 187.63979413962582 L 423.28124999992 170.6110508487303 L 426.09375000114 175.43991051482976 L 428.90625000007 178.936245305103 L 431.71874999901 174.83892591305798 L 434.53125000022 152.60278738175597 L 437.34374999916 143.62153599484097 L 440.15625000037 124.46000704867888 L 442.96874999931 127.6811508595053 L 445.78125000053 138.0419337180145 L 448.59374999946 137.83947192303546 L 451.40625000068 145.67139565454264 L 454.21874999961 141.65075034453236 L 457.03125000083 135.94095463094985 L 459.84374999976 144.93783454866352 L 462.65625000098 141.41538648068715 L 465.46874999991 141.34463450214244 L 468.28125000113 137.67666140859816 L 471.09375000006 141.1264275916753 L 473.906249999 149.87119692905492 L 476.71875000021 153.71564369117274 L 479.53124999915 162.35594163027832 L 482.34375000037 162.18146979929173 L 485.1562499993 156.00298981274835 L 487.96875000052 152.11406836775757 L 490.78124999945 151.70075678799344 L 493.59375000067 159.04601910859165 L 496.4062499996 159.3639041192799 L 499.21875000082 165.76316576097685 L 502.03124999975 164.41820159796282 L 504.84375000097 161.04770370218523 L 507.6562499999 158.16204870873997 L 510.46875000112 184.27735885542498 L 513.28125000006 173.34759858730752 L 516.09374999899 178.47484004372345 L 518.90625000021 173.2979033259231 L 521.71874999914 171.41212108945743 L 524.53125000036 167.12493066507807 L 527.34374999929 141.6505243833369 L 530.15625000051 133.45200822359556 L 532.96874999944 130.7794388205622 L 535.78125000066 132.1649331606658 L 538.59374999959 129.77938608121016 L 541.40625000081 124.48415889330965 L 544.21874999975 126.30688925142064 L 547.03125000096 129.11376193373712 L 549.8437499999 129.36284707670137 L 552.65625000111 118.26156864207695 L 555.46875000005 125.16223014249758 L 558.28124999898 125.86851015492087 L 561.0937500002 125.7709383030384 L 563.90624999913 139.30491377624813 L 566.71875000035 130.68156945898735 L 569.53124999928 123.95825903544662 L 572.3437500005 129.89521404833803 L 575.15624999943 124.57548099365545 L 577.96875000065 116.01254084896601 L 580.78124999959 113.05044374392142 L 583.5937500008 115.47567672689851 L 586.40624999974 114.56872150101648 L 589.21875000096 119.90001551670102 L 592.03124999989 126.06412483305132 L 594.84375000111 122.52425467538384 L 597.65625000004 130.8513241704296 L 600.46874999897 125.95634900813769 L 603.28125000019 122.96444434366217 L 606.09374999912 105.89348805780202 L 608.90625000034 111.08646543523341 L 611.71874999928 114.26639131786607 L 614.53125000049 115.17932583088782 L 617.34374999943 114.40808158470674 L 620.15625000064 122.46899758746892 L 622.96874999958 123.39598937286144 L 625.7812500008 127.76926597981372 L 628.59374999973 126.30547895790914 L 631.40625000095 125.20912837557844 L 634.21874999988 132.9505090374114 L 637.0312500011 133.12154322034024 L 639.84375000003 137.7194243522133 L 642.65624999897 129.70815827340127 L 645.46875000018 121.4647746343897 L 648.28124999912 130.17209451373157 L 651.09375000033 132.38841691254768 L 653.90624999927 131.70278095163317 L 656.71875000049 134.36401895445974 L 659.53124999942 140.91052822112565 L 662.34375000064 142.0558096759946 L 665.15624999957 142.03580188079954 L 667.96875000079 141.21023559015842 L 670.78124999972 147.9102706511675 L 673.59375000094 147.42312882016893 L 676.40624999987 149.29150713286072 L 679.21875000109 144.79147456865533 L 682.03125000002 142.89701517951775 L 684.84374999896 136.37194442211023 L 687.65625000018 140.09255599610026 L 690.46874999911 140.90674899365848 L 693.28125000033 139.64169967325745 L 696.09374999926 169.0983032630805 L 698.90625000048 164.88877432908026 L 701.71874999941 165.88835152357518 L 704.53125000063 161.7801023093571 L 707.34374999956 143.40685906464873 L 710.15625000078 142.1771541695625 L 712.96874999971 142.74040701375066 L 715.78125000093 134.34080119466307 L 718.59374999986 132.63630677319597 L 721.40625000108 131.4883206097343 L 724.21875000002 134.11348928581538 L 727.03124999895 134.67522427433397 L 729.84375000017 133.54928978258488 L 732.6562499991 131.74350255544022 L 735.46875000032 124.86298872264888 L 738.28124999925 127.58039959772591 L 741.09375000047 123.43135933307545 L 743.9062499994 121.57413297375896 L 746.71875000062 105.56542328757357 L 749.53124999955 125.19387384856884 L 752.34375000077 127.54633358247614 L 755.15624999971 133.01665955393037 L 757.96875000092 122.2878272401206 L 760.78124999986 120.65047042790073 L 763.59375000107 123.31047834589751 L 766.40625000001 109.86125719632975 L 769.21874999894 122.44382304955136 L 772.03125000016 130.26498430952014 L 774.84374999909 129.79336045691213 L 777.65625000031 124.81261614547577 L 780.46874999924 115.002336972868 L 783.28125000046 120.48864671494638 L 786.0937499994 113.49666058476737 L 788.90625000061 117.60975049815207 L 791.71874999955 118.37580701625927 L 794.53125000076 126.47216673935989 L 797.3437499997 126.49171614818616 L 800.15625000092 137.48459133027652 L 802.96874999985 136.80521991240573 L 805.78125000107 134.915808223947 L 808.59375 137.47271754271148 L 808.59375 330 L 805.78125000107 330 L 802.96874999985 330 L 800.15625000092 330 L 797.3437499997 330 L 794.53125000076 330 L 791.71874999955 330 L 788.90625000061 330 L 786.0937499994 330 L 783.28125000046 330 L 780.46874999924 330 L 777.65625000031 330 L 774.84374999909 330 L 772.03125000016 330 L 769.21874999894 330 L 766.40625000001 330 L 763.59375000107 330 L 760.78124999986 330 L 757.96875000092 330 L 755.15624999971 330 L 752.34375000077 330 L 749.53124999955 330 L 746.71875000062 330 L 743.9062499994 330 L 741.09375000047 330 L 738.28124999925 330 L 735.46875000032 330 L 732.6562499991 330 L 729.84375000017 330 L 727.03124999895 330 L 724.21875000002 330 L 721.40625000108 330 L 718.59374999986 330 L 715.78125000093 330 L 712.96874999971 330 L 710.15625000078 330 L 707.34374999956 330 L 704.53125000063 330 L 701.71874999941 330 L 698.90625000048 330 L 696.09374999926 330 L 693.28125000033 330 L 690.46874999911 330 L 687.65625000018 330 L 684.84374999896 330 L 682.03125000002 330 L 679.21875000109 330 L 676.40624999987 330 L 673.59375000094 330 L 670.78124999972 330 L 667.96875000079 330 L 665.15624999957 330 L 662.34375000064 330 L 659.53124999942 330 L 656.71875000049 330 L 653.90624999927 330 L 651.09375000033 330 L 648.28124999912 330 L 645.46875000018 330 L 642.65624999897 330 L 639.84375000003 330 L 637.0312500011 330 L 634.21874999988 330 L 631.40625000095 330 L 628.59374999973 330 L 625.7812500008 330 L 622.96874999958 330 L 620.15625000064 330 L 617.34374999943 330 L 614.53125000049 330 L 611.71874999928 330 L 608.90625000034 330 L 606.09374999912 330 L 603.28125000019 330 L 600.46874999897 330 L 597.65625000004 330 L 594.84375000111 330 L 592.03124999989 330 L 589.21875000096 330 L 586.40624999974 330 L 583.5937500008 330 L 580.78124999959 330 L 577.96875000065 330 L 575.15624999943 330 L 572.3437500005 330 L 569.53124999928 330 L 566.71875000035 330 L 563.90624999913 330 L 561.0937500002 330 L 558.28124999898 330 L 555.46875000005 330 L 552.65625000111 330 L 549.8437499999 330 L 547.03125000096 330 L 544.21874999975 330 L 541.40625000081 330 L 538.59374999959 330 L 535.78125000066 330 L 532.96874999944 330 L 530.15625000051 330 L 527.34374999929 330 L 524.53125000036 330 L 521.71874999914 330 L 518.90625000021 330 L 516.09374999899 330 L 513.28125000006 330 L 510.46875000112 330 L 507.6562499999 330 L 504.84375000097 330 L 502.03124999975 330 L 499.21875000082 330 L 496.4062499996 330 L 493.59375000067 330 L 490.78124999945 330 L 487.96875000052 330 L 485.1562499993 330 L 482.34375000037 330 L 479.53124999915 330 L 476.71875000021 330 L 473.906249999 330 L 471.09375000006 330 L 468.28125000113 330 L 465.46874999991 330 L 462.65625000098 330 L 459.84374999976 330 L 457.03125000083 330 L 454.21874999961 330 L 451.40625000068 330 L 448.59374999946 330 L 445.78125000053 330 L 442.96874999931 330 L 440.15625000037 330 L 437.34374999916 330 L 434.53125000022 330 L 431.71874999901 330 L 428.90625000007 330 L 426.09375000114 330 L 423.28124999992 330 L 420.46875000099 330 L 417.65624999977 330 L 414.84375000084 330 L 412.03124999962 330 L 409.21875000068 330 L 406.40624999947 330 L 403.59375000053 330 L 400.78124999932 330 L 397.96875000038 330 L 395.15624999916 330 L 392.34375000023 330 L 389.53124999901 330 L 386.71875000008 330 L 383.90624999886 330 L 381.09374999993 330 L 378.28125000099 330 L 375.46874999978 330 L 372.65625000084 330 L 369.84374999963 330 L 367.03125000069 330 L 364.21874999947 330 L 361.40625000054 330 L 358.59374999932 330 L 355.78125000039 330 L 352.96874999917 330 L 350.15625000024 330 L 347.34374999902 330 L 344.53125000009 330 L 341.71874999887 330 L 338.90624999994 330 L 336.093750001 330 L 333.28124999979 330 L 330.46875000085 330 L 327.65624999963 330 L 324.8437500007 330 L 322.03124999948 330 L 319.21875000055 330 L 316.40624999933 330 L 313.5937500004 330 L 310.78124999918 330 L 307.96875000025 330 L 305.15624999903 330 L 302.3437500001 330 L 299.53124999888 330 L 296.71874999994 330 L 293.90625000101 330 L 291.09374999979 330 L 288.28125000086 330 L 285.46874999964 330 L 282.65625000071 330 L 279.84374999949 330 L 277.03125000056 330 L 274.21874999934 330 L 271.40625000041 330 L 268.59374999919 330 L 265.78125000025 330 L 262.96874999904 330 L 260.1562500001 330 L 257.34374999889 330 L 254.53124999995 330 L 251.71875000102 330 L 248.9062499998 330 L 246.09375000087 330 L 243.28124999965 330 L 240.46875000072 330 L 237.6562499995 330 L 234.84375000057 330 L 232.03124999935 330 L 229.21875000041 330 L 226.4062499992 330 L 223.59375000026 330 L 220.78124999904 330 L 217.96875000011 330 L 215.15624999889 330 L 212.34374999996 330 L 209.53125000103 330 L 206.71874999981 330 L 203.90625000088 330 L 201.09374999966 330 L 198.28125000072 330 L 195.46874999951 330 L 192.65625000057 330 L 189.84374999936 330 L 187.03125000042 330 L 184.2187499992 330 L 181.40625000027 330 L 178.59374999905 330 L 175.78125000012 330 L 172.9687499989 330 L 170.15624999997 330 L 167.34375000103 330 L 164.53124999982 330 L 161.71875000088 330 L 158.90624999967 330 L 156.09375000073 330 L 153.28124999951 330 L 150.46875000058 330 L 147.65624999936 330 L 144.84375000043 330 L 142.03124999921 330 L 139.21875000028 330 L 136.40624999906 330 L 133.59375000013 330 L 130.78124999891 330 L 127.96874999998 330 L 125.15625000104 330 L 122.34374999982 330 L 119.53125000089 330 L 116.71874999967 330 L 113.90625000074 330 L 111.09374999952 330 L 108.28125000059 330 L 105.46874999937 330 L 102.65625000044 330 L 99.84374999922 330 L 97.031250000287 330 L 94.218749999069 330 L 91.406250000135 330 L 88.593749998918 330 L 85.781249999984 330 L 82.968750001051 330 L 80.156249999833 330 L 77.343750000899 330 L 74.531249999682 330 L 71.718750000748 330 L 68.90624999953 330 L 66.093750000597 330 L 63.281249999379 330 L 60.468750000446 330 L 57.656249999228 330 L 54.843750000294 330 L 52.031249999077 330 L 49.218750000143 330 L 46.406249998926 330 L 43.593749999992 330 L 40.781250001059 330 L 37.968749999841 330 L 35.156250000907 330 L 32.34374999969 330 L 29.531250000756 330 L 26.718749999538 330 L 23.906250000605 330 L 21.093749999387 330 L 18.281250000454 330 L 15.468749999236 330 L 12.656250000302 330 L 9.8437499990847 330 L 7.0312500001512 330 L 4.2187499989335 330 L 1.40625 330 Z" class="highcharts-area" data-z-index="0"></path>
                                                            <path d="M 1.40625 296.8513613473067 L 4.2187499989335 292.7101590322943 L 7.0312500001512 290.04347516525354 L 9.8437499990847 291.83681009417387 L 12.656250000302 278.1759197685856 L 15.468749999236 279.1895604665073 L 18.281250000454 274.05268470717937 L 21.093749999387 272.260789133422 L 23.906250000605 268.1890301920524 L 26.718749999538 266.52154254139316 L 29.531250000756 264.2110467078684 L 32.34374999969 261.27288160436575 L 35.156250000907 256.88452396036985 L 37.968749999841 253.73833415310517 L 40.781250001059 248.50595054617173 L 43.593749999992 245.35391274298695 L 46.406249998926 251.78805202951588 L 49.218750000143 254.0949036250318 L 52.031249999077 258.49826678896045 L 54.843750000294 261.25917522860664 L 57.656249999228 259.90353713119845 L 60.468750000446 258.0913590111851 L 63.281249999379 249.16034538009632 L 66.093750000597 239.2005174369955 L 68.90624999953 231.4180009891715 L 71.718750000748 238.07751064139438 L 74.531249999682 232.76821709260403 L 77.343750000899 226.63504798946713 L 80.156249999833 220.10220364502646 L 82.968750001051 225.00406385640548 L 85.781249999984 222.16784925233588 L 88.593749998918 227.1910023629722 L 91.406250000135 220.0918225948351 L 94.218749999069 233.67755380054237 L 97.031250000287 229.37755748516756 L 99.84374999922 227.48538270090006 L 102.65625000044 227.4331120367963 L 105.46874999937 215.30172963689358 L 108.28125000059 212.36592887322456 L 111.09374999952 195.94155807050322 L 113.90625000074 193.3790596102547 L 116.71874999967 190.33022481659137 L 119.53125000089 182.35411186695382 L 122.34374999982 153.66810622797385 L 125.15625000104 146.082367400823 L 127.96874999998 134.7188935392297 L 130.78124999891 129.3801902728145 L 133.59375000013 123.9552346012878 L 136.40624999906 114.47904315839281 L 139.21875000028 115.66561807131126 L 142.03124999921 107.90998114564835 L 144.84375000043 105.61659572440658 L 147.65624999936 72.5440293706339 L 150.46875000058 66.93888622621273 L 153.28124999951 64.6083612328299 L 156.09375000073 76.27822023599117 L 158.90624999967 75.318976270778 L 161.71875000088 60.14809498728425 L 164.53124999982 37.42134590231444 L 167.34375000103 56.05493612122291 L 170.15624999997 26.498930511918786 L 172.9687499989 31.24875281716578 L 175.78125000012 29.20717231940216 L 178.59374999905 35.00462227941193 L 181.40625000027 45.88559305138028 L 184.2187499992 58.85123311004651 L 187.03125000042 58.56840262192594 L 189.84374999936 56.416210717426736 L 192.65625000057 55.373216089016296 L 195.46874999951 65.5110780927069 L 198.28125000072 90.0413609187145 L 201.09374999966 92.8910834975454 L 203.90625000088 87.84619818103201 L 206.71874999981 100.17361712322781 L 209.53125000103 106.88533390721895 L 212.34374999996 99.72730255036012 L 215.15624999889 86.6917957291563 L 217.96875000011 79.33188102613508 L 220.78124999904 90.75285845905083 L 223.59375000026 85.63910501311736 L 226.4062499992 79.05948921731411 L 229.21875000041 81.78893678617766 L 232.03124999935 89.31128159296182 L 234.84375000057 87.16108037242483 L 237.6562499995 86.33377024917644 L 240.46875000072 92.43494140091491 L 243.28124999965 101.98111711928425 L 246.09375000087 90.65509734482228 L 248.9062499998 90.58661263490359 L 251.71875000102 83.45431251226057 L 254.53124999995 85.58669236193171 L 257.34374999889 82.28373131546425 L 260.1562500001 74.53597813622088 L 262.96874999904 80.91130385145487 L 265.78125000025 90.16659744444559 L 268.59374999919 86.63706770669384 L 271.40625000041 87.17107478530139 L 274.21874999934 121.69527310033627 L 277.03125000056 124.10967988001408 L 279.84374999949 121.24967215398792 L 282.65625000071 121.33704622942074 L 285.46874999964 122.25941015074326 L 288.28125000086 123.46847392587748 L 291.09374999979 123.6121959978291 L 293.90625000101 116.87445569669589 L 296.71874999994 112.45565428744172 L 299.53124999888 117.5747935023222 L 302.3437500001 114.9724742274415 L 305.15624999903 122.76828789673448 L 307.96875000025 131.60861104772653 L 310.78124999918 119.04339116413422 L 313.5937500004 112.10265242596884 L 316.40624999933 110.16803981226309 L 319.21875000055 104.68464772352513 L 322.03124999948 95.26972672536925 L 324.8437500007 95.23409809153148 L 327.65624999963 99.77561602151175 L 330.46875000085 95.28375528692035 L 333.28124999979 124.83162771918163 L 336.093750001 116.78760110443727 L 338.90624999994 111.06272427135693 L 341.71874999887 115.66451164691716 L 344.53125000009 118.40521641411652 L 347.34374999902 123.47830356805841 L 350.15625000024 145.70631904494294 L 352.96874999917 161.69404505288665 L 355.78125000039 156.69027846273588 L 358.59374999932 189.13087969029905 L 361.40625000054 189.84402584480966 L 364.21874999947 194.10764238407128 L 367.03125000069 202.33805205181926 L 369.84374999963 191.49274927851445 L 372.65625000084 191.106515046044 L 375.46874999978 195.1441455463459 L 378.28125000099 183.67654960367378 L 381.09374999993 196.55863028138242 L 383.90624999886 192.47636042371465 L 386.71875000008 191.9102060681887 L 389.53124999901 193.99592764459427 L 392.34375000023 190.13013734545376 L 395.15624999916 198.4832824025426 L 397.96875000038 184.43500315695258 L 400.78124999932 209.28748668443018 L 403.59375000053 201.07675868159086 L 406.40624999947 202.5192205016811 L 409.21875000068 200.54419829865728 L 412.03124999962 197.25870106702902 L 414.84375000084 184.82920038156087 L 417.65624999977 187.79777638631575 L 420.46875000099 187.63979413962582 L 423.28124999992 170.6110508487303 L 426.09375000114 175.43991051482976 L 428.90625000007 178.936245305103 L 431.71874999901 174.83892591305798 L 434.53125000022 152.60278738175597 L 437.34374999916 143.62153599484097 L 440.15625000037 124.46000704867888 L 442.96874999931 127.6811508595053 L 445.78125000053 138.0419337180145 L 448.59374999946 137.83947192303546 L 451.40625000068 145.67139565454264 L 454.21874999961 141.65075034453236 L 457.03125000083 135.94095463094985 L 459.84374999976 144.93783454866352 L 462.65625000098 141.41538648068715 L 465.46874999991 141.34463450214244 L 468.28125000113 137.67666140859816 L 471.09375000006 141.1264275916753 L 473.906249999 149.87119692905492 L 476.71875000021 153.71564369117274 L 479.53124999915 162.35594163027832 L 482.34375000037 162.18146979929173 L 485.1562499993 156.00298981274835 L 487.96875000052 152.11406836775757 L 490.78124999945 151.70075678799344 L 493.59375000067 159.04601910859165 L 496.4062499996 159.3639041192799 L 499.21875000082 165.76316576097685 L 502.03124999975 164.41820159796282 L 504.84375000097 161.04770370218523 L 507.6562499999 158.16204870873997 L 510.46875000112 184.27735885542498 L 513.28125000006 173.34759858730752 L 516.09374999899 178.47484004372345 L 518.90625000021 173.2979033259231 L 521.71874999914 171.41212108945743 L 524.53125000036 167.12493066507807 L 527.34374999929 141.6505243833369 L 530.15625000051 133.45200822359556 L 532.96874999944 130.7794388205622 L 535.78125000066 132.1649331606658 L 538.59374999959 129.77938608121016 L 541.40625000081 124.48415889330965 L 544.21874999975 126.30688925142064 L 547.03125000096 129.11376193373712 L 549.8437499999 129.36284707670137 L 552.65625000111 118.26156864207695 L 555.46875000005 125.16223014249758 L 558.28124999898 125.86851015492087 L 561.0937500002 125.7709383030384 L 563.90624999913 139.30491377624813 L 566.71875000035 130.68156945898735 L 569.53124999928 123.95825903544662 L 572.3437500005 129.89521404833803 L 575.15624999943 124.57548099365545 L 577.96875000065 116.01254084896601 L 580.78124999959 113.05044374392142 L 583.5937500008 115.47567672689851 L 586.40624999974 114.56872150101648 L 589.21875000096 119.90001551670102 L 592.03124999989 126.06412483305132 L 594.84375000111 122.52425467538384 L 597.65625000004 130.8513241704296 L 600.46874999897 125.95634900813769 L 603.28125000019 122.96444434366217 L 606.09374999912 105.89348805780202 L 608.90625000034 111.08646543523341 L 611.71874999928 114.26639131786607 L 614.53125000049 115.17932583088782 L 617.34374999943 114.40808158470674 L 620.15625000064 122.46899758746892 L 622.96874999958 123.39598937286144 L 625.7812500008 127.76926597981372 L 628.59374999973 126.30547895790914 L 631.40625000095 125.20912837557844 L 634.21874999988 132.9505090374114 L 637.0312500011 133.12154322034024 L 639.84375000003 137.7194243522133 L 642.65624999897 129.70815827340127 L 645.46875000018 121.4647746343897 L 648.28124999912 130.17209451373157 L 651.09375000033 132.38841691254768 L 653.90624999927 131.70278095163317 L 656.71875000049 134.36401895445974 L 659.53124999942 140.91052822112565 L 662.34375000064 142.0558096759946 L 665.15624999957 142.03580188079954 L 667.96875000079 141.21023559015842 L 670.78124999972 147.9102706511675 L 673.59375000094 147.42312882016893 L 676.40624999987 149.29150713286072 L 679.21875000109 144.79147456865533 L 682.03125000002 142.89701517951775 L 684.84374999896 136.37194442211023 L 687.65625000018 140.09255599610026 L 690.46874999911 140.90674899365848 L 693.28125000033 139.64169967325745 L 696.09374999926 169.0983032630805 L 698.90625000048 164.88877432908026 L 701.71874999941 165.88835152357518 L 704.53125000063 161.7801023093571 L 707.34374999956 143.40685906464873 L 710.15625000078 142.1771541695625 L 712.96874999971 142.74040701375066 L 715.78125000093 134.34080119466307 L 718.59374999986 132.63630677319597 L 721.40625000108 131.4883206097343 L 724.21875000002 134.11348928581538 L 727.03124999895 134.67522427433397 L 729.84375000017 133.54928978258488 L 732.6562499991 131.74350255544022 L 735.46875000032 124.86298872264888 L 738.28124999925 127.58039959772591 L 741.09375000047 123.43135933307545 L 743.9062499994 121.57413297375896 L 746.71875000062 105.56542328757357 L 749.53124999955 125.19387384856884 L 752.34375000077 127.54633358247614 L 755.15624999971 133.01665955393037 L 757.96875000092 122.2878272401206 L 760.78124999986 120.65047042790073 L 763.59375000107 123.31047834589751 L 766.40625000001 109.86125719632975 L 769.21874999894 122.44382304955136 L 772.03125000016 130.26498430952014 L 774.84374999909 129.79336045691213 L 777.65625000031 124.81261614547577 L 780.46874999924 115.002336972868 L 783.28125000046 120.48864671494638 L 786.0937499994 113.49666058476737 L 788.90625000061 117.60975049815207 L 791.71874999955 118.37580701625927 L 794.53125000076 126.47216673935989 L 797.3437499997 126.49171614818616 L 800.15625000092 137.48459133027652 L 802.96874999985 136.80521991240573 L 805.78125000107 134.915808223947 L 808.59375 137.47271754271148" class="highcharts-graph" data-z-index="1"></path>
                                                            <path d="M 1.40625 296.8513613473067 L 4.2187499989335 292.7101590322943 L 7.0312500001512 290.04347516525354 L 9.8437499990847 291.83681009417387 L 12.656250000302 278.1759197685856 L 15.468749999236 279.1895604665073 L 18.281250000454 274.05268470717937 L 21.093749999387 272.260789133422 L 23.906250000605 268.1890301920524 L 26.718749999538 266.52154254139316 L 29.531250000756 264.2110467078684 L 32.34374999969 261.27288160436575 L 35.156250000907 256.88452396036985 L 37.968749999841 253.73833415310517 L 40.781250001059 248.50595054617173 L 43.593749999992 245.35391274298695 L 46.406249998926 251.78805202951588 L 49.218750000143 254.0949036250318 L 52.031249999077 258.49826678896045 L 54.843750000294 261.25917522860664 L 57.656249999228 259.90353713119845 L 60.468750000446 258.0913590111851 L 63.281249999379 249.16034538009632 L 66.093750000597 239.2005174369955 L 68.90624999953 231.4180009891715 L 71.718750000748 238.07751064139438 L 74.531249999682 232.76821709260403 L 77.343750000899 226.63504798946713 L 80.156249999833 220.10220364502646 L 82.968750001051 225.00406385640548 L 85.781249999984 222.16784925233588 L 88.593749998918 227.1910023629722 L 91.406250000135 220.0918225948351 L 94.218749999069 233.67755380054237 L 97.031250000287 229.37755748516756 L 99.84374999922 227.48538270090006 L 102.65625000044 227.4331120367963 L 105.46874999937 215.30172963689358 L 108.28125000059 212.36592887322456 L 111.09374999952 195.94155807050322 L 113.90625000074 193.3790596102547 L 116.71874999967 190.33022481659137 L 119.53125000089 182.35411186695382 L 122.34374999982 153.66810622797385 L 125.15625000104 146.082367400823 L 127.96874999998 134.7188935392297 L 130.78124999891 129.3801902728145 L 133.59375000013 123.9552346012878 L 136.40624999906 114.47904315839281 L 139.21875000028 115.66561807131126 L 142.03124999921 107.90998114564835 L 144.84375000043 105.61659572440658 L 147.65624999936 72.5440293706339 L 150.46875000058 66.93888622621273 L 153.28124999951 64.6083612328299 L 156.09375000073 76.27822023599117 L 158.90624999967 75.318976270778 L 161.71875000088 60.14809498728425 L 164.53124999982 37.42134590231444 L 167.34375000103 56.05493612122291 L 170.15624999997 26.498930511918786 L 172.9687499989 31.24875281716578 L 175.78125000012 29.20717231940216 L 178.59374999905 35.00462227941193 L 181.40625000027 45.88559305138028 L 184.2187499992 58.85123311004651 L 187.03125000042 58.56840262192594 L 189.84374999936 56.416210717426736 L 192.65625000057 55.373216089016296 L 195.46874999951 65.5110780927069 L 198.28125000072 90.0413609187145 L 201.09374999966 92.8910834975454 L 203.90625000088 87.84619818103201 L 206.71874999981 100.17361712322781 L 209.53125000103 106.88533390721895 L 212.34374999996 99.72730255036012 L 215.15624999889 86.6917957291563 L 217.96875000011 79.33188102613508 L 220.78124999904 90.75285845905083 L 223.59375000026 85.63910501311736 L 226.4062499992 79.05948921731411 L 229.21875000041 81.78893678617766 L 232.03124999935 89.31128159296182 L 234.84375000057 87.16108037242483 L 237.6562499995 86.33377024917644 L 240.46875000072 92.43494140091491 L 243.28124999965 101.98111711928425 L 246.09375000087 90.65509734482228 L 248.9062499998 90.58661263490359 L 251.71875000102 83.45431251226057 L 254.53124999995 85.58669236193171 L 257.34374999889 82.28373131546425 L 260.1562500001 74.53597813622088 L 262.96874999904 80.91130385145487 L 265.78125000025 90.16659744444559 L 268.59374999919 86.63706770669384 L 271.40625000041 87.17107478530139 L 274.21874999934 121.69527310033627 L 277.03125000056 124.10967988001408 L 279.84374999949 121.24967215398792 L 282.65625000071 121.33704622942074 L 285.46874999964 122.25941015074326 L 288.28125000086 123.46847392587748 L 291.09374999979 123.6121959978291 L 293.90625000101 116.87445569669589 L 296.71874999994 112.45565428744172 L 299.53124999888 117.5747935023222 L 302.3437500001 114.9724742274415 L 305.15624999903 122.76828789673448 L 307.96875000025 131.60861104772653 L 310.78124999918 119.04339116413422 L 313.5937500004 112.10265242596884 L 316.40624999933 110.16803981226309 L 319.21875000055 104.68464772352513 L 322.03124999948 95.26972672536925 L 324.8437500007 95.23409809153148 L 327.65624999963 99.77561602151175 L 330.46875000085 95.28375528692035 L 333.28124999979 124.83162771918163 L 336.093750001 116.78760110443727 L 338.90624999994 111.06272427135693 L 341.71874999887 115.66451164691716 L 344.53125000009 118.40521641411652 L 347.34374999902 123.47830356805841 L 350.15625000024 145.70631904494294 L 352.96874999917 161.69404505288665 L 355.78125000039 156.69027846273588 L 358.59374999932 189.13087969029905 L 361.40625000054 189.84402584480966 L 364.21874999947 194.10764238407128 L 367.03125000069 202.33805205181926 L 369.84374999963 191.49274927851445 L 372.65625000084 191.106515046044 L 375.46874999978 195.1441455463459 L 378.28125000099 183.67654960367378 L 381.09374999993 196.55863028138242 L 383.90624999886 192.47636042371465 L 386.71875000008 191.9102060681887 L 389.53124999901 193.99592764459427 L 392.34375000023 190.13013734545376 L 395.15624999916 198.4832824025426 L 397.96875000038 184.43500315695258 L 400.78124999932 209.28748668443018 L 403.59375000053 201.07675868159086 L 406.40624999947 202.5192205016811 L 409.21875000068 200.54419829865728 L 412.03124999962 197.25870106702902 L 414.84375000084 184.82920038156087 L 417.65624999977 187.79777638631575 L 420.46875000099 187.63979413962582 L 423.28124999992 170.6110508487303 L 426.09375000114 175.43991051482976 L 428.90625000007 178.936245305103 L 431.71874999901 174.83892591305798 L 434.53125000022 152.60278738175597 L 437.34374999916 143.62153599484097 L 440.15625000037 124.46000704867888 L 442.96874999931 127.6811508595053 L 445.78125000053 138.0419337180145 L 448.59374999946 137.83947192303546 L 451.40625000068 145.67139565454264 L 454.21874999961 141.65075034453236 L 457.03125000083 135.94095463094985 L 459.84374999976 144.93783454866352 L 462.65625000098 141.41538648068715 L 465.46874999991 141.34463450214244 L 468.28125000113 137.67666140859816 L 471.09375000006 141.1264275916753 L 473.906249999 149.87119692905492 L 476.71875000021 153.71564369117274 L 479.53124999915 162.35594163027832 L 482.34375000037 162.18146979929173 L 485.1562499993 156.00298981274835 L 487.96875000052 152.11406836775757 L 490.78124999945 151.70075678799344 L 493.59375000067 159.04601910859165 L 496.4062499996 159.3639041192799 L 499.21875000082 165.76316576097685 L 502.03124999975 164.41820159796282 L 504.84375000097 161.04770370218523 L 507.6562499999 158.16204870873997 L 510.46875000112 184.27735885542498 L 513.28125000006 173.34759858730752 L 516.09374999899 178.47484004372345 L 518.90625000021 173.2979033259231 L 521.71874999914 171.41212108945743 L 524.53125000036 167.12493066507807 L 527.34374999929 141.6505243833369 L 530.15625000051 133.45200822359556 L 532.96874999944 130.7794388205622 L 535.78125000066 132.1649331606658 L 538.59374999959 129.77938608121016 L 541.40625000081 124.48415889330965 L 544.21874999975 126.30688925142064 L 547.03125000096 129.11376193373712 L 549.8437499999 129.36284707670137 L 552.65625000111 118.26156864207695 L 555.46875000005 125.16223014249758 L 558.28124999898 125.86851015492087 L 561.0937500002 125.7709383030384 L 563.90624999913 139.30491377624813 L 566.71875000035 130.68156945898735 L 569.53124999928 123.95825903544662 L 572.3437500005 129.89521404833803 L 575.15624999943 124.57548099365545 L 577.96875000065 116.01254084896601 L 580.78124999959 113.05044374392142 L 583.5937500008 115.47567672689851 L 586.40624999974 114.56872150101648 L 589.21875000096 119.90001551670102 L 592.03124999989 126.06412483305132 L 594.84375000111 122.52425467538384 L 597.65625000004 130.8513241704296 L 600.46874999897 125.95634900813769 L 603.28125000019 122.96444434366217 L 606.09374999912 105.89348805780202 L 608.90625000034 111.08646543523341 L 611.71874999928 114.26639131786607 L 614.53125000049 115.17932583088782 L 617.34374999943 114.40808158470674 L 620.15625000064 122.46899758746892 L 622.96874999958 123.39598937286144 L 625.7812500008 127.76926597981372 L 628.59374999973 126.30547895790914 L 631.40625000095 125.20912837557844 L 634.21874999988 132.9505090374114 L 637.0312500011 133.12154322034024 L 639.84375000003 137.7194243522133 L 642.65624999897 129.70815827340127 L 645.46875000018 121.4647746343897 L 648.28124999912 130.17209451373157 L 651.09375000033 132.38841691254768 L 653.90624999927 131.70278095163317 L 656.71875000049 134.36401895445974 L 659.53124999942 140.91052822112565 L 662.34375000064 142.0558096759946 L 665.15624999957 142.03580188079954 L 667.96875000079 141.21023559015842 L 670.78124999972 147.9102706511675 L 673.59375000094 147.42312882016893 L 676.40624999987 149.29150713286072 L 679.21875000109 144.79147456865533 L 682.03125000002 142.89701517951775 L 684.84374999896 136.37194442211023 L 687.65625000018 140.09255599610026 L 690.46874999911 140.90674899365848 L 693.28125000033 139.64169967325745 L 696.09374999926 169.0983032630805 L 698.90625000048 164.88877432908026 L 701.71874999941 165.88835152357518 L 704.53125000063 161.7801023093571 L 707.34374999956 143.40685906464873 L 710.15625000078 142.1771541695625 L 712.96874999971 142.74040701375066 L 715.78125000093 134.34080119466307 L 718.59374999986 132.63630677319597 L 721.40625000108 131.4883206097343 L 724.21875000002 134.11348928581538 L 727.03124999895 134.67522427433397 L 729.84375000017 133.54928978258488 L 732.6562499991 131.74350255544022 L 735.46875000032 124.86298872264888 L 738.28124999925 127.58039959772591 L 741.09375000047 123.43135933307545 L 743.9062499994 121.57413297375896 L 746.71875000062 105.56542328757357 L 749.53124999955 125.19387384856884 L 752.34375000077 127.54633358247614 L 755.15624999971 133.01665955393037 L 757.96875000092 122.2878272401206 L 760.78124999986 120.65047042790073 L 763.59375000107 123.31047834589751 L 766.40625000001 109.86125719632975 L 769.21874999894 122.44382304955136 L 772.03125000016 130.26498430952014 L 774.84374999909 129.79336045691213 L 777.65625000031 124.81261614547577 L 780.46874999924 115.002336972868 L 783.28125000046 120.48864671494638 L 786.0937499994 113.49666058476737 L 788.90625000061 117.60975049815207 L 791.71874999955 118.37580701625927 L 794.53125000076 126.47216673935989 L 797.3437499997 126.49171614818616 L 800.15625000092 137.48459133027652 L 802.96874999985 136.80521991240573 L 805.78125000107 134.915808223947 L 808.59375 137.47271754271148" visibility="visible" data-z-index="2" class="highcharts-tracker-line"></path>
                                                        </g>
                                                        <g class="highcharts-markers highcharts-series-0 highcharts-area-series highcharts-color-primary highcharts-tracker" data-z-index="0.1" transform="translate(10,84) scale(1 1)" clip-path="none"></g>
                                                        <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-color-primary-volume highcharts-dense-data highcharts-tracker" data-z-index="0.1" transform="translate(10,414) scale(1 1)" clip-path="url(#highcharts-7kfvg1g-3768-)">
                                                            <rect x="1" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="4" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="6" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="9" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="12" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="15" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="18" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="20" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="23" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="26" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="29" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="32" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="34" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="37" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="40" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="43" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="46" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="49" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="51" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="54" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="57" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="60" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="63" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="65" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="68" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="71" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="74" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="77" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="79" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="82" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="85" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="88" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="91" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="94" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="96" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="99" y="49" width="2" height="34" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="102" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="105" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="108" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="110" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="113" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="116" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="119" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="122" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="124" y="48" width="2" height="35" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="127" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="130" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="133" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="136" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="139" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="141" y="47" width="2" height="36" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="144" y="46" width="2" height="37" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="147" y="46" width="2" height="37" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="150" y="46" width="2" height="37" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="153" y="46" width="2" height="37" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="155" y="46" width="2" height="37" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="158" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="161" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="164" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="167" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="169" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="172" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="175" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="178" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="181" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="184" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="186" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="189" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="192" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="195" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="198" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="200" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="203" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="206" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="209" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="212" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="214" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="217" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="220" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="223" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="226" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="229" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="231" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="234" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="237" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="240" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="243" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="245" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="248" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="251" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="254" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="257" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="259" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="262" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="265" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="268" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="271" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="274" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="276" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="279" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="282" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="285" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="288" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="290" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="293" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="296" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="299" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="302" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="304" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="307" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="310" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="313" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="316" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="319" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="321" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="324" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="327" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="330" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="333" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="335" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="338" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="341" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="344" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="347" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="349" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="352" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="355" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="358" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="361" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="364" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="366" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="369" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="372" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="375" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="378" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="380" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="383" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="386" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="389" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="392" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="394" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="397" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="400" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="403" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="406" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="409" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="411" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="414" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="417" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="420" y="45" width="2" height="38" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="423" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="425" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="428" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="431" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="434" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="437" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="439" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="442" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="445" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="448" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="451" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="454" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="456" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="459" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="462" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="465" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="468" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="470" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="473" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="476" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="479" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="482" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="484" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="487" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="490" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="493" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="496" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="499" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="501" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="504" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="507" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="510" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="513" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="515" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="518" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="521" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="524" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="527" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="529" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="532" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="535" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="538" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="541" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="544" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="546" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="549" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="552" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="555" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="558" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="560" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="563" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="566" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="569" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="572" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="574" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="577" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="580" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="583" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="586" y="42" width="2" height="41" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="589" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="591" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="594" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="597" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="600" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="603" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="605" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="608" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="611" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="614" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="617" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="619" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="622" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="625" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="628" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="631" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="634" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="636" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="639" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="642" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="645" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="648" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="650" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="653" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="656" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="659" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="662" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="664" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="667" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="670" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="673" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="676" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="679" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="681" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="684" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="687" y="43" width="2" height="40" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="690" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="693" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="695" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="698" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="701" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="704" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="707" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="709" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="712" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="715" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="718" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="721" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="724" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="726" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="729" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="732" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="735" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="738" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="740" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="743" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="746" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="749" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="752" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="754" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="757" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="760" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="763" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="766" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="769" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="771" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="774" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="777" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="780" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="783" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="785" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="788" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="791" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="794" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="797" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="799" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="802" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="805" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                            <rect x="808" y="44" width="2" height="39" class="highcharts-point highcharts-color-primary-volume"></rect>
                                                        </g>
                                                        <g class="highcharts-markers highcharts-series-1 highcharts-column-series highcharts-color-primary-volume" data-z-index="0.1" transform="translate(10,414) scale(1 1)" clip-path="none"></g>
                                                        <g class="highcharts-series highcharts-series-2 highcharts-areaspline-series highcharts-color-primary highcharts-navigator-series" data-z-index="0.1" transform="translate(10,545) scale(1 1)" clip-path="url(#highcharts-7kfvg1g-4250-)">
                                                            <path d="M 0 39.92464270894433 C 0 39.92464270894433 1.0125000000000601 39.93343423376813 1.6875000000001 39.93501497846394 C 2.36250000000014 39.93659572315975 2.70000000000016 39.93659572315975 3.3750000000002 39.93659572315975 C 4.0500000000002405 39.93659572315975 4.38750000000026 39.93555666618171 5.0625000000003 39.934054055642605 C 5.737500000000059 39.932551445103506 6.07499999999994 39.929461963259556 6.7499999999997 39.92908267046422 C 7.424999999999739 39.92870337766888 7.762499999999759 39.92870337766888 8.4374999999998 39.92870337766888 C 9.11249999999988 39.92870337766888 9.449999999999921 39.93213044946182 10.125 39.934865420246126 C 10.8 39.93760039103043 11.1375 39.94237823159039 11.8125 39.94237823159039 C 12.4875 39.94237823159039 12.825 39.94079905435169 13.5 39.94079905435169 C 14.175 39.94079905435169 14.5125 39.94107950346047 15.1875 39.94383381841603 C 15.8625 39.94658813337159 16.2 39.95457062912949 16.875 39.95457062912949 C 17.55 39.95457062912949 17.8875 39.95411104433801 18.5625 39.95273045038953 C 19.2375 39.95134985644105 19.575 39.947667659387086 20.25 39.947667659387086 C 20.925 39.947667659387086 21.2625 39.94778377851977 21.9375 39.94778377851977 C 22.6125 39.94778377851977 22.95 39.942479193333206 23.625 39.94216991097014 C 24.3 39.94186062860707 24.6375 39.94216991097014 25.3125 39.94186062860707 C 25.9875 39.941551346244 26.325 39.940425458507086 27 39.93859498686195 C 27.675 39.93676451521681 28.0125 39.9347380716491 28.6875 39.932708270381376 C 29.3625 39.93067846911365 29.7 39.9294150986788 30.375 39.92844598052332 C 31.05 39.92747686236784 31.3875 39.92774961581916 32.0625 39.92747686236784 C 32.7375 39.92720410891653 33.075 39.92708221326676 33.75 39.92708221326676 C 34.425 39.92708221326676 34.7625 39.927690100188585 35.4375 39.927690100188585 C 36.1125 39.927690100188585 36.45 39.927206336774354 37.125 39.927206336774354 C 37.8 39.927206336774354 38.1375 39.92801632222778 38.8125 39.92801632222778 C 39.4875 39.92801632222778 39.825 39.92801632222778 40.5 39.92713472705843 C 41.175 39.92625313188908 41.5125 39.921483606543234 42.1875 39.91502393276893 C 42.8625 39.90856425899463 43.2 39.900686553712355 43.875 39.8948363581869 C 44.55 39.88898616266144 44.8875 39.8948363581869 45.5625 39.885772955141654 C 46.2375 39.87670955209641 46.575 39.862211767276165 47.25 39.83956161412991 C 47.925 39.81691146098366 48.2625 39.816031457141314 48.9375 39.77252218941038 C 49.6125 39.72901292167944 49.95 39.684441602295024 50.625 39.62201527547522 C 51.3 39.55958894865542 51.6375 39.46039055531135 52.3125 39.46039055531135 C 52.9875 39.46039055531135 53.325 39.46039055531135 54 39.46388670077538 C 54.675 39.46738284623942 55.0125 39.472820410668454 55.6875 39.505908873405666 C 56.3625 39.53899733614287 56.7 39.629329014461426 57.375 39.629329014461426 C 58.05 39.629329014461426 58.3875 39.62521829850208 59.0625 39.60944299634978 C 59.7375 39.59366769419748 60.075 39.56926819525759 60.75 39.55045250369993 C 61.425 39.53163681214227 61.7625 39.51536453856147 62.4375 39.51536453856147 C 63.1125 39.51536453856147 63.45 39.53306486901047 64.125 39.53306486901047 C 64.8 39.53306486901047 65.1375 39.52921067496682 65.8125 39.52921067496682 C 66.4875 39.52921067496682 66.825 39.530735166252455 67.5 39.539331514817185 C 68.175 39.547927863381915 68.5125 39.552879436538895 69.1875 39.57219241779046 C 69.8625 39.59150539904203 70.2 39.61815423872539 70.875 39.635896421075024 C 71.55 39.65363860342466 71.8875 39.650206270174145 72.5625 39.660903329538634 C 73.2375 39.67160038890312 73.575 39.68938171789746 74.25 39.68938171789746 C 74.925 39.68938171789746 75.2625 39.646905221402825 75.9375 39.646905221402825 C 76.6125 39.646905221402825 76.95 39.646905221402825 77.625 39.64833343740372 C 78.3 39.64976165340462 78.6375 39.65962288416487 79.3125 39.669772988519135 C 79.9875 39.67992309287341 80.325 39.68388337114154 81 39.699083959175084 C 81.675 39.71428454720862 82.0125 39.73277493969676 82.6875 39.74577592868683 C 83.3625 39.758776917676904 83.7 39.764088904125444 84.375 39.764088904125444 C 85.05 39.764088904125444 85.3875 39.72323481326802 86.0625 39.72323481326802 C 86.7375 39.72323481326802 87.075 39.73049352416586 87.75 39.736647058447964 C 88.425 39.74280059273006 88.7625 39.75217694614715 89.4375 39.75400248467853 C 90.1125 39.75582802320991 90.45 39.75582802320991 91.125 39.75582802320991 C 91.8 39.75582802320991 92.1375 39.75582802320991 92.8125 39.75332654465667 C 93.4875 39.75082506610344 93.825 39.734079095843136 94.5 39.71709175787435 C 95.175 39.70010441990556 95.5125 39.68458433637213 96.1875 39.66838985481273 C 96.8625 39.65219537325332 97.2 39.63611935007733 97.875 39.63611935007733 C 98.55 39.63611935007733 98.8875 39.65763116335274 99.5625 39.66277632144176 C 100.2375 39.66792147953078 100.575 39.665740540387965 101.25 39.66792147953078 C 101.925 39.67010241867361 102.2625 39.673681017155886 102.9375 39.673681017155886 C 103.6125 39.673681017155886 103.95 39.64546873845806 104.625 39.64546873845806 C 105.3 39.64546873845806 105.6375 39.65105192446941 106.3125 39.65255233829938 C 106.9875 39.65405275212935 107.325 39.65255233829938 108 39.65405275212935 C 108.675 39.655553165959326 109.0125 39.65828072712716 109.6875 39.66256574909377 C 110.3625 39.66685077106038 110.7 39.6754778619624 111.375 39.6754778619624 C 112.05 39.6754778619624 112.3875 39.673234436652415 113.0625 39.673234436652415 C 113.7375 39.673234436652415 114.075 39.69615241951409 114.75 39.70589913170564 C 115.425 39.71564584389719 115.7625 39.72196799761018 116.4375 39.72196799761018 C 117.1125 39.72196799761018 117.45 39.720082474006766 118.125 39.720082474006766 C 118.8 39.720082474006766 119.1375 39.72986198216787 119.8125 39.732816877529054 C 120.4875 39.73577177289024 120.825 39.732816877529054 121.5 39.73577177289024 C 122.175 39.738726668251424 122.5125 39.75264404041086 123.1875 39.760330428402085 C 123.8625 39.76801681639332 124.2 39.76640875816052 124.875 39.7742037128464 C 125.55 39.78199866753228 125.8875 39.79462023164688 126.5625 39.79930520183148 C 127.2375 39.80399017201608 127.575 39.80399017201608 128.25 39.80399017201608 C 128.925 39.80399017201608 129.2625 39.78411558758907 129.9375 39.78411558758907 C 130.6125 39.78411558758907 130.95 39.791554299939406 131.625 39.79715648116842 C 132.3 39.80275866239744 132.6375 39.812126493734134 133.3125 39.812126493734134 C 133.9875 39.812126493734134 134.325 39.812126493734134 135 39.810134872117715 C 135.675 39.808143250501296 136.0125 39.78330927014442 136.6875 39.78330927014442 C 137.3625 39.78330927014442 137.7 39.79633676268709 138.375 39.79633676268709 C 139.05 39.79633676268709 139.3875 39.792849928076386 140.0625 39.791886912660026 C 140.7375 39.790923897243665 141.075 39.790923897243665 141.75 39.790923897243665 C 142.425 39.790923897243665 142.7625 39.79890428514282 143.4375 39.804635258447895 C 144.1125 39.81036623175297 144.45 39.81921554105895 145.125 39.819578763769066 C 145.8 39.81994198647918 146.1375 39.819578763769066 146.8125 39.81994198647918 C 147.4875 39.82030520918929 147.825 39.82697553229743 148.5 39.83163465727635 C 149.175 39.83629378225528 149.5125 39.833224234914475 150.1875 39.8432376113738 C 150.8625 39.853250987833135 151.2 39.881701539572994 151.875 39.881701539572994 C 152.55 39.881701539572994 152.8875 39.87442251172684 153.5625 39.87142244763716 C 154.2375 39.868422383547475 154.575 39.866701219124565 155.25 39.866701219124565 C 155.925 39.866701219124565 156.2625 39.87421741463278 156.9375 39.87421741463278 C 157.6125 39.87421741463278 157.95 39.87346454200259 158.625 39.87193322710669 C 159.3 39.87040191221079 159.6375 39.86824858085599 160.3125 39.866560840153284 C 160.9875 39.86487309945058 161.325 39.866560840153284 162 39.863494523593154 C 162.675 39.860428207033024 163.0125 39.852069954540205 163.6875 39.84715825615189 C 164.3625 39.84224655776359 164.7 39.83893603165161 165.375 39.83893603165161 C 166.05 39.83893603165161 166.3875 39.846128459005065 167.0625 39.85055450118751 C 167.7375 39.85498054336995 168.075 39.86106624256382 168.75 39.86106624256382 C 169.425 39.86106624256382 169.7625 39.86031464289878 170.4375 39.86031464289878 C 171.1125 39.86031464289878 171.45 39.861416795420496 172.125 39.86451303661238 C 172.8 39.86760927780426 173.1375 39.875795848858196 173.8125 39.875795848858196 C 174.4875 39.875795848858196 174.825 39.87342905788697 175.5 39.87242338437642 C 176.175 39.87141771086586 176.5125 39.87176965291446 177.1875 39.87076748130543 C 177.8625 39.869765309696405 178.2 39.867412526331286 178.875 39.867412526331286 C 179.55 39.867412526331286 179.8875 39.867412526331286 180.5625 39.86755334285933 C 181.2375 39.867694159387376 181.575 39.86807524926049 182.25 39.86830983632454 C 182.925 39.8685444233886 183.2625 39.86830983632454 183.9375 39.8687262781796 C 184.6125 39.86914272003466 184.95 39.87489302843261 185.625 39.87489302843261 C 186.3 39.87489302843261 186.6375 39.873873444523326 187.3125 39.87158146098968 C 187.9875 39.869289477456036 188.325 39.8634331107644 189 39.8634331107644 C 189.675 39.8634331107644 190.0125 39.86349674793195 190.6875 39.86349674793195 C 191.3625 39.86349674793195 191.7 39.859272113954496 192.375 39.85538928119363 C 193.05 39.85150644843276 193.3875 39.844403490537985 194.0625 39.844082584127605 C 194.7375 39.843761677717225 195.075 39.84396734324704 195.75 39.843761677717225 C 196.425 39.84355601218741 196.7625 39.843761677717225 197.4375 39.843054256478545 C 198.1125 39.842346835239866 198.45 39.840209414856375 199.125 39.840209414856375 C 199.8 39.840209414856375 200.1375 39.84403892249305 200.8125 39.84658559962429 C 201.4875 39.849132276755526 201.825 39.84866743060417 202.5 39.85294280051259 C 203.175 39.85721817042101 203.5125 39.86350068541855 204.1875 39.86796244916639 C 204.8625 39.87242421291424 205.2 39.87525161925182 205.875 39.87525161925182 C 206.55 39.87525161925182 206.8875 39.87295560545811 207.5625 39.871390613140115 C 208.2375 39.86982562082211 208.575 39.86742665766183 209.25 39.86742665766183 C 209.925 39.86742665766183 210.2625 39.87145110743679 210.9375 39.87145110743679 C 211.6125 39.87145110743679 211.95 39.87145110743679 212.625 39.87090626093488 C 213.3 39.87036141443297 213.6375 39.8689005555409 214.3125 39.867508300348014 C 214.9875 39.866116045155124 215.325 39.86604707152134 216 39.863944984970445 C 216.675 39.861842898419546 217.0125 39.86034291337432 217.6875 39.856997867593535 C 218.3625 39.85365282181275 218.7 39.85300703445099 219.375 39.84721975606653 C 220.05 39.841432477682076 220.3875 39.84002925740142 221.0625 39.828061475671255 C 221.7375 39.81609369394109 222.075 39.7873808474157 222.75 39.7873808474157 C 223.425 39.7873808474157 223.7625 39.8087086475911 224.4375 39.81295446721449 C 225.1125 39.81720028683788 225.45 39.81720028683788 226.125 39.81720028683788 C 226.8 39.81720028683788 227.1375 39.812888538536036 227.8125 39.80793215957145 C 228.4875 39.80297578060687 228.825 39.801182832452874 229.5 39.792418392014966 C 230.175 39.783653951577065 230.5125 39.77328792005938 231.1875 39.764109957381926 C 231.8625 39.75493199470448 232.2 39.74652857862771 232.875 39.74652857862771 C 233.55 39.74652857862771 233.8875 39.75304891378804 234.5625 39.755848026190556 C 235.2375 39.75864713859307 235.575 39.76052414064029 236.25 39.76052414064029 C 236.925 39.76052414064029 237.2625 39.753022999027515 237.9375 39.753022999027515 C 238.6125 39.753022999027515 238.95 39.76438420190666 239.625 39.76984756652068 C 240.3 39.7753109311347 240.6375 39.7769411454136 241.3125 39.78033982209763 C 241.9875 39.78373849878166 242.325 39.784865269705065 243 39.786840949940824 C 243.675 39.78881663017658 244.0125 39.790218223276426 244.6875 39.790218223276426 C 245.3625 39.790218223276426 245.7 39.790218223276426 246.375 39.78682424100711 C 247.05 39.783430258737795 247.3875 39.769955935890785 248.0625 39.765771700623084 C 248.7375 39.76158746535538 249.075 39.76158746535538 249.75 39.76158746535538 C 250.425 39.76158746535538 250.7625 39.76572306966934 251.4375 39.76730764946327 C 252.1125 39.768892229257204 252.45 39.769132265024965 253.125 39.769510364325036 C 253.8 39.76988846362511 254.1375 39.76988846362511 254.8125 39.76988846362511 C 255.4875 39.76988846362511 255.825 39.76801960917224 256.5 39.767808121811214 C 257.175 39.767596634450186 257.5125 39.767808121811214 258.1875 39.767596634450186 C 258.8625 39.76738514708916 259.2 39.767080089699334 259.875 39.76602941603405 C 260.55 39.76497874236877 260.8875 39.76515246753959 261.5625 39.76234326612377 C 262.2375 39.75953406470795 262.575 39.755049148199724 263.25 39.75198340895493 C 263.925 39.748917669710124 264.2625 39.747014569899775 264.9375 39.747014569899775 C 265.6125 39.747014569899775 265.95 39.74769669222711 266.625 39.74769669222711 C 267.3 39.74769669222711 267.6375 39.74631621603683 268.3125 39.74631621603683 C 268.9875 39.74631621603683 269.325 39.75136032486005 270 39.75136032486005 C 270.675 39.75136032486005 271.0125 39.7476684091697 271.6875 39.73593805860725 C 272.3625 39.7242077080448 272.7 39.70630076739359 273.375 39.69270857204779 C 274.05 39.67911637670199 274.3875 39.68798166833836 275.0625 39.66797708187826 C 275.7375 39.64797249541816 276.075 39.5926856397473 276.75 39.5926856397473 C 277.425 39.5926856397473 277.7625 39.63629912033837 278.4375 39.63629912033837 C 279.1125 39.63629912033837 279.45 39.630836152298585 280.125 39.630836152298585 C 280.8 39.630836152298585 281.1375 39.631551612280056 281.8125 39.631551612280056 C 282.4875 39.631551612280056 282.825 39.630742840914714 283.5 39.63038863538284 C 284.175 39.63003442985098 284.5125 39.62978058462073 285.1875 39.62978058462073 C 285.8625 39.62978058462073 286.2 39.62978058462073 286.875 39.637736435705065 C 287.55 39.6456922867894 287.8875 39.679888418033535 288.5625 39.679888418033535 C 289.2375 39.679888418033535 289.575 39.67396643664478 290.25 39.67396643664478 C 290.925 39.67396643664478 291.2625 39.67968870150549 291.9375 39.67968870150549 C 292.6125 39.67968870150549 292.95 39.679155142080724 293.625 39.678437903135254 C 294.3 39.67772066418979 294.6375 39.678437903135254 295.3125 39.67610250677818 C 295.9875 39.6737671104211 296.325 39.65727523889431 297 39.65727523889431 C 297.675 39.65727523889431 298.0125 39.6605121437481 298.6875 39.662067610336535 C 299.3625 39.66362307692497 299.7 39.66505257183649 300.375 39.66505257183649 C 301.05 39.66505257183649 301.3875 39.66304713444958 302.0625 39.66174965699817 C 302.7375 39.66045217954675 303.075 39.66158320453777 303.75 39.65856518457944 C 304.425 39.65554716462111 304.7625 39.6482932581781 305.4375 39.64665955720654 C 306.1125 39.64502585623498 306.45 39.64665955720654 307.125 39.64502585623498 C 307.8 39.64339215526342 308.1375 39.62942325549084 308.8125 39.62138856420667 C 309.4875 39.613353872922495 309.825 39.605242892394195 310.5 39.60485239981413 C 311.175 39.60446190723406 311.5125 39.60485239981413 312.1875 39.60446190723406 C 312.8625 39.604071414653994 313.2 39.59521779613794 313.875 39.59227847344692 C 314.55 39.5893391507559 314.8875 39.59152156477145 315.5625 39.5893391507559 C 316.2375 39.58715673674034 316.575 39.58444538102153 317.25 39.58136640336913 C 317.925 39.57828742571673 318.2625 39.57721168997113 318.9375 39.57394426249389 C 319.6125 39.57067683501665 319.95 39.57394426249389 320.625 39.56502926598293 C 321.3 39.55611426947197 321.6375 39.543999667289576 322.3125 39.52427740994191 C 322.9875 39.50455515259424 323.325 39.48012860185696 324 39.46641797924459 C 324.675 39.45270735663222 325.0125 39.45270735663222 325.6875 39.45270735663222 C 326.3625 39.45270735663222 326.7 39.53409289405524 327.375 39.53409289405524 C 328.05 39.53409289405524 328.3875 39.51217253371086 329.0625 39.50404681296321 C 329.7375 39.49592109221556 330.075 39.50404681296321 330.75 39.493464290316986 C 331.425 39.48288176767076 331.7625 39.4589365931109 332.4375 39.44699537607566 C 333.1125 39.43505415904043 333.45 39.43802933333074 334.125 39.43375820514081 C 334.8 39.429487076950885 335.1375 39.43375820514081 335.8125 39.42563973512603 C 336.4875 39.417521265111255 336.825 39.38498884367086 337.5 39.361294396677025 C 338.175 39.33759994968318 338.5125 39.30716750015684 339.1875 39.30716750015684 C 339.8625 39.30716750015684 340.2 39.32343311698963 340.875 39.334293408861605 C 341.55 39.34515370073359 341.8875 39.34095819495614 342.5625 39.361468959516756 C 343.2375 39.381979724077375 343.575 39.43684723166469 344.25 39.43684723166469 C 344.925 39.43684723166469 345.2625 39.42701345735181 345.9375 39.409694625049966 C 346.6125 39.392375792748126 346.95 39.36554457886565 347.625 39.35025307015549 C 348.3 39.334961561445326 348.6375 39.34101457145814 349.3125 39.33323708149914 C 349.9875 39.32545959154014 350.325 39.32330774035112 351 39.31136562036049 C 351.675 39.299423500369855 352.0125 39.30205524813562 352.6875 39.27352648154598 C 353.3625 39.24499771495634 353.7 39.216134639203595 354.375 39.16872178741228 C 355.05 39.12130893562097 355.3875 39.07988786767675 356.0625 39.036462222589414 C 356.7375 38.993036577502075 357.075 39.01002756756635 357.75 38.95159356197557 C 358.425 38.89315955638479 358.7625 38.802784461891164 359.4375 38.74429219463551 C 360.1125 38.68579992737986 360.45 38.72519768189661 361.125 38.65913222569731 C 361.8 38.593066769498016 362.1375 38.41396491363904 362.8125 38.41396491363904 C 363.4875 38.41396491363904 363.825 38.55507985225232 364.5 38.55507985225232 C 365.175 38.55507985225232 365.5125 38.50392419515257 366.1875 38.50392419515257 C 366.8625 38.50392419515257 367.2 38.59917216064875 367.875 38.59917216064875 C 368.55 38.59917216064875 368.8875 38.567866702785786 369.5625 38.567866702785786 C 370.2375 38.567866702785786 370.575 38.754134523220934 371.25 38.754134523220934 C 371.925 38.754134523220934 372.2625 38.63909302515531 372.9375 38.59019177570014 C 373.6125 38.54129052624498 373.95 38.551613884450354 374.625 38.509628275945104 C 375.3 38.46764266743986 375.6375 38.47766511764863 376.3125 38.380263733173905 C 376.9875 38.28286234869919 377.325 38.16156895850663 378 38.02262135357153 C 378.675 37.88367374863643 379.0125 37.685525708498425 379.6875 37.685525708498425 C 380.3625 37.685525708498425 380.7 37.722819771966826 381.375 37.722819771966826 C 382.05 37.722819771966826 382.3875 37.460297449001004 383.0625 37.460297449001004 C 383.7375 37.460297449001004 384.075 37.471071739236066 384.75 37.56482319154192 C 385.425 37.65857464384777 385.7625 37.92905471053026 386.4375 37.92905471053026 C 387.1125 37.92905471053026 387.45 37.92905471053026 388.125 37.89505630052708 C 388.8 37.8610578905239 389.1375 37.77630047871335 389.8125 37.711311875869995 C 390.4875 37.64632327302664 390.825 37.69546176254351 391.5 37.57011328631031 C 392.175 37.44476481007712 392.5125 37.245660032319684 393.1875 37.08456949470403 C 393.8625 36.92347895708836 394.2 36.770167401723185 394.875 36.764660598232005 C 395.55 36.759153794740826 395.8875 36.764660598232005 396.5625 36.759153794740826 C 397.2375 36.753646991249646 397.575 36.157807366221945 398.25 36.157807366221945 C 398.925 36.157807366221945 399.2625 36.19619888006523 399.9375 36.19619888006523 C 400.6125 36.19619888006523 400.95 36.05694369469994 401.625 35.87764803579394 C 402.3 35.69835237688794 402.6375 35.64941912226332 403.3125 35.29972058553522 C 403.9875 34.95002204880713 404.325 34.846623069180616 405 34.129155352153454 C 405.675 33.411687635126285 406.0125 32.52441893478114 406.6875 31.712382000399394 C 407.3625 30.90034506601765 407.7 30.068970680244718 408.375 30.068970680244718 C 409.05 30.068970680244718 409.3875 30.58453773418714 410.0625 30.885258896614637 C 410.7375 31.185980059042137 411.075 31.57257649238221 411.75 31.57257649238221 C 412.425 31.57257649238221 412.7625 30.87403792704393 413.4375 30.87403792704393 C 414.1125 30.87403792704393 414.45 31.14706731990574 415.125 31.60621728692526 C 415.8 32.065367253944785 416.1375 32.74109472350972 416.8125 33.16978776214153 C 417.4875 33.598480800773345 417.825 33.485676852866575 418.5 33.749682480084324 C 419.175 34.01368810730207 419.5125 34.12969196169043 420.1875 34.4898158982303 C 420.8625 34.84993983477017 421.2 35.55030216278367 421.875 35.55030216278367 C 422.55 35.55030216278367 422.8875 34.999275788530845 423.5625 34.724684415763356 C 424.2375 34.45009304299586 424.575 34.27640181375576 425.25 34.1773452989462 C 425.925 34.07828878413664 426.2625 34.07828878413664 426.9375 34.07828878413664 C 427.6125 34.07828878413664 427.95 34.13029655766501 428.625 34.34056048555882 C 429.3 34.55082441345263 429.6375 35.10780181986303 430.3125 35.12960842360569 C 430.9875 35.15141502734835 431.325 35.12960842360569 432 35.15141502734835 C 432.675 35.17322163109101 433.0125 35.55221877171816 433.6875 35.74862537797245 C 434.3625 35.945031984226745 434.7 36.13344805861982 435.375 36.13344805861982 C 436.05 36.13344805861982 436.3875 36.082665272780126 437.0625 35.934351312991154 C 437.7375 35.786037353202175 438.075 35.59089623414056 438.75 35.391878259674925 C 439.425 35.19286028520929 439.7625 35.06191007112929 440.4375 34.93926144066298 C 441.1125 34.81661281019667 441.45 34.778635107343376 442.125 34.778635107343376 C 442.8 34.778635107343376 443.1375 34.86448028167606 443.8125 34.97564779493375 C 444.4875 35.08681530819143 444.825 35.2005068968576 445.5 35.3344726736318 C 446.175 35.468438450406005 446.5125 35.5364327732279 447.1875 35.64547667880476 C 447.8625 35.75452058438162 448.2 35.8796922015161 448.875 35.8796922015161 C 449.55 35.8796922015161 449.8875 35.793480652622804 450.5625 35.793480652622804 C 451.2375 35.793480652622804 451.575 36.28269843166268 452.25 36.332476272645245 C 452.925 36.38225411362781 453.2625 36.333293856119525 453.9375 36.38225411362781 C 454.6125 36.43121437113609 454.95 36.577277560186666 455.625 36.577277560186666 C 456.3 36.577277560186666 456.6375 36.35032129098692 457.3125 36.35032129098692 C 457.9875 36.35032129098692 458.325 36.43935545270026 459 36.43935545270026 C 459.675 36.43935545270026 460.0125 36.20893383758061 460.6875 36.03096451901649 C 461.3625 35.85299520045237 461.7 35.54950885987965 462.375 35.54950885987965 C 463.05 35.54950885987965 463.3875 35.566973892811085 464.0625 35.727654839525954 C 464.7375 35.88833578624082 465.075 36.2338436850291 465.75 36.35291359345399 C 466.425 36.47198350187888 466.7625 36.47198350187888 467.4375 36.47198350187888 C 468.1125 36.47198350187888 468.45 36.45715986372647 469.125 36.38261248912068 C 469.8 36.30806511451489 470.1375 36.09924662884993 470.8125 36.09924662884993 C 471.4875 36.09924662884993 471.825 36.130380555050415 472.5 36.19928623906828 C 473.175 36.26819192308614 473.5125 36.44377504893925 474.1875 36.44377504893925 C 474.8625 36.44377504893925 475.2 36.404588436562385 475.875 36.38132671526403 C 476.55 36.358064993965684 476.8875 36.327466442447516 477.5625 36.327466442447516 C 478.2375 36.327466442447516 478.575 36.327466442447516 479.25 36.33694301785152 C 479.925 36.34641959325552 480.2625 36.396522199885005 480.9375 36.396522199885005 C 481.6125 36.396522199885005 481.95 36.356392994198764 482.625 36.356392994198764 C 483.3 36.356392994198764 483.6375 36.371294884841035 484.3125 36.389232928506985 C 484.9875 36.407170972172935 485.325 36.44608321252852 486 36.44608321252852 C 486.675 36.44608321252852 487.0125 36.40755622618595 487.6875 36.40755622618595 C 488.3625 36.40755622618595 488.7 36.45772064093453 489.375 36.66424210181179 C 490.05 36.87076356268904 490.3875 37.22543684052488 491.0625 37.44016353057222 C 491.7375 37.65489022061956 492.075 37.6396343610763 492.75 37.7378755520485 C 493.425 37.8361167430207 493.7625 37.85345550498425 494.4375 37.93136948543323 C 495.1125 38.009283465882206 495.45 38.1274454542934 496.125 38.1274454542934 C 496.8 38.1274454542934 497.1375 37.98692048256409 497.8125 37.936153726320036 C 498.4875 37.885386970075984 498.825 37.87361167307312 499.5 37.87361167307312 C 500.175 37.87361167307312 500.5125 37.88768858723785 501.1875 37.88768858723785 C 501.8625 37.88768858723785 502.2 37.866496775385976 502.875 37.866496775385976 C 503.55 37.866496775385976 503.8875 37.96993104521621 504.5625 37.994713843726835 C 505.2375 38.01949664223746 505.575 38.004170888636125 506.25 38.01949664223746 C 506.925 38.0348223958388 507.2625 38.071342611733535 507.9375 38.071342611733535 C 508.6125 38.071342611733535 508.95 38.066978558776604 509.625 38.049075568388226 C 510.3 38.031172577999854 510.6375 38.0287358674377 511.3125 37.981827659791655 C 511.9875 37.93491945214561 512.325 37.814534530157964 513 37.814534530157964 C 513.675 37.814534530157964 514.0125 37.880261114623075 514.6875 37.880261114623075 C 515.3625 37.880261114623075 515.7 37.8700987896471 516.375 37.85904003740024 C 517.05 37.84798128515338 517.3875 37.84247850167103 518.0625 37.824967353388786 C 518.7375 37.80745620510653 519.075 37.7812785302605 519.75 37.77148429598899 C 520.425 37.76169006171748 520.7625 37.77148429598899 521.4375 37.76169006171748 C 522.1125 37.75189582744597 522.45 37.4996763332704 523.125 37.37242052640355 C 523.8 37.2451647195367 524.1375 37.1537654962834 524.8125 37.125411027383215 C 525.4875 37.09705655848303 525.825 37.11821870498375 526.5 37.09705655848303 C 527.175 37.07589441198232 527.5125 37.045165446956325 528.1875 37.01960029487965 C 528.8625 36.99403514280298 529.2 37.01960029487965 529.875 36.96923079809966 C 530.55 36.918861301319666 530.8875 36.818413456224 531.5625 36.573812815973675 C 532.2375 36.32921217572335 532.575 35.92003856755659 533.25 35.74622759684802 C 533.925 35.57241662613946 534.2625 35.680684431508716 534.9375 35.57241662613946 C 535.6125 35.464148820770205 535.95 35.20488857000174 536.625 35.20488857000174 C 537.3 35.20488857000174 537.6375 35.52732121927496 538.3125 35.52732121927496 C 538.9875 35.52732121927496 539.325 35.52732121927496 540 35.43038234167561 C 540.675 35.33344346407626 541.0125 35.0597600056222 541.6875 34.66561821177963 C 542.3625 34.271476417937066 542.7 33.45967337246279 543.375 33.45967337246279 C 544.05 33.45967337246279 544.3875 33.80799730479581 545.0625 33.80799730479581 C 545.7375 33.80799730479581 546.075 33.39476641843141 546.75 33.39476641843141 C 547.425 33.39476641843141 547.7625 34.046726277930865 548.4375 34.24417500381693 C 549.1125 34.44162372970299 549.45 34.44162372970299 550.125 34.44162372970299 C 550.8 34.44162372970299 551.1375 34.44162372970299 551.8125 34.401833505368614 C 552.4875 34.36204328103424 552.825 33.51886901901861 553.5 33.51886901901861 C 554.175 33.51886901901861 554.5125 33.917873632027955 555.1875 34.056695808192465 C 555.8625 34.19551798435698 556.2 34.12277658625794 556.875 34.21297989984118 C 557.55 34.30318321342442 557.8875 34.507712376108636 558.5625 34.507712376108636 C 559.2375 34.507712376108636 559.575 34.221214060539175 560.25 34.221214060539175 C 560.925 34.221214060539175 561.2625 34.24279364993898 561.9375 34.262901946867025 C 562.6125 34.283010243795076 562.95 34.262901946867025 563.625 34.3217555451794 C 564.3 34.380609143491775 564.6375 34.89462000852909 565.3125 35.1148512737752 C 565.9875 35.335082539021315 566.325 35.42291187140997 567 35.42291187140997 C 567.675 35.42291187140997 568.0125 35.38721433397161 568.6875 35.38721433397161 C 569.3625 35.38721433397161 569.7 35.47983076854394 570.375 35.47983076854394 C 571.05 35.47983076854394 571.3875 35.47983076854394 572.0625 35.44512164756375 C 572.7375 35.41041252658356 573.075 34.82746883945759 573.75 34.82746883945759 C 574.425 34.82746883945759 574.7625 34.839626454352135 575.4375 34.90374208481693 C 576.1125 34.96785771528174 576.45 35.006909217365866 577.125 35.14804699178158 C 577.8 35.28918476619728 578.1375 35.457162690223136 578.8125 35.60943095689548 C 579.4875 35.76169922356782 579.825 35.90938832514329 580.5 35.90938832514329 C 581.175 35.90938832514329 581.5125 35.893652728567865 582.1875 35.893652728567865 C 582.8625 35.893652728567865 583.2 35.92141854245282 583.875 35.956714336362786 C 584.55 35.99201013027275 584.8875 36.0701316981177 585.5625 36.0701316981177 C 586.2375 36.0701316981177 586.575 35.9374855424934 587.25 35.9374855424934 C 587.925 35.9374855424934 588.2625 35.97084399792118 588.9375 35.97084399792118 C 589.6125 35.97084399792118 589.95 35.75561231519368 590.625 35.59972245853938 C 591.3 35.44383260188508 591.6375 35.19139471464967 592.3125 35.19139471464967 C 592.9875 35.19139471464967 593.325 35.23329063231699 594 35.23329063231699 C 594.675 35.23329063231699 595.0125 34.99808338272779 595.6875 34.88755536555745 C 596.3625 34.777027348387115 596.7 34.78847925845756 597.375 34.680650546465316 C 598.05 34.572821834473075 598.3875 34.348411805596214 599.0625 34.348411805596214 C 599.7375 34.348411805596214 600.075 34.44610690936283 600.75 34.56090055031918 C 601.425 34.67569419127554 601.7625 34.82223253253964 602.4375 34.92238001037798 C 603.1125 35.02252748821631 603.45 34.92238001037798 604.125 35.06163793951087 C 604.8 35.200895868643755 605.1375 35.84849823091589 605.8125 36.204291184578885 C 606.4875 36.560084138241876 606.825 36.84060270782586 607.5 36.84060270782586 C 608.175 36.84060270782586 608.5125 36.456133756397556 609.1875 36.40674713654228 C 609.8625 36.357360516687 610.2 36.40674713654228 610.875 36.357360516687 C 611.55 36.307973896831726 611.8875 36.04851843015144 612.5625 36.04851843015144 C 613.2375 36.04851843015144 613.575 36.133233975049635 614.25 36.133233975049635 C 614.925 36.133233975049635 615.2625 36.133233975049635 615.9375 35.99361569406903 C 616.6125 35.85399741308842 616.95 35.59366579781188 617.625 35.35630320949083 C 618.3 35.118940621169784 618.6375 34.80680275246379 619.3125 34.80680275246379 C 619.9875 34.80680275246379 620.325 34.914913834801446 621 34.914913834801446 C 621.675 34.914913834801446 622.0125 34.7467458968216 622.6875 34.7467458968216 C 623.3625 34.7467458968216 623.7 34.88669539223537 624.375 34.88669539223537 C 625.05 34.88669539223537 625.3875 34.599721044884326 626.0625 34.599721044884326 C 626.7375 34.599721044884326 627.075 34.60340698508947 627.75 34.63575274271915 C 628.425 34.66809850034883 628.7625 34.72819601092542 629.4375 34.76144983303273 C 630.1125 34.79470365514003 630.45 34.772825980192856 631.125 34.802021853255674 C 631.8 34.831217726318485 632.1375 34.907429198346804 632.8125 34.907429198346804 C 633.4875 34.907429198346804 633.825 34.83864761903131 634.5 34.83864761903131 C 635.175 34.83864761903131 635.5125 34.87196164713116 636.1875 34.87196164713116 C 636.8625 34.87196164713116 637.2 34.87196164713116 637.875 34.742093058721856 C 638.55 34.612224470312555 638.8875 34.08810302352838 639.5625 33.86221256359964 C 640.2375 33.63632210367089 640.575 33.689713469178024 641.25 33.612640759078126 C 641.925 33.53556804897822 642.2625 33.51875401082187 642.9375 33.476849013100136 C 643.6125 33.43494401537839 643.95 33.40311577046943 644.625 33.40311577046943 C 645.3 33.40311577046943 645.6375 33.5076800796336 646.3125 33.59303806964762 C 646.9875 33.67839605966164 647.325 33.69640752809993 648 33.829905720539514 C 648.675 33.963403912979096 649.0125 34.26052903184552 649.6875 34.26052903184552 C 650.3625 34.26052903184552 650.7 33.97850308996374 651.375 33.97850308996374 C 652.05 33.97850308996374 652.3875 34.09093031416144 653.0625 34.09093031416144 C 653.7375 34.09093031416144 654.075 34.076077834731734 654.75 34.04899118963004 C 655.425 34.02190454452834 655.7625 34.03777091343741 656.4375 33.95549708865295 C 657.1125 33.87322326386848 657.45 33.812354132373706 658.125 33.6376220657077 C 658.8 33.46288999904171 659.1375 33.301677066551115 659.8125 33.081836755322946 C 660.4875 32.86199644409477 660.825 32.76665124956293 661.5 32.53842050956685 C 662.175 32.310189769570755 662.5125 32.20654162733523 663.1875 31.9406830553425 C 663.8625 31.674824483349774 664.2 31.55967175667182 664.875 31.209127649603193 C 665.55 30.858583542534568 665.8875 30.444302968943312 666.5625 30.18796251999938 C 667.2375 29.93162207105545 667.575 30.083564845883405 668.25 29.927425404883536 C 668.925 29.77128596388367 669.2625 29.40726531500004 669.9375 29.40726531500004 C 670.6125 29.40726531500004 670.95 29.612370771042038 671.625 29.612370771042038 C 672.3 29.612370771042038 672.6375 28.75028325364882 673.3125 28.148495684828116 C 673.9875 27.54670811600741 674.325 27.421336820934112 675 26.603432926938517 C 675.675 25.785529032942918 676.0125 25.45662835726741 676.6875 24.05897621485013 C 677.3625 22.661324072432848 677.7 19.7375474306461 678.375 19.615172214852116 C 679.05 19.492796999058132 679.3875 19.492796999058132 680.0625 19.492796999058132 C 680.7375 19.492796999058132 681.075 20.446715005069795 681.75 20.90154764393525 C 682.425 21.3563802828007 682.7625 21.766960193385394 683.4375 21.766960193385394 C 684.1125 21.766960193385394 684.45 21.250973660441854 685.125 19.825535258284695 C 685.8 18.400096856127536 686.1375 16.366077611434363 686.8125 14.639768182599603 C 687.4875 12.913458753764841 687.825 11.193988114110887 688.5 11.193988114110887 C 689.175 11.193988114110887 689.5125 11.747144926717686 690.1875 12.08660333323617 C 690.8625 12.426061739754655 691.2 12.891280146703306 691.875 12.891280146703306 C 692.55 12.891280146703306 692.8875 9.93687106118966 693.5625 8.903853454023622 C 694.2375 7.8708358468575845 694.575 7.726192110873114 695.25 7.726192110873114 C 695.925 7.726192110873114 696.2625 9.658339536296019 696.9375 9.658339536296019 C 697.6125 9.658339536296019 697.95 7.838399588987755 698.625 7.714309188719234 C 699.3 7.590218788450713 699.6375 7.714309188719234 700.3125 7.590218788450713 C 700.9875 7.466128388182192 701.325 5.688301724964042 702 5.688301724964042 C 702.675 5.688301724964042 703.0125 10.100181954816705 703.6875 10.100181954816705 C 704.3625 10.100181954816705 704.7 9.94858033522981 705.375 9.605585431259225 C 706.05 9.26259052728864 706.3875 8.385207434963778 707.0625 8.385207434963778 C 707.7375 8.385207434963778 708.075 8.971061845440222 708.75 10.742156649970003 C 709.425 12.513251454499784 709.7625 15.532385793440433 710.4375 17.240681457612688 C 711.1125 18.948977121784942 711.45 19.179588795797894 712.125 19.28363497083128 C 712.8 19.387681145864665 713.1375 19.28363497083128 713.8125 19.387681145864665 C 714.4875 19.49172732089805 714.825 20.088079895769166 715.5 20.088079895769166 C 716.175 20.088079895769166 716.5125 18.666013642712798 717.1875 18.666013642712798 C 717.8625 18.666013642712798 718.2 21.512604867919908 718.875 21.512604867919908 C 719.55 21.512604867919908 719.8875 20.692201784641792 720.5625 20.692201784641792 C 721.2375 20.692201784641792 721.575 20.82608404606003 722.25 21.06209403631858 C 722.925 21.298104026577136 723.2625 21.66964295399601 723.9375 21.872251735934572 C 724.6125 22.074860517873137 724.95 22.075137946011402 725.625 22.075137946011402 C 726.3 22.075137946011402 726.6375 18.879954886541686 727.3125 18.078354789089286 C 727.9875 17.276754691636885 728.325 17.995129160296667 729 17.276754691636885 C 729.675 16.558380222977103 730.0125 15.029455652617859 730.6875 14.486482445790365 C 731.3625 13.943509238962871 731.7 14.266612561878457 732.375 13.943509238962871 C 733.05 13.620405916047286 733.3875 12.911958263283793 734.0625 12.870965831212438 C 734.7375 12.829973399141082 735.075 12.829973399141082 735.75 12.829973399141082 C 736.425 12.829973399141082 736.7625 13.239994287269779 737.4375 13.422114783684638 C 738.1125 13.604235280099495 738.45 13.422114783684638 739.125 13.740575881215374 C 739.8 14.05903697874611 740.1375 15.742785257313113 740.8125 15.742785257313113 C 741.4875 15.742785257313113 741.825 15.742785257313113 742.5 15.493466458374815 C 743.175 15.244147659436518 743.5125 12.314765350906287 744.1875 10.74677882185971 C 744.8625 9.178792292813132 745.2 8.796762468827115 745.875 7.653533813141927 C 746.55 6.510305157456738 746.8875 5.0306355434337675 747.5625 5.0306355434337675 C 748.2375 5.0306355434337675 748.575 5.903067062893875 749.25 5.903067062893875 C 749.925 5.903067062893875 750.2625 5.903067062893875 750.9375 5.509392119289792 C 751.6125 5.11571717568571 751.95 3.6322336935572253 752.625 3.6322336935572253 C 753.3 3.6322336935572253 753.6375 5.14731809387357 754.3125 6.091644116835937 C 754.9875 7.035970139798304 755.325 7.758051747724272 756 8.353863808369063 C 756.675 8.949675869013854 757.0125 8.353863808369063 757.6875 9.070704420059894 C 758.3625 9.787545031750724 758.7 11.706864454790797 759.375 12.522563763495313 C 760.05 13.33826307219983 760.3875 13.33826307219983 761.0625 13.33826307219983 C 761.7375 13.33826307219983 762.075 12.607056373808334 762.75 12.607056373808334 C 763.425 12.607056373808334 763.7625 12.625873409800686 764.4375 13.17128721916064 C 765.1125 13.716701028520593 765.45 14.733567439061373 766.125 15.33412542060811 C 766.8 15.93468340215485 767.1375 15.727808851099468 767.8125 16.17407712689433 C 768.4875 16.62034540268919 768.825 16.942528460664985 769.5 17.56546679958241 C 770.175 18.18840513849983 770.5125 19.288768821481444 771.1875 19.288768821481444 C 771.8625 19.288768821481444 772.2 18.990671617642313 772.875 18.306692329123695 C 773.55 17.622713040605078 773.8875 15.868872378888355 774.5625 15.868872378888355 C 775.2375 15.868872378888355 775.575 16.01908133852159 776.25 16.579703954255326 C 776.925 17.14032656998906 777.2625 18.67198545755703 777.9375 18.67198545755703 C 778.6125 18.67198545755703 778.95 16.876051608393936 779.625 16.876051608393936 C 780.3 16.876051608393936 780.6375 18.168132594370345 781.3125 18.168132594370345 C 781.9875 18.168132594370345 782.325 17.89073408177464 783 17.477909437428202 C 783.675 17.065084793081766 784.0125 16.78530235212569 784.6875 16.104009372638163 C 785.3625 15.422716393150635 785.7 14.071444539990555 786.375 14.071444539990555 C 787.05 14.071444539990555 787.3875 14.631372514363441 788.0625 15.293161240161172 C 788.7375 15.954949965958903 789.075 17.3031306697973 789.75 17.380388168979213 C 790.425 17.457645668161124 790.7625 17.380388168979213 791.4375 17.457645668161124 C 792.1125 17.534903167343035 792.45 17.909650207394105 793.125 18.235179962991655 C 793.8 18.560709718589205 794.1375 18.235179962991655 794.8125 19.08529444614888 C 795.4875 19.935408929306103 795.825 22.80054279008156 796.5 23.05980672530722 C 797.175 23.319070660532876 797.5125 23.206553731339948 798.1875 23.319070660532876 C 798.8625 23.431587589725808 799.2 23.62239137127187 799.875 23.62239137127187 C 800.55 23.62239137127187 800.8875 23.05235436714243 801.5625 23.05235436714243 C 802.2375 23.05235436714243 802.575 23.05235436714243 803.25 23.26228827279809 C 803.925 23.47222217845375 804.2625 27.08908919581105 804.9375 27.747080649690567 C 805.6125 28.405072103570085 805.95 28.189975310530496 806.625 28.405072103570085 C 807.3 28.620168896609677 807.6375 28.767869458533237 808.3125 28.822564614888528 C 808.9875 28.877259771243818 810 28.877259771243818 810 28.877259771243818 L 810 40 C 810 40 808.9875 40 808.3125 40 C 807.6375 40 807.3 40 806.625 40 C 805.95 40 805.6125 40 804.9375 40 C 804.2625 40 803.925 40 803.25 40 C 802.575 40 802.2375 40 801.5625 40 C 800.8875 40 800.55 40 799.875 40 C 799.2 40 798.8625 40 798.1875 40 C 797.5125 40 797.175 40 796.5 40 C 795.825 40 795.4875 40 794.8125 40 C 794.1375 40 793.8 40 793.125 40 C 792.45 40 792.1125 40 791.4375 40 C 790.7625 40 790.425 40 789.75 40 C 789.075 40 788.7375 40 788.0625 40 C 787.3875 40 787.05 40 786.375 40 C 785.7 40 785.3625 40 784.6875 40 C 784.0125 40 783.675 40 783 40 C 782.325 40 781.9875 40 781.3125 40 C 780.6375 40 780.3 40 779.625 40 C 778.95 40 778.6125 40 777.9375 40 C 777.2625 40 776.925 40 776.25 40 C 775.575 40 775.2375 40 774.5625 40 C 773.8875 40 773.55 40 772.875 40 C 772.2 40 771.8625 40 771.1875 40 C 770.5125 40 770.175 40 769.5 40 C 768.825 40 768.4875 40 767.8125 40 C 767.1375 40 766.8 40 766.125 40 C 765.45 40 765.1125 40 764.4375 40 C 763.7625 40 763.425 40 762.75 40 C 762.075 40 761.7375 40 761.0625 40 C 760.3875 40 760.05 40 759.375 40 C 758.7 40 758.3625 40 757.6875 40 C 757.0125 40 756.675 40 756 40 C 755.325 40 754.9875 40 754.3125 40 C 753.6375 40 753.3 40 752.625 40 C 751.95 40 751.6125 40 750.9375 40 C 750.2625 40 749.925 40 749.25 40 C 748.575 40 748.2375 40 747.5625 40 C 746.8875 40 746.55 40 745.875 40 C 745.2 40 744.8625 40 744.1875 40 C 743.5125 40 743.175 40 742.5 40 C 741.825 40 741.4875 40 740.8125 40 C 740.1375 40 739.8 40 739.125 40 C 738.45 40 738.1125 40 737.4375 40 C 736.7625 40 736.425 40 735.75 40 C 735.075 40 734.7375 40 734.0625 40 C 733.3875 40 733.05 40 732.375 40 C 731.7 40 731.3625 40 730.6875 40 C 730.0125 40 729.675 40 729 40 C 728.325 40 727.9875 40 727.3125 40 C 726.6375 40 726.3 40 725.625 40 C 724.95 40 724.6125 40 723.9375 40 C 723.2625 40 722.925 40 722.25 40 C 721.575 40 721.2375 40 720.5625 40 C 719.8875 40 719.55 40 718.875 40 C 718.2 40 717.8625 40 717.1875 40 C 716.5125 40 716.175 40 715.5 40 C 714.825 40 714.4875 40 713.8125 40 C 713.1375 40 712.8 40 712.125 40 C 711.45 40 711.1125 40 710.4375 40 C 709.7625 40 709.425 40 708.75 40 C 708.075 40 707.7375 40 707.0625 40 C 706.3875 40 706.05 40 705.375 40 C 704.7 40 704.3625 40 703.6875 40 C 703.0125 40 702.675 40 702 40 C 701.325 40 700.9875 40 700.3125 40 C 699.6375 40 699.3 40 698.625 40 C 697.95 40 697.6125 40 696.9375 40 C 696.2625 40 695.925 40 695.25 40 C 694.575 40 694.2375 40 693.5625 40 C 692.8875 40 692.55 40 691.875 40 C 691.2 40 690.8625 40 690.1875 40 C 689.5125 40 689.175 40 688.5 40 C 687.825 40 687.4875 40 686.8125 40 C 686.1375 40 685.8 40 685.125 40 C 684.45 40 684.1125 40 683.4375 40 C 682.7625 40 682.425 40 681.75 40 C 681.075 40 680.7375 40 680.0625 40 C 679.3875 40 679.05 40 678.375 40 C 677.7 40 677.3625 40 676.6875 40 C 676.0125 40 675.675 40 675 40 C 674.325 40 673.9875 40 673.3125 40 C 672.6375 40 672.3 40 671.625 40 C 670.95 40 670.6125 40 669.9375 40 C 669.2625 40 668.925 40 668.25 40 C 667.575 40 667.2375 40 666.5625 40 C 665.8875 40 665.55 40 664.875 40 C 664.2 40 663.8625 40 663.1875 40 C 662.5125 40 662.175 40 661.5 40 C 660.825 40 660.4875 40 659.8125 40 C 659.1375 40 658.8 40 658.125 40 C 657.45 40 657.1125 40 656.4375 40 C 655.7625 40 655.425 40 654.75 40 C 654.075 40 653.7375 40 653.0625 40 C 652.3875 40 652.05 40 651.375 40 C 650.7 40 650.3625 40 649.6875 40 C 649.0125 40 648.675 40 648 40 C 647.325 40 646.9875 40 646.3125 40 C 645.6375 40 645.3 40 644.625 40 C 643.95 40 643.6125 40 642.9375 40 C 642.2625 40 641.925 40 641.25 40 C 640.575 40 640.2375 40 639.5625 40 C 638.8875 40 638.55 40 637.875 40 C 637.2 40 636.8625 40 636.1875 40 C 635.5125 40 635.175 40 634.5 40 C 633.825 40 633.4875 40 632.8125 40 C 632.1375 40 631.8 40 631.125 40 C 630.45 40 630.1125 40 629.4375 40 C 628.7625 40 628.425 40 627.75 40 C 627.075 40 626.7375 40 626.0625 40 C 625.3875 40 625.05 40 624.375 40 C 623.7 40 623.3625 40 622.6875 40 C 622.0125 40 621.675 40 621 40 C 620.325 40 619.9875 40 619.3125 40 C 618.6375 40 618.3 40 617.625 40 C 616.95 40 616.6125 40 615.9375 40 C 615.2625 40 614.925 40 614.25 40 C 613.575 40 613.2375 40 612.5625 40 C 611.8875 40 611.55 40 610.875 40 C 610.2 40 609.8625 40 609.1875 40 C 608.5125 40 608.175 40 607.5 40 C 606.825 40 606.4875 40 605.8125 40 C 605.1375 40 604.8 40 604.125 40 C 603.45 40 603.1125 40 602.4375 40 C 601.7625 40 601.425 40 600.75 40 C 600.075 40 599.7375 40 599.0625 40 C 598.3875 40 598.05 40 597.375 40 C 596.7 40 596.3625 40 595.6875 40 C 595.0125 40 594.675 40 594 40 C 593.325 40 592.9875 40 592.3125 40 C 591.6375 40 591.3 40 590.625 40 C 589.95 40 589.6125 40 588.9375 40 C 588.2625 40 587.925 40 587.25 40 C 586.575 40 586.2375 40 585.5625 40 C 584.8875 40 584.55 40 583.875 40 C 583.2 40 582.8625 40 582.1875 40 C 581.5125 40 581.175 40 580.5 40 C 579.825 40 579.4875 40 578.8125 40 C 578.1375 40 577.8 40 577.125 40 C 576.45 40 576.1125 40 575.4375 40 C 574.7625 40 574.425 40 573.75 40 C 573.075 40 572.7375 40 572.0625 40 C 571.3875 40 571.05 40 570.375 40 C 569.7 40 569.3625 40 568.6875 40 C 568.0125 40 567.675 40 567 40 C 566.325 40 565.9875 40 565.3125 40 C 564.6375 40 564.3 40 563.625 40 C 562.95 40 562.6125 40 561.9375 40 C 561.2625 40 560.925 40 560.25 40 C 559.575 40 559.2375 40 558.5625 40 C 557.8875 40 557.55 40 556.875 40 C 556.2 40 555.8625 40 555.1875 40 C 554.5125 40 554.175 40 553.5 40 C 552.825 40 552.4875 40 551.8125 40 C 551.1375 40 550.8 40 550.125 40 C 549.45 40 549.1125 40 548.4375 40 C 547.7625 40 547.425 40 546.75 40 C 546.075 40 545.7375 40 545.0625 40 C 544.3875 40 544.05 40 543.375 40 C 542.7 40 542.3625 40 541.6875 40 C 541.0125 40 540.675 40 540 40 C 539.325 40 538.9875 40 538.3125 40 C 537.6375 40 537.3 40 536.625 40 C 535.95 40 535.6125 40 534.9375 40 C 534.2625 40 533.925 40 533.25 40 C 532.575 40 532.2375 40 531.5625 40 C 530.8875 40 530.55 40 529.875 40 C 529.2 40 528.8625 40 528.1875 40 C 527.5125 40 527.175 40 526.5 40 C 525.825 40 525.4875 40 524.8125 40 C 524.1375 40 523.8 40 523.125 40 C 522.45 40 522.1125 40 521.4375 40 C 520.7625 40 520.425 40 519.75 40 C 519.075 40 518.7375 40 518.0625 40 C 517.3875 40 517.05 40 516.375 40 C 515.7 40 515.3625 40 514.6875 40 C 514.0125 40 513.675 40 513 40 C 512.325 40 511.9875 40 511.3125 40 C 510.6375 40 510.3 40 509.625 40 C 508.95 40 508.6125 40 507.9375 40 C 507.2625 40 506.925 40 506.25 40 C 505.575 40 505.2375 40 504.5625 40 C 503.8875 40 503.55 40 502.875 40 C 502.2 40 501.8625 40 501.1875 40 C 500.5125 40 500.175 40 499.5 40 C 498.825 40 498.4875 40 497.8125 40 C 497.1375 40 496.8 40 496.125 40 C 495.45 40 495.1125 40 494.4375 40 C 493.7625 40 493.425 40 492.75 40 C 492.075 40 491.7375 40 491.0625 40 C 490.3875 40 490.05 40 489.375 40 C 488.7 40 488.3625 40 487.6875 40 C 487.0125 40 486.675 40 486 40 C 485.325 40 484.9875 40 484.3125 40 C 483.6375 40 483.3 40 482.625 40 C 481.95 40 481.6125 40 480.9375 40 C 480.2625 40 479.925 40 479.25 40 C 478.575 40 478.2375 40 477.5625 40 C 476.8875 40 476.55 40 475.875 40 C 475.2 40 474.8625 40 474.1875 40 C 473.5125 40 473.175 40 472.5 40 C 471.825 40 471.4875 40 470.8125 40 C 470.1375 40 469.8 40 469.125 40 C 468.45 40 468.1125 40 467.4375 40 C 466.7625 40 466.425 40 465.75 40 C 465.075 40 464.7375 40 464.0625 40 C 463.3875 40 463.05 40 462.375 40 C 461.7 40 461.3625 40 460.6875 40 C 460.0125 40 459.675 40 459 40 C 458.325 40 457.9875 40 457.3125 40 C 456.6375 40 456.3 40 455.625 40 C 454.95 40 454.6125 40 453.9375 40 C 453.2625 40 452.925 40 452.25 40 C 451.575 40 451.2375 40 450.5625 40 C 449.8875 40 449.55 40 448.875 40 C 448.2 40 447.8625 40 447.1875 40 C 446.5125 40 446.175 40 445.5 40 C 444.825 40 444.4875 40 443.8125 40 C 443.1375 40 442.8 40 442.125 40 C 441.45 40 441.1125 40 440.4375 40 C 439.7625 40 439.425 40 438.75 40 C 438.075 40 437.7375 40 437.0625 40 C 436.3875 40 436.05 40 435.375 40 C 434.7 40 434.3625 40 433.6875 40 C 433.0125 40 432.675 40 432 40 C 431.325 40 430.9875 40 430.3125 40 C 429.6375 40 429.3 40 428.625 40 C 427.95 40 427.6125 40 426.9375 40 C 426.2625 40 425.925 40 425.25 40 C 424.575 40 424.2375 40 423.5625 40 C 422.8875 40 422.55 40 421.875 40 C 421.2 40 420.8625 40 420.1875 40 C 419.5125 40 419.175 40 418.5 40 C 417.825 40 417.4875 40 416.8125 40 C 416.1375 40 415.8 40 415.125 40 C 414.45 40 414.1125 40 413.4375 40 C 412.7625 40 412.425 40 411.75 40 C 411.075 40 410.7375 40 410.0625 40 C 409.3875 40 409.05 40 408.375 40 C 407.7 40 407.3625 40 406.6875 40 C 406.0125 40 405.675 40 405 40 C 404.325 40 403.9875 40 403.3125 40 C 402.6375 40 402.3 40 401.625 40 C 400.95 40 400.6125 40 399.9375 40 C 399.2625 40 398.925 40 398.25 40 C 397.575 40 397.2375 40 396.5625 40 C 395.8875 40 395.55 40 394.875 40 C 394.2 40 393.8625 40 393.1875 40 C 392.5125 40 392.175 40 391.5 40 C 390.825 40 390.4875 40 389.8125 40 C 389.1375 40 388.8 40 388.125 40 C 387.45 40 387.1125 40 386.4375 40 C 385.7625 40 385.425 40 384.75 40 C 384.075 40 383.7375 40 383.0625 40 C 382.3875 40 382.05 40 381.375 40 C 380.7 40 380.3625 40 379.6875 40 C 379.0125 40 378.675 40 378 40 C 377.325 40 376.9875 40 376.3125 40 C 375.6375 40 375.3 40 374.625 40 C 373.95 40 373.6125 40 372.9375 40 C 372.2625 40 371.925 40 371.25 40 C 370.575 40 370.2375 40 369.5625 40 C 368.8875 40 368.55 40 367.875 40 C 367.2 40 366.8625 40 366.1875 40 C 365.5125 40 365.175 40 364.5 40 C 363.825 40 363.4875 40 362.8125 40 C 362.1375 40 361.8 40 361.125 40 C 360.45 40 360.1125 40 359.4375 40 C 358.7625 40 358.425 40 357.75 40 C 357.075 40 356.7375 40 356.0625 40 C 355.3875 40 355.05 40 354.375 40 C 353.7 40 353.3625 40 352.6875 40 C 352.0125 40 351.675 40 351 40 C 350.325 40 349.9875 40 349.3125 40 C 348.6375 40 348.3 40 347.625 40 C 346.95 40 346.6125 40 345.9375 40 C 345.2625 40 344.925 40 344.25 40 C 343.575 40 343.2375 40 342.5625 40 C 341.8875 40 341.55 40 340.875 40 C 340.2 40 339.8625 40 339.1875 40 C 338.5125 40 338.175 40 337.5 40 C 336.825 40 336.4875 40 335.8125 40 C 335.1375 40 334.8 40 334.125 40 C 333.45 40 333.1125 40 332.4375 40 C 331.7625 40 331.425 40 330.75 40 C 330.075 40 329.7375 40 329.0625 40 C 328.3875 40 328.05 40 327.375 40 C 326.7 40 326.3625 40 325.6875 40 C 325.0125 40 324.675 40 324 40 C 323.325 40 322.9875 40 322.3125 40 C 321.6375 40 321.3 40 320.625 40 C 319.95 40 319.6125 40 318.9375 40 C 318.2625 40 317.925 40 317.25 40 C 316.575 40 316.2375 40 315.5625 40 C 314.8875 40 314.55 40 313.875 40 C 313.2 40 312.8625 40 312.1875 40 C 311.5125 40 311.175 40 310.5 40 C 309.825 40 309.4875 40 308.8125 40 C 308.1375 40 307.8 40 307.125 40 C 306.45 40 306.1125 40 305.4375 40 C 304.7625 40 304.425 40 303.75 40 C 303.075 40 302.7375 40 302.0625 40 C 301.3875 40 301.05 40 300.375 40 C 299.7 40 299.3625 40 298.6875 40 C 298.0125 40 297.675 40 297 40 C 296.325 40 295.9875 40 295.3125 40 C 294.6375 40 294.3 40 293.625 40 C 292.95 40 292.6125 40 291.9375 40 C 291.2625 40 290.925 40 290.25 40 C 289.575 40 289.2375 40 288.5625 40 C 287.8875 40 287.55 40 286.875 40 C 286.2 40 285.8625 40 285.1875 40 C 284.5125 40 284.175 40 283.5 40 C 282.825 40 282.4875 40 281.8125 40 C 281.1375 40 280.8 40 280.125 40 C 279.45 40 279.1125 40 278.4375 40 C 277.7625 40 277.425 40 276.75 40 C 276.075 40 275.7375 40 275.0625 40 C 274.3875 40 274.05 40 273.375 40 C 272.7 40 272.3625 40 271.6875 40 C 271.0125 40 270.675 40 270 40 C 269.325 40 268.9875 40 268.3125 40 C 267.6375 40 267.3 40 266.625 40 C 265.95 40 265.6125 40 264.9375 40 C 264.2625 40 263.925 40 263.25 40 C 262.575 40 262.2375 40 261.5625 40 C 260.8875 40 260.55 40 259.875 40 C 259.2 40 258.8625 40 258.1875 40 C 257.5125 40 257.175 40 256.5 40 C 255.825 40 255.4875 40 254.8125 40 C 254.1375 40 253.8 40 253.125 40 C 252.45 40 252.1125 40 251.4375 40 C 250.7625 40 250.425 40 249.75 40 C 249.075 40 248.7375 40 248.0625 40 C 247.3875 40 247.05 40 246.375 40 C 245.7 40 245.3625 40 244.6875 40 C 244.0125 40 243.675 40 243 40 C 242.325 40 241.9875 40 241.3125 40 C 240.6375 40 240.3 40 239.625 40 C 238.95 40 238.6125 40 237.9375 40 C 237.2625 40 236.925 40 236.25 40 C 235.575 40 235.2375 40 234.5625 40 C 233.8875 40 233.55 40 232.875 40 C 232.2 40 231.8625 40 231.1875 40 C 230.5125 40 230.175 40 229.5 40 C 228.825 40 228.4875 40 227.8125 40 C 227.1375 40 226.8 40 226.125 40 C 225.45 40 225.1125 40 224.4375 40 C 223.7625 40 223.425 40 222.75 40 C 222.075 40 221.7375 40 221.0625 40 C 220.3875 40 220.05 40 219.375 40 C 218.7 40 218.3625 40 217.6875 40 C 217.0125 40 216.675 40 216 40 C 215.325 40 214.9875 40 214.3125 40 C 213.6375 40 213.3 40 212.625 40 C 211.95 40 211.6125 40 210.9375 40 C 210.2625 40 209.925 40 209.25 40 C 208.575 40 208.2375 40 207.5625 40 C 206.8875 40 206.55 40 205.875 40 C 205.2 40 204.8625 40 204.1875 40 C 203.5125 40 203.175 40 202.5 40 C 201.825 40 201.4875 40 200.8125 40 C 200.1375 40 199.8 40 199.125 40 C 198.45 40 198.1125 40 197.4375 40 C 196.7625 40 196.425 40 195.75 40 C 195.075 40 194.7375 40 194.0625 40 C 193.3875 40 193.05 40 192.375 40 C 191.7 40 191.3625 40 190.6875 40 C 190.0125 40 189.675 40 189 40 C 188.325 40 187.9875 40 187.3125 40 C 186.6375 40 186.3 40 185.625 40 C 184.95 40 184.6125 40 183.9375 40 C 183.2625 40 182.925 40 182.25 40 C 181.575 40 181.2375 40 180.5625 40 C 179.8875 40 179.55 40 178.875 40 C 178.2 40 177.8625 40 177.1875 40 C 176.5125 40 176.175 40 175.5 40 C 174.825 40 174.4875 40 173.8125 40 C 173.1375 40 172.8 40 172.125 40 C 171.45 40 171.1125 40 170.4375 40 C 169.7625 40 169.425 40 168.75 40 C 168.075 40 167.7375 40 167.0625 40 C 166.3875 40 166.05 40 165.375 40 C 164.7 40 164.3625 40 163.6875 40 C 163.0125 40 162.675 40 162 40 C 161.325 40 160.9875 40 160.3125 40 C 159.6375 40 159.3 40 158.625 40 C 157.95 40 157.6125 40 156.9375 40 C 156.2625 40 155.925 40 155.25 40 C 154.575 40 154.2375 40 153.5625 40 C 152.8875 40 152.55 40 151.875 40 C 151.2 40 150.8625 40 150.1875 40 C 149.5125 40 149.175 40 148.5 40 C 147.825 40 147.4875 40 146.8125 40 C 146.1375 40 145.8 40 145.125 40 C 144.45 40 144.1125 40 143.4375 40 C 142.7625 40 142.425 40 141.75 40 C 141.075 40 140.7375 40 140.0625 40 C 139.3875 40 139.05 40 138.375 40 C 137.7 40 137.3625 40 136.6875 40 C 136.0125 40 135.675 40 135 40 C 134.325 40 133.9875 40 133.3125 40 C 132.6375 40 132.3 40 131.625 40 C 130.95 40 130.6125 40 129.9375 40 C 129.2625 40 128.925 40 128.25 40 C 127.575 40 127.2375 40 126.5625 40 C 125.8875 40 125.55 40 124.875 40 C 124.2 40 123.8625 40 123.1875 40 C 122.5125 40 122.175 40 121.5 40 C 120.825 40 120.4875 40 119.8125 40 C 119.1375 40 118.8 40 118.125 40 C 117.45 40 117.1125 40 116.4375 40 C 115.7625 40 115.425 40 114.75 40 C 114.075 40 113.7375 40 113.0625 40 C 112.3875 40 112.05 40 111.375 40 C 110.7 40 110.3625 40 109.6875 40 C 109.0125 40 108.675 40 108 40 C 107.325 40 106.9875 40 106.3125 40 C 105.6375 40 105.3 40 104.625 40 C 103.95 40 103.6125 40 102.9375 40 C 102.2625 40 101.925 40 101.25 40 C 100.575 40 100.2375 40 99.5625 40 C 98.8875 40 98.55 40 97.875 40 C 97.2 40 96.8625 40 96.1875 40 C 95.5125 40 95.175 40 94.5 40 C 93.825 40 93.4875 40 92.8125 40 C 92.1375 40 91.8 40 91.125 40 C 90.45 40 90.1125 40 89.4375 40 C 88.7625 40 88.425 40 87.75 40 C 87.075 40 86.7375 40 86.0625 40 C 85.3875 40 85.05 40 84.375 40 C 83.7 40 83.3625 40 82.6875 40 C 82.0125 40 81.675 40 81 40 C 80.325 40 79.9875 40 79.3125 40 C 78.6375 40 78.3 40 77.625 40 C 76.95 40 76.6125 40 75.9375 40 C 75.2625 40 74.925 40 74.25 40 C 73.575 40 73.2375 40 72.5625 40 C 71.8875 40 71.55 40 70.875 40 C 70.2 40 69.8625 40 69.1875 40 C 68.5125 40 68.175 40 67.5 40 C 66.825 40 66.4875 40 65.8125 40 C 65.1375 40 64.8 40 64.125 40 C 63.45 40 63.1125 40 62.4375 40 C 61.7625 40 61.425 40 60.75 40 C 60.075 40 59.7375 40 59.0625 40 C 58.3875 40 58.05 40 57.375 40 C 56.7 40 56.3625 40 55.6875 40 C 55.0125 40 54.675 40 54 40 C 53.325 40 52.9875 40 52.3125 40 C 51.6375 40 51.3 40 50.625 40 C 49.95 40 49.6125 40 48.9375 40 C 48.2625 40 47.925 40 47.25 40 C 46.575 40 46.2375 40 45.5625 40 C 44.8875 40 44.55 40 43.875 40 C 43.2 40 42.8625 40 42.1875 40 C 41.5125 40 41.175 40 40.5 40 C 39.825 40 39.4875 40 38.8125 40 C 38.1375 40 37.8 40 37.125 40 C 36.45 40 36.1125 40 35.4375 40 C 34.7625 40 34.425 40 33.75 40 C 33.075 40 32.7375 40 32.0625 40 C 31.3875 40 31.05 40 30.375 40 C 29.7 40 29.3625 40 28.6875 40 C 28.0125 40 27.675 40 27 40 C 26.325 40 25.9875 40 25.3125 40 C 24.6375 40 24.3 40 23.625 40 C 22.95 40 22.6125 40 21.9375 40 C 21.2625 40 20.925 40 20.25 40 C 19.575 40 19.2375 40 18.5625 40 C 17.8875 40 17.55 40 16.875 40 C 16.2 40 15.8625 40 15.1875 40 C 14.5125 40 14.175 40 13.5 40 C 12.825 40 12.4875 40 11.8125 40 C 11.1375 40 10.8 40 10.125 40 C 9.449999999999921 40 9.11249999999988 40 8.4374999999998 40 C 7.762499999999759 40 7.424999999999739 40 6.7499999999997 40 C 6.07499999999994 40 5.737500000000059 40 5.0625000000003 40 C 4.38750000000026 40 4.0500000000002405 40 3.3750000000002 40 C 2.70000000000016 40 2.36250000000014 40 1.6875000000001 40 C 1.0125000000000601 40 0 40 0 40 Z" class="highcharts-area" data-z-index="0"></path>
                                                            <path d="M 0 39.92464270894433 C 0 39.92464270894433 1.0125000000000601 39.93343423376813 1.6875000000001 39.93501497846394 C 2.36250000000014 39.93659572315975 2.70000000000016 39.93659572315975 3.3750000000002 39.93659572315975 C 4.0500000000002405 39.93659572315975 4.38750000000026 39.93555666618171 5.0625000000003 39.934054055642605 C 5.737500000000059 39.932551445103506 6.07499999999994 39.929461963259556 6.7499999999997 39.92908267046422 C 7.424999999999739 39.92870337766888 7.762499999999759 39.92870337766888 8.4374999999998 39.92870337766888 C 9.11249999999988 39.92870337766888 9.449999999999921 39.93213044946182 10.125 39.934865420246126 C 10.8 39.93760039103043 11.1375 39.94237823159039 11.8125 39.94237823159039 C 12.4875 39.94237823159039 12.825 39.94079905435169 13.5 39.94079905435169 C 14.175 39.94079905435169 14.5125 39.94107950346047 15.1875 39.94383381841603 C 15.8625 39.94658813337159 16.2 39.95457062912949 16.875 39.95457062912949 C 17.55 39.95457062912949 17.8875 39.95411104433801 18.5625 39.95273045038953 C 19.2375 39.95134985644105 19.575 39.947667659387086 20.25 39.947667659387086 C 20.925 39.947667659387086 21.2625 39.94778377851977 21.9375 39.94778377851977 C 22.6125 39.94778377851977 22.95 39.942479193333206 23.625 39.94216991097014 C 24.3 39.94186062860707 24.6375 39.94216991097014 25.3125 39.94186062860707 C 25.9875 39.941551346244 26.325 39.940425458507086 27 39.93859498686195 C 27.675 39.93676451521681 28.0125 39.9347380716491 28.6875 39.932708270381376 C 29.3625 39.93067846911365 29.7 39.9294150986788 30.375 39.92844598052332 C 31.05 39.92747686236784 31.3875 39.92774961581916 32.0625 39.92747686236784 C 32.7375 39.92720410891653 33.075 39.92708221326676 33.75 39.92708221326676 C 34.425 39.92708221326676 34.7625 39.927690100188585 35.4375 39.927690100188585 C 36.1125 39.927690100188585 36.45 39.927206336774354 37.125 39.927206336774354 C 37.8 39.927206336774354 38.1375 39.92801632222778 38.8125 39.92801632222778 C 39.4875 39.92801632222778 39.825 39.92801632222778 40.5 39.92713472705843 C 41.175 39.92625313188908 41.5125 39.921483606543234 42.1875 39.91502393276893 C 42.8625 39.90856425899463 43.2 39.900686553712355 43.875 39.8948363581869 C 44.55 39.88898616266144 44.8875 39.8948363581869 45.5625 39.885772955141654 C 46.2375 39.87670955209641 46.575 39.862211767276165 47.25 39.83956161412991 C 47.925 39.81691146098366 48.2625 39.816031457141314 48.9375 39.77252218941038 C 49.6125 39.72901292167944 49.95 39.684441602295024 50.625 39.62201527547522 C 51.3 39.55958894865542 51.6375 39.46039055531135 52.3125 39.46039055531135 C 52.9875 39.46039055531135 53.325 39.46039055531135 54 39.46388670077538 C 54.675 39.46738284623942 55.0125 39.472820410668454 55.6875 39.505908873405666 C 56.3625 39.53899733614287 56.7 39.629329014461426 57.375 39.629329014461426 C 58.05 39.629329014461426 58.3875 39.62521829850208 59.0625 39.60944299634978 C 59.7375 39.59366769419748 60.075 39.56926819525759 60.75 39.55045250369993 C 61.425 39.53163681214227 61.7625 39.51536453856147 62.4375 39.51536453856147 C 63.1125 39.51536453856147 63.45 39.53306486901047 64.125 39.53306486901047 C 64.8 39.53306486901047 65.1375 39.52921067496682 65.8125 39.52921067496682 C 66.4875 39.52921067496682 66.825 39.530735166252455 67.5 39.539331514817185 C 68.175 39.547927863381915 68.5125 39.552879436538895 69.1875 39.57219241779046 C 69.8625 39.59150539904203 70.2 39.61815423872539 70.875 39.635896421075024 C 71.55 39.65363860342466 71.8875 39.650206270174145 72.5625 39.660903329538634 C 73.2375 39.67160038890312 73.575 39.68938171789746 74.25 39.68938171789746 C 74.925 39.68938171789746 75.2625 39.646905221402825 75.9375 39.646905221402825 C 76.6125 39.646905221402825 76.95 39.646905221402825 77.625 39.64833343740372 C 78.3 39.64976165340462 78.6375 39.65962288416487 79.3125 39.669772988519135 C 79.9875 39.67992309287341 80.325 39.68388337114154 81 39.699083959175084 C 81.675 39.71428454720862 82.0125 39.73277493969676 82.6875 39.74577592868683 C 83.3625 39.758776917676904 83.7 39.764088904125444 84.375 39.764088904125444 C 85.05 39.764088904125444 85.3875 39.72323481326802 86.0625 39.72323481326802 C 86.7375 39.72323481326802 87.075 39.73049352416586 87.75 39.736647058447964 C 88.425 39.74280059273006 88.7625 39.75217694614715 89.4375 39.75400248467853 C 90.1125 39.75582802320991 90.45 39.75582802320991 91.125 39.75582802320991 C 91.8 39.75582802320991 92.1375 39.75582802320991 92.8125 39.75332654465667 C 93.4875 39.75082506610344 93.825 39.734079095843136 94.5 39.71709175787435 C 95.175 39.70010441990556 95.5125 39.68458433637213 96.1875 39.66838985481273 C 96.8625 39.65219537325332 97.2 39.63611935007733 97.875 39.63611935007733 C 98.55 39.63611935007733 98.8875 39.65763116335274 99.5625 39.66277632144176 C 100.2375 39.66792147953078 100.575 39.665740540387965 101.25 39.66792147953078 C 101.925 39.67010241867361 102.2625 39.673681017155886 102.9375 39.673681017155886 C 103.6125 39.673681017155886 103.95 39.64546873845806 104.625 39.64546873845806 C 105.3 39.64546873845806 105.6375 39.65105192446941 106.3125 39.65255233829938 C 106.9875 39.65405275212935 107.325 39.65255233829938 108 39.65405275212935 C 108.675 39.655553165959326 109.0125 39.65828072712716 109.6875 39.66256574909377 C 110.3625 39.66685077106038 110.7 39.6754778619624 111.375 39.6754778619624 C 112.05 39.6754778619624 112.3875 39.673234436652415 113.0625 39.673234436652415 C 113.7375 39.673234436652415 114.075 39.69615241951409 114.75 39.70589913170564 C 115.425 39.71564584389719 115.7625 39.72196799761018 116.4375 39.72196799761018 C 117.1125 39.72196799761018 117.45 39.720082474006766 118.125 39.720082474006766 C 118.8 39.720082474006766 119.1375 39.72986198216787 119.8125 39.732816877529054 C 120.4875 39.73577177289024 120.825 39.732816877529054 121.5 39.73577177289024 C 122.175 39.738726668251424 122.5125 39.75264404041086 123.1875 39.760330428402085 C 123.8625 39.76801681639332 124.2 39.76640875816052 124.875 39.7742037128464 C 125.55 39.78199866753228 125.8875 39.79462023164688 126.5625 39.79930520183148 C 127.2375 39.80399017201608 127.575 39.80399017201608 128.25 39.80399017201608 C 128.925 39.80399017201608 129.2625 39.78411558758907 129.9375 39.78411558758907 C 130.6125 39.78411558758907 130.95 39.791554299939406 131.625 39.79715648116842 C 132.3 39.80275866239744 132.6375 39.812126493734134 133.3125 39.812126493734134 C 133.9875 39.812126493734134 134.325 39.812126493734134 135 39.810134872117715 C 135.675 39.808143250501296 136.0125 39.78330927014442 136.6875 39.78330927014442 C 137.3625 39.78330927014442 137.7 39.79633676268709 138.375 39.79633676268709 C 139.05 39.79633676268709 139.3875 39.792849928076386 140.0625 39.791886912660026 C 140.7375 39.790923897243665 141.075 39.790923897243665 141.75 39.790923897243665 C 142.425 39.790923897243665 142.7625 39.79890428514282 143.4375 39.804635258447895 C 144.1125 39.81036623175297 144.45 39.81921554105895 145.125 39.819578763769066 C 145.8 39.81994198647918 146.1375 39.819578763769066 146.8125 39.81994198647918 C 147.4875 39.82030520918929 147.825 39.82697553229743 148.5 39.83163465727635 C 149.175 39.83629378225528 149.5125 39.833224234914475 150.1875 39.8432376113738 C 150.8625 39.853250987833135 151.2 39.881701539572994 151.875 39.881701539572994 C 152.55 39.881701539572994 152.8875 39.87442251172684 153.5625 39.87142244763716 C 154.2375 39.868422383547475 154.575 39.866701219124565 155.25 39.866701219124565 C 155.925 39.866701219124565 156.2625 39.87421741463278 156.9375 39.87421741463278 C 157.6125 39.87421741463278 157.95 39.87346454200259 158.625 39.87193322710669 C 159.3 39.87040191221079 159.6375 39.86824858085599 160.3125 39.866560840153284 C 160.9875 39.86487309945058 161.325 39.866560840153284 162 39.863494523593154 C 162.675 39.860428207033024 163.0125 39.852069954540205 163.6875 39.84715825615189 C 164.3625 39.84224655776359 164.7 39.83893603165161 165.375 39.83893603165161 C 166.05 39.83893603165161 166.3875 39.846128459005065 167.0625 39.85055450118751 C 167.7375 39.85498054336995 168.075 39.86106624256382 168.75 39.86106624256382 C 169.425 39.86106624256382 169.7625 39.86031464289878 170.4375 39.86031464289878 C 171.1125 39.86031464289878 171.45 39.861416795420496 172.125 39.86451303661238 C 172.8 39.86760927780426 173.1375 39.875795848858196 173.8125 39.875795848858196 C 174.4875 39.875795848858196 174.825 39.87342905788697 175.5 39.87242338437642 C 176.175 39.87141771086586 176.5125 39.87176965291446 177.1875 39.87076748130543 C 177.8625 39.869765309696405 178.2 39.867412526331286 178.875 39.867412526331286 C 179.55 39.867412526331286 179.8875 39.867412526331286 180.5625 39.86755334285933 C 181.2375 39.867694159387376 181.575 39.86807524926049 182.25 39.86830983632454 C 182.925 39.8685444233886 183.2625 39.86830983632454 183.9375 39.8687262781796 C 184.6125 39.86914272003466 184.95 39.87489302843261 185.625 39.87489302843261 C 186.3 39.87489302843261 186.6375 39.873873444523326 187.3125 39.87158146098968 C 187.9875 39.869289477456036 188.325 39.8634331107644 189 39.8634331107644 C 189.675 39.8634331107644 190.0125 39.86349674793195 190.6875 39.86349674793195 C 191.3625 39.86349674793195 191.7 39.859272113954496 192.375 39.85538928119363 C 193.05 39.85150644843276 193.3875 39.844403490537985 194.0625 39.844082584127605 C 194.7375 39.843761677717225 195.075 39.84396734324704 195.75 39.843761677717225 C 196.425 39.84355601218741 196.7625 39.843761677717225 197.4375 39.843054256478545 C 198.1125 39.842346835239866 198.45 39.840209414856375 199.125 39.840209414856375 C 199.8 39.840209414856375 200.1375 39.84403892249305 200.8125 39.84658559962429 C 201.4875 39.849132276755526 201.825 39.84866743060417 202.5 39.85294280051259 C 203.175 39.85721817042101 203.5125 39.86350068541855 204.1875 39.86796244916639 C 204.8625 39.87242421291424 205.2 39.87525161925182 205.875 39.87525161925182 C 206.55 39.87525161925182 206.8875 39.87295560545811 207.5625 39.871390613140115 C 208.2375 39.86982562082211 208.575 39.86742665766183 209.25 39.86742665766183 C 209.925 39.86742665766183 210.2625 39.87145110743679 210.9375 39.87145110743679 C 211.6125 39.87145110743679 211.95 39.87145110743679 212.625 39.87090626093488 C 213.3 39.87036141443297 213.6375 39.8689005555409 214.3125 39.867508300348014 C 214.9875 39.866116045155124 215.325 39.86604707152134 216 39.863944984970445 C 216.675 39.861842898419546 217.0125 39.86034291337432 217.6875 39.856997867593535 C 218.3625 39.85365282181275 218.7 39.85300703445099 219.375 39.84721975606653 C 220.05 39.841432477682076 220.3875 39.84002925740142 221.0625 39.828061475671255 C 221.7375 39.81609369394109 222.075 39.7873808474157 222.75 39.7873808474157 C 223.425 39.7873808474157 223.7625 39.8087086475911 224.4375 39.81295446721449 C 225.1125 39.81720028683788 225.45 39.81720028683788 226.125 39.81720028683788 C 226.8 39.81720028683788 227.1375 39.812888538536036 227.8125 39.80793215957145 C 228.4875 39.80297578060687 228.825 39.801182832452874 229.5 39.792418392014966 C 230.175 39.783653951577065 230.5125 39.77328792005938 231.1875 39.764109957381926 C 231.8625 39.75493199470448 232.2 39.74652857862771 232.875 39.74652857862771 C 233.55 39.74652857862771 233.8875 39.75304891378804 234.5625 39.755848026190556 C 235.2375 39.75864713859307 235.575 39.76052414064029 236.25 39.76052414064029 C 236.925 39.76052414064029 237.2625 39.753022999027515 237.9375 39.753022999027515 C 238.6125 39.753022999027515 238.95 39.76438420190666 239.625 39.76984756652068 C 240.3 39.7753109311347 240.6375 39.7769411454136 241.3125 39.78033982209763 C 241.9875 39.78373849878166 242.325 39.784865269705065 243 39.786840949940824 C 243.675 39.78881663017658 244.0125 39.790218223276426 244.6875 39.790218223276426 C 245.3625 39.790218223276426 245.7 39.790218223276426 246.375 39.78682424100711 C 247.05 39.783430258737795 247.3875 39.769955935890785 248.0625 39.765771700623084 C 248.7375 39.76158746535538 249.075 39.76158746535538 249.75 39.76158746535538 C 250.425 39.76158746535538 250.7625 39.76572306966934 251.4375 39.76730764946327 C 252.1125 39.768892229257204 252.45 39.769132265024965 253.125 39.769510364325036 C 253.8 39.76988846362511 254.1375 39.76988846362511 254.8125 39.76988846362511 C 255.4875 39.76988846362511 255.825 39.76801960917224 256.5 39.767808121811214 C 257.175 39.767596634450186 257.5125 39.767808121811214 258.1875 39.767596634450186 C 258.8625 39.76738514708916 259.2 39.767080089699334 259.875 39.76602941603405 C 260.55 39.76497874236877 260.8875 39.76515246753959 261.5625 39.76234326612377 C 262.2375 39.75953406470795 262.575 39.755049148199724 263.25 39.75198340895493 C 263.925 39.748917669710124 264.2625 39.747014569899775 264.9375 39.747014569899775 C 265.6125 39.747014569899775 265.95 39.74769669222711 266.625 39.74769669222711 C 267.3 39.74769669222711 267.6375 39.74631621603683 268.3125 39.74631621603683 C 268.9875 39.74631621603683 269.325 39.75136032486005 270 39.75136032486005 C 270.675 39.75136032486005 271.0125 39.7476684091697 271.6875 39.73593805860725 C 272.3625 39.7242077080448 272.7 39.70630076739359 273.375 39.69270857204779 C 274.05 39.67911637670199 274.3875 39.68798166833836 275.0625 39.66797708187826 C 275.7375 39.64797249541816 276.075 39.5926856397473 276.75 39.5926856397473 C 277.425 39.5926856397473 277.7625 39.63629912033837 278.4375 39.63629912033837 C 279.1125 39.63629912033837 279.45 39.630836152298585 280.125 39.630836152298585 C 280.8 39.630836152298585 281.1375 39.631551612280056 281.8125 39.631551612280056 C 282.4875 39.631551612280056 282.825 39.630742840914714 283.5 39.63038863538284 C 284.175 39.63003442985098 284.5125 39.62978058462073 285.1875 39.62978058462073 C 285.8625 39.62978058462073 286.2 39.62978058462073 286.875 39.637736435705065 C 287.55 39.6456922867894 287.8875 39.679888418033535 288.5625 39.679888418033535 C 289.2375 39.679888418033535 289.575 39.67396643664478 290.25 39.67396643664478 C 290.925 39.67396643664478 291.2625 39.67968870150549 291.9375 39.67968870150549 C 292.6125 39.67968870150549 292.95 39.679155142080724 293.625 39.678437903135254 C 294.3 39.67772066418979 294.6375 39.678437903135254 295.3125 39.67610250677818 C 295.9875 39.6737671104211 296.325 39.65727523889431 297 39.65727523889431 C 297.675 39.65727523889431 298.0125 39.6605121437481 298.6875 39.662067610336535 C 299.3625 39.66362307692497 299.7 39.66505257183649 300.375 39.66505257183649 C 301.05 39.66505257183649 301.3875 39.66304713444958 302.0625 39.66174965699817 C 302.7375 39.66045217954675 303.075 39.66158320453777 303.75 39.65856518457944 C 304.425 39.65554716462111 304.7625 39.6482932581781 305.4375 39.64665955720654 C 306.1125 39.64502585623498 306.45 39.64665955720654 307.125 39.64502585623498 C 307.8 39.64339215526342 308.1375 39.62942325549084 308.8125 39.62138856420667 C 309.4875 39.613353872922495 309.825 39.605242892394195 310.5 39.60485239981413 C 311.175 39.60446190723406 311.5125 39.60485239981413 312.1875 39.60446190723406 C 312.8625 39.604071414653994 313.2 39.59521779613794 313.875 39.59227847344692 C 314.55 39.5893391507559 314.8875 39.59152156477145 315.5625 39.5893391507559 C 316.2375 39.58715673674034 316.575 39.58444538102153 317.25 39.58136640336913 C 317.925 39.57828742571673 318.2625 39.57721168997113 318.9375 39.57394426249389 C 319.6125 39.57067683501665 319.95 39.57394426249389 320.625 39.56502926598293 C 321.3 39.55611426947197 321.6375 39.543999667289576 322.3125 39.52427740994191 C 322.9875 39.50455515259424 323.325 39.48012860185696 324 39.46641797924459 C 324.675 39.45270735663222 325.0125 39.45270735663222 325.6875 39.45270735663222 C 326.3625 39.45270735663222 326.7 39.53409289405524 327.375 39.53409289405524 C 328.05 39.53409289405524 328.3875 39.51217253371086 329.0625 39.50404681296321 C 329.7375 39.49592109221556 330.075 39.50404681296321 330.75 39.493464290316986 C 331.425 39.48288176767076 331.7625 39.4589365931109 332.4375 39.44699537607566 C 333.1125 39.43505415904043 333.45 39.43802933333074 334.125 39.43375820514081 C 334.8 39.429487076950885 335.1375 39.43375820514081 335.8125 39.42563973512603 C 336.4875 39.417521265111255 336.825 39.38498884367086 337.5 39.361294396677025 C 338.175 39.33759994968318 338.5125 39.30716750015684 339.1875 39.30716750015684 C 339.8625 39.30716750015684 340.2 39.32343311698963 340.875 39.334293408861605 C 341.55 39.34515370073359 341.8875 39.34095819495614 342.5625 39.361468959516756 C 343.2375 39.381979724077375 343.575 39.43684723166469 344.25 39.43684723166469 C 344.925 39.43684723166469 345.2625 39.42701345735181 345.9375 39.409694625049966 C 346.6125 39.392375792748126 346.95 39.36554457886565 347.625 39.35025307015549 C 348.3 39.334961561445326 348.6375 39.34101457145814 349.3125 39.33323708149914 C 349.9875 39.32545959154014 350.325 39.32330774035112 351 39.31136562036049 C 351.675 39.299423500369855 352.0125 39.30205524813562 352.6875 39.27352648154598 C 353.3625 39.24499771495634 353.7 39.216134639203595 354.375 39.16872178741228 C 355.05 39.12130893562097 355.3875 39.07988786767675 356.0625 39.036462222589414 C 356.7375 38.993036577502075 357.075 39.01002756756635 357.75 38.95159356197557 C 358.425 38.89315955638479 358.7625 38.802784461891164 359.4375 38.74429219463551 C 360.1125 38.68579992737986 360.45 38.72519768189661 361.125 38.65913222569731 C 361.8 38.593066769498016 362.1375 38.41396491363904 362.8125 38.41396491363904 C 363.4875 38.41396491363904 363.825 38.55507985225232 364.5 38.55507985225232 C 365.175 38.55507985225232 365.5125 38.50392419515257 366.1875 38.50392419515257 C 366.8625 38.50392419515257 367.2 38.59917216064875 367.875 38.59917216064875 C 368.55 38.59917216064875 368.8875 38.567866702785786 369.5625 38.567866702785786 C 370.2375 38.567866702785786 370.575 38.754134523220934 371.25 38.754134523220934 C 371.925 38.754134523220934 372.2625 38.63909302515531 372.9375 38.59019177570014 C 373.6125 38.54129052624498 373.95 38.551613884450354 374.625 38.509628275945104 C 375.3 38.46764266743986 375.6375 38.47766511764863 376.3125 38.380263733173905 C 376.9875 38.28286234869919 377.325 38.16156895850663 378 38.02262135357153 C 378.675 37.88367374863643 379.0125 37.685525708498425 379.6875 37.685525708498425 C 380.3625 37.685525708498425 380.7 37.722819771966826 381.375 37.722819771966826 C 382.05 37.722819771966826 382.3875 37.460297449001004 383.0625 37.460297449001004 C 383.7375 37.460297449001004 384.075 37.471071739236066 384.75 37.56482319154192 C 385.425 37.65857464384777 385.7625 37.92905471053026 386.4375 37.92905471053026 C 387.1125 37.92905471053026 387.45 37.92905471053026 388.125 37.89505630052708 C 388.8 37.8610578905239 389.1375 37.77630047871335 389.8125 37.711311875869995 C 390.4875 37.64632327302664 390.825 37.69546176254351 391.5 37.57011328631031 C 392.175 37.44476481007712 392.5125 37.245660032319684 393.1875 37.08456949470403 C 393.8625 36.92347895708836 394.2 36.770167401723185 394.875 36.764660598232005 C 395.55 36.759153794740826 395.8875 36.764660598232005 396.5625 36.759153794740826 C 397.2375 36.753646991249646 397.575 36.157807366221945 398.25 36.157807366221945 C 398.925 36.157807366221945 399.2625 36.19619888006523 399.9375 36.19619888006523 C 400.6125 36.19619888006523 400.95 36.05694369469994 401.625 35.87764803579394 C 402.3 35.69835237688794 402.6375 35.64941912226332 403.3125 35.29972058553522 C 403.9875 34.95002204880713 404.325 34.846623069180616 405 34.129155352153454 C 405.675 33.411687635126285 406.0125 32.52441893478114 406.6875 31.712382000399394 C 407.3625 30.90034506601765 407.7 30.068970680244718 408.375 30.068970680244718 C 409.05 30.068970680244718 409.3875 30.58453773418714 410.0625 30.885258896614637 C 410.7375 31.185980059042137 411.075 31.57257649238221 411.75 31.57257649238221 C 412.425 31.57257649238221 412.7625 30.87403792704393 413.4375 30.87403792704393 C 414.1125 30.87403792704393 414.45 31.14706731990574 415.125 31.60621728692526 C 415.8 32.065367253944785 416.1375 32.74109472350972 416.8125 33.16978776214153 C 417.4875 33.598480800773345 417.825 33.485676852866575 418.5 33.749682480084324 C 419.175 34.01368810730207 419.5125 34.12969196169043 420.1875 34.4898158982303 C 420.8625 34.84993983477017 421.2 35.55030216278367 421.875 35.55030216278367 C 422.55 35.55030216278367 422.8875 34.999275788530845 423.5625 34.724684415763356 C 424.2375 34.45009304299586 424.575 34.27640181375576 425.25 34.1773452989462 C 425.925 34.07828878413664 426.2625 34.07828878413664 426.9375 34.07828878413664 C 427.6125 34.07828878413664 427.95 34.13029655766501 428.625 34.34056048555882 C 429.3 34.55082441345263 429.6375 35.10780181986303 430.3125 35.12960842360569 C 430.9875 35.15141502734835 431.325 35.12960842360569 432 35.15141502734835 C 432.675 35.17322163109101 433.0125 35.55221877171816 433.6875 35.74862537797245 C 434.3625 35.945031984226745 434.7 36.13344805861982 435.375 36.13344805861982 C 436.05 36.13344805861982 436.3875 36.082665272780126 437.0625 35.934351312991154 C 437.7375 35.786037353202175 438.075 35.59089623414056 438.75 35.391878259674925 C 439.425 35.19286028520929 439.7625 35.06191007112929 440.4375 34.93926144066298 C 441.1125 34.81661281019667 441.45 34.778635107343376 442.125 34.778635107343376 C 442.8 34.778635107343376 443.1375 34.86448028167606 443.8125 34.97564779493375 C 444.4875 35.08681530819143 444.825 35.2005068968576 445.5 35.3344726736318 C 446.175 35.468438450406005 446.5125 35.5364327732279 447.1875 35.64547667880476 C 447.8625 35.75452058438162 448.2 35.8796922015161 448.875 35.8796922015161 C 449.55 35.8796922015161 449.8875 35.793480652622804 450.5625 35.793480652622804 C 451.2375 35.793480652622804 451.575 36.28269843166268 452.25 36.332476272645245 C 452.925 36.38225411362781 453.2625 36.333293856119525 453.9375 36.38225411362781 C 454.6125 36.43121437113609 454.95 36.577277560186666 455.625 36.577277560186666 C 456.3 36.577277560186666 456.6375 36.35032129098692 457.3125 36.35032129098692 C 457.9875 36.35032129098692 458.325 36.43935545270026 459 36.43935545270026 C 459.675 36.43935545270026 460.0125 36.20893383758061 460.6875 36.03096451901649 C 461.3625 35.85299520045237 461.7 35.54950885987965 462.375 35.54950885987965 C 463.05 35.54950885987965 463.3875 35.566973892811085 464.0625 35.727654839525954 C 464.7375 35.88833578624082 465.075 36.2338436850291 465.75 36.35291359345399 C 466.425 36.47198350187888 466.7625 36.47198350187888 467.4375 36.47198350187888 C 468.1125 36.47198350187888 468.45 36.45715986372647 469.125 36.38261248912068 C 469.8 36.30806511451489 470.1375 36.09924662884993 470.8125 36.09924662884993 C 471.4875 36.09924662884993 471.825 36.130380555050415 472.5 36.19928623906828 C 473.175 36.26819192308614 473.5125 36.44377504893925 474.1875 36.44377504893925 C 474.8625 36.44377504893925 475.2 36.404588436562385 475.875 36.38132671526403 C 476.55 36.358064993965684 476.8875 36.327466442447516 477.5625 36.327466442447516 C 478.2375 36.327466442447516 478.575 36.327466442447516 479.25 36.33694301785152 C 479.925 36.34641959325552 480.2625 36.396522199885005 480.9375 36.396522199885005 C 481.6125 36.396522199885005 481.95 36.356392994198764 482.625 36.356392994198764 C 483.3 36.356392994198764 483.6375 36.371294884841035 484.3125 36.389232928506985 C 484.9875 36.407170972172935 485.325 36.44608321252852 486 36.44608321252852 C 486.675 36.44608321252852 487.0125 36.40755622618595 487.6875 36.40755622618595 C 488.3625 36.40755622618595 488.7 36.45772064093453 489.375 36.66424210181179 C 490.05 36.87076356268904 490.3875 37.22543684052488 491.0625 37.44016353057222 C 491.7375 37.65489022061956 492.075 37.6396343610763 492.75 37.7378755520485 C 493.425 37.8361167430207 493.7625 37.85345550498425 494.4375 37.93136948543323 C 495.1125 38.009283465882206 495.45 38.1274454542934 496.125 38.1274454542934 C 496.8 38.1274454542934 497.1375 37.98692048256409 497.8125 37.936153726320036 C 498.4875 37.885386970075984 498.825 37.87361167307312 499.5 37.87361167307312 C 500.175 37.87361167307312 500.5125 37.88768858723785 501.1875 37.88768858723785 C 501.8625 37.88768858723785 502.2 37.866496775385976 502.875 37.866496775385976 C 503.55 37.866496775385976 503.8875 37.96993104521621 504.5625 37.994713843726835 C 505.2375 38.01949664223746 505.575 38.004170888636125 506.25 38.01949664223746 C 506.925 38.0348223958388 507.2625 38.071342611733535 507.9375 38.071342611733535 C 508.6125 38.071342611733535 508.95 38.066978558776604 509.625 38.049075568388226 C 510.3 38.031172577999854 510.6375 38.0287358674377 511.3125 37.981827659791655 C 511.9875 37.93491945214561 512.325 37.814534530157964 513 37.814534530157964 C 513.675 37.814534530157964 514.0125 37.880261114623075 514.6875 37.880261114623075 C 515.3625 37.880261114623075 515.7 37.8700987896471 516.375 37.85904003740024 C 517.05 37.84798128515338 517.3875 37.84247850167103 518.0625 37.824967353388786 C 518.7375 37.80745620510653 519.075 37.7812785302605 519.75 37.77148429598899 C 520.425 37.76169006171748 520.7625 37.77148429598899 521.4375 37.76169006171748 C 522.1125 37.75189582744597 522.45 37.4996763332704 523.125 37.37242052640355 C 523.8 37.2451647195367 524.1375 37.1537654962834 524.8125 37.125411027383215 C 525.4875 37.09705655848303 525.825 37.11821870498375 526.5 37.09705655848303 C 527.175 37.07589441198232 527.5125 37.045165446956325 528.1875 37.01960029487965 C 528.8625 36.99403514280298 529.2 37.01960029487965 529.875 36.96923079809966 C 530.55 36.918861301319666 530.8875 36.818413456224 531.5625 36.573812815973675 C 532.2375 36.32921217572335 532.575 35.92003856755659 533.25 35.74622759684802 C 533.925 35.57241662613946 534.2625 35.680684431508716 534.9375 35.57241662613946 C 535.6125 35.464148820770205 535.95 35.20488857000174 536.625 35.20488857000174 C 537.3 35.20488857000174 537.6375 35.52732121927496 538.3125 35.52732121927496 C 538.9875 35.52732121927496 539.325 35.52732121927496 540 35.43038234167561 C 540.675 35.33344346407626 541.0125 35.0597600056222 541.6875 34.66561821177963 C 542.3625 34.271476417937066 542.7 33.45967337246279 543.375 33.45967337246279 C 544.05 33.45967337246279 544.3875 33.80799730479581 545.0625 33.80799730479581 C 545.7375 33.80799730479581 546.075 33.39476641843141 546.75 33.39476641843141 C 547.425 33.39476641843141 547.7625 34.046726277930865 548.4375 34.24417500381693 C 549.1125 34.44162372970299 549.45 34.44162372970299 550.125 34.44162372970299 C 550.8 34.44162372970299 551.1375 34.44162372970299 551.8125 34.401833505368614 C 552.4875 34.36204328103424 552.825 33.51886901901861 553.5 33.51886901901861 C 554.175 33.51886901901861 554.5125 33.917873632027955 555.1875 34.056695808192465 C 555.8625 34.19551798435698 556.2 34.12277658625794 556.875 34.21297989984118 C 557.55 34.30318321342442 557.8875 34.507712376108636 558.5625 34.507712376108636 C 559.2375 34.507712376108636 559.575 34.221214060539175 560.25 34.221214060539175 C 560.925 34.221214060539175 561.2625 34.24279364993898 561.9375 34.262901946867025 C 562.6125 34.283010243795076 562.95 34.262901946867025 563.625 34.3217555451794 C 564.3 34.380609143491775 564.6375 34.89462000852909 565.3125 35.1148512737752 C 565.9875 35.335082539021315 566.325 35.42291187140997 567 35.42291187140997 C 567.675 35.42291187140997 568.0125 35.38721433397161 568.6875 35.38721433397161 C 569.3625 35.38721433397161 569.7 35.47983076854394 570.375 35.47983076854394 C 571.05 35.47983076854394 571.3875 35.47983076854394 572.0625 35.44512164756375 C 572.7375 35.41041252658356 573.075 34.82746883945759 573.75 34.82746883945759 C 574.425 34.82746883945759 574.7625 34.839626454352135 575.4375 34.90374208481693 C 576.1125 34.96785771528174 576.45 35.006909217365866 577.125 35.14804699178158 C 577.8 35.28918476619728 578.1375 35.457162690223136 578.8125 35.60943095689548 C 579.4875 35.76169922356782 579.825 35.90938832514329 580.5 35.90938832514329 C 581.175 35.90938832514329 581.5125 35.893652728567865 582.1875 35.893652728567865 C 582.8625 35.893652728567865 583.2 35.92141854245282 583.875 35.956714336362786 C 584.55 35.99201013027275 584.8875 36.0701316981177 585.5625 36.0701316981177 C 586.2375 36.0701316981177 586.575 35.9374855424934 587.25 35.9374855424934 C 587.925 35.9374855424934 588.2625 35.97084399792118 588.9375 35.97084399792118 C 589.6125 35.97084399792118 589.95 35.75561231519368 590.625 35.59972245853938 C 591.3 35.44383260188508 591.6375 35.19139471464967 592.3125 35.19139471464967 C 592.9875 35.19139471464967 593.325 35.23329063231699 594 35.23329063231699 C 594.675 35.23329063231699 595.0125 34.99808338272779 595.6875 34.88755536555745 C 596.3625 34.777027348387115 596.7 34.78847925845756 597.375 34.680650546465316 C 598.05 34.572821834473075 598.3875 34.348411805596214 599.0625 34.348411805596214 C 599.7375 34.348411805596214 600.075 34.44610690936283 600.75 34.56090055031918 C 601.425 34.67569419127554 601.7625 34.82223253253964 602.4375 34.92238001037798 C 603.1125 35.02252748821631 603.45 34.92238001037798 604.125 35.06163793951087 C 604.8 35.200895868643755 605.1375 35.84849823091589 605.8125 36.204291184578885 C 606.4875 36.560084138241876 606.825 36.84060270782586 607.5 36.84060270782586 C 608.175 36.84060270782586 608.5125 36.456133756397556 609.1875 36.40674713654228 C 609.8625 36.357360516687 610.2 36.40674713654228 610.875 36.357360516687 C 611.55 36.307973896831726 611.8875 36.04851843015144 612.5625 36.04851843015144 C 613.2375 36.04851843015144 613.575 36.133233975049635 614.25 36.133233975049635 C 614.925 36.133233975049635 615.2625 36.133233975049635 615.9375 35.99361569406903 C 616.6125 35.85399741308842 616.95 35.59366579781188 617.625 35.35630320949083 C 618.3 35.118940621169784 618.6375 34.80680275246379 619.3125 34.80680275246379 C 619.9875 34.80680275246379 620.325 34.914913834801446 621 34.914913834801446 C 621.675 34.914913834801446 622.0125 34.7467458968216 622.6875 34.7467458968216 C 623.3625 34.7467458968216 623.7 34.88669539223537 624.375 34.88669539223537 C 625.05 34.88669539223537 625.3875 34.599721044884326 626.0625 34.599721044884326 C 626.7375 34.599721044884326 627.075 34.60340698508947 627.75 34.63575274271915 C 628.425 34.66809850034883 628.7625 34.72819601092542 629.4375 34.76144983303273 C 630.1125 34.79470365514003 630.45 34.772825980192856 631.125 34.802021853255674 C 631.8 34.831217726318485 632.1375 34.907429198346804 632.8125 34.907429198346804 C 633.4875 34.907429198346804 633.825 34.83864761903131 634.5 34.83864761903131 C 635.175 34.83864761903131 635.5125 34.87196164713116 636.1875 34.87196164713116 C 636.8625 34.87196164713116 637.2 34.87196164713116 637.875 34.742093058721856 C 638.55 34.612224470312555 638.8875 34.08810302352838 639.5625 33.86221256359964 C 640.2375 33.63632210367089 640.575 33.689713469178024 641.25 33.612640759078126 C 641.925 33.53556804897822 642.2625 33.51875401082187 642.9375 33.476849013100136 C 643.6125 33.43494401537839 643.95 33.40311577046943 644.625 33.40311577046943 C 645.3 33.40311577046943 645.6375 33.5076800796336 646.3125 33.59303806964762 C 646.9875 33.67839605966164 647.325 33.69640752809993 648 33.829905720539514 C 648.675 33.963403912979096 649.0125 34.26052903184552 649.6875 34.26052903184552 C 650.3625 34.26052903184552 650.7 33.97850308996374 651.375 33.97850308996374 C 652.05 33.97850308996374 652.3875 34.09093031416144 653.0625 34.09093031416144 C 653.7375 34.09093031416144 654.075 34.076077834731734 654.75 34.04899118963004 C 655.425 34.02190454452834 655.7625 34.03777091343741 656.4375 33.95549708865295 C 657.1125 33.87322326386848 657.45 33.812354132373706 658.125 33.6376220657077 C 658.8 33.46288999904171 659.1375 33.301677066551115 659.8125 33.081836755322946 C 660.4875 32.86199644409477 660.825 32.76665124956293 661.5 32.53842050956685 C 662.175 32.310189769570755 662.5125 32.20654162733523 663.1875 31.9406830553425 C 663.8625 31.674824483349774 664.2 31.55967175667182 664.875 31.209127649603193 C 665.55 30.858583542534568 665.8875 30.444302968943312 666.5625 30.18796251999938 C 667.2375 29.93162207105545 667.575 30.083564845883405 668.25 29.927425404883536 C 668.925 29.77128596388367 669.2625 29.40726531500004 669.9375 29.40726531500004 C 670.6125 29.40726531500004 670.95 29.612370771042038 671.625 29.612370771042038 C 672.3 29.612370771042038 672.6375 28.75028325364882 673.3125 28.148495684828116 C 673.9875 27.54670811600741 674.325 27.421336820934112 675 26.603432926938517 C 675.675 25.785529032942918 676.0125 25.45662835726741 676.6875 24.05897621485013 C 677.3625 22.661324072432848 677.7 19.7375474306461 678.375 19.615172214852116 C 679.05 19.492796999058132 679.3875 19.492796999058132 680.0625 19.492796999058132 C 680.7375 19.492796999058132 681.075 20.446715005069795 681.75 20.90154764393525 C 682.425 21.3563802828007 682.7625 21.766960193385394 683.4375 21.766960193385394 C 684.1125 21.766960193385394 684.45 21.250973660441854 685.125 19.825535258284695 C 685.8 18.400096856127536 686.1375 16.366077611434363 686.8125 14.639768182599603 C 687.4875 12.913458753764841 687.825 11.193988114110887 688.5 11.193988114110887 C 689.175 11.193988114110887 689.5125 11.747144926717686 690.1875 12.08660333323617 C 690.8625 12.426061739754655 691.2 12.891280146703306 691.875 12.891280146703306 C 692.55 12.891280146703306 692.8875 9.93687106118966 693.5625 8.903853454023622 C 694.2375 7.8708358468575845 694.575 7.726192110873114 695.25 7.726192110873114 C 695.925 7.726192110873114 696.2625 9.658339536296019 696.9375 9.658339536296019 C 697.6125 9.658339536296019 697.95 7.838399588987755 698.625 7.714309188719234 C 699.3 7.590218788450713 699.6375 7.714309188719234 700.3125 7.590218788450713 C 700.9875 7.466128388182192 701.325 5.688301724964042 702 5.688301724964042 C 702.675 5.688301724964042 703.0125 10.100181954816705 703.6875 10.100181954816705 C 704.3625 10.100181954816705 704.7 9.94858033522981 705.375 9.605585431259225 C 706.05 9.26259052728864 706.3875 8.385207434963778 707.0625 8.385207434963778 C 707.7375 8.385207434963778 708.075 8.971061845440222 708.75 10.742156649970003 C 709.425 12.513251454499784 709.7625 15.532385793440433 710.4375 17.240681457612688 C 711.1125 18.948977121784942 711.45 19.179588795797894 712.125 19.28363497083128 C 712.8 19.387681145864665 713.1375 19.28363497083128 713.8125 19.387681145864665 C 714.4875 19.49172732089805 714.825 20.088079895769166 715.5 20.088079895769166 C 716.175 20.088079895769166 716.5125 18.666013642712798 717.1875 18.666013642712798 C 717.8625 18.666013642712798 718.2 21.512604867919908 718.875 21.512604867919908 C 719.55 21.512604867919908 719.8875 20.692201784641792 720.5625 20.692201784641792 C 721.2375 20.692201784641792 721.575 20.82608404606003 722.25 21.06209403631858 C 722.925 21.298104026577136 723.2625 21.66964295399601 723.9375 21.872251735934572 C 724.6125 22.074860517873137 724.95 22.075137946011402 725.625 22.075137946011402 C 726.3 22.075137946011402 726.6375 18.879954886541686 727.3125 18.078354789089286 C 727.9875 17.276754691636885 728.325 17.995129160296667 729 17.276754691636885 C 729.675 16.558380222977103 730.0125 15.029455652617859 730.6875 14.486482445790365 C 731.3625 13.943509238962871 731.7 14.266612561878457 732.375 13.943509238962871 C 733.05 13.620405916047286 733.3875 12.911958263283793 734.0625 12.870965831212438 C 734.7375 12.829973399141082 735.075 12.829973399141082 735.75 12.829973399141082 C 736.425 12.829973399141082 736.7625 13.239994287269779 737.4375 13.422114783684638 C 738.1125 13.604235280099495 738.45 13.422114783684638 739.125 13.740575881215374 C 739.8 14.05903697874611 740.1375 15.742785257313113 740.8125 15.742785257313113 C 741.4875 15.742785257313113 741.825 15.742785257313113 742.5 15.493466458374815 C 743.175 15.244147659436518 743.5125 12.314765350906287 744.1875 10.74677882185971 C 744.8625 9.178792292813132 745.2 8.796762468827115 745.875 7.653533813141927 C 746.55 6.510305157456738 746.8875 5.0306355434337675 747.5625 5.0306355434337675 C 748.2375 5.0306355434337675 748.575 5.903067062893875 749.25 5.903067062893875 C 749.925 5.903067062893875 750.2625 5.903067062893875 750.9375 5.509392119289792 C 751.6125 5.11571717568571 751.95 3.6322336935572253 752.625 3.6322336935572253 C 753.3 3.6322336935572253 753.6375 5.14731809387357 754.3125 6.091644116835937 C 754.9875 7.035970139798304 755.325 7.758051747724272 756 8.353863808369063 C 756.675 8.949675869013854 757.0125 8.353863808369063 757.6875 9.070704420059894 C 758.3625 9.787545031750724 758.7 11.706864454790797 759.375 12.522563763495313 C 760.05 13.33826307219983 760.3875 13.33826307219983 761.0625 13.33826307219983 C 761.7375 13.33826307219983 762.075 12.607056373808334 762.75 12.607056373808334 C 763.425 12.607056373808334 763.7625 12.625873409800686 764.4375 13.17128721916064 C 765.1125 13.716701028520593 765.45 14.733567439061373 766.125 15.33412542060811 C 766.8 15.93468340215485 767.1375 15.727808851099468 767.8125 16.17407712689433 C 768.4875 16.62034540268919 768.825 16.942528460664985 769.5 17.56546679958241 C 770.175 18.18840513849983 770.5125 19.288768821481444 771.1875 19.288768821481444 C 771.8625 19.288768821481444 772.2 18.990671617642313 772.875 18.306692329123695 C 773.55 17.622713040605078 773.8875 15.868872378888355 774.5625 15.868872378888355 C 775.2375 15.868872378888355 775.575 16.01908133852159 776.25 16.579703954255326 C 776.925 17.14032656998906 777.2625 18.67198545755703 777.9375 18.67198545755703 C 778.6125 18.67198545755703 778.95 16.876051608393936 779.625 16.876051608393936 C 780.3 16.876051608393936 780.6375 18.168132594370345 781.3125 18.168132594370345 C 781.9875 18.168132594370345 782.325 17.89073408177464 783 17.477909437428202 C 783.675 17.065084793081766 784.0125 16.78530235212569 784.6875 16.104009372638163 C 785.3625 15.422716393150635 785.7 14.071444539990555 786.375 14.071444539990555 C 787.05 14.071444539990555 787.3875 14.631372514363441 788.0625 15.293161240161172 C 788.7375 15.954949965958903 789.075 17.3031306697973 789.75 17.380388168979213 C 790.425 17.457645668161124 790.7625 17.380388168979213 791.4375 17.457645668161124 C 792.1125 17.534903167343035 792.45 17.909650207394105 793.125 18.235179962991655 C 793.8 18.560709718589205 794.1375 18.235179962991655 794.8125 19.08529444614888 C 795.4875 19.935408929306103 795.825 22.80054279008156 796.5 23.05980672530722 C 797.175 23.319070660532876 797.5125 23.206553731339948 798.1875 23.319070660532876 C 798.8625 23.431587589725808 799.2 23.62239137127187 799.875 23.62239137127187 C 800.55 23.62239137127187 800.8875 23.05235436714243 801.5625 23.05235436714243 C 802.2375 23.05235436714243 802.575 23.05235436714243 803.25 23.26228827279809 C 803.925 23.47222217845375 804.2625 27.08908919581105 804.9375 27.747080649690567 C 805.6125 28.405072103570085 805.95 28.189975310530496 806.625 28.405072103570085 C 807.3 28.620168896609677 807.6375 28.767869458533237 808.3125 28.822564614888528 C 808.9875 28.877259771243818 810 28.877259771243818 810 28.877259771243818" class="highcharts-graph" data-z-index="1"></path>
                                                        </g>
                                                        <g class="highcharts-markers highcharts-series-2 highcharts-areaspline-series highcharts-color-primary highcharts-navigator-series" data-z-index="0.1" transform="translate(10,545) scale(1 1)" clip-path="none"></g>
                                                    </g>
                                                    <g class="highcharts-exporting-group" data-z-index="3">
                                                        <g class="highcharts-no-tooltip highcharts-button highcharts-contextbutton" transform="translate(796,0)">
                                                            <title>Chart context menu</title>
                                                            <rect class="highcharts-button-box" x="0.5" y="0.5" width="24" height="22" rx="2" ry="2"></rect>
                                                            <path d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" class="highcharts-button-symbol" data-z-index="1"></path><text x="0" data-z-index="1" y="16"></text>
                                                        </g>
                                                        <g class="highcharts-no-tooltip highcharts-button highcharts-button-linear highcharts-button-active" transform="translate(748,0)">
                                                            <title></title>
                                                            <rect class="highcharts-button-box" x="0.5" y="0.5" width="45" height="27" rx="2" ry="2"></rect><text x="5" data-z-index="1" y="18">Linear</text>
                                                        </g>
                                                        <g class="highcharts-no-tooltip highcharts-button highcharts-button-log" transform="translate(667,0)">
                                                            <title></title>
                                                            <rect class="highcharts-button-box" x="0.5" y="0.5" width="78" height="27" rx="2" ry="2"></rect><text x="5" data-z-index="1" y="18">Logarithmic</text>
                                                        </g>
                                                    </g><text x="415" text-anchor="middle" class="highcharts-title" data-z-index="4" y="25"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" y="598"></text>
                                                    <g class="highcharts-data-labels highcharts-series-2 highcharts-areaspline-series highcharts-color-primary highcharts-navigator-series" data-z-index="6" transform="translate(10,545) scale(1 1)" opacity="1"></g>
                                                    <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="24.228790283203125" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">20:00</text><text x="81.467929468244" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">22:00</text><text x="148.3764211851" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">6. Jul</text><text x="216.73453606232" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">02:00</text><text x="283.88080050775" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">04:00</text><text x="351.32862955073" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">06:00</text><text x="418.7615967724" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">08:00</text><text x="486.17045758392" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">10:00</text><text x="554.07590454101" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">12:00</text><text x="619.06925881826" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">14:00</text><text x="686.02979526773" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">16:00</text><text x="753.44229257266" text-anchor="middle" transform="translate(0,0)" y="515" opacity="1">18:00</text></g>
                                                    <g class="highcharts-axis-labels highcharts-xaxis-labels highcharts-navigator-xaxis" data-z-index="7"><text x="73.388392857143" text-anchor="start" transform="translate(0,0)" y="581" opacity="1">2014</text><text x="249.37053571429" text-anchor="start" transform="translate(0,0)" y="581" opacity="1">2016</text><text x="425.59375" text-anchor="start" transform="translate(0,0)" y="581" opacity="1">2018</text><text x="601.57589285714" text-anchor="start" transform="translate(0,0)" y="581" opacity="1">2020</text><text x="777.79910714286" text-anchor="start" transform="translate(0,0)" y="581" opacity="1">2022</text></g>
                                                    <g class="highcharts-axis-labels highcharts-yaxis-labels yaxis-primary" data-z-index="7"><text x="10" text-anchor="start" transform="translate(0,0)" y="412" opacity="1">$19,250.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="357" opacity="1">$19,500.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="302" opacity="1">$19,750.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="247" opacity="1">$20,000.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="192" opacity="1">$20,250.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="137" opacity="1">$20,500.00</text><text x="10" text-anchor="start" transform="translate(0,0)" y="82" opacity="1">$20,750.00</text></g>
                                                    <g class="highcharts-axis-labels highcharts-yaxis-labels highcharts-navigator-yaxis" data-z-index="7"></g>
                                                    <g class="highcharts-range-selector-group" data-z-index="7" transform="translate(0,40)">
                                                        <g class="highcharts-input-group" transform="translate(663,-10)">
                                                            <g class="highcharts-label highcharts-range-label" transform="translate(0,0)">
                                                                <rect class="highcharts-label-box" x="0.5" y="0.5" width="0" height="0"></rect><text x="0" data-z-index="1" y="13"></text>
                                                            </g>
                                                            <g class="highcharts-label highcharts-range-input" transform="translate(0,0)">
                                                                <rect class="highcharts-label-box" x="0.5" y="0.5" width="65" height="21"></rect><text x="2" data-z-index="1" y="15.5">Jul 5, 2022</text>
                                                            </g>
                                                            <g class="highcharts-label highcharts-range-label" transform="translate(70,0)">
                                                                <rect class="highcharts-label-box" x="0.5" y="0.5" width="15" height="21"></rect><text x="2" data-z-index="1" y="15.5">→</text>
                                                            </g>
                                                            <g class="highcharts-label highcharts-range-input" transform="translate(90,0)">
                                                                <rect class="highcharts-label-box" x="0.5" y="0.5" width="65" height="21"></rect><text x="2" data-z-index="1" y="15.5">Jul 6, 2022</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g class="highcharts-navigator" data-z-index="8" visibility="visible">
                                                        <rect class="highcharts-navigator-mask-outside" x="10" y="545" width="810" height="40"></rect>
                                                        <rect class="highcharts-navigator-mask-inside" x="820" y="545" width="0" height="40"></rect>
                                                        <rect class="highcharts-navigator-mask-outside" x="820" y="545" width="0" height="40"></rect>
                                                        <path class="highcharts-navigator-outline" d="M 10 545.5 L 819.5 545.5 L 819.5 585.5 L 819.5 585.5 L 819.5 545.5 L 820 545.5 M 819 545.5 L 820 545.5"></path>
                                                        <path d="M -4.5 0.5 L 3.5 0.5 L 3.5 15.5 L -4.5 15.5 L -4.5 0.5 M -1.5 4 L -1.5 12 M 0.5 4 L 0.5 12" data-z-index="6" class="highcharts-navigator-handle highcharts-navigator-handle-right" transform="translate(820,557)"></path>
                                                        <path d="M -4.5 0.5 L 3.5 0.5 L 3.5 15.5 L -4.5 15.5 L -4.5 0.5 M -1.5 4 L -1.5 12 M 0.5 4 L 0.5 12" data-z-index="7" class="highcharts-navigator-handle highcharts-navigator-handle-left" transform="translate(820,557)"></path>
                                                    </g>
                                                </svg><span class="highcharts-subtitle" data-z-index="4" style="position: absolute; white-space: nowrap; margin-left: 0px; margin-top: 0px; left: 10px; top: 32px;"><span class=""></span></span></div>
                                        </div>
                                        <div id="tradingview_{{ $Response['symbol'] }}_22185aba" class="tradingview-widget-container" data-target="price-chart.tvChart" data-coin-api-symbol="{{ $Response['id'] }}" style="height: 600px; display: none;">
                                        </div>
                                        <div class="row no-gutters tw-justify-center w-100 justify-content-md-between">
                                            <div class="btn-toolbar mt-3 tw-flex no-gutters tw-justify-center justify-content-md-between" role="toolbar">
                                            </div>
                                        </div>
                                        <div class="tw-text-center" data-target="price-chart.checkboxes">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input tw-h-5 tw-w-5" type="checkbox" id="main{{ $Response['id'] }}56" value="main" data-action="change->price-chart#seriesChartToggle" data-target="price-chart.mainCheckbox" checked="">
                                                <label class="form-check-label" for="main{{ $Response['id'] }}56">Main</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input tw-h-5 tw-w-5 ab-{{ $Response['symbol'] }}-chart-checkbox" type="checkbox" id="{{ $Response['symbol'] }}{{ $Response['id'] }}32" value="{{ $Response['symbol'] }}" data-action="change->price-chart#seriesChartToggle" data-target="price-chart.{{ $Response['symbol'] }}Checkbox">
                                                <label class="form-check-label" for="{{ $Response['symbol'] }}{{ $Response['id'] }}32">{{ $Response['symbol'] }}</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input tw-h-5 tw-w-5" type="checkbox" id="eth{{ $Response['id'] }}91" value="eth" data-action="change->price-chart#seriesChartToggle" data-target="price-chart.ethCheckbox">
                                                <label class="form-check-label" for="eth{{ $Response['id'] }}91">ETH</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div class="tw-flex tw-flex-row text-center">
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0 tw-rounded-md tw-rounded-b-none tw-rounded-r-none">1h</div>
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0">24h</div>
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0">7d</div>
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0">14d</div>
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0">30d</div>
                                        <div class="tw-bg-gray-100 dark:tw-bg-opacity-5 tw-text-sm tw-text-gray-700 dark:tw-text-gray-400 tw-flex-1 border py-2 px-0 tw-rounded-md tw-rounded-b-none tw-rounded-l-none">1y</div>
                                    </div>
                                    <div class="tw-flex tw-flex-row text-center">
                                        <div class="tw-flex-1 py-2 border px-0 tw-rounded-md tw-rounded-t-none tw-rounded-r-none"><span class="text-danger" data-json="{&quot;aed&quot;:-0.11078486698108395,&quot;ars&quot;:-0.09607870464452074,&quot;aud&quot;:-0.20121484897864944,&quot;bch&quot;:0.34925428540777026,&quot;bdt&quot;:-0.11078486698106037,&quot;bhd&quot;:-0.10813497640682118,&quot;bmd&quot;:-0.110784866980976,&quot;bnb&quot;:-0.07737436265792529,&quot;brl&quot;:0.14339586614943564,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:-0.08057843929109273,&quot;chf&quot;:-0.5183687197982825,&quot;clp&quot;:1.423547979216781,&quot;cny&quot;:-0.14947854388019308,&quot;czk&quot;:-0.2831721707907011,&quot;dkk&quot;:-0.27714817822545273,&quot;dot&quot;:-0.015701986430992115,&quot;eos&quot;:0.08971817536244724,&quot;eth&quot;:0.039639747767007225,&quot;eur&quot;:-0.2769045630777459,&quot;gbp&quot;:-0.23305497842166112,&quot;hkd&quot;:-0.10938457021423889,&quot;huf&quot;:-1.3309212628183653,&quot;idr&quot;:-0.12644015929689653,&quot;ils&quot;:-0.38426598919777744,&quot;inr&quot;:-0.11432621249969155,&quot;jpy&quot;:-0.14241912474544854,&quot;krw&quot;:-0.10762391699791389,&quot;kwd&quot;:-0.174806623972825,&quot;lkr&quot;:-0.1107848669811472,&quot;ltc&quot;:-0.08698089339791636,&quot;mmk&quot;:-0.11078486698133753,&quot;mxn&quot;:-0.12228355738826907,&quot;myr&quot;:-0.1107848669811464,&quot;ngn&quot;:-1.1828725417485835,&quot;nok&quot;:-0.29503726231962174,&quot;nzd&quot;:-0.16295494845815492,&quot;php&quot;:-0.003392136638167197,&quot;pkr&quot;:-0.11078486698116922,&quot;pln&quot;:-0.24175579772987418,&quot;rub&quot;:-0.1107848669810108,&quot;sar&quot;:-0.13611257005166638,&quot;sek&quot;:-0.4043760171559567,&quot;sgd&quot;:-0.1644790089239884,&quot;thb&quot;:0.045226026259030876,&quot;try&quot;:-0.18816063235815825,&quot;twd&quot;:-0.13189244778115694,&quot;uah&quot;:-0.110784866981124,&quot;usd&quot;:-0.110784866980976,&quot;vef&quot;:-0.11078486698126837,&quot;vnd&quot;:-0.11078486698109902,&quot;xag&quot;:0.6743512370405973,&quot;xau&quot;:0.6947168327809273,&quot;xdr&quot;:-0.1107848669809254,&quot;xlm&quot;:0.051879978147163615,&quot;xrp&quot;:-0.4121578523456213,&quot;yfi&quot;:0.1793918114813476,&quot;zar&quot;:-0.09690027318657819,&quot;bits&quot;:0.01038662582112806,&quot;link&quot;:0.24383748878218917,&quot;sats&quot;:0.010386625821122935}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-0.1%</span></div>
                                        <div class="tw-flex-1 py-2 border px-0"><span class="text-green" data-json="{&quot;aed&quot;:3.8012021275042462,&quot;ars&quot;:3.9784180148392134,&quot;aud&quot;:3.7244967615221283,&quot;bch&quot;:0.8984022881634675,&quot;bdt&quot;:3.811643977662892,&quot;bhd&quot;:3.7967385586856617,&quot;bmd&quot;:3.798941340656513,&quot;bnb&quot;:-1.766931966816018,&quot;brl&quot;:4.622570487164629,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:3.8863206117902616,&quot;chf&quot;:3.891567433550722,&quot;clp&quot;:6.478536533911196,&quot;cny&quot;:3.6059175279307887,&quot;czk&quot;:4.530877399156501,&quot;dkk&quot;:4.453930521895737,&quot;dot&quot;:0.6154375768251047,&quot;eos&quot;:-0.6476869298647515,&quot;eth&quot;:-0.8587412330941556,&quot;eur&quot;:4.431845505126081,&quot;gbp&quot;:3.767920390631452,&quot;hkd&quot;:3.7945101350383945,&quot;huf&quot;:5.505320848240049,&quot;idr&quot;:3.5963243160087996,&quot;ils&quot;:2.834480819620589,&quot;inr&quot;:3.482536119446581,&quot;jpy&quot;:3.7232894774060368,&quot;krw&quot;:3.2399267204744895,&quot;kwd&quot;:3.7827237063240267,&quot;lkr&quot;:4.150670118157927,&quot;ltc&quot;:0.6381598934437788,&quot;mmk&quot;:3.8395242864968155,&quot;mxn&quot;:4.426843257879066,&quot;myr&quot;:3.916374241822641,&quot;ngn&quot;:3.806439458258696,&quot;nok&quot;:4.1831341156867605,&quot;nzd&quot;:3.7067954478423397,&quot;php&quot;:4.596634791446529,&quot;pkr&quot;:5.225830153353309,&quot;pln&quot;:4.9136028860936936,&quot;rub&quot;:4.627071531759481,&quot;sar&quot;:3.783513222480851,&quot;sek&quot;:3.892504460880078,&quot;sgd&quot;:3.717998065027698,&quot;thb&quot;:4.548409211149134,&quot;try&quot;:5.24196197072059,&quot;twd&quot;:3.612593027224912,&quot;uah&quot;:3.8260384462167063,&quot;usd&quot;:3.798941340656513,&quot;vef&quot;:3.798941340656491,&quot;vnd&quot;:3.8573235561052654,&quot;xag&quot;:4.456560093747297,&quot;xau&quot;:5.4735615707996885,&quot;xdr&quot;:3.878864510404683,&quot;xlm&quot;:1.7520378698821517,&quot;xrp&quot;:1.13148026058244,&quot;yfi&quot;:1.9074834675077863,&quot;zar&quot;:5.157826636763919,&quot;bits&quot;:-0.011532272503992415,&quot;link&quot;:1.4793590560346175,&quot;sats&quot;:-0.01153227250399521}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="true" data-target="percent-change.percent" data-show-solid-arrow="false">3.8%</span></div>
                                        <div class="tw-flex-1 py-2 border px-0"><span class="text-danger" data-json="{&quot;aed&quot;:-0.714144009778019,&quot;ars&quot;:0.5020511189314398,&quot;aud&quot;:1.1634080133055915,&quot;bch&quot;:-2.619522855532066,&quot;bdt&quot;:-0.7115892543068552,&quot;bhd&quot;:-0.7107199326970546,&quot;bmd&quot;:-0.7141440097777719,&quot;bnb&quot;:-4.80768371514206,&quot;brl&quot;:2.4614918833324078,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:0.7741589293892791,&quot;chf&quot;:0.6705634008120898,&quot;clp&quot;:6.601701784887496,&quot;cny&quot;:-0.6978635152284675,&quot;czk&quot;:2.800777122502741,&quot;dkk&quot;:2.637160907506904,&quot;dot&quot;:4.8993887969703875,&quot;eos&quot;:-4.307482014451564,&quot;eth&quot;:-0.05886129680442709,&quot;eur&quot;:2.613759686648881,&quot;gbp&quot;:1.607555808698341,&quot;hkd&quot;:-0.7039320687571197,&quot;huf&quot;:6.403587530940498,&quot;idr&quot;:0.31565841982358556,&quot;ils&quot;:0.9884955519284863,&quot;inr&quot;:-0.7661742089480226,&quot;jpy&quot;:-0.9644052467498125,&quot;krw&quot;:0.35170991062147955,&quot;kwd&quot;:-0.6235576769640953,&quot;lkr&quot;:-0.8289209488945687,&quot;ltc&quot;:5.175178233560248,&quot;mmk&quot;:-0.7114696161070725,&quot;mxn&quot;:2.1318488092197634,&quot;myr&quot;:-0.09318402803333949,&quot;ngn&quot;:-0.6588676406968865,&quot;nok&quot;:2.509602626391736,&quot;nzd&quot;:0.8638972716008297,&quot;php&quot;:1.3145614583570504,&quot;pkr&quot;:0.2536314022192224,&quot;pln&quot;:4.53657457309603,&quot;rub&quot;:10.830940675584763,&quot;sar&quot;:-0.6995939725830856,&quot;sek&quot;:3.1175535034763437,&quot;sgd&quot;:0.5841789424688104,&quot;thb&quot;:2.25605025893473,&quot;try&quot;:2.8006953985407606,&quot;twd&quot;:-0.4325133067486727,&quot;uah&quot;:-0.7114525910388737,&quot;usd&quot;:-0.7141440097777719,&quot;vef&quot;:-0.7141440097781241,&quot;vnd&quot;:-0.21510750782631768,&quot;xag&quot;:8.680689873760016,&quot;xau&quot;:3.8325003248417353,&quot;xdr&quot;:-0.36142303956798627,&quot;xlm&quot;:4.865148265684197,&quot;xrp&quot;:3.6510286145143143,&quot;yfi&quot;:-9.741442043044858,&quot;zar&quot;:3.791186744363691,&quot;bits&quot;:-0.07764924304438045,&quot;link&quot;:0.6395334554219881,&quot;sats&quot;:-0.07764924304437906}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-0.7%</span></div>
                                        <div class="tw-flex-1 py-2 border px-0"><span class="text-danger" data-json="{&quot;aed&quot;:-2.720786848633863,&quot;ars&quot;:-0.569915507176017,&quot;aud&quot;:-0.029438240120638906,&quot;bch&quot;:9.098362124719017,&quot;bdt&quot;:-2.1774246792678227,&quot;bhd&quot;:-2.7342040305293316,&quot;bmd&quot;:-2.720786848633619,&quot;bnb&quot;:-9.810878501929626,&quot;brl&quot;:3.177664547876343,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:-1.6944817979539932,&quot;chf&quot;:-2.29743093549895,&quot;clp&quot;:7.731718146076785,&quot;cny&quot;:-2.4313995488788596,&quot;czk&quot;:0.9998269163650195,&quot;dkk&quot;:0.6943223715462249,&quot;dot&quot;:9.025118249241807,&quot;eos&quot;:-4.5778331941401555,&quot;eth&quot;:-3.62501705379143,&quot;eur&quot;:0.6525581095698192,&quot;gbp&quot;:0.2155518077827203,&quot;hkd&quot;:-2.758769356587562,&quot;huf&quot;:5.079838602027677,&quot;idr&quot;:-1.5882224775571945,&quot;ils&quot;:-1.4575303419962649,&quot;inr&quot;:-1.6041839831356666,&quot;jpy&quot;:-3.1503260516171054,&quot;krw&quot;:-1.6429886902838358,&quot;kwd&quot;:-2.6922759420832185,&quot;lkr&quot;:-2.8190502317800292,&quot;ltc&quot;:4.482584837553537,&quot;mmk&quot;:-2.703855385717918,&quot;mxn&quot;:0.056760510565077145,&quot;myr&quot;:-2.1346342455162652,&quot;ngn&quot;:-3.330229086878319,&quot;nok&quot;:0.17501321683743096,&quot;nzd&quot;:0.12189554972067043,&quot;php&quot;:0.23742550180366429,&quot;pkr&quot;:-4.618937749656463,&quot;pln&quot;:3.863133041693551,&quot;rub&quot;:8.338798048141646,&quot;sar&quot;:-2.6812486606922006,&quot;sek&quot;:1.5054661194644274,&quot;sgd&quot;:-1.3159175496692448,&quot;thb&quot;:-0.23878826224929067,&quot;try&quot;:-3.4476626269700454,&quot;twd&quot;:-2.508158256682023,&quot;uah&quot;:-2.716612319100743,&quot;usd&quot;:-2.720786848633619,&quot;vef&quot;:-2.720786848633993,&quot;vnd&quot;:-2.1015511555502524,&quot;xag&quot;:10.576899543675344,&quot;xau&quot;:2.4025458666257777,&quot;xdr&quot;:-2.3619615631158792,&quot;xlm&quot;:2.1637689299700713,&quot;xrp&quot;:-0.9718741036757773,&quot;yfi&quot;:-19.58853344709659,&quot;zar&quot;:2.665465375492963,&quot;bits&quot;:-0.058517506183166104,&quot;link&quot;:6.645998755935878,&quot;sats&quot;:-0.058517506183168436}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-2.7%</span></div>
                                        <div class="tw-flex-1 py-2 border px-0"><span class="text-danger" data-json="{&quot;aed&quot;:-32.688370395136246,&quot;ars&quot;:-29.460189080904005,&quot;aud&quot;:-28.41656568516639,&quot;bch&quot;:14.903975687174723,&quot;bdt&quot;:-29.47613089326577,&quot;bhd&quot;:-32.797512735496696,&quot;bmd&quot;:-32.6898364402667,&quot;bnb&quot;:-15.085504494151166,&quot;brl&quot;:-23.387759259147554,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:-30.12476116505723,&quot;chf&quot;:-32.15107540123898,&quot;clp&quot;:-18.8838777376995,&quot;cny&quot;:-32.193623202006705,&quot;czk&quot;:-28.797530959361705,&quot;dkk&quot;:-29.070404739258095,&quot;dot&quot;:-8.996073551320618,&quot;eos&quot;:-12.691880787653709,&quot;eth&quot;:7.049837562243096,&quot;eur&quot;:-29.09683067084991,&quot;gbp&quot;:-29.39882956763946,&quot;hkd&quot;:-32.6809999949761,&quot;huf&quot;:-25.739021279273132,&quot;idr&quot;:-30.038274953462075,&quot;ils&quot;:-29.484184940347262,&quot;inr&quot;:-31.53105392235855,&quot;jpy&quot;:-30.137448379057403,&quot;krw&quot;:-29.74595074028697,&quot;kwd&quot;:-32.48520619306085,&quot;lkr&quot;:-32.98044193021001,&quot;ltc&quot;:-14.591916142701681,&quot;mmk&quot;:-32.80795908736883,&quot;mxn&quot;:-28.637713639638392,&quot;myr&quot;:-32.17631093827384,&quot;ngn&quot;:-32.65578572156467,&quot;nok&quot;:-27.6552736638349,&quot;nzd&quot;:-28.627989401147218,&quot;php&quot;:-28.964375497915135,&quot;pkr&quot;:-29.37187243864676,&quot;pln&quot;:-26.05958941723372,&quot;rub&quot;:-36.148460217074785,&quot;sar&quot;:-32.64113351992719,&quot;sek&quot;:-27.314513230257763,&quot;sgd&quot;:-31.190842719715135,&quot;thb&quot;:-29.016760385979218,&quot;try&quot;:-29.80686783324361,&quot;twd&quot;:-31.711437719596695,&quot;uah&quot;:-32.4794568188228,&quot;usd&quot;:-32.6898364402667,&quot;vef&quot;:-32.68983644026677,&quot;vnd&quot;:-32.146951812421634,&quot;xag&quot;:-22.3951352327113,&quot;xau&quot;:-28.320827323859532,&quot;xdr&quot;:-32.175870078196425,&quot;xlm&quot;:-10.825664349746082,&quot;xrp&quot;:-17.588114048693043,&quot;yfi&quot;:-18.97464558935849,&quot;zar&quot;:-27.24866824459183,&quot;bits&quot;:0.00539794127611865,&quot;link&quot;:-17.525324723151638,&quot;sats&quot;:0.00539794127612098}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-32.7%</span></div>
                                        <div class="tw-flex-1 py-2 border px-0 tw-rounded-md tw-rounded-t-none tw-rounded-l-none"><span class="text-danger" data-json="{&quot;aed&quot;:-40.64764199977044,&quot;ars&quot;:-21.753038166720877,&quot;aud&quot;:-33.92170191997598,&quot;bch&quot;:185.94005655297886,&quot;bdt&quot;:-34.57664427691054,&quot;bhd&quot;:-40.647443166542864,&quot;bmd&quot;:-40.646026134207055,&quot;bnb&quot;:-23.723282066775077,&quot;brl&quot;:-36.62939488241473,&quot;{{ $Response['symbol'] }}&quot;:0,&quot;cad&quot;:-37.131319422477965,&quot;chf&quot;:-37.556291750266595,&quot;clp&quot;:-21.145069784628582,&quot;cny&quot;:-38.39079918079928,&quot;czk&quot;:-32.99181302255503,&quot;dkk&quot;:-30.783581401130323,&quot;dot&quot;:31.802801481402543,&quot;eos&quot;:132.38538799950584,&quot;eth&quot;:15.945438754878039,&quot;eur&quot;:-30.833209333646156,&quot;gbp&quot;:-30.944590640425712,&quot;hkd&quot;:-40.04057762413611,&quot;huf&quot;:-19.029766125745187,&quot;idr&quot;:-38.47023653906477,&quot;ils&quot;:-36.45229565631304,&quot;inr&quot;:-36.88122136354718,&quot;jpy&quot;:-27.367039675860678,&quot;krw&quot;:-31.414658179796845,&quot;kwd&quot;:-39.46476428282604,&quot;lkr&quot;:7.2781345837720295,&quot;ltc&quot;:65.24225520687288,&quot;mmk&quot;:-33.21660079771193,&quot;mxn&quot;:-38.00786248887496,&quot;myr&quot;:-36.8114395165544,&quot;ngn&quot;:-40.08816520513379,&quot;nok&quot;:-29.711971573256328,&quot;nzd&quot;:-31.779297365645036,&quot;php&quot;:-32.82304886142036,&quot;pkr&quot;:-21.9591436761073,&quot;pln&quot;:-26.463300028867142,&quot;rub&quot;:-51.514658047217935,&quot;sar&quot;:-40.59866159276731,&quot;sek&quot;:-26.79598569353942,&quot;sgd&quot;:-37.950730663233486,&quot;thb&quot;:-33.00026355772972,&quot;try&quot;:17.946340792607714,&quot;twd&quot;:-36.778446458936614,&quot;uah&quot;:-35.68732010550883,&quot;usd&quot;:-40.646026134207055,&quot;vef&quot;:-40.64602613420729,&quot;vnd&quot;:-39.72248570189813,&quot;xag&quot;:-17.428702880127393,&quot;xau&quot;:-38.83130375320693,&quot;xdr&quot;:-37.90886634416809,&quot;xlm&quot;:40.987718311997554,&quot;xrp&quot;:21.02195083781108,&quot;yfi&quot;:214.47653668770718,&quot;zar&quot;:-30.016023886660065,&quot;bits&quot;:0.1389443840409655,&quot;link&quot;:75.85839733995941,&quot;sats&quot;:0.13894438404096784}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-40.6%</span></div>
                                    </div>
                                </div>
                                <div class="tailwind-reset tw-h-auto" data-controller="sentiment-vote" data-target="sentiment-vote.container" data-url="/en/coins/1/sentiment_votes">
                                    <div data-target="sentiment-vote.votePanel" data-coin-api-symbol="{{ $Response['id'] }}" class="sentiment-dashboard tw-rounded-xl tw-bg-gray-100 dark:tw-bg-opacity-5 sentiment tw-mb-3 tw-flex tw-flex-wrap tw-flex-row tw-p-4 tw-items-center tw-justify-between">
                                        <div>
                                            <div class="tw-font-bold tw-text-sm dark:tw-text-white">How do you feel about {{ $Response['id'] }} today?</div>
                                            <div class="tw-text-gray-500 tw-text-sm dark:tw-text-gray-400">Vote to see community's results!</div>
                                        </div>
                                        <div class="tw-flex tw-items-center tw-mt-2 md:tw-mt-0">
                                            <a class="btn tw-border tw-rounded-lg tw-border-gray-300 hover:tw-bg-gray-100 hover:tw-bg-white hover:tw-bg-opacity-5 dark:tw-border-opacity-10 dark:tw-text-white cursor-pointer text-sm tw-flex tw-items-center mr-2" data-action="click->sentiment-vote#votedFeedback" data-sentiment="positive" data-text="Good" data-image-path="https://static.coingecko.com/s/sentiment_positive-16103f1f96dd5ab7bb2d0bb10e1644de2089bd1e73bfd7beb4fb911ce206492c.svg" data-target="sentiment-vote.positiveVote" data-remote="true" rel="nofollow" data-method="post" href="/en/sentiment_votes?coin_id=1&amp;sentiment=positive">
                                                <img width="22" height="22" src="https://static.coingecko.com/s/sentiment_positive-16103f1f96dd5ab7bb2d0bb10e1644de2089bd1e73bfd7beb4fb911ce206492c.svg">
                                                <div class="ml-2 font-weight-bold">Good</div>
                                            </a> <a class="btn tw-border tw-rounded-lg tw-border-gray-300 hover:tw-bg-gray-100 hover:tw-bg-white hover:tw-bg-opacity-5 dark:tw-border-opacity-10 dark:tw-text-white cursor-pointer text-sm tw-flex tw-items-center" data-action="click->sentiment-vote#votedFeedback" data-sentiment="negative" data-text="Bad" data-image-path="https://static.coingecko.com/s/sentiment_negative-465a158c43161a2eeb80cc6f40365c80b0d6d7f2f23ad2b74ad691f6c3dce1d8.svg" data-target="sentiment-vote.negativeVote" data-remote="true" rel="nofollow" data-method="post" href="/en/sentiment_votes?coin_id=1&amp;sentiment=negative">
                                                <img width="22" height="22" src="https://static.coingecko.com/s/sentiment_negative-465a158c43161a2eeb80cc6f40365c80b0d6d7f2f23ad2b74ad691f6c3dce1d8.svg">
                                                <div class="ml-2 font-weight-bold">Bad</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div data-target="sentiment-vote.voteResultPanel" class="tw-hidden sentiment-dashboard tw-rounded-xl tw-bg-gray-50 sentiment tw-mb-3 tw-flex tw-flex-row tw-p-4 tw-items-center tw-divide-x tw-divide-gray-200">
                                        <div class="tw-mr-2 tw-flex-initial tw-flex tw-items-center">
                                            <div class="tw-mr-3">
                                                <img width="32" height="32" data-target="sentiment-vote.voteResultImage" src="https://static.coingecko.com/s/sentiment_negative-465a158c43161a2eeb80cc6f40365c80b0d6d7f2f23ad2b74ad691f6c3dce1d8.svg">
                                            </div>
                                            <div>
                                                <div>You voted</div>
                                                <div data-target="sentiment-vote.voteResult" class="font-weight-bold"></div>
                                            </div>
                                        </div>
                                        <div class="tw-pl-3 tw-flex-grow">
                                            <div class="tw-flex tw-justify-between tw-mb-1">
                                                <span>Good</span>
                                                <span>Bad</span>
                                            </div>
                                            <div class="progress tw-h-2">
                                                <div data-target="sentiment-vote.positiveBar" class="progress-bar tw-bg-green-500" role="progressbar" style="width: 69%">
                                                </div>
                                                <div data-target="sentiment-vote.negativeBar" class="progress-bar tw-bg-red-500" role="progressbar" style="width: 31%">
                                                </div>
                                            </div>
                                            <div class="tw-flex tw-justify-between tw-mt-1 tw-font-bold">
                                                <span data-target="sentiment-vote.positiveLabel">69%</span>
                                                <span data-target="sentiment-vote.negativeLabel">31%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="bsa-zone_1553019946172-0_123456" data-target="ads.banner" class="" data-google-query-id="CKSV6_3I5PgCFVKH_QcdlCMMLg" style="display: none;">
                                    <div id="google_ads_iframe_/22743369056/CoinGecko_S2S_Textlink_0__container__" style="border: 0pt none; margin: auto; text-align: center;"></div>
                                </div>
                            </div>
                            <div class="tw-bg-gray-100 dark:tw-bg-white dark:tw-bg-opacity-5 col-lg-4 tw-rounded-xl tw-flex tw-pt-2 flex-column flex-sm-column order-3 order-sm-3 order-md-3 order-lg-2">
                                <div id="conversion-calculator" data-controller="converter" class="tw-rounded-xl tw-bg-gray-100 dark:tw-bg-white dark:tw-bg-opacity-5 w-100 mt-0 mt-md-3 lg-tw-pr-5">

                                    <div class="tw-hidden" data-target="price.price converter.price" data-coin-id="1" data-price-{{ $Response['symbol'] }}="1.0" data-price-previous="20124.743">{{$Response["market_data"]["current_price"]["usd"] > 1 ? (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($Response["market_data"]["current_price"]["usd"] , 'USD') : sprintf("$%.6f", number_format($Response["market_data"]["current_price"]["usd"] ,6,'.',''))}}</div>
                                    <div class="converter-field tw-flex flex-column tw-items-center tw-justify-center tw-py-4 lg:tw-py-1">
                                        <div class="input-group calc tw-flex flex-nowrap">
                                            <span class="calc-symbol-box center tw-h-12 tw-rounded-lg tw-rounded-r-none tw-font-normal" data-target="converter.fromSymbol">{{ $Response['symbol'] }}</span>
                                            <input type="number" name="from_amount" id="from_amount" value="" class="form-control tw-h-12 tw-border-none tw-rounded-r-lg" data-target="converter.fromInput" data-action="keyup->converter#calculateTo change->converter#calculateTo">
                                        </div>
                                        <span class="tw-hidden lg:tw-inline-block">
                                            <i data-action="click->converter#changeDirection" class="far fa-exchange tw-text-xl lg:tw-ml-3 lg:tw-mr-3 lg:tw-mb-3 currency-swap"></i>
                                        </span>
                                        <div class="input-group calc tw-flex flex-nowrap">
                                            <span class="calc-symbol-box center tw-hidden" data-target="converter.toSymbol">usd</span>
                                            <div class="tw-h-12">
                                                <div class="tw-h-12">
                                                    <div id="currency-selector" class="tw-justify-center d-inline" data-controller="currency-dropdown">
                                                        <span class="text-black tw-cursor-pointer calc-symbol-box tw-border-none tw-h-12 tw-rounded-lg tw-rounded-r-none tw-font-normal btn tw-border-gray-300 dropdown-toggle center tw-bg-white dark:tw-bg-transparent hover:tw-bg-gray-50 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-border-opacity-0 dark:tw-text-white dark:hover:tw-bg-white dark:hover:tw-bg-opacity-10 dark:tw-border-white dark:tw-border-opacity-10" data-toggle="dropdown" data-flip="false">
                                                            <span data-target="currency-dropdown.button converter.toButton" class="tw-leading-4 tw-text-sm tw-font-medium tw-text-gray-700 dark:tw-text-white">USD</span>

                                                            <div class="dropdown-menu dropdown-popup dropdown-menu-content mt-2 tw-border tw-border-gray-300" style="z-index: 10000001;">
                                                                <div data-target="currency-dropdown.currencyList searchable.itemList" data-controller="searchable">
                                                                    <div class="d-lg-none ml-1 row mb-3 mr-0 mt-2">
                                                                        <span class="col-2">
                                                                            <i class="far mr-1 dropdown-close-button text-black fa-fa fa-long-arrow-left fa-lg"></i>
                                                                        </span>
                                                                        <span class="dropdown-menu-secondary-title center col-8">Currencies</span>
                                                                    </div>
                                                                    <div class="col-12 col-lg-5 mt-2">
                                                                        <input type="text" class="form-control text-normal currency-selector-search-bar tw-border tw-border-gray-300 dark:tw-bg-black" placeholder="Search..." data-target="searchable.searchInput" data-action="keyup->searchable#filterItems click->searchable#preventCollapse">
                                                                    </div>
                                                                    <div class="pt-3 pb-2">
                                                                        <span class="ml-3 dropdown-menu-secondary-title">Cryptocurrencies</span>
                                                                    </div>
                                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="{{ $Response['symbol'] }}" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">{{ $Response['symbol'] }}</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">{{ $Response['id'] }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eth" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ETH</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Ether</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ltc" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LTC</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Litecoin</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bch" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BCH</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">{{ $Response['id'] }} Cash</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bnb" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BNB</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Binance Coin</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eos" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">EOS</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">EOS</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xrp" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XRP</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">XRP</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xlm" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XLM</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Lumens</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="link" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LINK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Chainlink</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="dot" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">DOT</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Polkadot</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="yfi" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">YFI</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Yearn.finance</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="pt-3 pb-2">
                                                                        <span class="ml-3 dropdown-menu-secondary-title">{{ $Response['id'] }} Units <span class="badge bg-warning text-dark">New</span></span>
                                                                    </div>
                                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bits" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BITS</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Bits</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sats" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SATS</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Satoshi</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="pt-3 pb-2">
                                                                        <span class="ml-3 dropdown-menu-secondary-title">Suggested Currencies</span>
                                                                    </div>
                                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="usd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">USD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">US Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="idr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">IDR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Indonesian Rupiah</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="twd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">TWD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">New Taiwan Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eur" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">EUR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Euro</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="krw" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">KRW</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">South Korean Won</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="jpy" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">JPY</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Japanese Yen</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="rub" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">RUB</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Russian Ruble</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="cny" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CNY</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Chinese Yuan</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="pt-3 pb-2">
                                                                        <span class="ml-3 mb-0 dropdown-menu-secondary-title">Fiat Currencies</span>
                                                                    </div>
                                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="aed" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">AED</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">United Arab Emirates Dirham</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ars" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ARS</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Argentine Peso</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="aud" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">AUD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Australian Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bdt" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BDT</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Bangladeshi Taka</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bhd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BHD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Bahraini Dinar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bmd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BMD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Bermudian Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="brl" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BRL</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Brazil Real</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="cad" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CAD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Canadian Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="chf" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CHF</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Swiss Franc</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="clp" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CLP</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Chilean Peso</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="czk" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CZK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Czech Koruna</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="dkk" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">DKK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Danish Krone</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="gbp" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">GBP</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">British Pound Sterling</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="hkd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">HKD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Hong Kong Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="huf" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">HUF</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Hungarian Forint</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ils" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ILS</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Israeli New Shekel</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="inr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">INR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Indian Rupee</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="kwd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">KWD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Kuwaiti Dinar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="lkr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LKR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Sri Lankan Rupee</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="mmk" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MMK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Burmese Kyat</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="mxn" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MXN</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Mexican Peso</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="myr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MYR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Malaysian Ringgit</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ngn" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NGN</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Nigerian Naira</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="nok" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NOK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Norwegian Krone</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="nzd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NZD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">New Zealand Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="php" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PHP</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Philippine Peso</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="pkr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PKR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Pakistani Rupee</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="pln" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PLN</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Polish Zloty</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sar" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SAR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Saudi Riyal</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sek" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SEK</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Swedish Krona</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sgd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SGD</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Singapore Dollar</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="thb" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">THB</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Thai Baht</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="try" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">TRY</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Turkish Lira</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="uah" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">UAH</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Ukrainian hryvnia</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="vef" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">VEF</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Venezuelan bolívar fuerte</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="vnd" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">VND</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Vietnamese đồng</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="zar" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ZAR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">South African Rand</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xdr" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XDR</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">IMF Special Drawing Rights</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="pt-3 pb-2">
                                                                        <span class="ml-3 mb-0 dropdown-menu-secondary-title">Commodities</span>
                                                                    </div>
                                                                    <ul class="tw-flex flex-wrap p-0 m-0 nav">
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xag" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XAG</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Silver - Troy Ounce</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="col-6 col-md-3 col-lg-4">
                                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xau" data-action="click->currency-dropdown#selectCurrency">
                                                                                <div class="justify-content-md-between">
                                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XAU</span>
                                                                                    <br class="d-block d-sm-none">
                                                                                    <span class="d-md-inline currency-name">Gold - Troy Ounce</span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="number" name="to_amount" id="to_amount" value="" class="form-control tw-h-12 tw-border-none tw-rounded-r-lg" data-target="converter.toInput" data-action="keyup->converter#calculateFrom change->converter#calculateFrom">
                                        </div>
                                    </div>
                                </div>
                                <h2 class="tw-text-lg px-3 md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">{{ $Response['symbol'] }} Price Statistics</h2>
                                <div itemscope="" itemtype="https://schema.org/Table" class="px-3">
                                    <table class="table b-b">
                                        <caption style="caption-side: top" itemprop="about">{{ $Response['id'] }} Price Today</caption>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal border-top-0 pl-0 tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">
                                                        {{ $Response['id'] }} Price
                                                    </span>
                                                </th>
                                                <td class="border-top-0 tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-{{ $Response['symbol'] }}="1.0" data-coin-id="1" data-coin-symbol="{{ $Response['symbol'] }}" data-target="price.price" data-price-previous="20124.743">{{$Response["market_data"]["current_price"]["usd"] > 1 ? (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($Response["market_data"]["current_price"]["usd"] , 'USD') : sprintf("$%.6f", number_format($Response["market_data"]["current_price"]["usd"] ,6,'.',''))}}</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">24h Low / 24h High</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:71259.0696033822,&quot;ars&quot;:2447951.27351895,&quot;aud&quot;:28646.572019396524,&quot;bch&quot;:189.2962923740724,&quot;bdt&quot;:1813126.1098766453,&quot;bhd&quot;:7313.550295033892,&quot;bmd&quot;:19400.675630239515,&quot;bnb&quot;:84.58377342650611,&quot;brl&quot;:104643.36421438617,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:25327.892446087677,&quot;chf&quot;:18805.831514740676,&quot;clp&quot;:18491713.57006363,&quot;cny&quot;:130409.40151890709,&quot;czk&quot;:468836.6108763138,&quot;dkk&quot;:140895.48609772656,&quot;dot&quot;:2898.7720331991436,&quot;eos&quot;:20411.654266518257,&quot;eth&quot;:17.59699808065862,&quot;eur&quot;:18938.027718485184,&quot;gbp&quot;:16294.026040893583,&quot;hkd&quot;:152241.36981912766,&quot;huf&quot;:7720613.1952352915,&quot;idr&quot;:291703708.6073733,&quot;ils&quot;:68412.50547153527,&quot;inr&quot;:1537962.505479863,&quot;jpy&quot;:2635271.3735579536,&quot;krw&quot;:25479725.955503073,&quot;kwd&quot;:5960.236765770908,&quot;lkr&quot;:6953795.631946035,&quot;ltc&quot;:399.46073630298673,&quot;mmk&quot;:35913355.70537912,&quot;mxn&quot;:399657.79811805906,&quot;myr&quot;:85741.28594784332,&quot;ngn&quot;:8057100.589238458,&quot;nok&quot;:195981.93908830933,&quot;nzd&quot;:31622.94607188534,&quot;php&quot;:1075427.9324725731,&quot;pkr&quot;:3976617.149842886,&quot;pln&quot;:90206.33204346735,&quot;rub&quot;:1154827.1569575698,&quot;sar&quot;:72833.47323212738,&quot;sek&quot;:204383.47927268708,&quot;sgd&quot;:27292.016846893115,&quot;thb&quot;:697944.1559667732,&quot;try&quot;:329518.05049516406,&quot;twd&quot;:579238.2120218078,&quot;uah&quot;:573130.9957374622,&quot;usd&quot;:19400.675630239515,&quot;vef&quot;:1942.5896508558774,&quot;vnd&quot;:453296786.100545,&quot;xag&quot;:1010.912510274616,&quot;xau&quot;:10.979036345908836,&quot;xdr&quot;:14210.723289691614,&quot;xlm&quot;:182326.6569291224,&quot;xrp&quot;:61422.57840928218,&quot;yfi&quot;:3.193182472683706,&quot;zar&quot;:321874.6693137404,&quot;bits&quot;:997861.8382261775,&quot;link&quot;:3170.714733131101,&quot;sats&quot;:99786183.82261775}" data-target="price.price" data-price-previous="19400.675630239515">$19,400.68</span>
                                                        /
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:75772.75090114132,&quot;ars&quot;:2603546.4356724303,&quot;aud&quot;:30354.980480359016,&quot;bch&quot;:194.0197289593114,&quot;bdt&quot;:1927972.8719545044,&quot;bhd&quot;:7777.0722849231925,&quot;bmd&quot;:20629.550315854915,&quot;bnb&quot;:88.55223541706128,&quot;brl&quot;:111174.36454770477,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:26890.041209308027,&quot;chf&quot;:19982.81391345284,&quot;clp&quot;:19647583.720820203,&quot;cny&quot;:138628.515167513,&quot;czk&quot;:497582.69066338835,&quot;dkk&quot;:149535.35841950547,&quot;dot&quot;:2970.84022349006,&quot;eos&quot;:21033.31441020833,&quot;eth&quot;:17.90177445902046,&quot;eur&quot;:20097.968063315937,&quot;gbp&quot;:17254.555884180994,&quot;hkd&quot;:161881.1128060287,&quot;huf&quot;:8290068.994453003,&quot;idr&quot;:309949591.18620175,&quot;ils&quot;:72745.88013104754,&quot;inr&quot;:1633044.4863007125,&quot;jpy&quot;:2802864.797989104,&quot;krw&quot;:27011544.26831726,&quot;kwd&quot;:6337.274079728732,&quot;lkr&quot;:7394261.9117761105,&quot;ltc&quot;:407.15560525015843,&quot;mmk&quot;:38188174.09536615,&quot;mxn&quot;:423563.8641301008,&quot;myr&quot;:91172.29762092074,&quot;ngn&quot;:8567452.246174535,&quot;nok&quot;:207680.26172350033,&quot;nzd&quot;:33443.65738319915,&quot;php&quot;:1143031.7884961807,&quot;pkr&quot;:4229515.600373792,&quot;pln&quot;:95432.36164979573,&quot;rub&quot;:1227976.0455062909,&quot;sar&quot;:77446.94205702451,&quot;sek&quot;:216847.51814510918,&quot;sgd&quot;:28992.770013902424,&quot;thb&quot;:741551.0584219873,&quot;try&quot;:350333.0864188798,&quot;twd&quot;:615193.8405986596,&quot;uah&quot;:609434.173298224,&quot;usd&quot;:20629.550315854915,&quot;vef&quot;:2065.6368731265457,&quot;vnd&quot;:482009443.12994957,&quot;xag&quot;:1072.5453804930235,&quot;xau&quot;:11.678388433805456,&quot;xdr&quot;:15110.85679265932,&quot;xlm&quot;:188552.56946916512,&quot;xrp&quot;:63132.865044397615,&quot;yfi&quot;:3.3075442073097863,&quot;zar&quot;:340994.088990892,&quot;bits&quot;:1001614.9618446775,&quot;link&quot;:3229.6487721275757,&quot;sats&quot;:100161496.18446775}" data-target="price.price" data-price-previous="20629.550315854915">$20,629.55</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">7d Low / 7d High</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:69116.64178248931,&quot;ars&quot;:2356356.6334077087,&quot;aud&quot;:27259.07789553871,&quot;bch&quot;:180.3247118408504,&quot;bdt&quot;:1758579.4775886752,&quot;bhd&quot;:7093.813125523302,&quot;bmd&quot;:18817.428797534387,&quot;bnb&quot;:84.74442123095633,&quot;brl&quot;:98932.29318931859,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:24223.977169926722,&quot;chf&quot;:17969.496638488716,&quot;clp&quot;:17297249.26357684,&quot;cny&quot;:126066.74325393139,&quot;czk&quot;:444077.2253676414,&quot;dkk&quot;:133493.436694883,&quot;dot&quot;:2770.8404604652183,&quot;eos&quot;:20356.99464442399,&quot;eth&quot;:17.4440199416937,&quot;eur&quot;:17948.49638795062,&quot;gbp&quot;:15451.48003880421,&quot;hkd&quot;:147648.1888978198,&quot;huf&quot;:7115507.419287699,&quot;idr&quot;:280824529.712899,&quot;ils&quot;:65893.42322118842,&quot;inr&quot;:1485927.7489814127,&quot;jpy&quot;:2553942.2233664575,&quot;krw&quot;:24236383.086749572,&quot;kwd&quot;:5772.810806507595,&quot;lkr&quot;:6782219.932334989,&quot;ltc&quot;:364.49258681058967,&quot;mmk&quot;:34832931.42010262,&quot;mxn&quot;:378326.4758915963,&quot;myr&quot;:82937.81742513273,&quot;ngn&quot;:7810379.967349123,&quot;nok&quot;:185299.81282194797,&quot;nzd&quot;:30135.66060096014,&quot;php&quot;:1034480.6211729357,&quot;pkr&quot;:3838865.2555766203,&quot;pln&quot;:84344.34495803327,&quot;rub&quot;:1000388.7943335241,&quot;sar&quot;:70607.58430097559,&quot;sek&quot;:192394.8490803431,&quot;sgd&quot;:26153.47868396833,&quot;thb&quot;:664496.3254507172,&quot;try&quot;:314253.92116800084,&quot;twd&quot;:559364.686796338,&quot;uah&quot;:555439.5028711736,&quot;usd&quot;:18817.428797534387,&quot;vef&quot;:1884.1891454971144,&quot;vnd&quot;:437802917.6829948,&quot;xag&quot;:924.4964039436345,&quot;xau&quot;:10.408157983203767,&quot;xdr&quot;:13789.825806266712,&quot;xlm&quot;:173056.04100365707,&quot;xrp&quot;:58227.7167785001,&quot;yfi&quot;:3.127755979402081,&quot;zar&quot;:306438.3091086623,&quot;bits&quot;:997360.7455590927,&quot;link&quot;:3086.279361443306,&quot;sats&quot;:99736074.55590928}" data-target="price.price" data-price-previous="18817.428797534387">$18,817.43</span>
                                                        /
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:75273.26558959392,&quot;ars&quot;:2586146.1429707375,&quot;aud&quot;:30139.944112042005,&quot;bch&quot;:195.0292696251994,&quot;bdt&quot;:1915263.8951897603,&quot;bhd&quot;:7724.126241361577,&quot;bmd&quot;:20493.56267855715,&quot;bnb&quot;:92.33500028262029,&quot;brl&quot;:110431.61184967252,&quot;{{ $Response['symbol'] }}&quot;:1.0,&quot;cad&quot;:26708.13309301622,&quot;chf&quot;:19845.863630101343,&quot;clp&quot;:19576934.01365668,&quot;cny&quot;:137714.6918436362,&quot;czk&quot;:494199.9482208225,&quot;dkk&quot;:148533.34604945945,&quot;dot&quot;:2967.314188738477,&quot;eos&quot;:21736.236774694455,&quot;eth&quot;:18.74934472129123,&quot;eur&quot;:19963.230263561403,&quot;gbp&quot;:17137.331918689826,&quot;hkd&quot;:160806.2029693914,&quot;huf&quot;:8227371.788709945,&quot;idr&quot;:307660634.3899726,&quot;ils&quot;:72266.3476055826,&quot;inr&quot;:1625421.593806291,&quot;jpy&quot;:2784552.582167612,&quot;krw&quot;:26819691.584396873,&quot;kwd&quot;:6294.8232059082875,&quot;lkr&quot;:7363130.551029211,&quot;ltc&quot;:406.0000851211503,&quot;mmk&quot;:37936442.01742775,&quot;mxn&quot;:420571.9673237513,&quot;myr&quot;:90571.30025788327,&quot;ngn&quot;:8564493.831687883,&quot;nok&quot;:206228.9550326526,&quot;nzd&quot;:33219.59374999952,&quot;php&quot;:1135804.4775523331,&quot;pkr&quot;:4204276.606235658,&quot;pln&quot;:94855.77221124603,&quot;rub&quot;:1219881.3677973836,&quot;sar&quot;:76934.37131250433,&quot;sek&quot;:215382.6302322196,&quot;sgd&quot;:28795.75084239273,&quot;thb&quot;:737249.2979403473,&quot;try&quot;:348088.46510739013,&quot;twd&quot;:611183.5774880198,&quot;uah&quot;:605416.852898775,&quot;usd&quot;:20493.56267855715,&quot;vef&quot;:2052.0204310039285,&quot;vnd&quot;:478832091.98448735,&quot;xag&quot;:1065.7357571405867,&quot;xau&quot;:11.60406999547937,&quot;xdr&quot;:15011.24775216558,&quot;xlm&quot;:187556.70763848175,&quot;xrp&quot;:62893.23420011702,&quot;yfi&quot;:3.7181798629178924,&quot;zar&quot;:339057.74909905146,&quot;bits&quot;:1003415.3942257543,&quot;link&quot;:3275.9840548778484,&quot;sats&quot;:100341539.42257543}" data-target="price.price" data-price-previous="20493.56267855715">$20,493.56</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">Trading Volume</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-{{ $Response['symbol'] }}="1170827.90358574" data-no-decimal="false" data-target="price.price" data-price-previous="23562610656.891792">$23,562,610,657</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">Market Cap Rank</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        #1
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">Market Cap</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-{{ $Response['symbol'] }}="19086568.0" data-target="price.price" data-price-previous="384112275752.024">$384,112,275,752</span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">Market Cap Dominance</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        40.702%
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">Volume / Market Cap
                                                    </span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        0.0615
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">All-Time High</span>
                                                </th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:253608.34258476907,&quot;ars&quot;:6913791.082162635,&quot;aud&quot;:93482.33702935852,&quot;bch&quot;:196.78278837320906,&quot;bdt&quot;:5922005.155688292,&quot;bhd&quot;:26030.775656233534,&quot;bmd&quot;:69044.76942766843,&quot;bnb&quot;:143061.5164520744,&quot;brl&quot;:380542.0056553954,&quot;{{ $Response['symbol'] }}&quot;:1.0033005057217026,&quot;cad&quot;:85656.04336996282,&quot;chf&quot;:62992.05123942743,&quot;clp&quot;:55165171.39289526,&quot;cny&quot;:440947.51547286194,&quot;czk&quot;:1505244.7421135202,&quot;dkk&quot;:444133.793492409,&quot;dot&quot;:5526.03408822764,&quot;eos&quot;:26798.44272484492,&quot;eth&quot;:624.2026756165253,&quot;eur&quot;:59716.82107799041,&quot;gbp&quot;:51032.02475553113,&quot;hkd&quot;:537864.9678707849,&quot;huf&quot;:21673370.985488348,&quot;idr&quot;:984115318.068061,&quot;ils&quot;:216131.06180795413,&quot;inr&quot;:5128382.619649998,&quot;jpy&quot;:7828813.793479749,&quot;krw&quot;:81339063.62632945,&quot;kwd&quot;:20831.63547356073,&quot;lkr&quot;:14190616.154658234,&quot;ltc&quot;:578.4553495902071,&quot;mmk&quot;:126473150.78620768,&quot;mxn&quot;:1409247.1249294062,&quot;myr&quot;:286777.4498178205,&quot;ngn&quot;:28379647.569441706,&quot;nok&quot;:591777.312988527,&quot;nzd&quot;:97029.65014824386,&quot;php&quot;:3454758.8816466043,&quot;pkr&quot;:11814868.516499463,&quot;pln&quot;:275506.02929829294,&quot;rub&quot;:6075508.065671732,&quot;sar&quot;:258937.70120258268,&quot;sek&quot;:596345.5947864681,&quot;sgd&quot;:91122.71865872202,&quot;thb&quot;:2258592.5665626596,&quot;try&quot;:850326.0783631845,&quot;twd&quot;:1914231.6409526237,&quot;uah&quot;:1815813.8524335525,&quot;usd&quot;:69044.76942766843,&quot;vef&quot;:8618768857.093742,&quot;vnd&quot;:1563347910.3593378,&quot;xag&quot;:2815.0828078095496,&quot;xau&quot;:37.7153686383122,&quot;xdr&quot;:48913.45505041258,&quot;xlm&quot;:275874.0172564747,&quot;xrp&quot;:159288.0595044857,&quot;yfi&quot;:11.59318171251923,&quot;zar&quot;:1057029.3166638124,&quot;bits&quot;:1058235.7939525498,&quot;link&quot;:74906.24576061158,&quot;sats&quot;:105823579.39525498}" data-target="price.price" data-price-previous="69044.76942766843">$69,044.77</span>
                                                        <span class="text-danger" data-json="{&quot;aed&quot;:-70.83523271469521,&quot;ars&quot;:-63.18756602502661,&quot;aud&quot;:-68.21973982761396,&quot;bch&quot;:-2.864491021806979,&quot;bdt&quot;:-68.217736798022,&quot;bhd&quot;:-70.83886851521768,&quot;bmd&quot;:-70.83523271469514,&quot;bnb&quot;:-99.94051466019992,&quot;brl&quot;:-71.25974824509274,&quot;{{ $Response['symbol'] }}&quot;:-0.32896482189310383,&quot;cad&quot;:-69.28590580479619,&quot;chf&quot;:-69.0115187707924,&quot;clp&quot;:-64.43802878141031,&quot;cny&quot;:-69.36018889765373,&quot;czk&quot;:-67.45997314970322,&quot;dkk&quot;:-66.88643656906224,&quot;dot&quot;:-47.18417479455277,&quot;eos&quot;:-23.340913028272997,&quot;eth&quot;:-97.15586044009922,&quot;eur&quot;:-66.90444658630113,&quot;gbp&quot;:-66.88459377406389,&quot;hkd&quot;:-70.62219010769455,&quot;huf&quot;:-62.46848669761229,&quot;idr&quot;:-69.30048263173974,&quot;ils&quot;:-67.45107954188015,&quot;inr&quot;:-68.96657213248322,&quot;jpy&quot;:-65.12633320768772,&quot;krw&quot;:-67.66071829737929,&quot;kwd&quot;:-70.30763918230937,&quot;lkr&quot;:-48.965688630880486,&quot;ltc&quot;:-30.06048671368201,&quot;mmk&quot;:-70.51508642300817,&quot;mxn&quot;:-70.3962961899475,&quot;myr&quot;:-68.93234311933765,&quot;ngn&quot;:-70.5303075691157,&quot;nok&quot;:-65.45814342564668,&quot;nzd&quot;:-66.2075621939358,&quot;php&quot;:-67.44263727120804,&quot;pkr&quot;:-64.58503887849942,&quot;pln&quot;:-65.68669730303661,&quot;rub&quot;:-80.1135173048497,&quot;sar&quot;:-70.80816210518722,&quot;sek&quot;:-64.41698027313355,&quot;sgd&quot;:-68.94521074288217,&quot;thb&quot;:-67.70326561196288,&quot;try&quot;:-59.22759542836058,&quot;twd&quot;:-68.64901803231434,&quot;uah&quot;:-67.23060862039138,&quot;usd&quot;:-70.83523271469514,&quot;vef&quot;:-99.99997660579552,&quot;vnd&quot;:-69.88771936045077,&quot;xag&quot;:-62.27532680943727,&quot;xau&quot;:-69.2802161239708,&quot;xdr&quot;:-69.82171494684347,&quot;xlm&quot;:-32.641079093250305,&quot;xrp&quot;:-60.8779347421617,&quot;yfi&quot;:-71.84118356389884,&quot;zar&quot;:-68.00555971399663,&quot;bits&quot;:-5.518480192987076,&quot;link&quot;:-95.68841190833535,&quot;sats&quot;:-5.518480192987076}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-70.8%</span><br>
                                                        <small>Nov 10, 2021 (8 months)</small>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="tw-text-gray-500 dark:tw-text-gray-400 tw-font-normal pl-0 tw-border-gray-200 dark:tw-border-opacity-10"><span class="tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm">All-Time Low</span></th>
                                                <td class="tw-text-right tw-text-sm tw-border-gray-200 dark:tw-border-opacity-10">
                                                    <span class="tw-text-gray-900 dark:tw-text-white tw-font-medium">
                                                        <span class="no-wrap" data-price-json="{&quot;aed&quot;:632.3140414194,&quot;ars&quot;:1478.9771797843,&quot;aud&quot;:72.6094,&quot;bch&quot;:3.5138894958733684,&quot;bdt&quot;:9390.2545836,&quot;bhd&quot;:45.91325673,&quot;bmd&quot;:121.77,&quot;bnb&quot;:81.25447309872719,&quot;brl&quot;:149.6585,&quot;{{ $Response['symbol'] }}&quot;:0.9989513383603202,&quot;cad&quot;:69.8065,&quot;chf&quot;:63.261,&quot;clp&quot;:107408.2037845326,&quot;cny&quot;:407.2253,&quot;czk&quot;:4101.557992862,&quot;dkk&quot;:382.4674,&quot;dot&quot;:991.8820564424755,&quot;eos&quot;:908.1414869478155,&quot;eth&quot;:6.779734651845413,&quot;eur&quot;:51.2984,&quot;gbp&quot;:43.9022,&quot;hkd&quot;:514.3749,&quot;huf&quot;:46598.0440184858,&quot;idr&quot;:658779.9761,&quot;ils&quot;:672.1840115030999,&quot;inr&quot;:3993.4193,&quot;jpy&quot;:6641.8319,&quot;krw&quot;:75593.7983,&quot;kwd&quot;:50.6109661563,&quot;lkr&quot;:22646.2974242079,&quot;ltc&quot;:20.70783522361356,&quot;mmk&quot;:117587.9579094,&quot;mxn&quot;:859.3185,&quot;myr&quot;:211.176,&quot;ngn&quot;:10932.642456708,&quot;nok&quot;:1316.0264534896999,&quot;nzd&quot;:84.8543,&quot;php&quot;:2880.5024,&quot;pkr&quot;:17315.844260258,&quot;pln&quot;:220.1116,&quot;rub&quot;:2206.4331,&quot;sar&quot;:646.0387048947999,&quot;sek&quot;:443.8054,&quot;sgd&quot;:84.4657,&quot;thb&quot;:5644.347472662,&quot;try&quot;:392.90933407259996,&quot;twd&quot;:1998.6554,&quot;uah&quot;:553.3678891650001,&quot;usd&quot;:67.809,&quot;vef&quot;:766.18950408,&quot;vnd&quot;:3672339.3385440493,&quot;xag&quot;:3.3697,&quot;xau&quot;:0.0531,&quot;xdr&quot;:44.3914,&quot;xlm&quot;:21608.28687955537,&quot;xrp&quot;:9907.981511816444,&quot;yfi&quot;:0.23958074743794447,&quot;zar&quot;:666.2645,&quot;bits&quot;:950992.6779624666,&quot;link&quot;:598.4771365397304,&quot;sats&quot;:95099267.79624666}" data-target="price.price" data-price-previous="67.809">$67.81</span>
                                                        <span class="text-green" data-json="{&quot;aed&quot;:11597.396876547853,&quot;ars&quot;:171987.49479555275,&quot;aud&quot;:40816.0934027232,&quot;bch&quot;:5339.726072555052,&quot;bdt&quot;:19943.623404020527,&quot;bhd&quot;:16433.065298029796,&quot;bmd&quot;:16436.705531949414,&quot;bnb&quot;:4.733469973118744,&quot;brl&quot;:72978.86318420537,&quot;{{ $Response['symbol'] }}&quot;:0.10497624853291398,&quot;cad&quot;:37587.71940225481,&quot;chf&quot;:30756.736337115755,&quot;clp&quot;:18164.73368159249,&quot;cny&quot;:33077.08546138317,&quot;czk&quot;:11841.97532008174,&quot;dkk&quot;:38352.5649575203,&quot;dot&quot;:194.25076155725455,&quot;eos&quot;:2162.1410662067683,&quot;eth&quot;:161.85678559464668,&quot;eur&quot;:38426.76188112943,&quot;gbp&quot;:38393.42926576436,&quot;hkd&quot;:30619.412579888518,&quot;huf&quot;:17356.406778077257,&quot;idr&quot;:45760.32726473667,&quot;ils&quot;:10365.635330398865,&quot;inr&quot;:39753.388824943824,&quot;jpy&quot;:41006.045398841095,&quot;krw&quot;:34697.12557371602,&quot;kwd&quot;:12121.470639255376,&quot;lkr&quot;:31879.10500735264,&quot;ltc&quot;:1853.6994172173113,&quot;mmk&quot;:31612.855525685587,&quot;mxn&quot;:48448.86108186696,&quot;myr&quot;:42089.943043013554,&quot;ngn&quot;:76399.29909261625,&quot;nok&quot;:15432.428709926293,&quot;nzd&quot;:38541.158055380816,&quot;php&quot;:38947.99317309508,&quot;pkr&quot;:24064.1760504744,&quot;pln&quot;:42848.766798981924,&quot;rub&quot;:54658.282049080466,&quot;sar&quot;:11600.332102535784,&quot;sek&quot;:47713.24666918609,&quot;sgd&quot;:33402.31898252486,&quot;thb&quot;:12823.577892107827,&quot;try&quot;:88138.77642579284,&quot;twd&quot;:29926.707784382892,&quot;uah&quot;:107429.03442354896,&quot;usd&quot;:29596.27383718209,&quot;vef&quot;:163.15844825738742,&quot;vnd&quot;:12719.068902455301,&quot;xag&quot;:31415.5886069938,&quot;xau&quot;:21719.359197245198,&quot;xdr&quot;:33152.48109872881,&quot;xlm&quot;:759.9745186735759,&quot;xrp&quot;:528.9553378048714,&quot;yfi&quot;:1262.5897708569003,&quot;zar&quot;:50659.21252378777,&quot;bits&quot;:5.136168178535625,&quot;link&quot;:439.6444700963407,&quot;sats&quot;:5.136168178535624}" data-coin-id="1" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">29596.3%</span><br>
                                                        <small>Jul 06, 2013 (about 9 years)</small>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tw-flex flex-column tw-justify-center">
                                    <div class="mt-4 mb-4">
                                        <div class="text-center" style="height: 250px;" data-target="ads.banner">

                                            <div id="bsa-zone_1509402283990-1_123456" data-google-query-id="CIXk7P3I5PgCFVKH_QcdlCMMLg">
                                                <div id="google_ads_iframe_/22743369056/CoinGecko_S2S_Medium-Rectangle_ATF_ROS_0__container__" style="border: 0pt none; margin: auto; text-align: center;"><iframe id="google_ads_iframe_/22743369056/CoinGecko_S2S_Medium-Rectangle_ATF_ROS_0" name="google_ads_iframe_/22743369056/CoinGecko_S2S_Medium-Rectangle_ATF_ROS_0" title="3rd party ad content" width="336" height="280" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" srcdoc="" data-google-container-id="2" style="border: 0px; vertical-align: bottom;" data-ruffle-polyfilled="" data-load-complete="true"></iframe></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="py-1 px-4 mt-2 font-bold text-xs uppercase">Top Coins by Market Cap</h4>
                                    <div data-controller="buy-sell-ads">
                                        <div id="sponsored-popular-coins-01" data-target="buy-sell-ads.sponsoredPopularCoin" data-zone-key="CEAI45QE"></div>
                                    </div>
                                    <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="{{ $Response['id'] }}" data-event-category="click_popular_coin" href="/en/coins/{{ $Response['id'] }}" data-gtm-vis-recent-on-screen-52934946_93="58273" data-gtm-vis-first-on-screen-52934946_93="58273" data-gtm-vis-total-visible-time-52934946_93="100" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="{{ $Response['id'] }} ({{ $Response['symbol'] }})" data-src="https://assets.coingecko.com/coins/images/1/small/{{ $Response['id'] }}.png" data-srcset="https://assets.coingecko.com/coins/images/1/small/{{ $Response['id'] }}.png" src="https://assets.coingecko.com/coins/images/1/small/{{ $Response['id'] }}.png" srcset="https://assets.coingecko.com/coins/images/1/small/{{ $Response['id'] }}.png">
                                        {{ $Response['id'] }}
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="ethereum" data-event-category="click_popular_coin" href="/en/coins/ethereum" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="ethereum (ETH)" data-src="https://assets.coingecko.com/coins/images/279/small/ethereum.png" data-srcset="https://assets.coingecko.com/coins/images/279/small/ethereum.png" src="https://assets.coingecko.com/coins/images/279/small/ethereum.png" srcset="https://assets.coingecko.com/coins/images/279/small/ethereum.png">
                                        Ethereum
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="shiba-inu" data-event-category="click_popular_coin" href="/en/coins/shiba-inu" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="shiba inu (SHIB)" data-src="https://assets.coingecko.com/coins/images/11939/small/shiba.png" data-srcset="https://assets.coingecko.com/coins/images/11939/small/shiba.png" src="https://assets.coingecko.com/coins/images/11939/small/shiba.png" srcset="https://assets.coingecko.com/coins/images/11939/small/shiba.png">
                                        Shiba Inu
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="solana" data-event-category="click_popular_coin" href="/en/coins/solana" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="solana (SOL)" data-src="https://assets.coingecko.com/coins/images/4128/small/solana.png" data-srcset="https://assets.coingecko.com/coins/images/4128/small/solana.png" src="https://assets.coingecko.com/coins/images/4128/small/solana.png" srcset="https://assets.coingecko.com/coins/images/4128/small/solana.png">
                                        Solana
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="staked-ether" data-event-category="click_popular_coin" href="/en/coins/lido-staked-ether" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="lido staked ether (STETH)" data-src="https://assets.coingecko.com/coins/images/13442/small/steth_logo.png" data-srcset="https://assets.coingecko.com/coins/images/13442/small/steth_logo.png" src="https://assets.coingecko.com/coins/images/13442/small/steth_logo.png" srcset="https://assets.coingecko.com/coins/images/13442/small/steth_logo.png">
                                        Lido Staked Ether
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="avalanche-2" data-event-category="click_popular_coin" href="/en/coins/avalanche" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="avalanche (AVAX)" data-src="https://assets.coingecko.com/coins/images/12559/small/coin-round-red.png" data-srcset="https://assets.coingecko.com/coins/images/12559/small/coin-round-red.png" src="https://assets.coingecko.com/coins/images/12559/small/coin-round-red.png" srcset="https://assets.coingecko.com/coins/images/12559/small/coin-round-red.png">
                                        Avalanche
                                    </a> <a class="text-secondary ml-2 mb-3 col-10 d-block" data-action="click->application#gtagEventTrackLink" data-source="harmony" data-destination="tron" data-event-category="click_popular_coin" href="/en/coins/tron" data-gtm-vis-has-fired-52934946_93="1">
                                        <img class="" width="21" height="21" alt="tron (TRX)" data-src="https://assets.coingecko.com/coins/images/1094/small/tron-logo.png" data-srcset="https://assets.coingecko.com/coins/images/1094/small/tron-logo.png" src="https://assets.coingecko.com/coins/images/1094/small/tron-logo.png" srcset="https://assets.coingecko.com/coins/images/1094/small/tron-logo.png">
                                        TRON
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-12 tw-order-3 order-sm-3 order-md-3 order-lg-3 tw-mb-8 tw-mt-8 post-body" data-controller="read-more">
                                <div data-target="read-more.description">
                                    <h2 class="tw-text-lg md:tw-text-xl tw-font-bold tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-87"> {{ $Response['symbol'] }} Price Today </h2>
                                    <p class="mt-2"></p>
                                    <p><b>{{ $Response['id'] }} price</b> today is <span class="no-wrap">$20,137.70</span> with a 24-hour trading volume of <span class="no-wrap">$23,583,788,640</span>. {{ $Response['symbol'] }} price is up 3.8% in the last 24 hours. It has a circulating supply of 19 Million {{ $Response['symbol'] }} coins and a total supply of 21 Million. If you are looking to buy or sell {{ $Response['id'] }}, <a href="/en/exchanges/currency">Currency.com</a> is currently the most active exchange. </p>
                                    <p></p>
                                    <h3 class="tw-text-lg md:tw-text-xl tw-font-bold tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-87">What was the highest price for {{ $Response['id'] }}?</h3>
                                    <p class="tw-mt-2 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">{{ $Response['id'] }} hit an all time high of $69,044.77 on Nov 10, 2021 (8 months).</p>
                                    <h3 class="tw-text-lg md:tw-text-xl tw-font-bold tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-87">What was the lowest price for {{ $Response['id'] }}?</h3>
                                    <p class="tw-mt-2 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">{{ $Response['id'] }} had an all time low of $67.81 on Jul 06, 2013 (about 9 years).</p>
                                    <h3 class="tw-text-lg md:tw-text-xl tw-font-bold tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-87">What was the 24 hour trading volume of {{ $Response['id'] }}?</h3>
                                    <p class="tw-mt-2 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">The 24 hour trading volume of {{ $Response['id'] }} is $23,583,788,640.</p>
                                    <h3 class="tw-text-lg md:tw-text-xl tw-font-bold tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-87">Where can {{ $Response['id'] }} be traded?</h3>
                                    <p class="tw-mt-2 tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60"> You can trade {{ $Response['id'] }} on <a href="/en/exchanges/currency">Currency.com</a>, <a href="/en/exchanges/binance">Binance</a>, and <a href="/en/exchanges/digifinex">Digifinex</a>. Popular trading pairs for {{ $Response['id'] }} in the market includes <a href="/en/coins/{{ $Response['id'] }}/usd">{{ $Response['symbol'] }}/USD</a>, <a href="/en/coins/{{ $Response['id'] }}/cad">{{ $Response['symbol'] }}/CAD</a>, <a href="/en/coins/{{ $Response['id'] }}/eur">{{ $Response['symbol'] }}/EUR</a>, <a href="/en/coins/{{ $Response['id'] }}/php">{{ $Response['symbol'] }}/PHP</a>, <a href="/en/coins/{{ $Response['id'] }}/inr">{{ $Response['symbol'] }}/INR</a>, and <a href="/en/coins/{{ $Response['id'] }}/idr">{{ $Response['symbol'] }}/IDR</a>. </p>
                                    <div class="coin-description">
                                        <p></p>
                                        <h2>What is {{ $Response['id'] }}?</h2>
                                        <p></p>
                                        <p></p>
                                        <p>{{ $Response['id'] }} is...</p>
                                    </div>
                                </div>
                                <div class="tailwind-reset">
                                    <a data-action="click->read-more#toggle" data-target="read-more.button" data-click="false" data-more-text="Read More" data-less-text="Read Less" role="button" data-view-component="true" class="dark:focus:tw-text-white dark:hover:tw-bg-opacity-5 dark:hover:tw-bg-white dark:hover:tw-text-white dark:tw-border-opacity-10 dark:tw-border-white dark:tw-text-opacity-87 dark:tw-text-white disabled:tw-opacity-50 focus:tw-border-opacity-0 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 tw-bg-transparent tw-border tw-border-gray-300 tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-gray-700 tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                        Read More
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-12 tw-order-3 order-sm-3 order-md-3 order-lg-3 tw-mb-8">
                                <div id="coin-top-tickers" class="tw-h-auto" data-url="/en/coins/1/top_tickers" data-target="coin-top-tickers.topTickersContainer" data-controller="coin-top-tickers">
                                    <div data-controller="coin-tickers-tab">
                                        <div id="spot" data-target="coin-tickers-tab.spotTab">
                                            <div class="gecko-table-container mt-4" data-controller="gecko-table tickers" data-target="gecko-table.tableContainer">
                                                <div class="coingecko-table table-responsive">
                                                    <div class="row mr-0">
                                                        <div class="col-12 tw-p-0 col-lg-6 tw-block tw-flex-row tw-pl-4 tw-pb-3">
                                                            <h2 class="tw-text-black">
                                                                <span class="tw-text-lg md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">
                                                                    {{ $Response['id'] }} Markets
                                                                </span>
                                                            </h2>
                                                            <a data-toggle="modal" data-target="#affiliate-disclosure-modal-57" href="#">
                                                                <div class="tw-text-xs">
                                                                    Affiliate disclosures
                                                                </div>
                                                            </a>
                                                            <div class="modal fade" id="affiliate-disclosure-modal-57" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content tw-flex tw-justify-center">
                                                                        <div class="modal-body p-4">
                                                                            <h4><i type="solid" class="fas mr-2 text-danger fa-heart"></i>Support CoinGecko</h4>
                                                                            <p>Links on this page may contain affiliate links.
                                                                                CoinGecko may be compensated when you sign up and trade on these affiliate platforms.
                                                                            </p>
                                                                            <p>For more details, please refer to Clause 12.2 of our <a href="https://www.coingecko.com/en/privacy">privacy policy</a> and Clause 5.2 in our <a href="https://www.coingecko.com/en/terms">terms of use</a>.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 form-inline tw-flex justify-content-lg-end">
                                                            <div class="form-check mb-2 mx-2" data-action="click->tickers#displayUnconvertedData">
                                                                <input type="checkbox" class="form-check-input" id="displayUnconvertDataSwitch" data-target="tickers.displayUnconvertDataSwitch">
                                                                <label class="form-check-label" for="displayUnconvertDataSwitch" style="font-size: 16px;">Display Unconverted Data</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table table-scrollable" data-target="gecko-table.table">
                                                        <thead>
                                                            <tr>
                                                                <th class="table-number text-left" role="columnheader">#</th>
                                                                <th class="text-left" role="columnheader">Exchange</th>
                                                                <th class="text-left" role="columnheader">Pair</th>
                                                                <th class="text-right" role="columnheader">Price</th>
                                                                <th class="text-right" role="columnheader">
                                                                    Spread
                                                                </th>
                                                                <th class="text-right" role="columnheader">+2% Depth</th>
                                                                <th class="text-right" role="columnheader">-2% Depth</th>
                                                                <th class="text-right" role="columnheader">24h Volume</th>
                                                                <th class="text-right" role="columnheader">Volume %</th>
                                                                <th class="text-right" role="columnheader">Last Traded</th>
                                                                <th class="text-center" role="columnheader">Trust Score</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="  sponsored-v2" data-controller="ticker-sponsored-ads" data-target="ticker-sponsored-ads.adsRow ads.banner">
                                                                <td class="table-number">
                                                                    *
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div id="sponsored-exchange-03">
                                                                            <img alt="eToroX" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/503/thumb/eToroX_Logo_400x400.jpg?1580209571">
                                                                            <a rel="nofollow" class="tw-hidden sm:tw-inline" href="https://gcko.io/udmcrg7">eToroX</a>
                                                                            <a rel="nofollow" class="tw-inline sm:tw-hidden" href="https://gcko.io/udmcrg7">eToroX</a>
                                                                            <span class="badge badge-warning">Sponsored</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://exchange.etorox.com/xchange#">
                                                                        {{ $Response['symbol'] }}/USD
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="1.0003506440839871626305841187234906183" data-is-anomaly="false" data-price-previous="20131.799622074708">$20,131.80</div>
                                                                    <small class="tw-hidden unconverted-data">20141.51 USD</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.43403">
                                                                    0.43%
                                                                </td>
                                                                <td class="text-right" data-sort="58641.1529494777000000000000000000000067398281470116">
                                                                    $58,641
                                                                </td>
                                                                <td class="text-right" data-sort="20177.5803540000000000000000000000000041853830380268">
                                                                    $20,178
                                                                </td>
                                                                <td class="text-right" data-sort="0.02">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="194.142130928007251319340992703872216135203664" data-no-decimal="true" data-price-previous="3907060.490398497">$3,907,060</div> <small class="tw-hidden unconverted-data">
                                                                        194.074
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    0.02%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="  sponsored-v2" data-controller="ticker-sponsored-ads" data-target="ticker-sponsored-ads.adsRow ads.banner">
                                                                <td class="table-number">
                                                                    *
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div id="sponsored-exchange-03">
                                                                            <img alt="Crypto.com Exchange" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/589/thumb/Crypto.jpg?1629861084">
                                                                            <a rel="nofollow" class="tw-hidden sm:tw-inline" href="https://gcko.io/kysnjy6">Crypto.com Exchange</a>
                                                                            <a rel="nofollow" class="tw-inline sm:tw-hidden" href="https://gcko.io/lp21smr">Crypto.com Exchange</a>
                                                                            <span class="badge badge-warning">Sponsored</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://crypto.com/exchange/trade/spot/{{ $Response['symbol'] }}_USDT">
                                                                        {{ $Response['symbol'] }}/USDT
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="0.99891608738827213655" data-is-anomaly="false" data-price-previous="20102.929537254517">$20,102.93</div>
                                                                    <small class="tw-hidden unconverted-data">20118.17 USDT</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.010348">
                                                                    0.01%
                                                                </td>
                                                                <td class="text-right" data-sort="2302375.52643926">
                                                                    $2,302,376
                                                                </td>
                                                                <td class="text-right" data-sort="1890686.10492069">
                                                                    $1,890,686
                                                                </td>
                                                                <td class="text-right" data-sort="0.98">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="11487.41147800284704920432209045" data-no-decimal="true" data-price-previous="231181203.73005742">$231,181,204</div> <small class="tw-hidden unconverted-data">
                                                                        11499.876
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    0.98%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tbody data-target="gecko-table.paginatedShowMoreTbody">
                                                            <tr class="">
                                                                <td class="table-number">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <img alt="Binance" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/52/thumb/binance.jpg?1519353250">
                                                                        <a href="/en/exchanges/binance">Binance</a>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://www.binance.com/en/trade/{{ $Response['symbol'] }}_USDT?ref=37754157">
                                                                        {{ $Response['symbol'] }}/USDT
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="0.9985938430983019312" data-is-anomaly="false" data-price-previous="20096.444453735647">$20,096.44</div>
                                                                    <small class="tw-hidden unconverted-data">20111.68 USDT</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.01005">
                                                                    0.01%
                                                                </td>
                                                                <td class="text-right" data-sort="14957257.1935609">
                                                                    $14,957,257
                                                                </td>
                                                                <td class="text-right" data-sort="16599535.4524993">
                                                                    $16,599,535
                                                                </td>
                                                                <td class="text-right" data-sort="8.18">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="95663.387515266053925512258241" data-no-decimal="true" data-price-previous="1925201088.2541378">$1,925,201,088</div> <small class="tw-hidden unconverted-data">
                                                                        95798.095
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    8.18%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="table-number">
                                                                    2
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <img alt="WOO Network" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/683/thumb/wootrade.jpg?1624621149">
                                                                        <a href="/en/exchanges/wootrade">WOO Network</a>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://x.woo.network/spot">
                                                                        {{ $Response['symbol'] }}/USDT
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="0.9994548148677293560118480996" data-is-anomaly="false" data-price-previous="20113.771289325632">$20,113.77</div>
                                                                    <small class="tw-hidden unconverted-data">20147.3 USDT</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.010427">
                                                                    0.01%
                                                                </td>
                                                                <td class="text-right" data-sort="21110147.8987109">
                                                                    $21,110,148
                                                                </td>
                                                                <td class="text-right" data-sort="25489865.3763401">
                                                                    $25,489,865
                                                                </td>
                                                                <td class="text-right" data-sort="0.85">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="9992.167186480555592761130735414754247388" data-no-decimal="true" data-price-previous="201089796.64095426">$201,089,797</div> <small class="tw-hidden unconverted-data">
                                                                        9997.618
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    0.85%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="table-number">
                                                                    3
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <img alt="Currency.com" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/512/thumb/Currency.com_200x200.png?1582086630">
                                                                        <a href="/en/exchanges/currency">Currency.com</a>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://exchange.currency.com/{{ $Response['symbol'] }}-to-usd">
                                                                        {{ $Response['symbol'] }}/USD
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="0.99739501330807025888065940796917106" data-is-anomaly="false" data-price-previous="20072.318312306492">$20,072.32</div>
                                                                    <small class="tw-hidden unconverted-data">20082 USD</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.010498">
                                                                    0.01%
                                                                </td>
                                                                <td class="text-right" data-sort="22365750.8350489900000000000000000000000049183039723364">
                                                                    $22,365,751
                                                                </td>
                                                                <td class="text-right" data-sort="22029767.1350313200000000000000000000000048483728337406">
                                                                    $22,029,767
                                                                </td>
                                                                <td class="text-right" data-sort="0.9">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="10520.4104622148880504935964134856925826897862976" data-no-decimal="true" data-price-previous="211720556.80658582">$211,720,557</div> <small class="tw-hidden unconverted-data">
                                                                        10547.888
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    0.90%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="table-number">
                                                                    4
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <img alt="Digifinex" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/225/thumb/DF_logo.png?1594264355">
                                                                        <a href="/en/exchanges/digifinex">Digifinex</a>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://www.digifinex.com/en-ww/trade/USDT/{{ $Response['symbol'] }}">
                                                                        {{ $Response['symbol'] }}/USDT
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="0.99820506454815297775" data-is-anomaly="false" data-price-previous="20088.62038532999">$20,088.62</div>
                                                                    <small class="tw-hidden unconverted-data">20103.85 USDT</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.014225">
                                                                    0.01%
                                                                </td>
                                                                <td class="text-right" data-sort="13883221.38238">
                                                                    $13,883,221
                                                                </td>
                                                                <td class="text-right" data-sort="22545875.9550377">
                                                                    $22,545,876
                                                                </td>
                                                                <td class="text-right" data-sort="1.17">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="13663.6791123212162439759935796925" data-no-decimal="true" data-price-previous="274978030.5699326">$274,978,031</div> <small class="tw-hidden unconverted-data">
                                                                        13688.249
                                                                        {{ $Response['symbol'] }}
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    1.17%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="">
                                                                <td class="table-number">
                                                                    5
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <img alt="WhiteBIT" width="20" height="20" class="mr-1" src="https://assets.coingecko.com/markets/images/418/thumb/wb_3_avatar-02.png?1611212424">
                                                                        <a href="/en/exchanges/whitebit">WhiteBIT</a>
                                                                    </div>
                                                                </td>
                                                                <td style="line-height: 1.6;">
                                                                    <a rel="nofollow noopener" target="_blank" class="mr-1" href="https://whitebit.com/trade/ETH_{{ $Response['symbol'] }}">
                                                                        ETH/{{ $Response['symbol'] }}
                                                                    </a>
                                                                </td>
                                                                <td class="text-right">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="1.0" data-is-anomaly="false" data-price-previous="20124.743">{{$Response["market_data"]["current_price"]["usd"] > 1 ? (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($Response["market_data"]["current_price"]["usd"] , 'USD') : sprintf("$%.6f", number_format($Response["market_data"]["current_price"]["usd"] ,6,'.',''))}}</div>
                                                                    <small class="tw-hidden unconverted-data">0.056405 {{ $Response['symbol'] }}</small>
                                                                </td>
                                                                <td class="text-right" data-sort="0.062091">
                                                                    0.06%
                                                                </td>
                                                                <td class="text-right" data-sort="22383384.1273079">
                                                                    $22,383,384
                                                                </td>
                                                                <td class="text-right" data-sort="10856614.9820211">
                                                                    $10,856,615
                                                                </td>
                                                                <td class="text-right" data-sort="0.23">
                                                                    <div data-target="price.price" data-price-{{ $Response['symbol'] }}="2657.718484855" data-no-decimal="true" data-price-previous="53485901.474056266">$53,485,901</div> <small class="tw-hidden unconverted-data">
                                                                        47118.491
                                                                        ETH
                                                                    </small>
                                                                </td>
                                                                <td class="text-right">
                                                                    0.23%
                                                                </td>
                                                                <td class="text-right tw-text-gray-500 tw-text-xs">
                                                                    Recently
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-green far fas fa-circle"></span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="center">
                                                        <a class="btn btn-primary btn-sm mt-3" data-action="click->gecko-table#showMore" data-target="gecko-table.showMore" data-url="https://www.coingecko.com/en/coins/1/trading_exchanges/show_more_tickers" href="#" style="display: none;">Show More</a>
                                                        <div class="py-3" style="display: none;" data-target="gecko-table.loading">Loading...</div>
                                                    </div>
                                                </div>
                                                <div class="pt-2">
                                                    <span>*</span>
                                                    <span class="pl-2">Anomaly - Trading price is an outlier against the average</span>
                                                </div>
                                                <div class="pt-2">
                                                    <span>**</span>
                                                    <span class="pl-2">Inactive - No trades in the last 3 hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-primary btn-sm mt-3" onclick="document.getElementById('navigationTabMarketsChoice').click()" data-toggle="tab" href="#markets"><span class="translation_missing" title="translation missing: en.coins.top_tickers.see_all_trading_pairs">See All Trading Pairs</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tw-mb-8">
                            <div id="coin-news-guides-panel"></div>
                            <div id="coin-news-guides" class="tw-h-auto" data-url="/en/coins/1/news_guides" data-target="coin-news-guides.newsGuidesContainer" data-controller="coin-news-guides">
                                <div class="tab-content inner-tab-scroller col-lg-12 tw-pb-4 tw-px-0">
                                    <div id="guides" data-controller="coin-guides-readmore">
                                        <h2 class="tw-text-lg md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">{{ $Response['id'] }} Guides</h2>
                                        <div data-target="coin-guides-readmore.tablebodyGuides" data-guidescount="28">
                                            <div class="tw-mt-4 tw-max-w-lg tw-mx-auto tw-grid tw-gap-5 lg:tw-grid-cols-3 lg:tw-max-w-none">
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="Rare Respite as Financial Markets Rally" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/posts/images/552/thumb/article_cover.ai_%288%29.png?1656323981">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <div class="tw-flex tw-items-center tw-gap-1">
                                                                <div class="tw-flex tw-items-center tw-gap-1">
                                                                    <div class="tw-text-sm tw-font-medium tw-mt-0">
                                                                        <a class="hover:tw-underline" href="/premium/category/market-coverage">Market Coverage</a>
                                                                    </div>
                                                                    <span data-view-component="true" class="tw-inline-flex tw-items-center tw-font-medium tw-bg-primary-100 tw-text-primary-800 hover:tw-bg-primary-200 hover:tw-text-primary-900 dark:tw-bg-white dark:tw-bg-opacity-12 hover:dark:tw-bg-opacity-24 dark:tw-text-primary-400 tw-px-2 tw-py-0.5 tw-rounded tw-text-xs">
                                                                        Premium
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <a class="tw-block tw-mt-2" href="/premium/publications/rare-respite-as-financial-markets-rally">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    Rare Respite as Financial Markets Rally
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    Financial markets rally last week, giving crypto a rare positive week amidst the bear market. Meanwhile, crypto lending firms seek bailout to survive.
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-flex-shrink-0">
                                                                <img class="tw-h-10 tw-w-10 tw-rounded-full" alt="Zhong Yang Chan" loading="lazy" src="https://secure.gravatar.com/avatar/46690c59721f818b380b24fef8e661e0?secure=true&amp;size=25" width="25" height="25">
                                                            </div>
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    Zhong Yang Chan
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        June 27, 2022
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="Fiscal Tightening Triggers Crypto Weekend Carnage" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/posts/images/549/thumb/article_cover.ai_%287%29.png?1655803938">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <div class="tw-flex tw-items-center tw-gap-1">
                                                                <div class="tw-flex tw-items-center tw-gap-1">
                                                                    <div class="tw-text-sm tw-font-medium tw-mt-0">
                                                                        <a class="hover:tw-underline" href="/premium/category/market-coverage">Market Coverage</a>
                                                                    </div>
                                                                    <span data-view-component="true" class="tw-inline-flex tw-items-center tw-font-medium tw-bg-primary-100 tw-text-primary-800 hover:tw-bg-primary-200 hover:tw-text-primary-900 dark:tw-bg-white dark:tw-bg-opacity-12 hover:dark:tw-bg-opacity-24 dark:tw-text-primary-400 tw-px-2 tw-py-0.5 tw-rounded tw-text-xs">
                                                                        Premium
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <a class="tw-block tw-mt-2" href="/premium/publications/fiscal-tightening-triggers-crypto-weekend-carnage">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    Fiscal Tightening Triggers Crypto Weekend Carnage
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    Collective Western fiscal tightening measures sent the crypto market into a downward spiral over the weekend, falling past previous cycle's ATHs.
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-flex-shrink-0">
                                                                <img class="tw-h-10 tw-w-10 tw-rounded-full" alt="Zhong Yang Chan" loading="lazy" src="https://secure.gravatar.com/avatar/46690c59721f818b380b24fef8e661e0?secure=true&amp;size=25" width="25" height="25">
                                                            </div>
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    Zhong Yang Chan
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        June 21, 2022
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="Markets Plunge on Surging Inflation; Celsius Pauses Withdrawals" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/posts/images/546/thumb/Picture9.png?1655108645">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <div class="tw-flex tw-items-center tw-gap-1">
                                                                <div class="tw-flex tw-items-center tw-gap-1">
                                                                    <div class="tw-text-sm tw-font-medium tw-mt-0">
                                                                        <a class="hover:tw-underline" href="/premium/category/market-coverage">Market Coverage</a>
                                                                    </div>
                                                                    <span data-view-component="true" class="tw-inline-flex tw-items-center tw-font-medium tw-bg-primary-100 tw-text-primary-800 hover:tw-bg-primary-200 hover:tw-text-primary-900 dark:tw-bg-white dark:tw-bg-opacity-12 hover:dark:tw-bg-opacity-24 dark:tw-text-primary-400 tw-px-2 tw-py-0.5 tw-rounded tw-text-xs">
                                                                        Premium
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <a class="tw-block tw-mt-2" href="/premium/publications/markets-plunge-on-surging-inflation-celsius-pauses-withdrawals">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    Markets Plunge on Surging Inflation; Celsius Pauses Withdrawals
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    Markets plunge on surging inflation, with ETH in particular badly hit. Due to extreme market conditions, Celsius pauses withdrawals sending stETH tumbling.
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-flex-shrink-0">
                                                                <img class="tw-h-10 tw-w-10 tw-rounded-full" alt="Zhong Yang Chan" loading="lazy" src="https://secure.gravatar.com/avatar/46690c59721f818b380b24fef8e661e0?secure=true&amp;size=25" width="25" height="25">
                                                            </div>
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    Zhong Yang Chan
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        June 13, 2022
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-justify-center tw-mt-6 tw-mb-8">
                                            <div class="tailwind-reset">
                                                <a data-action="click->coin-guides-readmore#showMoreGuides" data-target="coin-guides-readmore.showMoreGuides" data-url="https://www.coingecko.com/en/coins/1/trading_coins/show_more_guides" role="button" data-view-component="true" class="dark:focus:tw-text-white dark:hover:tw-bg-opacity-5 dark:hover:tw-bg-white dark:hover:tw-text-white dark:tw-border-opacity-10 dark:tw-border-white dark:tw-text-opacity-87 dark:tw-text-white disabled:tw-opacity-50 focus:tw-border-opacity-0 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 tw-bg-transparent tw-border tw-border-gray-300 tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-gray-700 tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="news" data-controller="coin-news-readmore">
                                        <h2 class="tw-text-lg md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">{{ $Response['id'] }} Latest News</h2>
                                        <div data-target="coin-news-readmore.tablebodyNews" data-newscount="100">
                                            <div class="tw-mt-4 tw-max-w-lg tw-mx-auto tw-grid tw-gap-5 lg:tw-grid-cols-3 lg:tw-max-w-none">
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="CleanSpark sold nearly all 339 {{ $Response['id'] }} it mined in June" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/article-images/568331.jpg">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <p class="tw-text-sm tw-font-medium tw-mt-0">
                                                                <a class="hover:tw-underline" href="/en/news">News</a>
                                                            </p>
                                                            <a rel="nofollow" class="tw-block tw-mt-2" target="_blank" href="https://www.theblock.co/post/156056/cleanspark-sold-nearly-all-339-{{ $Response['id'] }}-it-mined-in-june?utm_source=cryptopanic&amp;utm_medium=rss">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    CleanSpark sold nearly all 339 {{ $Response['id'] }} it mined in June
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    {{ $Response['id'] }} miner CleanSpark increased its mining production by about 10% in June and sold most of the {{ $Response['id'] }} mined last month. <span class="tw-text-primary-500"> (Read More...) </span>
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    The Block
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        39 minutes ago
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="{{ $Response['id'] }} is the ‘Holy Grail’ of accounting, says Core Scientific founder" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/article-images/568333.jpg">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <p class="tw-text-sm tw-font-medium tw-mt-0">
                                                                <a class="hover:tw-underline" href="/en/news">News</a>
                                                            </p>
                                                            <a rel="nofollow" class="tw-block tw-mt-2" target="_blank" href="https://www.theblock.co/post/155969/{{ $Response['id'] }}-is-the-holy-grail-of-accounting-says-core-scientific-founder?utm_source=cryptopanic&amp;utm_medium=rss">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    {{ $Response['id'] }} is the ‘Holy Grail’ of accounting, says Core Scientific founder
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    In this episode of The Scoop, Core Scientific founder Darin Feinstein explains the significance of the technology underlying the {{ $Response['id'] }} blockchain, and why ... <span class="tw-text-primary-500"> (Read More...) </span>
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    The Block
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        43 minutes ago
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tw-flex tw-flex-col tw-rounded-lg tw-shadow-lg tw-overflow-hidden">
                                                    <div class="tw-flex-shrink-0">
                                                        <img loading="lazy" alt="{{ $Response['id'] }} mining stocks rebound sharply despite a 70% drop in {{ $Response['symbol'] }} miners' revenue" class="tw-h-48 tw-w-full tw-object-cover" src="https://assets.coingecko.com/article-images/568292.jpg">
                                                    </div>
                                                    <div class="tw-flex-1 tw-bg-white tw-p-6 tw-flex tw-flex-col tw-justify-between dark:tw-bg-opacity-5">
                                                        <div class="tw-flex-1">
                                                            <p class="tw-text-sm tw-font-medium tw-mt-0">
                                                                <a class="hover:tw-underline" href="/en/news">News</a>
                                                            </p>
                                                            <a rel="nofollow" class="tw-block tw-mt-2" target="_blank" href="https://cointelegraph.com/news/{{ $Response['id'] }}-mining-stocks-rebound-sharply-despite-a-70-drop-in-{{ $Response['symbol'] }}-miners-revenue">
                                                                <h3 class="tw-text-xl tw-font-semibold tw-text-gray-900 dark:tw-text-white dark:tw-opacity-87">
                                                                    {{ $Response['id'] }} mining stocks rebound sharply despite a 70% drop in {{ $Response['symbol'] }} miners' revenue
                                                                </h3>
                                                                <p class="tw-mt-3 tw-text-base tw-text-gray-500 tw-hidden d-md-block dark:tw-text-white dark:tw-opacity-60">
                                                                    The rally across top {{ $Response['id'] }} mining stocks could trap bulls as {{ $Response['symbol'] }} price sentiment remains gloomy. <span class="tw-text-primary-500"> (Read More...) </span>
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <div class="tw-mt-6 tw-flex tw-items-center">
                                                            <div class="tw-ml-3">
                                                                <div class="tw-text-sm tw-font-medium tw-text-gray-900 tw-m-0 dark:tw-text-white dark:tw-opacity-87">
                                                                    CoinTelegraph
                                                                </div>
                                                                <div class="tw-flex tw-space-x-1 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-opacity-60">
                                                                    <time>
                                                                        1 hour ago
                                                                    </time>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tw-flex tw-justify-center tw-mt-6 tw-mb-8">
                                            <div class="tailwind-reset">
                                                <a data-action="click->coin-news-readmore#showMoreNews" data-target="coin-news-readmore.showMoreNews" data-url="https://www.coingecko.com/en/coins/1/trading_coins/show_more_news" role="button" data-view-component="true" class="dark:focus:tw-text-white dark:hover:tw-bg-opacity-5 dark:hover:tw-bg-white dark:hover:tw-text-white dark:tw-border-opacity-10 dark:tw-border-white dark:tw-text-opacity-87 dark:tw-text-white disabled:tw-opacity-50 focus:tw-border-opacity-0 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 tw-bg-transparent tw-border tw-border-gray-300 tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-gray-700 tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 tw-px-0 tw-mb-8">
                            <div class="tw-mb-16" data-gtm-vis-recent-on-screen-52934946_91="65702" data-gtm-vis-first-on-screen-52934946_91="65702" data-gtm-vis-total-visible-time-52934946_91="100" data-gtm-vis-has-fired-52934946_91="1">
                                <div class="tw-mb-4 tw-flex tw-flex-row tw-justify-between tw-self-center">
                                    <h2 class="tw-text-lg md:tw-text-2xl tw-font-bold tw-text-gray-900 dark:tw-text-white dark:tw-text-opacity-87">
                                        Trending Coins
                                    </h2>
                                    <div class="tailwind-reset md:tw-hidden">
                                        <span class="tw-text-sm tw-mr-2" data-target="index-trending-coins.pageLabel">1/2</span>
                                        <a href="#" data-action="index-trending-coins#nextPage" class="tw-inline-flex tw-items-center tw-px-3 tw-py-2 tw-border tw-border-gray-300 tw-text-sm tw-leading-4 tw-font-medium tw-rounded-full tw-h-8 tw-w-8 tw-text-gray-700 tw-bg-transparent hover:tw-bg-gray-50 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 focus:tw-border-opacity-0 dark:tw-text-white tw-mr-1 dark:hover:tw-bg-white dark:hover:tw-bg-opacity-10 dark:tw-border-white dark:tw-border-opacity-10"><i class="far tw-text-gray-700 dark:tw-text-white fa-far fa-angle-left"></i></a>
                                        <a href="#" data-action="index-trending-coins#nextPage" class="tw-inline-flex tw-items-center tw-px-3 tw-py-2 tw-border tw-border-gray-300 tw-text-sm tw-leading-4 tw-font-medium tw-rounded-full tw-h-8 tw-w-8 tw-text-gray-700 tw-bg-transparent hover:tw-bg-gray-50 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 focus:tw-border-opacity-0 dark:tw-text-white tw-mr-2 dark:hover:tw-bg-white dark:hover:tw-bg-opacity-10 dark:tw-border-white dark:tw-border-opacity-10"><i class="far tw-text-gray-700 dark:tw-text-white fa-far fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div data-target="index-trending-coins.firstPage">
                                    <div class="tw-flex tw-flex-col lg:tw-flex-row">
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="movez" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/movez">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/25661/small/JYwFw77.png?1654768153">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        MoveZ
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-danger" data-json="{&quot;aed&quot;:-18.419874681373813,&quot;ars&quot;:-17.421348660204934,&quot;aud&quot;:-16.812926506266987,&quot;bch&quot;:-19.954292336103176,&quot;bdt&quot;:-18.417775517606234,&quot;bhd&quot;:-18.409053687069683,&quot;bmd&quot;:-18.419874681373887,&quot;bnb&quot;:-21.72529815653168,&quot;brl&quot;:-15.818279978628999,&quot;{{ $Response['symbol'] }}&quot;:-17.854835829923204,&quot;cad&quot;:-17.157501206951117,&quot;chf&quot;:-17.28252960571426,&quot;clp&quot;:-12.689801566959282,&quot;cny&quot;:-18.394336428288845,&quot;czk&quot;:-15.560927628070779,&quot;dkk&quot;:-15.70048331943904,&quot;dot&quot;:-13.817617372597194,&quot;eos&quot;:-21.401396568671203,&quot;eth&quot;:-17.832148577445512,&quot;eur&quot;:-15.72183963138882,&quot;gbp&quot;:-16.484264193433493,&quot;hkd&quot;:-18.41039209984816,&quot;huf&quot;:-12.615109708838377,&quot;idr&quot;:-17.577837346450597,&quot;ils&quot;:-17.020868272745524,&quot;inr&quot;:-18.44986518631418,&quot;jpy&quot;:-18.679462522633848,&quot;krw&quot;:-17.562986717986806,&quot;kwd&quot;:-18.30025183151429,&quot;lkr&quot;:-18.51418335186296,&quot;ltc&quot;:-13.54741811870114,&quot;mmk&quot;:-18.417677214588064,&quot;mxn&quot;:-16.02802167746197,&quot;myr&quot;:-17.909651018362148,&quot;ngn&quot;:-18.374455793941813,&quot;nok&quot;:-15.677830657956743,&quot;nzd&quot;:-17.07744578213942,&quot;php&quot;:-16.751459654921387,&quot;pkr&quot;:-17.624683477112043,&quot;pln&quot;:-14.127033277179798,&quot;rub&quot;:-8.933634712421574,&quot;sar&quot;:-18.408354103408954,&quot;sek&quot;:-15.29785932205825,&quot;sgd&quot;:-17.3452629110877,&quot;thb&quot;:-16.10574918353779,&quot;try&quot;:-15.600018375793143,&quot;twd&quot;:-18.184753330379504,&quot;uah&quot;:-18.417663225614906,&quot;usd&quot;:-18.419874681373887,&quot;vef&quot;:-18.419874681373567,&quot;vnd&quot;:-18.009831780884653,&quot;xag&quot;:-10.589960481350644,&quot;xau&quot;:-14.744867035532415,&quot;xdr&quot;:-18.13005474010154,&quot;xlm&quot;:-13.826197267868961,&quot;xrp&quot;:-14.899748386336967,&quot;yfi&quot;:-25.67072890157719,&quot;zar&quot;:-14.660395012571637,&quot;bits&quot;:-17.85483582992319,&quot;link&quot;:-17.317987229761833,&quot;sats&quot;:-17.8548358299232}" data-coin-id="25661" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-18.4%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.00000121104736865445" data-price-previous="0.024372017054997062">$0.02437202</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="movez (MOVEZ) 7d chart" src="https://www.coingecko.com/coins/25661/sparkline">
                                            </div>
                                        </a>
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="webchain" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/mintme-com-coin">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/5127/small/Mintme-coin-logo-200x200.png?1576121042">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        MintMe.com Coin
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-green" data-json="{&quot;aed&quot;:24.554798391174952,&quot;ars&quot;:26.076214468253838,&quot;aud&quot;:27.038700426858686,&quot;bch&quot;:22.221901005056612,&quot;bdt&quot;:24.558003349721105,&quot;bhd&quot;:24.571319654885652,&quot;bmd&quot;:24.55479839117505,&quot;bnb&quot;:19.481590888506172,&quot;brl&quot;:28.533950755259024,&quot;{{ $Response['symbol'] }}&quot;:25.386699613363483,&quot;cad&quot;:26.500546835340486,&quot;chf&quot;:26.28932007991105,&quot;clp&quot;:33.10787652648916,&quot;cny&quot;:24.5863627453722,&quot;czk&quot;:28.850887832499676,&quot;dkk&quot;:28.651755540530978,&quot;dot&quot;:31.57080956974017,&quot;eos&quot;:20.054413554425864,&quot;eth&quot;:25.39294163827671,&quot;eur&quot;:28.620884301776268,&quot;gbp&quot;:27.50822548138414,&quot;hkd&quot;:24.56692672662758,&quot;huf&quot;:33.777345237370845,&quot;idr&quot;:25.834327732794097,&quot;ils&quot;:26.690771589231193,&quot;inr&quot;:24.50763439591959,&quot;jpy&quot;:24.1387858405144,&quot;krw&quot;:25.840900857310174,&quot;kwd&quot;:24.737436011417014,&quot;lkr&quot;:24.410809921024327,&quot;ltc&quot;:32.059558872062496,&quot;mmk&quot;:24.55815343667667,&quot;mxn&quot;:28.318421498438795,&quot;myr&quot;:25.33379701654625,&quot;ngn&quot;:24.6241429814797,&quot;nok&quot;:28.633509725673818,&quot;nzd&quot;:26.63756723891645,&quot;php&quot;:27.118033481780664,&quot;pkr&quot;:25.768879391202976,&quot;pln&quot;:31.05563494881266,&quot;rub&quot;:39.038187601577626,&quot;sar&quot;:24.585662762926663,&quot;sek&quot;:29.310297594634328,&quot;sgd&quot;:26.193966701876608,&quot;thb&quot;:28.227806373292164,&quot;try&quot;:28.8451174108057,&quot;twd&quot;:24.856563611018544,&quot;uah&quot;:24.55817479474311,&quot;usd&quot;:24.55479839117505,&quot;vef&quot;:24.55479839117475,&quot;vnd&quot;:25.18084316130345,&quot;xag&quot;:36.17959342549699,&quot;xau&quot;:30.016218005642255,&quot;xdr&quot;:24.99728930687177,&quot;xlm&quot;:31.572901233464385,&quot;xrp&quot;:30.01899524989001,&quot;yfi&quot;:13.389029811091756,&quot;zar&quot;:30.3134388414688,&quot;bits&quot;:25.3866996133635,&quot;link&quot;:26.185505757122833,&quot;sats&quot;:25.38669961336349}" data-coin-id="5127" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">24.6%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.000000862841638687384" data-price-previous="0.01736446622828246">$0.01736447</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="mintme.com coin (MINTME) 7d chart" src="https://www.coingecko.com/coins/5127/sparkline">
                                            </div>
                                        </a>
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="ceek" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/ceek-smart-vr-token">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/2581/small/ceek-smart-vr-token-logo.png?1547036714">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        CEEK Smart VR
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-green" data-json="{&quot;aed&quot;:64.49453276394276,&quot;ars&quot;:66.5054666137092,&quot;aud&quot;:67.82904881139146,&quot;bch&quot;:60.81698863240766,&quot;bdt&quot;:64.4987654243101,&quot;bhd&quot;:64.51635173510951,&quot;bmd&quot;:64.49453276394325,&quot;bnb&quot;:57.7185435344476,&quot;brl&quot;:69.74027250015475,&quot;{{ $Response['symbol'] }}&quot;:65.55326209409512,&quot;cad&quot;:67.0665310825631,&quot;chf&quot;:66.80560601390361,&quot;clp&quot;:76.04839709030291,&quot;cny&quot;:64.54602696050695,&quot;czk&quot;:70.311821162516,&quot;dkk&quot;:69.9994583770009,&quot;dot&quot;:73.51154210326388,&quot;eos&quot;:58.514291085114486,&quot;eth&quot;:65.44511119592099,&quot;eur&quot;:69.94206290404327,&quot;gbp&quot;:68.40582742628311,&quot;hkd&quot;:64.50585343095734,&quot;huf&quot;:76.2156505840888,&quot;idr&quot;:66.1923793587724,&quot;ils&quot;:67.31542700285537,&quot;inr&quot;:64.43406124495147,&quot;jpy&quot;:63.96207455434282,&quot;krw&quot;:66.22232350485973,&quot;kwd&quot;:64.73573495281754,&quot;lkr&quot;:64.30437295936893,&quot;ltc&quot;:74.19098947121174,&quot;mmk&quot;:64.49896363813903,&quot;mxn&quot;:69.30187997377983,&quot;myr&quot;:65.52332504299866,&quot;ngn&quot;:64.58611338652219,&quot;nok&quot;:70.04895740208725,&quot;nzd&quot;:67.26937853734582,&quot;php&quot;:67.85865054582571,&quot;pkr&quot;:66.09792090648561,&quot;pln&quot;:73.15977650137292,&quot;rub&quot;:83.62216471210195,&quot;sar&quot;:64.51776234445757,&quot;sek&quot;:70.81030270535062,&quot;sgd&quot;:66.65112294846412,&quot;thb&quot;:69.22274686947516,&quot;try&quot;:70.16808798696809,&quot;twd&quot;:64.98249411397138,&quot;uah&quot;:64.49899184488156,&quot;usd&quot;:64.49453276394325,&quot;vef&quot;:64.49453276394307,&quot;vnd&quot;:65.32132501347282,&quot;xag&quot;:80.35301537382105,&quot;xau&quot;:71.87652216045929,&quot;xdr&quot;:65.07891279080667,&quot;xlm&quot;:73.832794637507,&quot;xrp&quot;:71.82877407501638,&quot;yfi&quot;:49.616387813666115,&quot;zar&quot;:72.07820161303509,&quot;bits&quot;:65.55326209409509,&quot;link&quot;:66.67336436427703,&quot;sats&quot;:65.55326209409509}" data-coin-id="2581" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">64.5%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.0000164189633612589" data-price-previous="0.3304274179717515">$0.330427</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="ceek smart vr (CEEK) 7d chart" src="https://www.coingecko.com/coins/2581/sparkline">
                                            </div>
                                        </a>
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="evmos" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/evmos">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/24023/small/evmos.png?1653958927">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        Evmos
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-green" data-json="{&quot;aed&quot;:43.50410056005438,&quot;ars&quot;:45.23773714635914,&quot;aud&quot;:46.38004111554142,&quot;bch&quot;:40.49593119799233,&quot;bdt&quot;:43.50779310903238,&quot;bhd&quot;:43.52313530716611,&quot;bmd&quot;:43.50410056005485,&quot;bnb&quot;:37.45579628832059,&quot;brl&quot;:48.0804542538131,&quot;{{ $Response['symbol'] }}&quot;:44.460008778195736,&quot;cad&quot;:45.7380464635832,&quot;chf&quot;:45.501714280765455,&quot;clp&quot;:53.58362648889716,&quot;cny&quot;:43.54902380605914,&quot;czk&quot;:48.58119473904877,&quot;dkk&quot;:48.285567796248884,&quot;dot&quot;:51.481591449550045,&quot;eos&quot;:38.27331391387306,&quot;eth&quot;:44.328619812758376,&quot;eur&quot;:48.23824244409292,&quot;gbp&quot;:46.911456897376816,&quot;hkd&quot;:43.50938592584807,&quot;huf&quot;:53.704734434588005,&quot;idr&quot;:44.98529233212148,&quot;ils&quot;:45.96503274867067,&quot;inr&quot;:43.45134554870823,&quot;jpy&quot;:43.01140993742646,&quot;krw&quot;:45.01141543590534,&quot;kwd&quot;:43.71452398620707,&quot;lkr&quot;:43.338206221443,&quot;ltc&quot;:52.04383029596067,&quot;mmk&quot;:43.5079660296572,&quot;mxn&quot;:47.70329571323262,&quot;myr&quot;:44.40161312894246,&quot;ngn&quot;:43.58399497752309,&quot;nok&quot;:48.307049383898445,&quot;nzd&quot;:45.895634111114916,&quot;php&quot;:46.43893789692773,&quot;pkr&quot;:44.90288731228288,&quot;pln&quot;:51.03312127911778,&quot;rub&quot;:60.190938550612415,&quot;sar&quot;:43.52436591478781,&quot;sek&quot;:48.99446571049941,&quot;sgd&quot;:45.38654540211421,&quot;thb&quot;:47.59715243131291,&quot;try&quot;:48.50099582916354,&quot;twd&quot;:43.929320624188605,&quot;uah&quot;:43.507990637060075,&quot;usd&quot;:43.50410056005485,&quot;vef&quot;:43.50410056005405,&quot;vnd&quot;:44.22538944501142,&quot;xag&quot;:57.33213519908538,&quot;xau&quot;:49.96592159023653,&quot;xdr&quot;:44.01391039221764,&quot;xlm&quot;:51.5884288328311,&quot;xrp&quot;:49.86805080539105,&quot;yfi&quot;:30.537761703133633,&quot;zar&quot;:50.12097475229087,&quot;bits&quot;:44.46000877819574,&quot;link&quot;:45.374876202954944,&quot;sats&quot;:44.460008778195736}" data-coin-id="24023" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">43.5%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.00013298693312483" data-price-previous="2.6763278514953908">$2.68</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="evmos (EVMOS) 7d chart" src="https://www.coingecko.com/coins/24023/sparkline">
                                            </div>
                                        </a>
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="catecoin" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/catecoin">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/15364/small/logo.png?1620647627">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        CateCoin
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-green" data-json="{&quot;aed&quot;:0.8416436700660292,&quot;ars&quot;:2.0759272020993116,&quot;aud&quot;:2.8280011883644347,&quot;bch&quot;:-1.0459323537799707,&quot;bdt&quot;:0.8442384579978466,&quot;bhd&quot;:0.8550195609157256,&quot;bmd&quot;:0.8416436700660122,&quot;bnb&quot;:-3.270073366217919,&quot;brl&quot;:4.057489257008416,&quot;{{ $Response['symbol'] }}&quot;:1.5388002993922032,&quot;cad&quot;:2.4020704969320907,&quot;chf&quot;:2.247522202387872,&quot;clp&quot;:7.924618707801432,&quot;cny&quot;:0.8732116458137471,&quot;czk&quot;:4.375603919511138,&quot;dkk&quot;:4.203098358308495,&quot;dot&quot;:6.529932437423853,&quot;eos&quot;:-2.810720006883667,&quot;eth&quot;:1.4912703032851904,&quot;eur&quot;:4.176699703104871,&quot;gbp&quot;:3.2342624892518415,&quot;hkd&quot;:0.8533651414847006,&quot;huf&quot;:8.016945726328593,&quot;idr&quot;:1.8824906723667096,&quot;ils&quot;:2.5709632218567404,&quot;inr&quot;:0.8045722411994055,&quot;jpy&quot;:0.5207657051550315,&quot;krw&quot;:1.900847616266579,&quot;kwd&quot;:0.9895101357426392,&quot;lkr&quot;:0.7250682013800888,&quot;ltc&quot;:6.863155435870978,&quot;mmk&quot;:0.8443599709016836,&quot;mxn&quot;:3.7982263841721577,&quot;myr&quot;:1.4723339591100546,&quot;ngn&quot;:0.8977862077785672,&quot;nok&quot;:4.231099438331622,&quot;nzd&quot;:2.5010274498808513,&quot;php&quot;:2.9039807029419085,&quot;pkr&quot;:1.82458391141206,&quot;pln&quot;:6.148048649502613,&quot;rub&quot;:12.567637311061358,&quot;sar&quot;:0.8558843201441537,&quot;sek&quot;:4.700784106133532,&quot;sgd&quot;:2.1699772169882126,&quot;thb&quot;:3.7021469844352373,&quot;try&quot;:4.327283630259037,&quot;twd&quot;:1.1322784711719212,&quot;uah&quot;:0.8443772627487232,&quot;usd&quot;:0.8416436700660122,&quot;vef&quot;:0.841643670065869,&quot;vnd&quot;:1.3484999650162195,&quot;xag&quot;:10.520243876208053,&quot;xau&quot;:5.384340927017217,&quot;xdr&quot;:1.1998917008463017,&quot;xlm&quot;:6.572812872266748,&quot;xrp&quot;:5.2263989621809035,&quot;yfi&quot;:-8.120021254774896,&quot;zar&quot;:5.488757261342327,&quot;bits&quot;:1.5388002993921963,&quot;link&quot;:2.2343114670701194,&quot;sats&quot;:1.5388002993922083}" data-coin-id="15364" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">0.8%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.0000000000162939040001606" data-price-previous="3.27910630469904e-7">$0.000000327911</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="catecoin (CATE) 7d chart" src="https://www.coingecko.com/coins/15364/sparkline">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tw-hidden lg:tw-block" data-target="index-trending-coins.secondPage">
                                    <div class="tw-flex tw-flex-col lg:tw-flex-row">
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="ethos" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/voyager-token">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/794/small/Voyager-vgx.png?1575693595">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        Voyager VGX
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-danger" data-json="{&quot;aed&quot;:-27.124802841754715,&quot;ars&quot;:-26.232823571361436,&quot;aud&quot;:-25.689322513346212,&quot;bch&quot;:-28.592747998217487,&quot;bdt&quot;:-27.122927667221532,&quot;bhd&quot;:-27.115136491154203,&quot;bmd&quot;:-27.12480284175453,&quot;bnb&quot;:-30.108221827162073,&quot;brl&quot;:-24.800808778888502,&quot;{{ $Response['symbol'] }}&quot;:-26.625211688545157,&quot;cad&quot;:-25.997129704742633,&quot;chf&quot;:-26.108817069460876,&quot;clp&quot;:-22.00615162231678,&quot;cny&quot;:-27.10198962319997,&quot;czk&quot;:-24.5709169613307,&quot;dkk&quot;:-24.69558149798419,&quot;dot&quot;:-23.02615870958264,&quot;eos&quot;:-29.774923694572035,&quot;eth&quot;:-26.691947372745684,&quot;eur&quot;:-24.71465900537805,&quot;gbp&quot;:-25.39572979388589,&quot;hkd&quot;:-27.11633208989539,&quot;huf&quot;:-21.93942968648429,&quot;idr&quot;:-26.372614284094897,&quot;ils&quot;:-25.87507605528259,&quot;inr&quot;:-27.151593238948507,&quot;jpy&quot;:-27.35669161414634,&quot;krw&quot;:-26.35934827754013,&quot;kwd&quot;:-27.017944232085984,&quot;lkr&quot;:-27.20904839701453,&quot;ltc&quot;:-22.773202380472572,&quot;mmk&quot;:-27.12283985353129,&quot;mxn&quot;:-24.98817019314291,&quot;myr&quot;:-26.669022099918987,&quot;ngn&quot;:-27.08423033266161,&quot;nok&quot;:-24.675345966778806,&quot;nzd&quot;:-25.92561651640237,&quot;php&quot;:-25.6344144227665,&quot;pkr&quot;:-26.414461743812804,&quot;pln&quot;:-23.29002491664304,&quot;rub&quot;:-18.650782909476387,&quot;sar&quot;:-27.11451155588961,&quot;sek&quot;:-24.335919103802894,&quot;sgd&quot;:-26.164856478319777,&quot;thb&quot;:-25.05760386105871,&quot;try&quot;:-24.60583656872565,&quot;twd&quot;:-26.9147698865111,&quot;uah&quot;:-27.12282735723791,&quot;usd&quot;:-27.12480284175453,&quot;vef&quot;:-27.124802841754853,&quot;vnd&quot;:-26.758513171326047,&quot;xag&quot;:-20.130372043441444,&quot;xau&quot;:-23.841933322950663,&quot;xdr&quot;:-26.86590785626549,&quot;xlm&quot;:-23.022494540343796,&quot;xrp&quot;:-23.927849178458736,&quot;yfi&quot;:-33.65038962791895,&quot;zar&quot;:-23.76647480528346,&quot;bits&quot;:-26.625211688545157,&quot;link&quot;:-26.17645310192207,&quot;sats&quot;:-26.625211688545154}" data-coin-id="794" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-27.1%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.0000103998941556587" data-price-previous="0.2092951971098333">$0.209295</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="voyager vgx (VGX) 7d chart" src="https://www.coingecko.com/coins/794/sparkline">
                                            </div>
                                        </a>
                                        <a class="tw-rounded-md tw-shadow-md tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-flex-wrap tw-h-40" data-action="click->application#gtagEventTrackLink" data-destination="revv" data-event-category="click_coin_in_bottom_trendings" href="/en/coins/revv">
                                            <div class="tw-mr-1">
                                                <img loading="lazy" class="tw-h-8 tw-w-8" width="18" height="18" src="https://assets.coingecko.com/coins/images/12373/small/REVV_TOKEN_Refined_2021_%281%29.png?1627652390">
                                            </div>
                                            <div class="tw-flex-grow">
                                                <div class="tw-flex">
                                                    <div class="tw-font-medium tw-text-gray-500 tw-text-xs dark:tw-text-white dark:tw-bg-opacity-50 tw-mb-0 tw-flex-grow">
                                                        REVV
                                                    </div>
                                                    <span class="tw-text-right tw-text-xs"><span class="text-danger" data-json="{&quot;aed&quot;:-6.498589415647678,&quot;ars&quot;:-5.369022625378175,&quot;aud&quot;:-4.624744015792715,&quot;bch&quot;:-8.458589705059135,&quot;bdt&quot;:-6.4961835015536264,&quot;bhd&quot;:-6.486187151892733,&quot;bmd&quot;:-6.49858941564739,&quot;bnb&quot;:-10.439417439679023,&quot;brl&quot;:-3.5168242672693433,&quot;{{ $Response['symbol'] }}&quot;:-5.8757586642156845,&quot;cad&quot;:-5.04304150911475,&quot;chf&quot;:-5.197025906589796,&quot;clp&quot;:0.06881798727842542,&quot;cny&quot;:-6.4693192634145555,&quot;czk&quot;:-3.190562219540375,&quot;dkk&quot;:-3.3831806607601838,&quot;dot&quot;:-1.3007821879753918,&quot;eos&quot;:-9.906756345895593,&quot;eth&quot;:-5.961366347589646,&quot;eur&quot;:-3.4140159272488515,&quot;gbp&quot;:-4.278495197713818,&quot;hkd&quot;:-6.49514568717418,&quot;huf&quot;:0.14772697810775706,&quot;idr&quot;:-5.533505355375465,&quot;ils&quot;:-4.895146516873055,&quot;inr&quot;:-6.5329624262934285,&quot;jpy&quot;:-6.8196065016933645,&quot;krw&quot;:-5.516484607932713,&quot;kwd&quot;:-6.361486105787657,&quot;lkr&quot;:-6.606679390830187,&quot;ltc&quot;:-0.9344503199692019,&quot;mmk&quot;:-6.496070833537326,&quot;mxn&quot;:-3.7625653674928405,&quot;myr&quot;:-5.913806884133177,&quot;ngn&quot;:-6.44653347646557,&quot;nok&quot;:-3.369184135650543,&quot;nzd&quot;:-4.940363834557866,&quot;php&quot;:-4.586369278645782,&quot;pkr&quot;:-5.587197100517744,&quot;pln&quot;:-1.5929870335287386,&quot;rub&quot;:4.373872654917299,&quot;sar&quot;:-6.4853853382298725,&quot;sek&quot;:-2.921291734352862,&quot;sgd&quot;:-5.272065243913836,&quot;thb&quot;:-3.8317239946317994,&quot;try&quot;:-3.2428165535442863,&quot;twd&quot;:-6.2215333897212215,&quot;uah&quot;:-6.4960548003586736,&quot;usd&quot;:-6.49858941564739,&quot;vef&quot;:-6.4985894156479125,&quot;vnd&quot;:-6.028627038829926,&quot;xag&quot;:2.5111931572036346,&quot;xau&quot;:-2.2883307616601662,&quot;xdr&quot;:-6.166418151892829,&quot;xlm&quot;:-1.2311713127395116,&quot;xrp&quot;:-2.352099367590836,&quot;yfi&quot;:-14.946926212333372,&quot;zar&quot;:-2.1873044543207567,&quot;bits&quot;:-5.8757586642156845,&quot;link&quot;:-5.279668417464437,&quot;sats&quot;:-5.875758664215687}" data-coin-id="12373" data-up-class="text-green" data-down-class="text-danger" data-24h="false" data-target="percent-change.percent" data-show-solid-arrow="false">-6.5%</span></span>
                                                </div>
                                                <div class="tw-text-gray-900 dark:tw-text-white tw-text-base" data-target="price.price" data-price-{{ $Response['symbol'] }}="0.000000894670842745724" data-price-previous="0.018005020779851107">$0.01800502</div>
                                            </div><br>
                                            <div class="tw-flex-grow tw-text-center tw-hidden lg:tw-block">
                                                <img loading="lazy" class="tw-h-16 tw-w-36 xl:tw-w-44 tw-hidden lg:tw-block" alt="revv (REVV) 7d chart" src="https://www.coingecko.com/coins/12373/sparkline">
                                            </div>
                                        </a>

                                        <a style="background-image: url(https://static.coingecko.com/s/more_coins_bg_image-fae6b7ef974cae0d8d6b551ad66e82306f47829318211cbc7e768027df24c513.png); background-repeat:no-repeat; background-size: cover;" class="tw-hidden lg:tw-block tw-rounded-md tw-shadow tw-py-4 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-h-40" href="/en/watchlists/trending-crypto">
                                            <div class="tw-flex">
                                                <div class="tw-mr-1 tw-text-sm tw-text-white">
                                                    <i class="far fa-search"></i>
                                                </div>
                                                <div class="tw-text-sm">
                                                    <span class="tw-text-white">More Coins</span>
                                                </div>
                                            </div>
                                        </a> <a class="tw-block lg:tw-hidden tw-rounded-md tw-shadow tw-py-6 tw-mb-2 tw-h-20 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2" href="/en/watchlists/trending-crypto">
                                            <div class="tw-mr-1 tw-text-sm tw-text-gray-700 dark:tw-text-white">
                                                <i class="far fa-search"></i>
                                            </div>
                                            <div>
                                                <div class="tw-text-sm">
                                                    <span class="tw-text-gray-700 dark:tw-text-white">More Coins</span>
                                                </div>
                                            </div>
                                        </a> <a style="background-image: url(https://static.coingecko.com/s/top_categories_bg-2760b2e3b4a8d0d1c61f67ebd1bdb074044b42fe919ae4607041e1aa5087c1c5.png); background-repeat:no-repeat; background-size: cover;" class="tw-hidden lg:tw-block tw-rounded-md tw-shadow tw-py-4 tw-mb-2 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-h-40" href="/en/categories">
                                            <div class="tw-flex">
                                                <div class="tw-mr-1 tw-text-sm tw-text-white">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                                <div>
                                                    <div class="tw-text-sm">
                                                        <span class="tw-text-white">Top Categories</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> <a class="tw-block lg:tw-hidden tw-rounded-md tw-shadow tw-py-6 tw-mb-2 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-h-20" href="/en/categories">
                                            <div class="tw-flex">
                                                <div class="tw-mr-1 tw-text-sm tw-text-gray-700 dark:tw-text-white">
                                                    <i class="far fa-list-alt"></i>
                                                </div>
                                                <div>
                                                    <div class="tw-text-sm">
                                                        <span class="tw-text-gray-700 dark:tw-text-white">Top Categories</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> <a style="background-image: url(https://static.coingecko.com/s/recently_added_bg-62a798739235c30979d3f98563ce72825269f417151c0a0bc1ba2ae745847cc8.png); background-repeat:no-repeat; background-size: cover;" class="tw-hidden lg:tw-block tw-rounded-md tw-shadow tw-py-4 tw-mb-2 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-h-40" href="/en/new-cryptocurrencies">
                                            <div class="tw-flex">
                                                <div class="tw-mr-1 tw-text-sm tw-text-white">
                                                    <i class="far fa-calendar-plus-o"></i>
                                                </div>
                                                <div>
                                                    <div class="tw-text-sm">
                                                        <span class="tw-text-white">Recently Added</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> <a class="tw-block lg:tw-hidden tw-rounded-md tw-shadow tw-py-6 tw-mb-2 tw-bg-white dark:tw-bg-opacity-5 tw-px-4 tw-flex tw-flex-row tw-items-center tw-flex-1 tw-mr-2 tw-h-20" href="/en/new-cryptocurrencies">
                                            <div class="tw-flex">
                                                <div class="tw-mr-1 tw-text-sm tw-text-gray-700 dark:tw-text-white">
                                                    <i class="far fa-calendar-plus-o"></i>
                                                </div>
                                                <div>
                                                    <div class="tw-text-sm">
                                                        <span class="tw-text-gray-700 dark:tw-text-white">Recently Added</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="social">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="security">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="developer">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="widgets">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="guides">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="ratings">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="analysis">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="beam">
                        <div class="card-block">
                            <div class="text-muted text-center p-4">
                                Loading...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="markets">
                <div class="text-muted text-center p-4">
                    Loading...
                </div>
            </div>
        </div>
        <div class="modal fade" id="new_transaction_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content portfolio-coin-transaction-form">
                    <div class="modal-header header-content border-bottom-0">
                        <div>
                            <button type="button" class="close float-left" data-dismiss="modal">
                                <span class="text-5xl font-light" style="color: #707070;">×</span>
                            </button>
                        </div>
                    </div>
                    <div class="tw-text-2xl modal-title title-content font-bold" id="myModalLabel">
                        Add Transaction to
                        <span class="js-portfolio-title"></span>
                    </div>
                    <div class="modal-body tab-content body-content">
                        <ul class="nav row pct-table-tabs border-bottom nav nav-tabs pl-0 pb-0" role="tablist" data-tab-switch-id="innerTab" data-controller="tab-switch" data-tab-switch-home="#browse-rewards">
                            <li class="col-4 p-0">
                                <a class="text-center nav-item nav-link active border-left-0 border-top-0 border-right-0 text-black text-xl p-0 pb-2 pl-0" role="tab" aria-selected="true" aria-control="#nav-buy" data-toggle="tab" data-action="click->portfolio-coin-transactions-new#toggleTransactionForm" data-type="buy" href="#nav-transaction-form">Buy</a>
                            </li>
                            <li class="col-4 p-0">
                                <a class="text-center nav-item nav-link border-left-0 border-top-0 border-right-0 text-black text-xl p-0 pb-2 pl-0" role="tab" aria-selected="false" aria-control="#nav-sell" data-toggle="tab" data-action="click->portfolio-coin-transactions-new#toggleTransactionForm" data-type="sell" href="#nav-transaction-form">Sell</a>
                            </li>
                            <li class="col-4 p-0">
                                <a class="text-center nav-item nav-link border-top-0 border-left-0 border-right-0 text-black text-xl p-0 pb-2 pl-0" role="tab" aria-selected="false" aria-control="#nav-transfer" data-toggle="tab" data-action="click->portfolio-coin-transactions-new#toggleTransactionForm" href="#nav-transaction-form">Transfer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-transaction-form" aria-labelledby="nav-buy-tab">
                                <form class="new_portfolio_coin_transaction" id="portfolio-coin-transactions-new_new_portfolio_coin_transaction" role="form" data-target="portfolio-coin-transactions-new.form" data-action="ajax:success->portfolio-coin-transactions-new#onPostSuccess ajax:error->portfolio-coin-transactions-new#onPostError" data-model="portfolio_coin_transaction" action="/" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                                    <input step="any" class="form-control" data-target="portfolio-coin-transactions-new.priceInputField" type="hidden" name="portfolio_coin_transaction[price]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_price">
                                    <div class="form-group">
                                        <div class="tw-flex tw-justify-between">
                                            <label class="control-label font-weight-bold label-required" data-target="portfolio-coin-transactions-new.previewSpentInputLabel" for="portfolio-coin-transactions-new_portfolio_coin_transaction_preview_spent_input">
                                                Price Per Coin
                                            </label> <br>
                                            <a href="#" class="text-normal toggle" data-target="portfolio-coin-transactions-new.toggleSpent" data-total-spent-text="Total Spent" data-total-received-text="Total Received" data-price-per-coin-text="Price Per Coin" data-action="click->portfolio-coin-transactions-new#togglePreviewSpent">
                                                <span class="fas fa-exchange"></span>
                                                Total Spent
                                            </a>
                                        </div>
                                        <div class="tw-justify-center d-inline">
                                            <a href="#" class="btn coingecko dropdown-toggle absolute tw-mt-1" data-toggle="dropdown" data-flip="false">
                                                <span data-target="portfolio-coin-transactions-new.currencyButton">USD</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-popup dropdown-menu-content mt-2 tw-overflow-y-auto tw-h-full" style="z-index: 10000001;">
                                                <div data-target="portfolio-coin-transactions-new.currencyList searchable.itemList" data-controller="searchable">
                                                    <div class="d-lg-none ml-1 row mb-3 mr-0 mt-2">
                                                        <span class="col-2">
                                                            <i class="far mr-1 dropdown-close-button text-black fa-fa fa-long-arrow-left fa-lg"></i>
                                                        </span>
                                                        <span class="dropdown-menu-secondary-title center col-8">Currencies</span>
                                                    </div>
                                                    <div class="col-12 col-lg-5 mt-2">
                                                        <input type="text" class="form-control text-normal currency-selector-search-bar tw-border tw-border-gray-300 dark:tw-bg-black" placeholder="Search..." data-target="searchable.searchInput" data-action="keyup->searchable#filterItems click->searchable#preventCollapse">
                                                    </div>
                                                    <div class="pt-3 pb-2">
                                                        <span class="ml-3 dropdown-menu-secondary-title">Cryptocurrencies</span>
                                                    </div>
                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="{{ $Response['symbol'] }}" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">{{ $Response['symbol'] }}</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">{{ $Response['id'] }}</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eth" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ETH</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Ether</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ltc" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LTC</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Litecoin</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bch" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BCH</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">{{ $Response['id'] }} Cash</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bnb" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BNB</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Binance Coin</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eos" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">EOS</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">EOS</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xrp" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XRP</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">XRP</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xlm" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XLM</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Lumens</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="link" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LINK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Chainlink</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="dot" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">DOT</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Polkadot</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="yfi" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">YFI</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Yearn.finance</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-3 pb-2">
                                                        <span class="ml-3 dropdown-menu-secondary-title">{{ $Response['id'] }} Units <span class="badge bg-warning text-dark">New</span></span>
                                                    </div>
                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bits" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BITS</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Bits</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sats" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SATS</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Satoshi</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-3 pb-2">
                                                        <span class="ml-3 dropdown-menu-secondary-title">Suggested Currencies</span>
                                                    </div>
                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="usd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">USD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">US Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="idr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">IDR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Indonesian Rupiah</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="twd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">TWD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">New Taiwan Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="eur" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">EUR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Euro</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="krw" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">KRW</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">South Korean Won</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="jpy" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">JPY</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Japanese Yen</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="rub" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">RUB</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Russian Ruble</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="cny" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CNY</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Chinese Yuan</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-3 pb-2">
                                                        <span class="ml-3 mb-0 dropdown-menu-secondary-title">Fiat Currencies</span>
                                                    </div>
                                                    <ul class="tw-flex flex-wrap p-0 m-0 b-b nav pb-2">
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="aed" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">AED</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">United Arab Emirates Dirham</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ars" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ARS</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Argentine Peso</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="aud" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">AUD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Australian Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bdt" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BDT</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Bangladeshi Taka</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bhd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BHD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Bahraini Dinar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="bmd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BMD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Bermudian Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="brl" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">BRL</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Brazil Real</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="cad" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CAD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Canadian Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="chf" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CHF</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Swiss Franc</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="clp" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CLP</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Chilean Peso</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="czk" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">CZK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Czech Koruna</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="dkk" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">DKK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Danish Krone</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="gbp" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">GBP</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">British Pound Sterling</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="hkd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">HKD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Hong Kong Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="huf" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">HUF</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Hungarian Forint</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ils" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ILS</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Israeli New Shekel</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="inr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">INR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Indian Rupee</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="kwd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">KWD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Kuwaiti Dinar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="lkr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">LKR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Sri Lankan Rupee</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="mmk" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MMK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Burmese Kyat</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="mxn" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MXN</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Mexican Peso</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="myr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">MYR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Malaysian Ringgit</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="ngn" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NGN</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Nigerian Naira</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="nok" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NOK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Norwegian Krone</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="nzd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">NZD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">New Zealand Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="php" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PHP</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Philippine Peso</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="pkr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PKR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Pakistani Rupee</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="pln" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">PLN</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Polish Zloty</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sar" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SAR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Saudi Riyal</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sek" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SEK</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Swedish Krona</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="sgd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">SGD</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Singapore Dollar</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="thb" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">THB</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Thai Baht</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="try" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">TRY</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Turkish Lira</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="uah" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">UAH</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Ukrainian hryvnia</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="vef" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">VEF</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Venezuelan bolívar fuerte</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="vnd" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">VND</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Vietnamese đồng</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="zar" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">ZAR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">South African Rand</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xdr" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XDR</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">IMF Special Drawing Rights</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="pt-3 pb-2">
                                                        <span class="ml-3 mb-0 dropdown-menu-secondary-title">Commodities</span>
                                                    </div>
                                                    <ul class="tw-flex flex-wrap p-0 m-0 nav">
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xag" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XAG</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Silver - Troy Ounce</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-6 col-md-3 col-lg-4">
                                                            <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="xau" data-action="click->portfolio-coin-transactions-new#selectCurrency">
                                                                <div class="justify-content-md-between">
                                                                    <span class="text-muted" style="display: inline-block; width: 25px;">XAU</span>
                                                                    <br class="d-block d-sm-none">
                                                                    <span class="d-md-inline currency-name">Gold - Troy Ounce</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="number" name="preview_spent_input" id="preview_spent_input" step="any" required="required" class="form-control tw-pl-20" data-target="portfolio-coin-transactions-new.previewSpentInputField">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group tw-hidden" data-target="portfolio-coin-transactions-new.transferInputField">
                                        <label class="control-label font-weight-bold" for="portfolio-coin-transactions-new_portfolio_coin_transaction_transfer">Transfer</label><br>
                                        <select name="transaction_type_transfer" id="portfolio-coin-transactions-new.transaction_type_transfer" class="form-control" data-target="portfolio-coin-transactions-new.transferTypeSelection" data-action="change->portfolio-coin-transactions-new#updateTransactionType">
                                            <option selected="selected" value="transfer_in">Transfer In</option>
                                            <option value="transfer_out">Transfer Out</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="tw-flex tw-mb-2 tw-items-center tw-justify-between">
                                            <label class="control-label font-weight-bold label-required tw-mb-0" for="portfolio-coin-transactions-new_portfolio_coin_transaction_quantity">Quantity</label>
                                            <div data-portfolio-coin-transactions-new-target="balance" class="tw-hidden">
                                                Balance: <span data-portfolio-coin-transactions-new-target="balanceAmount"></span>
                                            </div>
                                        </div>
                                        <div class="tw-right-2 tw-mt-3 tw-absolute">
                                            <a href="#" data-action="click->portfolio-coin-transactions-new#fillBalance" data-portfolio-coin-transactions-new-target="maxButton" data-balance="0" class="tw-hidden tw-inline-flex tw-items-center tw-px-2.5 tw-py-0.5 tw-rounded-md tw-text-sm tw-font-medium tw-bg-primary-100 tw-text-primary-800 hover:tw-bg-primary-200 hover:tw-text-primary-900 tw-mr-1 tw-uppercase">
                                                Max
                                            </a>
                                            <span data-target="portfolio-coin-transactions-new.coinSymbol" class="tw-inline-flex tw-items-center tw-py-0.5 tw-text-sm tw-font-medium tw-text-gray-800"></span>
                                        </div>
                                        <input step="any" required="required" class="form-control buttonless-input tw-pr-14" placeholder="1" data-target="portfolio-coin-transactions-new.quantityInputField" type="number" name="portfolio_coin_transaction[quantity]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_quantity">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label font-weight-bold" data-target="portfolio-coin-transactions-new.previewSpentOutputLabel" for="portfolio-coin-transactions-new_portfolio_coin_transaction_preview_spent_output">
                                            Total Spent
                                        </label> <br>
                                        <span class="absolute btn text-black tw-mt-1" data-target="portfolio-coin-transactions-new.currencySymbol"></span>
                                        <input type="number" name="preview_spent_output" id="preview_spent_output" step="any" disabled="disabled" class="form-control disabled tw-pl-20" data-target="portfolio-coin-transactions-new.previewSpentOutputField">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label font-weight-bold label-required" for="portfolio-coin-transactions-new_portfolio_coin_transaction_date">Date</label><br>
                                        <input class="form-control" data-target="portfolio-coin-transactions-new.dateInputField" type="text" name="portfolio_coin_transaction[transaction_timestamp]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_transaction_timestamp">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="collapse-group">
                                        <div class="collapse multi-collapse" id="portfolio-coin-transaction-optional-field">
                                            <div class="form-group">
                                                <label class="control-label font-weight-bold" for="portfolio-coin-transactions-new_portfolio_coin_transaction_fees">Fees</label><br>
                                                <span class="absolute btn text-black tw-mt-1" data-target="portfolio-coin-transactions-new.currencySymbol"></span>
                                                <input step="any" class="form-control tw-pl-20" value="0" data-target="portfolio-coin-transactions-new.feeInputField" type="number" name="portfolio_coin_transaction[fees]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_fees">
                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label font-weight-bold" for="portfolio-coin-transactions-new_portfolio_coin_transaction_notes">Notes</label><br>
                                                <input class="form-control" data-target="portfolio-coin-transactions-new.noteInputField" type="text" name="portfolio_coin_transaction[notes]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_notes">
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <a data-toggle="collapse" href="#portfolio-coin-transaction-optional-field">
                                            + Fee &amp; Notes
                                            <span class="text-black">(Optional)</span>
                                        </a>
                                    </div>
                                    <div class="form-group" hidden="">
                                        <input value="buy" data-target="portfolio-coin-transactions-new.transactionType" type="text" name="portfolio_coin_transaction[transaction_type]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_transaction_type">
                                    </div>
                                    <input data-target="portfolio-coin-transactions-new.coinId" type="hidden" name="portfolio_coin_transaction[coin_id]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_coin_id">
                                    <input data-target="portfolio-coin-transactions-new.currencyField" type="hidden" name="portfolio_coin_transaction[currency]" id="portfolio-coin-transactions-new_portfolio_coin_transaction_currency">
                                    <div class="actions center">
                                        <button type="button" class="btn btn-secondary pct-modal-cancel-button mr-2" data-dismiss="modal">Cancel</button>
                                        <input type="submit" name="commit" value="Submit" class="btn btn-primary pct-modal-submit-button ml-2" data-disable-with="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="confirmation-modal modal fade" id="unfavorite-coin-confirm-modal" tabindex="-1" role="dialog" aria-labelledby="confirmation-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <div>
                            <button type="button" class="close float-left" data-dismiss="modal">
                                <span class="text-5xl font-light" style="color: #707070;">×</span>
                            </button>
                        </div>
                    </div>
                    <div class="tw-text-2xl modal-title text-truncate" id="confirmation-label">Remove Coin</div>
                    <div class="modal-body text-muted">
                        <div>Are you sure want to remove this coin?</div>
                        <div>Any transactions associated with this coin will also be removed.</div>
                    </div>
                    <div class="actions center">
                        <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">
                            <span class="translation_missing" title="translation missing: en.shared.confirmation_dialog.no">No</span>
                        </button>
                        <button type="button" id="unfavorite-coin-confirm-button" class="btn btn-primary ml-1">
                            <span class="translation_missing" title="translation missing: en.shared.confirmation_dialog.yes">Yes</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row tw-justify-center tw-items-center my-2 mx-0 ad-spacer" data-target="ads.banner">

            <div id="bsa-zone_1564408932815-2_123456" data-google-query-id="CKWV6_3I5PgCFVKH_QcdlCMMLg" style="display: none;">
                <div id="google_ads_iframe_/22743369056/CoinGecko_S2S_Footer_ROS_0__container__" style="border: 0pt none; margin: auto; text-align: center; width: 728px; height: 0px;"></div>
            </div>
        </div>

        <div class="modal" id="signInModal">
            <div class="modal-dialog h-sm-100 sm-m-0">
                <div class="modal-content h-sm-100 rounded-0">
                    <div class="modal-body mx-2">
                        <div class="tw-flex flex-column h-sm-100" data-controller="user-login-modal">
                            <div class="my-2">
                                <button type="button" class="close float-left" data-dismiss="modal">
                                    <span class="h3 font-light text-black"><i class="far fa-times"></i></span>
                                </button>
                            </div>
                            <div class="my-2">
                                <span class="text-2xl text-black font-semibold">Log in</span>
                            </div>
                            <form class="new_user" id="signInModalForm" data-target="user-login-modal.form csrf-meta.form" action="/account/sign_in?locale=en&amp;redirect_to=%2Fen%2Fcoins%2F{{ $Response['id'] }}" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                                <div class="my-2">
                                    <div class="form-group">
                                        <label class="text-sm text-black font-semibold">Email</label>
                                        <input class="form-control modal-input sign-in-modal" style="height: 48px" data-target="user-login-modal.email" id="signInEmail" type="email" value="" name="user[email]">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-sm text-black font-semibold">Password</label>
                                        <input class="form-control modal-input sign-in-modal" style="height: 48px" data-target="user-login-modal.password" id="signInPassword" type="password" name="user[password]">
                                    </div>
                                </div>
                                <div class="my-1">
                                    <div class="tw-flex tw-justify-between">
                                        <div>
                                            <input name="user[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" checked="checked" name="user[remember_me]" id="user_remember_me"> <label for="user_remember_me">Remember me</label>
                                        </div>
                                        <div>
                                        </div>
                                        <div>
                                            <a href="#" class="text-sm" data-modal-id="resetPasswordModal" data-action="user-login-modal#openModal">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <button id="sign-in-button" data-action="user-login-modal#submit" type="submit" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-flex tw-w-full tw-py-3.5 tw-text-sm">
                                        Login
                                    </button>
                                </div>
                                <input type="hidden" name="authenticity_token" value="L/P+oRTFEZmTA0fvufMWWR/AP4YaKHWffCfTzC2HaSZB9cglHJPvjr4WvcxTn7ESEJtVNmLKtlyyvscQf35tEQ==">
                            </form>
                            <div class="mt-2">
                                <small class="form-text text-center text-black text-sm">Don't have an account?

                                    <a data-dismiss="modal" data-toggle="modal" data-target="#signUpModal" href="#">Sign up</a>
                                </small>
                                <hr>
                            </div>
                            <div>
                                <small class="form-text text-center text-black text-sm">Didn't receive confirmation instructions?<a href="#" data-modal-id="resendConfirmationModal" data-action="user-login-modal#openModal"> Resend confirmation instructions</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="resetPasswordModal">
            <div class="modal-dialog h-sm-100 sm-m-0">
                <div class="modal-content h-sm-100 rounded-0">
                    <div class="modal-body mx-2">
                        <div class="tw-flex flex-column" data-controller="captcha user-login-modal">
                            <div class="my-2">
                                <button type="button" class="close float-left" data-dismiss="modal">
                                    <span class="h3 font-light text-black"><i class="far fa-times"></i></span>
                                </button>
                            </div>
                            <div class="my-2">
                                <span class="text-2xl text-black font-semibold">Send me reset password instructions</span>
                            </div>
                            <div class="my-2">
                                <span class="text-sm text-black">You will receive an email with instructions on how to reset your password in a few minutes.</span>
                            </div>
                            <form class="new_user" id="resetPasswordModalForm" data-target="csrf-meta.form" action="/account/password?locale=en" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                                <div class="my-2">
                                    <div class="form-group">
                                        <label class="text-sm text-black font-semibold">Email</label>
                                        <input class="form-control modal-input" style="height: 48px" id="resetPasswordEmail" data-action="focus->captcha#loadCaptcha" type="email" value="" name="user[email]">
                                    </div>
                                </div>
                                <div class="my-2 center">
                                    <div id="forgot-password-captcha" data-sitekey="12bff373-21ea-4374-9880-ad11db5eb04a" data-target="captcha.captchaForm">
                                    </div>
                                </div>
                                <div class="my-2">
                                    <button id="change-my-password-button" data-target="captcha.submit" type="submit" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-flex tw-w-full tw-py-3.5 tw-text-sm">
                                        Change my password
                                    </button>
                                </div>
                                <input type="hidden" name="authenticity_token" value="L/P+oRTFEZmTA0fvufMWWR/AP4YaKHWffCfTzC2HaSZB9cglHJPvjr4WvcxTn7ESEJtVNmLKtlyyvscQf35tEQ==">
                            </form>
                            <div class="mt-2">
                                <small class="form-text text-center text-black text-sm">
                                    Back to <a data-modal-id="signInModal" data-action="user-login-modal#openModal" href="#">Sign In</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="resendConfirmationModal">
            <div class="modal-dialog h-sm-100 sm-m-0">
                <div class="modal-content h-sm-100 rounded-0">
                    <div class="modal-body mx-2">
                        <div class="tw-flex flex-column" data-controller="user-login-modal">
                            <div class="my-2">
                                <button type="button" class="close float-left" data-dismiss="modal">
                                    <span class="h3 font-light text-black"><i class="far fa-times"></i></span>
                                </button>
                            </div>
                            <div class="my-2">
                                <span class="text-2xl text-black font-semibold">Resend Confirmation Email</span>
                            </div>
                            <div class="my-2">
                                <span class="text-sm text-black">You will receive an email with instructions for how to confirm your email address in a few minutes.</span>
                            </div>
                            <form class="new_user" id="emailConfirmationModalForm" data-target="csrf-meta.form" action="/account/confirmation?locale=en" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                                <div class="my-2">
                                    <div class="form-group">
                                        <label class="text-sm text-black font-semibold">Email</label>
                                        <input class="form-control modal-input" style="height: 48px;" id="confirmationEmail" type="email" value="" name="user[email]">
                                    </div>
                                </div>
                                <div class="my-2">
                                    <input type="submit" name="commit" value="Resend confirmation instructions" class="btn btn-primary btn-lg btn-block" style="height: 45px;" data-disable-with="Resend confirmation instructions">
                                </div>
                                <input type="hidden" name="authenticity_token" value="L/P+oRTFEZmTA0fvufMWWR/AP4YaKHWffCfTzC2HaSZB9cglHJPvjr4WvcxTn7ESEJtVNmLKtlyyvscQf35tEQ==">
                            </form>
                            <div class="mt-2">
                                <small class="form-text text-center text-black text-sm">
                                    Back to <a data-modal-id="signInModal" data-action="user-login-modal#openModal" href="#">Sign In</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="signUpModal" aria-hidden="true">
            <div class="modal-dialog h-sm-100 sm-m-0">
                <div class="modal-content h-sm-100 rounded-0" data-controller="captcha sign-up" data-lang="en">
                    <form class="new_user" id="new_user" style="padding-bottom: 15px; padding-top: 15px; margin: 0px 20px;" data-target="csrf-meta.form" action="/account?locale=en" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓">
                        <div class="my-2">
                            <button type="button" class="close float-left" data-dismiss="modal">
                                <span class="h3 font-light text-black"><i class="far fa-times"></i></span>
                            </button>
                        </div>
                        <br><br>
                        <div class="my-2">
                            <span class="text-2xl text-black font-semibold">
                                Sign Up To Continue
                            </span>
                        </div>
                        <div class="my-2">
                            <div class="form-group">
                                <label class="text-sm text-black font-semibold left">Email</label>
                                <input style="height: 48px" placeholder="Email" class="form-control modal-input sign-up-modal" data-action="focus->captcha#loadCaptcha" type="email" name="user[email]" id="user_email">
                            </div>
                            <div class="form-group">
                                <label class="text-sm text-black font-semibold">Password</label>
                                <input class="form-control modal-input sign-up-modal" style="height: 48px" placeholder="Password" data-target="sign-up.password" data-action="input->sign-up#onInputChanged" data-withcaptcha="true" type="password" name="user[password]" id="user_password">
                                <span data-action="click->sign-up#showPassword" class="text-xl far fa-eye show-password-icon"></span>
                                <label class="text-sm tw-text-red-700 tw-mb-0" data-target="sign-up.errorMessage"></label>
                            </div>
                        </div>
                        <p class="tw-text-gray-500 tw-mt-0">Password must contain at least 8 characters including 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character
                        </p>
                        <p class="tw-text-gray-500 tw-mt-0">Security Tip: Do not reuse passwords that you have used in other apps or websites.</p>
                        <div class="form-group form-check tw-flex mt-3 my-1">
                            <input name="user[tos_agreement]" type="hidden" value="0"><input class="form-check-input" id="tos_agreement" data-action="click->captcha#loadCaptcha" type="checkbox" value="1" name="user[tos_agreement]">
                            <label class="text-black text-sm" for="tos_agreement">I agree to CoinGecko's <a href="/en/terms" target="_blank">Terms of Service</a> and <a href="/en/privacy" target="_blank">Privacy Policy</a>.</label>
                        </div>
                        <div class="form-group form-check tw-flex mt-2 my-1">
                            <input name="user[subscribe_newsletter]" type="hidden" value="0"><input class="form-check-input" id="subscribe_newsletter" type="checkbox" value="1" name="user[subscribe_newsletter]">
                            <label class="text-black text-sm" for="subscribe_newsletter">I would like to subscribe to CoinGecko's daily newsletter.</label>
                        </div>
                        <div class="my-2 center">
                            <div id="captcha" data-sitekey="d7b4358f-5390-46d4-a479-eb9a1fa28033" data-target="captcha.captchaForm">
                            </div>
                        </div>
                        <div class="my-2">
                            <button id="sign-up-button" disabled="disabled" data-target="captcha.submit sign-up.submit" type="submit" data-view-component="true" class="dark:focus:tw-outline-none dark:focus:tw-text-white dark:hover:tw-bg-primary-400 dark:hover:tw-text-white dark:tw-text-white disabled:tw-opacity-50 focus:tw-outline-none focus:tw-text-white hover:tw-bg-primary-700 hover:tw-text-white tw-bg-primary-500 tw-border tw-border-transparent tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-white tw-justify-center tw-flex tw-w-full tw-py-3.5 tw-text-sm">
                                Sign up
                            </button>
                        </div>
                        <div class="mt-2">
                            <small class="form-text text-center text-black text-sm">Already have an account?
                                <a data-dismiss="modal" data-toggle="modal" data-target="#signInModal" href="#">Login</a><br>
                            </small>
                            <hr>
                        </div>
                        <div>
                            <small class="form-text text-center text-black text-sm">
                                <a href="/account/confirmation/new?locale=en">Didn't receive confirmation instructions?</a><br>
                            </small>
                        </div>
                        <input type="hidden" name="authenticity_token" value="L/P+oRTFEZmTA0fvufMWWR/AP4YaKHWffCfTzC2HaSZB9cglHJPvjr4WvcxTn7ESEJtVNmLKtlyyvscQf35tEQ==">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->
    @include("components.footer")
</body>

</html>