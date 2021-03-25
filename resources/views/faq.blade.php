@extends('layouts.frontend')

@section('content')


<div class="page-header">
    <div class="container">
        <div class="row">

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                            <h1 class="page-title"> {{__('main.faq')}}  </h1>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                    <div class="btn-action">

                                     <a href="https://loans.nano-nmfy.org/" class="btn btn-default"> {{__('main.APPLYFORLOAN')}} </a>
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
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="">
                            <div class="row">

                            </div>

                            <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 st-accordion">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                              @foreach ($faqs as $key => $faq)
                                              <div class="panel panel-default">
                                                    <div class="panel-heading active" role="tab" id="heading{{$key}}">
                                                    <h4 class="panel-title">
                                                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="true"
                                                   aria-controls="collapse{{$key}}">

                                                    <i class="fa fa-plus-circle sign"></i> &nbsp;&nbsp;&nbsp;&nbsp;{{ $faq->question}}</a>
                                                </h4>
                                                    </div>
                                                    <div id="collapse{{$key}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$key}}">
                                                        <div class="panel-body">

                                                                {!! $faq->answer !!}


                                                        </div>
                                                    </div>
                                                </div>


                                              @endforeach



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
