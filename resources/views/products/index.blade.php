

@extends('layouts.frontend')

@section('content')


    <div class="loans">

    </div>

    {{-- @foreach ($products as $product)
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
       <div class="bg-white pinside40 outline mb30 text-center service-block">
           <div class="icon mb40"> <img src="{{Voyager::image($product->icon)}}" alt="{{$product->getTranslatedAttribute('title')}}" class="icon-svg-2x"> </div>
           <h2><a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="title">{{$product->getTranslatedAttribute('title')}}</a></h2>
           <p>        {!! str_limit(strip_tags($product->getTranslatedAttribute('text')), 150) !!}</p>
           <a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="btn-link">{{__('main.ReadMore')}} </a>
    </div>
    @endforeach --}}


    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-content">
                        <div class="row">

                         @foreach ($products as $product)

    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="bg-white pinside40 outline mb30 text-center service-block">
                <div class="icon mb40"> <img src="{{Voyager::image($product->icon)}}" alt="{{$product->getTranslatedAttribute('title')}}" class="icon-svg-2x"> </div>
                <h2><a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="title">{{$product->getTranslatedAttribute('title')}}</a></h2>
                <p>        {!! str_limit(strip_tags($product->getTranslatedAttribute('text')), 150) !!}</p>
                <a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="btn-link">{{__('main.ReadMore')}} </a>


            </div>
        </div>
    @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection
