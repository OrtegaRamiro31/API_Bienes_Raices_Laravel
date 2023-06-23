<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Casa moderna en el centro',
                'price' => 250000,
                'description' => 'Hermosa casa moderna ubicada en el centro de la ciudad. Cuenta con amplias habitaciones, jardín trasero y garaje.',
                'wc' => 3,
                'parking' => 2,
                'rooms' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Apartamento en la playa',
                'price' => 150000,
                'description' => 'Acogedor apartamento ubicado a solo unos pasos de la playa. Tiene una hermosa vista al mar y acceso a todas las comodidades.',
                'wc' => 2,
                'parking' => 1,
                'rooms' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Finca rústica con terreno extenso',
                'price' => 500000,
                'description' => 'Encantadora finca rústica con un terreno extenso y hermosas vistas panorámicas. Perfecta para aquellos que buscan tranquilidad y naturaleza.',
                'wc' => 4,
                'parking' => 3,
                'rooms' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Piso céntrico con terraza',
                'price' => 180000,
                'description' => 'Amplio piso ubicado en el corazón de la ciudad con una impresionante terraza. Cuenta con todas las comodidades y está cerca de tiendas y restaurantes.',
                'wc' => 1,
                'parking' => 0,
                'rooms' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Villa de lujo con piscina',
                'price' => 800000,
                'description' => 'Exquisita villa de lujo con piscina privada y jardines impecables. Cuenta con interiores elegantes y ofrece una vida de lujo.',
                'wc' => 5,
                'parking' => 4,
                'rooms' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Casa adosada en zona residencial',
                'price' => 300000,
                'description' => 'Espaciosa casa adosada ubicada en una tranquila zona residencial. Ideal para familias y con fácil acceso a servicios y transporte público.',
                'wc' => 2,
                'parking' => 2,
                'rooms' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Ático con vistas panorámicas',
                'price' => 400000,
                'description' => 'Espectacular ático con amplias terrazas y vistas panorámicas de la ciudad. Ofrece un estilo de vida exclusivo y comodidades de alta gama.',
                'wc' => 3,
                'parking' => 1,
                'rooms' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Terreno para desarrollo inmobiliario',
                'price' => 1000000,
                'description' => 'Gran terreno ideal para el desarrollo de proyectos inmobiliarios. Ubicado en una zona en crecimiento y con gran potencial de inversión.',
                'wc' => 0,
                'parking' => 0,
                'rooms' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Chalet con acceso al lago',
                'price' => 600000,
                'description' => 'Encantador chalet con acceso directo a un hermoso lago. Perfecto para los amantes de los deportes acuáticos y la naturaleza.',
                'wc' => 2,
                'parking' => 3,
                'rooms' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Apartamento de lujo en torre emblemática',
                'price' => 700000,
                'description' => 'Exclusivo apartamento de lujo ubicado en una torre emblemática de la ciudad. Ofrece vistas impresionantes y servicios de primera clase.',
                'wc' => 3,
                'parking' => 2,
                'rooms' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('properties')->insert($data);
    }
}
