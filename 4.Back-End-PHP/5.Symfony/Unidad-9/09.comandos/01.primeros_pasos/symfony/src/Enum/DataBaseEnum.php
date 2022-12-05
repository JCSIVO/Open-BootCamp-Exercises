<?php

namespace App\Enum;

abstract class DataBaseEnum
{
    public const LISTSUBJECTS = [
        'Ingeniería de montes' => [
            [
                'code'=>1343,
                'name'=>'Física I',
                'english_name'=> 'Physics I',
                'credects'=>6
            ],[
                'code'=>4231,
                'name'=>'Física II',
                'english_name'=> 'Physics II',
                'credects'=>6
            ],[
                'code'=>435354,
                'name'=>'Cálculo',
                'english_name'=> 'Calculate',
                'credects'=>3
            ],[
                'code'=>334,
                'name'=>'Programación',
                'english_name'=> 'Program',
                'credects'=>8
            ],[
                'code'=>765432,
                'name'=>'Geografía',
                'english_name'=> 'Geography',
                'credects'=>6
            ]
        ] ,
        'Ingeniería de telecomunicaciones' => [
            [
                'code'=>5565,
                'name'=>'Comunicaciones ópticas',
                'english_name'=> 'Comunicaciones ópticas',
                'credects'=>5
            ],[
                'code'=>24124,
                'name'=>'Antenas',
                'english_name'=> 'Antenas',
                'credects'=>4
            ],[
                'code'=>2147483647,
                'name'=>'Microondas',
                'english_name'=> 'Microondas',
                'credects'=>6
            ],[
                'code'=>542552345,
                'name'=>'Programación',
                'english_name'=> 'Programación',
                'credects'=>6
            ] 
        ]                               
    ];
    public const LISTPUPILS = [
        [
            'grade'=>'Ingeniería de montes',
            'n_expedient'=>13472,
            'name'=>'Carlos',
            'lastname'=>'Herrera Conejero',
            'birthdate'=>'2017-10-10',
            'gender'=>0,
            'email'=>'carherco@gmail.com',
            'phone'=>'197687432'
        ],
        [
            'grade'=>'Ingeniería de telecomunicaciones',
            'n_expedient'=>13483,
            'name'=>'Carmen',
            'lastname'=>'Hernández Colomina',
            'birthdate'=>'2017-10-10',
            'gender'=>1,
            'email'=>'carherco+2@gmail.com',
            'phone'=>'545758758768'
        ]
        
    ];
    public const PUPILSSUBJECTS = [
        [
            'subject'=>'1343',
            'pupil'=>'13472',
        ],
        [
            'subject'=>'4231',
            'pupil'=>'13472',
        ],
        [
            'subject'=>'5565',
            'pupil'=>'13483',
        ],
        [
            'subject'=>'334',
            'pupil'=>'13472',
        ],
        [
            'subject'=>'24124',
            'pupil'=>'13483',
        ],        
        [
            'subject'=>'2147483647',
            'pupil'=>'13483',
        ]   
    ];
    public const NOTES = [
        [
            'subject'=>'1343',
            'pupil'=>'13472',
            'nConvocation'=>1,
            'date'=>'2016-06-10',
            'note'=>'3.7'
        ],
        [
            'subject'=>'4231',
            'pupil'=>'13472',
            'nConvocation'=>2,
            'date'=>'2017-10-24',
            'note'=>'6.2'            
        ],
        [
            'subject'=>'5565',
            'pupil'=>'13483',
            'nConvocation'=>1,
            'date'=>'2017-10-27',
            'note'=>'8'             
        ],
        [
            'subject'=>'334',
            'pupil'=>'13472',
            'nConvocation'=>1,
            'date'=>'2018-08-14',
            'note'=>'6'              
        ],
        [
            'subject'=>'24124',
            'pupil'=>'13483',
            'nConvocation'=>1,
            'date'=>'2018-08-21',
            'note'=>'7'            
        ]  
    ];    
    public static function getListSubjects()
    {
        return self::LISTSUBJECTS;
    }
    public static function getListPupils()
    {
        return self::LISTPUPILS;
    }
    public static function getPupilsSubjects()
    {
        return self::PUPILSSUBJECTS;
    }    
    public static function getNotes()
    {
        return self::NOTES;
    }    
}