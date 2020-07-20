@extends('layouts.app')

@section('content')
    <div class="max-w-full md:max-w-6xl mx-auto my-3 md:px-8">
        <div
            class="relative block flex flex-col md:flex-row items-center"
        >
            <div
                class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-mr-4"
            >
                <div
                    class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden"
                >
                    <div
                        class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6"
                    >
                        <h1
                            class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide"
                        >
                            4 semaines
                        </h1>
                        <h2 class="text-sm text-gray-500 text-center pb-6">39,99 €</h2>

                        Stripe offers everything needed to run an online business
                        at scale. Get in touch for details.
                    </div>

                    <div class="flex flex-wrap mt-3 px-6">
                        <ul>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg
                                        class="w-6 h-6 align-middle"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                        ></path>
                                        <polyline
                                            points="22 4 12 14.01 9 11.01"
                                        ></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg ml-3"
                                >100% personnalisé</span
                                >
                            </li>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86" stroke="#ff5454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <rect x="7.22998" y="15.4853" width="12" height="1.5" rx="0.75" transform="rotate(-45 7.22998 15.4853)" fill="#ff5454"/>
                                        <rect x="8.29065" y="7" width="12" height="1.5" rx="0.75" transform="rotate(45 8.29065 7)" fill="#ff5454"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg ml-3"
                                >Bilan de fin de programme</span
                                >
                            </li>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86" stroke="#ff5454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <rect x="7.22998" y="15.4853" width="12" height="1.5" rx="0.75" transform="rotate(-45 7.22998 15.4853)" fill="#ff5454"/>
                                        <rect x="8.29065" y="7" width="12" height="1.5" rx="0.75" transform="rotate(45 8.29065 7)" fill="#ff5454"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg font- ml-3">Suivi personnalisé</span>
                            </li>
                        </ul>
                    </div>
                    <div class="block flex items-center p-8  uppercase">
                        <button class="mt-3 text-lg font-semibold bg-orange-500 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                            Choisir
                        </button>
                    </div>
                </div>
            </div>
            <div
                class="w-full max-w-md sm:w-2/3 lg:w-1/3 sm:my-5 my-8 relative z-10 bg-white rounded-lg shadow-lg"
            >
                <div
                    class="text-sm leading-none rounded-t-lg bg-gray-200 text-black font-semibold uppercase py-4 text-center tracking-wide"
                >
                    ⭐️ Le plus populaire ⭐️
                </div>
                <div
                    class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6"
                >
                    <h1
                        class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide"
                    >
                        8 semaines
                    </h1>
                    <h2 class="text-sm text-gray-500 text-center pb-6"><span class="text-3xl font-semibold">69,99 €</span></h2>

                    Stripe offers everything needed to run an online business at
                    scale. Get in touch for details.
                </div>
                <div class="flex pl-12 justify-start sm:justify-start mt-3">
                    <ul>
                        <li class="flex items-center">
                            <div
                                class=" rounded-full p-2 fill-current text-green-700"
                            >
                                <svg
                                    class="w-6 h-6 align-middle"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                    ></path>
                                    <polyline
                                        points="22 4 12 14.01 9 11.01"
                                    ></polyline>
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg ml-3"
                            >100% personnalisé</span
                            >
                        </li>
                        <li class="flex items-center">
                            <div
                                class=" rounded-full p-2 fill-current text-green-700"
                            >
                                <svg
                                    class="w-6 h-6 align-middle"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                    ></path>
                                    <polyline
                                        points="22 4 12 14.01 9 11.01"
                                    ></polyline>
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg ml-3"
                            >Bilan de fin de programme</span
                            >
                        </li>
                        <li class="flex items-center">
                            <div
                                class=" rounded-full p-2 fill-current text-green-700"
                            >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.709 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18457 2.99721 7.13633 4.39828 5.49707C5.79935 3.85782 7.69279 2.71538 9.79619 2.24015C11.8996 1.76491 14.1003 1.98234 16.07 2.86" stroke="#ff5454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="7.22998" y="15.4853" width="12" height="1.5" rx="0.75" transform="rotate(-45 7.22998 15.4853)" fill="#ff5454"/>
                                    <rect x="8.29065" y="7" width="12" height="1.5" rx="0.75" transform="rotate(45 8.29065 7)" fill="#ff5454"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 text-lg font- ml-3">Suivi personnalisé</span>
                        </li>
                    </ul>
                </div>

                <div class="block flex items-center p-8  uppercase">
                    <button
                        class="mt-3 text-lg font-semibold bg-orange-500 w-full text-white rounded-lgpx-6 py-3 block shadow-xl hover:bg-gray-700">
                        Choisir
                    </button>
                </div>
            </div>
            <div
                class="w-11/12 max-w-sm sm:w-3/5 lg:w-1/3 sm:my-5 my-8 relative z-0 rounded-lg shadow-lg md:-ml-4"
            >
                <div
                    class="bg-white text-black rounded-lg shadow-inner shadow-lg overflow-hidden"
                >
                    <div
                        class="block text-left text-sm sm:text-md max-w-sm mx-auto mt-2 text-black px-8 lg:px-6"
                    >
                        <h1
                            class="text-lg font-medium uppercase p-3 pb-0 text-center tracking-wide"
                        >
                            12 Semaines
                        </h1>
                        <h2 class="text-sm text-gray-500 text-center pb-6">99,99 €</h2>

                        Stripe offers everything needed to run an online business
                        at scale. Get in touch for details.
                    </div>
                    <div class="flex flex-wrap mt-3 px-6">
                        <ul>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg
                                        class="w-6 h-6 align-middle"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                        ></path>
                                        <polyline
                                            points="22 4 12 14.01 9 11.01"
                                        ></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg ml-3"
                                >100% personnalisé</span
                                >
                            </li>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg
                                        class="w-6 h-6 align-middle"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                        ></path>
                                        <polyline
                                            points="22 4 12 14.01 9 11.01"
                                        ></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg ml-3"
                                >Bilan de fin de programme</span
                                >
                            </li>
                            <li class="flex items-center">
                                <div
                                    class=" rounded-full p-2 fill-current text-green-700"
                                >
                                    <svg
                                        class="w-6 h-6 align-middle"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    >
                                        <path
                                            d="M22 11.08V12a10 10 0 1 1-5.93-9.14"
                                        ></path>
                                        <polyline
                                            points="22 4 12 14.01 9 11.01"
                                        ></polyline>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-lg font- ml-3">Suivi personnalisé</span>
                            </li>
                        </ul>
                    </div>

                    <div class="block flex items-center p-8  uppercase">
                        <button class="mt-3 text-lg font-semibold bg-orange-500 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:bg-gray-700">
                            Choisir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
