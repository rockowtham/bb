<footer class="mt-[36px] bg-lightOrange max-sm:mt-[30px]">
    <div class="flex gap-x-[25px] gap-y-[30px] justify-between p-[60px] max-1060:flex-wrap max-1060:flex-col-reverse max-sm:px-[15px]">
       <div class="flex gap-[85px] items-start flex-wrap max-1180:gap-[25px] max-1060:justify-between">
          <ul class="grid gap-[20px] text-[14px]">
             <li><a href="{{ route('aboutUs') }}"> About Us </a></li>
             <li><a href="http://192.168.15.45/bagisto-demo/public/page/contact-us"> Contact Us </a></li>
             <li><a href="http://192.168.15.45/bagisto-demo/public/page/customer-service"> Customer Service </a></li>
             <li><a href="http://192.168.15.45/bagisto-demo/public/page/whats-new"> What's New </a></li>
             <li><a href="http://192.168.15.45/bagisto-demo/public/page/terms-of-use"> Terms of Use </a></li>
             <li><a href="{{ route('termsAndConditions') }}"> Terms &amp; Conditions </a></li>
          </ul>
          <ul class="grid gap-[20px] text-[14px]">
             <li><a href="{{ route('privacyPolicy') }}"> Privacy Policy </a></li>
             <li><a href="{{ route('paymentPolicy') }}"> Payment Policy </a></li>
             <li><a href="{{ route('shippingPolicy') }}"> Shipping Policy </a></li>
             <li><a href="{{ route('refundPolicy') }}"> Refund Policy </a></li>
             <li><a href="{{ route('returnPolicy') }}"> Return Policy </a></li>
          </ul>
       </div>
       <div class="grid gap-[10px]">
          {{-- <p class="max-w-[288px] leading-[45px] text-[30px] italic text-navyBlue" role="heading" aria-level="2"> Get Ready for our Fun Newsletter! </p> --}}
          <p class="text-[12px]"> Subscribe to stay in touch. </p>
          {{-- <form novalidate="" method="POST" action="https://demo.bagisto.com/bagisto-common/subscription" class="mt-[10px] rounded max-sm:mt-[30px]">
             <input type="hidden" name="_token" autocomplete="off" value="sqlYpTjQnXmvBdw8YkMX6keLvnaOPLPknyf67sLv"><label for="organic-search" class="sr-only">Search</label>
             <div class="relative w-full">
                <input type="email" name="email" class="w-full mb-3 py-2 px-3 shadow border rounded text-[14px] text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400 blockw-[420px] max-w-full px-[20px] py-[20px] pr-[110px] bg-[#F1EADF] border-[2px] border-[#E9DECC] rounded-[12px] text-xs font-medium max-1060:w-full" aria-label="Email" placeholder="email@example.com"><!----><button type="submit" class="absolute flex items-center top-[8px] w-max px-[26px] py-[13px] bg-white rounded-[12px] text-[12px] font-medium rtl:left-[8px] ltr:right-[8px]"> Subscribe </button>
             </div>
          </form> --}}

          <div class="flex mt-[20px]">
            <div class="mr-[20px]">
            <a href="https://www.whatsapp.com/" target="_blank">
               <i class="fab fa-whatsapp fa-3x" style="color: #25D366;"></i>
           </a>
         </div>
         <div class="mr-[20px]">
           <a href="https://www.instagram.com/" target="_blank">
               <i class="fab fa-instagram fa-3x" style="color: #BC2A8D;"></i>
           </a>
         </div>
         <div>
           <a href="https://twitter.com/" target="_blank">
               <i class="fab fa-twitter fa-3x text-blue-500"></i>
           </a>
         </div>
        </div>
       </div>
    </div>
    <div class="flex justify-between px-[60px] py-[13px] bg-[#F1EADF]">
      @php
    $currentYear = date('Y');
@endphp
       <p class="text-[14px] text-[#4D4D4D]"> © Copyright 2022 - {{ $currentYear }}, Sj Enterprises. All rights reserved. </p>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.0.0/css/all.min.css" />
 </footer>