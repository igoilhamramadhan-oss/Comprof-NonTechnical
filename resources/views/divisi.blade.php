@extends('layouts.main')

@section('container')
<div class="relative w-[1920px] mx-auto overflow-hidden">

    <div class="relative w-full max-w-[1920px] mx-auto h-[278px] font-['Montserrat'] overflow-hidden bg-[#275032]">
    
        <div class="absolute inset-0 w-[1920px] h-[278px] bg-cover bg-center" style="background-image: url('{{ asset('img/hero.jpg') }}');"></div>
    
        <div class="absolute inset-0 bg-[#275032] mix-blend-multiply opacity-60"></div>
    
        <div class="absolute left-0 top-[99px] w-[600px] h-[179px] bg-gradient-to-r from-[#172e1d] via-[#275032]/80 to-transparent z-0"></div>
    
        {{-- <div class="absolute left-0 top-0 w-full h-[99px] bg-[#275032] z-10"> --}}
            
            {{-- <div class="absolute left-0 top-0 w-[559px] h-[99px] bg-[#D9D9D9]" style="clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);"></div> --}}
    
            {{-- <img src="{{ asset('img/logo.png') }}" alt="Logo" class="absolute left-[217px] top-[16px] w-[70px] h-[67px] object-contain z-20"> --}}
    
            {{-- <div class="absolute left-[601px] top-0 h-[99px] flex flex-row items-center gap-[70px] z-20">
                <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Home</a>
                <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">About Us</a>
                <div class="text-[#E99C16] text-[16px] font-semibold flex items-center relative cursor-pointer">
                    Divisi
                    <svg class="absolute right-[-22px] top-[50%] translate-y-[-50%] w-[16px] h-[16px] rotate-[-90deg]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
                </div>
                <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Prestasi</a>
                <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Program</a>
                <a href="#" class="text-white text-[16px] font-semibold hover:text-[#E99C16]">Contact Us</a>
            </div> --}}
    
            {{-- <div class="absolute left-[1488px] top-[29px] w-[232px] h-[40px] border border-[#E99C16] rounded-[6px] drop-shadow-[0_5px_5px_rgba(0,0,0,0.05)] flex items-center z-20">
                <svg class="absolute left-[15px] w-[16px] h-[16px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <input type="text" placeholder="cari" class="absolute left-[70px] top-[9px] bg-transparent w-[140px] h-[20px] text-[16px] font-semibold text-white/75 outline-none">
            </div>
        </div>  --}}
    
        <div class="absolute left-[200px] top-[183px] flex items-center gap-[22px] z-20">
            <span class="text-[#C8C6C7] text-[20px] font-normal">Home</span>
            <svg class="w-[22px] h-[22px] text-[#C8C6C7]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-[#E99C16] text-[20px] font-normal">Divisi</span>
        </div>
    
    </div>

    <div class="bg-white py-24">
        <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <img src="{{ asset('img/humas.jpg') }}" alt="Foto Divisi Humas" class="rounded-xl shadow-xl w-full object-cover">
            </div>
            <div class="pr-0 md:pr-10">
                <p class="text-[#cba358] font-bold mb-3 tracking-widest text-sm uppercase">Divisi Non Technical</p>
                <h1 class="text-5xl font-serif font-bold text-gray-900 mb-8">Humas</h1>
                <h3 class="font-bold text-gray-800 mb-4 text-lg">About</h3>
                <p class="text-gray-600 leading-relaxed text-sm">Divisi Humas bertanggung jawab untuk membangun dan menjaga citra positif melalui komunikasi yang efektif, baik secara internal maupun eksternal. Divisi ini mengelola hubungan dengan media, menyusun dan menyebarkan informasi kepada publik, serta merancang strategi komunikasi.</p>
                <div class="w-full h-px bg-gray-400 mt-12"></div>
            </div>
        </div>
    </div>

    <div class="bg-[#244234] py-24 text-white">
        <div class="container mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1 pr-0 md:pr-10">
                <p class="text-[#cba358] font-bold mb-3 tracking-widest text-sm uppercase">Divisi Non Technical</p>
                <h1 class="text-5xl font-serif font-bold mb-8">Kominfo</h1>
                <p class="text-gray-200 leading-relaxed text-sm mb-6">Divisi Kominfo dalam suatu komunitas bertugas untuk mengelola dan menyebarkan informasi secara efektif kepada seluruh anggota dan pihak luar. Divisi ini bertanggung jawab atas pembuatan konten, seperti berita, artikel, dan pengumuman, serta mengelola saluran komunikasi seperti media sosial, website, dan newsletter komunitas. Selain itu, Divisi Kominfo juga berperan dalam mendokumentasikan kegiatan komunitas, menjaga aliran informasi tetap transparan dan up to date.</p>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('img/kominfo.jpg') }}" alt="Foto Divisi Kominfo" class="rounded-xl shadow-xl w-full object-cover">
            </div>
        </div>
    </div>

</div>
@endsection