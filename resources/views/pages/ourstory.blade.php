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
    <div class="bg-transparent">
        <div class="container-fluid mx-auto flex items-center lg:py-4">
            <div  class="w-full lg:w-1/5">
                <a href="/">
                  <p class="text-grey-darkest uppercase text-white lg:text-4xl ml-5" style="font-family: Monoton;">Isaac & Melanie</p>
                </a>
            </div>
            <div class="w-full lg:w-3/5 text-center">
                <nav>
                    <a href="{{ url('/') }}" class="top-nav-item text-white no-underline"><i class="fa fa-home lg:fa-lg"></i> Home</a>
                    <a href="{{ ('/ourstory') }}" class="top-nav-item text-white no-underline"><i class="fa fa-bolt lg:fa-lg"></i> Our Story</a>
                    <a href="/crew" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Wedding</a>
                    <a href="/gallery" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Gallery</a>
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
    <div class="coverstory bg-center lg:bg-cover w-full h-screen -mt-10 lg:-mt-32"></div>

    <!-- Full width column -->
    <div class="container mx-auto flex flex-col lg:flex-row w-full lg:w-full items-center mt-5 mb-5 lg:h-112">
      <div class="flex-1 bg-grey px-6 lg:h-112">
          <h1 class="uppercase lg:mt-10 items-center">Isaac && <br> Melanie’s Story <i class="fas fa-film"></i></h1>
            <h3 class="mt-5 text-grey-darker items-center">Isaac and Melanie met while Melanie was studying in Uganda at the Hopeland Youth With A Mission Campus. As she entered her second semester, Isaac came back to work on the campus after a worship tour around East Africa. Isaac noticed Melanie right away and pursued her intentionally. After a couple weeks, Melanie finally gave Isaac a chance and on January 1st 2016, they began their relationship. <br> <br> The next six months as Melanie finished her school was an incredible season where they felt God strengthen and give vision for their relationship. Since then, Isaac and Melanie have faced long times apart as Isaac lives in Indonesia working with community development work and Melanie finishes her degree in Canada. <br><br> With a few short visits to Uganda and Indonesia and thousands of videos calls, their love has only grown despite the distance they face each day.  <i class="fas fa-angle-double-down"></i></h3>
      </div>
    </div>

    <div class="container mx-auto flex flex-col lg:flex-row items-center mb-5 lg:mt-5 lg:h-24">
          <div class="flex-1 bg-pink-darker px-6 lg:h-24">
              <p class="lg:text-2xl lg:mt-8 text-white text-center">A sneak peak of how it all came about <i class="fas fa-camera-retro"></i></p>
          </div>
    </div>

    <div class="container mx-auto lg:-mb-10 flex flex-col lg:flex-row items-center lg:h-112">
        <div class="px-2 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/IMG_0275.JPG" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64 overflow-hidden">
                  <img src="/img/IMG_0281.JPG" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/fav.png"  alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container mt-5 lg:-mt-20 mx-auto flex flex-col lg:flex-row items-center lg:h-64">
        <div class="px-2 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/isc.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64 overflow-hidden">
                  <img src="/img/isc1.png" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/isaac.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container mt-5 lg:-mt-1 mx-auto flex flex-col lg:flex-row items-center lg:h-64 lg:mb-20">
        <div class="px-2 lg:mt-10 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/IMG_1014.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64 overflow-hidden">
                  <img src="/img/isc2.png" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64 overflow-hidden">
                  <img src="/img/isc3.png" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>

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
