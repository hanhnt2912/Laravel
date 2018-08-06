<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Illuminate\Support\Facades\DB::table('apartments')->truncate();

        \Illuminate\Support\Facades\DB::table('apartments')->insert([

            [
                'id'=>'1',
                'name'=>'nhà 6',
                'address'=>'Sài Gòn',
                'price'=>200000,
                'general_information'=>'Giáp ranh Thủ Đức',
                'detailed_information'=>'Chất lượng sống cao',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
            ],
                [
                    'id'=>'2',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],
                [
                    'id'=>'3',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],
                [
                    'id'=>'4',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],
                [
                    'id'=>'5',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'6',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'7',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'8',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'9',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'10',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'11',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'12',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'13',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'14',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'15',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'16',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'17',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'18',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'19',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],

                [
                    'id'=>'20',
                    'name'=>'nhà 6',
                    'address'=>'Sài Gòn',
                    'price'=>200000,
                    'general_information'=>'Giáp ranh Thủ Đức',
                    'detailed_information'=>'Chất lượng sống cao',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUzTniPA5XMDG4iDjwXY2BvWTppigDQH_jthUjuLldJZin8p3x'
                ],




            ]


        );
    }
}
