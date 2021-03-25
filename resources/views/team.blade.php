@extends('layouts.frontend')

@section('content')


<div class="page-header">
    <div class="container">
        <div class="row">

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                            <h1 class="page-title"> {{__('main.team')}}  </h1>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                    <div class="btn-action">
                                        <a href="#" class="btn btn-default"> {{__('main.APPLYFORLOAN')}} </a>
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
                <div class="col-md-12">
                    <div class="wrapper-content bg-white pinside40">

                        <div class="row">
                         @foreach ($teams as $team)
                         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                              <div class="team-block mb30">
                                  <div class="team-img mb30"> <img src="{{ Voyager::image($team->image)}} " alt="{{$team->getTranslatedAttribute('job')  }}" class="rounded-circle"> </div>
                                  <div class="team-content">
                                      <h3>{{$team->getTranslatedAttribute('name')  }}</h3>
                                      <small class="designation  text-center">{{$team->getTranslatedAttribute('job')  }}</small>


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
@endsection
