<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    
    public function run()
    {
        Photo::create([

            "filename" => "L1-1.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-2.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-3.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-4.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-5.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-6.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L1-7.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L2-1.jpg",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L2-2.jpg",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L2-3.jpg",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L3-1.jpg",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L3-2.jpg",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L4-1.jpg",
            "photoable_id" => "4",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L4-2.jpg",
            "photoable_id" => "4",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L4-3.jpg",
            "photoable_id" => "4",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L5-1.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L5-2.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L5-3.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Led"

        ]);

        Photo::create([

            "filename" => "L6-1.jpg",
            "photoable_id" => "6",
            "photoable_type" =>"App\Models\Led"

        ]);

        ///////////////////////////////////////////End_LED//////////////////////////////////////

        ///////////////////////////////////////////Start_Projector//////////////////////////////

        Photo::create([

            "filename" => "P1-1.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P1-2.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P1-3.jpg",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P2-1.jpg",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P2-2.jpg",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P3-1.jpg",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P3-2.jpg",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P3-3.jpg",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P4.jpg",
            "photoable_id" => "4",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P5-1.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P5-2.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P5-3.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Projector"

        ]);

        Photo::create([

            "filename" => "P5-4.jpg",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Projector"

        ]);

       

    ///////////////////////////////////////////Start_Gallery//////////////////////////////

        Photo::create([
    
            "filename" => "G-1.JPG",
            "photoable_id" => "1",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-2.JPG",
            "photoable_id" => "2",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-3.JPG",
            "photoable_id" => "3",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-4.JPG",
            "photoable_id" => "4",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-5.JPG",
            "photoable_id" => "5",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-6.JPG",
            "photoable_id" => "6",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-7.JPG",
            "photoable_id" => "7",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-8.JPG",
            "photoable_id" => "8",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-9.JPG",
            "photoable_id" => "9",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-10.JPG",
            "photoable_id" => "10",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-11.JPG",
            "photoable_id" => "11",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-12.JPG",
            "photoable_id" => "12",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-13.JPG",
            "photoable_id" => "13",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-14.JPG",
            "photoable_id" => "14",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-15.JPG",
            "photoable_id" => "15",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-16.JPG",
            "photoable_id" => "16",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-17.JPG",
            "photoable_id" => "17",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-18.JPG",
            "photoable_id" => "18",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-19.JPG",
            "photoable_id" => "19",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-20.JPG",
            "photoable_id" => "20",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-21.JPG",
            "photoable_id" => "21",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-22.JPG",
            "photoable_id" => "22",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-23.JPG",
            "photoable_id" => "23",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-24.JPG",
            "photoable_id" => "24",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-25.JPG",
            "photoable_id" => "25",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-26.JPG",
            "photoable_id" => "26",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-27.JPG",
            "photoable_id" => "27",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-28.JPG",
            "photoable_id" => "28",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-29.JPG",
            "photoable_id" => "29",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-30.JPG",
            "photoable_id" => "30",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-31.JPG",
            "photoable_id" => "31",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-32.JPG",
            "photoable_id" => "32",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-33.JPG",
            "photoable_id" => "33",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-34.JPG",
            "photoable_id" => "34",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-35.JPG",
            "photoable_id" => "35",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);

        Photo::create([
    
            "filename" => "G-36.JPG",
            "photoable_id" => "36",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-37.JPG",
            "photoable_id" => "37",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-38.JPG",
            "photoable_id" => "38",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
        Photo::create([
    
            "filename" => "G-39.JPG",
            "photoable_id" => "39",
            "photoable_type" =>"App\Models\Gallery"
    
        ]);
    
    }
        
}