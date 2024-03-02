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
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/10/fyVuNYWj6twxC9ayKoXo2BlpNk6qrZ9vt5uFHznP.webp')"></div>
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
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/10/ANSWn1pVvvylqoGEvbv3Gy4wIsprpUTB6AvboR1Y.webp')"></div>
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
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/10/vqcYLw8Vb6C0n0d5HkRVImUZAniX972x8Lb65JmF.webp')"></div>
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
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/10/5JgSqGVZE22l7lFthh722JQPYGkX2aQc7SZe1Z1W.webp')"></div>
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
            <h3 class="text-4xl md:text-4xl font-semibold text-gray-900 mt-4">Testimonials from our clients</h3>
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
                        <p>Reeh al Madinah's perfume is truly remarkable! Its heavenly fragrance, combining oud with other exquisite notes, is absolutely mesmerising. Whenever I wear it, I'm showered with compliments. Thank you for creating the bloom, such an outstanding product! I wholeheartedly recommend it to anyone in search of a luxurious and long-lasting scent experience.</p>
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
                        <p>Reeh al Madinah's newest fragrance, Gentlemen, is outstanding! The combination of oud and aromatic notes creates an irresistible scent. It's my favourite choice for every occasion, consistently earning compliments. Thanks to Reeh al Madinah for delivering such an exceptional product! I highly recommend it to anyone seeking a luxurious fragrance.</p>
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
                <svg id='currency-pound_32' width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='32' height='32' stroke='none' fill='#000000' opacity='0'/>
                <g transform="matrix(1.33 0 0 1.33 16 16)" >
                <g style="" >
                <g transform="matrix(1 0 0 1 0 0)" >
                <path style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z" stroke-linecap="round" />
                </g>
                <g transform="matrix(1 0 0 1 -0.05 0.03)" >
                <path style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-11.95, -12.03)" d="M 17 18.5 C 15.412727283249524 19.227525256909523 13.587272716750476 19.227525256909523 12 18.5 C 10.340449551096983 17.927119919263426 8.513246463630368 18.10984022801009 7 19 C 8.092773833762589 18.621772481602964 8.870874726048337 17.649146366245777 9 16.5 L 9 9 C 9.010851608498086 7.199268941943254 10.223639699298563 5.627786324389689 11.962823201220129 5.160891424544975 C 13.702006703141691 4.6939965247002595 15.538766514066404 5.446808564609478 16.45 7.000000000000001 M 13.899999999999999 13 L 6.899999999999999 13" stroke-linecap="round" />
                </g>
                </g>
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
