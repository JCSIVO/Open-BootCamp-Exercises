<?php
// src/enum/DataBaseEnum.php
namespace App\Enum;

abstract class DataBaseEnum
{
    public const LISTSUBJECTS = [
        [
          'code' => 1343,
          'name' => 'Physics I',
          'credects' => 6
        ],
        [
          'code' => 4231,
          'name' => 'Physics II',
          'credects' => 6
        ],
        [
          'code' => 435354,
          'name' => 'Cálculo',
          'credects' => 3
        ],
        [
          'code' => 5565,
          'name' => 'Optical communications',
          'credects' => 5
        ],
        [
          'code'=>135,
          'name'=>'Program',
          'credects'=> 10
        ]
    ];
 
    public static function getListSubjects()
    {
        return self::LISTSUBJECTS;
    }
}