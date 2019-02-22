<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                      <p class="text-grey-darkest uppercase lg:text-4xl ml-5" style="font-family: Monoton;">Isaac & Melanie</p>
                    </a>
                </div>
                <div class="w-full lg:w-3/5 text-center">
                    <nav>
                        <a href="{{ url('/') }}" class="top-nav-item text-black no-underline"><i class="fa fa-home lg:fa-lg"></i> Home</a>
                        <a href="{{ ('/ourstory') }}" class="top-nav-item text-black no-underline"><i class="fa fa-bolt lg:fa-lg"></i> Our Story</a>
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

         <div class="outstory bg-center lg:bg-cover w-full h-screen -mt-10 lg:-mt-32"></div>

        <div class="backimg container-fluid bg-pink-darker mx-auto flex flex-col lg:flex-row items-center h-112">
          <div class="flex-1 px-6 h-112">
              <div  class="">
                  <h1 class="uppercase mt-5 ml-20 mr-20 text-black text-center">save the date</h1>
              </div>
              <div class="mt-10 lg:mb-20">
                  <p class="text-center text-grey-lightest text-2xl px-24">
                      <img src="/img/savetd.png" alt="" class="bg-center bg-cover lg:bg-contain w-full lg:w-3/4 lg:h-80">
                  </p>
              </div>
          </div>
        </div>

        <!-- <div class="flex flex-wrap bg-grey-darkest h-112">
            <div class="w-3/4 ml-auto  h-12">
                <h2>Isaac and Melanie’s Story</h2>
                <p class="text-grey-light">Isaac and Melanie met while Melanie was studying in Uganda at the Hopeland Youth With A Mission Campus. As she entered her second semester, Isaac came back to work on the campus after a worship tour around East Africa. Isaac noticed Melanie right away and pursued her intentionally. After a couple weeks, Melanie finally gave Isaac a chance and on January 1st 2016, they began their relationship. <br> <br> The next six months as Melanie finished her school was an incredible season where they felt God strengthen and give vision for their relationship. Since then, Isaac and Melanie have faced long times apart as Isaac lives in Indonesia working with community development work and Melanie finishes her degree in Canada. With a few short visits to Uganda and Indonesia and thousands of videos calls, their love has only grown despite the distance they face each day. </p>
            </div>
        </div> -->

        <!-- <div class="backimg h-144">
            <div class="container mx-auto flex items-center py-4">
                <div class="">
                    <div class="flex-1  px-6 h-64">
                        <h1 class="uppercase text-black mt-10 text-center">The Day <br> They Got Engaged <i class="fas fa-angle-double-right"></i></h1>
                        <h3 class="mt-5 text-black">In July 2018, Melanie travelled to Indonesia to visit Isaac over the summer break. On July 21st 2018, Isaac took Melanie to Nyang Nyang Beach, a beautiful location on the coast of Bali Island. <br> <br> Here, they spend the day in the sun, swimming and snacking. As the sun began to set, Isaac offered Melanie the last of his potato chips. Upon reaching in the bag, all the chips had gone and a ring was at the bottom of the bag! With laugher, <strong class="text-2xl text-grey-darkest"> Isaac got down on one knee and proposed! </strong><br><br> <strong class="text-3xl text-grey-darkest">Melanie,</strong>  <br> of <br> course.... <br><br> <strong class="text-5xl text-grey-darkest">said <br> <i class="fas fa-grin-hearts text-indigo-lighter"></i> YES! <i class="fas fa-angle-double-down"></i></strong> 
                        </h3>
                    </div>                    
                </div>
            </div>
        </div> -->

        <!-- Full width column -->
        <!-- <div class="container mx-auto flex items-center mt-5 mb-5 h-112">
          <div class="flex-1 bg-grey px-6 h-112">
              <h1 class="uppercase mt-10 items-center">Isaac && <br> Melanie’s Story <i class="fas fa-angle-double-right"></i></h1>
                <h3 class="mt-5 text-grey-darker items-center">Isaac and Melanie met while Melanie was studying in Uganda at the Hopeland Youth With A Mission Campus. As she entered her second semester, Isaac came back to work on the campus after a worship tour around East Africa. Isaac noticed Melanie right away and pursued her intentionally. After a couple weeks, Melanie finally gave Isaac a chance and on January 1st 2016, they began their relationship. <br> <br> The next six months as Melanie finished her school was an incredible season where they felt God strengthen and give vision for their relationship. Since then, Isaac and Melanie have faced long times apart as Isaac lives in Indonesia working with community development work and Melanie finishes her degree in Canada. <br><br> With a few short visits to Uganda and Indonesia and thousands of videos calls, their love has only grown despite the distance they face each day.  <i class="fas fa-angle-double-down"></i></h3>
          </div>
        </div> -->

        <!-- Full width column -->
        <!-- <div class="container mx-auto flex items-center mt-5 mb-5 h-112">
          <div class="flex-1 bg-grey px-6 h-112">
              <h1 class="uppercase mt-10 items-center">The Day <br> They Got Engaged <i class="fas fa-angle-double-right"></i></h1>
                <h3 class="mt-5 text-grey-darker items-center">In July 2018, Melanie travelled to Indonesia to visit Isaac over the summer break. On July 21st 2018, Isaac took Melanie to Nyang Nyang Beach, a beautiful location on the coast of Bali Island. <br> <br> Here, they spend the day in the sun, swimming and snacking. As the sun began to set, Isaac offered Melanie the last of his potato chips. Upon reaching in the bag, all the chips had gone and a ring was at the bottom of the bag! With laugher, <strong class="text-2xl text-black"> Isaac got down on one knee and proposed! </strong><br><br> <strong class="text-3xl text-black">Melanie,</strong>  <br> of <br> course.... <br><br> <strong class="text-5xl text-black">said YES! <i class="fas fa-angle-double-down"></i></strong> 
                </h3>
          </div>
        </div> -->

        <!-- <div class="proposal header-data h-144">
          <div class="container mx-auto flex items-center h-64">
            <div class="flex-1  px-6 h-64">
                <h1 class="uppercase text-grey-lightest mt-10 text-center">The Day <br> They Got Engaged <i class="fas fa-angle-double-right"></i></h1>
                <h3 class="mt-5 text-grey-light">In July 2018, Melanie travelled to Indonesia to visit Isaac over the summer break. On July 21st 2018, Isaac took Melanie to Nyang Nyang Beach, a beautiful location on the coast of Bali Island. <br> <br> Here, they spend the day in the sun, swimming and snacking. As the sun began to set, Isaac offered Melanie the last of his potato chips. Upon reaching in the bag, all the chips had gone and a ring was at the bottom of the bag! With laugher, <strong class="text-2xl text-grey-lightest"> Isaac got down on one knee and proposed! </strong><br><br> <strong class="text-3xl text-grey-lightest">Melanie,</strong>  <br> of <br> course.... <br><br> <strong class="text-5xl text-grey-lightest">said <br> <i class="fas fa-grin-hearts text-indigo-lighter"></i> YES! <i class="fas fa-angle-double-down"></i></strong> 
                </h3>
            </div>
          </div>
        </div> -->
        <div class="backimg h-144">
            <div class="container mx-auto flex flex-col lg:flex-row items-center py-4">
                <div class="">
                    <div class="flex-1  px-6 h-64">
                        <h1 class="uppercase text-black lg:mt-10 text-center">The Day <br> They Got Engaged <i class="fas fa-angle-double-right"></i></h1>
                        <h3 class="mt-5 text-black">In July 2018, Melanie travelled to Indonesia to visit Isaac over the summer break. On July 21st 2018, Isaac took Melanie to Nyang Nyang Beach, a beautiful location on the coast of Bali Island. <br> <br> Here, they spend the day in the sun, swimming and snacking. As the sun began to set, Isaac offered Melanie the last of his potato chips. Upon reaching in the bag, all the chips had gone and a ring was at the bottom of the bag! With laugher, <strong class="lg:text-2xl text-grey-darkest"> Isaac got down on one knee and proposed! </strong><br><br> <strong class="lg:text-3xl text-grey-darkest">Melanie,</strong> of course.... <strong class="lg:text-5xl text-grey-darkest">said <br> <i class="fas fa-grin-hearts text-indigo-lighter"></i> YES! <i class="fas fa-angle-double-down"></i></strong> 
                        </h3>
                    </div>                    
                </div>
            </div>
        </div>
        <!-- Full width column -->
        <div class="container mx-auto flex flex-col lg:flex-row items-center lg:mt-5 lg:h-24">
          <div class="flex-1 bg-pink-darker px-6 h-24">
              <p class="lg:text-2xl mt-4 lg:mt-8 text-white text-center">Check out some beautiful photos of Isaac & Melanie just moments after their romantic engagement <i class="fas fa-camera-retro"></i></p>
          </div>
        </div>

    <div class="container mx-auto mt-5 lg:-mb-10 flex flex-col lg:flex-row items-center lg:h-112">
        <div class="px-2 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0451.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64">
                  <img src="/img/_MG_0455.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0464.jpg"  alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container mt-5 lg:-mt-20 mx-auto flex flex-col lg:flex-row items-center lg:h-64">
        <div class="px-2 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0312.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64">
                  <img src="/img/_MG_0329.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0327.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container mt-5 lg:-mt-1 mx-auto flex flex-col lg:flex-row items-center lg:h-64 lg:mb-20">
        <div class="px-2 lg:mt-10 lg:h-64">
          <div class="flex -mx-2">
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0399.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey lg:h-64">
                  <img src="/img/_MG_0393.jpg" alt="">
              </div>
            </div>
            <div class="w-full lg:w-1/3 px-2">
              <div class="bg-grey-light lg:h-64">
                  <img src="/img/_MG_0415.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid bg-pink-darker mx-auto flex flex-col lg:flex-row items-center mt-5 lg:mt-5 h-64 lg:h-112">
      <div class="flex-1 px-6 lg:h-96">
          <div  class="bg-pink-darker">
              <h1 class="uppercase mt-5 lg:ml-20 lg:mr-20 text-white text-center">see you at the wedding!</h1>
          </div>
          <div class="mt-5 lg:mt-10 mb-5 lg:mb-20">
              <p class="text-center text-grey-lightest lg:text-2xl lg:px-24">We can’t wait to see all of our beloved friends and relatives at the wedding. If, by chance, you cannot be there, please let us know in advance.</p>
          </div>
          <div class="text-center mt-10">
              <a href="{{ ('/rsvp') }}" class="btn btn-primary bg-white hover:bg-teal   font-bold py-2 lg:py-6 px-6 lg:px-32 text-black lg:text-2xl rounded-full"><i class="fas fa-envelope-square"></i> RSVP NOW </a>
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
    </div>
</body>
</html>
