<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kendaraan') }}
        </h2>
    </x-slot>

    <div class="container text-center">
        <form action="{{route('update', $vehicle)}}" method="post">
            @method('patch')
            @csrf
            <div class="row mt-4">
                <div class="col card shadow border-start-warning">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">PLAT</h6>
                        <input type="text" name="plat" value="{{$vehicle->plat}}">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">TANGGAL</h6>
                        <input type="date" name="tanggal" value="{{$vehicle->tanggal}}">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">JAM MASUK</h6>
                        <input type="time" name="jam_masuk" value="{{$vehicle->jam_masuk}}">
                    </div>
                </div>
                <div class="col card shadow border-start-warning ml-4">
                    <div class="card-body">
                        <h6 class="text-primary fw-bold ">JENIS KENDARAAN</h6>
                        <select name="jenis_kendaraan" value="{{$vehicle->jenis_kendaraan}}">
                            <option value="{{$vehicle->jenis_kendaraan}}">{{$vehicle->jenis_kendaraan}}</option>
                            <option value="Car">Car</option>
                            <option value="Motorcycle">Motorcycle</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="row mt-4 p-2 px-4 mr-3 btn btn-primary">EDIT</button>
        </form>
    </div>

</x-app-layout>
@include('layouts.master')