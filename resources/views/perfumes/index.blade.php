{{--  --}}
@extends('layouts.app')


{{--  --}}
@section('title', 'Home')


{{--  --}}
@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <h2 class="bg-[#d16374] text-black text-3xl text-center py-6 font-semibold">Lista o Inventario de Perfumería</h2>  {{-- Development in Laravel PHP --}}
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-[#f2b785] text-black">
                {{-- <th class="w-20 py-5 ...">ID</th> --}}
                <th class="w-1/8 px-6 py-5 ...">Nombre del Perfume</th>
                <th class="w-1/16 py-5 ...">Género</th>
                <th class="w-1/16 py-5 ...">Diseñadores</th>
                <th class="w-1/16 py-5 ...">Familia Olfativa</th>
                <th class="w-1/16 py-5 ...">Esencia Pura</th>
                <th class="w-1/16 py-5 ...">Fecha Fabr.</th>
                <th class="w-1/16 py-5 ...">Fecha Venc.</th>
                <th class="w-28 py-5 ...">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($perfumes as $row)
                
            <tr>
                {{-- <td class="py-3 px-6 text-center">{{ $row->id }}</td> --}}
                <td class="py-3 px-6 text-center ">{{ $row->namePerfume }}</td>
                <td class="p-3 text-center">{{$row->gender}}</td>
                <td class="p-3 text-center">{{$row->designer}}</td>
                <td class="p-3 text-center">{{$row->olfactoryFamily}}</td>
                <td class="p-3 text-center">{{$row->pureEssence}} ml</td>
                <td class="p-3 text-center">{{$row->fabricationDate}}</td>
                <td class="p-3 text-center">{{$row->expirationDate}}</td>
                {{-- @ Timestaps
                <td class="p-3 text-center">{{$row->created_at}}</td>
                <td class="p-3 text-center">{{$row->updated_at}}</td> 
                --}}
                <td class="p-3 w-100 flex flex-auto content-center items-center ">
                    {{-- @ Botón de eliminar --}}
                    <form action=" {{ route('perfumes.destroy', $row->id) }} " method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-white px-3 py-2 rounded-sm mx-1">
                            <i class="fas fa-trash"></i></button>
                    {{-- @ Botón de editar --}}
                    </form>
                        <a href=" {{ route('perfumes.edit', $row->id) }} " class="bg-green-500 text-white px-3 py-2 rounded-sm mx-1">
                            <i class="fas fa-pen"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
