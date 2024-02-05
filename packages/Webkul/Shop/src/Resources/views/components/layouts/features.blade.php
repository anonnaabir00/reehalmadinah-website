{!! view_render_event('bagisto.shop.layout.features.before') !!}

@if (request()->is('/'))
<section class="pt-10 md:pt-20 lg:pt-24 xl:pt-32">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
      <div class="md:pr-8 lg:pr-16 xl:pr-20 mb-6 md:mb-0">
        <div class="mb-6">
          <span class="text-xs md:text-sm font-semibold tracking-wider uppercase text-gray-600">Product Collection</span>
          <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-tight">Discover our products</h3>
        </div>
      </div>
      <div class="md:text-right">
        <div class="mb-6 md:mb-0">
          <a href="/shop" class="inline-block py-2 px-6 bg-blue-600 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-700">
            Shop All Products
            <!-- SVG Arrow Icon -->
          </a>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Category Item 1 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('http://127.0.0.1:8000/storage/theme/10/1.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white">Parent Category 1</a></h3>
            <p class="text-sm md:text-base">X Products</p>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-blue-600 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 1 -->

      <!-- Category Item 2 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('http://127.0.0.1:8000/storage/theme/10/1.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white">Parent Category 2</a></h3>
            <p class="text-sm md:text-base">Y Products</p>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-blue-600 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 2 -->

      <!-- Category Item 3 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('http://127.0.0.1:8000/storage/theme/10/1.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="text-white">Parent Category 3</a></h3>
            <p class="text-sm md:text-base">Z Products</p>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-blue-600 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 3 -->

      <!-- Category Item 4 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-96 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('http://127.0.0.1:8000/storage/theme/10/1.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="#" class="hover:text-blue-500">Parent Category 4</a></h3>
            <p class="text-sm md:text-base">W Products</p>
            <a href="#" class="inline-block mt-4 py-1 px-4 bg-blue-600 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-700">View Now</a>
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
                        <img src="/img/testimonial/testimonial-quote.png" alt="quote" class="tp-testimonial-shape-3-quote">
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
                                <img src="/img/avatar/user1.jpg" alt="user" class="rounded-full w-12 h-12">
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
                        <img src="/img/testimonial/testimonial-quote.png" alt="quote" class="tp-testimonial-shape-3-quote">
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
                                <img src="/img/avatar/user2.jpg" alt="user" class="rounded-full w-12 h-12">
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 7.629A3 3 0 0 0 9.017 9.43c-.023.212-.002.425.028.636l.506 3.541a4.5 4.5 0 0 1-.43 2.65L9 16.5l1.539-.513a2.25 2.25 0 0 1 1.422 0l.655.218a2.25 2.25 0 0 0 1.718-.122L15 15.75M8.25 12H12m9 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Return & Refund</h3>
                    <p class="mt-4">Money back guarantee</p>
                </div>
            </div>
            <div class="tp-feature-item-2 d-flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                        <svg-discount class="fill-current"/>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Member Discount</h3>
                    <p>On every order over $140.00</p>
                </div>
            </div>
            <div class="tp-feature-item-2 d-flex items-start border border-gray-200 p-8">
                <div class="tp-feature-icon-2 mr-4">
                    <span>
                        <svg-support class="fill-current"/>
                    </span>
                </div>
                <div class="tp-feature-content-2">
                    <h3 class="tp-feature-title-2">Support 24/7</h3>
                    <p>Contact us 24 hours a day</p>
                </div>
            </div>
        </div>
    </div>
</section>

{!! view_render_event('bagisto.shop.layout.features.after') !!}
