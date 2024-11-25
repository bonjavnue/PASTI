<!-- BLOM SELESAI -->
@extends('layouts.app')

@section('title', 'IRS Mahasiswa')

@section('content')
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-image: url('{{ asset('image/bg_PASTI1.png') }}');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<!-- Background -->
<body class="min-h-screen bg-gradient-to-r from-teal-600 to-amber-500">
  <div class="max-w-7xl mx-auto p-4 min-h-screen">
  
  <!-- header -->
  <div class="flex w-full mb-4">
    <!-- Back Button -->
    <a href="{{ url()->previous()}}" class="absolute top-15 left-7 bg-teal-800 text-white p-2 rounded-full hover:bg-teal-700">
      <i class="fas fa-arrow-left text-xl"></i>
    </a>
    
    <div class="flex w-full">
        <button class="a flex-1 bg-amber-400 text-teal-800 p-2 rounded-tl-xl rounded-bl-xl shadow-sm hover:bg-orange-400 whitespace-nowrap flex justify-center items-center" data-filter=".IRS">
            <span class="text-white font-semibold italic text-center">IRS</span>
        </button>
        <button class="a flex-1 bg-teal-700 text-teal-800 p-2 rounded-tr-xl rounded-br-xl shadow-sm hover:bg-orange-400 whitespace-nowrap flex justify-center items-center" data-filter=".KRS">
            <span class="text-white font-semibold italic text-center">KHS</span>
        </button>
    </div>
  </div>

    <!-- Main Content Section -->
  <div class="grid grid-cols-8 gap-4 w-full">

    <!-- Left Section (Profile) -->
    <div class="col-span-2 bg-teal-700 text-white p-4 rounded-lg">
      <div class="flex flex-col items-center space-y-2">
        <img alt="Profile Picture" class="rounded-full mb-4" src="{{ asset('image/profil.png') }}" width="100" height="100"/>
        <h2 class="text-center text-lg font-semibold mb-2">Profil</h2>
        <div class="text-left w-full">
          <div class="space-y-2">
            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">NAMA</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle text-justify w-full">Muhammad Faiq As-sajad</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">NIM</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">14050122120168</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">Email</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">faiq@students.com</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">Semester</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">5</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">IP Kumulatif</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">3.89</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">IPS Sebelumnya</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">4.00</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">Total SKS</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">100</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">Beban SKS Maks</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">24</p>
            </div>

            <div class="flex">
              <p class="text-sm align-top w-[120px] font-semibold">SKS Diambil</p>
              <p class="text-sm align-top w-[10px] font-semibold">:</p>
              <p class="text-sm align-middle w-full">20</p>
            </div>
          </div>
        </div>

        <div class="grid grid-cols-2 w-full flex-grow space-x-2 mt-4">
          <button class="bg-white text-teal-700 p-2 rounded-lg items-center space-x-2">
            <span class="text-base font-semibold italic">TOLAK</span>
          </button>
          <button class="bg-amber-400 text-white p-2 rounded-lg items-center space-x-2">
            <span class="text-base font-semibold italic">SETUJUI</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Right Section (Notifications) -->
<div class="col-span-6">
    <!-- IRS Content -->

    <!-- BELOM DIGANTI BAGIAN TABEL UNTUK IRS -->
    <div class="IRS">
        <div class="bg-white text-teal-900 p-4 rounded-lg">
            <div class="space-y-0">
                <!-- Waktu & Hari -->
                <div class="grid grid-cols-8 gap-0 w-full border-[1px] border-teal-700">
                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center  border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">WAKTU</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">SENIN</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">SELASA</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">RABU</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">KAMIS</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">JUMAT</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center font-semibold italic">SABTU</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center">
                            <p class="text-[11px] text-center font-semibold italic">MINGGU</p>
                        </div>
                    </div>
                </div>

                <!-- Jam 06.00 -->
                <div class="grid grid-cols-8 gap-0 w-full border-[1px] border-t-0 border-teal-700">
                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center  border-r-[1px] border-teal-700">
                            <p class="text-[11px] text-center">06.00</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700">
                        <p class="text-[11px] text-center font-semibold italic"></p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center border-r-[1px] border-teal-700"></div>
                    </div>

                    <div class="grid grid-cols-1 gap-0 w-full">
                        <div class="flex col-span-1 text-teal-700 p-2 items-center justify-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KRS Content -->
    <div class="KRS" style="display: none;">
        <div class="bg-white text-teal-900 p-4 rounded-lg">
            <div class="space-y-4">
                <h2 class="text-xl font-bold text-teal-800">Kartu Rencana Studi</h2>
                <div class="grid grid-cols-1 gap-4">
                    <div class="border p-4 rounded-lg">
                        <h3 class="font-semibold">Mata Kuliah yang Diambil</h3>
                        <ul class="mt-2 space-y-2">
                            <li>Pengembangan Berbasis Platform - 3 SKS</li>
                            <li>Komputasi tersebar Paralel - 3 SKS</li>
                            <li>Sistem Informasi - 3 SKS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  </div>
</div>


    </div>
    </div>

</body>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.a');
    const irsContent = document.querySelector('.IRS');
    const krsContent = document.querySelector('.KRS');

    // Fungsi untuk mengatur tampilan konten
    function toggleContent(filter) {
      if (filter === 'IRS') {
        irsContent.style.display = 'block';
        krsContent.style.display = 'none';
      } else if (filter === 'KRS') {
        irsContent.style.display = 'none';
        krsContent.style.display = 'block';
      }
    }

    buttons.forEach(button => {
      button.addEventListener('click', function() {
        // Menghapus titik dari data-filter
        const filter = this.getAttribute('data-filter').substring(1);
        
        // Mengatur warna background button
        buttons.forEach(btn => {
          btn.classList.remove('bg-amber-400');
          btn.classList.add('bg-teal-700');
        });
        this.classList.remove('bg-teal-700');
        this.classList.add('bg-amber-400');

        // Menampilkan konten yang sesuai
        toggleContent(filter);
      });
    });

    // Set tampilan default (IRS)
    const defaultButton = document.querySelector('.a[data-filter=".IRS"]');
    defaultButton.classList.add('bg-amber-400');
    toggleContent('IRS');
  });
</script>

</html>
@endsection