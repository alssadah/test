@extends('layouts.frontend')

@section('content')


@include('partial.slider')

<!--main custom editing section -->
<!--<div id="section " class="container  bg-white p-4 mb-5" style="margin-top: -46px;-->
<!--position: relative;-->
<!--z-index: 99 !important;">-->


<!--    <div class="row">-->
<!--        <div class="col-12 ">-->
<!--            <div class="row">-->
<!--                <div class="col-6"> -->
<!--                <button type="button" class="btn btn-info rounded-left float-left"><a href="https://bit.ly/3eHPHwp" style="color: white">سجل معنا</a></button>-->
<!--                <button type="button" class="btn btn-danger rounded-left float-left ml-2"><a href="Profile\win.pdf" target="_blank" style="color: white">نبذه تعريفيه عن المسابقه</a></button></div>-->
<!--    <div class="col-2">-->
<!--        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M74.98125,67.05312c2.28437,18.40937 -10.75,35.20625 -29.15938,37.49063c-6.31562,0.80625 -12.3625,-0.26875 -17.87187,-2.6875c-10.34687,-4.56875 -18.14062,-14.37813 -19.61875,-26.47187c-2.28438,-18.40937 10.75,-35.20625 29.15938,-37.49062c18.40937,-2.28438 35.20625,10.75 37.49063,29.15937z" fill="#91f2bd"></path><path d="M45.82188,108.575c-2.01562,0 -3.7625,-1.47813 -4.03125,-3.49375c-0.26875,-2.15 1.34375,-4.16562 3.49375,-4.43437c7.79375,-0.94063 14.78125,-4.97188 19.61875,-11.15313c4.8375,-6.18125 6.9875,-13.975 6.04688,-21.76875c-0.26875,-2.15 1.34375,-4.16563 3.49375,-4.43437c2.15,-0.26875 4.16563,1.34375 4.43437,3.49375c1.20938,9.94375 -1.47812,19.8875 -7.65937,27.81562c-6.18125,7.92813 -15.05,13.03437 -24.99375,14.24375c-0.13438,-0.26875 -0.26875,-0.26875 -0.40313,-0.26875z" fill="#6dc289"></path><path d="M41.65625,100.78125c-2.28437,0 -4.03125,-1.74688 -4.03125,-4.03125c0,-2.28437 1.74688,-4.03125 4.03125,-4.03125c0.94062,0 1.74687,0 2.6875,-0.13437c5.64375,-0.67187 10.75,-3.62813 14.24375,-8.0625c1.34375,-1.74688 3.89688,-2.01562 5.64375,-0.67187c1.74688,1.34375 2.01563,3.89688 0.67188,5.64375c-4.8375,6.18125 -11.825,10.2125 -19.61875,11.15313c-1.20938,0 -2.41875,0.13437 -3.62813,0.13437z" fill="#6dc289"></path><path d="M41.65625,108.84375c-5.24063,0 -10.48125,-1.075 -15.31875,-3.225c-12.09375,-5.375 -20.425,-16.52812 -22.0375,-29.69688c-1.20938,-9.675 1.34375,-19.35 7.25625,-27.27813c1.34375,-1.74687 3.89688,-2.15 5.64375,-0.80625c1.74687,1.34375 2.15,3.89687 0.80625,5.64375c-4.56875,6.18125 -6.58438,13.70625 -5.64375,21.36563c1.34375,10.34688 7.79375,19.08125 17.33438,23.38125c4.8375,2.15 10.34688,2.95625 15.72187,2.28438c2.15,-0.26875 4.16563,1.34375 4.43437,3.49375c0.26875,2.15 -1.34375,4.16562 -3.49375,4.43437c-1.6125,0.26875 -3.225,0.40313 -4.70312,0.40313z" fill="#444b54"></path><path d="M16.25937,78.34063c-2.01562,0 -3.7625,-1.47813 -4.03125,-3.49375c-0.94063,-7.79375 1.20937,-15.5875 6.04687,-21.76875c1.34375,-1.74687 3.89688,-2.01562 5.64375,-0.67187c1.74688,1.34375 2.01563,3.89688 0.67188,5.64375c-3.49375,4.56875 -5.10625,10.2125 -4.43437,15.85625c0.26875,2.15 -1.34375,4.16563 -3.49375,4.43438c0,0 -0.13438,0 -0.40313,0z" fill="#ffffff"></path><g><path d="M163.66875,57.10938c6.31563,21.36562 -5.9125,43.80625 -27.27812,50.12188c-7.25625,2.15 -14.78125,2.15 -21.63437,0.40312c-13.16875,-3.49375 -24.32187,-13.57187 -28.4875,-27.54687c-6.31562,-21.36562 5.9125,-43.80625 27.27813,-50.12187c21.36562,-6.31562 43.80625,5.77813 50.12187,27.14375z" fill="#fff0b3"></path><path d="M145.39375,95.27188l-0.13438,-0.13437c-5.77812,-4.3 -8.73437,-11.15313 -5.64375,-17.7375c0.40313,-0.94062 0.80625,-1.88125 1.20938,-2.82187c0.67188,-1.74688 0.13437,-3.89688 -1.47813,-4.97188c-2.15,-1.34375 -4.97187,-0.40312 -5.9125,1.88125c-4.03125,9.94375 -11.01875,18.275 -20.02188,23.91875v0c-9.675,-4.16562 -16.125,-12.9 -17.46875,-23.24688c-0.26875,-2.15 -2.15,-3.7625 -4.3,-3.62812c-2.28437,0.13438 -4.03125,2.28437 -3.7625,4.56875c0.13437,1.20938 0.40312,2.28438 0.5375,3.35938c-1.075,-0.67187 -2.55312,-0.80625 -3.89687,-0.13437c-1.88125,0.94062 -2.55313,3.09062 -2.01562,4.97187c3.35938,11.01875 10.61562,20.15625 20.425,25.66562c0.40313,0.40313 0.94063,0.67188 1.47812,0.80625c2.95625,1.47812 6.04688,2.6875 9.27188,3.62813c0.40313,0.13437 0.67188,0.13437 1.075,0.13437c1.74687,0 3.35938,-1.20938 3.89688,-2.95625c0.26875,-1.20938 0,-2.28437 -0.5375,-3.225c2.28437,0.40313 4.56875,0.67188 6.85312,0.67188c1.6125,0 3.09062,-0.13437 4.70313,-0.26875c5.10625,-0.67187 9.94375,-2.28438 14.37813,-4.8375c1.74687,-1.20937 2.41875,-3.7625 1.34375,-5.64375z" fill="#efcd89"></path><path d="M124.96875,112.875c-2.95625,0 -5.9125,-0.26875 -8.86875,-0.94062c-2.15,-0.40313 -3.62813,-2.55313 -3.09063,-4.70312c0.5375,-2.15 2.55313,-3.62813 4.70313,-3.09063c3.89688,0.80625 7.79375,0.94062 11.825,0.40313c9.675,-1.20938 18.14063,-6.04687 24.1875,-13.70625c6.04688,-7.65937 8.6,-17.2 7.39063,-26.74062c-1.34375,-11.01875 -7.65937,-20.69375 -17.06562,-26.47188c-1.88125,-1.20937 -2.55313,-3.62812 -1.34375,-5.50937c1.20937,-1.88125 3.62812,-2.55313 5.50937,-1.34375c11.55625,7.12187 19.21563,18.94688 20.82813,32.38438c1.47813,11.69062 -1.74687,23.38125 -9.00312,32.65313c-7.25625,9.40625 -17.7375,15.31875 -29.5625,16.79688c-1.88125,0.13438 -3.7625,0.26875 -5.50938,0.26875z" fill="#444b54"></path></g><g><path d="M132.62813,46.62813c3.225,25.8 -15.05,49.31563 -40.85,52.40625c-8.86875,1.075 -17.33437,-0.26875 -24.99375,-3.7625c-14.5125,-6.45 -25.39687,-20.15625 -27.54687,-37.22188c-3.225,-25.8 15.05,-49.31562 40.85,-52.40625c25.8,-3.09062 49.45,15.18437 52.54063,40.98438z" fill="#ff5576"></path><path d="M86,95.40625c-2.28437,0 -4.03125,-1.74688 -4.03125,-4.03125c0,-2.28437 1.74688,-4.03125 4.03125,-4.03125c19.21563,0 34.9375,-15.72187 34.9375,-34.9375c0,-2.28438 1.74688,-4.03125 4.03125,-4.03125c2.28437,0 4.03125,1.74687 4.03125,4.03125c0,23.65 -19.35,43 -43,43z" fill="#db3e64"></path><path d="M51.19688,38.83438c-0.67187,0 -1.20937,-0.13438 -1.88125,-0.40313c-2.01562,-1.075 -2.82188,-3.49375 -1.74687,-5.375c5.24062,-10.2125 14.24375,-18.00625 24.99375,-21.5c2.15,-0.67187 4.43438,0.40312 5.10625,2.55312c0.67188,2.15 -0.40313,4.43437 -2.55313,5.10625c-8.73437,2.82188 -15.99062,9.1375 -20.15625,17.33438c-0.80625,1.47812 -2.28437,2.28437 -3.7625,2.28437zM47.03125,47.03125c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z" fill="#ffffff"></path><g fill="#444b54"><path d="M137.0625,52.40625c0,-28.21875 -22.84375,-51.0625 -51.0625,-51.0625c-28.21875,0 -51.0625,22.84375 -51.0625,51.0625c0,18.00625 9.27188,34.4 24.725,43.67188c1.88125,1.20938 4.43437,0.5375 5.50937,-1.34375c1.20937,-1.88125 0.5375,-4.43438 -1.34375,-5.50937c-13.03438,-7.92813 -20.82812,-21.63438 -20.82812,-36.81875c0,-23.65 19.35,-43 43,-43c23.65,0 43,19.35 43,43c0,23.65 -19.35,43 -43,43v0c-0.26875,0 -0.5375,0 -0.67187,0.13437c-0.13438,0 -0.13438,0 -0.26875,0c-0.13438,0 -0.26875,0.13437 -0.40313,0.13437c-0.13438,0 -0.13438,0.13437 -0.26875,0.13437c-0.13438,0 -0.26875,0.13437 -0.40313,0.26875c-0.13438,0 -0.13438,0.13437 -0.26875,0.13437c0,0 0,0 -0.13438,0l-10.75,8.0625c-1.74688,1.34375 -2.15,3.89688 -0.80625,5.64375c1.34375,1.74688 3.89687,2.15 5.64375,0.80625l8.33125,-6.18125l8.33125,6.18125c0.67188,0.5375 1.6125,0.80625 2.41875,0.80625c1.20938,0 2.41875,-0.5375 3.225,-1.6125c1.34375,-1.74688 0.94062,-4.3 -0.80625,-5.64375l-2.55313,-1.88125c23.1125,-4.97187 40.44687,-25.53125 40.44687,-49.9875z"></path></g></g><g fill="#444b54"><path d="M78.34063,153.32188c-2.01562,0 -3.62813,-1.47813 -4.03125,-3.49375c-1.075,-6.9875 1.74687,-12.22813 4.16562,-16.93125c2.55313,-4.70312 4.8375,-9.27187 3.7625,-16.125c-0.40313,-2.15 1.20937,-4.3 3.35938,-4.56875c2.15,-0.26875 4.3,1.20938 4.56875,3.35938c1.47812,9.54062 -1.88125,15.99062 -4.56875,21.09688c-2.15,4.16562 -3.89687,7.525 -3.225,11.95937c0.26875,2.15 -1.20938,4.3 -3.35937,4.56875c-0.26875,0.13437 -0.40313,0.13437 -0.67187,0.13437z"></path></g><g fill="#444b54"><path d="M80.625,159.90625c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></g></svg>-->
<!--    </div>-->
<!--                <div class="col-4 text-center"><h1 style="color:#ad3f3fd9">مسابقة رواد الزراعة</h1></div>-->

