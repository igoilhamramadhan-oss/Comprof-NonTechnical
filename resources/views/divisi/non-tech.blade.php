@extends('layouts.app')

@section('content')

<!-- HERO -->
<section
    id="home"
    class="relative h-[340px] bg-cover bg-center mt-20 overflow-hidden"
    style="background-image: url('{{ asset('images/hero.jpg') }}')"
>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#1D5A32]/80"></div>

    <!-- Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#1D5A32]/90 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 h-full flex flex-col justify-center text-white">

        <div class="flex items-center gap-3 text-sm mb-4">
            <a href="#home" class="hover:text-[#D6A84D] transition duration-300">Home</a>
            <span>></span>
            <span class="text-[#D6A84D]">Divisi</span>
        </div>

    </div>
</section>

<!-- HUMAS -->
<section id="about" class="bg-[#FAFAFA] py-32 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-24 items-center">

        <!-- IMAGE -->
        <div class="group relative overflow-hidden rounded-2xl shadow-2xl cursor-pointer transition duration-500 hover:-translate-y-3 hover:shadow-[0_20px_60px_rgba(0,0,0,0.25)]">

            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition duration-500 z-10"></div>

            <img
                src="{{ asset('images/humas.jpg') }}"
                alt="Humas"
                class="w-full h-full object-cover transition duration-700 group-hover:scale-110 group-hover:brightness-110"
            >
        </div>

        <!-- TEXT -->
        <div class="group">

            <p class="uppercase tracking-[5px] text-[#D6A84D] font-semibold mb-5 text-sm">
                Divisi Non-Technical
            </p>

            <h1 class="text-5xl lg:text-6xl font-bold mb-8 text-[#111] transition duration-500 group-hover:text-[#1D5A32]">
                Humas
            </h1>

            <h3 class="font-semibold text-lg mb-5 text-gray-900">
                About
            </h3>

            <p class="text-gray-600 leading-[2.3] text-lg">
                Divisi Humas bertanggung jawab untuk membangun dan menjaga citra positif melalui komunikasi yang efektif, baik secara internal maupun eksternal. Divisi ini mengelola hubungan dengan media, menyusun dan menyebarkan informasi kepada publik, serta merancang strategi komunikasi.
            </p>

            <div class="w-56 h-[2px] bg-gray-300 mt-12 transition duration-500 group-hover:w-72 group-hover:bg-[#D6A84D]"></div>

        </div>

    </div>

</section>

<!-- KOMINFO -->
<section id="divisi" class="bg-[#1D5A32] py-32 overflow-hidden relative">

    <div class="absolute top-0 left-0 w-full h-full opacity-5 bg-[url('/images/hero.jpg')] bg-cover bg-center"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-24 items-center">

        <!-- TEXT -->
        <div class="group text-white">

            <p class="uppercase tracking-[5px] text-[#D6A84D] font-semibold mb-5 text-sm">
                Divisi Non-Technical
            </p>

            <h1 class="text-5xl lg:text-6xl font-bold mb-8 transition duration-500 group-hover:text-[#D6A84D]">
                Kominfo
            </h1>

            <p class="leading-[2.3] text-lg text-gray-200">
                Divisi Kominfo dalam suatu komunitas bertugas untuk mengelola dan menyebarkan informasi secara efektif kepada seluruh anggota dan pihak luar. Divisi ini bertanggung jawab atas pembuatan konten, seperti berita, artikel, dan pengumuman, serta mengelola saluran komunikasi seperti media sosial, website, dan newsletter komunitas.
            </p>

        </div>

        <!-- IMAGE -->
        <div class="group relative overflow-hidden rounded-2xl shadow-2xl cursor-pointer transition duration-500 hover:-translate-y-3 hover:shadow-[0_20px_60px_rgba(0,0,0,0.35)]">

            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition duration-500 z-10"></div>

            <img
                src="{{ asset('images/kominfo.jpg') }}"
                alt="Kominfo"
                class="w-full h-full object-cover transition duration-700 group-hover:scale-110 group-hover:brightness-110"
            >

        </div>

    </div>

</section>

<!-- PRESTASI -->
<section id="prestasi" class="py-32 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">

        <p class="uppercase tracking-[5px] text-[#D6A84D] font-semibold mb-5 text-sm">
            Prestasi
        </p>

        <h2 class="text-5xl font-bold mb-8 text-[#111]">
            Prestasi Organisasi
        </h2>

        <p class="max-w-3xl mx-auto text-gray-600 leading-[2.2] text-lg">
            PROTIC telah meraih berbagai pencapaian dalam bidang teknologi, organisasi, dan pengembangan mahasiswa.
        </p>

    </div>

</section>

