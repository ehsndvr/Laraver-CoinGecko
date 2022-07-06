<div>
    <div>
        <div class="tw-hidden 2lg:tw-block">
            <div class="nav-border-bottom tw-py-1.5">
                <div class="container tw-flex tw-justify-between tw-items-center tw-text-black tw-text-2xs tw-h-10">
                    {!! $CoinsDetails !!}
                    <div class="tw-hidden lg:tw-flex lg:tw-justify-end lg:tw-items-center">
                        <div class="tw-flex tw-justify-end tw-items-center">
                            <div class="dropdown tw-w-12">
                                <span class="tw-cursor-pointer text-black" data-toggle="dropdown" data-flip="false" aria-expanded="false">
                                    EN <i class="fas fa-caret-down"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-center text-2xs" style="">
                                    <span class="font-bold dropdown-item bg-transparent py-2">Language</span>
                                    <div class="tw-flex flex-row">
                                        <div>
                                            <a class="dropdown-item py-2" href="/">English</a>
                                            <a class="dropdown-item py-2" href="/de">Deutsch</a>
                                            <a class="dropdown-item py-2" href="/es">Español</a>
                                            <a class="dropdown-item py-2" href="/fr">Français</a>
                                            <a class="dropdown-item py-2" href="/it">Italiano</a>
                                            <a class="dropdown-item py-2" href="/pl">język polski</a>
                                            <a class="dropdown-item py-2" href="/ro">Limba română</a>
                                            <a class="dropdown-item py-2" href="/hu">Magyar nyelv</a>
                                            <a class="dropdown-item py-2" href="/nl">Nederlands</a>
                                            <a class="dropdown-item py-2" href="/pt">Português</a>
                                            <a class="dropdown-item py-2" href="/sv">Svenska</a>
                                            <a class="dropdown-item py-2" href="/vi">Tiếng việt</a>
                                        </div>
                                        <div>
                                            <a class="dropdown-item py-2" href="/tr">Türkçe</a>
                                            <a class="dropdown-item py-2" href="/ru">Русский</a>
                                            <a class="dropdown-item py-2" href="/ja">日本語</a>
                                            <a class="dropdown-item py-2" href="/zh">简体中文</a>
                                            <a class="dropdown-item py-2" href="/zh-tw">繁體中文</a>
                                            <a class="dropdown-item py-2" href="/ko">한국어</a>
                                            <a class="dropdown-item py-2" href="/ar">العربية</a>
                                            <a class="dropdown-item py-2" href="/th">ภาษาไทย</a>
                                            <a class="dropdown-item py-2" href="/id">Bahasa Indonesia</a>
                                            <a class="dropdown-item py-2" href="/cs">čeština</a>
                                            <a class="dropdown-item py-2" href="/da">dansk</a>
                                            <a class="dropdown-item py-2" href="/el">Ελληνικά</a>
                                        </div>
                                        <div>
                                            <a class="dropdown-item py-2" href="/hi">हिंदी</a>
                                            <a class="dropdown-item py-2" href="/no">norsk</a>
                                            <a class="dropdown-item py-2" href="/sk">slovenský jazyk</a>
                                            <a class="dropdown-item py-2" href="/uk">украї́нська мо́ва</a>
                                            <a class="dropdown-item py-2" href="/he">עִבְרִית</a>
                                            <a class="dropdown-item py-2" href="/fi">suomen kieli</a>
                                            <a class="dropdown-item py-2" href="/bg">български</a>
                                            <a class="dropdown-item py-2" href="/hr">hrvatski</a>
                                            <a class="dropdown-item py-2" href="/lt">lietuvių kalba</a>
                                            <a class="dropdown-item py-2" href="/sl">slovenski jezik</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="tw-w-16" data-target="application.navigationCurrency" data-url="/en/navigations/currency_selector">
                                <div id="currency-selector" class="tw-justify-center d-inline dropdown mr-3" data-controller="currency-dropdown">
                                    <span class="text-black tw-cursor-pointer" data-toggle="dropdown" data-flip="false" aria-expanded="false">
                                        <span data-target="currency-dropdown.button">USD</span>
                                        <i class="fas fa-caret-down pl-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-popup dropdown-menu-content dropdown-menu-right" style="z-index: 10000001;">
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
                                                    <div class="py-1 px-3 mb-2 currency tw-cursor-pointer dropdown-option" data-iso-code="btc" data-action="click->currency-dropdown#selectCurrency">
                                                        <div class="justify-content-md-between">
                                                            <span class="text-muted" style="display: inline-block; width: 25px;">BTC</span>
                                                            <br class="d-block d-sm-none">
                                                            <span class="d-md-inline currency-name">Bitcoin</span>
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
                                                            <span class="d-md-inline currency-name">Bitcoin Cash</span>
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
                                                <span class="ml-3 dropdown-menu-secondary-title">Bitcoin Units <span class="badge bg-warning text-dark">New</span></span>
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
                                </div>
                            </span>
                            <div data-controller="dark">
                                <button type="button" class="border-0 p-0 text-2xs bg-transparent text-black" data-action="click->dark#toggle">
                                    <i type="solid" data-target="dark.icon" data-dark-class-name="fa-sun" data-light-class-name="fa-moon" class="fas text-2xs fa-moon"></i>
                                </button>
                            </div>
                            <span class="tw-w-24">
                                <div class="tailwind-reset">
                                    <a href="/en/premium/pricing" data-target="csrf-meta.subscribeButton" role="button" data-view-component="true" class="tw-ml-4 dark:hover:tw-bg-opacity-5 dark:tw-text-primary-500 disabled:tw-opacity-50 focus:tw-border-opacity-0 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-0 focus:tw-ring-primary-500 focus:tw-text-primary-500 hover:tw-bg-primary-50 hover:tw-text-primary-500 tw-bg-transparent tw-border tw-border-primary-500 tw-font-medium tw-inline-flex tw-items-center tw-leading-4 tw-rounded-md tw-text-primary-500 tw-justify-center tw-px-2.5 tw-py-1.5 tw-text-xs">
                                        Subscribe
                                    </a>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>