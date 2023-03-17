<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ambientes;
use App\Models\area_tematica;
use App\Models\competencias;
use App\Models\fichas;
use App\Models\instructores;
use App\Models\programas;
use App\Models\red_tematica;
use App\Models\resultados;
use App\Models\sedes;
use App\Models\semaforos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        red_tematica::Insert([[
            'Codigo_red'=>'1',
            'Nombre_red'=>'Informatica Diseno y Desarrollo de Software'
        ]]);

        area_tematica::Insert([[
            'Codigo_area'=>'1',
            'Nombre_area'=>'Software',
            'Codigo_red'=>'1'
        ]]);

        programas::Insert([
            [
                'programas_Codigo'=>'228106',
                'Nombre_programa'=>'Analisis y Desarrollo De Sistemas De Informacion',
                'Version'=>'102',
                'Nivel_formación'=>'Tecnologo',
                'Duracion_maxima'=>'24 Meses',
                'Tipo_de_Formacion'=>'Cadena Formacion',
                'Estado'=>'1',
                'Codigo_area'=>'1'
            ],
            [
                'programas_Codigo'=>'228118',
                'Nombre_programa'=>'Analisis y Desarrollo De Software',
                'Version'=>'01',
                'Nivel_formación'=>'Tecnologo',
                'Duracion_maxima'=>'3984 Horas',
                'Tipo_de_Formacion'=>'Cadena Regular',
                'Estado'=>'0',
                'Codigo_area'=>'1'
            ],
            [
                'programas_Codigo'=>'233104',
                'Nombre_programa'=>'Programacion De Software ',
                'Version'=>'01',
                'Nivel_formación'=>'Tecnico',
                'Duracion_maxima'=>'2208 Horas',
                'Tipo_de_Formacion'=>'Cadena Regular',
                'Estado'=>'1',
                'Codigo_area'=>'1'
            ],
            [
                'programas_Codigo'=>'233105',
                'Nombre_programa'=>'Arquitectura ',
                'Version'=>'105',
                'Nivel_formación'=>'Tecnico',
                'Duracion_maxima'=>'2208 Horas',
                'Tipo_de_Formacion'=>'Cadena Regular',
                'Estado'=>'1',
                'Codigo_area'=>'1'
            ]
    ]);
    
    fichas::Insert([
        [
            'Nro_ficha'=>'2515397',
            'Jornada'=>'Diurna',
            'Nro_aprendices'=>'24',
            'programas_Codigo'=>'228106',
        ],
        [
            'Nro_ficha'=>'2312499',
            'Jornada'=>'Noche',
            'Nro_aprendices'=>'15',
            'programas_Codigo'=>'228118',
        ],
        [
            'Nro_ficha'=>'2514852',
            'Jornada'=>'Diurna',
            'Nro_aprendices'=>'20',
            'programas_Codigo'=>'233104',
        ]
    ]);
    
    competencias::Insert([
        [
            'competencias_Codigo'=>'220501006',
            'Nombre_competencia'=>'ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE
            INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE.',
            'Duracion_competencia'=>'120 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501007',
            'Nombre_competencia'=>'CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCION
            INFORMATICA.',
            'Duracion_competencia'=>'600 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501009',
            'Nombre_competencia'=>'PARTICIPAR EN EL PROCESO DE NEGOCIACION DE TECNOLOGIA INFORMATICA PARA
            PERMITIR LA IMPLEMENTACION DEL SISTEMA DE INFORMACION.',
            'Duracion_competencia'=>'140 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501032',
            'Nombre_competencia'=>'ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION.',
            'Duracion_competencia'=>'400 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501033',
            'Nombre_competencia'=>'DISENAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE',
            'Duracion_competencia'=>'350 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501034',
            'Nombre_competencia'=>'IMPLANTAR LA SOLUCION QUE CUMPLA CON LOS REQUISISTOS PARA SU OPERACION.',
            'Duracion_competencia'=>'360 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'220501035',
            'Nombre_competencia'=>'APLICAR BUENAS PRACTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE,
            DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA. ',
            'Duracion_competencia'=>'200 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'240201500',
            'Nombre_competencia'=>'PROMOVER LA INTERACCION IDONEA CONSIGO MISMO, CON LOS DEMAS Y CON LA
            NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL',
            'Duracion_competencia'=>'0 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'240201501',
            'Nombre_competencia'=>'COMPRENDER TEXTOS EN INGLES EN FORMA ESCRITA Y AUDITIVA',
            'Duracion_competencia'=>'180 horas',
            'programas_Codigo'=>'228106'
        ],
        [
            'competencias_Codigo'=>'240201502',
            'Nombre_competencia'=>'PRODUCIR TEXTOS EN INGLES EN FORMA ESCRITA Y ORAL',
            'Duracion_competencia'=>'180 horas',
            'programas_Codigo'=>'228106'
        ],
    
    ]);

    resultados::Insert([
        [
              'Codigo'=>'01',
              'Nombre_resul'=>'ELABORAR MAPAS DE PROCESOS QUE PERMITAN IDENTIFICAR LAS ÁREAS
              INVOLUCRADAS EN UN SISTEMA DE INFORMACION, UTILIZANDO HERRAMIENTAS
              INFORMATICAS Y LAS TICS, PARA GENERAR INFORMES SEGUN LAS NECESIDADES DE
              LA EMPRESA',
              'competencias_codigo'=>'220501006',
              'programas_codigo'=>'228106',
          ],
          [
              'Codigo'=>'02',
              'Nombre_resul'=>'EJECUTAR Y DOCUMENTAR LAS PRUEBAS DEL SOFTWARE, APLICANDO TECNICAS DE
              ENSAYO-ERROR, DE ACUERDO CON EL PLAN DISENADO Y LOS PROCEDIMIENTOS
              ESTABLECIDOS POR LA EMPRESA',
              'competencias_codigo'=>'220501007',
              'programas_codigo'=>'228106',
          ],
          [
              'Codigo'=>'03',
              'Nombre_resul'=>'PARTICIPAR EN LOS PERFECCIONAMIENTOS DE CONTRATOS INFORMATICOS,
              ESTABLECIENDO CLAUSULAS TECNICAS, QUE RESPONDAN A LAS NECESIDADES DE
              LOS ACTORES DE LA NEGOCIACION, DE ACUERDO CON LA LEY DE CONTRATACION',
              'competencias_codigo'=>'220501009',
              'programas_codigo'=>'228106',
          ],
       
      ]);
    
    semaforos::Insert([
        [
            'Intensidad_diaria'=>'2',
            'Trimestre'=>'4',
            'programas_Codigo'=>'228106',
            'Nro_ficha'=>'2515397',
            'competencias_Codigo'=>'220501006',
            'resultados_Codigo'=>'01'
        ],
        
    ]);
    
    sedes::Insert([
        [
            'Codigo_sede'=>'201',
            'Direccion'=>' Calle 13 No. 10-63 Soacha Centro',
            'Nombre_Sede'=>'Centro Insdustrial de Desarrollo Empresarial',
            'Telefono'=>'(601) 5978250 Ext: 18002'
        ],
        [
            'Codigo_sede'=>'202',
            'Direccion'=>'Tv. 5 #5g - 95, Soacha, Cundinamarca',
            'Nombre_Sede'=>'Uniminuto',
            'Telefono'=>'(601) 12916520'

        ],
        [
            'Codigo_sede'=>'203',
            'Direccion'=>'Sibate - Soacha #14-82, Sibaté, Cundinamarca',
            'Nombre_Sede'=>'Subsede Sena la colonia',
            'Telefono'=>'(601) 5978250 Ext: 18002'

        ]
        ]);
    ambientes::Insert([
            [
                'Nro_ambi'=>'101',
                'Elementos_del_Ambiente'=>'45',
                'Especializacion'=>'TICS',
                'Codigo_sede'=>'201'
            ],
            [
                'Nro_ambi'=>'106',
                'Elementos_del_Ambiente'=>'45',
                'Especializacion'=>'TICS',
                'Codigo_sede'=>'201'
            ],
            [
                'Nro_ambi'=>'201',
                'Elementos_del_Ambiente'=>'45',
                'Especializacion'=>'Multimedia',
                'Codigo_sede'=>'201'
            ],
            [
                'Nro_ambi'=>'202',
                'Elementos_del_Ambiente'=>'45',
                'Especializacion'=>'Multimedia',
                'Codigo_sede'=>'202'
            ],
            [
                'Nro_ambi'=>'203',
                'Elementos_del_Ambiente'=>'45',
                'Especializacion'=>'Multimedia',
                'Codigo_sede'=>'203'
            ]
    ]);

        instructores::Insert([
        [
            'Tipo_Documento'=>'CC',
            'Nro_Doc'=>'11111111',
            'Nombres'=>'Arlenys Carolina',
            'Apellidos'=>'Nieves Vasquez',
            'Correo_Electronico'=>'acnv@misena.edu.co',
            'Estado'=>'1',
            'Codigo_red'=>'1',
            'Codigo_area'=>'1'
            
        ],
        [
            'Tipo_Documento'=>'CC',
            'Nro_Doc'=>'22222222',
            'Nombres'=>'Neidy Adriana ',
            'Apellidos'=>'Espitia Suarez',
            'Correo_Electronico'=>'naespitia@sena.edu.co',
            'Estado'=>'1',
            'Codigo_red'=>'1',
            'Codigo_area'=>'1'
        ],
        [
            'Tipo_Documento'=>'CC',
            'Nro_Doc'=>'33333333',
            'Nombres'=>'Samuel Ricardo',
            'Apellidos'=>'Padilla Narvaez',
            'Correo_Electronico'=>'spadilla@sena.edu.co',
            'Estado'=>'1',
            'Codigo_red'=>'1',
            'Codigo_area'=>'1'
        ],
        [
            'Tipo_Documento'=>'CC',
            'Nro_Doc'=>'44444444',
            'Nombres'=>'Andres Eduardo',
            'Apellidos'=>'Dueñas Montoya',
            'Correo_Electronico'=>'andresmontoya13@misena.edu.co',
            'Estado'=>'0',
            'Codigo_red'=>'1',
            'Codigo_area'=>'1'
        ],
        [
            'Tipo_Documento'=>'CC',
            'Nro_Doc'=>'55555555',
            'Nombres'=>'Evelio',
            'Apellidos'=>' Chaparro Moyano',
            'Correo_Electronico'=>'echaparro@misena.edu.co',
            'Estado'=>'0',
            'Codigo_red'=>'1',
            'Codigo_area'=>'1'
        ],
    ]);
        
    }
}
