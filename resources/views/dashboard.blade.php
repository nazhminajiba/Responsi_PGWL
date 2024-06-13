<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>


    <div class="container py-12">
    <div class="card shadow mb-4" style="background-color: #f8f9fa;">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="card-title">Data</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mb-4" style="background-color: #e9ecef;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><i class="fa-solid fa-location-dot"></i> Total Titik Wisata</h4>
                            <p class="display-4">{{$total_points}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4" style="background-color: #e9ecef;">
                        <div class="card-body text-center">
                            <h4 class="card-title"><i class="fa-solid fa-route"></i> Total Jalan</h4>
                            <p class="display-4">{{$total_polylines}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


                <p class="text-center">
                    Anda login sebagai <span class="fw-bold">{{ Auth::user()->name }}</span> dengan email <span class="fst-italic">{{ Auth::user()->email }}</span>
                </p>
            </div>
        </div>
    </div>

</x-app-layout>
