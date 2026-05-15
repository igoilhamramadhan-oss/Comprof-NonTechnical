@extends('layouts.main')

@section('container')
<div class="w-full max-w-[1920px] min-h-[2244px] mx-auto overflow-x-hidden bg-white">
    <div class="relative w-full max-w-[1920px] mx-auto h-[278px] font-['Montserrat'] overflow-hidden bg-[#275032]">
    
        <div class="absolute inset-0 w-[1920px] h-[278px] bg-cover bg-center" style="background-image: url('{{ asset('img/hero.jpg') }}');"></div>
    
        <div class="absolute inset-0 bg-[#275032] mix-blend-multiply opacity-60"></div>
    
        <div class="absolute left-0 top-[99px] w-[600px] h-[179px] bg-gradient-to-r from-[#172e1d] via-[#275032]/80 to-transparent z-0"></div>
    
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