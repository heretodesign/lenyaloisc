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

      <nav class="flex items-center justify-between flex-wrap bg-teal p-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
          <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
          <span class="font-semibold text-xl tracking-tight">Isaac & Melanie</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
              <!-- Docs -->
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
              <!-- Examples -->
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
              <!-- Blog -->
            </a>
          </div>
          <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">#melbecomesmzasi</a>
          </div>
        </div>
      </nav>
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
                        <a href="/crew" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Wedding</a>
                        <!-- <a href="/gallery" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Gallery</a> -->
                        <a href="/gift" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> Gift Registry</a>
                        <a href="/faq" class="top-nav-item no-underline"><i class="fa fa-bell fa-lg"></i> FAQ's</a>
                        <a href="{{ ('/guide') }}" class="top-nav-item no-underline"><i class="fas fa-motorcycle fa-lg"></i> Moving Around Guide</a>
                        
                    </nav>
                </div>
                <div class="w-1/5 flex justify-end">
                     
                        <div class="button px-2 mr-5 bg-black no-underline hover:bg-teal text-white font-medium py-3 px-10 uppercase rounded-full"><a href="{{ ('/rsvp') }}" class="top-nav-items text-white no-underline"><i class="fa fa-envelope fa-lg"></i> RSVP</a></div>

                        <!-- <div class="button px-2 mr-4"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 uppercase rounded-full">Register</button></div> -->
                       
                    <!-- <div class="search mr-4 relative"><input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search Courses">
                    <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fa fa-search text-grey"></i></span>
                    </div> -->
                    <!-- <div class="avator mr-4"><a href="#"><img src="/img/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a></div> -->
                    <!-- <div class="button"><button class="bg-black hover:bg-teal-dark text-white font-medium py-3 px-10 rounded-full">Login</button></div> -->
                </div>
            </div>
        </div>
     <div class="container bg-grey-light w-full mx-auto flex items-center mt-5 mb-5 h-16">
      <!-- Full width column -->
      <div class="mb-4">
        <div class="w-full bg-grey-light h-16 items-center">
          <h1 class="uppercase mt-5 text-5xl text-pink-darker">Bridesmaid & <span class="uppercase mt-5 text-5xl text-grey-darker">
            Groomsmen
          </span>crew <i class="fas fa-angle-double-right"></i>
           </h1>
        </div>
      </div>
     
        <!-- <div class="w-1/2 bg-grey h-48">
          <h1 class="uppercase mt-5 text-5xl text-pink-darker items-center">Bridesmaid <br> crew <i class="fas fa-angle-double-right"></i>
           </h1>
        </div>
        <div class="w-1/2 bg-grey h-48">
          <h1 class="uppercase mt-5 text-grey-darker items-center">  Groomsmen <br> Crew!!</h1>
        </div> -->
      <!-- <h1 class="uppercase mt-5 text-grey-darker items-center">  Doing this with this <br> amazing Bridesmaid!!</h1> -->
        <!-- <div class="mx-auto items-center px-6 flex">
            <h1 class="uppercase mt-5 text-5xl items-center">The wedding <br> crew <i class="fas fa-angle-double-right"></i> </h1>
            <h1 class="uppercase mt-5 text-grey-darker items-center">  Doing this with this <br> amazing Bridesmaid!!</h1>
        </div> -->
    </div>
    <div class="first">
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 h-64">
              <div class="w-1/2 bg-grey-darker px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          MAID OF HONOR
                        </p>
                        <div class="text-white font-bold text-xl mb-2">Amanda Cook - Singer and songwriter coming to my wedding</div>
                        <p class="text-grey-lighter text-base">Most likely to know every word to every song played at the wedding (and sound even more amazing than the band singing them!).</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-grey-light leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          BEST MAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Berno Van Nieerk -> Photographer turned creative guru!</div>
                        <p class="text-grey-darker text-base">Most likely to impress everyone by doing a choreographed 305 dance routine with Nikki on the dance floor</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 mb-4 h-80">
              <div class="w-1/2 bg-grey-darker px-2 h-96">
                <div class="max-w-md w-5/6 lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          BEST MAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Emerson Kazali - Hails from Uganda and is a man of many talents.</div>
                        <p class="text-grey-darker text-base">Most likely to make everyone laugh hysterically during his toast.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Single</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          MAID OF HONOR
                        </p>
                        <div class="text-white font-bold text-xl mb-2">Stephanie Grizzle -> My best friend from highsch</div>
                        <p class="text-grey-light text-base">Most likely to impress everyone by doing a choreographed 305 dance routine with Nikki on the dance floor</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-grey-light leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Taken</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 mb-4 h-96">
              <div class="w-1/2 bg-grey-darker px-2 h-96">
                <div class="max-w-md w-5/6 lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          BRIDESMAID
                        </p>
                        <div class="text-white font-bold text-xl mb-2">Joyce Chang - Singer and songwriter coming to my wedding</div>
                        <p class="text-grey-light text-base">Most likely to be the first bridesmaid to change into flats for dancing all night.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-grey-light leading-none">Joyce Chang</p>
                          <p class="text-grey-dark">Ready to Mingle</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          GROOMSMAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Abel Senwelo -> Gym buddy and all around fashionista</div>
                        <p class="text-grey-darker text-base">Most likely to wear cowboy boots with his tuxedo.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 mb-4 h-96">
              <div class="w-1/2 bg-grey-darker px-2 h-96">
                <div class="max-w-md w-5/6 lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          GROOMSMAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Amanda Cook - Singer and songwriter coming to my wedding</div>
                        <p class="text-grey-darker text-base">Most likely to try to convince Isaac to take Melanie's last name.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          MAID OF HONOR
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Stephanie Grizzle -> My best friend from highsch</div>
                        <p class="text-grey-darker text-base">Most likely to show up with gorgeous, photo-shoot-ready hair before the bridesmaids have even started getting ready</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 mb-4 h-96">
              <div class="w-1/2 bg-grey-darker px-2 h-96">
                <div class="max-w-md w-5/6 lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          BRIDESMAID
                        </p>
                        <div class="text-white font-bold text-xl mb-2">Amanda Cook - Singer and songwriter coming to my wedding</div>
                        <p class="text-grey-light text-base">Most likely to know the nutrition facts of the wedding cake (but be too sweet to tell anyone!).</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-grey-light leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          GROOMSMAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Michael Mike -> My best friend from highsch</div>
                        <p class="text-grey-darker text-base">He's fun and hilarious. Most likely to run off with all of the bridesmaids.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="container mx-auto flex items-center py-4">
          <!-- Two columns -->
            <div class="flex -mx-2 mb-4 h-96">
              <div class="w-1/2 bg-grey-light px-2 h-96">
                <div class="max-w-md w-5/6 lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          GROOMSMAN
                        </p>
                        <div class="text-black font-bold text-xl mb-2">Amanda Cook - Singer and songwriter coming to my wedding</div>
                        <p class="text-grey-darker text-base">Most likely to meet his next business partner at the wedding.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-black leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="w-1/2 bg-grey-light px-2 h-80">
                <div class="max-w-md w-full lg:flex">
                    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
                    </div>
                    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-pink-darker rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                      <div class="mb-8">
                        <p class="text-sm text-grey-dark flex items-center">
                          <svg class="fill-current text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                          </svg>
                          MAID OF HONOR
                        </p>
                        <div class="text-white font-bold text-xl mb-2">Stephanie Grizzle -> My best friend from highsch</div>
                        <p class="text-grey-lighter text-base">Most likely to be making funny faces in all the candid wedding photos.</p>
                      </div>
                      <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                        <div class="text-sm">
                          <p class="text-white leading-none">Jonathan Reinink</p>
                          <p class="text-grey-dark">Aug 18</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
 
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
