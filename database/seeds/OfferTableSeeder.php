<?php

use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert(array(

            array(
                'image' => 'cns-1.jpg',
                'icone'=>'fa fa-home',
                'title_es'=>'CONSTRUCCIÓN DE EDIFICIO',
                'title_eng'=>'BUILDING CONSTRUCTION',
                'text_es'=>'Soporte en modelado de edificios, visualizaciones, topografía, planificación logística,
                            análisis de edificabilidad,
                            detección de errores ... a través del modelado BIM 3D, servicios BIM MEP, nube de puntos ...',
                'text_eng'=>'Support in modelling of buildings, visualisations, topography, logistics planning,
                            buildability analysis,
                            error detection... through BIM 3D modelling, BIM MEP services, Point Cloud ...',

            ),
            array(
                'image' => 'cns-2.jpg',
                'icone'=>'fa fa-keyboard-o',
                'title_es'=>'PLANIFICACIÓN DE PROYECTOS',
                'title_eng'=>'PROJECT PLANNING',
                'text_es'=>'Servicios y soluciones integrales para reducir los costos de las empresas a las que brindamos servicios.
                            apoyo en la
                            asuntos como la gestión de instalaciones, modelado BIM de proyectos construidos ...',
                'text_eng'=>'Comprehensive services and solutions to reduce the costs of the companies to which we provide
                            support in
                            matters such as facilities management, BIM modelling of built projects...',

            ),
            array(
                'image' => 'cns-3.jpg',
                'icone'=>'fa fa-gavel',
                'title_es'=>'RENOVACIÓN DE LA CASA',
                'title_eng'=>'HOUSE RENOVATION',
                'text_es'=>'Renovación construcción y diseño y departamento de interiorismo especializado en mecánica
                            y eléctrica
                            Servicios de sistemas e infraestructuras para estudios de planificación arquitectónica...',
                'text_eng'=>' Renovation construction and design and interior design department specialised in mechanical
                            and electrical
                            systems and infrastructures services for architecture planning studios.',

            ),


        ));

    }
}
