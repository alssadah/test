<div class="slider owl-carousel owl-theme"  id="slider">

        @foreach ($sliders as $slider) 
          
        <div  class="item">
     
                <img src="{{Voyager::image($slider->image)}}" alt="Borrow - Loan Company Website Template" class="">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="slider-captions">
                                        <!-- slider-captions --> 
                                        
                                        <h1 class="slider-title">{{$slider->getTranslatedAttribute('title')}} </h1>
                                       
                                        <p class="slider-text d-none d-xl-block d-lg-block d-sm-block"> {{$slider->getTranslatedAttribute('text')}}
                                        
                                        </p>
            
                                               <br>
                                    @if ($slider->url)
                                    <a href="{{$slider->url}}" class="btn btn-default">{{$slider->getTranslatedAttribute('bouton_text')}}</a> 
                                    @endif
                                   </div>
                                   
                                    <!-- /.slider-captions -->
                                </div>
                            </div>
                        </div>

           </div>  
        @endforeach
    </div>  
{{-- 
<div class="slider" id="slider">
        <!-- slider --> 
     
       


        @foreach ($sliders as $slider)
             
<div>
    
    <img src="{{Voyager::image($slider->image)}}" alt="Borrow - Loan Company Website Template" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions --> 
                            
                            <h1 class="slider-title">{{$slider->getTranslatedAttribute('title')}} </h1>
                           
                            <p class="slider-text d-none d-xl-block d-lg-block d-sm-block"> {{$slider->getTranslatedAttribute('text')}}
                            
                            </p>

                                   <br>
                        @if ($slider->url)
                        <a href="{{$slider->url}}" class="btn btn-default">{{$slider->getTranslatedAttribute('bouton_text')}}</a> 
                        @endif
                       </div>
                       
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div> 
 

        
        @endforeach--}}
{{--        
   <div><img src="images/slider-1.jpg" alt="Borrow - Loan Company Website Template" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="slider-captions">
                        <!-- slider-captions -->
                        <h1 class="slider-title">Personal Loan to Suit Your Needs. </h1>
                        <p class="slider-text d-none d-xl-block d-lg-block d-sm-block">The low rate you need for the need you want! Call
                            <br>
                            <strong class="text-highlight">(555) 123-4567</strong></p>
                        <a href="team.html" class="btn btn-default">Loan Products</a> </div>
                    <!-- /.slider-captions -->
                </div>
            </div>
        </div>
    </div>

    <div>
        <div  ><img src="images/slider-2.jpg" alt="Borrow - Loan Company Website Template" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title"> Lowest Car Loan Rate <strong class="text-highlight">9.60%</strong> </h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-sm-block"> We provide an excellent service Loan company. Lorem ipsum simple dummy content goes here.</p>
                            <a href="#" class="btn btn-default">Check Eligiblity</a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div ><img src="images/slider-3.jpg" alt="Borrow - Loan Company Website Template" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title">Student Loans with Greate Rates <strong class="text-highlight">11.10%</strong></h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-sm-block">We provide an excellent service for all types of loans in
                                <br> ahmedabad and offer service, advice and direction.</p>
                            <a href="#" class="btn btn-default ">View Products</a> </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>   --}}



        </div>
   </div>