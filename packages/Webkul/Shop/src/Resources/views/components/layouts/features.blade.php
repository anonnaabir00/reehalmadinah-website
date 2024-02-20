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
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
      <!-- Category Item 1 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/8/xbQo0tfRx1i79F8Yog9dGURA6LRU786YGe2bX9lC.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/collection/oud-collection" class="text-white hover:text-white">OUD Collection</a></h3>
            <a href="/collection/oud-collection" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 1 -->

      <!-- Category Item 2 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/8/PKoClGzbwtYMEXhNr4RQ4Gj4tbbMhOV0mOtfVP1h.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/collection/limited-special-edition" class="text-white hover:text-white">Limited Edition</a></h3>
            <a href="/collection/limited-special-edition" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 2 -->

      <!-- Category Item 3 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/8/qpNwbcmXDqt9WAYiwOuojaSJXyeXlKl72eGmkbk8.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/perfumes/best-seller-perfume" class="text-white hover:text-white">Best Seller</a></h3>
            <a href="/perfumes/best-seller-perfume" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 3 -->

      <!-- Category Item 4 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/8/DdWWPRtXxAltiU12DxIUIuLAkvIvMsVQzVYXw47Z.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/perfumes/new-arrival" class="text-white hover:text-white">New Arrival</a></h3>
            <a href="/perfumes/new-arrival" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
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
                        <p>I'm a long-time Perfume customer, and their latest scent, Reeh al Madinah, is phenomenal! The blend of oud and other notes creates a captivating aroma. It's my go-to for any occasion, and I always get compliments. Thanks, Perfume, for this exceptional product! Highly recommend it for anyone seeking a luxurious, long-lasting fragrance.</p>
                    </div>
                    <div class="tp-testimonial-user-wrapper-3 flex items-center mt-4 md:mt-6">
                        <div class="tp-testimonial-user-3 flex items-center">
                            <div class="tp-testimonial-avater-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            </div>
                            <div class="tp-testimonial-user-3-info">
                                <h3 class="tp-testimonial-user-3-title">Demi Daniels / </h3>
                                <span class="tp-testimonial-3-designation">Loyal Customer</span>
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
                        <p>Perfume's Reeh al Madinah is a game-changer! Its divine scent, blending oud and other notes, is simply captivating. I'm constantly showered with compliments when I wear it. Thanks, Perfume, for this exceptional product! I highly recommend it to anyone in search of a luxurious, long-lasting fragrance.</p>
                    </div>
                    <div class="tp-testimonial-user-wrapper-3 flex items-center mt-4 md:mt-6">
                        <div class="tp-testimonial-user-3 flex items-center">
                            <div class="tp-testimonial-avater-3 mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                            </svg>
                            </div>
                            <div class="tp-testimonial-user-3-info">
                                <h3 class="tp-testimonial-user-3-title">Tyler Clarke / </h3>
                                <span class="tp-testimonial-3-designation">Loyal Customer</span>
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
                <svg id='Mobile_Payment_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                <g transform="matrix(0.44 0 0 0.44 16 16)" >
                <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-40, -40)" d="M 25 8 C 22.250484 8 20 10.250484 20 13 L 20 67 C 20 69.749516 22.250484 72 25 72 L 55 72 C 57.749516 72 60 69.749516 60 67 L 60 13 C 60 10.250484 57.749516 8 55 8 L 25 8 z M 25 10 L 55 10 C 56.668484 10 58 11.331516 58 13 L 58 16 L 22 16 L 22 13 C 22 11.331516 23.331516 10 25 10 z M 31.947266 12 C 31.394981250169206 12 30.947266 12.447715250169207 30.947266 13 C 30.947266 13.552284749830793 31.394981250169206 14 31.947266 14 C 32.499550749830796 14 32.947266 13.552284749830793 32.947266 13 C 32.947266 12.447715250169207 32.499550749830796 12 31.947266 12 z M 36 12 C 35.63936408342243 11.994899710454515 35.303918635428396 12.184375296169332 35.122112278513484 12.495872849714331 C 34.94030592159857 12.80737040325933 34.94030592159857 13.192629596740671 35.122112278513484 13.50412715028567 C 35.303918635428396 13.815624703830668 35.63936408342243 14.005100289545485 36 14 L 44 14 C 44.36063591657757 14.005100289545485 44.696081364571604 13.815624703830668 44.877887721486516 13.504127150285669 C 45.05969407840143 13.192629596740671 45.05969407840143 12.80737040325933 44.877887721486516 12.495872849714331 C 44.696081364571604 12.184375296169332 44.36063591657757 11.994899710454515 44 12 L 36 12 z M 22 18 L 58 18 L 58 60 L 22 60 L 22 18 z M 26 20 C 25.447715250169207 20 25 20.447715250169207 25 21 C 25 21.552284749830793 25.447715250169207 22 26 22 C 26.552284749830793 22 27 21.552284749830793 27 21 C 27 20.447715250169207 26.552284749830793 20 26 20 z M 26 24 C 25.447715250169207 24 25 24.447715250169207 25 25 C 25 25.552284749830793 25.447715250169207 26 26 26 C 26.552284749830793 26 27 25.552284749830793 27 25 C 27 24.447715250169207 26.552284749830793 24 26 24 z M 39.082031 27.574219 L 39.082031 29.494141 C 35.326031 29.842141 33.044922 31.972547 33.044922 35.185547 C 33.044922 37.899547 34.74175 39.763641 37.84375 40.556641 L 39.082031 40.876953 L 39.082031 47.220703 C 37.009031 46.983703 35.672203 45.828828 35.533203 44.173828 L 32.585938 44.173828 C 32.599938 47.401828 35.103031 49.585609 39.082031 49.849609 L 39.082031 51.65625 L 40.988281 51.65625 L 40.988281 49.835938 C 45.064281 49.487937 47.416016 47.358219 47.416016 43.949219 C 47.416016 41.069219 45.77325 39.304078 42.28125 38.455078 L 40.988281 38.162109 L 40.988281 32.166016 C 42.824281 32.389016 44.076813 33.584234 44.132812 35.115234 L 47.039062 35.115234 C 46.955063 32.012234 44.591281 29.814141 40.988281 29.494141 L 40.988281 27.574219 L 39.082031 27.574219 z M 26 28 C 25.447715250169207 28 25 28.447715250169207 25 29 C 25 29.552284749830793 25.447715250169207 30 26 30 C 26.552284749830793 30 27 29.552284749830793 27 29 C 27 28.447715250169207 26.552284749830793 28 26 28 z M 26 32 C 25.447715250169207 32 25 32.4477152501692 25 33 C 25 33.5522847498308 25.447715250169207 34 26 34 C 26.552284749830793 34 27 33.5522847498308 27 33 C 27 32.4477152501692 26.552284749830793 32 26 32 z M 39.082031 32.152344 L 39.082031 37.759766 C 37.078031 37.355766 36.021484 36.368547 36.021484 34.935547 C 36.021484 33.418547 37.301031 32.249344 39.082031 32.152344 z M 26 36 C 25.447715250169207 36 25 36.4477152501692 25 37 C 25 37.5522847498308 25.447715250169207 38 26 38 C 26.552284749830793 38 27 37.5522847498308 27 37 C 27 36.4477152501692 26.552284749830793 36 26 36 z M 26 40 C 25.447715250169207 40 25 40.4477152501692 25 41 C 25 41.5522847498308 25.447715250169207 42 26 42 C 26.552284749830793 42 27 41.5522847498308 27 41 C 27 40.4477152501692 26.552284749830793 40 26 40 z M 40.988281 41.238281 C 43.353281 41.711281 44.451172 42.670484 44.451172 44.271484 C 44.451172 46.038484 43.186281 47.122047 40.988281 47.248047 L 40.988281 41.238281 z M 26 44 C 25.447715250169207 44 25 44.4477152501692 25 45 C 25 45.5522847498308 25.447715250169207 46 26 46 C 26.552284749830793 46 27 45.5522847498308 27 45 C 27 44.4477152501692 26.552284749830793 44 26 44 z M 26 48 C 25.447715250169207 48 25 48.4477152501692 25 49 C 25 49.5522847498308 25.447715250169207 50 26 50 C 26.552284749830793 50 27 49.5522847498308 27 49 C 27 48.4477152501692 26.552284749830793 48 26 48 z M 26 52 C 25.447715250169207 52 25 52.4477152501692 25 53 C 25 53.5522847498308 25.447715250169207 54 26 54 C 26.552284749830793 54 27 53.5522847498308 27 53 C 27 52.4477152501692 26.552284749830793 52 26 52 z M 26 56 C 25.447715250169207 56 25 56.4477152501692 25 57 C 25 57.5522847498308 25.447715250169207 58 26 58 C 26.552284749830793 58 27 57.5522847498308 27 57 C 27 56.4477152501692 26.552284749830793 56 26 56 z M 22 62 L 58 62 L 58 67 C 58 68.668484 56.668484 70 55 70 L 25 70 C 23.331516 70 22 68.668484 22 67 L 22 62 z M 40 64 C 38.89543050033841 64 38 64.8954305003384 38 66 C 38 67.1045694996616 38.89543050033841 68 40 68 C 41.10456949966159 68 42 67.1045694996616 42 66 C 42 64.8954305003384 41.10456949966159 64 40 64 z" stroke-linecap="round" />
                </g>
                </svg>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Easy Payment</h3>
                    <p class="mt-3">Pay within a click</p>
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
