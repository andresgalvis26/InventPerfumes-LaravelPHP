<!DOCTYPE html>
<html lang="es">
<head>

    {{-- Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Logo --}}
    {{-- <link rel="shortcut icon" href="../../../public/perfume.ico" type="image/x-icon"> --}}
    <link rel="icon" href="{{ asset('perfume.ico') }}">

    <title>@yield('title') - Perfumes</title>
</head>

<body class="bg-[#f8efd4] text-stone-900">
    <nav class="h-10 flex justify-end py-5 px-16">
        <a href="{{ route('perfumes.index') }}" class="rounded px-5 pt-2 h-12 bg-[#f2b785] text-black font-semibold mx-2 hover:bg-[#d16374] hover:text-white">Listado de Perfumes</a>
    
        <a href="{{ route('perfumes.create') }}" class="text-black rounded px-5 pt-2 h-12 bg-[#f2b785] font-semibold mx-2 hover:bg-[#d16374] hover:text-white ">Añadir Nuevo Perfume</a>
    </nav>
    
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>

    @include('sweetalert::alert')
</body>


</html>