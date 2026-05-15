{{-- <nav class="relative w-full h-[99px] bg-[#275032] z-50 flex items-center justify-bertween px-6 lg:px-10 xl:px-20 overflow-visible font-['Arial']">
    
    <div class="absolute left-0 top-0 w-[559px] h-[99px] bg-[#D9D9D9]" style="clip-path: polygon(0 0, 100% 0, 75% 100%, 0 100%);"></div>

    <div>
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="absolute left-[217px] top-[16px] w-[70px] h-[67px] object-contain z-20">
    </div>

    <div class="absolute left-[601px] top-[39px] w-fit h-fit flex flex-row items-center gap-[70px]">
        <a href="#" class="text-white text-[16px] w-[51px] h-[20] font-semibold hover:text-[#E99C16] transition-colors duration-500 ease-in-out">Home</a>

        <a href="#" class="text-white text-[16px] w-[77px] h-[20px] font-semibold hover:text-[#E99C16] transition-colors duration-500 ease-in-out">About Us</a>

        <div class="relative group h-full flex items-center">
            <div class="text-[#E99C16] text-[16px] font-semibold flex items-center gap-1 cursor-pointer">
                Divisi
                <svg class="w-[16px] h-[16px] rotate-[-90deg] transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>

            <div class="absolute top-[30px] left-[-49px] w-[119px] h-[100px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-500 z-50 drop-shadow-[7px_7px_7px_rgba(0,0,0,0.25)]">

                <div class="absolute left-[46px] top-[3px] w-[14px] h-[14px] bg-white rotate-45 rounded-[1.5px]"></div>
        
                <div class="absolute left-0 top-[8px] w-full h-[92px] bg-white rounded-[6px] flex flex-col font-['Arial']">
                    
                    <a href="#" class="relative w-full h-[30px] flex items-center justify-start hover:bg-gray-50 rounded-t-[6px]">
                        <span class="pl-[16px] text-[#000000] text-[10px] font-medium leading-[28px] capitalize">BPH</span>
                        <div class="absolute bottom-0 left-[13px] right-[15px] h-[0.3px] bg-[#38392B] opacity-15"></div>
                    </a>
        
                    <a href="#" class="relative w-full h-[30px] flex items-center justify-start hover:bg-gray-50">
                        <span class="pl-[16px] text-[#000000] text-[10px] font-medium leading-[28px] capitalize">Technical</span>
                        <div class="absolute bottom-0 left-[13px] right-[15px] h-[0.3px] bg-[#38392B] opacity-15"></div>
                    </a>
        
                    <a href="#" class="relative w-full h-[32px] flex items-center justify-start hover:bg-gray-50 rounded-b-[6px]">
                        <span class="pl-[16px] text-[#000000] text-[10px] font-medium leading-[28px] capitalize">Non technical</span>
                    </a>
        
                </div>
            </div>
        </div>



        <a href="#" class="text-white text-[16px] hover:text-[#E99C16]">Prestasi</a>
        <a href="#" class="text-white text-[16px] hover:text-[#E99C16]">Program</a>
        <a href="#" class="text-white text-[16px] hover:text-[#E99C16]">Contact Us</a>
    </div>

    <div class="absolute left-[1488px] top-[29px] w-[232px] h-[40px] border border-[#E99C16] rounded-[6px] flex items-center z-20">
        <svg class="absolute left-[15px] w-[16px] h-[16px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <input type="text" placeholder="cari" class="absolute left-[70px] top-[9px] bg-transparent w-[140px] h-[20px] text-[16px] text-white/75 outline-none">
    </div>

</nav> --}}

<nav class="relative w-full max-w-[1920px] h-[99px] bg-[#275032] mx-auto overflow-visible font-['Arial'] flex items-center justify-between z-50">
    
    <div class="relative h-full flex items-center shrink-0" style="width: 559px;">
        <div class="absolute left-0 top-0 w-full h-full bg-[#D9D9D9]" style="clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);"></div>
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="relative z-20 ml-[217px] w-[70px] h-[67px] object-contain">
    </div>

    <div class="flex flex-row items-center gap-[40px] xl:gap-[70px] px-10">
        <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16] transition-all">Home</a>
        <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16] transition-all">About Us</a>

        <div class="relative group h-[99px] flex items-center">
            <div class="text-[#E99C16] text-[16px] font-semibold flex items-center gap-1 cursor-pointer">
                Divisi
                <svg class="w-[16px] h-[16px] rotate-[-90deg] group-hover:rotate-0 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path>
                </svg>
            </div>

            <div class="absolute top-[60px] left-[-60px] w-[119px] h-[100px] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 drop-shadow-[7px_7px_7px_rgba(0,0,0,0.25)]">
                <div class="absolute left-[46px] top-[3px] w-[14px] h-[14px] bg-white rotate-45 rounded-[1.5px]"></div>
                <div class="absolute left-0 top-[8px] w-full h-[92px] bg-white rounded-[6px] flex flex-col">
                    <a href="#" class="relative w-full h-[30px] flex items-center pl-4 hover:bg-gray-100 rounded-t-[6px]">
                        <span class="text-[#000000] text-[10px] font-medium capitalize">BPH</span>
                        <div class="absolute bottom-0 left-3 right-3 h-[0.3px] bg-black/10"></div>
                    </a>
                    <a href="#" class="relative w-full h-[30px] flex items-center pl-4 hover:bg-gray-100">
                        <span class="text-[#000000] text-[10px] font-medium capitalize">Technical</span>
                        <div class="absolute bottom-0 left-3 right-3 h-[0.3px] bg-black/10"></div>
                    </a>
                    <a href="#" class="relative w-full h-[32px] flex items-center pl-4 hover:bg-gray-100 rounded-b-[6px]">
                        <span class="text-[#000000] text-[10px] font-medium capitalize">Non technical</span>
                    </a>
                </div>
            </div>
        </div>

        <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Prestasi</a>
        <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Program</a>
        <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Contact Us</a>
    </div>

    <div class="pr-10 shrink-0">
        <div class="w-[232px] h-[40px] border border-[#E99C16] rounded-[6px] flex items-center px-4">
            <svg class="w-[16px] h-[16px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
            <input type="text" placeholder="cari" class="bg-transparent ml-3 w-full text-[16px] text-white/75 outline-none">
        </div>
    </div>

</nav>