{!! view_render_event('bagisto.shop.layout.footer.before') !!}

{{--
    The category repository is injected directly here because there is no way
    to retrieve it from the view composer, as this is an anonymous component.
--}}
@inject('themeCustomizationRepository', 'Webkul\Shop\Repositories\ThemeCustomizationRepository')

{{--
    This code needs to be refactored to reduce the amount of PHP in the Blade
    template as much as possible.
--}}
@php
    $customization = $themeCustomizationRepository->findOneWhere([
        'type'       => 'footer_links',
        'status'     => 1,
        'channel_id' => core()->getCurrentChannel()->id,
    ]); 
@endphp

<footer class="tp-footer-area bg-white" :class="{ 'tp-footer-style-2 tp-footer-style-primary tp-footer-style-6': primary_style, 'tp-footer-style-2': style_2, 'tp-footer-style-2 tp-footer-style-3': style_3 }" :data-bg-color="`${style_2 ? 'footer-bg-white' : style_3 ? 'footer-bg-white' : 'footer-bg-grey'}`">
    <div class="tp-footer-top pt-14 md:pt-28 pb-10 md:pb-16 lg:pb-24">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-16">
                <div class="tp-footer-widget footer-col-1">
                    <div class="tp-footer-widget-content">
                        <div class="tp-footer-logo">
                            <img src="/img/logo/logo.svg" alt="logo">
                        </div>
                        <p class="tp-footer-desc">Luxary Perfume Shop</p>
                        <div class="tp-footer-social">
                            <!-- social links -->
                            <footer-social-links/>
                            <!-- social links -->
                        </div>
                    </div>
                </div>
                <!-- Repeat the above structure for each column -->
                <div class="tp-footer-widget footer-col-2">
                    <h4 class="tp-footer-widget-title">My Account</h4>
                    <div class="tp-footer-widget-content">
                        <ul>
                            <li><a href="#">Track Orders</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tp-footer-widget footer-col-3">
                    <h4 class="tp-footer-widget-title">Information</h4>
                    <div class="tp-footer-widget-content">
                        <ul>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tp-footer-widget footer-col-4">
                    <h4 class="tp-footer-widget-title">Talk To Us</h4>
                    <div class="tp-footer-widget-content">
                        <div class="tp-footer-talk mb-4">
                            <span>Got Questions? Call us</span>
                            <h4><a href="tel:670-413-90-762">+670 413 90 762</a></h4>
                        </div>
                        <!-- footer contact start -->
                        <footer-contact/>
                        <!-- footer contact end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom area start -->
    <div class="tp-footer-bottom bg-white py-4 md:py-6">
        <div class="container mx-auto">
            <div class="tp-footer-bottom-wrapper">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center">
                    <div class="tp-footer-copyright col-span-2 md:col-span-1">
                        <p>@lang('shop::app.components.layouts.footer.footer-text')</p>
                    </div>
                    <div class="tp-footer-payment col-span-2 md:col-span-1 text-center md:text-right">
                        <p>
                            <img src="/img/footer/footer-pay.png" alt="pay-img" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bottom area end -->
</footer>

<!--
<footer class="mt-[36px] bg-lightOrange  max-sm:mt-[30px]">
    @if ($customization)
        <div class="flex gap-x-[25px] gap-y-[30px] justify-between p-[60px] max-1060:flex-wrap max-1060:flex-col-reverse max-sm:px-[15px]">
            <div class="flex gap-[85px] items-start flex-wrap max-1180:gap-[25px] max-1060:justify-between">
                @if ($customization->options)
                    @foreach ($customization->options as $footerLinkSection)
                        <ul class="grid gap-[20px] text-[14px]">
                            @php
                                usort($footerLinkSection, function ($a, $b) {
                                    return $a['sort_order'] - $b['sort_order'];
                                });
                            @endphp
                            
                            @foreach ($footerLinkSection as $link)
                                <li>
                                    <a href="{{ $link['url'] }}">
                                        {{ $link['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>    
                    @endforeach
                @endif
            </div>
            
            {{-- News Letter subscription --}}
            @if(core()->getConfigData('customer.settings.newsletter.subscription'))
                <div class="grid gap-[10px]">
                    <p class="max-w-[288px] leading-[45px] text-[30px] italic text-navyBlue">
                        @lang('shop::app.components.layouts.footer.newsletter-text')
                    </p>

                    <p class="text-[12px]">
                        @lang('shop::app.components.layouts.footer.subscribe-stay-touch')
                    </p>

                    <x-shop::form
                        :action="route('shop.subscription.store')"
                        class="mt-[10px] rounded max-sm:mt-[30px]"
                    >
                        <label for="organic-search" class="sr-only">Search</label>

                        <div class="relative w-full">

                        <x-shop::form.control-group.control
                            type="email"
                            name="email"
                            class=" blockw-[420px] max-w-full px-[20px] py-[20px] pr-[110px] bg-[#F1EADF] border-[2px] border-[#E9DECC] rounded-[12px] text-xs font-medium max-1060:w-full"
                            rules="required|email"
                            label="Email"
                            placeholder="email@example.com"
                        >
                        </x-shop::form.control-group.control>

                        <x-shop::form.control-group.error
                            control-name="email"
                        >
                        </x-shop::form.control-group.error>

                            <button
                                type="submit"
                                class=" absolute flex items-center top-[8px] w-max px-[26px] py-[13px] bg-white rounded-[12px] text-[12px] font-medium rtl:left-[8px] ltr:right-[8px]"
                            >
                                @lang('shop::app.components.layouts.footer.subscribe')
                            </button>
                        </div>
                    </x-shop::form>
                </div>
            @endif
        </div>
    @endif

    

</footer>
-->

{!! view_render_event('bagisto.shop.layout.footer.after') !!}
