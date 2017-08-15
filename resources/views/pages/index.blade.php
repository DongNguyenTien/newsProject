@extends('layouts.frontend_default')

@section('content')
    <section class="promo_slider">
        <div class="promo_slider--slides promo_slider--slides-style2 js-promo_slider  slide_simple--background" data-scroll='0'>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="promo_slider_banner">
                                        <div class="promo_slider_tittle "><span class="typed-element"></span></div>
                                        <a href="" class="button -arrowed -waikawa_green button-shadow js-next-step"><span class="button--inner">Click vào đây để xem</span></a>
                                    </div>
                                    <div class="promo_slider_banner-footer-wrap">
                                        <div class="promo_slider_banner-footer">
                                            <p>Hãy gửi thông tin liên hệ cho chúng tôi, chúng tôi sẽ tư vấn cho bạn nhanh nhất có thể!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="slide_simple--title_middle">Bạn đang tìm kiếm loại hình bảo hiểm nào?</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="category_container js-sub-slider">
                                        <label for="radio1" class="category_container--slide" data-goto="2">
                                            <i class="icons8-historic-ship color_green"></i>
                                            <span class="category_name">Du lịch</span>
                                            <input id="radio1" type="radio" name="subject" value="Household">
                                        </label>
                                        <label for="radio2" class="category_container--slide" data-goto="3">
                                            <i class=" icons8-apartment color_green"></i>
                                            <span class="category_name">Ô tô</span>
                                            <input id="radio2" type="radio" name="subject" value="Auto">
                                        </label>
                                        <label for="radio3" class="category_container--slide" data-goto="4">
                                            <i class=" icons8-apartment color_green "></i>
                                            <span class="category_name">Nhà</span>
                                            <input id="radio3" type="radio" name="subject" value="Condominium">
                                        </label>
                                        <label for="radio4" class="category_container--slide" data-goto="5">
                                            <i class="icons8-gender-neutral-user color_green"></i>
                                            <span class="category_name">Sức khỏe</span>
                                            <input id="radio4" type="radio" name="subject" value="Life">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <form action="{{ route('compare_product') }}" method="get">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="slide_simple--title_middle">Bảo hiểm du lịch</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="promo_slider_form">
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3 text-center">
                                                    <label>
                                                        <span class="custom-dropdown ">
                                                            <select name="insurance_type" class="form-control">
                                                                <option>Loại hình bảo hiểm</option>
                                                                <option value="1">Bảo hiểm theo năm</option>
                                                                <option value="2">Bảo hiểm theo chuyến</option>
                                                            </select>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <span class="custom-dropdown ">
                                                                <select name="trip_type">
                                                                    <option value="">Điểm đến</option>
                                                                    <option value="1">Trong nước</option>
                                                                    <option value="2">Đông Nam Á</option>
                                                                    <option value="3">Châu Á</option>
                                                                    <option value="4">Toàn cầu</option>
                                                                </select>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <input type="text" placeholder="Ngày đi" class="date-picker" name="trip_start" required="required">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <input type="text" placeholder="Ngày về" class="date-picker" name="trip_end" required="required">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="promo_slider_form--label_full">
                                                        <span class="form-arror">* Sorry, the <i> </i> is not valid.</span>
                                                        <input type="hidden" name="insurance_type" value="3">
                                                        <input type="hidden" name="category" value="3">
                                                        <button type="submit" class="button -arrowed  -waikawa_green  -form_size2 "><span class="button--inner">Tìm kiếm</span></button>
                                                        <a href="javascript:" class="insurance-back button -green_dark -bordered" data-goto="1"><span class="button--inner">Quay lại</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <form action="{{ route('compare_product') }}" method="get">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="slide_simple--title_middle">Cung cấp thông tin xe của bạn</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="promo_slider_form">
                                            <!-- <form action="#" class="selector_form"> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <span class="custom-dropdown ">
                                                                <select name="car_brand" id="car_brand_select">
                                                                    <option value="">Nhà sản xuất</option>
                                                                    @if (isset($carBands) && !empty($carBands))
                                                                        @foreach ($carBands as $brand)
                                                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <span class="custom-dropdown">
                                                                <select name="car_vehicles" id="car_vehicles_select">
                                                                    <option value="">Chọn hãng trước</option>
                                                                </select>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <select id="car_years_select" name="year_manufacture">
                                                                <option>Chọn loại xe trước</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="promo_slider_form--label_full">
                                                        <span class="form-arror">* Sorry, the <i> </i> is not valid.</span>
                                                        <input type="hidden" name="insurance_type" value="2">
                                                        <input type="hidden" name="category" value="2">
                                                        <button type="submit" class="button -arrowed  -waikawa_green  -form_size2 "><span class="button--inner">Tìm kiếm</span></button>
                                                        <a href="javascript:" class="insurance-back button -green_dark -bordered" data-goto="1"><span class="button--inner">Quay lại</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <form action="{{ route('compare_product') }}" method="get">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="slide_simple--title_middle">Cung cấp thông tin nhà bạn đang sở hữu</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="promo_slider_form">
                                            <!-- <form action="#" class="selector_form"> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <span class="custom-dropdown ">
                                                                <select name="hourse_type">
                                                                    <option value="">Loại hình</option>
                                                                    <option value="1">Nhà</option>
                                                                    <option value="2">Chung cư</option>
                                                                </select>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <input type="number" placeholder="Năm xây dựng" name="house_create_year" required="required">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <input type="number" placeholder="Giá trị nhà" name="house_price" required="required">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="promo_slider_form--label_full">
                                                        <span class="form-arror">* Sorry, the <i> </i> is not valid.</span>
                                                        <input type="hidden" name="insurance_type" value="4">
                                                        <input type="hidden" name="category" value="4">
                                                        <button type="submit" class="button -arrowed  -waikawa_green  -form_size2 "><span class="button--inner">Tìm kiếm</span></button>
                                                        <a href="javascript:" class="insurance-back button -green_dark -bordered" data-goto="1"><span class="button--inner">Quay lại</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <form action="{{ route('compare_product') }}" method="get">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="slide_simple--title_middle">Hãy cho chúng tôi biết loại bảo hiểm bạn muốn sử dụng</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="promo_slider_form">
                                            <!-- <form action="#" class="selector_form"> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <span class="custom-dropdown ">
                                                                <select name="category">
                                                                    <option value="">Loại bảo hiểm</option>
                                                                    @if (isset($lifeSubCategories) && !empty($lifeSubCategories))
                                                                        @foreach ($lifeSubCategories as $lifeCategory)
                                                                            <option value="{{ $lifeCategory->id }}">{{ $lifeCategory->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">
                                                        <label>
                                                            <input type="number" placeholder="Độ tuổi bảo hiểm" name="age_range" required="required">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="promo_slider_form-item">

                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="promo_slider_form--label_full">
                                                        <span class="form-arror">* Sorry, the <i> </i> is not valid.</span>
                                                        <input type="hidden" name="insurance_type" value="1">
                                                        <button type="submit" class="button -arrowed  -waikawa_green  -form_size2 "><span class="button--inner">Tìm kiếm</span></button>
                                                        <a href="javascript:" class="insurance-back button -green_dark -bordered" data-goto="1"><span class="button--inner">Quay lại</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo_slider--slide">
                <div class="slide_simple">
                    <div class="slide_simple--container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="slide_simple--title_middle">Thank you! You should hear back from us really soon.</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="promo_finish_banner">
                                        <i class="icons8-smiley"></i>
                                        <p class="promo_finish_title">In case you don’t hear back from us, get in touch.</p>
                                        <span class="promo_finish_phone">1-800-000-0000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo_slider_nav promo_slider_nav_over">
            <div class="container">
                <div class="js-promo_slider_nav">
                    <div class="promo_slider_nav--slide">
                        <div class="promo_slider_nav--item">
                            <i class="promo_slider_nav--item_icon icons8-idea"></i>
                            <strong class="promo_slider_nav--item_title">1st Step </strong>
                            <p class="promo_slider_nav--item_description">Mauris posuere conse</p>
                        </div>
                    </div>
                    <div class="promo_slider_nav--slide">
                        <div class="promo_slider_nav--item">
                            <i class="promo_slider_nav--item_icon icons8-center-direction"></i>
                            <strong class="promo_slider_nav--item_title">2nd Step</strong>
                            <p class="promo_slider_nav--item_description">Lorem ipsum asmo dolor</p>
                        </div>
                    </div>
                    <div class="promo_slider_nav--slide">
                        <div class="promo_slider_nav--item">
                            <i class="promo_slider_nav--item_icon icons8-debt"></i>
                            <strong class="promo_slider_nav--item_title">3rd Step</strong>
                            <p class="promo_slider_nav--item_description">Uties vitae eros santo</p>
                        </div>
                    </div>
                    <div class="promo_slider_nav--slide">
                        <div class="promo_slider_nav--item">
                            <i class="promo_slider_nav--item_icon icons8-talk"></i>
                            <strong class="promo_slider_nav--item_title">4th Step</strong>
                            <p class="promo_slider_nav--item_description">Nuncari vulputate laro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">Services</h2>
                <p class="section--description">
                    Proin cursus justo a tortor lobortis, pulvinar suscipit purus luctus.
                    <br> Etiam vel auctor augue, et iaculis mauris
                </p>
            </div>
            <div class="section--container">
                <div class="services">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-bungalow color_white"></i>
                                <h3 class="service_item--title">Household</h3>
                                <div class="service_item--text">
                                    <p>Ut vitae eros ipsum. Supeise accumsan eros nunc, et bum magna asso scelerue vitae.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-reviewer color_white"></i>
                                <h3 class="service_item--title">Health</h3>
                                <div class="service_item--text">
                                    <p>Integer sodles at sen seanto dapibus. Vivus tincint urars ac enim plinar, mosie acums.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon  icons8-car color_white"></i>
                                <h3 class="service_item--title">Automotive</h3>
                                <div class="service_item--text">
                                    <p>Integer sodles at sen seanto dapibus. Vivus tincint urars ac enim plinar, mosie acums.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-apartment color_white"></i>
                                <h3 class="service_item--title">Condominium</h3>
                                <div class="service_item--text">
                                    <p>Aenean a neque odio. Integer mattis, orci id laoret vultate, urna dim gravida elit.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-diamond color_white"></i>
                                <h3 class="service_item--title">Life Insurance</h3>
                                <div class="service_item--text">
                                    <p>Ut vitae eros ipsum. Supeise accumsan eros nunc, et bum magna asso scelerue vitae.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-palm color_white"></i>
                                <h3 class="service_item--title">Travel Insurance</h3>
                                <div class="service_item--text">
                                    <p>Ut et coue augue. Maecenas fernum vel ante a aliam. Etiam vivera mius as sapien.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-umbrella color_white"></i>
                                <h3 class="service_item--title">Financial Insurance</h3>
                                <div class="service_item--text">
                                    <p>Integer sodles at sen seanto dapibus. Vivus tincint urars ac enim plinar, mosie acums.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="service_item -colored -colored_1">
                                <i class="service_item--icon icons8-business color_white"></i>
                                <h3 class="service_item--title">Consulting</h3>
                                <div class="service_item--text">
                                    <p>Aenean a neque odio. Integer mattis, orci id laoret vultate, urna dim gravida elit.</p>
                                </div>
                                <footer class="service_item--footer"><a href="#" class="link -white">Learn More</a></footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section -compact -gray_light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="why_mini">
                        <h2 class="why_mini--title">Why People Choose Us?</h2>
                        <ul class="why_mini--list">
                            <li class="why_mini--item">
                                <i class="why_mini--item_icon icons8-circled-right-2"></i>
                                <h3 class="why_mini--item_title">We are responsible</h3>
                                <div class="why_mini--item_text">
                                    <p>
                                        Mauris volutpat nulla a enim efficitur elementum poritor at diam aliquam et elit elementum, fermentum nisl sed, pellentesque mares. Integer blandit erat bibendum pulvinar lobortis. Mauris sed turpis.
                                    </p>
                                </div>
                            </li>
                            <li class="why_mini--item">
                                <i class="why_mini--item_icon icons8-circled-right-2"></i>
                                <h3 class="why_mini--item_title">99% of our clients are satisfied</h3>
                                <div class="why_mini--item_text">
                                    <p>
                                        Nulla vitae dui et velit sagittis fermentum. Donec rhoncus tincidun. Nullam nibh tellus, blandit vel leo vulputate, commodo elementum. Pellentesque eget quam ultrices, semperos lacus et, lacinia neque.
                                    </p>
                                </div>
                            </li>
                            <li class="why_mini--item">
                                <i class="why_mini--item_icon icons8-circled-right-2"></i>
                                <h3 class="why_mini--item_title">We have reasonable prices</h3>
                                <div class="why_mini--item_text">
                                    <p>
                                        Ut ligula sem, eleifend sed pellentesque nec, viverra ut massa donec ligula sit amet ipsum porttitor aliquam pulvinar quis dolor. Maecenasto elit placerat, finibus velit vel, dignissim sem. Duis sed dignissim risus.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="who_mini">
                        <h2 class="who_mini--title">Who We Are?</h2>
                        <div class="who_mini--container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="who_mini--gallery">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                <figure class="who_mini--gallery_item"><img src="/ebaohiem/images/content/why_who/01.jpg" alt=""></figure>
                                            </div>
                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                <figure class="who_mini--gallery_item"><img src="/ebaohiem/images/content/why_who/02.jpg" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="who_mini--text">
                                        <p>
                                            Phasellus molestie ut odio nec pulvinar. Donec phetra lorem sit amet felis volutpat, et masuada justo blandit. Nullm ialis quam et nisi suscipit, vel vecula tortor molestie. Etiam vestulum aliquet consequat. Vestibulum eget blandit lorem, eget tempor
                                            velit. Suspendisse accumsan vulputate odio, sit amet pretium metus eleifend id. Nulla lobortis a diam vitae commodo. Mauris varius pharetra nunc. Praesent mollis vitae erat eu vulputate sendis.
                                        </p><a href="#" class="who_mini--more">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promo_banner section -paddingless">
        <div class="promo_banner--container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h2 class="promo_banner--title">Why working with us</h2>
                        <p class="promo_banner--text">
                            Integer mattis, orci id laoreet vulputate, urna diam gravida elit, sit amet scelerisque orci dolor id risus. Cras ullamcorper lacus sapien. Vivamus ante magna, congue quis semper quis, ullami.
                        </p>
                        <footer class="promo_banner--footer">
                            <button class="button -bordered -picton_green  -large"><span class="button--inner">Get a Quote</span></button>
                        </footer>
                    </div>
                    <div class="col-lg-6 col-md-12 margin-sm-b30">
                        <div class="call">
                            <div class="circles">
                                <div class="circle-1 circle-pulse">
                                </div>
                                <div class="circle-2 circle-pulse">
                                </div>
                                <div class="circle-3 circle-pulse">
                                </div>
                                <div class="circle-4 circle-pulse"></div>
                                <div class="circle-5 circle-pulse">
                                </div>
                                <a href="tel:123456789000">
                                    <div class="circle-center">
                                        <div class="circle-center-tip">Call us: <strong> 0 (855) 233-5385</strong></div>
                                        <i class="icons8-phone"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">Strong Points</h2>
                <p class="section--description">
                    Pellentesque eget quam ultrices, semper lacus et, lacinia neque.
                    <br> Ut sagittis, lorem eget finibus conmolestie est felis in ligula.
                </p>
            </div>
            <div class="section--container">
                <div class="strong_points">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-add-database"></i>
                                <h3 class="strong_points_item--title">Collect & organize data <br> into one place</h3>
                                <div class="strong_points_item--text">
                                    <p>Maecenas at nisi quam. Donec a ipsum elit. Vivamus augue leo, vehicula et dui necidnunc ligula turpis, tristique ac sem sit amet</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-import"></i>
                                <h3 class="strong_points_item--title">Import financial information <br>from popular sources</h3>
                                <div class="strong_points_item--text">
                                    <p>Praesent mollis vitae erat eu vulputatole stie, purus ut elementum placerat, nibauris scelerisque nulla, hendrerit vulpate augue.</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-overtime"></i>
                                <h3 class="strong_points_item--title">Organize your workflow <br>and collaborate with your team</h3>
                                <div class="strong_points_item--text">
                                    <p>Nunc sed mauris scelerisque, consetur ante in,vehula urna. Etiam oare ac dolor et feu. Sed scelerisque, tellus non conequat molstie.</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-discount"></i>
                                <h3 class="strong_points_item--title">Afforadable prices <br>and payment options available</h3>
                                <div class="strong_points_item--text">
                                    <p>Maecenas at nisi quam. Donec a ipsum elit. Vivamus augue leo, vehicula et dui necidnunc ligula turpis, tristique ac sem sit amet</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="clearfix visible-sm-block"></div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-idea"></i>
                                <h3 class="strong_points_item--title">Make decisions based <br>on worthy data sources</h3>
                                <div class="strong_points_item--text">
                                    <p>Nunc sed mauris scelerisque, consetur ante in,vehula urna. Etiam oare ac dolor et feu. Sed scelerisque, tellus non conequat molstie.</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="strong_points_item">
                                <i class="strong_points_item--icon icons8-last-24-hours"></i>
                                <h3 class="strong_points_item--title">Support provided <br>24/7 by our own experts</h3>
                                <div class="strong_points_item--text">
                                    <p>Nunc sed mauris scelerisque, consetur ante in, vehula urna. Etiam oare ac dolor et feu. Sed scelerisque, tellus non conequat molstie.</p>
                                </div>
                                <footer class="strong_points_item--footer"><a href="#" class="strong_points_item--more">Learn More</a></footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="statistics">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="statistics--item">
                        <i class="statistics--item_icon icons8-name "></i>
                        <span class="statistics--item_label">578 clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="statistics--item">
                        <i class="statistics--item_icon icons8-trophy "></i>
                        <span class="statistics--item_label">563 win-cases</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="statistics--item">
                        <i class="statistics--item_icon icons8-why-us "></i>
                        <span class="statistics--item_label">921 consultations</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="statistics--item">
                        <i class="statistics--item_icon icons8-bank "></i>
                        <span class="statistics--item_label">328 finance plans</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">Get a Quote</h2>
                <p class="section--description">
                    Nulla vehicula sapien nec ante sollicitudin luctus. Duis posuere, metus eget
                    <br> mollis, dolor convallis nulla, ut aliquam nisi lorem eget enim.
                </p>
            </div>
            <div class="section--container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pop_up_tabs pop_up_tabs_full">
                            <div class="tabs-header">
                                <ul>
                                    <li class="active"><a href=".title1">HOUSE INSURANCE</a></li>
                                    <li><a href=".title2">CAR INSURANCE</a></li>
                                    <li><a href=".title3">TRAVEL INSURANCE</a></li>
                                    <li><a href=".title4">LIFE INSURANCE</a></li>
                                    <li class="tabs-header-more"><a href="more">MORE + </a>
                                        <ul>
                                            <li><a href="">Insurance 1</a></li>
                                            <li><a href="">Insurance 2</a></li>
                                            <li><a href="">Insurance 3</a></li>
                                            <li><a href="">Insurance 4</a></li>
                                            <li><a href="">Insurance 5</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tabs-item active title1">
                                    <div class="tabs-item-img js-bg-img">
                                        <img src="/ebaohiem/images/content/popup/bg2.jpg" alt="">
                                    </div>
                                    <div class="tabs-item-content">
                                        <h2 class="tabs-title">House Insurance <span>Quote</span></h2>
                                        <form action="#" class="selector_form">
                                            <div class="label">
                                                <div class="promo_slider_form--label">
                                                    <div class="slider-title ">Level of protection<span class="js-slider-title"></span>
                                                    </div>
                                                    <div class="js-slider-range"></div>
                                                </div>
                                            </div>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  >
                                            <option value="">Your age?</option>
                                            <option value="">18</option>
                                            <option value="">19</option>
                                            </select>
                                            </span>
                                            </label>
                                            <label class="text-left">Do you take any drugs?
                                                <input type="checkbox"  required="required"><span class="checkbox-decor"></span></label>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  >
                                            <option value="">Type of insurance</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>

                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                                <input type="text" placeholder="Your full name"  name="fields[name]" required="required">
                                            </label>
                                            <label>
                                                <input type="text" placeholder="Phone number" required="required">
                                            </label>
                                            <label>
                                                <input type="email" placeholder="Email" name="fields[email]" required="required">
                                            </label>
                                            <label>
                                                <button class="button -green button--mail -medium  ">Request Sent!</button>
                                            </label>
                                            <input type="hidden" name="fields[code]" value="56345_8safs_">
                                        </form>
                                        <p class="form-arror">* Sorry, the <i> </i> is not valid.</p>
                                        <!-- for ajax contact form -->
                                        <div class="ajax-loader"></div>
                                        <div class="ajax-result">
                                            <div class="success"></div>
                                            <div class="error"></div>
                                        </div>
                                        <!-- end ajax contact form -->
                                    </div>
                                </div>
                                <div class="tabs-item title2">
                                    <div class="tabs-item-img js-bg-img">
                                        <img src="/ebaohiem/images/content/popup/bg1.jpg" alt="">
                                    </div>
                                    <div class="tabs-item-content">
                                        <h2 class="tabs-title">Car Insurance <span>Quote</span></h2>
                                        <form action="#" class="selector_form">
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  id="label8">
                                            <option value="">Car manufacturer?</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>

                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  id="label9">
                                            <option value="">Your age</option>
                                            <option value="">18</option>
                                            <option value="">19</option>

                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                                <input type="text" placeholder="Car model?" required="required">
                                            </label>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select >
                                            <option value="">Car registration year</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>
                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="Your full name" name="fields[name]" required="required">
                                            </label>
                                            <label>
                                                <input type="text" placeholder="Phone number" required="required">
                                            </label>
                                            <label>
                                                <input type="email"  placeholder="Email" name="fields[email]" required="required">
                                            </label>
                                            <label>
                                                <button class="button -green button--mail -medium  " >Request Sent!</button>
                                            </label>
                                            <input type="hidden" name="fields[code]" value="56345_8safs_">
                                        </form>
                                        <p class="form-arror">* Sorry, the <i> </i> is not valid.</p>
                                        <!-- for ajax contact form -->
                                        <div class="ajax-loader"></div>
                                        <div class="ajax-result">
                                            <div class="success"></div>
                                            <div class="error"></div>
                                        </div>
                                        <!-- end ajax contact form -->
                                    </div>
                                </div>
                                <div class="tabs-item title3">
                                    <div class="tabs-item-img js-bg-img">
                                        <img src="/ebaohiem/images/content/popup/bg1.jpg" alt="">
                                    </div>
                                    <div class="tabs-item-content">
                                        <h2 class="tabs-title">Travel Insurance <span>Quote</span></h2>
                                        <form action="#" class="selector_form">
                                            <div class="label">
                                                <div class="promo_slider_form--label">
                                                    <div class="slider-title ">Level of protection<span class="js-slider-title"></span>
                                                    </div>
                                                    <div class="js-slider-range"></div>
                                                </div>
                                            </div>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select >
                                            <option value="">How long?</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>
                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  >
                                            <option value="">Destination</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>

                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="How many people?" required="required">
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="Your full name" name="fields[name]" required="required">
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="Phone number" required="required">
                                            </label>
                                            <label>
                                                <input type="email"  placeholder="Email" name="fields[email]" required="required">
                                            </label>
                                            <label>
                                                <button class="button -green button--mail -medium  " >Request Sent!</button>
                                            </label>
                                            <input type="hidden" name="fields[code]" value="56345_8safs_">
                                        </form>
                                        <p class="form-arror">* Sorry, the <i> </i> is not valid.</p>
                                        <!-- for ajax contact form -->
                                        <div class="ajax-loader"></div>
                                        <div class="ajax-result">
                                            <div class="success"></div>
                                            <div class="error"></div>
                                        </div>
                                        <!-- end ajax contact form -->
                                    </div>
                                </div>
                                <div class="tabs-item title4">
                                    <div class="tabs-item-img js-bg-img">
                                        <img src="/ebaohiem/images/content/popup/bg1.jpg" alt="">
                                    </div>
                                    <div class="tabs-item-content">
                                        <h2 class="tabs-title">Life Insurance <span>Quote</span></h2>
                                        <form action="#" class="selector_form">
                                            <div class="label text-left">
                                                <div class="promo_slider_form--label">
                                                    <div class="slider-title ">Level of protection<span class="js-slider-title"></span>
                                                    </div>
                                                    <div class="js-slider-range"></div>
                                                </div>
                                            </div>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  >
                                            <option value="">Your age?</option>
                                            <option value="">18</option>
                                            <option value="">19</option>
                                            </select>
                                            </span>
                                            </label>
                                            <label class="text-left">Do you take any drugs?
                                                <input type="checkbox"  required="required"><span class="checkbox-decor"></span></label>
                                            <label>
                                            <span class="custom-dropdown">
                                            <select  >
                                            <option value="">Type of insurance</option>
                                            <option value="">Variant 1</option>
                                            <option value="">Variant 2</option>
                                            </select>
                                            </span>
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="Your full name" name="fields[name]" required="required">
                                            </label>
                                            <label>
                                                <input type="text"  placeholder="Phone number" required="required">
                                            </label>
                                            <label>
                                                <input type="email"  placeholder="Email" name="fields[email]" required="required">
                                            </label>
                                            <label>
                                                <button class="button -green button--mail -medium  " >Request Sent!</button>
                                            </label>
                                            <input type="hidden" name="fields[code]" value="56345_8safs_">
                                        </form>
                                        <p class="form-arror">* Sorry, the <i> </i> is not valid.</p>
                                        <!-- for ajax contact form -->
                                        <div class="ajax-loader"></div>
                                        <div class="ajax-result">
                                            <div class="success"></div>
                                            <div class="error"></div>
                                        </div>
                                        <!-- end ajax contact form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="service_item -horizontal service_item--vertical_icon">
                            <i class="service_item--icon icons8-overtime color_venice_green"></i>
                            <h3 class="service_item--title">Insurance Reminder</h3>
                            <div class="service_item--text">
                                <p>Integer sodles at sen seanto dapibus. Vivus tincint urars.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="service_item -horizontal service_item--vertical_icon">
                            <i class="service_item--icon icons8-training color_venice_green"></i>
                            <h3 class="service_item--title">Professional Training</h3>
                            <div class="service_item--text">
                                <p>Aenean a neque odio nteger mattis, orci id laoret vultate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="service_item -horizontal service_item--vertical_icon">
                            <i class="service_item--icon icons8-idea color_venice_green"></i>
                            <h3 class="service_item--title">Idea Generation</h3>
                            <div class="service_item--text">
                                <p>Ut vitae eros ipsum. Sueiseac cumsan eros nunc, et bumana.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section -pattern -light">
        <div class="container-fluid">
            <div class="section--header">
                <h2 class="section--title">Our Clients Say</h2>
            </div>
            <div class="section--container">
                <div class="twitter_feed">
                    <div class="twitter_feed--content">
                        <div class="twitter_feed--icon"><i class="fa fa-twitter"></i></div>
                        <div class="twitter_feed--messages js-twitter_feed">
                        </div>
                    </div>
                </div>
                <div class="clients_reviews">
                    <div class="clients_reviews--container js-clients_twitter">
                        <div class="clients_reviews--slide">
                            <div class="client_twitter_review">
                                <div class="client_review--text">
                                    <p>
                                        Maecenas suscipit fringilla elit, sed ullamcorper lorem rutrum non. Ut lorem ipsum, luctus vel erat ut, sagittis mollis ex. Maecenas gravida massa aliquet justo efficitur venenatis. Donec sit amet tincidunt metus, in dictum erat. Pellentesque blandit,
                                        nisi sit amet fermentum.
                                    </p>
                                </div>
                                <div class="client_twitter_review--client">
                                    <span>John Holland, CEO</span><a href="">@Traklizz Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="clients_reviews--slide">
                            <div class="client_twitter_review">
                                <div class="client_review--text">
                                    <p>
                                        Maecenas suscipit fringilla elit, sed ullamcorper lorem rutrum non. Ut lorem ipsum, luctus vel erat ut, sagittis mollis ex. Maecenas gravida massa aliquet justo efficitur venenatis. Donec sit amet tincidunt metus, in dictum erat. Pellentesque blandit,
                                        nisi sit amet fermentum.
                                    </p>
                                </div>
                                <div class="client_twitter_review--client">
                                    <span>John Holland, CEO</span><a href="">@Traklizz Group</a>
                                </div>
                            </div>
                        </div>
                        <div class="clients_reviews--slide">
                            <div class="client_twitter_review">
                                <div class="client_review--text">
                                    <p>
                                        Maecenas suscipit fringilla elit, sed ullamcorper lorem rutrum non. Ut lorem ipsum, luctus vel erat ut, sagittis mollis ex. Maecenas gravida massa aliquet justo efficitur venenatis. Donec sit amet tincidunt metus, in dictum erat. Pellentesque blandit,
                                        nisi sit amet fermentum.
                                    </p>
                                </div>
                                <div class="client_twitter_review--client">
                                    <span>John Holland, CEO</span><a href="">@Traklizz Group</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="partners">
        <div class="container">
            <div class="partners--list ">
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p1.png" alt=""></a>
                </div>
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p2.png" alt=""></a>
                </div>
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p3.png" alt=""></a>
                </div>
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p4.png" alt=""></a>
                </div>
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p5.png" alt=""></a>
                </div>
                <div class="partners--item">
                    <a href="#"><img src="/ebaohiem/images/content/partners/p6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section -pattern -light">
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-phone color_picton_green"></i>
                            <strong class="contact_card--title">Contact Us</strong>
                            <p class="contact_card--text">Feel free to call us on
                                <br> <strong>0 (855) 233-5385</strong>
                                <br> Monday - Friday, 8am - 7pm</p>
                            <button class="button -green_light -bordered"><span class="button--inner">Order a Call Back</span></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-message color_picton_green"></i>
                            <strong class="contact_card--title">Our Email</strong>
                            <p class="contact_card--text">Drop us a line anytime at
                                <br> <strong><a href="mailto:info@insuranced.com">info@insuranced.com</a>,</strong>
                                <br> and we’ll get back soon.</p>
                            <button class="button -green_light -bordered"><span class="button--inner">Start Writing</span></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-xs-10 col-xs-offset-1">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-geo-fence color_picton_green"></i>
                            <strong class="contact_card--title">Our Address</strong>
                            <p class="contact_card--text">Come visit us at
                                <br> <strong>Stock Building, New York,</strong>
                                <br> NY 93459</p>
                            <button class="button -green_light -bordered"><span class="button--inner">See the Map</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#car_brand_select').change(function () {
                getCarVehicle();
            });

            $('#car_vehicles_select').change(function () {
                getCarVehicleYears();
            });

            $('.date-picker').datepicker({
                format: 'dd/mm/yyyy'
            });
        });

        function getCarVehicle()
        {
            var brand = $('#car_brand_select').val();

            $.ajax({
                url: '/get-car-vehicles',
                type: 'post',
                dataType: 'json',
                data: {brand: brand},
                success: function (res) {
                    if (res.success) {
                        if (res.data != undefined) {
                            var options = '';
                            $.each(res.data, function (k, v) {
                                options += '<option value="' + v.code + '">' + v.name + '</option>';
                            });

                            $('#car_vehicles_select').html(options);
                            $('#car_vehicles_select').trigger('change');
                        }
                    } else {

                    }
                }, error: function () {

                }
            });
        }

        function getCarVehicleYears()
        {
            var code = $('#car_vehicles_select').val();

            $.ajax({
                url: '/get-list-car-vehicle-years',
                type: 'post',
                dataType: 'json',
                data: {code: code},
                success: function (res) {
                    if (res.success) {
                        if (res.data != undefined) {
                            var options = '';
                            $.each(res.data, function (k, v) {
                                options += '<option value="' + v.year_manufacture + '">' + v.year_manufacture + '</option>';
                            });

                            $('#car_years_select').html(options);
                        }
                    } else {

                    }
                }, error: function () {

                }
            });
        }
    </script>
@endsection