<!--            </div>-->


<!--        </div>-->
<!--    </div>-->

<!--</div>-->
<!--end of main custom edititng section-->

<hr>
    <div class="rate-table">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                    <div class="icon rate-icon  "> <img src="https://new.nmfy.org/storage/loans-products/June2019/5GwXXQ3FcV5KZgYAmznq.png" alt="{{__('main.Beekeepers')}}" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate"> 4762 </h1>
                            <small class="rate-title">{{__('main.Beekeepers')}}</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="https://new.nmfy.org/storage/loans-products/June2019/b3gsmGgLWQHHod6omX6C.png" alt="{{__('main.BUSINESS')}}" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate"> 4742</h1>
                            <small class="rate-title">{{__('main.BUSINESS')}}</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> <img src="https://new.nmfy.org/storage/loans-products/June2019/LhrGuYRjvT6QlW4HY4En.png" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>
                        <div class="rate-box">
                            <h1 class="loan-rate">3749</h1>
                            <small class="rate-title">{{__('main.AGRICULTURAL')}} </small>
                        </div>
                    </div>
                </div>
                
                <!--<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">-->
                <!--    <div class="rate-counter-block">-->
                <!--        <div class="icon rate-icon  "> <img src="images/credit-card.svg" alt="Borrow - Loan Company Website Template" class="icon-svg-1x"></div>-->
                <!--        <div class="rate-box">-->
                <!--            <h1 class="loan-rate">9.00%</h1>-->
                <!--            <small class="rate-title">Credit card</small>-->
                <!--        </div>-->
                        
                <!--    </div>-->
                <!--</div>-->
                
            </div>
        </div>
    </div>


    <div class="bg-white section-space20">
            <div class="container">
                <div class="row">
                     <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                        <div class="mb10 text-center section-title">
                            <!-- section title start-->
                            <h1 class="title-white " style="color: #f7941d;"> {{ __('main.APPLYFORLOAN')}}</h1>

                            <a href="https://loans.nmfy-nano.org" style="background-color: #f7941dc7; width: 50%; margin: auto; border-radius: 3%;" class="btn btn-block btn-social btn-facebook">
                                <span class="">{{ __('main.applyloan2')}}</span> 
                            </a>


                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>

            </div>
        </div>




