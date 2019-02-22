<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body class="bg-grey-light font-sans">
      <div class="bg-white">
            <div class="container-fluid mx-auto flex items-center py-4">
                <div  class="w-1/5">
                    <a href="#">
                        <!-- <i class="fab fa-twitter fa-lg text-blue"></i> -->
                        <h1 class="text-grey-darker uppercase text-2xl ml-5" style="font-family: Monoton;">Isaac & Melanie</h1>
                        <!-- <img src="/img/logo.png" alt="logo"> -->
                    </a>
                    <!-- <a class="navbar-brand text-white Monoton" href="{{ url('/') }}">
                        Isaac & Melanie
                    </a> -->
                </div>
                <div class="w-3/5 text-center">
                    <nav>
                        <a href="{{ url('/') }}" class="top-nav-item no-underline"><i class="fa fa-home fa-lg"></i> Home</a>
                        <a href="{{ ('/about') }}" class="top-nav-item no-underline"><i class="fa fa-bolt fa-lg"></i> About Us</a>
                        <a href="#" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> What's New</a>
                        <a href="{{ ('/guide') }}" class="top-nav-item no-underline"><i class="fas fa-motorcycle fa-lg"></i> Moving Around Guide</a>
                        
                    </nav>
                </div>
                <div class="w-1/5 flex justify-end">
                     
                        <div class="button px-2 mr-5 bg-black no-underline hover:bg-red text-white font-medium py-3 px-10 uppercase rounded-full"><a href="{{ ('/rsvp') }}" class="top-nav-items text-white no-underline"><i class="fa fa-envelope fa-lg"></i> RSVP</a></div>

                        <!-- <div class="button px-2 mr-4"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Register</button></div> -->
                       
                    <!-- <div class="search mr-4 relative"><input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Courses">
                    <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
                    </div> -->
                    <!-- <div class="avator mr-4"><a href="#"><img src="/img/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a></div> -->
                    <!-- <div class="button"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 rounded-full">Login</button></div> -->
                </div>
            </div>
        </div>
      <div class="guide header-data h-144">
          <div class="container mx-auto flex items-center h-64">
            <div class="flex-1  px-6 h-64">
                <h1 class="uppercase text-white mt-5 text-5xl items-center">Moving Around <br> Guide</h1>
                  <h2 class="uppercase mt-5 text-grey-light items-center"> We hope you can join us! <br> Please enter your details below <i class="fas fa-angle-double-down"></i></h2>
            </div>
          </div>
      </div> 
    <section class="w-full bg-green-light -mb-4">
      <div class="container mx-auto flex w-full mb-4 justify-center bg-green-light">
        <div class="row w-full bg-green-light mt-5">
          <div>
              <p class="text-3xl uppercase text-grey-darker text-start text-xs font-bold mt-4 mb-4">RSVP</p>
          </div>
          <div class=" max-w-md justify-center mt-5 mb-4">
              <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
    </div>
    </section>
 
    <div class="container-fluid bg-black mx-auto flex items-center h-112">
        <div class="container-fluid mx-auto flex items-center py-4">
            <div  class="w-1/5">
                <a href="#">
                    <h1>Isaac Weds Melanie</h1>
                </a>
            </div>
            <div class="w-3/5 text-center">
                <nav>
                    <a href="https://twitter.com/thecadsmalaysia" class="mr-5 ml-5"><i class="fab fa-twitter fa-3x text-blue"></i></a>
                    <a href="https://www.facebook.com/thecads.org/" class="mr-5 ml-5"><i class="fab fa-facebook fa-3x text-blue"></i></a>
                    <a href="https://www.linkedin.com/company/the-center-of-applied-data-science/" class="mr-5 ml-5"><i class="fab fa-linkedin fa-3x text-blue"></i></a>
                    <a href="info@thecads.org" class="mr-5 ml-5"><i class="fas fa-envelope-square  fa-3x text-blue"></i></a>
                </nav>
            </div>
            <div class="w-1/5 flex justify-end">
                <h1 class="uppercase mt-5 items-center">Stay Connected <i class="fas fa-angle-double-right"></i> </h1>
            </div>
        </div>
    </div>
    </body>
</html>
