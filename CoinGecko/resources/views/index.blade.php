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
    @livewireStyles
</head>

<body>
    <!-- Top Header -->
    <livewire:top-header />
    <!-- End Top Header -->
    <!-- Header -->
    @include("components.header")
    <!-- End Header -->
    <!-- SpaceBetwin Header And Table -->
    <div class="row tw-justify-center tw-items-center my-2 ad-spacer" data-target="ads.banner">
        <div id="bsa-zone_1509402283990-0_123456"></div>
    </div>
    <!-- End SpaceBetwin Header And Table -->
    <div class="container">
        <div class="gecko-table-container">
            <div class="coingecko-table" data-controller="buy-sell-ads">
                <div class="position-relative">
                    <div class="coin-table table-responsive">
                        <livewire:show-coin-table />
                        @livewireScripts
                    </div>
                </div>
            </div>
            <div>
                <h2 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-xl md:tw-text-2xl tw-text-gray-900 dark:tw-text-opacity-87">
                    What is Crypto Market Cap?
                </h2>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2 tw-mb-8">
                    Crypto market cap is the total value of all the coins of a particular cryptocurrency that have been mined or are in circulation. Market capitalization is used to determine the ranking of cryptocurrencies. The higher the market cap of a particular crypto coin, the higher its ranking and share of the market. Crypto market cap is calculated by multiplying the total number of coins in circulation by its current price. For instance, to calculate the market cap of Ethereum, all you need to do is multiply the total number of Ethereum in circulation by the current price of one Ethereum and you will get its market cap.
                </p>
                <h3 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-lg tw-text-gray-900 dark:tw-text-opacity-87">
                    How to compare Cryptocurrencies Market Cap?
                </h3>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2">
                    Crypto market cap can be divided into three categories: </p>
                <div class="tw-mb-8 tw-text-sm tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60">
                    <ul>
                        <li>Large-cap cryptocurrencies (&gt;$10 billion)</li>
                        <li>Mid-cap Cryptocurrencies ($1 billion - $10 billion)</li>
                        <li>Small-cap cryptocurrencies (&lt;$1 billion).</li>
                    </ul>
                    As a financial metric, market cap allows you to compare the total circulating value of one cryptocurrency with another. Large cap cryptocurrencies such as Bitcoin and Ethereum have a market cap of over $10 billion. They typically consist of protocols that have demonstrated track records, and have a vibrant ecosystem of developers maintaining and enhancing the protocol, as well as building new projects on top of them.
                    While market cap is a simple and intuitive comparison metric, it is not a perfect point of comparison. Some cryptocurrency projects may appear to have inflated market cap through price swings and the tokenomics of their supply. As such, it is best to use this metric as a reference alongside other metrics such as trading volume, liquidity, fully diluted valuation, and fundamentals during your research process.
                </div>
                <p></p>
                <h2 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-xl md:tw-text-2xl tw-text-gray-900 dark:tw-text-opacity-87">
                    How does CoinGecko Calculate Cryptocurrency Prices?
                </h2>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2 tw-mb-8">
                    The price is calculated using a global volume-weighted average price formula which is based on the pairings available on different exchanges of a particular crypto asset. For examples and more detailed information on how we track cryptocurrency prices and other metrics, see our <a href="/en/methodology">methodology page here</a>.
                </p>
                <h3 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-lg tw-text-gray-900 dark:tw-text-opacity-87">
                    Why are Cryptocurrency Prices Different on Exchanges?
                </h3>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2 tw-mb-8">
                    You may notice that cryptocurrencies listed on different exchanges have different prices. The reasons for this are complex, but simply put cryptocurrencies are traded on different exchanges and across different markets with varying economic conditions, liquidity, trading pairs, and offerings (e.g. derivatives / leverage) which all influence price in their own way.
                </p>
                <h2 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-xl md:tw-text-2xl tw-text-gray-900 dark:tw-text-opacity-87">
                    Where to Check Cryptocurrency Prices?
                </h2>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2 tw-mb-8">
                    You can track over 10,000 crypto prices on CoinGecko across more than 50 currencies. Popular cryptocurrency pairs include <a href="/en/coins/bitcoin/usd">BTC to USD</a>, <a href="/en/coins/ethereum/usd">ETH to USD</a>, and <a href="/en/coins/smooth-love-potion/php">SLP to PHP</a>. You can also track metrics such as 24 hour trading volume, market capitalization, price chart, historical performance chart, the circulating supply, and more. Sign up to use CoinGecko’s crypto portfolio to track the performance of your portfolio. You may also check out <a href="https://geckoterminal.com/">GeckoTerminal</a> (currently in beta), our comprehensive multichain on-chain charting tool featuring live charts, current trades, market sentiment and more as it happens in real time! CoinGecko also has a mobile app that enables you to track cryptocurrencies on <a href="https://gcko.io/coingecko-android">Android</a> and <a href="https://gcko.io/coingecko-ios">IOS</a>.
                </p>
                <h3 data-view-component="true" class="tw-font-medium tw-text-gray-700 dark:tw-text-white dark:tw-text-opacity-60 tw-text-base tw-text-lg tw-text-gray-900 dark:tw-text-opacity-87">
                    What is 24h Volume in the Table Above?
                </h3>
                <p data-view-component="true" class="tw-font-normal tw-text-gray-500 dark:tw-text-white dark:tw-text-opacity-60 tw-text-sm tw-mt-2 tw-mb-8">
                    The 24h trading volume refers to the amount a cryptocurrency has been bought and sold on all exchanges within the last 24 hours on the spot market (see <a href="%{derivatives_url}">derivatives volume</a> here). For instance, if the 24h volume for Ethereum is $15 billion, it means that $15 billion worth of Ether had changed hands across all exchanges in the last 24 hours.
                </p>
            </div>
        </div>
    </div>
    @include("components.footer")
</body>

</html>