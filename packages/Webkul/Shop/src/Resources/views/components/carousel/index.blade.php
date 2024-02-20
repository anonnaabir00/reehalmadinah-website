@props(['options'])

<v-carousel>
    <div class="shimmer w-full aspect-[2.743/1]">
    </div>
</v-carousel>

<section class="pt-10">
  <div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-1 items-center">
      <div class="md:pr-8 lg:pr-16 xl:pr-20 mb-4 md:mb-0">
        <div class="mb-2 text-center">
          <span class="text-xs md:text-sm tracking-wider text-gray-600">For Men & Women</span>
          <h3 class="mt-4 text-2xl md:text-3xl lg:text-4xl font-bold leading-tight">Reeh al Madinah Exclusive</h3>
        </div>
      </div>
      
    </div>
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-6">
      <!-- Category Item 1 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/oWkAzSwmpvOgaQybv4knBoLbd6gX8IsXRZK2OjdC.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/perfumes/mens-perfume" class="text-white hover:text-white">Mens's Perfume</a></h3>
            <a href="/perfumes/mens-perfume" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 1 -->

      <!-- Category Item 2 -->
      <div class="col-span-1 md:col-span-1 lg:col-span-1">
        <div class="group relative overflow-hidden rounded-lg">
          <div class="bg-cover bg-center h-48 md:h-96 transition duration-300 transform group-hover:scale-105" style="background-image: url('https://reehalmadinah.com/storage/theme/5/kDUcZwsPs9gT2BTyAM1eyCwrJKkSQVWrdwyQb305.webp')"></div>
          <div class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black bg-opacity-50 text-white">
            <h3 class="text-lg md:text-xl font-semibold"><a href="/perfumes/womens-perfume" class="text-white hover:text-white">Women's Perfume</a></h3>
            <a href="/perfumes/womens-perfume" class="inline-block mt-4 py-1 px-4 bg-yellow-600 text-white font-semibold transition duration-300 hover:bg-yellow-700">View Now</a>
          </div>
        </div>
      </div>
      <!-- End Category Item 2 -->

</section>

@pushOnce('scripts')
    <script type="text/x-template" id="v-carousel-template">
        <div class="w-full relative m-auto">
            <a
                v-for="(image, index) in images"
                class="fade"
                :href="image.link || '#'"
                ref="slides"
                :key="index"
                aria-label="Image Slide "
            >
                <x-shop::media.images.lazy
                    class="w-full aspect-[2.743/1]"
                    ::src="image.image"
                    ::srcset="image.image + ' 1920w, ' + image.image.replace('storage', 'cache/large') + ' 1280w,' + image.image.replace('storage', 'cache/medium') + ' 1024w, ' + image.image.replace('storage', 'cache/small') + ' 525w'"
                    alt=""
                ></x-shop::media.images.lazy>
            </a>

            <span
                class="icon-arrow-left text-[24px] font-bold text-white w-auto -mt-[22px] p-[12px] absolute top-1/2 left-[10px] bg-[rgba(0,0,0,0.8)] transition-all opacity-30 rounded-full hover:opacity-100 cursor-pointer"
                v-if="images?.length >= 2"
                @click="navigate(currentIndex -= 1)"
            >
            </span>

            <span
                class="icon-arrow-right text-[24px] font-bold text-white w-auto -mt-[22px] p-[12px] absolute top-1/2 right-[10px] bg-[rgba(0,0,0,0.8)] transition-all opacity-30 rounded-full hover:opacity-100 cursor-pointer"
                v-if="images?.length >= 2"
                @click="navigate(currentIndex += 1)"
            >
            </span>
        </div>
    </script>

    <script type="module">
        app.component("v-carousel", {
            template: '#v-carousel-template',

            data() {
                return {
                    currentIndex: 1,

                    images: @json($options['images'] ?? []),
                };
            },

            mounted() {
                this.navigate(this.currentIndex);

                this.play();
            },

            methods: {
                navigate(index) {
                    if (index > this.images.length) {
                        this.currentIndex = 1;
                    }

                    if (index < 1) {
                        this.currentIndex = this.images.length;
                    }

                    let slides = this.$refs.slides;

                    for (let i = 0; i < slides.length; i++) {
                        if (i == this.currentIndex - 1) {
                            continue;
                        }
                        
                        slides[i].style.display = 'none';
                    }

                    slides[this.currentIndex - 1].style.display = 'block';
                },

                play() {
                    let self = this;

                    setInterval(() => {
                        this.navigate(this.currentIndex += 1);
                    }, 5000);
                }
            }
        });
    </script>

    <style>
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
@endpushOnce