<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> @section('css')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>BAPKM ITS</title>
    <style>
    .helpcards{
      margin-top: 0 !important;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('force/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/lightbox/simpleLightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('force/vendors/jquery-ui/jquery-ui.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('force/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('force/css/responsive.css') }}">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('force/bower_components/semantic-ui-calendar/dist/calendar.min.css') }}" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <meta charset="utf-8">

    @show
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('Uploaded/logo.ico')}}" />
</head>

<body>
    <header class="header-area thetop">
        @section('navbar') @include('include.navbar') @show
    </header>

    @yield('content')

    <div class='scrolltop'>
      <div class='scroll icon'><i class="fa fa-4x fa-angle-up"></i></div>
    </div>

    @include('sweetalert::alert')

    <footer class="footer-area" style="bottom: 0px;">
        <div class="container">
            <div class="row"> 
              <div class="col-lg-4 col-md-4 col-sm-4">  
                  <div class="logo-office">
                    <img class="logo-its" src="{{ asset('force/img/core-img/logo-its.png') }}" alt="">
                    <img class="logo-bapkm" src="{{ asset('force/img/core-img/logo.png') }}" alt="">
                  </div>
                </div>
                <div class="borderline col-lg-3 col-md-3 col-sm-3">
                  <div class="single-footer-widget ab_widgets">
                    <h2 class="f_title">BAPKM ITS</h2>
                    <p>Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa</p>
                  </div>
                </div>
                <div class="borderline col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                        <div class="f_title">
                          <h3>Kontak Kami</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                              <ul class="contact">
                                <li><i class="ficon fa fa-envelope-o"></i><a href="mailto:baakcare@its.ac.id" class="mail">baakcare@its.ac.id</a></li>
                                <li><i class="ficon fa fa-phone"></i>(031) 5994251-54</li>
                                <li><i class="ficon fa fa-phone" style="opacity: 0;"></i>PABX: 1012 (AP), 1109 (KM)</li>
                                <li><i class="ficon fa fa-fax"></i>(031) 5923619 (Fax)</li>
                                <li><i class="ficon fa fa-home" style="margin-bottom: 0;"></i>Jalan Raya ITS, Kampus ITS</li>
                                <li><i class="ficon fa fa-home" style="opacity: 0;"></i>Sukolilo, Surabaya 60117</li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="borderline col-lg-2 col-md-2 col-sm-2">
                    <div class="single-footer-widget">
                        <div class="f_title">
                          <h3>Pengunjung</h3>
                        </div>
                        <div class="row">
                            <div class="col-10">
                              <p style="color: white;">Hari ini: 
                                @foreach($visitor as $key => $value)
                                  {!! $value['today_visitors'] !!}
                                @endforeach
                              </p>
                              <p style="color: white;">Total: {{ $sumVisits }}
                              </p>
                        </div>
                    </div>
                    
                    <div class="box-rating">
                      <button class="btn btn-warning" data-toggle="modal" data-target="#rate"><i class="fa fa-edit"></i> Rate Our Website</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
          <p class="col-lg-8 col-md-8 footer-text m-0" style="color: #dddddd;" align="center">Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> Badan Administrasi Pembelajaran & Kesejahteraan Mahasiswa</a>
          </p>
        </div>
    </footer>

    <div class="modal custom fade" id="rate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
          <div class="modal-header"> 
            <h3><oblique>Thank You For Visiting Our Site</oblique></h3>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('storeFeedback') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label>Please Rate This Site</label>
              <div class="form-group">
                <fieldset class="rating align-items-center">
                  <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                  <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                  <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                  <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                  <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                  <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                  <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                  <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                  <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                  <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
              </div>
              <div class="form-group" hidden="">
                <div class="input-form">
                  <input type="email" name="email" class="form-control" placeholder="Your Email">
                </div>
              </div>
              <div class="form-group">
                <div class="input-form">
                    <textarea type="text" rows="4" cols="50" name="opinion" class="form-control" placeholder="What Do You Think About This Site?" required=""></textarea>
                </div>
              </div>
            
          </div>
          <div class="modal-button">
            <button type="submit" class="btn modal-button"><h3><oblique>Rate Now!<oblique> </h3></span></button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('force/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('force/js/popper.js') }}"></script>
    <script src="{{ asset('force/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('force/js/stellar.js') }}"></script>
    <script src="{{ asset('force/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('force/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('force/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('force/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('force/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('force/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('force/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('force/js/mail-script.js') }}"></script>
    <script src="{{ asset('force/js/theme.js') }}"></script>
    <script src="{{ asset('force/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('force/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('force/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('force/js/plugins/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('force/js/active.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    
    <!--sop-->
    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
    <!--end of sop-->

    <script>
      $(document).ready(function () {
      var itemsMainDiv = ('.MultiCarousel');
      var itemsDiv = ('.MultiCarousel-inner');
      var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();

        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth < 768 && bodyWidth >= 411) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }
      });
      
      /*tentang kami */
        $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#gallery").fadeTo(300, 1);
        }, 300);
        });
      });
    </script>

    <script>
      $(window).scroll(function() {
              if ($(this).scrollTop() > 50 ) {
                  $('.scrolltop:hidden').stop(true, true).fadeIn();
              } else {
                  $('.scrolltop').stop(true, true).fadeOut();
              }
          });

          $(function() {
            $(".scrolltop").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");
            return false})
          });
    </script>

    @section('js') @show
</body>

</html>
