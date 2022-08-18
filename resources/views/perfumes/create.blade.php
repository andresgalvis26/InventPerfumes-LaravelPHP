@extends('layouts.app')

@section('title', 'Añadir Nuevo Perfume')


@section('content')

<form action="{{ route('perfumes.store') }}" method="post" class="bg-white w-2/4 p-4 border-gray-100 shadow-xl rounded-lg">

    @csrf

    <h2 class="text-4xl text-center py-4 mb-4 font-semibold">Añadir Nuevo Perfume</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900" placeholder="Nombre del Perfume" type="text" name="namePerfume">
    

    <select name="gender" id="" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900">
        <option value="" autofocus>Seleccione el género</option>
        <option value="Unisex">Unisex</option>
        <option value="Hombres">Hombres</option>
        <option value="Mujeres">Mujeres</option>
    </select>

    <select name="designer" id="" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900">
        <option value="" autofocus>Seleccione el diseñador/a</option>
        <option value="Antonio Banderas">Antonio Banderas</option>
        <option value="Britney Spears">Britney Spears</option>
        <option value="Bvlgari">Bvlgari</option>
        <option value="Calvin Klein">Calvin Klein</option>
        <option value="Carolina Herrera">Carolina Herrera</option>
        <option value="Cartier">Cartier</option>
        <option value="Chanel">Chanel</option>
        <option value="Creed">Creed</option>
        <option value="Christian Dior">Christian Dior</option>
        <option value="Diesel">Diesel</option>
        <option value="Dolce & Gabbana">Dolce & Gabbana</option>
        <option value="Elizabeth Taylor">Elizabeth Taylor</option>
        <option value="Escada">Escada</option>
        <option value="Fred Hayman">Fred Hayman</option>
        <option value="Giorgio Armani">Giorgio Armani</option>
        <option value="Givenchy">Givenchy</option>
        <option value="Hugo Boss">Hugo Boss</option>
        <option value="Issey Miyake">Issey Miyake</option>
        <option value="Jenifer Lopez">Jenifer Lopez</option>
        <option value="Kenzo">Kenzo</option>
        <option value="Lacoste">Lacoste</option>
        <option value="Lacome">Lacome</option>
        <option value="Loewe">Loewe</option>
        <option value="Mont Blanc">Mont Blanc</option>
        <option value="Nautica">Nautica</option>
        <option value="Oscar de la Renta">Oscar de la Renta</option>
        <option value="Paco Rabbane">Paco Rabbane</option>
        <option value="Paris Hilton">Paris Hilton</option>
        <option value="Perry Ellis">Perry Ellis</option>
        <option value="Ralph Lauren">Ralph Lauren</option>
        <option value="Shakira">Shakira</option>
        <option value="Ted Lapidus">Ted Lapidus</option>
        <option value="Thierry Mugler">Thierry Mugler</option>
        <option value="Tommy Hilfiger">Tommy Hilfiger</option>
        <option value="Versace">Versace</option>
        <option value="Victoria Secret">Victoria Secret</option>
        <option value="Victorinox">Victorinox</option>
    </select>

    <select name="olfactoryFamily" id="olfactoryFamily" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900">
        <option value="" autofocus>Seleccione la familia olfativa</option>
        <option value="Floral">Floral</option>
        <option value="Ámbar Floral">Ámbar Floral</option>
        <option value="Floral Frutal">Floral Frutal</option>
        <option value="Almizcle Floral Amaderado">Almizcle Floral Amaderado</option>
        <option value="Ámbar Amaderada">Ámbar Amaderada</option>
        <option value="Amaderada">Amaderada</option>
        <option value="Ámbar">Ámbar</option>
        <option value="Ámbar Vainilla">Ámbar Vainilla</option>
        <option value="Amaderada Especiada">Amaderada Especiada</option>
        <option value="Cítrica">Cítrica</option>
    </select>

    <label for="pureEssence" class="my-2 w-full text-md font-semibold">Esencia Pura (en ml):</label>
    <input type="number" name="pureEssence" id="pureEssence" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900" placeholder="Ingrese la cantidad de esencia">

    <label for="fabricationDate" class="my-2 w-full text-md font-semibold">Fecha de Fabricación:</label>
    <input type="date" name="fabricationDate" id="fabricationDate" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900">

    <label for="expirationDate" class="my-2 w-full text-md font-semibold">Fecha de Vencimiento:</label>
    <input type="date" name="expirationDate" id="expirationDate" class="my-2 w-full bg-gray-200 p-2 text-md rounded placeholder-gray-900">


    <button type="submit" class="my-5 text-xl w-full bg-[#f2b785] p-2 font-semibold rounded text-black hover:bg-[#d16374] hover:text-white">Agregar</button>

</form>

@include('sweetalert::alert')

@endsection