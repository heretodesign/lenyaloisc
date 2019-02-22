<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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
                        <a href="{{ ('/ourstory') }}" class="top-nav-item no-underline"><i class="fa fa-bolt fa-lg"></i> Our Story</a>
                        <a href="/crew" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> The Wedding Crew</a>
                        <!-- <a href="/crew" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Wedding Crew</a> -->
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
      <div class="training header-data h-144">
          <div class="container mx-auto flex items-center h-64">
            <div class="flex-1  px-6 h-64">
                <h1 class="uppercase text-white mt-5 text-5xl items-center">Join Isaac & Melanie <br> in their wedding celebration</h1>
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
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
            <form class="w-full max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('rsvps.store') }}">
                @csrf
                <div class="flex flex-wrap justify-center -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">First Name</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="firstname" type="text" placeholder="Kane">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name"name="lastname" type="text" placeholder="Richard">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">number of guest</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="jobtitle" id="grid-first-name" type="text" placeholder="4">
                      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">travelling here from</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" name="department" placeholder="Calgary, Canada">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Email</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="email" id="grid-first-name" type="text" placeholder="luke@bali.com">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">Note</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" name="message" type="text" placeholder="Wishing you a blessed..">
                    </div>
                </div>
                <div class="flex flex-wrap  mb-10">
                    <div class="md:flex md:items-center">
                        <button class="block uppercase bg-blue hover:bg-blue-dark text-white font-bold py-3 px-10 rounded" type="submit">rsvp</button> <br>
                    </div>
                </div>
                <!-- <p class="text-grey-darker text-xs italic">We will revert soonest.</p> -->
            </form>
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
