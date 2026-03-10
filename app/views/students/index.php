<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Header Start -->
    <header class="bg-blue-900 text-white">
        <div class="flex items-center justify-between container mx-auto p-5">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah</a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
            
        </div>
    </header> 
    <!-- Header End -->

    <!-- Main Start -->
    <main class="container mx-auto grow">
        <div class="mt-8">
            <!-- Card Header Start-->
             <div class="p-4 shadow rounded-lg bg-gray-200 border-2 mb-8">
                <h1 class="text-2xl font-bold ">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
            </div>
             <div class="p-4 shadow rounded-lg bg-gray-200 border-2 mb-8">
                <h1 class="text-2xl font-bold ">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
            </div>
             <div class="p-4 shadow rounded-lg bg-gray-200 border-2">
                <h1 class="text-2xl font-bold ">Daftar Siswa</h1>
                <p>Menampilkan daftar siswa yang terdaftar</p>
            </div>
             <!-- Card Header End -->
        </div>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
     <Footer class="bg-gray-800 text-white">
        <div class="text-center p-4">
            &copy <?= date('Y')?> Sistem Sekolah - SMK Kristen Immanuel Tercinta
        </div>
     </footer>
    <!-- Footer End -->
</body>
</html>