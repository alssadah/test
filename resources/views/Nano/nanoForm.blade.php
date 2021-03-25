@extends('layouts.frontend')
@section('css')
<style>


  </style>

@endsection


@section('content')

<div class="page-header" style="    min-height:100px">

</div>


        {{-- @include('partial.nano-form') --}}
        <div class=" ">
            <!-- content start -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrapper-content bg-white pinside60">
                            <div class="">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="st-tabs">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#service1" role="tab" aria-controls="responsibilities" aria-selected="true">بيانات  عامة</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tab-2" data-toggle="tab" href="#service2" role="tab" aria-controls="education" aria-selected="false">البطاقة الشخصية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tab-3" data-toggle="tab" href="#service3" role="tab" aria-controls="experience" aria-selected="false"> قروض النانو</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="tab-4" data-toggle="tab" href="#service4" role="tab" aria-controls="tab-4" aria-selected="false">Contact Info</a>
                                                    </li>
                                                </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade show active" id="service1">

                                                     @if($request->account_id && $request->account_type)
                                                           @include('partial.nano-form')

                                                      @endif
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="service2">
                                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem turpis, fermentum elementum pulvinar lorem atvestibulum ut ante.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem turpis, fermentum elementum pulvinar lorem atvestibulum ut ante. Vivamus gravida et quam eget facilisis. Suspendisse vestibulum justo cursus viverra sodale Quisque vitae odio eu lectus eget erat blandit finibus in egestas dolor. </p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="service3">
                                                    <p class="lead">Sed et rhoncus diam, vel dictum turpis. Maecenas facilisis ullamcorper elit non finibus. Ut semper feugiat efficitur.</p>
                                                    <p> Morbi a hendrerit libero. Proin sed metus a urna suscipit convallis eu nec metus. Proin a tempor lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lectus neque, viverra et placerat eu, accumsan vitae est. Nulla id nunc ac neque varius gravida id sit amet velit.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="service4">
                                                    <p class="lead">Lorem ipsum dolor sit amet consectetur lacus lacus eget condimentum libero sagittisaorbi et nisijusto aliquam gravida etnon saisque laciniaem mattis rutrumauris insemper sollicitudinonec euornare ravida etnon per inceptos himenaeos.</p>
                                                    <p>Lorem ipsum dolor sit amet consectetur lacus lacus eget condimentum libero sagittisaorbi et nisijusto aliquam gravida etnon saisque laciniaem mattis rutrumauris insemper sollicitudinonec euornare ravida etnon per inceptos himenaeos.</p>
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
        </div>
        <!-- /.content end -->







@section('js')

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>

<script>
$(document).ready(function () {

    $('#contact-form').validate({
        rules: {
            fullname: {
                minlength: 8,
                required: true


            },
          idcard: {
                minlength: 11,
                required: true


            },

            email: {
                required: true,
                email: true
            },
            message: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('has-error help-block');
        },
        success: function (element) {
            element.text('').addClass('valid')
                .closest('.form-group').removeClass('has-error').addClass('success');
        }
    });

    });

    function isIdcard() {
        var id = document.getElementById("idcard").value;
        // alert(id );

       // alert(id.startsWith(0));|| id.startsWith(0) == false
       if(id.length !=11  )
       {
         document.getElementById("idcard").value   = '';
        // document.getElementById("person_link3").value = '';
        swal.fire({

            icon: "error",
            text:"يجب ان يكون  رقم البطاقة 11 رقم"
            });

       }

    }


    function calc()
    {

        var checked = document.getElementById("terms").checked;
        // alert(checked );
      if (document.getElementById('terms').checked)
      {
           alert(checked );
        //  document.getElementById('totalCost').value = 10;
      } else {
            alert('checked' );

      }
    }


    function termsagree() {

      var checked = document.getElementById("terms").checked;
     // setTimeout(function(){alert('not broken!');},200)
     // alert(checked );
      if(checked !=true)
       {
        //  document.getElementById("idcard").value   = '';
         document.getElementById("terms").value = 0;
         document.getElementById("su").disabled = true;


        swal.fire({
                icon: "error",
                type: "error",

                text:"يجب الموافقه على الشروط والاحكام",
            });

       }else{

            document.getElementById("terms").value = 1;

           document.getElementById("su").disabled = false ;
       }

    }



    function checkname() {
       var fullname = document.getElementById("fullname").value;
       var spaceCount = (fullname.split(" ").length - 1);
       //alert(fullname.length);
        var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

       // alert(format.test(fullname)     );
      if(format.test(fullname) == true || spaceCount < 3  || fullname.length <= 10  )
      {
          document.getElementById("fullname").value   = '';
        // document.getElementById("person_link3").value = '';


        swal.fire({
             icon: "error",
             type: 'error',
             text:"الاسم يجب ان يكون رباعي ولايحتوي على رموز او ارقام ",
            });

      }

    }



    $('#referred_platform').change(function(e) {
        var referred_platform = e.target.value;
       // alert (referred_platform);
         var others =  document.getElementById("others");
        others.style.display = "none";
         document.getElementById("other_referred").value = '';
      if(referred_platform ==6)
      {
         //  other_referred
          others.style.display = "block";

          $("other_referred").prop('required',true);
      }


    });




    $('#is_employee').change(function(e) {

        var jobs_id = e.target.value;
        alert (jobs_id);
          var e = document.getElementById("jobs");
       //  var strUser = e.options[e.selectedIndex].value;

        var capitaldiv =  document.getElementById("capitaldiv");
            var experiencediv =  document.getElementById("experiencediv");
           if(jobs_id > 2)
           {
                experiencediv.style.display = "block";

           }else {

              experiencediv.style.display = "none";
           }

         if(jobs_id == 6)
           {
                capitaldiv.style.display = "block";

           }else {

              capitaldiv.style.display = "none";
           }

 });
</script>

@endsection


@endsection
