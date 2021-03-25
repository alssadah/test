@extends('layouts.frontend')

@section('content')



<div class="{{ $slug }}">
        <div class="container">
            <div class="row">


            </div>
             </div>
            </div>
            <div class="">
          <!-- content start -->
            <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                     @foreach ($posts as $post)
                                        <div class="post-holder">
                                            <div class="post-block mb40">
                                                <div class="post-img mb30">
                                                    <a href="{{$post->category->slug.'/'.$post->slug }}" class="imghover">

                                                        <img src="{{ Voyager::image($post->image)}}" alt="Borrow - Loan Company Website Template" class="img-fluid">

                                                    </a>
                                                </div>
                                                <div class="bg-white">
                                                    <h1><a href="{{$post->category->slug.'/'.$post->slug }}" class="title"> {!! $post->getTranslatedAttribute('title')  !!}</a></h1>
                                                    <p class="meta">
                                                             <span class="meta-date"> {{$post->created_at->format('M d  Y') }} </span>
                                                             <span class="meta-author">By<a href="#" class="meta-link"> Admin</a></span>
                                                            {{-- <span class="meta-comments">05<a href="#" class=" meta-link"> Comments</a> </span> --}}
                                                        </p>
                                                    <p> {!! $post->getTranslatedAttribute('excerpt')  !!}  </p>
                                                    <a href="{{$post->category->slug.'/'.$post->slug }}" class="btn-link">{{__('main.ReadMore')}}</a> </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    </div>

                                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                                        <div class="st-pagination">
                                            <!--st-pagination-->
                                            <ul class="pagination">
                                                    {{ $posts->links()}}

                                            </ul>
                                        </div>
                                        <!--/.st-pagination-->
                                    </div>
                                </div>
                            </div>
                       <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                <div class="sidebar-area">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <br>
                                        </div>
                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-category">
                                                    <h3 class="widget-title">Categories</h3>
                                                    <ul class="listnone bullet bullet-arrow-circle-right">
                                                        <li><a href="#">Personal Loan</a></li>
                                                        <li><a href="#">Education Loan</a></li>
                                                        <li><a href="#">Car Loan</a></li>
                                                        <li><a href="#">Home Loan</a></li>
                                                        <li><a href="#">Business Loan</a></li>
                                                        <li><a href="#">Debt Consolidation</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-primary">
                                                <div class="widget widget-archives">
                                                    <h3 class="widget-title">Archives</h3>
                                                    <ul class="listnone bullet bullet-arrow-circle-right">
                                                        <li><a href="#">August 2017</a></li>
                                                        <li><a href="#">July 2017</a></li>
                                                        <li><a href="#">June 2017</a></li>
                                                        <li><a href="#">May 2017</a></li>
                                                        <li><a href="#">April 2017</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>  --}}



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
