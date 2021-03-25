@extends('layouts.frontend')

@section('content')



<div class="page-header">
    <div class="container">
        <div class="row">

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">

                            <h1 class="page-title">    {{$page->getTranslatedAttribute('title')}}</h1>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                    <div class="btn-action">
                                     <a href="/{{$lang}}#contact-us" class="btn btn-primary">{{__('main.contact')}}</a>
                                     <a href="https://loans.nano-nmfy.org/" class="btn btn-default">{{__('main.APPLYFORLOAN')}} </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<div class=" ">
    <!-- content start -->
    <div class="container"   @if($lang=='en') style="direction: rtl;" @endif >
        <div class="row bg-white">

            <div class="col-xl-5 col-md-5 col-lg-5 col-sm-4 col-5">

{{-- start --}}
@if (isset($posts[0]))

@foreach ($posts as $post)
<div class="post-holder mt40">
    <div class="post-block mb40">
        <div class="post-img mb30">
            <a href="{{$post->slug }}" class="imghover">

                <img src="{{ Voyager::image($post->image)}}" alt="Borrow - Loan Company Website Template" class="img-fluid">
 
            </a>
        </div>
        <div class="bg-white">
            <h1 class="pagedesc"><a href="{{$post->slug }}" class="title"> {!! $post->getTranslatedAttribute('title')  !!}</a></h1>
            <p class="meta">
                     {{-- <span class="meta-date"> {{$post->created_at->format('M d  Y') }} </span>
                     <span class="meta-author">By<a href="#" class="meta-link"> Admin</a></span> --}}
                    {{-- <span class="meta-comments">05<a href="#" class=" meta-link"> Comments</a> </span> --}}
                </p>
            <p > {!! $post->getTranslatedAttribute('excerpt')  !!}  </p>
            {{-- <a href="{{$post->category->slug.'/'.$post->slug }}" class="btn-link">{{__('main.ReadMore')}}</a> --}}
         </div>
    </div>
</div>
@endforeach

@endif

{{-- end --}}

            </div>

              @if (isset($posts[0]))
            <div class="col-xl-7 col-md-7 col-lg-7 col-sm-7 col-7">
              @else
             <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12">
             @endif

                <div class="wrapper-content ">

                    <div class="section-scroll pinside60" id="section-about">
                            <img src="{{Voyager::image($page->image)}}" alt="{{$page->getTranslatedAttribute('title')}}" > 
                             <hr>
                            {!! $page->getTranslatedAttribute('body')  !!} 
                            
                           
                    </div>
               </div>

            </div>



         </div>
    </div>

@endsection
