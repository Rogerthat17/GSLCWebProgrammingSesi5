<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function main(){
        $display = [
            1 => ['course' => 'Web Programming',
                'material' => 'PHP & Laravel',
                'class' => 'LG01',
                'code' => 'COMP6681001',
                'is_new' => true],
            2 => ['course' => 'Mobile Programming',
                'material' => 'Java & Android Studio',
                'class' => 'LE01',
                'code' => 'MOBI6059001',
                'is_new' => false
            ],
            3 => ['course' => 'Framework Layer Architecture',
                'material' => 'Basic OOP & Design Pattern',
                'class' => 'LC01',
                'code' => 'COMP6122001',
                'is_new' => false
            ],
            4 => ['course' => 'Compilation Techniques',
                'material' => 'Syntax Analysis & Push Down Automata',
                'class' => 'LG01',
                'code' => 'COMP6062001',
                'is_new' => false
            ],
            5 => ['course' => 'Entrepreneurship: Market Validation',
                'material' => 'Prototyping & Business Model Canvas',
                'class' => 'LH01',
                'code' => 'ENTR6511001',
                'is_new' => false
            ],
            6 => ['course' => 'Operating Systems',
                'material' => 'Threads & Process Scheduling',
                'class' => 'LG01',
                'code' => 'COMP6697001',
                'is_new' => false
            ],
            7 => ['course' => 'Research Methodology in Computer Science',
                'material' => 'Introduction to Research & The use of Theory',
                'class' => 'LJ01',
                'code' => 'COMP6696001',
                'is_new' => false
            ],
            8 => ['course' => 'Object Oriented Programming',
                'material' => 'Intro to Java & Class relationship',
                'class' => 'LH01',
                'code' => 'COMP6708001',
                'is_new' => false
            ],
            9 => ['course' => 'Pattern Software Design',
                'material' => 'Domain Services & Domain Events',
                'class' => 'LC01',
                'code' => 'COMP6733001',
                'is_new' => false
            ],
            10 => ['course' => 'Multimedia Systems',
                'material' => 'Making Multimedia & Delivering Multimedia',
                'class' => 'LH01',
                'code' => 'COMP7084001',
                'is_new' => false
            ],
            11 => ['course' => 'Basic Statistics',
                'material' => 'Basic Probability & Sampling Distributions',
                'class' => 'LJ01',
                'code' => 'STAT6171001',
                'is_new' => false
            ],
            12 => ['course' => 'Code Reengineering',
                'material' => 'Introduction to Refactoring & The Couplers',
                'class' => 'LF01',
                'code' => 'COMP6732001',
                'is_new' => false
            ]

        ];

        return view('display.main', ['display'=> $display]);
    }
}
