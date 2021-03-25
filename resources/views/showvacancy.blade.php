@extends('layouts.frontend')
@section('css')
<style>
  
  tr {
    cursor: pointer;
  }
 
 
 tr:hover { 
   background: #dee4ee; 
}
td a { 
   display: block; 
   border: 1px solid black;
   padding: 16px; 
}

  </style>

@endsection


@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">

              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="bg-white pinside30">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4">
                             <h1 class="page-title">

                                {{$vacancy->title}} 

                            </h1>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                    <div class="btn-action">
                                     <a href="/{{$lang}}#contact-us" class="btn btn-primary">{{__('main.contact')}}</a>
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

                        <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            </div>
                        </div>
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                     
                                    
                                                 <p> {!! $vacancy->text !!} </p>
    
                                               
                                                
                                            

                                    </tbody> </table>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
 
 
@endsection


@endsection
