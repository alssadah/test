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
                             {{__('main.pointer')}}
                               

                            </h1>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-8 col-sm-8 col-8">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-8 col-8">
                                    <div class="btn-action">
                                     <a href="/{{$lang}}#contact-us" class="btn btn-primary">{{__('main.contact')}}</a>
                                     <a href="https://loans.nano-nmfy.org/" target="_blank" class="btn btn-default"> {{__('main.APPLYFORLOAN')}} </a>
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
                                <table class="table table-bordered">
                                     <thead> <tr>
                                                   <th>#</th>
                                                   <th>{{__('main.npointer')}} </th>
                                                   <th>{{__('main.vpointer')}}</th>

                                                </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pointers as $pointer)
                                       
                                             <tr class='clickable-row' data-href='{{url("vacancies/$pointer->id")}}' >
                                                     <a href="http://new.nmfy.org/en/vacancies" target="_new"  >
                                                 <th scope="row">{{$loop->iteration }}</th>
                                                 <td> {{$pointer->k_name}} </td>
    
                                                 <td> {{$pointer->v_name}} </td> 
                                                   </a>
                                            </tr>
                                          
                                     @endforeach


                                    </tbody> </table>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>


@section('js')
 <script >
     
     
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
 </script>
 
@endsection


@endsection