@include('partial.product')


<div class="section-space80 bg-white">
    <div class="container">
        <div class="row">
             <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                <div class="mb60 text-center section-title">
                    <!-- section title start-->
                    <h1  class="orange-text">  {{ __('main.SUCCESSSTORY')}}  </h1>

                </div>
                <!-- /.section title start-->
            </div>
        </div>
        <div class="row">

            @foreach ($posts as $post)

             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="post-block mb30">
                        <div class="post-img">
                            <a href="{{$lang.'/blog/'.$post->category->slug.'/'.$post->slug }}" class="imghover">
                            @php
                        //   $img =   Voyager::image($post->image) ;
                        //   $filename = str_replace(asset('storage/posts/'.date('FY')), '' ,  $img );
                        //   $filename = str_replace('/', '' ,  $filename );
                        //   $filename =  str_before($filename ,'.' );
                         // $media =   $post->getFirstMedia();
                        //  $img = Image::make($img)->resize(350, 200)->save(storage_path('app/public/posts/'.date('FY').'/'.$filename.'-small.webp'));
                         //   dd($post->getFirstMedia());

                            @endphp
                          {{-- {{  $media }} --}}


                            <img src="{{ Voyager::image($post->image) }}" alt="{!! $post->title  !!} " class="img-fluid0">  

                        </a>
                        </div>
                        <div class="bg-white pinside40 outline">
                            <h2><a href="{{$lang.'/blog/'.$post->category->slug.'/'.$post->slug }}" class="title">{!! $post->title   !!}   </a></h2>
                             {{-- <p class="meta"><span class="meta-date"> {{$post->created_at->format('M d  Y') }} </span>--}}
                                          <!--<span class="meta-author">By<a href="#"> Admin</a></span></p>-->
                            <p> {!! $post->excerpt  !!}    </p>
                        <a href="{{$lang.'/blog/'.$post->category->slug.'/'.$post->slug }}" class="btn-link">{{__('main.ReadMore')}}</a> </div>
                    </div>
                </div>


            @endforeach


        </div>
    </div>
