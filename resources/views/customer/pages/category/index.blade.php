@extends('customer.templates.default')
@section('title', $category ? $category->meta_title : $company->meta_title)
@section('description', $category ? $category->meta_description : $company->meta_description)

@section('content')

<section id="box-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="{{route('company', ['company'=> $company->slug])}}">{{$company->name}}</a>
                        </li>
                        @if($category)
                        @if($category->category_id == null)
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                        @else
                        <li class="breadcrumb-item active">
                            <a
                                href="{{route('company',['category'=> $category->category->slug,'company' => $company->slug])}}">
                                {{$category->category->name}}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                        @endif
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>{{$category ? $category->name : $company->name}}</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @include('customer.block.filter')
            <div class="col-sm-10 mt-3">
                <div id="list-product">
                    <div class="row">
                        <?php
					$numOfCols = 3;
					$rowCount = 0;
					$bootstrapColWidth = 12 / $numOfCols;
					?>
                        @foreach($products as $product)
                        <div class="col-sm-{{$bootstrapColWidth}}">
                            <div class="box-product mb-4" data-url="{{route('product', ['slug' => $product->slug])}}">
                                <div class="box-img-product">
                                    @if($product->images()->first())
                                    <img src="{{$product->images()->first()->link}}" alt="{{$product->name}}">
                                    @endif
                                </div>
                                <div class="box-title-product">
                                    <h2>{{$product->name}}</h2>
                                    <div class="box-qtd-product">
                                        <form method="POST">
                                            {{csrf_field()}}
                                            <input type="text" name="qtd" value="0">
                                            <button id="btn-more-qtd">+</button>
                                            <button id="btn-less-qtd">-</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php($rowCount++)
                        @if($rowCount % $numOfCols == 0)
                    </div>
                    <div class="row">
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row mt-3 mb-4 box-load" style="display:none">
                    <div class="col">
                        <img src="{{asset('img/loading.gif')}}" width="100" alt="Carregando" class="img-loading">
                        <p class="text-center">Carregando mais produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
$(function() {
    $('.featureInput').each(function() {
        let featuresData = $(this).data('features');
        let featuresWithoutMarks = featuresData.replace(/"/g, '');
        let arrayFeatures = featuresWithoutMarks.split(",");
        if (arrayFeatures.includes($(this).val())) {
            $(this).attr('checked', 'true');
        }
    });
});
$(document).on('click', '.box-product', function() {
    const url = $(this).data('url');
    window.location.href = url;
});
$('.btn-control-filter').click(function() {
    if ($(this).hasClass('filter-closed')) {
        $(this).removeClass('filter-closed');
        $(this).addClass('filter-open');
    } else {
        $(this).removeClass('filter-open');
        $(this).addClass('filter-closed');
    }

    let ul = $(this).closest('.box-filter').find('ul');

    ul.animate({
        height: 'toggle',
        opacity: 'toggle'
    }, 'slow');
});

$('.feature').on('change', function() {
    features = getFeatureData();
    filters();
});

var uri = window.location.href;

uri = uri.replace('#', '');
var load = true;
var page = 2;
var end = 0;

uri = setUrl(uri, page);
uri = uri + "&ajax=true";

function getFeatureData() {
    let featureArray = [];
    $('.featureInput').each(function() {
        let feature = $(this);
        if (feature.is(':checked')) {
            featureArray.push(feature.val());
        }
    });
    return featureArray.join(',');
}

function filters() {
    $('#search-filter input[name="search_string"]').val($('input[name=search_string]').val());
    $('#search-filter input[name="feature_array"]').val(JSON.stringify(getFeatureData()));
    $("#search-filter").submit();
}

function setUrl(uri, page) {
    uri = uri.indexOf("?") >= 0 ? (uri + "&page=" + page) : (uri + "?page=" + page);
    if (uri.indexOf("&ajax=true") < 0) {
        uri += "&ajax=true";
    }
    return uri;
}


$(window).scroll(function() {
    if (end == 0) {
        if ("{{count($products)}}" >= 6) {
            uri = setUrl(uri, page);
            if (load && ($(window).scrollTop() + $(window).height() > $("#list-product").height())) {
                load = false;
                $.ajax({
                    type: "GET",
                    url: uri,
                    beforeSend: function() {
                        $('.box-load').css('display', 'block');
                    },
                    success: function(data) {
                        $('#list-product').append(data);
                        page++;
                        setTimeout(function() {
                            load = true;
                        }, 300);
                        $('.box-load').css('display', 'none');
                        if (data == '') {
                            end = 1;
                        }
                    }
                });
            }
        }
    }
});
</script>
@endsection