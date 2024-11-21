@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-image: url('{{ asset('image/bg_PASTI.png') }}');
      background-size: cover;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('image/bg_PASTI.png') }}'); background-size: cover; background-repeat: no-repeat;">
  <div class="max-w-7xl mx-auto p-4 min-h-screen">
    
    <!-- Main Content Section -->
    <div class="flex justify-center items-center bg-teal-800 bg-opacity-80 p-8 rounded-lg shadow-lg w-full mt-4 min-h-[60vh]">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
        
        <!-- Left Section (Profile) -->
        <div class="col-span-1 bg-teal-900 text-white p-4 rounded-lg">
            <div class="flex flex-col items-center">
            <img alt="Profile Picture" class="rounded-full mb-4" src="{{ asset('image/profil.png') }}" width="100" height="100"/>
            <h2 class="text-center text-lg font-semibold mb-2">Profil</h2>
            <div class="text-left w-full">
                <div class="space-y-2">
                <div class="flex">
                    <p class="w-24 font-semibold">NAMA</p>
                    <p>: Prof. Dr. Niken Wayuhni, S.Si., M.T.</p>
                </div>
                <div class="flex">
                    <p class="w-24 font-semibold">NIP</p>
                    <p>: 199108120015</p>
                </div>
                <div class="flex">
                    <p class="w-24 font-semibold">EMAIL</p>
                    <p>: niken@lecture.undip.ac.id</p>
                </div>
                <div class="flex">
                    <p class="w-24 font-semibold">NO. TELP</p>
                    <p>: 085221267834</p>
                </div>
                <div class="flex">
                    <p class="w-24 font-semibold">FAKULTAS</p>
                    <p>: Sains dan Matematika</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Right Section (Notifications) -->
        <div class="col-span-2 bg-teal-900 text-white p-4 rounded-lg">
          <div class="space-y-4">
            <div class="bg-teal-800 p-4 rounded-lg flex justify-between items-center">
              <div>
                  <i class="far fa-envelope text-2xl"></i>
              </div>
              <div class="flex-1">
                <p class="text-sm text-left pl-3.5 pr-4">[11/07 - 15.33] Kaprodi Informatika - Mengajukan Jadwal Kuliah.</p>
              </div>
              <div class="flex space-x-2">
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Hapus</span>
                  <i class="far fa-trash-alt"></i>
                </button>
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Tinjau</span>
                  <i class="far fa-paper-plane"></i>
                </button>
              </div>
            </div>
            
            <div class="bg-teal-800 p-4 rounded-lg flex justify-between items-center">
              <div>
                <i class="far fa-envelope text-2xl"></i>
              </div>
              <div class="flex-1">
                <p class="text-sm text-left pl-3.5 pr-4">[8/07 - 08.46] Kaprodi Matematika - Merevisi Jadwal Kuliah.</p>
              </div>
              <div class="flex space-x-2">
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Hapus</span>
                  <i class="far fa-trash-alt"></i>
                </button>
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Tinjau</span>
                  <i class="far fa-paper-plane"></i>
                </button>
              </div>
            </div>
            
            <div class="bg-teal-800 p-4 rounded-lg flex justify-between items-center">
              <div>
                <i class="far fa-envelope text-2xl"></i>
              </div>
              <div class="flex-1">
                <p class="text-sm text-left pl-3.5 pr-4">[4/07 - 12.52] Kaprodi Biologi - Mengajukan Jadwal Kuliah.</p>
              </div>
              <div class="flex space-x-2">
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Hapus</span>
                  <i class="far fa-trash-alt"></i>
                </button>
                <button class="bg-white text-teal-800 p-2 rounded flex items-center space-x-2">
                  <span class="text-sm">Tinjau</span>
                  <i class="far fa-paper-plane"></i> 
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Container for Centered Buttons -->
        <div class="col-span-3 flex justify-center space-x-4 mt-4">
            <!-- Periode Akses IRS Button -->
            <a href="{{ route('dk_persetujuan') }}" class="bg-yellow-500 text-white px-8 py-5 rounded-lg flex items-center space-x-2 hover:bg-yellow-600">
              <i class="fa fa-laptop text-3xl"></i>
              <span class="text-2xl">Persetujuan</span>
          </a>

            <!-- Data Mahasiswa Button -->
            <a href="{{ route('dk_monitoring') }}" class="bg-yellow-500 text-white px-8 py-5 rounded-lg flex items-center space-x-2 hover:bg-yellow-600">
                <i class="fa fa-users text-3xl"></i>
                <span class="text-2xl">Monitoring Jadwal Kuliah</span>
            </a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
@endsection