<!-- PROGRAM -->
<section id="program" class="py-32 bg-[#F5F5F5]">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">

        <p class="uppercase tracking-[5px] text-[#D6A84D] font-semibold mb-5 text-sm">
            Program
        </p>

        <h2 class="text-5xl font-bold mb-8 text-[#111]">
            Program Kerja
        </h2>

        <p class="max-w-3xl mx-auto text-gray-600 leading-[2.2] text-lg">
            Berbagai program kerja aktif dilakukan untuk meningkatkan kualitas anggota serta kontribusi komunitas terhadap lingkungan akademik dan masyarakat.
        </p>

    </div>

</section>

@endsection
blade
@extends('layouts.app')

@section('content')

<!-- HERO -->
<section
    id="home"
    class="relative h-[340px] bg-cover bg-center mt-20"
    style="background-image: url('{{ asset('images/hero.jpg') }}')"
>

    <div class="absolute inset-0 bg-[#1D5A32]/75"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 h-full flex flex-col justify-center text-white">

        <div class="flex items-center gap-3 text-sm mb-4">
            <a href="#home" class="hover:text-yellow-400">Home</a>
            <span>></span>
            <span class="text-yellow-400">Divisi</span>
        </div>

    </div>
</section>

<!-- ABOUT -->
<section id="about" class="bg-white py-28">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-20 items-center">

        <!-- Image -->
        <div>
            <img
                src="{{ asset('images/humas.jpg') }}"
                alt="Humas"
                class="rounded-xl shadow-xl w-full"
            >
        </div>

        <!-- Text -->
        <div>

            <p class="uppercase tracking-[4px] text-[#D6A84D] font-semibold mb-4">
                Divisi Non-Technical
            </p>

            <h1 class="text-5xl font-bold mb-8 text-[#111]">
                Humas
            </h1>

            <h3 class="font-semibold text-lg mb-4">
                About
            </h3>

            <p class="text-gray-700 leading-9 text-lg">
                Divisi Humas bertanggung jawab untuk membangun dan menjaga citra positif melalui komunikasi yang efektif, baik secara internal maupun eksternal. Divisi ini mengelola hubungan dengan media, menyusun dan menyebarkan informasi kepada publik, serta merancang strategi komunikasi.
            </p>

            <div class="w-52 h-[2px] bg-gray-400 mt-10"></div>

        </div>

    </div>

</section>

<!-- DIVISI -->
<section id="divisi" class="bg-[#1D5A32] py-28">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 grid lg:grid-cols-2 gap-20 items-center">

        <!-- Text -->
        <div class="text-white">

            <p class="uppercase tracking-[4px] text-[#D6A84D] font-semibold mb-4">
                Divisi Non-Technical
            </p>

            <h1 class="text-5xl font-bold mb-8">
                Kominfo
            </h1>

            <p class="leading-9 text-lg text-gray-200">
                Divisi Kominfo dalam suatu komunitas bertugas untuk mengelola dan menyebarkan informasi secara efektif kepada seluruh anggota dan pihak luar. Divisi ini bertanggung jawab atas pembuatan konten, seperti berita, artikel, dan pengumuman, serta mengelola saluran komunikasi seperti media sosial, website, dan newsletter komunitas. Selain itu, Divisi Kominfo juga berperan dalam mendokumentasikan kegiatan komunitas, menjaga aliran informasi tetap transparan dan up-to-date.
            </p>

        </div>

        <!-- Image -->
        <div>
            <img
                src="{{ asset('images/kominfo.jpg') }}"
                alt="Kominfo"
                class="rounded-xl shadow-xl w-full"
            >
        </div>

    </div>

</section>

<!-- PRESTASI -->
<section id="prestasi" class="py-32 bg-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">

        <p class="uppercase tracking-[4px] text-[#D6A84D] font-semibold mb-4">
            Prestasi
        </p>

        <h2 class="text-4xl font-bold mb-6">
            Prestasi Organisasi
        </h2>

        <p class="max-w-3xl mx-auto text-gray-600 leading-8">
            PROTIC telah meraih berbagai pencapaian dalam bidang teknologi, organisasi, dan pengembangan mahasiswa.
        </p>

    </div>

</section>

<!-- PROGRAM -->
<section id="program" class="py-32 bg-[#F5F5F5]">

    <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center">

        <p class="uppercase tracking-[4px] text-[#D6A84D] font-semibold mb-4">
            Program
        </p>

        <h2 class="text-4xl font-bold mb-6">
            Program Kerja
        </h2>

        <p class="max-w-3xl mx-auto text-gray-600 leading-8">
            Berbagai program kerja aktif dilakukan untuk meningkatkan kualitas anggota serta kontribusi komunitas terhadap lingkungan akademik dan masyarakat.
        </p>

    </div>

</section>

@endsection