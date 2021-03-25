


  <div class="section-space80">
    <div class="container">
        <div class="row">
            <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                <div class="mb60 text-center section-title">
                    <!-- section title start-->
                    <h1 class="orange-text"> {{__('main.OURFINANCES')}}                    </h1>
                    <p >  {{ __('main.OURFINANCESp')}}  </p>
                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">


     <div class="owl-carousel owl-theme"  id="service">
            @foreach ($products as $product)
            <div class="item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                       <div class="bg-white pinside40 service-block outline mb30">
                           <div class="icon mb40"> <img src="{{Voyager::image($product->icon)}}" alt="{{$product->getTranslatedAttribute('title')}}" class="icon-svg-2x"> </div>
                       <h2><a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="title">{{$product->getTranslatedAttribute('title')}}</a></h2>
                         <p>
                             {!! str_limit(strip_tags($product->getTranslatedAttribute('text')), 150) !!}

                        </p>
                           <a href="{{url($lang.'/loans-products/'.$product->slug)}}" class="btn-link">{{__('main.ReadMore')}} </a>
                   </div>

            </div>
            @endforeach


        </div>

        </div>
    </div>
</div>












