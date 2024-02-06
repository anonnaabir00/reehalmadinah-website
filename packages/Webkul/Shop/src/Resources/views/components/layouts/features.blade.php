{!! view_render_event('bagisto.shop.layout.features.before') !!}

@if (request()->is('/'))
<section class="pt-10 md:pt-20 lg:pt-24 xl:pt-32">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
      <div class="md:pr-8 lg:pr-16 xl:pr-20 mb-6 md:mb-0">
        <div class="mb-6">
          <span class="text-xs md:text-sm tracking-wider text-gray-600">Perfumes Collection</span>
          <h3 class="mt-4 text-2xl md:text-3xl lg:text-4xl font-bold leading-tight">Discover our Perfumes</h3>
        </div>
      </div>
      <div class="md:text-right">
        <div class="mb-6 md:mb-0">
          <a href="/shop" class="inline-block py-3 px-8 bg-yellow-600 hover:bg-yellow-700 text-white hover:text-white font-semibold transition duration-300">
            Shop All Perfumes
            <!-- SVG Arrow Icon -->
          </a>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
      <!-- Category Item 1 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/oWkAzSwmpvOgaQybv4knBoLbd6gX8IsXRZK2OjdC.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white hover:text-white">Parent Category 1</a></h3>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 1 -->

      <!-- Category Item 2 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/kDUcZwsPs9gT2BTyAM1eyCwrJKkSQVWrdwyQb305.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white hover:text-white">Parent Category 2</a></h3>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 2 -->

      <!-- Category Item 3 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/oWkAzSwmpvOgaQybv4knBoLbd6gX8IsXRZK2OjdC.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white hover:text-white">Parent Category 3</a></h3>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 3 -->

      <!-- Category Item 4 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/kDUcZwsPs9gT2BTyAM1eyCwrJKkSQVWrdwyQb305.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white hover:text-white">Parent Category 4</a></h3>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 4 -->
    </div>
  </div>
</section>
@endif

