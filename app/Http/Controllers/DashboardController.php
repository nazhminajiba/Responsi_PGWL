<?php

namespace App\Http\Controllers;
use App\Models\Points;
use App\Models\Polylines;
use App\Models\Polygons;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->points = new Points();
        $this->polylines = new Polylines();
        $this->polygons = new Polygons();
    }

    public function index()
    {
         // Path ke file GeoJSON polyline
         $pathPolyline = 'C:\xampp\htdocs\PGWL\public\storage\geojson\Jalan.geojson';
         // Membaca file GeoJSON
         $geojsonPolyline = json_decode(file_get_contents($pathPolyline), true);
         // Hitung total polylines
         $total_polylines = count($geojsonPolyline['features']);

        $data = [
            "title" => "Dashboard",
        "total_points" => $this->points->count(),
        "total_polylines" => $total_polylines,
        ];
        

        return view('dashboard', $data);
    }
}


