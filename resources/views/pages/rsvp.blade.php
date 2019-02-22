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
    <body class="bg-blue-light font-sans">
      <div class="bg-transparent">
            <div class="container-fluid mx-auto flex items-center lg:py-4">
                <div  class="w-full lg:w-1/5">
                    <a href="/">
                      <p class="text-grey-lightest uppercase lg:text-4xl ml-5" style="font-family: Monoton;">Isaac & Melanie</p>
                    </a>
                </div>
                <div class="w-full lg:w-3/5 text-center">
                    <nav>
                        <a href="{{ url('/') }}" class="top-nav-item text-white no-underline"><i class="fa fa-home lg:fa-lg"></i> Home</a>
                        <a href="{{ ('/ourstory') }}" class="top-nav-item text-white no-underline"><i class="fa fa-bolt lg:fa-lg"></i> Our Story</a>
                        <!-- <a href="/crew" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Wedding</a> -->
                        <!-- <a href="/gallery" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Gallery</a> -->
                        <!-- <a href="/gift" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Gift Registry</a> -->
                        <!-- <a href="{{ ('/guide') }}" class="top-nav-item no-underline"><i class="fas fa-motorcycle fa-lg"></i> Moving Around Guide</a> -->
                    </nav>
                </div>
                <div class="w-full lg:w-1/5 flex justify-end">
                   <div class="button lg:px-2 lg:mr-5 bg-black no-underline hover:bg-pink-darker text-white lg:font-medium py-2 lg:py-3 px-4 lg:px-10 uppercase rounded-full"><a href="{{ ('/rsvp') }}" class="top-nav-items text-white no-underline"><i class="fa fa-envelope lg:fa-lg"></i> rsvp</a>
                   </div>
                </div>
            </div>
        </div>
        <div class="rsvpnow bg-left lg:bg-center lg:bg-cover w-full h-screen -mt-10 lg:-mt-32">
        </div>

    <section class="w-full bg-blue-darker -mb-4 lg:h-160">
      <div class="container mx-auto flex flex-col lg:flex-row w-full mb-4 justify-center bg-blue-darker">
        <div class="row w-full bg-blue-darker mt-5">
          <div>
              <p class="text-3xl uppercase text-white text-start text-xs ml-5 font-bold mt-4 mb-2">RSVP</p>
              <h4 class="text-white ml-5 mb-4">Kindly RSVP by 15 May 2019</h4>
          </div>
          <div class=" max-w-md justify-center mt-10 mb-4">
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
            <form class=" w-3/4 lg:w-full ml-5 max-w-md justify-center mt-5 mb-4" enctype="multipart/form-data" method="POST" action="{{ route('rsvps.store') }}">
                @csrf
                <div class="flex flex-wrap justify-center -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">First Name*</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="firstname" type="text" placeholder="Kane" required>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">
                        Last Name
                      </label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name"name="lastname" type="text" placeholder="Richard">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">number of guest</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="guestno" id="grid-first-name" type="text" placeholder="4">
                      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">travelling here from</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" type="text" name="origin" placeholder="Calgary, Canada">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Email*</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="email" id="grid-first-name" type="text" placeholder="luke@bali.com" required>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">Note</label>
                      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-last-name" name="note" type="text" placeholder="Wishing you a blessed..">
                    </div>
                    <div class="w-full md:w-1/2 mt-3 px-3">
                      <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-zip">RSVP if you Will you be there?*</label>
                      <input class="mr-2 leading-tight" name="cantmakeit" type="checkbox">
                        <span class="text-xs uppercase font-bold text-white">
                          Aren't able to make it!
                        </span>
                    </div>
                </div>
                <div class="flex flex-wrap  mb-10">
                    <div class="md:flex md:items-center">
                        <button class="block uppercase bg-blue hover:bg-blue-dark text-white font-bold py-3 px-10 rounded" type="submit">rsvp now</button> <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </section>

      <div class="container-fluid bg-black mx-auto flex flex-col lg:flex-row items-center lg:h-112">
        <div class="flex-1 px-6 lg:h-112 bg-black lg:mt-32">
            <div  class="">
              <h2 class="roman mt-5 lg:ml-20 lg:mr-20 text-white text-center">Owe no man anything except to love one another - Romans 13:8</h2>
            </div>
              <hr class="bg-white">
            <div class="lg:mt-10 lg:mb-20">
              <p class="italic lg:text-2xl text-center text-grey-lightest lg:px-24">To all our guests, we are honoured and delighted to have you share this special day with us. May love always comple <br> us to live passionately, boldly, and worthy.</p>
            </div>
            <div class="text-center mt-5">
              <img src="/img/IsaacMelsymbol.png" width="150" height="150" alt="">
            </div>
            <p class="text-right italic mt-2 mb-5 text-grey-dark">The Developer</p>

        </div>
    </div>
    </body>
</html>
