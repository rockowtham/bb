
@extends('web.layouts.app',['menu' => $menu])

@section('content')

<main id="main" class="bg-white">
    <div class="container mt-[30px] px-[60px] max-lg:px-[30px] max-sm:px-[15px]">
       <p>Books Collection</p>
    </div>
    <div class="container px-[60px] max-lg:px-[30px] max-sm:px-[15px]">
       <div class="flex gap-[40px] items-start md:mt-[40px] max-lg:gap-[20px]">
          <div>
             <div class="panel-side grid grid-cols-[1fr] max-h-[1320px] overflow-y-auto overflow-x-hidden journal-scroll min-w-[342px] max-xl:min-w-[270px] md:max-w-[400px] md:pr-[26px]">
                <div class="flex justify-between items-center h-[50px] pb-[10px] border-b-[1px] border-[#E9E9E9] max-md:hidden">
                   <p class="text-[18px] font-semibold"> Filters: </p>
                   <p class="text-[12px] font-medium cursor-pointer" tabindex="0"> Clear All </p>
                </div>
                <div class="border-b-[1px] border-[#E9E9E9]">
                   <div>
                      <div class="flex justify-between items-center p-[15px] cursor-pointer select-none px-0 py-[10px]" role="button" tabindex="0">
                         <div class="flex justify-between items-center">
                            <p class="text-[18px] font-semibold">Price</p>
                         </div>
                         <span class="text-[24px] icon-arrow-up" role="button" aria-label="Toggle accordion" tabindex="0"></span>
                      </div>
                      <div class="p-[15px] z-10 bg-white rounded-lg !p-0">
                         <ul>
                            <li>
                               <div>
                                  <div>
                                     <div class="flex items-center gap-[15px]">
                                        <p class="text-[14px]"> Range: </p>
                                        <p class="text-[14px] font-semibold">$0.00 - $25.00</p>
                                     </div>
                                     <div class="flex relative justify-center items-center p-2 h-20 w-full mx-auto">
                                        <div class="relative w-full h-[4px] bg-gray-200 rounded-2xl">
                                           <div class="absolute left-1/4 right-0 h-full bg-navyBlue rounded-xl" style="left: 0%; right: 0%;"></div>
                                           <span><input type="range" class="absolute w-full h-[4px] appearance-none pointer-events-none bg-transparent outline-none cursor-pointer [&amp;::-webkit-slider-thumb]:pointer-events-auto [&amp;::-webkit-slider-thumb]:bg-white [&amp;::-webkit-slider-thumb]:appearance-none [&amp;::-webkit-slider-thumb]:h-[18px] [&amp;::-webkit-slider-thumb]:w-[18px] [&amp;::-webkit-slider-thumb]:rounded-full [&amp;::-webkit-slider-thumb]:ring-navyBlue [&amp;::-webkit-slider-thumb]:ring [&amp;::-moz-range-thumb]:pointer-events-auto [&amp;::-moz-range-thumb]:bg-white [&amp;::-moz-range-thumb]:appearance-none [&amp;::-moz-range-thumb]:h-[18px] [&amp;::-moz-range-thumb]:w-[18px] [&amp;::-moz-range-thumb]:rounded-full [&amp;::-moz-range-thumb]:ring-navyBlue [&amp;::-moz-range-thumb]:ring [&amp;::-ms-thumb]:pointer-events-auto [&amp;::-ms-thumb]:bg-white [&amp;::-ms-thumb]:appearance-none [&amp;::-ms-thumb]:h-[18px] [&amp;::-ms-thumb]:w-[18px] [&amp;::-ms-thumb]:rounded-full [&amp;::-ms-thumb]:ring-navyBlue [&amp;::-ms-thumb]:ring" min="0" max="25" aria-label="Min Range"></span><span><input type="range" class="absolute w-full h-[4px] appearance-none pointer-events-none bg-transparent outline-none cursor-pointer [&amp;::-webkit-slider-thumb]:pointer-events-auto [&amp;::-webkit-slider-thumb]:bg-white [&amp;::-webkit-slider-thumb]:appearance-none [&amp;::-webkit-slider-thumb]:h-[18px] [&amp;::-webkit-slider-thumb]:w-[18px] [&amp;::-webkit-slider-thumb]:rounded-full [&amp;::-webkit-slider-thumb]:ring-navyBlue [&amp;::-webkit-slider-thumb]:ring [&amp;::-moz-range-thumb]:pointer-events-auto [&amp;::-moz-range-thumb]:bg-white [&amp;::-moz-range-thumb]:appearance-none [&amp;::-moz-range-thumb]:h-[18px] [&amp;::-moz-range-thumb]:w-[18px] [&amp;::-moz-range-thumb]:rounded-full [&amp;::-moz-range-thumb]:ring-navyBlue [&amp;::-moz-range-thumb]:ring [&amp;::-ms-thumb]:pointer-events-auto [&amp;::-ms-thumb]:bg-white [&amp;::-ms-thumb]:appearance-none [&amp;::-ms-thumb]:h-[18px] [&amp;::-ms-thumb]:w-[18px] [&amp;::-ms-thumb]:rounded-full [&amp;::-ms-thumb]:ring-navyBlue [&amp;::-ms-thumb]:ring" min="0" max="25" aria-label="Max Range"></span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!---->
          <div class="flex-1">
             <div class="max-md:hidden">
                <div>
                   <div class="flex justify-between max-md:hidden">
                      <div class="relative">
                         <div class="select-none"><button class="flex justify-between items-center gap-[15px] max-w-[200px] w-full p-[14px] rounded-lg bg-white border border-[#E9E9E9] text-[16px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pr-[10px] max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">From A-Z <span class="text-[24px] icon-arrow-down" role="presentation"></span></button></div>
                         <div class="absolute w-max z-10 overflow-hidden bg-white shadow-[0px_10px_84px_rgba(0,0,0,0.1)] rounded-[20px]" tag="div" style="min-width: 142px; top: 54px; left: 0px; display: none;">
                            <ul class="py-[15px]">
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100 bg-gray-100">From A-Z</li>
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">From Z-A</li>
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">Newest First</li>
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">Oldest First</li>
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">Cheapest First</li>
                               <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">Expensive First</li>
                            </ul>
                         </div>
                      </div>
                      <div class="flex gap-[40px] items-center">
                         <div class="relative">
                            <div class="select-none"><button class="flex gap-[15px] justify-between items-center max-w-[200px] bg-white border border-[#E9E9E9] text-[16px] rounded-lg w-full p-[14px] max-md:pr-[10px] transition-all hover:border-gray-400 focus:border-gray-400 max-md:pl-[10px] max-md:border-0 max-md:w-[110px] cursor-pointer">10 <span class="text-[24px] icon-arrow-down" role="presentation"></span></button></div>
                            <div class="absolute w-max z-10 overflow-hidden bg-white shadow-[0px_10px_84px_rgba(0,0,0,0.1)] rounded-[20px]" tag="div" style="min-width: 84px; top: 54px; right: 0px;">
                               <ul class="py-[15px]">
                                  <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100 bg-gray-100">10</li>
                                  <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">20</li>
                                  <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">30</li>
                                  <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">40</li>
                                  <li class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100">50</li>
                               </ul>
                            </div>
                         </div>
                         <div class="flex gap-[20px] items-center"><span class="text-[24px] cursor-pointer icon-listing" role="button" aria-label="List" tabindex="0"></span><span class="text-[24px] cursor-pointer icon-grid-view-fill" role="button" aria-label="Grid" tabindex="0"></span></div>
                      </div>
                   </div>
                   <div class="md:hidden">
                      <ul>
                         <li class="p-[10px] bg-gray-100">From A-Z</li>
                         <li class="p-[10px]">From Z-A</li>
                         <li class="p-[10px]">Newest First</li>
                         <li class="p-[10px]">Oldest First</li>
                         <li class="p-[10px]">Cheapest First</li>
                         <li class="p-[10px]">Expensive First</li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="mt-[30px]">
                <div class="grid grid-cols-3 gap-8 max-1060:grid-cols-2 max-sm:justify-items-center max-sm:gap-[16px]">
                   <div class="grid gap-2.5 content-start w-full relative">
                      <div class="relative overflow-hidden group max-w-[291px] max-h-[300px] rounded-[4px]">
                         <a href="https://demo.bagisto.com/bagisto-common/champions-mindset--book-on-practical-insights-and-strategies-for-success" aria-label="Champions Mindset- Book on Practical Insights and Strategies for Success ">
                            <div id="image-shimmer-78" class="shimmer relative after:content-[&#39; &#39;] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300" index="370" width="291" height="300" alt="Champions Mindset- Book on Practical Insights and Strategies for Success" style="display: none;"></div>
                            <img class="relative after:content-[&#39; &#39;] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300" index="370" width="291" height="300" alt="Champions Mindset- Book on Practical Insights and Strategies for Success" data-src="https://demo.bagisto.com/bagisto-common/cache/medium/product/370/Col7Ry94JvDgTY0HyR0WFOgVloCOJA5kH5Z4htVa.webp" id="image-78" style="" src="./Books Collection_files/Col7Ry94JvDgTY0HyR0WFOgVloCOJA5kH5Z4htVa.webp">
                         </a>
                         <div class="action-items bg-black">
                            <p class="inline-block absolute top-[20px] left-[20px] px-[10px] bg-[#E51A1A] rounded-[44px] text-white text-[14px]"> Sale </p>
                            <div class="group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300"><span class="flex justify-center items-center absolute top-[20px] right-[20px] w-[30px] h-[30px] bg-white rounded-md cursor-pointer text-[25px] icon-heart" role="button" aria-label="Add To Wishlist" tabindex="0"></span><span class="icon-compare flex justify-center items-center w-[30px] h-[30px] absolute top-[60px] right-[20px] bg-white rounded-md cursor-pointer text-[25px]" role="button" aria-label="Add To Compare" tabindex="0"></span><button class="absolute bottom-[15px] left-[50%] py-[11px] px-[43px] bg-white rounded-xl text-navyBlue text-xs w-max font-medium cursor-pointer -translate-x-[50%] translate-y-[54px] group-hover:translate-y-0 transition-all duration-300"> Add To Cart </button></div>
                         </div>
                      </div>
                      <div class="grid gap-2.5 content-start max-w-[291px]">
                         <p class="text-base">Champions Mindset- Book on Practical Insights and Strategies for Success</p>
                         <div class="flex gap-2.5 font-semibold text-lg">
                            <p class="font-medium text-[#6E6E6E] line-through" aria-label="$25.99">
                               $25.99
                            </p>
                            <p class="font-semibold">
                               $24.99
                            </p>
                         </div>
                         <div class="hidden flex gap-4 mt-[8px]"><span class="block w-[30px] h-[30px] bg-[#B5DCB4] rounded-full cursor-pointer"></span><span class="block w-[30px] h-[30px] bg-[#5C5C5C] rounded-full cursor-pointer"></span></div>
                      </div>
                   </div>
                   <div class="grid gap-2.5 content-start w-full relative">
                      <div class="relative overflow-hidden group max-w-[291px] max-h-[300px] rounded-[4px]">
                         <a href="https://demo.bagisto.com/bagisto-common/musicmaestro--learn-to-play-guitar-a-step-by-step-guide-for-beginners" aria-label="MusicMaestro- Learn to Play Guitar: A Step-by-Step Guide for Beginners ">
                            <div id="image-shimmer-80" class="shimmer relative after:content-[&#39; &#39;] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300" index="354" width="291" height="300" alt="MusicMaestro- Learn to Play Guitar: A Step-by-Step Guide for Beginners" style="display: none;"></div>
                            <img class="relative after:content-[&#39; &#39;] after:block after:pb-[calc(100%+9px)] bg-[#F5F5F5] group-hover:scale-105 transition-all duration-300" index="354" width="291" height="300" alt="MusicMaestro- Learn to Play Guitar: A Step-by-Step Guide for Beginners" data-src="https://demo.bagisto.com/bagisto-common/cache/medium/product/354/s0OhybCPWfBNluOteYTMT2sQ2OMKt8lQIHGMcv8v.webp" id="image-80" style="" src="./Books Collection_files/s0OhybCPWfBNluOteYTMT2sQ2OMKt8lQIHGMcv8v.webp">
                         </a>
                         <div class="action-items bg-black">
                            <p class="inline-block absolute top-[20px] left-[20px] px-[10px] bg-[#E51A1A] rounded-[44px] text-white text-[14px]"> Sale </p>
                            <div class="group-hover:bottom-0 opacity-0 group-hover:opacity-100 transition-all duration-300"><span class="flex justify-center items-center absolute top-[20px] right-[20px] w-[30px] h-[30px] bg-white rounded-md cursor-pointer text-[25px] icon-heart" role="button" aria-label="Add To Wishlist" tabindex="0"></span><span class="icon-compare flex justify-center items-center w-[30px] h-[30px] absolute top-[60px] right-[20px] bg-white rounded-md cursor-pointer text-[25px]" role="button" aria-label="Add To Compare" tabindex="0"></span><button class="absolute bottom-[15px] left-[50%] py-[11px] px-[43px] bg-white rounded-xl text-navyBlue text-xs w-max font-medium cursor-pointer -translate-x-[50%] translate-y-[54px] group-hover:translate-y-0 transition-all duration-300"> Add To Cart </button></div>
                         </div>
                      </div>
                      <div class="grid gap-2.5 content-start max-w-[291px]">
                         <p class="text-base">MusicMaestro- Learn to Play Guitar: A Step-by-Step Guide for Beginners</p>
                         <div class="flex gap-2.5 font-semibold text-lg">
                            <p class="font-medium text-[#6E6E6E] line-through" aria-label="$27.99">
                               $27.99
                            </p>
                            <p class="font-semibold">
                               $25.99
                            </p>
                         </div>
                         <div class="hidden flex gap-4 mt-[8px]"><span class="block w-[30px] h-[30px] bg-[#B5DCB4] rounded-full cursor-pointer"></span><span class="block w-[30px] h-[30px] bg-[#5C5C5C] rounded-full cursor-pointer"></span></div>
                      </div>
                   </div>
                </div>
             </div>
             <!---->
          </div>
       </div>
    </div>
 </main>
 </div>
@endsection