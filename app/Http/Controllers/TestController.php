<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($data)
    {
//        $arr = [
//            [
//                "name"=> "News",
//                "alias"=> "news",
//                "type"=> 0,
//                "children"=> [
//                    [
//                        "name"=> "Business",
//                        "alias"=> "business",
//                        "ord"=> 0,
//                    ],
//                    [
//                        "name"=> "Culture",
//                        "alias"=> "culture",
//                        "ord"=> 1,
//                    ],
//                    [
//                        "name"=> "Design",
//                        "alias"=> "design",
//                        "ord"=> 2,
//                    ],
//                ],
//            ],
//            [
//                "name"=> "Blogs",
//                "alias"=> "blogs",
//                "type"=> 1,
//                "children"=> [
//                    [
//                        "name"=> "Social",
//                        "alias"=> "social",
//                        "ord"=> 0,
//                    ],
//                    [
//                        "name"=> "Startups",
//                        "alias"=> "startups",
//                        "ord"=> 1,
//                    ],
//                ],
//            ],
//            [
//                "name"=> "Forum",
//                "alias"=> "forums",
//                "type"=> 2,
//                "children"=> [
//                    [
//                        "name"=> "Ideas",
//                        "alias"=> "ideas",
//                        "ord"=> 0
//                    ],
//                    [
//                        "name"=> "Technologies",
//                        "alias"=> "technologies",
//                        "ord"=> 1
//                    ],
//                    [
//                        "name"=> "Startups",
//                        "alias"=> "startups",
//                        "ord"=> 2
//                    ],
//                ],
//            ],
//        ];
//        $data = [];
//        foreach($arr as $item)
//        {
//            $data[] = [
//                'name' => $item['name'],
//                'alias' => $item['alias'],
//                'parent' => null,
//            ];
//            foreach ($item['children'] as $child)
//            {
//
//                $data[] = [
//                    'name' => $child['name'],
//                    'alias' => $child['alias'],
//                    'parent' => $item['name'],
//                ];
//            }
//            continue;
//        }
        return view('welcome', compact('data'));
   }
}
