@extends('layouts.frontend_default')

@section('content')
<style type="text/css">
    .table { width: 100%;}
    .table thead, .table tbody, .table tr { width: 100%;}
    .table td, .table th { padding: 10px; border: 1px solid #333;}
</style>

<div class="layout--container">
    <div class="page_header">
        <div class="container">
            <h1 class="page_header--title">{{ $insuranceType->name }}</h1>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs--list">
                <li class="breadcrumbs--item"><a href="/" class="breadcrumbs--link">Home</a></li>
                <li class="breadcrumbs--item"><a href="#" class="breadcrumbs--link -active">So sánh gói bảo hiểm</a></li>
            </ul>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <div class="section--header">
                <h2 class="section--title">Kết quả tìm kiếm</h2>
                <p class="section--description">
                    Những gói bảo hiểm phù hợp nhất với nhu cầu của bạn:
                </p>
                <div class="text-center section--description">
                    @if (isset($car))
                        <p>Tên xe:{{ $car->name }}, năm sản xuất: {{ $car->year_manufacture }}.</p>
                    @endif
                    @if (isset($carPrice))
                        <p>Giá trị xe: {{ number_format($carPrice->price, 0) }} vnd</p>
                    @endif
                </div>
            </div>
            <div class="section--container">
                <div class="js-case_studies padding-lg-b105">
                    <ul class="tab_navigation row">
                        @if (isset($classes))
                            @foreach($classes as $class)
                                <li class="col-md-2 col-sm-6 col-xs-12">
                                    <a href="#" data-filter=".category-{{ $class->id }}" class="tab_navigation--link">
                                        <i class="tab_navigation--link_icon icons8-layers"></i>
                                        <span class="tab_navigation--link_text">{{ $class->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <div class="case_studies">
                        @if (isset($products) && !empty($products))
                            <div class="row">
                                @foreach($products as $classId => $listProduct)
                                    <div class="col-md-12 mix category-{{ $classId }}">
                                        <div class="product-compare-box box-attributes">
                                            <div class="box-content">
                                                <div class="header">Sản phẩm</div>
                                                <ul class="compare-attribute">
                                                    @if (isset($compareAttributes) && !empty($compareAttributes))
                                                        @foreach($compareAttributes as $attribute)
                                                            <li><span>{{ $attribute->title }}</span></li>
                                                        @endforeach
                                                    @endif
                                                    <li class="price">Phí BH</li>
                                                </ul>
                                            </div>
                                        </div>
                                        @foreach($listProduct as $product)
                                            <div class="product-compare-box">
                                                <div class="box-content">
                                                    <div class="header">{{ $product['name'] }}</div>
                                                    <ul class="compare-attribute">
                                                        @if (isset($compareAttributes) && !empty($compareAttributes))
                                                            @foreach($compareAttributes as $attribute)
                                                                <li><span>{{ isset($product['attributes'][$attribute->id]) ? $product['attributes'][$attribute->id] : '' }}</span></li>
                                                            @endforeach
                                                        @endif
                                                        @if(isset($prices[$product['id']]) && $prices[$product['id']] > 0)
                                                            <li class="price">{{ number_format($prices[$product['id']], 0) }}</li>
                                                        @else
                                                            <li class="price">Liên hệ</li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div>Không tìm thấy sản phẩm nào phù hợp</div>
                        @endif
                    </div>
                </div>
                <!-- pagination-->
                <nav class="pagination"><a href="#" class="pagination--link -prev"><i class="icons8-right"></i>&nbsp; Previous Page</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="-active">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>

                    </ul><a href="#" class="pagination--link -next">Next Page &nbsp;<i class="icons8-right"></i></a>
                </nav>
            </div>
        </div>
    </section>
    <div class="section -pattern -light">
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-0 col-xs-12">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-phone color_venice_green"></i>
                            <strong class="contact_card--title">Contact Us</strong>
                            <p class="contact_card--text">Feel free to call us on
                                <br> <strong>0 (855) 233-5385</strong>
                                <br> Monday - Friday, 8am - 7pm</p>
                            <button class="button -green_dark -bordered"><span class="button--inner">Order a Call Back</span></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-xs-12">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-message color_venice_green"></i>
                            <strong class="contact_card--title">Our Email</strong>
                            <p class="contact_card--text">Drop us a line anytime at
                                <br> <strong><a href="mailto:info@insuranced.com">info@insuranced.com</a>,</strong>
                                <br> and we’ll get back soon.</p>
                            <button class="button -green_dark -bordered"><span class="button--inner">Start Writing</span></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-xs-12">
                        <div class="contact_card">
                            <i class="contact_card--icon icons8-geo-fence color_venice_green"></i>
                            <strong class="contact_card--title">Our Address</strong>
                            <p class="contact_card--text">Come visit us at
                                <br> <strong>Stock Building, New York,</strong>
                                <br> NY 93459</p>
                            <button class="button -green_dark -bordered"><span class="button--inner">See the Map</span></button>
                        </div>
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
            if ($('.tab_navigation--link').length > 0) {
                $('.tab_navigation--link').eq(0).trigger('click');
            }
        });
    </script>
@endsection