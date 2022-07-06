<div>
    <div wire:poll.10000ms>
        <table class="sort table mb-0 text-sm text-lg-normal table-scrollable" style="overflow-y: hidden;" data-target="gecko-table.table portfolios-v2.table">
            <thead>
                <tr>
                    <th class="cg-sticky-col-header cg-sticky-first-col" data-sort-method="none" role="columnheader"></th>
                    <th class="table-number cg-sticky-col-header cg-sticky-second-col" role="columnheader">
                        #
                    </th>
                    <th class="coin-name text-left cg-sticky-col-header cg-sticky-third-col px-0" role="columnheader">
                        Coin
                    </th>
                    <th class="price text-left pl-0" data-sort-method="number" role="columnheader"></th>
                    <th class="price text-right pl-0" data-sort-method="number" role="columnheader">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Responses as $key => $Response)
                <tr>
                    <td class="pl-1 pr-0 cg-sticky-col cg-sticky-first-col">
                        <div class="dropdown-menu p-3 dropdown-popup dropdown-menu-content portfolios-dropdown"></div>
                        <i data-target="favorites.solidStar" data-unfavorite-coin-confirm-modal="unfavorite-coin-confirm-modal" data-unfavorite-coin-confirm-button="unfavorite-coin-confirm-button" data-new-portfolio-confirm-modal="new-portfolio-form-modal" data-new-portfolio-confirm-button="new-portfolio-form-confirm-button" data-action="click->favorites#trigger" data-coin-id="{{ $Response['c_id'] ?? $Response['id'] }}" data-coin-slug="{{ $Response['name'] }}" data-coin-image="{{ $Response['image'] }}" data-removable="false" data-coin-symbol="{{ $Response['symbol'] }}" data-source="star_button" data-toggle="dropdown" data-price-btc="1.0" data-new-portfolio-button-label="<span class=&quot;translation_missing&quot; title=&quot;translation missing: en.layouts.application.portfolio.add_to_new_portfolio&quot;>Add To New Portfolio</span>" data-toast-success-message="BTC added to Portfolio" data-toast-success-hyperlink-text="Start your portfolio - Add a transaction!" aria-haspopup="true" aria-expanded="false" class="far cursor-pointer fa-star"></i>
                    </td>
                    <td class="table-number tw-text-left text-xs cg-sticky-col cg-sticky-second-col tw-max-w-14 lg:tw-w-14">
                        {{((($CurrentPage - 1) * $PerPage) == 0 ? 1 : (($CurrentPage - 1) * $PerPage)) + ($key)}}
                    </td>
                    <td class="py-0 coin-name cg-sticky-col cg-sticky-third-col px-0 tw-max-w-40 tw-w-40" data-sort="{{ $Response['name'] }}">
                        <div class="tw-flex">
                            <div class="tw-w-5 tw-mr-1 lg:tw-mr-2 center tw-flex-column">
                                <img class="mr-0 tw-max-h-5 tw-w-5 tw-overflow-hidden" style="width: 18px; height: 18px;" alt="{{ $Response['c_id'] ?? $Response['id'] }} ({{ strtoupper($Response['symbol']) }})" data-src="{{ $Response['image'] }}" data-srcset="{{ $Response['image'] }} 2x" src="{{ $Response['image'] }}" srcset="{{ $Response['image'] }} 2x">
                            </div>
                            <div class="tw-flex-auto">
                                <div class="tw-flex tw-items-center">
                                    <a class="tw-hidden lg:tw-flex font-bold tw-items-center tw-justify-between" style="width: 115px;" href="/coins/{{ $Response['c_id'] ?? $Response['id'] }}">
                                        {{ $Response['name'] }}
                                    </a> <a class="d-lg-none font-bold tw-w-12" href="/coins/{{ $Response['c_id'] ?? $Response['id'] }}">
                                        {{ strtoupper($Response['symbol']) }}
                                    </a> <span class="tw-hidden d-lg-inline font-normal text-3xs ml-2">
                                        {{ strtoupper($Response['symbol']) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="td-price price text-left pl-0">
                        <div data-api-symbol="{{$Response['symbol']}}" data-zone-key="CEAD627L" data-target="buy-sell-ads.coinRowBuy">
                        </div>
                    </td>
                    <td data-sort="38719.3714249875" class="td-price price text-right pl-0">
                        <span class="no-wrap" data-price-btc="1.0" data-coin-price-id="{{ $Response['c_id'] ?? $Response['id']}}" data-coin-symbol="{{$Response['symbol']}}" data-target="price.price" data-price-previous="38710.292">{{ $Response['current_price'] > 1 ? (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($Response['current_price'] , 'USD') : sprintf("$%.6f", number_format($Response['current_price'] ,6,'.','')) }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row no-gutters tw-flex flex-column flex-lg-row tw-justify-center mt-2">
            <nav class="pagy-bootstrap-nav" role="navigation" aria-label="pager">
                <ul class="pagination">
                    <li class="page-item prev {{ $CurrentPage == 1 ? 'disabled' : '' }}"><a href="{{ $CurrentPage != 1 ? $CurrentPage - 1 : '#' }}" class="page-link">‹&nbsp;Prev</a></li>
                    @if($PagesCount == $CurrentPage)
                    <li class="page-item gap disabled"><a href="#" class="page-link">…</a></li>
                    @endif
                    @if($CurrentPage > 1)
                    @for($intCount = (($CurrentPage <= 5) ? ($CurrentPage - 2) : ($CurrentPage - 6)); $intCount < $CurrentPage; $intCount++) @if($intCount !=0) <li class="page-item">
                        <a href="/?page={{ $intCount}}" class="page-link">{{ $intCount}}</a>
                        </li>
                        @endif
                        @endfor
                        @endif
                        @if($CurrentPage != $PagesCount)
                        @for($intCount=$CurrentPage; $intCount < ($CurrentPage + 5); $intCount++) <li class="page-item {{ $intCount == $CurrentPage ? 'active' : '' }}">
                            <a href="/?page={{ $intCount }}" class="page-link">{{ $intCount }}</a>
                            </li>
                            @endfor
                            @endif
                            @if($PagesCount != $CurrentPage && ($CurrentPage + 5) != $PagesCount)
                            <li class="page-item gap disabled"><a href="#" class="page-link">…</a></li>
                            @endif
                            <li class="page-item"><a href="/?page={{ $PagesCount }}" class="page-link">{{ $PagesCount }}</a></li>
                            <li class="page-item next"><a href="/?page={{ $CurrentPage + 1 }}" class="page-link" rel="next" aria-label="next">Next&nbsp;›</a>
                            </li>
                </ul>
            </nav>
        </div>
    </div>
</div>