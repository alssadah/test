@extends('layouts.frontend')

@section('content')






<div class="loans">
    <div class="container">

    </div>
</div>




<div class=" ">
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white">
                    <div class="section-scroll pinside60" id="section-about">
                        <h1>   {{$product->getTranslatedAttribute('title')}}</h1>
                        <p class="lead">  {!! $product->getTranslatedAttribute('text')  !!}   </p>



                    <div class="widget-share">
                        <ul class="listnone">
                            <li><a href="https://www.facebook.com/nmfy.org/" class="btn-share btn-facebook" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/NMFYOrg" class="btn-share btn-twitter" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li>
                                <a href="https://www.instagram.com/nmfyorg/" style="background-color: #8e2878; color:white;" class="btn-share btn-instagram" title="Share on Instegram"> <i class="fa fa-instagram" ></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/nmfyorg" class="btn-share btn-linkedin" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
