{!! view_render_event('bagisto.shop.checkout.cart.summary.before') !!}

<v-cart-summary
    ref="vCartSummary"
    :cart="cart"
    :is-cart-loading="isCartLoading"
>
</v-cart-summary>

{!! view_render_event('bagisto.shop.checkout.cart.summary.after') !!}

@pushOnce('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/x-template" id="v-cart-summary-template">
        <template v-if="isCartLoading">
            <!-- onepage Summary Shimmer Effect -->
            <x-shop::shimmer.checkout.onepage.cart-summary/>
        </template>

        <template v-else>
            <div class="sticky top-[30px] h-max w-[442px] max-w-full pl-[30px] max-lg:w-auto max-lg:max-w-[442px] max-lg:pl-0 ">
                <h2 class="text-[26px] font-medium max-sm:text-[20px]">
                    @lang('shop::app.checkout.onepage.summary.cart-summary')
                </h2>
                
                <div class="grid mt-[40px] border-b-[1px] border-[#E9E9E9] max-sm:mt-[20px]">
                    <div 
                        class="flex gap-x-[15px] pb-[20px]"
                        v-for="item in cart.items"
                    >
                        <img
                            class="max-w-[90px] max-h-[90px] w-[90px] h-[90px] rounded-md"
                            :src="item.base_image.small_image_url"
                            :alt="item.name"
                            width="110"
                            height="110"
                        />

                        <div>
                            <p 
                                class="text-[16px] text-navyBlue max-sm:text-[14px] max-sm:font-medium" 
                                v-text="item.name"
                            >
                            </p>

                            <p class="mt-[10px] text-[18px] font-medium max-sm:text-[14px] max-sm:font-normal">
                                @{{ item.formatted_price }} X @{{ item.quantity }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid gap-[15px] mt-[25px] mb-[30px]">
                    <div class="flex text-right justify-between">
                        <p class="text-[16px] max-sm:text-[14px] max-sm:font-normal">
                            @lang('shop::app.checkout.onepage.summary.sub-total')
                        </p>

                        <p 
                            class="text-[16px] font-medium max-sm:text-[14px]"
                            v-text="cart.base_sub_total"
                        >
                        </p>
                    </div>

                    <div 
                        class="flex text-right justify-between"
                        v-for="(amount, index) in cart.base_tax_amounts"
                        v-if="parseFloat(cart.base_tax_total)"
                    >
                        <p class="text-[16px] max-sm:text-[14px] max-sm:font-normal">
                            @lang('shop::app.checkout.onepage.summary.tax') (@{{ index }})%
                        </p>

                        <p 
                            class="text-[16px] font-medium max-sm:text-[14px]"
                            v-text="amount"
                        >
                        </p>
                    </div>

                    <div 
                        class="flex text-right justify-between"
                        v-if="cart.selected_shipping_rate"
                    >
                        <p class="text-[16px]">
                            @lang('shop::app.checkout.onepage.summary.delivery-charges')
                        </p>

                        <p 
                            class="text-[16px] font-medium"
                            v-text="cart.selected_shipping_rate"
                        >
                        </p>
                    </div>

                    <div 
                        class="flex text-right justify-between"
                        v-if="cart.base_discount_amount && parseFloat(cart.base_discount_amount) > 0"
                    >
                        <p class="text-[16px]">
                            @lang('shop::app.checkout.onepage.summary.discount-amount')
                        </p>

                        <p 
                            class="text-[16px] font-medium"
                            v-text="cart.formatted_base_discount_amount"
                        >
                        </p>
                    </div>

                    @include('shop::checkout.onepage.coupon')

                    <div class="flex text-right justify-between">
                        <p class="text-[18px] font-semibold">
                            @lang('shop::app.checkout.onepage.summary.grand-total')
                        </p>

                        <p 
                            class="text-[18px] font-semibold"
                            id="grand_total"
                            v-text="cart.base_grand_total"
                        >
                        </p>
                    </div>
                </div>

                <template v-if="canPlaceOrder">
                    <div v-if="selectedPaymentMethod?.method == 'paypal_smart_button'">
                        <v-paypal-smart-button></v-paypal-smart-button>
                    </div>

                    <div
                        class="flex justify-end"
                        v-else
                    >
                        <button
                            v-if="! isLoading"
                            class="block w-max py-[11px] px-[43px] bg-navyBlue text-white text-base font-medium rounded-[18px] text-center cursor-pointer max-sm:text-[14px] max-sm:px-[25px] max-sm:mb-[40px]"
                            @click="showAlert"
                        >
                            @lang('shop::app.checkout.onepage.summary.place-order')    
                        </button>

                        <button
                            v-else
                            class="flex gap-[10px] items-center w-max py-[11px] px-[32px] bg-navyBlue text-white text-base font-medium rounded-[18px] text-center max-sm:text-[14px] max-sm:px-[25px] max-sm:mb-[40px]"
                        >
                            <!-- Spinner -->
                            <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle
                                    class="opacity-25"
                                    cx="12"
                                    cy="12"
                                    r="10"
                                    stroke="currentColor"
                                    stroke-width="4"
                                >
                                </circle>

                                <path
                                    class="opacity-75"
                                    fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                >
                                </path>
                            </svg>

                            @lang('shop::app.checkout.onepage.summary.processing')
                        </button>

                       <!--<button
                    class="block w-max py-[11px] px-[43px] bg-navyBlue text-white text-base font-medium rounded-[18px] text-center cursor-pointer max-sm:text-[14px] max-sm:px-[25px] max-sm:mb-[40px]"
                    @click="showAlert"
                    >
                    Pay with Stripe
                    </button>
                    -->

                    </div>
                </template>
            </div>
        </template>
    </script>

    <script type="module">
        app.component('v-cart-summary', {
            template: '#v-cart-summary-template',
            
            props: ['cart', 'isCartLoading'],

            data() {
                return {
                    canPlaceOrder: false,

                    selectedPaymentMethod: null,

                    isLoading: false,
                }
            },

            methods: {
                placeOrder() {
                    this.isLoading = true;

                    this.$axios.post('{{ route('shop.checkout.onepage.orders.store') }}')
                        .then(response => {
                            if (response.data.data.redirect) {
                                window.location.href = response.data.data.redirect_url;
                            } else {
                                window.location.href = '{{ route('shop.checkout.onepage.success') }}';
                            }
                        })
                        .catch(error => console.log(error));
                },
                getValue(){
                    // const grandTotal = parseFloat(document.getElementById('grand_total').innerText.replace('$', ''));
                    console.log(Number(this.cart.grand_total));
                    const items = JSON.parse(JSON.stringify(this.cart.items)); // Convert to JSON string and then parse back to object
                    const itemsString = items.map(item => item.name).join(', ');
                    console.log(namesString);
                },
                showAlert() {
                Swal.fire({
                    title: "Loading Payment Page...",
                    text: "Please wait while we loading the payment page",
                    icon: "info",
                    showCancelButton: false,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    onBeforeOpen: async () => {
                        Swal.showLoading();
                        try {
                            // Get the value of grand_total element
                            const grandTotal = Number(this.cart.grand_total);
                            const items = JSON.parse(JSON.stringify(this.cart.items)); // Convert to JSON string and then parse back to object
                            const itemsString = items.map(item => item.name).join(', ');

                            // Step 1: Create a new product on Stripe
                            const productResponse = await fetch('https://api.stripe.com/v1/products', {
                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer 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',
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: new URLSearchParams({
                                    'name': itemsString,
                                    // Add any other relevant product data here
                                }),
                            });

                            if (!productResponse.ok) {
                                throw new Error('Failed to create product');
                            }

                            const productData = await productResponse.json();

                            // Step 2: Create a checkout session
                            const sessionResponse = await fetch('https://api.stripe.com/v1/checkout/sessions', {
                                method: 'POST',
                                headers: {
                                    'Authorization': 'Bearer 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',
                                    'Content-Type': 'application/x-www-form-urlencoded',
                                },
                                body: new URLSearchParams({
                                    'line_items[0][price_data][product]': productData.id,
                                    'line_items[0][price_data][currency]': 'gbp',
                                    'line_items[0][price_data][unit_amount]': grandTotal * 100,
                                    'line_items[0][quantity]': 1,
                                    'mode': 'payment',
                                    'success_url': '{{ route('shop.checkout.onepage.success') }}',
                                    'cancel_url': 'https://example.com/failure',
                                }),
                            });

                            if (!sessionResponse.ok) {
                                throw new Error('Failed to create checkout session');
                            }

                            const sessionData = await sessionResponse.json();

                            this.$axios.post('{{ route('shop.checkout.onepage.orders.store') }}')
                            .then(response => {
                                window.location.href = sessionData.url;
                            })

                            // Step 3: Redirect customer to sessionData.url to complete the payment
                        } catch (error) {
                            Swal.fire({
                                title: "Error!",
                                text: "Failed to create checkout session.",
                                icon: "error",
                            });
                            console.error('Error:', error);
                        }
                    },
                });
            }

            //     showAlert() {
            //     Swal.fire({
            //         title: "Loading Payment Page...",
            //         text: "Please wait while we loading the payment page",
            //         icon: "info",
            //         showCancelButton: false,
            //         showConfirmButton: false,
            //         allowOutsideClick: false,
            //         allowEscapeKey: false,
            //         allowEnterKey: false,
            //         onBeforeOpen: async () => {
            //             Swal.showLoading();
            //             try {
            //                 const grandTotal = parseFloat(document.getElementById('grand_total').innerText.replace('$', ''));
            //                 // Step 1: Create a new product on Stripe
            //                 const productResponse = await fetch('https://api.stripe.com/v1/products', {
            //                     method: 'POST',
            //                     headers: {
            //                         'Authorization': 'Bearer sk_test_51Oc778GNOVYK3qTpGHkYW3JtKJgdv8BiOfegmYXQVJZiuFDJcKKFXkBhXEATl0c8K8mwoBC6YADm4WD30Q8Rxx5c00uwSOQ7M5',
            //                         'Content-Type': 'application/x-www-form-urlencoded',
            //                     },
            //                     body: new URLSearchParams({
            //                         'name': 'Your Product Name',
            //                         // Add any other relevant product data here
            //                     }),
            //                 });

            //                 if (!productResponse.ok) {
            //                     throw new Error('Failed to create product');
            //                 }

            //                 const productData = await productResponse.json();

            //                 // Step 2: Create a checkout session
            //                 const sessionResponse = await fetch('https://api.stripe.com/v1/checkout/sessions', {
            //                     method: 'POST',
            //                     headers: {
            //                         'Authorization': 'Bearer sk_test_51Oc778GNOVYK3qTpGHkYW3JtKJgdv8BiOfegmYXQVJZiuFDJcKKFXkBhXEATl0c8K8mwoBC6YADm4WD30Q8Rxx5c00uwSOQ7M5',
            //                         'Content-Type': 'application/x-www-form-urlencoded',
            //                     },
            //                     body: new URLSearchParams({
            //                         'line_items[0][price_data][product]': productData.id,
            //                         'line_items[0][price_data][unit_amount]': grandTotal * 100,
            //                         'line_items[0][quantity]': 1,
            //                         'mode': 'payment',
            //                         'success_url': 'https://example.com/success',
            //                         'cancel_url': 'https://example.com/failure',
            //                     }),
            //                 });

            //                 if (!sessionResponse.ok) {
            //                     throw new Error('Failed to create checkout session');
            //                 }

            //                 const sessionData = await sessionResponse.json();

            //                 // Step 3: Redirect customer to sessionData.url to complete the payment
            //                 window.location.href = sessionData.url;
            //                 // this.$axios.post('{{ route('shop.checkout.onepage.orders.store') }}')
            //                 // .then(response => {
            //                 //     window.location.href = sessionData.url;
            //                 // })
            //             } catch (error) {
            //                 Swal.fire({
            //                     title: "Error!",
            //                     text: "Failed to load payment page",
            //                     icon: "error",
            //                 });
            //                 console.error('Error:', error);
            //             }
            //         },
            //     });
            // }
            },
        });
    </script>
@endPushOnce
