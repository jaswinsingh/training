<?php
$student=[
    [
      'id'=>'st1',
      'name'=>'John',
      'DoB'=>'1080812642',
      'grade'=>10
    ],
    [
      'id'=>'st2',
      'name'=>'Marry',
      'DoB'=>'1152975017',
      'grade'=>12
    ],
    [
      'id'=>'st3',
      'name'=>'steve',
      'DoB'=>'1113795410',
      'grade'=>10
    ],
    // [
    //   'id'=>'st4',
    //   'name'=>'John',
    //   'DoB'=>'1429497549',
    //   'grade'=>10
    // ],
];




$subject=[

          10=>[
                [
                  'Subject'=>'Maths',
                  'S_code'=>'M101',
                  'mm'=>20
                ],
                [
                  'Subject'=>'English',
                  'S_code'=>'HU101',
                  'mm'=>15
                ],
                [
                  'Subject'=>'Hindi',
                  'S_code'=>'HI101',
                  'mm'=>13
                ]
              ],

          12=>[
                [
                  'Subject'=>'Maths',
                  'S_code'=>'M201',
                  'mm'=>25
                ],
                [
                  'Subject'=>'English',
                  'S_code'=>'HU201',
                  'mm'=>20
                ],
                [
                  'Subject'=>'Computer',
                  'S_code'=>'CS201',
                  'mm'=>20
                ]
              ]

            ];

    $marks=[

                'st1'=>[
                          'HU101'=>75,
                          'M101'=>67,
                          'HI101'=>85,

                      ],
                'st2'=>[
                          'HU201'=>15,
                          'M201'=>21,
                          'CS201'=>17,
                      ],
                      'st3'=>[
                                'HU101'=>10,
                                'M101'=>12,
                                'HI101'=>11,
                            ],

          ];
 ?>
