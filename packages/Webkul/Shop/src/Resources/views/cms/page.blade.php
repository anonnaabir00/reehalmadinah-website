{{-- SEO Meta Content --}}
@push('meta')
    <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" />
@endPush

{{-- Page Layout --}}
<x-shop::layouts>
    {{-- Page Title --}}
    <x-slot:title>
        {{ $page->meta_title }}
    </x-slot>

    {{-- Page Content --}}
    <div class="w-full">
    <div class="p-32 text-center font-bold text-4xl text-white bg-no-repeat bg-center bg-cover" style="background-image: url('https://amardeen.s3.ap-southeast-1.amazonaws.com/cms_header.png');">
        {{ $page->page_title }}
    </div>
    <div class="p-12 container mt-[30px] px-[60px] max-lg:px-[30px] shadow-xl">
    @if(request()->is('page/contact-us'))
                <div class="grid sm:grid-cols-1 md:grid-cols-2">
                    <div class="bg-gray-200 p-6">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-left text-gray-900 dark:text-white">Contact Details</h2>
                            <div class="mt-12">
                                <p class="font-semibold text-left text-gray-500 dark:text-gray-400 sm:text-xl">Our Hours</p>
                                <p class="mt-4 font-light text-left text-gray-500 dark:text-gray-400 sm:text-xl">24/7</p>
                            </div>

                            <div class="mt-8">
                                <p class="font-semibold text-left text-gray-500 dark:text-gray-400 sm:text-xl">Location</p>
                                <p class="mt-4 font-light text-left text-gray-500 dark:text-gray-400 sm:text-xl">New gold souk extension , Corniche Deira, United Arab Emirates</p>
                            </div>

                            <div class="mt-8">
                                <p class="font-semibold text-left text-gray-500 dark:text-gray-400 sm:text-xl">Contact Us</p>
                                <p class="mt-4 font-light text-left text-gray-500 dark:text-gray-400 sm:text-xl">Phone: +4407487559272</p>
                                <p class="mt-4 font-light text-left text-gray-500 dark:text-gray-400 sm:text-xl">Email: admin@reehalmadinah.com</p>
                            </div>
                        </div>
                        </section>
                    </div>
                    <div class="bg-yellow-600 p-6">
                        <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-left text-gray-900 dark:text-white">Contact Us</h2>
                            <p class="mb-8 lg:mb-16 font-light text-left text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                            <form action="#" class="space-y-8">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                                </div>
                                <div>
                                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                                </div>
                                <button id="submitButton" type="button" onclick="sendMessage()" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                            </form>
                        </div>
                        </section>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    // Function to handle sending message
                    function sendMessage() {
                        // Display a SweetAlert2 message
                        Swal.fire({
                            title: 'Message Sent',
                            text: 'Your message has been sent successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        
                        // Here you can add additional logic to send the form data to your server
                    }
                </script>

    @else
        {{-- Default content for other pages --}}
        {!! $page->html_content !!}
    @endif
    </div>
    </div>
</x-shop::layouts>