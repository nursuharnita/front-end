<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>


<body>
    <!--<h1>Haloo {{ $makanans }} </h1>
    <h1 class="font-bold underline ">Daftar Makanan</h1>
    <ul>
        @foreach($makanans as $makanan)
            <img src={{ $makanan->gambar }}
            width="150" />
            <li>{{ $makanan->nama }} - Rp. {{
            number_format($makanan->harga) }}</li>
        @endforeach
    </ul>-->

    <div class="flex mt-10">
        &emsp;  
          <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="https://kbu-cdn.com/dk/wp-content/uploads/sate-ayam.jpg" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Sate
            </div>
            <p class="text-gray-700 text-base">
            Rp 17.000
            </p>
      </div>

    </body>