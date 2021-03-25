
     <div class="footer section-space50">
            <!-- footer -->
            <div class="container">
                {{-- <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="footer-logo">
                            <!-- Footer Logo -->
                            <img src="images/ft-logo.png" alt="Borrow - Loan Company Website Templates"> </div>
                        <!-- /.Footer Logo -->
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                            <h3 class="newsletter-title">Signup Our Newsletter</h3>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="newsletter-form">
                                <!-- Newsletter Form -->
                                <form action="https://jituchauhan.com/borrow/bootstrap-4/newsletter.php" method="post">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="newsletter" name="newsletter" placeholder="Write E-Mail Address" required>
                                        <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Go!</button>
                    </span> </div>
                                    <!-- /input-group -->
                                </form>
                            </div>
                            <!-- /.Newsletter Form -->
                        </div>
                    </div>
                        <!-- /.col-lg-6 -->
                    </div>
                </div> --}}
                {{-- <hr class="dark-line"> --}}
                <div class="row">
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="widget-text mt40">
                            <!-- widget text -->
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>3895 Sycamore Road Arlington, 97812 </p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span>800-123-456</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget text -->
                    </div> --}}
                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="widget-footer mt40">
                            <!-- widget footer -->
                            <ul class="listnone">
                                    {{menu('main','partial.main_footer')}}
                            </ul>
                        </div>
                        <!-- /.widget footer -->
                    </div>
                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="widget-footer mt40">
                            <!-- widget footer -->
                            @php
                                $products = App\Models\LoansProduct::active()->get();
                            @endphp
                            <ul class="listnone">
                           @foreach ($products as $product)

                            <li><a href="{{url($lang.'/loans-products/'.$product->slug)}}">{{$product->getTranslatedAttribute('title')}}</a></li>

                            @endforeach


                            </ul>
                        </div>
                        <!-- /.widget footer -->
                    </div>
                    <div class="col-xl-4 col-lg-2 col-md-4 col-sm-6 col-6">
                        <div class="widget-social mt40">
                            <!-- widget footer -->
                            <ul class="listnone">
                                <li><a href="https://www.facebook.com/nmfy.org/"><i class="fa fa-facebook"></i>Facebook</a></li>

                                <li><a href="https://twitter.com/NMFYOrg"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="https://www.linkedin.com/company/nmfyorg"><i class="fa fa-linkedin"></i>Linked In</a></li>
                                 <li><a href="http://www.instagram.com/nmfyorg"><i class="fa fa-instagram"></i>Instagram  </a></li>
                            </ul>
                        </div>



                        <!-- /.widget footer -->
                    </div>
                </div>
            </div>
        </div> 
        
      
        <!-- /.footer -->
        <div class="tiny-footer">
            <!-- tiny footer -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <p>© Copyright {{date('Y')}} | NMF</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                        <p>Terms of use | Privacy Policy</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- back to top icon -->
        <a href="#0" class="cd-top" title="Go to top">Top</a>
        
     
                    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
        <script src="{{asset('js/all_'.$lang.'.js')}}"></script>

        {{-- <script type="text/javascript" src="{{asset('js/menumaker.js')}}"></script>

        <!-- sticky header -->
        <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/sticky-header.js')}}"></script>
        <!-- slider script -->


        <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('js/slider-carousel.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/service-carousel_'.$lang.'.js')}} "></script>

        <!-- Back to top script -->
        <script src="{{asset('js/back-to-top.js')}}" type="text/javascript"></script> --}}
        @include('sweetalert::alert')

  
        @yield('js')

<!-- google analytics-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126207429-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126207429-1');
</script>
<!--google analytics-->

               
      {{-- fb chatting code --}}
                   <div class="fb-customerchat"
            page_id="205272702823080"
            minimized="true">
            </div> 
            
                   <script> 
                   
            
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '113868326204563',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
                });
            }; 
            
            (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
        
            </script>
                    {{-- end fb chatting code --}}
   
   <!--facebook pixel-->
   <script>

!function(f,b,e,v,n,t,s)

{if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};

if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];

s.parentNode.insertBefore(t,s)}(window,document,'script',

'https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '325413128660524'); 

fbq('track', 'PageView');

</script>

<noscript>

<img height="1" width="1"

src="https://www.facebook.com/tr?id=325413128660524&ev=PageView

&noscript=1"/>

</noscript>

<!-- End Facebook Pixel Code -->
   <!--end of facebook pixel-->
   
     

    </body>


     </html>
