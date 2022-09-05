<?php

namespace App\Http\Controllers;

use App\Models\Led;
use App\Models\Projector;
use App\Models\Gallery;
use App\Models\Photo;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function led_index()
    {
        $led = Led::all();
        return view('led-list', compact('led'));
    }

    public function projector_index()
    {
        $projector = Projector::all();
        return view('projector-list', compact('projector'));
    }

    public function gallery_index()
    {
        $gallery = Gallery::all();
        return view('gallery-list', compact('gallery'));
    }


    public function show_led(Led $Led)
    {
        return view('led-details',compact('Led'));
    }


    public function show_projector(Projector $Projector)
    {
        return view('projector-details',compact('Projector'));
    }


    public function show_gallery(Gallery $Gallery)
    {
        return view('gallery-details',compact('Gallery'));
    }


    public function getProducts()
    {
        return view('products');
    }
    
}
