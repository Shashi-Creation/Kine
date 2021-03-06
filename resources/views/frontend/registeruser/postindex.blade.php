
 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dr.Kine </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('amila/fonts/icomoon/style.css')}}"> 
    <link rel="stylesheet" href="{{asset('amila/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('amila/css/magnific-popup.css')}}">  
    <link rel="stylesheet" href="{{asset('amila/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('amila/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href=" {{asset('amila/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('amila/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('amila/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('amila/css/aos.css')}}"> 

    <link rel="stylesheet" href="{{asset('amila/css/style.css')}}">
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="{{url('/user')}}" class="text-black h2 mb-0"><image src="{{url('Image/drkinelogo.jpeg')}} " style="height: 70px; width:200px;" ></a></image>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <li><a href="{{url('/user')}}">Home</a></li>
               
    

                <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 " style="color: ">{{ Auth::user()->name}}</span>
                <img class="img-profile rounded-circle" style="width: 30px;height: 30px;" src="{{url('upload/user')}}/{{ Auth::user()->image }}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item" value="" style=""><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" ></i>Logout</button>
                    </form>
                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a> -->
              </div>
            </li>
                
              </ul>
            </nav>
            </div>
          </div>

      </div>
    </header>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">

          <div class="col-md-4">
            <a href="{{url('user/post/view')}}/{{$first_t->id}}" class="h-entry img-5 h-100 gradient" style="background-image: url('{{url('upload/post/'.$first_t->image)}}');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger" style="font-size: 16px;">Trending #1</span>
                </div>
                <h2>{{$first_t->title}}</h2>
                <span class="date">{{ date('j F, Y', strtotime($first_t->created_at)) }}</span>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="{{url('user/post/view')}}/{{$second_t[0]->id}}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{url('upload/post/'.$second_t[0]->image)}}');"> 
              
              <div class="text">
                <h2>{{$second_t[0]->title}}</h2>
                <span class="date">{{ date('j F, Y', strtotime($second_t[0]->created_at)) }}</span>
              </div>
            </a>
            <a href="{{url('user/post/view')}}/{{$third_t->id}}" class="h-entry v-height gradient" style="background-image: url('{{url('upload/post/'.$third_t->image)}}');">
              
              <div class="text">
                <h2>{{$third_t->title}}</h2>
                <span class="date">{{ date('j F, Y', strtotime($third_t->created_at)) }}</span>
              </div>
            </a>
          </div>
          
          <div class="col-md-4">
            <a href="{{url('user/post/view')}}/{{$fourth_t->id}}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{url('upload/post/'.$fourth_t->image)}}');">
              
              <div class="text">
                <h2>{{$fourth_t->title}}</h2>
                <span class="date">{{ date('j F, Y', strtotime($fourth_t->created_at)) }}</span>
              </div>
            </a>
            <a href="{{url('user/post/view')}}/{{$fifth_t->id}}" class="h-entry v-height gradient" style="background-image: url('{{url('upload/post/'.$fifth_t->image)}}');">
              
              <div class="text">
                <h2>{{$fifth_t->title}}</h2>
                <span class="date">{{ date('j F, Y', strtotime($fifth_t->created_at)) }}</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
          @foreach($view as $value)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{url('user/post/view')}}/{{$value->id}}">

              <img src="{{url('upload/post/'.$value->image)}}" alt="Image" class="img-fluid rounded" style="height: 275px; width:100%;"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{$value->title}}</span>

              <h2><a href="{{url('user/post/view')}}/{{$value->id}}">{{$value->title}}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="{{url('upload/user/'.$value->uimg)}}" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">{{$value->name}}</a></span>
                
                <span>&nbsp;-&nbsp; {{ date('j F, Y', strtotime($value->created_at)) }}</span>
              </div>
              
                <p style="height:80px;  overflow: hidden; text-overflow: ellipsis;">{{$value->post_t}}
                </p>

                <p><a href="{{url('user/post/view')}}/{{$value->id}}">Read More...</a></p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="d-flex justify-content-center">
          {!! $view->links() !!}
         </div>


      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row align-items-stretch retro-layout">
           
          <div class="col-md-5">
            <a href="{{url('user/post/view')}}/{{$first->id}}" class="hentry img-1 h-100 gradient" style="background-image: url('{{url('upload/post/'.$first->image)}}');">
              
              <div class="text">
                <h2>{{$first->title}}</h2>
                <span>{{ date('j F, Y', strtotime($first->created_at)) }}</span>
              </div>
            </a>
          </div>
          
          <div class="col-md-7">
            
            <a href="{{url('user/post/view')}}/{{$second[0]->id}}" class="hentry img-2 v-height mb30 gradient" style="background-image: url('{{url('upload/post/'.$second[0]->image)}}');">
              
              <div class="text text-sm">
                <h2>{{$second[0]->title}}</h2>
                <span>{{ date('j F, Y', strtotime($second[0]->created_at)) }}</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="{{url('user/post/view')}}/{{$third[0]->id}}" class="hentry v-height img-2 gradient" style="background-image: url('{{url('upload/post/'.$third[0]->image)}}');">
                
                <div class="text text-sm">
                  <h2>{{$third[0]->title}}</h2>
                  <span>{{ date('j F, Y', strtotime($third[0]->created_at)) }}</span>
                </div>
              </a>
            <a href="{{url('user/post/view')}}/{{$fourth[0]->id}}" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('{{url('upload/post/'.$fourth[0]->image)}}');">
                
                <div class="text text-sm">
                  <h2>{{$fourth[0]->title}}</h2>
                  <span>{{ date('j F, Y', strtotime($fourth[0]->created_at)) }}</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-lightx">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae, repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Subscribes</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Nature</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            

            <div>
              <h3 class="footer-heading mb-4">Connect With Us</h3>
              <p>
                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                <a href="#"><span class="icon-twitter p-2"></span></a>
                <a href="#"><span class="icon-instagram p-2"></span></a>
                <a href="#"><span class="icon-rss p-2"></span></a>
                <a href="#"><span class="icon-envelope p-2"></span></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <script src="{{asset('amila/js/jquery-3.3.1.min.js')}}"></script> 
  <script src="{{asset('amila/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('amila/js/jquery-ui.js')}}"></script>
  <script src="{{asset('amila/js/popper.min.js')}}"></script>
  <script src="{{asset('amila/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('amila/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('amila/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('amila/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('amila/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('amila/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('amila/js/aos.js')}}"></script>

  <script src="{{asset('amila/js/main.js')}}"></script>


  </body>
</html>