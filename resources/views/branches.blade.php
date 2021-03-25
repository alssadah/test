@extends('layouts.frontend')
@section('css')
<style>

      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
          width: 100%;
          height: 400px;
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

                                {{__('main.ourbranches')}}

                            </h1>
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

  <div class="dir">
    <!-- content start -->
   <div class="center container" >
      <div class="row" >

@foreach ($branches as $branch)

  <div class="clo-lg-3" >
  <div class="card">
    <div class="additional">
      <div class="user-card">

      </div>
      <div class="more-info">
        <h2 class="text-center"  >  {{$branch->getTranslatedAttribute('name')}} {{$branch->Latitude}}  </h2>


        <div class="stats">

{{-- {{$branch->latitude}},{{$branch->longitude}} --}}
          <div>
            <a href="https://www.google.com/maps/search/?api=1&query= {{$branch->latitude}},{{$branch->longitude}}">

            <i class="fa fa-map-marker"></i></a>

          </div>
          <div>
            <a href="mailto:{{$branch->email}}">
            <i class="fa fa-envelope-o"></i></a>

          </div>
        </div>
      </div>
    </div>

    <div class="general">
      <h2 class="text-center" >{{$branch->getTranslatedAttribute('name')}} </h2>
      <p class="card-height">  <i class="fa fa-map-marker ml5"></i>  {{$branch->getTranslatedAttribute('address')}}

       @if($branch->phone)
       <br>
            <i class="fa fa-phone ml5"></i>  {{$branch->phone}}

          @endif

        @if($branch->mobile)
           <br>
           <i class="fa fa-mobile ml5"> </i>   {{$branch->mobile}}
         @endif
      </p>





      <span class="more"></span>
    </div>
  </div>
</div>
  @endforeach

        </div>



</div>
  <div id="map"></div>



@section('js')
 <script>


</script>

<script>

        function initMap() {
          var myLatLng = {lat: 15.5527, lng: 48.5164};

          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: myLatLng
          });
          @foreach ($branches as $key => $branch)


          var contentString{{$key}} = '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h1 id="firstHeading" class="firstHeading text-center">{{$branch->getTranslatedAttribute('name')}}  </h1>'+
                      '<h3 id="firstHeading" class="firstHeading text-center">{{$branch->getTranslatedAttribute('address')}}  </h3>'+
                      '<div id="bodyContent">'+
                      '<p><i class="fa fa-phone ml5"></i> :<b> {{$branch->phone}} </b><p>'+
                      '<p> <i class="fa fa-mobile ml5"></i> :<b> {{$branch->mobile}} </b> <p>'+
                      '</p>'+
                      '</div>'+
                      '</div>';

  {{$branch->mobile}}


           var infowindow{{$key}} = new google.maps.InfoWindow({
                    content: contentString{{$key}},
                });


                var marker{{$key}} = new google.maps.Marker({
                    position:{lat:{{$branch->latitude}}, lng: {{$branch->longitude}} },
                    map: map,
                     icon: '{{asset('images/map.png')}}',
                    title: ''
                });


                marker{{$key}}.addListener('click', function() {
                      infowindow{{$key}}.open(map, marker{{$key}});
                  });

          @endforeach

        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGDsBQ4AVuTn95uoFzV21_4hWA8K7Bois&callback=initMap">
      </script>

@endsection


@endsection