</div>



    <div class="bg-default section-space80">
        <div class="container">
            <div class="row">
                 <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                    <h1 class="title-white orange-text"> {{ __('main.award')}} </h1>
                        <p class="orange-text"> {{__('main.awardp')}}</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">

       <div class="owl-carousel owl-theme"  id="awards">
           @foreach ($awards as $award)

                <div class="item">

                    <div class="testimonial-block mb30">
                        <div class="bg-white pinside30 mb20 ">
                         <p class="testimonial-text CodeMirror">{{$award->getTranslatedAttribute('title')}}</p>
                         <p class="testimonial-text">{{$award->getTranslatedAttribute('institution')}} </p>
                        </div>

                    </div>
                </div>

            @endforeach
         </div>



            </div>
        </div>
    </div>

    <div class="section-space40 bg-white">
        <div class="container" id="contact-us" name="contact-us">
            <div class="row">


                <div class="owl-carousel owl-theme"  id="partners">

                            <div class="item "> <img src="images/partners/1.jpg"  alt="partners" > </div>
                            <div class="item "> <img src="images/partners/2.jpg" alt="partners "> </div>
                            <div class="item "> <img src="images/partners/3.png" alt="partners "> </div>
                            <div class="item "> <img src="images/partners/4.jpg" alt="partners "> </div>

                            <div class="item "> <img src="images/partners/5.png" alt="partners "> </div>
                            <div class="item "> <img src="images/partners/6.jpg" alt="partners "> </div>
                            <div class="item "> <img src="images/partners/7.png" alt="partners "> </div>
                            <div class="item "> <img src="images/partners/8.jpg" alt="partners "> </div>


                  </div>



            </div>



        </div>
    </div>

 <div class="section-space10 bg-white">
    <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                    <h1 class="orange-text">{{__('main.GetInTouch')}}  </h1>

                                    </div>
                                </div>

                            <form class="contact-us rtl" method="post" action="{{ route('contact-us.store')}}"  >
                                 @csrf
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">  {{__('main.name')}}  </label>
                                                <input id="name" name="name" type="text" placeholder="{{__('main.name')}}"  value="{{old('name')}}" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email"> {{__('main.Email')}}  </label>
                                                    <input id="email" name="email" type="email" placeholder="{{__('main.Email')}}" value="{{old('email')}}"  class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone"> {{__('main.Phone')}}  </label>
                                                    <input id="phone" name="phone" type="text" placeholder="{{__('main.Phone')}}"  value="{{old('phone')}}" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                   <label class="sr-only control-label" for="phone"> {{__('main.Message')}}  </label>

                                                    <textarea class="form-control" id="message" rows="7" name="message"   value="{{old('message')}}"  placeholder="{{__('main.Message')}}">{{old('message')}}</textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="submit" class="btn btn-default">{{__('main.Submit')}}  </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        <div class="contact-us mb10">

                            <div class="row">
                               <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-placeholder-3  icon-2x icon-default"></i></div>
                                    <h2 class="capital-title">{{__('main.Headoffice')}}</h2>
                                        <p class="orange-text">{{__('main.address')}}
                                           </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">{{ __('main.hotline') }} </h2>
                                        <p class="orange-text"> 770006099   </p>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Email Address</h2>
                                        <p class="orange-text">info@nmfy.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
       </div>

    </div>

@endsection



