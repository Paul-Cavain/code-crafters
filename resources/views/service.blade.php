@extends('layouts.app')
@section('title', 'Logistic and Transport')

@section('content')
    <section class='pb-40'>
        <!-- intro image -->
        <div class="relative w-full h-[40vh] md:h-[75vh]">
            <!-- Centered Text -->
            <h3 class="absolute inset-0 flex items-center justify-center text-2xl md:text-4xl text-white kode-mono-text-font">
                Get ready with our service
            </h3>
            
            <!-- Image -->
            <img src="{{ asset('images/serviceHero.png') }}" alt="contact image" class="w-full h-[40vh] md:h-full mx-auto object-cover opacity-30">
        </div>

        <!-- service cards -->
        <div class="grid grid-cols-3 justify-center items-center w-full px-10 gap-6 pt-24">
            <!-- card 1 -->
            <div class="border-2 border-limeGreen rounded-md shadow-md p-4 w-full h-[28vh] flex flex-col gap-y-6">
            <div class='flex flex-row justify-start items-center gap-x-6'>
                <h3 class="text-white text-xl font-semibold">Road Freight Transportation Services</h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-white" fill="currentColor" viewBox="0 0 640 512">
                    <path d="M64 32C28.7 32 0 60.7 0 96L0 304l0 80 0 16c0 44.2 35.8 80 80 80c26.2 0 49.4-12.6 64-32c14.6 19.4 37.8 32 64 32c44.2 0 80-35.8 80-80c0-5.5-.6-10.8-1.6-16L416 384l33.6 0c-1 5.2-1.6 10.5-1.6 16c0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16l1.6 0c17.7 0 32-14.3 32-32l0-64 0-16 0-10.3c0-9.2-3.2-18.2-9-25.3l-58.8-71.8c-10.6-13-26.5-20.5-43.3-20.5L480 144l0-48c0-35.3-28.7-64-64-64L64 32zM585 256l-105 0 0-64 48.8 0c2.4 0 4.7 1.1 6.2 2.9L585 256zM528 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM176 400a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM80 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                </svg>
            </div>
            <ul class="text-white">
                <li>🚚 Short and medium-distance transportation.</li>
                <li>📦 LTL shipments that don’t require a full truck.</li>
                <li>🚛 FTL shipment requires the entire truck.</li>
                <li>⚡ Express delivery options available.</li>
            </ul>
            </div>

            <!-- card 2 -->
            <div class="border-2 border-limeGreen rounded-md shadow-md p-4 w-full h-[28vh] flex flex-col gap-y-6">
                <div class='flex flex-row justify-start items-center gap-x-6'>
                    <h3 class="text-white text-xl font-semibold">Supply Chain Management</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-8 text-white' fill='currentColor' viewBox="0 0 640 512">
                        <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/>
                    </svg>
                </div>
                <ul class="text-white">
                    <li>📍 Route Optimization & Planning</li>
                    <li>📦 Just-in-Time (JIT) Delivery</li>
                    <li>📈 Demand Forecasting</li>
                    <li>📝 Supplier & Vendor Coordination</li>
                </ul>
            </div>

            <!-- card 3 -->
            <div class="border-2 border-limeGreen rounded-md shadow-md p-4 w-full h-[28vh] flex flex-col gap-y-6">
                <div class='flex flex-row justify-start items-center gap-x-6'>
                    <h3 class="text-white text-xl font-semibold">Last-Mile Delivery</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-white" fill="currentColor" viewBox="0 0 640 512">
                        <path d="M64 32C28.7 32 0 60.7 0 96L0 304l0 80 0 16c0 44.2 35.8 80 80 80c26.2 0 49.4-12.6 64-32c14.6 19.4 37.8 32 64 32c44.2 0 80-35.8 80-80c0-5.5-.6-10.8-1.6-16L416 384l33.6 0c-1 5.2-1.6 10.5-1.6 16c0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16l1.6 0c17.7 0 32-14.3 32-32l0-64 0-16 0-10.3c0-9.2-3.2-18.2-9-25.3l-58.8-71.8c-10.6-13-26.5-20.5-43.3-20.5L480 144l0-48c0-35.3-28.7-64-64-64L64 32zM585 256l-105 0 0-64 48.8 0c2.4 0 4.7 1.1 6.2 2.9L585 256zM528 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM176 400a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM80 368a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                    </svg>
                </div>
                <ul class="text-white">
                    <li>🚚 Express & Same-day Delivery</li>
                    <li>📦 Parcel Tracking & Real-time Updates</li>
                    <li>🛒 E-commerce Fulfillment Solutions</li>
                    <li>🤖 Contact & Scheduled Delivery</li>
                </ul>
            </div>

            <!-- card 4 -->
            <div class="border-2 border-limeGreen rounded-md shadow-md p-4 w-full h-[28vh] flex flex-col gap-y-6">
                <div class='flex flex-row justify-start items-center gap-x-6'>
                    <h3 class="text-white text-xl font-semibold">Customs Brokerage & Compliance</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class='text-white size-8' fill='currentColor' viewBox="0 0 640 512">
                        <path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7l-135-105.8c-1.1-11.4-6.3-22.3-15.3-30.7l-134.2-123-23.4 18.2-26-20.3 77.2-60.1c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2l-89.7 72.6-25.8-20.3 81.8-66.2c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-35.5 23.7L38.8 5.1zM96 171.6L40.6 128 0 128 0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-180.4zM413.6 421.9L128 196.9 128 352l28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c.8-.8 1.5-1.7 2.2-2.6zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-96 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z"/>
                    </svg>
                </div>
                <ul class="text-white">
                    <li>📑 Import/Export Documentation</li>
                    <li>💰 Duty & Tax Calculation</li>
                    <li>✅ Regulatory Compliance Assistance</li>
                    <li>🔍 Tariff Classification</li>
                </ul>
            </div>

            <!-- card 5 -->
            <div class="border-2 border-limeGreen rounded-md shadow-md p-4 w-full h-[28vh] flex flex-col gap-y-6">
                <div class='flex flex-row justify-start items-center gap-x-6'>
                    <h3 class="text-white text-xl font-semibold">Technology Driven Solutions</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-7 text-white' fill="currentColor" viewBox="0 0 512 512"><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                </div>
                <ul class="text-white">
                    <li>📡 GPS Tracking & Real-time Monitoring</li>
                    <li>🔗 Blockchain for Supply Chain Transparency</li>
                    <li>🤖 AI-based Predictive Analytics</li>
                    <li>📄 Automated Invoicing & Reporting</li>
                </ul>
            </div>
        </div>

        <!-- steps for registration -->
        <div class="px-10 pt-20 w-full">
            <h3 class='text-white text-2xl pb-16'>Steps for company registration</h3>
            <div class='grid grid-cols-3 justify-between items-center gap-x-6 gap-y-16 w-full'>
                <!-- step 1 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='text-limeGreen size-12' fill="currentColor" viewBox="0 0 576 512">
                        <path d="M151.6 42.4C145.5 35.8 137 32 128 32s-17.5 3.8-23.6 10.4l-88 96c-11.9 13-11.1 33.3 2 45.2s33.3 11.1 45.2-2L96 146.3 96 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-301.7 32.4 35.4c11.9 13 32.2 13.9 45.2 2s13.9-32.2 2-45.2l-88-96zM320 480l32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-160 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm0-128l224 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>01.</span>
                        Review Terms and Condition
                    </h3>
                    <p class="text-white text-center mt-2">Carefully read the platform's terms of service, privacy policy, and any other agreements.
                    Accept the terms to proceed.</p>
                </div>

                <!-- step 2 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-12 text-limeGreen' fill='currentColor' viewBox="0 0 640 512">
                        <path d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 160 0 8.2 0c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7l0-32.7c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM320 352l-96 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l296.2 0C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16l0 48 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-48 0c-8.8 0-16-7.2-16-16l0-64c0-8.8 7.2-16 16-16z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>02.</span>
                        Provide Business Details
                    </h3>
                    <p class="text-white text-center mt-2">Carefully provides business details correctly eg(company name, Contact infos, Business TIN, Registration certificate and Business TIN ).</p>
                </div>

                <!-- step 3 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-12 text-limeGreen' fill='currentColor' viewBox="0 0 640 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0l57.4-43c23.9-59.8 79.7-103.3 146.3-109.8l13.9-10.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176 0 384c0 35.3 28.7 64 64 64l296.2 0C335.1 417.6 320 378.5 320 336c0-5.6 .3-11.1 .8-16.6l-26.4 19.8zM640 336a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zm-76.7-43.3c6.2 6.2 6.2 16.4 0 22.6l-72 72c-6.2 6.2-16.4 6.2-22.6 0l-40-40c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0L480 353.4l60.7-60.7c6.2-6.2 16.4-6.2 22.6 0z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>03.</span>
                        Verify Your Email
                    </h3>
                    <p class="text-white text-center mt-2">Confirm your registration by clicking a verification link sent to your email | code sent to your phone</p>
                </div>

                <!-- step 4 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-12 text-limeGreen' fill='currentColor' viewBox="0 0 576 512">
                        <path d="M64 64C28.7 64 0 92.7 0 128L0 384c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64L64 64zM272 192l224 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-224 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zM256 304c0-8.8 7.2-16 16-16l224 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-224 0c-8.8 0-16-7.2-16-16zM164 152l0 13.9c7.5 1.2 14.6 2.9 21.1 4.7c10.7 2.8 17 13.8 14.2 24.5s-13.8 17-24.5 14.2c-11-2.9-21.6-5-31.2-5.2c-7.9-.1-16 1.8-21.5 5c-4.8 2.8-6.2 5.6-6.2 9.3c0 1.8 .1 3.5 5.3 6.7c6.3 3.8 15.5 6.7 28.3 10.5l.7 .2c11.2 3.4 25.6 7.7 37.1 15c12.9 8.1 24.3 21.3 24.6 41.6c.3 20.9-10.5 36.1-24.8 45c-7.2 4.5-15.2 7.3-23.2 9l0 13.8c0 11-9 20-20 20s-20-9-20-20l0-14.6c-10.3-2.2-20-5.5-28.2-8.4c0 0 0 0 0 0s0 0 0 0c-2.1-.7-4.1-1.4-6.1-2.1c-10.5-3.5-16.1-14.8-12.6-25.3s14.8-16.1 25.3-12.6c2.5 .8 4.9 1.7 7.2 2.4c13.6 4.6 24 8.1 35.1 8.5c8.6 .3 16.5-1.6 21.4-4.7c4.1-2.5 6-5.5 5.9-10.5c0-2.9-.8-5-5.9-8.2c-6.3-4-15.4-6.9-28-10.7l-1.7-.5c-10.9-3.3-24.6-7.4-35.6-14c-12.7-7.7-24.6-20.5-24.7-40.7c-.1-21.1 11.8-35.7 25.8-43.9c6.9-4.1 14.5-6.8 22.2-8.5l0-14c0-11 9-20 20-20s20 9 20 20z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>04.</span>
                        Payments
                    </h3>
                    <p class="text-white text-center mt-2">proceed to make the payment via the available methods (e.g credit card, bank transfer, etc.)</p>
                </div>

                <!-- step 5 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-12 text-limeGreen' fill='currentColor' viewBox="0 0 512 512">
                        <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm161.5-86.1c-12.2-5.2-26.3 .4-31.5 12.6s.4 26.3 12.6 31.5l11.9 5.1c17.3 7.4 35.2 12.9 53.6 16.3l0 50.1c0 4.3-.7 8.6-2.1 12.6l-28.7 86.1c-4.2 12.6 2.6 26.2 15.2 30.4s26.2-2.6 30.4-15.2l24.4-73.2c1.3-3.8 4.8-6.4 8.8-6.4s7.6 2.6 8.8 6.4l24.4 73.2c4.2 12.6 17.8 19.4 30.4 15.2s19.4-17.8 15.2-30.4l-28.7-86.1c-1.4-4.1-2.1-8.3-2.1-12.6l0-50.1c18.4-3.5 36.3-8.9 53.6-16.3l11.9-5.1c12.2-5.2 17.8-19.3 12.6-31.5s-19.3-17.8-31.5-12.6L338.7 175c-26.1 11.2-54.2 17-82.7 17s-56.5-5.8-82.7-17l-11.9-5.1zM256 160a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>05.</span>
                        Access Dashboard
                    </h3>
                    <p class="text-white text-center mt-2">Once approved, log into your account.
                    Explore the dashboard to manage</p>
                </div>

                <!-- step 6 -->
                <div class='flex flex-col justify-center items-center p-4 h-[28vh] hover:h-[28vh] hover:border-2 hover:border-limeGreen hover:p-4 hover:transition-all hover:ease-out hover:duration-500 hover:rounded-md'>
                    <svg xmlns="http://www.w3.org/2000/svg" class='size-12 text-limeGreen' fill='currentColor' viewBox="0 0 448 512">
                        <path d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l16 0 0 34.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6L256 64l16 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L224 0 176 0zm72 192l0 128c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-128c0-13.3 10.7-24 24-24s24 10.7 24 24z"/>
                    </svg>
                    <h3 class='text-white text-xl mt-7'>
                        <span class='text-limeGreen'>06.</span>
                        Wait for Approval
                    </h3>
                    <p class="text-white text-center mt-2">The platform might review your application and documents.
                    This process can take a few hours to several days, depending on the system</p>
                </div>
            </div>
        </div>

        <!-- connect with us -->
        <div class='my-40'>
            <!-- Image -->
            <img src="{{ asset('images/connect.jpg') }}" alt="contact image" class="w-full h-[36vh] md:h-[40vh] mx-auto object-cover opacity-30 absolute">

            <div class='relative text-white px-20 pt-12'>
                <h3 class='text-xl'>Connect with Us</h3>
                <div class='grid grid-cols-2 justify-between items-center pt-8'>
                    <div>
                        <a href='./registerCompany'>
                            <button class="w-fit px-4 py-2 rounded-md bg-limeGreen hover:border-2 hover:border-limeGreen duration-500 ease-out transition-all hover:bg-darkGreen">Register Your Company</button>
                        </a>
                    </div>
                    <div class='flex flex-row gap-x-4 justify-end items-end'>
                        <button class="w-fit px-4 py-2 rounded-md bg-limeGreen hover:border-2 hover:border-limeGreen duration-500 ease-out transition-all hover:bg-darkGreen">About Us</button>
                        <button class="w-fit px-4 py-2 rounded-md bg-limeGreen hover:border-2 hover:border-limeGreen duration-500 ease-out transition-all hover:bg-darkGreen">Contact Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

