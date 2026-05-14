<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTIC Dashboard - Divisi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Warna kustom sesuai desain */
        .bg-protic-dark { background-color: #0f4c3a; }
        .bg-protic-light { background-color: #f3f4f6; }
        .text-protic-green { color: #0f4c3a; }
        .bg-protic-button { background-color: #116b41; }
    </style>
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden font-sans">

    <aside class="w-64 bg-protic-dark text-white flex flex-col justify-between">
        <div>
            <div class="h-16 flex items-center px-6"></div>
            
            <nav class="mt-6 flex flex-col gap-2 px-4">
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-solid fa-border-all w-6"></i> Dashboard</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-solid fa-circle-info w-6"></i> About Us</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm bg-white text-protic-green font-bold rounded-lg shadow"><i class="fa-solid fa-users w-6"></i> Divisi</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-solid fa-calendar w-6"></i> Program</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-solid fa-trophy w-6"></i> Prestasi</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-regular fa-file-lines w-6"></i> Artikel</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-regular fa-image w-6"></i> Galery</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-regular fa-user w-6"></i> Users</a>
                <a href="#" class="flex items-center px-4 py-3 text-sm hover:bg-green-800 rounded-lg"><i class="fa-solid fa-gear w-6"></i> Setting</a>
            </nav>
        </div>
        
        <div class="p-4">
            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg flex items-center justify-center gap-2">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Sign Out
            </button>
        </div>
    </aside>

    <div class="flex-1 flex flex-col">
        
        <header class="h-16 bg-white shadow flex items-center justify-between px-6 z-10">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Protic&background=0D8ABC&color=fff" alt="Logo" class="h-8 w-8">
                <span class="font-bold text-xl tracking-wide">PROTIC</span>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 border rounded-full text-gray-500 hover:bg-gray-100">
                    <i class="fa-solid fa-search"></i>
                </button>
                <div class="flex items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin" class="h-8 w-8 rounded-full">
                    <div class="text-sm">
                        <p class="font-bold leading-none">Admin</p>
                        <p class="text-gray-500 text-xs">Administrator</p>
                    </div>
                    <i class="fa-solid fa-chevron-down text-xs text-gray-500 ml-2"></i>
                </div>
            </div>
        </header>

        <main class="flex-1 p-8 overflow-y-auto">
            
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-2xl font-bold">Divisi</h1>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <button class="bg-protic-button text-white px-5 py-2 rounded-lg flex items-center gap-2 shadow hover:bg-green-700">
                    <i class="fa-solid fa-plus"></i> Tambah Divisi
                </button>
            </div>

            <div class="bg-white rounded-xl shadow-sm border p-6">
                
                <div class="flex justify-between items-center mb-6">
                    <div class="flex border border-protic-dark rounded-full overflow-hidden">
                        <button class="px-6 py-2 bg-white text-protic-green font-medium">Teknikal</button>
                        <button class="px-6 py-2 bg-protic-dark text-white font-medium">Non Teknikal</button>
                    </div>
                    <div class="relative">
                        <i class="fa-solid fa-search absolute left-4 top-3 text-gray-400"></i>
                        <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 border rounded-full w-64 focus:outline-none focus:ring-1 focus:ring-protic-dark">
                    </div>
                </div>

                <div class="overflow-x-auto border rounded-lg">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-protic-dark text-white">
                                <th class="p-4 font-medium border-b border-r border-green-800">Nama</th>
                                <th class="p-4 font-medium border-b border-r border-green-800">Deskripsi</th>
                                <th class="p-4 font-medium border-b border-r border-green-800 text-center">Status</th>
                                <th class="p-4 font-medium border-b text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($divisis as $divisi)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="p-4 font-medium">{{ $divisi->nama }}</td>
                                <td class="p-4 text-gray-600">{{ $divisi->deskripsi }}</td>
                                <td class="p-4 text-center">
                                    <span class="bg-green-400 text-white text-xs px-3 py-1 rounded-full">{{ $divisi->status }}</span>
                                </td>
                                <td class="p-4 text-center">
                                    <button class="text-gray-600 hover:text-black mr-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            @empty
                            <tr class="border-b">
                                <td class="p-4 font-medium">Ketua dan Wakil</td>
                                <td class="p-4 text-gray-600">Memimpin dan mengkoordinasikan seluruh kegiatan PROTIC</td>
                                <td class="p-4 text-center"><span class="bg-green-400 text-white text-xs px-3 py-1 rounded-full">Published</span></td>
                                <td class="p-4 text-center">
                                    <button class="text-gray-600 mr-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="text-red-500"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b bg-gray-50">
                                <td class="p-4 font-medium">Sekretaris</td>
                                <td class="p-4 text-gray-600">Mengelola administrasi dan dokumentasi organisasi</td>
                                <td class="p-4 text-center"><span class="bg-green-400 text-white text-xs px-3 py-1 rounded-full">Published</span></td>
                                <td class="p-4 text-center">
                                    <button class="text-gray-600 mr-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="text-red-500"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="p-4 font-medium">Bendahara</td>
                                <td class="p-4 text-gray-600">Mengelola keuangan dan anggaran organisasi</td>
                                <td class="p-4 text-center"><span class="bg-green-400 text-white text-xs px-3 py-1 rounded-full">Published</span></td>
                                <td class="p-4 text-center">
                                    <button class="text-gray-600 mr-2"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button class="text-red-500"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </main>
    </div>

</body>
</html>