<section class="tp-testimonial-area pt-16 md:pt-28 pb-16 md:pb-32">
    <div class="container mx-auto">
        <div class="text-center mb-10">
            <span class="block text-sm md:text-base text-gray-600">Customers Review</span>
            <h3 class="text-4xl md:text-4xl font-semibold text-gray-900 mt-4">What our Clients say</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="tp-testimonial-slider-3">
                <div class="tp-testimonial-item-3 bg-gray-200 p-4 md:p-6 relative z-10">
                    <div class="tp-testimonial-shape-3">
                    <svg id='Get_Quote_24' width='32' height='32' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.83 0 0 0.83 12 12)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-15, -15)" d="M 5 4 C 3.895 4 3 4.895 3 6 L 3 14 C 3 15.105 3.895 16 5 16 L 9.0410156 16 C 9.0659476 17.786225 8.8912171 21.613615 7.1621094 24.453125 C 7.1627399 24.453222 7.1634317 24.453029 7.1640625 24.453125 C 6.9007006970087525 24.859196986411302 6.965812726708144 25.395568487200645 7.318682524553498 25.726833944487396 C 7.671552322398853 26.058099401774147 8.210963365681701 26.08923924209317 8.5996094 25.800781 C 8.5996094 25.800781 13 22.444444 13 16 L 13 6 C 13 4.895 12.105 4 11 4 L 5 4 z M 19 4 C 17.895 4 17 4.895 17 6 L 17 14 C 17 15.105 17.895 16 19 16 L 23.041016 16 C 23.065948 17.786225 22.891217 21.613615 21.162109 24.453125 C 21.162109 24.453125 21.164062 24.453125 21.164062 24.453125 C 20.90069946064405 24.859196984328804 20.965811222659667 25.395569068908763 21.318681322874593 25.72683478697668 C 21.671551423089518 26.058100505044603 22.21096303427509 26.089240003878363 22.599609 25.800781 C 22.599609 25.800781 27 22.444444 27 16 L 27 6 C 27 4.895 26.105 4 25 4 L 19 4 z" stroke-linecap="round" />
                    </g>
                    </svg>
                    </div>
                    <div class="tp-testimonial-rating tp-testimonial-rating-3">
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                    </div>
                    <div class="tp-testimonial-content-3 mt-4 md:mt-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="tp-testimonial-user-wrapper-3 flex items-center mt-4 md:mt-6">
                        <div class="tp-testimonial-user-3 flex items-center">
                            <div class="tp-testimonial-avater-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            </div>
                            <div class="tp-testimonial-user-3-info">
                                <h3 class="tp-testimonial-user-3-title">John Doe /</h3>
                                <span class="tp-testimonial-3-designation">CEO, Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat the above structure for each testimonial -->
            <div class="tp-testimonial-slider-3">
                <div class="tp-testimonial-item-3 bg-gray-200 p-4 md:p-6 relative z-10">
                    <div class="tp-testimonial-shape-3">
                    <svg id='Get_Quote_24' width='32' height='32' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.83 0 0 0.83 12 12)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-15, -15)" d="M 5 4 C 3.895 4 3 4.895 3 6 L 3 14 C 3 15.105 3.895 16 5 16 L 9.0410156 16 C 9.0659476 17.786225 8.8912171 21.613615 7.1621094 24.453125 C 7.1627399 24.453222 7.1634317 24.453029 7.1640625 24.453125 C 6.9007006970087525 24.859196986411302 6.965812726708144 25.395568487200645 7.318682524553498 25.726833944487396 C 7.671552322398853 26.058099401774147 8.210963365681701 26.08923924209317 8.5996094 25.800781 C 8.5996094 25.800781 13 22.444444 13 16 L 13 6 C 13 4.895 12.105 4 11 4 L 5 4 z M 19 4 C 17.895 4 17 4.895 17 6 L 17 14 C 17 15.105 17.895 16 19 16 L 23.041016 16 C 23.065948 17.786225 22.891217 21.613615 21.162109 24.453125 C 21.162109 24.453125 21.164062 24.453125 21.164062 24.453125 C 20.90069946064405 24.859196984328804 20.965811222659667 25.395569068908763 21.318681322874593 25.72683478697668 C 21.671551423089518 26.058100505044603 22.21096303427509 26.089240003878363 22.599609 25.800781 C 22.599609 25.800781 27 22.444444 27 16 L 27 6 C 27 4.895 26.105 4 25 4 L 19 4 z" stroke-linecap="round" />
                    </g>
                    </svg>
                    </div>
                    <div class="tp-testimonial-rating tp-testimonial-rating-3">
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                        <span><i class="fas fa-star text-yellow-400"></i></span>
                    </div>
                    <div class="tp-testimonial-content-3 mt-4 md:mt-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="tp-testimonial-user-wrapper-3 flex items-center mt-4 md:mt-6">
                        <div class="tp-testimonial-user-3 flex items-center">
                            <div class="tp-testimonial-avater-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            </div>
                            <div class="tp-testimonial-user-3-info">
                                <h3 class="tp-testimonial-user-3-title">Jane Doe /</h3>
                                <span class="tp-testimonial-3-designation">CTO, Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Features -->
