<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tentang kami') }}
        </h2>
    </x-slot>
   <div class="container py-4 py-xl-5">
        <div class="row mb-4 mb-lg-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="color: rgb(78,115,223);">TEAM ADT E-Parking</h2>
                <p>Dengan ADT E-Parking ini, manajemen parkir  menjadi lebih efisien dan efektif. Sistem ini menawarkan administrasi yang lebih baik untuk mengoptimalkan sumber daya parkir dan meningkatkan pengalaman parkir secara keseluruhan.</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/dadan.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Dadan Ramdani</h5>
                        <p class="text-muted card-text mb-2">152022153</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/alex.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Alexander A. Palisungan</h5>
                        <p class="text-muted card-text mb-2">152022158</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center d-flex flex-column align-items-center pt-4">
                        <img class="rounded mb-3 fit-cover" width="130" height="130" src="{{asset('img/thoriq.jpg')}}">
                        <h5 class="fw-bold text-primary card-title mb-0">Thoriq Najmu Tsaqib</h5>
                        <p class="text-muted card-text mb-2">152022167</p>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('layouts.master')