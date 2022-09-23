<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tutors</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="">
    <div class="page-tutors">
        <header class="page-header">
            <div class="page-header-content">
                <div class="page-title-wrapper">
                    <h1 class="page-title">Online
                        <span class="title-em">English</span> tutors &amp; teachers for private lessons
                    </h1>
                    <div class="page-subtitle-wrapper">
                        <div class="page-subtitle">
                            <p>Looking for an online English tutor? Preply is the leading online language learning platform worldwide. You can choose from 11707 English teachers with an average rating of 4.9 out of 5 stars given by 93453 customers. Book a lesson with a private English teacher today and start learning. Not entirely happy with your tutor? No worries, Preply offers free tutor replacement till you're 100% satisfied.&nbsp;Looking for a different way to learn a language? Explore
                                <a href="https://preply.com/en/classes/english">online English classes</a> or find other resources to
                                <a href="https://preply.com/en/learn/english">learn English online</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-tabs">
                <a class="tab">
                    <div class="tab-icon"><img src="{{asset('images/header-tab-1.svg')}}" /></div>
                    <div class="tab-title">Private lessons</div>
                </a>
                <a class="tab">
                    <div class="tab-icon"><img src="{{asset('images/header-tab-2.svg')}}" /></div>
                    <div class="tab-title">Group classes</div>
                </a>
            </div>
            <div id="filter-panel" class="filter-panel">

                <div class="filter-panel__body">
                    <div class="filters-layout">
                        <!-- [ SEARCH FILTER ========= -->
                        <div class="filters-layout__item filters-layout__item-first">
                            <div class="filter-item">
                                <div class="filter-item__trigger">
                                    <div class="filter-item__label d-none d-sm-block">Search</div>
                                    <div class="filter-item__field">
                                        <div class="filter-item__search">
                                            <input placeholder="By Teacher Name" data-field-caption="Search Keyword" data-fatreq="{&quot;required&quot;:false}" type="text" name="keyword" value="">
                                            <div class="filter-item__search-action">
                                                <a class="filter-item__search-submit" onclick="searchKeyword();" title="Search">
                                                    <svg class="icon icon--search icon--small">
                                                        <use xlink:href="/images/sprite.svg#search"></use>
                                                    </svg>
                                                </a>
                                                <div class="filter-item__search-reset" onclick="clearKeyword();" style="display: none;" title="Reset">
                                                    <span class="close"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ] -->
                        <!-- [ LANGUAGE FILTER ========= -->
                        <div class="filters-layout__item filters-layout__item-second">
                            <div class="filter-item">
                                <div class="filter-item__trigger filter-item__trigger-js cursor-pointer">
                                    <div class="filter-item__label">
                                        Language <span class="filters-count d-sm-none language-count-js" style="display: none;"></span>
                                    </div>
                                    <div class="filter-item__field d-none d-sm-block">
                                        <div class="filter-item__select filter-item__select--arrow teachlang-placeholder-js">All Servicies</div>
                                    </div>
                                </div>
                                <div class="filter-item__target filter-item__target-js" style="display: none;">
                                    <div class="filter-dropdown">
                                        <div class="filter-dropdown__head d-block d-sm-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Select Language</h5>
                                                </div>
                                                <div><a href="javascript:clearMore('teachs[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__body">
                                            <div class="search-form-cover">
                                                <div class="search-form">
                                                    <div class="search-form__field">
                                                        <input type="text" name="teach_language" onkeyup="onkeyupLanguage()" placeholder="Search Language">
                                                    </div>
                                                    <div class="search-form__action">
                                                        <span class="btn btn--equal btn--transparent color-black">
                                                            <svg class="icon icon--search icon--small">
                                                                <use xlink:href="/images/sprite.svg#search"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="select-list select-list--vertical select-list--scroll">
                                                <ul>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="17">
                                                            <span class="select-option__item select-teachlang-js">swedish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="16">
                                                            <span class="select-option__item select-teachlang-js">finnish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="15">
                                                            <span class="select-option__item select-teachlang-js">hebrew-israel</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="14">
                                                            <span class="select-option__item select-teachlang-js">danish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="13">
                                                            <span class="select-option__item select-teachlang-js">italian</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="12">
                                                            <span class="select-option__item select-teachlang-js">german</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="1">
                                                            <span class="select-option__item select-teachlang-js">english</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="2">
                                                            <span class="select-option__item select-teachlang-js">polish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="3">
                                                            <span class="select-option__item select-teachlang-js">spanish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="4">
                                                            <span class="select-option__item select-teachlang-js">korean</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="5">
                                                            <span class="select-option__item select-teachlang-js">arabic</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="6">
                                                            <span class="select-option__item select-teachlang-js">turkish</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="7">
                                                            <span class="select-option__item select-teachlang-js">portuguese</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="8">
                                                            <span class="select-option__item select-teachlang-js">russian</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="9">
                                                            <span class="select-option__item select-teachlang-js">japanese</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="10">
                                                            <span class="select-option__item select-teachlang-js">dutch</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input language-filter-js" type="checkbox" name="teachs[]" value="11">
                                                            <span class="select-option__item select-teachlang-js">french</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__footer d-none d-sm-block">
                                            <div class="filter-actions">
                                                <a href="javascript:clearLanguage();" class="btn btn--gray">Clear</a>
                                                <a href="javascript:searchLanguage();" class="btn btn--secondary margin-left-4">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ] -->
                        <!-- [ PRICE FILTER ========= -->
                        <div class="filters-layout__item filters-layout__item-third">
                            <div class="filter-item">
                                <div class="filter-item__trigger filter-item__trigger-js  cursor-pointer">
                                    <div class="filter-item__label">
                                        Price <span class="filters-count d-sm-none price-count-js" style="display: none;"></span>
                                    </div>
                                    <div class="filter-item__field  d-none d-sm-block">
                                        <div class="filter-item__select filter-item__select--arrow price-placeholder-js">All Prices</div>
                                    </div>
                                </div>
                                <div class="filter-item__target filter-item__target-js" style="display: none;">
                                    <div class="filter-dropdown">
                                        <div class="filter-dropdown__head d-block d-sm-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Select Price</h5>
                                                </div>
                                                <div><a href="javascript:clearMore('price[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__body">
                                            <div class="padding-top-4 padding-bottom-4 border-bottom">
                                                <div class="d-flex justify-content-between">
                                                    <div class="col-6"><input placeholder="From" data-field-caption="Price From" data-fatreq="{&quot;required&quot;:false}" type="text" name="price_from" value=""></div>
                                                    <div class="col-6"><input placeholder="Till" data-field-caption="Price Till" data-fatreq="{&quot;required&quot;:false}" type="text" name="price_till" value=""></div>
                                                </div>
                                            </div>
                                            <div class="select-list select-list--vertical select-list--scroll">
                                                <ul>

                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="1">
                                                            <span class="select-option__item">$1.00 - $10.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="2">
                                                            <span class="select-option__item">$11.00 - $20.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="3">
                                                            <span class="select-option__item">$21.00 - $50.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="4">
                                                            <span class="select-option__item">$51.00 - $100.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="5">
                                                            <span class="select-option__item">$101.00 - $200.00</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="select-option">
                                                            <input class="select-option__input price-filter-js" type="checkbox" name="price[]" value="6">
                                                            <span class="select-option__item">$201.00 - $500.00</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__footer d-none d-sm-block">
                                            <div class="filter-actions">
                                                <a href="javascript:clearPrice();" class="btn btn--gray">Clear</a>
                                                <a href="javascript:searchPrice();" class="btn btn--secondary margin-left-4">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ] -->
                        <!-- [ AVAILABILITY FILTER ========= -->
                        <div class="filters-layout__item filters-layout__item-forth">
                            <div class="filter-item">
                                <div class="filter-item__trigger filter-item__trigger-js  cursor-pointer">
                                    <div class="filter-item__label">
                                        Availability <span class="filters-count d-sm-none availbility-count-js" style="display: none;"></span>
                                    </div>
                                    <div class="filter-item__field d-none d-sm-block">
                                        <div class="filter-item__select filter-item__select--arrow availbility-placeholder-js">Select Timing</div>
                                    </div>
                                </div>
                                <div class="filter-item__target filter-item__target-js" style="display: none;">
                                    <div class="filter-dropdown">
                                        <div class="filter-dropdown__head d-block d-sm-none">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h5>Select Availability</h5>
                                                </div>
                                                <div><a href="javascript:clearMore('slots[]');clearMore('days[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__body">
                                            <div class="selection-group">
                                                <h6 class="margin-bottom-3">Days Of The Week</h6>
                                                <div class="select-list select-list--flex">
                                                    <ul>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="0">
                                                                <span class="select-option__item">Sun</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="1">
                                                                <span class="select-option__item">Mon</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="2">
                                                                <span class="select-option__item">Tue</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="3">
                                                                <span class="select-option__item">Wed</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="4">
                                                                <span class="select-option__item">Thu</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="5">
                                                                <span class="select-option__item">Fri</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="days[]" value="6">
                                                                <span class="select-option__item">Sat</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="selection-group">
                                                <h6 class="margin-bottom-3">Times Of Day 24 Hours</h6>
                                                <div class="select-list select-list--onethird">
                                                    <ul>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="0">
                                                                <span class="select-option__item">00 - 04</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="1">
                                                                <span class="select-option__item">04 - 08</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="2">
                                                                <span class="select-option__item">08 - 12</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="3">
                                                                <span class="select-option__item">12 - 16</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="4">
                                                                <span class="select-option__item">16 - 20</span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="select-option">
                                                                <input class="select-option__input availbility-filter-js" type="checkbox" name="slots[]" value="5">
                                                                <span class="select-option__item">20 - 24</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__footer d-none d-sm-block">
                                            <div class="filter-actions">
                                                <a href="javascript:clearAvailbility();" class="btn btn--gray">Clear</a>
                                                <a href="javascript:searchAvailbility();" class="btn btn--secondary margin-left-4">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ] -->
                        <!-- [ MORE FILTER ========= -->
                        <div class="filters-layout__item filters-layout__item-fifth">
                            <div class="filter-item">
                                <div class="filter-item__trigger cursor-pointer more-filters filter-item__trigger-js filter-more-js">
                                    <span class="filters-count filters-count--positioned more-count-js" style="display: none;"></span>
                                    <a href="javascript:void(0)" class="btn more-filters-btn color-primary">
                                        <svg class="icon icon--more icon--small margin-right-2" viewBox="0 0 14 14.003">
                                            <path d="M2.919 11.202a2.1 2.1 0 013.962 0H14v1.4H6.881a2.1 2.1 0 01-3.962 0H0v-1.4zm4.2-4.9a2.1 2.1 0 013.962 0H14v1.4h-2.919a2.1 2.1 0 01-3.962 0H0v-1.4zm-4.2-4.9a2.1 2.1 0 013.962 0H14v1.4H6.881a2.1 2.1 0 01-3.962 0H0v-1.4z"></path>
                                        </svg>
                                        More Filters
                                    </a>
                                </div>
                                <div class="filter-item__target filter-item__target-js more-filters-target" style="display: none;">
                                    <div class="filter-dropdown">
                                        <div class="filter-dropdown__body">
                                            <div class="filters-more maga-body-js">
                                                <!-- [ COUNTRIES FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Location <span class="filters-count country-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Location</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('locations[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>

                                                                <div class="search-form-cover d-block padding-0 border-bottom-0 margin-top-6">
                                                                    <div class="search-form">
                                                                        <div class="search-form__field">
                                                                            <input type="text" name="location_search" onkeyup="onkeyupLocation()" placeholder="Search Location">
                                                                        </div>
                                                                        <div class="search-form__action">
                                                                            <span class="btn btn--equal btn--transparent color-black">
                                                                                <svg class="icon icon--search icon--small">
                                                                                    <use xlink:href="/images/sprite.svg#search"></use>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="filter-dropdown__body">

                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="8">
                                                                                <span class="select-option__item select-location-js">afghanistan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="9">
                                                                                <span class="select-option__item select-location-js">albania</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="10">
                                                                                <span class="select-option__item select-location-js">algeria</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="11">
                                                                                <span class="select-option__item select-location-js">andorra</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="13">
                                                                                <span class="select-option__item select-location-js">argentian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="14">
                                                                                <span class="select-option__item select-location-js">armenia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="15">
                                                                                <span class="select-option__item select-location-js">aruba</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="16">
                                                                                <span class="select-option__item select-location-js">ascension island</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="17">
                                                                                <span class="select-option__item select-location-js">australia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="18">
                                                                                <span class="select-option__item select-location-js">austria</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="19">
                                                                                <span class="select-option__item select-location-js">azerbaijan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="20">
                                                                                <span class="select-option__item select-location-js">bahamas</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="21">
                                                                                <span class="select-option__item select-location-js">bahrain</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="22">
                                                                                <span class="select-option__item select-location-js">bangladesh</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="23">
                                                                                <span class="select-option__item select-location-js">barbados</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="24">
                                                                                <span class="select-option__item select-location-js">belarus</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="25">
                                                                                <span class="select-option__item select-location-js">belgium</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="26">
                                                                                <span class="select-option__item select-location-js">belize</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="27">
                                                                                <span class="select-option__item select-location-js">benin</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="28">
                                                                                <span class="select-option__item select-location-js">bermuda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="29">
                                                                                <span class="select-option__item select-location-js">bhutan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="30">
                                                                                <span class="select-option__item select-location-js">bolivia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="31">
                                                                                <span class="select-option__item select-location-js">bonaire</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="32">
                                                                                <span class="select-option__item select-location-js">bosnia and herzegovina</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="33">
                                                                                <span class="select-option__item select-location-js">botswana</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="34">
                                                                                <span class="select-option__item select-location-js">brazil</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="35">
                                                                                <span class="select-option__item select-location-js">british virgin islands</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="36">
                                                                                <span class="select-option__item select-location-js">brunei</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="37">
                                                                                <span class="select-option__item select-location-js">bulgaria</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="38">
                                                                                <span class="select-option__item select-location-js">burkina faso</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="39">
                                                                                <span class="select-option__item select-location-js">burundi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="41">
                                                                                <span class="select-option__item select-location-js">cambodia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="42">
                                                                                <span class="select-option__item select-location-js">cameroon</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="43">
                                                                                <span class="select-option__item select-location-js">canada</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="40">
                                                                                <span class="select-option__item select-location-js">cape verde</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="45">
                                                                                <span class="select-option__item select-location-js">cayman islands</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="46">
                                                                                <span class="select-option__item select-location-js">central african republic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="47">
                                                                                <span class="select-option__item select-location-js">chad</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="49">
                                                                                <span class="select-option__item select-location-js">chile</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="50">
                                                                                <span class="select-option__item select-location-js">china</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="51">
                                                                                <span class="select-option__item select-location-js">colombia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="52">
                                                                                <span class="select-option__item select-location-js">comoros</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="55">
                                                                                <span class="select-option__item select-location-js">costa rica</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="56">
                                                                                <span class="select-option__item select-location-js">cote d'ivoire</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="57">
                                                                                <span class="select-option__item select-location-js">croatia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="58">
                                                                                <span class="select-option__item select-location-js">cuba</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="59">
                                                                                <span class="select-option__item select-location-js">cyprus</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="60">
                                                                                <span class="select-option__item select-location-js">czechia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="53">
                                                                                <span class="select-option__item select-location-js">democratic republic of the congo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="61">
                                                                                <span class="select-option__item select-location-js">denmark</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="62">
                                                                                <span class="select-option__item select-location-js">djibouti</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="63">
                                                                                <span class="select-option__item select-location-js">dominica</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="64">
                                                                                <span class="select-option__item select-location-js">dominican republic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="65">
                                                                                <span class="select-option__item select-location-js">ecuador</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="66">
                                                                                <span class="select-option__item select-location-js">egypt</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="67">
                                                                                <span class="select-option__item select-location-js">el salvador</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="68">
                                                                                <span class="select-option__item select-location-js">equatorial guinea</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="69">
                                                                                <span class="select-option__item select-location-js">eritrea</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="70">
                                                                                <span class="select-option__item select-location-js">estonia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="71">
                                                                                <span class="select-option__item select-location-js">eswatini (formerly swaziland)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="72">
                                                                                <span class="select-option__item select-location-js">ethiopia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="73">
                                                                                <span class="select-option__item select-location-js">fiji</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="74">
                                                                                <span class="select-option__item select-location-js">finland</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="75">
                                                                                <span class="select-option__item select-location-js">france</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="76">
                                                                                <span class="select-option__item select-location-js">gabon</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="77">
                                                                                <span class="select-option__item select-location-js">gambia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="78">
                                                                                <span class="select-option__item select-location-js">georgia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="79">
                                                                                <span class="select-option__item select-location-js">germany</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="80">
                                                                                <span class="select-option__item select-location-js">ghana</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="81">
                                                                                <span class="select-option__item select-location-js">greece</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="82">
                                                                                <span class="select-option__item select-location-js">grenada</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="83">
                                                                                <span class="select-option__item select-location-js">guatemala</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="84">
                                                                                <span class="select-option__item select-location-js">guinea</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="85">
                                                                                <span class="select-option__item select-location-js">guinea-bissau</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="86">
                                                                                <span class="select-option__item select-location-js">guyana</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="87">
                                                                                <span class="select-option__item select-location-js">haiti</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="88">
                                                                                <span class="select-option__item select-location-js">honduras</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="89">
                                                                                <span class="select-option__item select-location-js">hungary</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="90">
                                                                                <span class="select-option__item select-location-js">iceland</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="91">
                                                                                <span class="select-option__item select-location-js">india</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="92">
                                                                                <span class="select-option__item select-location-js">indonesia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="93">
                                                                                <span class="select-option__item select-location-js">iran</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="94">
                                                                                <span class="select-option__item select-location-js">iraq</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="95">
                                                                                <span class="select-option__item select-location-js">ireland</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="96">
                                                                                <span class="select-option__item select-location-js">israel</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="97">
                                                                                <span class="select-option__item select-location-js">italy</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="98">
                                                                                <span class="select-option__item select-location-js">jamaica</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="99">
                                                                                <span class="select-option__item select-location-js">japan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="100">
                                                                                <span class="select-option__item select-location-js">jordan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="101">
                                                                                <span class="select-option__item select-location-js">kazakhstan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="102">
                                                                                <span class="select-option__item select-location-js">kenya</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="103">
                                                                                <span class="select-option__item select-location-js">kiribati</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="104">
                                                                                <span class="select-option__item select-location-js">kosovo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="105">
                                                                                <span class="select-option__item select-location-js">kuwait</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="106">
                                                                                <span class="select-option__item select-location-js">kyrgyzstan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="107">
                                                                                <span class="select-option__item select-location-js">laos</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="108">
                                                                                <span class="select-option__item select-location-js">latvia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="109">
                                                                                <span class="select-option__item select-location-js">lebanon</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="110">
                                                                                <span class="select-option__item select-location-js">lesotho</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="111">
                                                                                <span class="select-option__item select-location-js">liberia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="112">
                                                                                <span class="select-option__item select-location-js">liechtenstein</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="113">
                                                                                <span class="select-option__item select-location-js">luxembourg</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="114">
                                                                                <span class="select-option__item select-location-js">madagascar</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="116">
                                                                                <span class="select-option__item select-location-js">malawi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="115">
                                                                                <span class="select-option__item select-location-js">malaysia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="118">
                                                                                <span class="select-option__item select-location-js">maldives</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="119">
                                                                                <span class="select-option__item select-location-js">mali</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="120">
                                                                                <span class="select-option__item select-location-js">malta</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="121">
                                                                                <span class="select-option__item select-location-js">marshall islands</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="122">
                                                                                <span class="select-option__item select-location-js">mauritania</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="123">
                                                                                <span class="select-option__item select-location-js">mauritius</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="124">
                                                                                <span class="select-option__item select-location-js">mexico</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="125">
                                                                                <span class="select-option__item select-location-js">micronesia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="126">
                                                                                <span class="select-option__item select-location-js">moldova</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="127">
                                                                                <span class="select-option__item select-location-js">monaco</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="128">
                                                                                <span class="select-option__item select-location-js">mongolia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="129">
                                                                                <span class="select-option__item select-location-js">montenegro</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="130">
                                                                                <span class="select-option__item select-location-js">morocco</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="131">
                                                                                <span class="select-option__item select-location-js">myanmar (formerly burma)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="132">
                                                                                <span class="select-option__item select-location-js">namibia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="133">
                                                                                <span class="select-option__item select-location-js">nauru</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="134">
                                                                                <span class="select-option__item select-location-js">nepal</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="135">
                                                                                <span class="select-option__item select-location-js">netherlands</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="136">
                                                                                <span class="select-option__item select-location-js">new zealand</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="137">
                                                                                <span class="select-option__item select-location-js">nicaragua</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="138">
                                                                                <span class="select-option__item select-location-js">niger</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="139">
                                                                                <span class="select-option__item select-location-js">north macedonia (formerly macedonia)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="140">
                                                                                <span class="select-option__item select-location-js">norway</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="141">
                                                                                <span class="select-option__item select-location-js">oman</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="142">
                                                                                <span class="select-option__item select-location-js">pakistan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="143">
                                                                                <span class="select-option__item select-location-js">palau</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="144">
                                                                                <span class="select-option__item select-location-js">palestine</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="145">
                                                                                <span class="select-option__item select-location-js">panama</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="146">
                                                                                <span class="select-option__item select-location-js">papua new guinea</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="147">
                                                                                <span class="select-option__item select-location-js">paraguay</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="148">
                                                                                <span class="select-option__item select-location-js">peru</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="149">
                                                                                <span class="select-option__item select-location-js">philippines</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="150">
                                                                                <span class="select-option__item select-location-js">poland</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="151">
                                                                                <span class="select-option__item select-location-js">portugal</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="152">
                                                                                <span class="select-option__item select-location-js">qatar</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="54">
                                                                                <span class="select-option__item select-location-js">republic of the congo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="153">
                                                                                <span class="select-option__item select-location-js">romania</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="154">
                                                                                <span class="select-option__item select-location-js">russia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="155">
                                                                                <span class="select-option__item select-location-js">rwanda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="156">
                                                                                <span class="select-option__item select-location-js">saint kitts and nevis</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="157">
                                                                                <span class="select-option__item select-location-js">saint lucia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="158">
                                                                                <span class="select-option__item select-location-js">saint vincent and the grenadines</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="159">
                                                                                <span class="select-option__item select-location-js">samoa</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="160">
                                                                                <span class="select-option__item select-location-js">san marino</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="161">
                                                                                <span class="select-option__item select-location-js">sao tome and principe</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="162">
                                                                                <span class="select-option__item select-location-js">saudi arabia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="163">
                                                                                <span class="select-option__item select-location-js">senegal</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="164">
                                                                                <span class="select-option__item select-location-js">serbia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="165">
                                                                                <span class="select-option__item select-location-js">seychelles</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="166">
                                                                                <span class="select-option__item select-location-js">sierra leone</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="167">
                                                                                <span class="select-option__item select-location-js">singapore</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="168">
                                                                                <span class="select-option__item select-location-js">slovakia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="117">
                                                                                <span class="select-option__item select-location-js">slovenia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="170">
                                                                                <span class="select-option__item select-location-js">solomon islands</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="171">
                                                                                <span class="select-option__item select-location-js">somalia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="172">
                                                                                <span class="select-option__item select-location-js">south africa</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="173">
                                                                                <span class="select-option__item select-location-js">south korea</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="174">
                                                                                <span class="select-option__item select-location-js">south sudan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="175">
                                                                                <span class="select-option__item select-location-js">spain</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="177">
                                                                                <span class="select-option__item select-location-js">sudan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="178">
                                                                                <span class="select-option__item select-location-js">suriname</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="179">
                                                                                <span class="select-option__item select-location-js">sweden</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="180">
                                                                                <span class="select-option__item select-location-js">switzerland</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="181">
                                                                                <span class="select-option__item select-location-js">syria</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="182">
                                                                                <span class="select-option__item select-location-js">taiwan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="183">
                                                                                <span class="select-option__item select-location-js">tajikistan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="184">
                                                                                <span class="select-option__item select-location-js">tanzania</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="185">
                                                                                <span class="select-option__item select-location-js">thailand</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="186">
                                                                                <span class="select-option__item select-location-js">timor-leste</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="187">
                                                                                <span class="select-option__item select-location-js">togo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="188">
                                                                                <span class="select-option__item select-location-js">tongo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="189">
                                                                                <span class="select-option__item select-location-js">trinidad and tobago</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="190">
                                                                                <span class="select-option__item select-location-js">tunisia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="191">
                                                                                <span class="select-option__item select-location-js">turkey</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="192">
                                                                                <span class="select-option__item select-location-js">turkmenistan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="193">
                                                                                <span class="select-option__item select-location-js">tuvalu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="194">
                                                                                <span class="select-option__item select-location-js">uganda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="195">
                                                                                <span class="select-option__item select-location-js">ukraine</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="196">
                                                                                <span class="select-option__item select-location-js">united arab emirates</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="197">
                                                                                <span class="select-option__item select-location-js">united kingdom</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="6">
                                                                                <span class="select-option__item select-location-js">united states</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="199">
                                                                                <span class="select-option__item select-location-js">uruguay</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="200">
                                                                                <span class="select-option__item select-location-js">uzbekistan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="201">
                                                                                <span class="select-option__item select-location-js">vanuatu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="202">
                                                                                <span class="select-option__item select-location-js">vatican city (holy see)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="203">
                                                                                <span class="select-option__item select-location-js">venezuela</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="204">
                                                                                <span class="select-option__item select-location-js">vietnam</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="205">
                                                                                <span class="select-option__item select-location-js">zambia</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input country-filter-js" type="checkbox" name="locations[]" value="206">
                                                                                <span class="select-option__item select-location-js">zimbabwe</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ GENDER FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Teacher Gender <span class="filters-count gender-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Gender</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('gender[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input gender-filter-js" type="checkbox" name="gender[]" value="1">
                                                                                <span class="select-option__item">Male</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input gender-filter-js" type="checkbox" name="gender[]" value="2">
                                                                                <span class="select-option__item">Female</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ SPEAKS FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Teacher Speaks <span class="filters-count speak-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Speaks</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('speaks[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="1">
                                                                                <span class="select-option__item">Afar</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="2">
                                                                                <span class="select-option__item">Abkhazian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="3">
                                                                                <span class="select-option__item">Avestan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="4">
                                                                                <span class="select-option__item">Afrikaans</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="5">
                                                                                <span class="select-option__item">Amharic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="6">
                                                                                <span class="select-option__item">Aragonese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="7">
                                                                                <span class="select-option__item">Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="8">
                                                                                <span class="select-option__item">Assamese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="9">
                                                                                <span class="select-option__item">Avaric</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="10">
                                                                                <span class="select-option__item">Aymara</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="11">
                                                                                <span class="select-option__item">Azerbaijani</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="12">
                                                                                <span class="select-option__item">Bashkir</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="13">
                                                                                <span class="select-option__item">Belarusian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="14">
                                                                                <span class="select-option__item">Bulgarian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="15">
                                                                                <span class="select-option__item">Bihari languages</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="16">
                                                                                <span class="select-option__item">Bislama</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="17">
                                                                                <span class="select-option__item">Bambara</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="18">
                                                                                <span class="select-option__item">Turkish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="19">
                                                                                <span class="select-option__item">Tibetan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="20">
                                                                                <span class="select-option__item">Breton</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="21">
                                                                                <span class="select-option__item">Bosnian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="22">
                                                                                <span class="select-option__item">Catalan, Valencian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="23">
                                                                                <span class="select-option__item">Chechen</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="24">
                                                                                <span class="select-option__item">Chamorro</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="25">
                                                                                <span class="select-option__item">Corsican</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="26">
                                                                                <span class="select-option__item">Cree</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="27">
                                                                                <span class="select-option__item">Czech</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="28">
                                                                                <span class="select-option__item">Church Slavic, Slavonic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="29">
                                                                                <span class="select-option__item">Chuvash</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="30">
                                                                                <span class="select-option__item">Welsh</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="31">
                                                                                <span class="select-option__item">Danish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="32">
                                                                                <span class="select-option__item">German</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="33">
                                                                                <span class="select-option__item">Divehi, Dhivehi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="34">
                                                                                <span class="select-option__item">Dzongkha</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="35">
                                                                                <span class="select-option__item">Ewe</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="36">
                                                                                <span class="select-option__item">Greek, Modern</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="37">
                                                                                <span class="select-option__item">English</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="38">
                                                                                <span class="select-option__item">Esperanto</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="39">
                                                                                <span class="select-option__item">Spanish, Castilian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="40">
                                                                                <span class="select-option__item">Estonian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="41">
                                                                                <span class="select-option__item">Basque</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="42">
                                                                                <span class="select-option__item">Persian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="43">
                                                                                <span class="select-option__item">Fulah</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="44">
                                                                                <span class="select-option__item">Finnish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="45">
                                                                                <span class="select-option__item">Fijian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="46">
                                                                                <span class="select-option__item">Faroese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="47">
                                                                                <span class="select-option__item">French</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="48">
                                                                                <span class="select-option__item">Western Frisian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="49">
                                                                                <span class="select-option__item">Irish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="50">
                                                                                <span class="select-option__item">Gaelic, Scottish Gaelic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="51">
                                                                                <span class="select-option__item">Galician</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="52">
                                                                                <span class="select-option__item">Guarani</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="53">
                                                                                <span class="select-option__item">Gujarati</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="54">
                                                                                <span class="select-option__item">Manx</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="55">
                                                                                <span class="select-option__item">Hausa</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="56">
                                                                                <span class="select-option__item">Hebrew</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="57">
                                                                                <span class="select-option__item">Korean</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="58">
                                                                                <span class="select-option__item">Hiri Motu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="59">
                                                                                <span class="select-option__item">Croatian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="60">
                                                                                <span class="select-option__item">Haitian, Haitian Creole</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="61">
                                                                                <span class="select-option__item">Hungarian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="62">
                                                                                <span class="select-option__item">Armenian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="63">
                                                                                <span class="select-option__item">Herero</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="64">
                                                                                <span class="select-option__item">Interlingua</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="65">
                                                                                <span class="select-option__item">Indonesian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="66">
                                                                                <span class="select-option__item">Occidental</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="67">
                                                                                <span class="select-option__item">Igbo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="68">
                                                                                <span class="select-option__item">Sichuan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="69">
                                                                                <span class="select-option__item">Ido</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="70">
                                                                                <span class="select-option__item">Icelandic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="71">
                                                                                <span class="select-option__item">Italian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="72">
                                                                                <span class="select-option__item">Inuktitut</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="73">
                                                                                <span class="select-option__item">Japanese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="74">
                                                                                <span class="select-option__item">Javanese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="75">
                                                                                <span class="select-option__item">Georgian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="76">
                                                                                <span class="select-option__item">Kongo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="77">
                                                                                <span class="select-option__item">Kikuyu, Gikuyu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="78">
                                                                                <span class="select-option__item">Kuanyama, Kwanyama</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="79">
                                                                                <span class="select-option__item">Kazakh</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="80">
                                                                                <span class="select-option__item">Kalaallisut, Greenlandic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="81">
                                                                                <span class="select-option__item">Central Khmer</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="82">
                                                                                <span class="select-option__item">Kannada</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="83">
                                                                                <span class="select-option__item">Korean</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="84">
                                                                                <span class="select-option__item">Kanuri</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="85">
                                                                                <span class="select-option__item">Kashmiri</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="86">
                                                                                <span class="select-option__item">Kurdish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="87">
                                                                                <span class="select-option__item">Komi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="88">
                                                                                <span class="select-option__item">Cornish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="89">
                                                                                <span class="select-option__item">Kirghiz, Kyrgyz</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="90">
                                                                                <span class="select-option__item">Latin</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="91">
                                                                                <span class="select-option__item">Luxembourgish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="92">
                                                                                <span class="select-option__item">Ganda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="93">
                                                                                <span class="select-option__item">Limburgan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="94">
                                                                                <span class="select-option__item">Lingala</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="95">
                                                                                <span class="select-option__item">Lao</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="96">
                                                                                <span class="select-option__item">Lithuanian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="97">
                                                                                <span class="select-option__item">Luba-Katanga</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="98">
                                                                                <span class="select-option__item">Latvian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="99">
                                                                                <span class="select-option__item">Malagasy</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="100">
                                                                                <span class="select-option__item">Marshallese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="101">
                                                                                <span class="select-option__item">Maori</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="102">
                                                                                <span class="select-option__item">Macedonian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="103">
                                                                                <span class="select-option__item">Malayalam</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="104">
                                                                                <span class="select-option__item">Mongolian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="105">
                                                                                <span class="select-option__item">Marathi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="106">
                                                                                <span class="select-option__item">Malay</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="107">
                                                                                <span class="select-option__item">Maltese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="108">
                                                                                <span class="select-option__item">Burmese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="109">
                                                                                <span class="select-option__item">Nauru</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="110">
                                                                                <span class="select-option__item">Bokmal</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="111">
                                                                                <span class="select-option__item">Ndebele, North; North Ndebele</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="112">
                                                                                <span class="select-option__item">Nepali</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="113">
                                                                                <span class="select-option__item">Ndonga</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="114">
                                                                                <span class="select-option__item">Dutch; Flemish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="115">
                                                                                <span class="select-option__item">Norwegian Nynorsk; Nynorsk, Norwegian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="116">
                                                                                <span class="select-option__item">Norwegian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="117">
                                                                                <span class="select-option__item">Ndebele, South; South Ndebele</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="118">
                                                                                <span class="select-option__item">Navajo; Navaho</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="119">
                                                                                <span class="select-option__item">Chichewa; Chewa; Nyanja</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="120">
                                                                                <span class="select-option__item">Occitan (post 1500)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="121">
                                                                                <span class="select-option__item">Ojibwa</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="122">
                                                                                <span class="select-option__item">Oromo</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="123">
                                                                                <span class="select-option__item">Oriya</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="124">
                                                                                <span class="select-option__item">Ossetian; Ossetic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="125">
                                                                                <span class="select-option__item">Dutch</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="126">
                                                                                <span class="select-option__item">Pali</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="127">
                                                                                <span class="select-option__item">Polish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="128">
                                                                                <span class="select-option__item">Pushto; Pashto</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="129">
                                                                                <span class="select-option__item">Portuguese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="130">
                                                                                <span class="select-option__item">Quechua</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="131">
                                                                                <span class="select-option__item">Romansh</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="132">
                                                                                <span class="select-option__item">Rundi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="133">
                                                                                <span class="select-option__item">Romanian; Moldavian; Moldovan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="134">
                                                                                <span class="select-option__item">Russian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="135">
                                                                                <span class="select-option__item">Kinyarwanda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="136">
                                                                                <span class="select-option__item">Sanskrit</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="137">
                                                                                <span class="select-option__item">Sardinian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="138">
                                                                                <span class="select-option__item">Sindhi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="139">
                                                                                <span class="select-option__item">Northern Sami</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="140">
                                                                                <span class="select-option__item">Sango</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="141">
                                                                                <span class="select-option__item">Sinhala; Sinhalese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="142">
                                                                                <span class="select-option__item">Slovak</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="143">
                                                                                <span class="select-option__item">Slovenian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="144">
                                                                                <span class="select-option__item">Samoan</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="145">
                                                                                <span class="select-option__item">Shona</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="146">
                                                                                <span class="select-option__item">Somali</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="147">
                                                                                <span class="select-option__item">Albanian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="148">
                                                                                <span class="select-option__item">Serbian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="149">
                                                                                <span class="select-option__item">Swati</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="150">
                                                                                <span class="select-option__item">Sotho, Southern</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="151">
                                                                                <span class="select-option__item">Sundanese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="152">
                                                                                <span class="select-option__item">Swedish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="153">
                                                                                <span class="select-option__item">Swahili</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="154">
                                                                                <span class="select-option__item">Danish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="155">
                                                                                <span class="select-option__item">Telugu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="156">
                                                                                <span class="select-option__item">Tajik</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="157">
                                                                                <span class="select-option__item">Thai</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="158">
                                                                                <span class="select-option__item">Tigrinya</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="159">
                                                                                <span class="select-option__item">Turkmen</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="160">
                                                                                <span class="select-option__item">Tagalog</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="161">
                                                                                <span class="select-option__item">Tswana</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="162">
                                                                                <span class="select-option__item">Tonga (Tonga Islands)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="163">
                                                                                <span class="select-option__item">Turkish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="164">
                                                                                <span class="select-option__item">Tsonga</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="165">
                                                                                <span class="select-option__item">Tatar</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="166">
                                                                                <span class="select-option__item">Twi</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="167">
                                                                                <span class="select-option__item">Tahitian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="168">
                                                                                <span class="select-option__item">Uighur, Uyghur</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="169">
                                                                                <span class="select-option__item">Ukrainian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="170">
                                                                                <span class="select-option__item">Urdu</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="171">
                                                                                <span class="select-option__item">Uzbek</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="172">
                                                                                <span class="select-option__item">Venda</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="173">
                                                                                <span class="select-option__item">Vietnamese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="174">
                                                                                <span class="select-option__item">Volapuk</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="175">
                                                                                <span class="select-option__item">Walloon</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="176">
                                                                                <span class="select-option__item">Wolof</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="177">
                                                                                <span class="select-option__item">Xhosa</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="178">
                                                                                <span class="select-option__item">Yiddish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="179">
                                                                                <span class="select-option__item">Yoruba</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="180">
                                                                                <span class="select-option__item">Zhuang; Chuang</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="181">
                                                                                <span class="select-option__item">Polish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input speak-filter-js" type="checkbox" name="speaks[]" value="182">
                                                                                <span class="select-option__item">Zulu</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ ACCENTS FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Teacher Accents <span class="filters-count accent-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Accents</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('accents[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="1">
                                                                                <span class="select-option__item">Acadian French </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="2">
                                                                                <span class="select-option__item">Levantine Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="3">
                                                                                <span class="select-option__item">Algerian Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="4">
                                                                                <span class="select-option__item">Libyan Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="5">
                                                                                <span class="select-option__item">American English </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="6">
                                                                                <span class="select-option__item">Maghrebi French</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="7">
                                                                                <span class="select-option__item">Andalusian Spanish </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="8">
                                                                                <span class="select-option__item">Mexican Spanish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="9">
                                                                                <span class="select-option__item">Austrian German </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="10">
                                                                                <span class="select-option__item">Modern Standard Arabic (al-fusha)</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="11">
                                                                                <span class="select-option__item">Bahrani Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="12">
                                                                                <span class="select-option__item">Moroccan Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="13">
                                                                                <span class="select-option__item">Belgian French </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="14">
                                                                                <span class="select-option__item">Najdi Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="15">
                                                                                <span class="select-option__item">Bokmal Nynorsk</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="16">
                                                                                <span class="select-option__item">Brazilian Portuguese </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="17">
                                                                                <span class="select-option__item">Omani Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="18">
                                                                                <span class="select-option__item">British English </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="19">
                                                                                <span class="select-option__item">Quebec French</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="20">
                                                                                <span class="select-option__item">Caribbean Spanish </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="21">
                                                                                <span class="select-option__item">Rioplatense Spanish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="22">
                                                                                <span class="select-option__item">Castilian Spanish </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="23">
                                                                                <span class="select-option__item">Saharan Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="24">
                                                                                <span class="select-option__item">Central American </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="25">
                                                                                <span class="select-option__item">Spanish Scottish English</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="26">
                                                                                <span class="select-option__item">Chadian Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="27">
                                                                                <span class="select-option__item">South African English</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="28">
                                                                                <span class="select-option__item">Chilean Spanish </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="29">
                                                                                <span class="select-option__item">Standard German</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="30">
                                                                                <span class="select-option__item">Egyptian Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="31">
                                                                                <span class="select-option__item">Sudanese Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="32">
                                                                                <span class="select-option__item">European Portuguese </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="33">
                                                                                <span class="select-option__item">Swiss French</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="34">
                                                                                <span class="select-option__item">Gulf Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="35">
                                                                                <span class="select-option__item">Swiss German</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="36">
                                                                                <span class="select-option__item">Indian English </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="37">
                                                                                <span class="select-option__item">Tunisian Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="38">
                                                                                <span class="select-option__item">Iraqi Arabic </span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="39">
                                                                                <span class="select-option__item">Yemeni and Somali Arabic</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input accent-filter-js" type="checkbox" name="accents[]" value="40">
                                                                                <span class="select-option__item">Latin American Spanish</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ LEVEL FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Teaches Level <span class="filters-count level-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Levels</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('levels[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="41">
                                                                                <span class="select-option__item">(A1) Beginner</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="42">
                                                                                <span class="select-option__item">(A2) Upper Beginner</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="43">
                                                                                <span class="select-option__item">(B1) Intermediate</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="44">
                                                                                <span class="select-option__item">(B2) Upper Intermediate</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="45">
                                                                                <span class="select-option__item">(C1) Advanced</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input level-filter-js" type="checkbox" name="levels[]" value="46">
                                                                                <span class="select-option__item">(C2) Upper Advanced </span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ SUBJECTS FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Subjects <span class="filters-count subject-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Subjects</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('subjects[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="59">
                                                                                <span class="select-option__item">Accent Reduction</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="60">
                                                                                <span class="select-option__item">Business Norwegian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="61">
                                                                                <span class="select-option__item">Business Cantonese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="62">
                                                                                <span class="select-option__item">Business Dutch</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="63">
                                                                                <span class="select-option__item">Business English</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="64">
                                                                                <span class="select-option__item">Business French</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="65">
                                                                                <span class="select-option__item">Business German</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="66">
                                                                                <span class="select-option__item">Business Indonesian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="67">
                                                                                <span class="select-option__item">Business Italian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="68">
                                                                                <span class="select-option__item">Business Japanese</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="69">
                                                                                <span class="select-option__item">Business Mandarin</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="70">
                                                                                <span class="select-option__item">Business Norwegian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="71">
                                                                                <span class="select-option__item">Business Russian</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="72">
                                                                                <span class="select-option__item">Business Spanish</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="73">
                                                                                <span class="select-option__item">Colloquial English</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="74">
                                                                                <span class="select-option__item">Grammar Development</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="75">
                                                                                <span class="select-option__item">Listening Comprehension</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="76">
                                                                                <span class="select-option__item">Phonetics</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="77">
                                                                                <span class="select-option__item">Reading Comprehension</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="78">
                                                                                <span class="select-option__item">Vocabulary Development</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="79">
                                                                                <span class="select-option__item">Writing Correction</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="80">
                                                                                <span class="select-option__item">Education</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="81">
                                                                                <span class="select-option__item">Work Experience</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input subject-filter-js" type="checkbox" name="subjects[]" value="82">
                                                                                <span class="select-option__item">Certifications</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ LESSONS INCLUDES FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Lesson Includes <span class="filters-count include-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Lesson Includes</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('lesson_type[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="50">
                                                                                <span class="select-option__item">Curriculum</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="51">
                                                                                <span class="select-option__item">Proficiency Assessment</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="52">
                                                                                <span class="select-option__item">Homework</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="53">
                                                                                <span class="select-option__item">Quizzes /Tests</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="54">
                                                                                <span class="select-option__item">Learning Materials</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="55">
                                                                                <span class="select-option__item">Reading Exercises</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="56">
                                                                                <span class="select-option__item">Lesson Plans</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input include-filter-js" type="checkbox" name="lesson_type[]" value="57">
                                                                                <span class="select-option__item">Writing Exercises </span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ PREPARATIONS FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Test Preparations <span class="filters-count test-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Test Preparations</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('tests[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="83">
                                                                                <span class="select-option__item">ACT</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="84">
                                                                                <span class="select-option__item">AP</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="85">
                                                                                <span class="select-option__item">APTIS</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="86">
                                                                                <span class="select-option__item">BEC</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="87">
                                                                                <span class="select-option__item">CAE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="88">
                                                                                <span class="select-option__item">CPE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="89">
                                                                                <span class="select-option__item">DELE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="90">
                                                                                <span class="select-option__item">EOI</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="91">
                                                                                <span class="select-option__item">ESOL</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="92">
                                                                                <span class="select-option__item">FCE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="93">
                                                                                <span class="select-option__item">GCSE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="94">
                                                                                <span class="select-option__item">GMAT</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="95">
                                                                                <span class="select-option__item">GRE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="96">
                                                                                <span class="select-option__item">ICAS</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="97">
                                                                                <span class="select-option__item">IELTS</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="98">
                                                                                <span class="select-option__item">IGCSE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="99">
                                                                                <span class="select-option__item">ISE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="100">
                                                                                <span class="select-option__item">IBDP</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="101">
                                                                                <span class="select-option__item">KET</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="102">
                                                                                <span class="select-option__item">OET</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="103">
                                                                                <span class="select-option__item">OPI</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="104">
                                                                                <span class="select-option__item">PET</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="105">
                                                                                <span class="select-option__item">SAT</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="106">
                                                                                <span class="select-option__item">SIELE</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="107">
                                                                                <span class="select-option__item">SSAT</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="108">
                                                                                <span class="select-option__item">TOEFL</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input test-filter-js" type="checkbox" name="tests[]" value="109">
                                                                                <span class="select-option__item">TOEIC</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                                <!-- [ AGE GROUP FILTER ========= -->
                                                <div class="filter-item">
                                                    <div class="filter-item__trigger cursor-pointer filter-item__trigger-js">
                                                        <div class="filter-item__label">
                                                            Learner Age Group <span class="filters-count age-group-count-js" style="display: none;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item__target filter-item__target-js" style="display: none;">
                                                        <div class="filter-dropdown">
                                                            <div class="filter-dropdown__head">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <div>
                                                                        <h5>Select Age Group</h5>
                                                                    </div>
                                                                    <div><a href="javascript:clearMore('age_group[]');" class="clear-link bold-600 color-primary underline">Clear</a></div>
                                                                </div>
                                                            </div>
                                                            <div class="filter-dropdown__body">
                                                                <div class="select-list select-list--inline">
                                                                    <ul>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input age-group-filter-js" type="checkbox" name="age_group[]" value="47">
                                                                                <span class="select-option__item">4 Years to 11 Years</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input age-group-filter-js" type="checkbox" name="age_group[]" value="48">
                                                                                <span class="select-option__item">12 Years to 18 Years</span>
                                                                            </label>
                                                                        </li>
                                                                        <li>
                                                                            <label class="select-option">
                                                                                <input class="select-option__input age-group-filter-js" type="checkbox" name="age_group[]" value="49">
                                                                                <span class="select-option__item">18+ Years</span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ] -->
                                            </div>
                                        </div>
                                        <div class="filter-dropdown__footer d-none d-sm-block">
                                            <div class="filter-actions">
                                                <a href="javascript:clearAllDesktop();" class="btn btn--gray">Clear All</a>
                                                <a href="javascript:searchMore(document.frmSearch);" class="btn btn--secondary margin-left-4">Apply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ] -->
                    </div>
                </div>
            </div>
        </header>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        $(".filter-item__trigger").click(function(){
            console.log("asd");
            $(this).next(".filter-item__target").slideToggle();
        })
    </script>
</body>

</html>