<section class="tp-feature-area border-b-2 border-gray-200 pb-8 md:pb-20">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="tp-feature-item-2 flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                    <svg id='Delivery_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.93 0 0 0.93 16 16)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-16, -17)" d="M 1 5 L 1 26 L 4.15625 26 C 4.601563 27.71875 6.148438 29 8 29 C 9.851563 29 11.398438 27.71875 11.84375 26 L 20.15625 26 C 20.601563 27.71875 22.148438 29 24 29 C 25.851563 29 27.398438 27.71875 27.84375 26 L 31 26 L 31 15.59375 L 30.71875 15.28125 L 24.71875 9.28125 L 24.40625 9 L 19 9 L 19 5 Z M 3 7 L 17 7 L 17 24 L 11.84375 24 C 11.398438 22.28125 9.851563 21 8 21 C 6.148438 21 4.601563 22.28125 4.15625 24 L 3 24 Z M 10 8 C 6.699219 8 4 10.699219 4 14 C 4 17.300781 6.699219 20 10 20 C 13.300781 20 16 17.300781 16 14 C 16 10.699219 13.300781 8 10 8 Z M 10 10 C 12.222656 10 14 11.777344 14 14 C 14 16.222656 12.222656 18 10 18 C 7.777344 18 6 16.222656 6 14 C 6 11.777344 7.777344 10 10 10 Z M 9 11 L 9 14.40625 L 9.28125 14.71875 L 10.71875 16.125 L 12.125 14.71875 L 11 13.5625 L 11 11 Z M 19 11 L 23.5625 11 L 29 16.4375 L 29 24 L 27.84375 24 C 27.398438 22.28125 25.851563 21 24 21 C 22.148438 21 20.601563 22.28125 20.15625 24 L 19 24 Z M 8 23 C 9.117188 23 10 23.882813 10 25 C 10 26.117188 9.117188 27 8 27 C 6.882813 27 6 26.117188 6 25 C 6 23.882813 6.882813 23 8 23 Z M 24 23 C 25.117188 23 26 23.882813 26 25 C 26 26.117188 25.117188 27 24 27 C 22.882813 27 22 26.117188 22 25 C 22 23.882813 22.882813 23 24 23 Z" stroke-linecap="round" />
                    </g>
                    </svg>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Free Delivery</h3>
                    <p class="mt-3">Orders from all items</p>
                </div>
            </div>
            <!-- Repeat the above structure for each column -->
            <div class="tp-feature-item-2 flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                    <svg id='Return_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(1.08 0 0 1.08 16 16)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-14.99, -13.99)" d="M 6.9804688 2.9902344 C 6.720670176180489 2.997975535874743 6.474090404386605 3.106554705716428 6.292968799999999 3.2929688000000006 L 2.3808594 7.2050781 C 2.132518360461186 7.394520786484941 1.9869475145934148 7.689111985505126 1.9873307595146075 8.001460599244936 C 1.9877140044358002 8.313809212984747 2.1340073248322704 8.608042301053006 2.3828125 8.796875 L 6.2929688 12.707031 C 6.543786003039588 12.96826889121244 6.916234985168734 13.07350151917291 7.266675241169932 12.982144351312149 C 7.617115497171131 12.890787183451389 7.890787008886049 12.617115749150738 7.9821442758768875 12.26667551899203 C 8.073501542867726 11.91623528883332 7.968269020263018 11.543786276936721 7.7070312 11.292969 L 5.4140625 9 L 19 9 C 22.877484 9 26 12.122516 26 16 C 26 19.877484 22.877484 23 19 23 L 15 23 C 14.63936408342243 22.994899710454515 14.303918635428394 23.184375296169332 14.122112278513482 23.49587284971433 C 13.940305921598572 23.80737040325933 13.940305921598572 24.192629596740673 14.122112278513484 24.50412715028567 C 14.303918635428394 24.815624703830668 14.639364083422432 25.005100289545485 15 25 L 19 25 C 23.604108 25 27.275261 21.467568 27.796875 17 L 28 17 L 28 16 C 28 11.041484 23.958516 7 19 7 L 5.4140625 7 L 7.7070312 4.7070312 C 8.002791643376913 4.419539794752601 8.091719996370374 3.9799651458482392 7.930965723130143 3.600118319360723 C 7.770211449889912 3.2202714928732066 7.392752339441845 2.9780758201924664 6.9804688 2.9902344 z M 3 23 C 2.4477152501692068 23 2 23.447715250169207 2 24 C 2 24.552284749830793 2.4477152501692068 25 3 25 C 3.5522847498307932 25 4 24.552284749830793 4 24 C 4 23.447715250169207 3.5522847498307932 23 3 23 z M 7 23 C 6.447715250169207 23 6 23.447715250169207 6 24 C 6 24.552284749830793 6.447715250169207 25 7 25 C 7.552284749830793 25 8 24.552284749830793 8 24 C 8 23.447715250169207 7.552284749830793 23 7 23 z M 11 23 C 10.447715250169207 23 10 23.447715250169207 10 24 C 10 24.552284749830793 10.447715250169207 25 11 25 C 11.552284749830793 25 12 24.552284749830793 12 24 C 12 23.447715250169207 11.552284749830793 23 11 23 z" stroke-linecap="round" />
                    </g>
                    </svg>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Return & Refund</h3>
                    <p class="mt-3">Money back guarantee</p>
                </div>
            </div>
            <div class="tp-feature-item-2 flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                    <svg id='Get_a_Discount_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.22 0 0 0.22 16 16)" >
                    <g style="" >
                    <g transform="matrix(1 0 0 1 0 -37)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(68,75,84); fill-rule: nonzero; opacity: 1;" transform=" translate(-64, -27)" d="M 50 24 C 45 24 41 20 41 15 C 41 10 45 6 50 6 C 55 6 59 10 59 15 C 59 20 55 24 50 24 z M 50 12 C 48.3 12 47 13.3 47 15 C 47 16.7 48.3 18 50 18 C 51.7 18 53 16.7 53 15 C 53 13.3 51.7 12 50 12 z M 78 48 C 73 48 69 44 69 39 C 69 34 73 30 78 30 C 83 30 87 34 87 39 C 87 44 83 48 78 48 z M 78 36 C 76.3 36 75 37.3 75 39 C 75 40.7 76.3 42 78 42 C 79.7 42 81 40.7 81 39 C 81 37.3 79.7 36 78 36 z" stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 -1.18 33.45)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" translate(-62.82, -97.45)" d="M 123.9 87.4 C 122.10000000000001 83.4 117.2 81.80000000000001 113.2 83.5 L 109.7 85 L 109 83.6 C 107.3 79.5 102.6 77.6 98.5 79.39999999999999 L 77.7 88.49999999999999 C 76.9 87.19999999999999 75.7 86.19999999999999 74.2 85.49999999999999 L 48.4 73.9 C 38.4 69.4 26.7 70.80000000000001 18 77.5 L 14.1 80.5 L 13.1 81.5 L 13.1 81.5 L 4 81.5 C 2.3 81.5 1 82.8 1 84.5 L 1 116.5 L 13 116.5 L 13 111.3 L 13.9 110.8 C 17.2 108.89999999999999 21.3 108.8 24.700000000000003 110.5 L 46.900000000000006 121.6 C 52.10000000000001 124.1 58.10000000000001 124.3 63.50000000000001 122 L 119.9 98.2 C 123.9 96.4 125.8 91.5 123.9 87.4 z" stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 0.31 0.01)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(68,75,84); fill-rule: nonzero; opacity: 1;" transform=" translate(-64.31, -64.01)" d="M 126.8 86.5 C 125.7 83.8 123.5 81.7 120.8 80.6 C 118.1 79.5 115.1 79.5 112.39999999999999 80.69999999999999 L 111.19999999999999 81.19999999999999 C 109.99999999999999 79.1 108.1 77.49999999999999 105.89999999999999 76.6 C 103.19999999999999 75.5 100.19999999999999 75.5 97.49999999999999 76.69999999999999 L 85.89999999999999 81.6 C 84.39999999999999 82.19999999999999 83.69999999999999 84 84.3 85.5 C 84.8 86.6 85.89999999999999 87.3 87.1 87.3 C 87.5 87.3 87.89999999999999 87.2 88.3 87.1 L 99.89999999999999 82.19999999999999 C 101.1 81.69999999999999 102.49999999999999 81.69999999999999 103.69999999999999 82.19999999999999 C 104.49999999999999 82.49999999999999 105.1 82.99999999999999 105.6 83.6 L 82.1 93.6 C 82.39999999999999 89.1 80 84.69999999999999 75.6 82.8 L 49.6 71.2 C 38.6 66.3 25.8 67.8 16.200000000000003 75.10000000000001 L 12.300000000000002 78.10000000000001 C 12.200000000000003 78.2 12.100000000000003 78.30000000000001 12.000000000000002 78.4 L 11.000000000000002 79.4 C 10.400000000000002 80 10.100000000000001 80.7 10.100000000000001 81.5 L 10.100000000000001 113.5 L 4 113.5 C 2.3 113.5 1 114.8 1 116.5 C 1 118.2 2.3 119.5 4 119.5 L 13 119.5 C 14.7 119.5 16 118.2 16 116.5 L 16 82.7 L 19.8 79.8 C 27.700000000000003 73.8 38.1 72.6 47.2 76.6 L 73 88.2 C 74.2 88.7 75.2 89.7 75.6 91 C 76.1 92.2 76 93.6 75.5 94.8 C 75 96 74 96.9 72.8 97.4 C 71.6 97.9 70.2 97.80000000000001 69 97.30000000000001 L 49 88.4 C 47.5 87.7 45.7 88.4 45 89.9 C 44.3 91.4 45 93.2 46.5 93.9 L 66.5 102.80000000000001 C 69.2 104.00000000000001 72.2 104.10000000000001 74.9 103.00000000000001 C 75.30000000000001 102.90000000000002 75.7 102.70000000000002 76 102.50000000000001 C 76.2 102.50000000000001 76.3 102.40000000000002 76.4 102.40000000000002 L 114.60000000000001 86.20000000000002 C 115.80000000000001 85.70000000000002 117.2 85.70000000000002 118.4 86.20000000000002 C 119.60000000000001 86.70000000000002 120.60000000000001 87.70000000000002 121.10000000000001 88.90000000000002 C 121.60000000000001 90.10000000000002 121.60000000000001 91.50000000000001 121.10000000000001 92.70000000000002 C 120.60000000000001 93.90000000000002 119.60000000000001 94.90000000000002 118.4 95.40000000000002 L 62.00000000000001 119.20000000000002 C 57.50000000000001 121.10000000000002 52.30000000000001 121.00000000000001 47.900000000000006 118.80000000000001 L 24.100000000000005 107.20000000000002 C 22.600000000000005 106.50000000000001 20.800000000000004 107.10000000000002 20.100000000000005 108.60000000000002 C 19.400000000000006 110.10000000000002 20.000000000000004 111.90000000000002 21.500000000000004 112.60000000000002 L 45.300000000000004 124.20000000000002 C 48.50000000000001 125.80000000000001 51.900000000000006 126.50000000000001 55.400000000000006 126.50000000000001 C 58.400000000000006 126.50000000000001 61.50000000000001 125.90000000000002 64.4 124.70000000000002 L 120.80000000000001 100.90000000000002 C 123.50000000000001 99.80000000000003 125.60000000000001 97.60000000000002 126.70000000000002 94.90000000000002 C 127.9 92.2 127.9 89.2 126.8 86.5 z M 112 31 L 101 31 C 99.3 31 98 29.7 98 28 C 98 26.3 99.3 25 101 25 L 112 25 C 113.7 25 115 26.3 115 28 C 115 29.7 113.7 31 112 31 z M 27 31 L 16 31 C 14.3 31 13 29.7 13 28 C 13 26.3 14.3 25 16 25 L 27 25 C 28.7 25 30 26.3 30 28 C 30 29.7 28.7 31 27 31 z M 96 12.5 C 95 12.5 94 12 93.4 11 C 92.60000000000001 9.6 93.10000000000001 7.7 94.5 6.9 L 103.2 1.9000000000000004 C 104.60000000000001 1.1000000000000003 106.5 1.6000000000000003 107.3 3.0000000000000004 C 108.1 4.4 107.6 6.300000000000001 106.2 7.1 L 97.5 12.1 C 97.1 12.4 96.6 12.5 96 12.5 z M 23.3 54.5 C 22.3 54.5 21.3 54 20.7 53 C 19.9 51.6 20.4 49.7 21.8 48.9 L 30.5 43.9 C 31.9 43.1 33.8 43.6 34.6 45 C 35.4 46.4 34.9 48.3 33.5 49.1 L 24.8 54.1 C 24.3 54.4 23.8 54.5 23.3 54.5 z M 104.7 54.5 C 104.2 54.5 103.7 54.4 103.2 54.1 L 94.5 49.1 C 93.1 48.300000000000004 92.6 46.4 93.4 45 C 94.2 43.6 96.10000000000001 43.1 97.5 43.9 L 106.2 48.9 C 107.60000000000001 49.699999999999996 108.10000000000001 51.6 107.3 53 C 106.7 54 105.7 54.5 104.7 54.5 z M 32 12.5 C 31.5 12.5 31 12.4 30.5 12.1 L 21.8 7.1 C 20.400000000000002 6.3 19.900000000000002 4.3999999999999995 20.7 3 C 21.5 1.6 23.4 1.1 24.799999999999997 1.9 L 33.5 6.9 C 34.9 7.7 35.4 9.600000000000001 34.6 11 C 34 12 33 12.5 32 12.5 z" stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 -0.05 -37.01)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(68,75,84); fill-rule: nonzero; opacity: 1;" transform=" translate(-63.95, -26.99)" d="M 49 47 C 48.3 47 47.6 46.8 47 46.2 C 45.8 45.1 45.6 43.2 46.7 42 L 76.7 8 C 77.8 6.8 79.7 6.6 80.9 7.7 C 82.10000000000001 8.8 82.30000000000001 10.7 81.2 11.9 L 51.2 45.9 C 50.7 46.7 49.8 47 49 47 z" stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 60 -36)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(68,75,84); fill-rule: nonzero; opacity: 1;" transform=" translate(-124, -28)" d="M 124 25 C 122.34314575050762 25 121 26.34314575050762 121 28 C 121 29.65685424949238 122.34314575050762 31 124 31 C 125.65685424949238 31 127 29.65685424949238 127 28 C 127 26.34314575050762 125.65685424949238 25 124 25 Z" stroke-linecap="round" />
                    </g>
                    <g transform="matrix(1 0 0 1 -60 -36)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(68,75,84); fill-rule: nonzero; opacity: 1;" transform=" translate(-4, -28)" d="M 4 25 C 2.3431457505076194 25 1 26.34314575050762 1 28 C 1 29.65685424949238 2.3431457505076194 31 4 31 C 5.656854249492381 31 7 29.65685424949238 7 28 C 7 26.34314575050762 5.656854249492381 25 4 25 Z" stroke-linecap="round" />
                    </g>
                    </g>
                    </g>
                    </svg>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Member Discount</h3>
                    <p class="mt-3">On every order over $140</p>
                </div>
            </div>
            <div class="tp-feature-item-2 flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                    <svg id='Phone_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                    <g transform="matrix(0.64 0 0 0.64 16 16)" >
                    <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-25.01, -24.99)" d="M 11.839844 2.988281 C 11.070313 2.925781 10.214844 3.148438 9.425781 3.703125 C 8.730469 4.1875 7.230469 5.378906 5.828125 6.726563 C 5.128906 7.398438 4.460938 8.097656 3.945313 8.785156 C 3.425781 9.472656 2.972656 10.101563 3 11.015625 C 3.027344 11.835938 3.109375 14.261719 4.855469 17.980469 C 6.601563 21.695313 9.988281 26.792969 16.59375 33.402344 C 23.203125 40.011719 28.300781 43.398438 32.015625 45.144531 C 35.730469 46.890625 38.160156 46.972656 38.980469 47 C 39.890625 47.027344 40.519531 46.574219 41.207031 46.054688 C 41.894531 45.535156 42.59375 44.871094 43.265625 44.171875 C 44.609375 42.769531 45.800781 41.269531 46.285156 40.574219 C 47.390625 39 47.207031 37.140625 45.976563 36.277344 C 45.203125 35.734375 38.089844 31 37.019531 30.34375 C 35.933594 29.679688 34.683594 29.980469 33.566406 30.570313 C 32.6875 31.035156 30.308594 32.398438 29.628906 32.789063 C 29.117188 32.464844 27.175781 31.171875 23 26.996094 C 18.820313 22.820313 17.53125 20.878906 17.207031 20.367188 C 17.597656 19.6875 18.957031 17.320313 19.425781 16.425781 C 20.011719 15.3125 20.339844 14.050781 19.640625 12.957031 C 19.347656 12.492188 18.015625 10.464844 16.671875 8.429688 C 15.324219 6.394531 14.046875 4.464844 13.714844 4.003906 L 13.714844 4 C 13.28125 3.402344 12.605469 3.050781 11.839844 2.988281 Z M 11.65625 5.03125 C 11.929688 5.066406 12.09375 5.175781 12.09375 5.175781 C 12.253906 5.398438 13.65625 7.5 15 9.53125 C 16.34375 11.566406 17.714844 13.652344 17.953125 14.03125 C 17.992188 14.089844 18.046875 14.753906 17.65625 15.492188 L 17.65625 15.496094 C 17.214844 16.335938 15.15625 19.933594 15.15625 19.933594 L 14.871094 20.4375 L 15.164063 20.9375 C 15.164063 20.9375 16.699219 23.527344 21.582031 28.410156 C 26.46875 33.292969 29.058594 34.832031 29.058594 34.832031 L 29.558594 35.125 L 30.0625 34.839844 C 30.0625 34.839844 33.652344 32.785156 34.5 32.339844 C 35.238281 31.953125 35.902344 32.003906 35.980469 32.050781 C 36.671875 32.476563 44.355469 37.582031 44.828125 37.914063 C 44.84375 37.925781 45.261719 38.558594 44.652344 39.425781 L 44.648438 39.425781 C 44.28125 39.953125 43.078125 41.480469 41.824219 42.785156 C 41.195313 43.4375 40.550781 44.046875 40.003906 44.457031 C 39.457031 44.867188 38.96875 44.996094 39.046875 45 C 38.195313 44.972656 36.316406 44.953125 32.867188 43.332031 C 29.417969 41.714844 24.496094 38.476563 18.007813 31.984375 C 11.523438 25.5 8.285156 20.578125 6.664063 17.125 C 5.046875 13.675781 5.027344 11.796875 5 10.949219 C 5.003906 11.027344 5.132813 10.535156 5.542969 9.988281 C 5.953125 9.441406 6.558594 8.792969 7.210938 8.164063 C 8.519531 6.910156 10.042969 5.707031 10.570313 5.339844 L 10.570313 5.34375 C 11.003906 5.039063 11.382813 5 11.65625 5.03125 Z" stroke-linecap="round" />
                    </g>
                    </svg>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Support 24/7</h3>
                    <p class="mt-3">Contact us 24 hours a day</p>
                </div>
            </div>
        </div>
    </div>
</section>

{!! view_render_event('bagisto.shop.layout.features.after') !!}
