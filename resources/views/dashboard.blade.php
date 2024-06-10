<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


        <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Point</h4>
                            <p style="font-size: 28pt">{{$total_points}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-route"></i></i> Total Polyline</h4>
                            <p style="font-size: 28pt">{{$total_polylines}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i></i> Total Polygon</h4>
                            <p style="font-size: 28pt">{{$total_polygons}}</p>
                        </div>
                    </div>
                </div>
                    <hr />
                    <p>
                        Anda login sebagai <span class="fw-bold">{{ Auth::user()->name }}</span> dengan email <span class="fst-italic">{{ Auth::user()->email }}</span>
                    </p>
                </div>
            </div>
        </div>

</x-app-layout>
