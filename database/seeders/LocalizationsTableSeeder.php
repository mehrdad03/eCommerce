<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('localizations')->delete();
        
        \DB::table('localizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'موبایل',
                'slug' => 'موبایل',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'کالای دیجیتال',
                'slug' => 'کالای_دیجیتال',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'مد و پوشاک',
                'slug' => 'مد_و_پوشاک',
                'type' => 'category',
                'property_id' => 3,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'کالاهای سوپرمارکتی',
                'slug' => 'کالاهای_سوپرمارکتی',
                'type' => 'category',
                'property_id' => 4,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'محصولات بومی و محلی',
                'slug' => 'محصولات_بومی_و_محلی',
                'type' => 'category',
                'property_id' => 5,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'اسباب بازی',
                'slug' => 'اسباب_بازی',
                'type' => 'category',
                'property_id' => 6,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'زیبایی و سلامت',
                'slug' => 'زیبایی_و_سلامت',
                'type' => 'category',
                'property_id' => 7,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'خانه و آشپزخانه',
                'slug' => 'خانه_و_آشپزخانه',
                'type' => 'category',
                'property_id' => 8,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'کتاب و لوازم التحریر',
                'slug' => 'کتاب_و_لوازم التحریر',
                'type' => 'category',
                'property_id' => 9,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ورزش و سفر',
                'slug' => 'ورزش_و_سفر',
                'type' => 'category',
                'property_id' => 10,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'خودرو,ابزار و تجهیزات صنعتی',
                'slug' => 'خودرو,ابزار_و_تجهیزات صنعتی',
                'type' => 'category',
                'property_id' => 11,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'برندهای مختلف گوشی موبایل',
                'slug' => 'برندهای_مختلف_گوشی_موبایل',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'گوشی براساس قیمت',
                'slug' => 'گوشی_براساس_قیمت',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'گوشی براساس حافظه داخلی',
                'slug' => 'گوشی_براساس_حافظه_داخلی',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'رزولوشن عکس',
                'slug' => 'رزولوشن_عکس',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'گوشی براساس کاربری',
                'slug' => 'گوشی_براساس_کاربری',
                'type' => 'category',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'لوازم جانبی گوشی',
                'slug' => 'لوازم_جانبی_گوشی',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'لپ تاپ',
                'slug' => 'لپ_تاپ',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'تلویزیون',
                'slug' => 'تلویزیون',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'دوربین',
                'slug' => 'دوربین',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'تبلت',
                'slug' => 'تبلت',
                'type' => 'category',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'لباس مردانه',
                'slug' => 'لباس_مردانه',
                'type' => 'category',
                'property_id' => 3,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'لباس زنانه',
                'slug' => 'لباس_زنانه',
                'type' => 'category',
                'property_id' => 3,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'کفش زنانه',
                'slug' => 'کفش_زنانه',
                'type' => 'category',
                'property_id' => 3,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'مواد پروتیینی',
                'slug' => 'مواد_پروتیینی',
                'type' => 'category',
                'property_id' => 4,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'نوشیدنی ها',
                'slug' => 'نوشیدنی_ها',
                'type' => 'category',
                'property_id' => 4,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'ظروف سنتی',
                'slug' => 'ظروف_سنتی',
                'type' => 'category',
                'property_id' => 5,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'دکوراتیو سنتی',
                'slug' => 'دکوراتیو_سنتی',
                'type' => 'category',
                'property_id' => 5,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'بازی و سرگرمی',
                'slug' => 'بازی_و_سرگرمی',
                'type' => 'category',
                'property_id' => 6,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'پوشاک و کفش کودک',
                'slug' => 'پوشاک_و_کفش_کودک',
                'type' => 'category',
                'property_id' => 6,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'عطر و ادکلن',
                'slug' => 'عطر_و_ادکلن',
                'type' => 'category',
                'property_id' => 7,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'لوازم آرایشی',
                'slug' => 'لوازم_آرایشی',
                'type' => 'category',
                'property_id' => 7,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'سرو و پذیرایی',
                'slug' => 'سرو_و_پذیرایی',
                'type' => 'category',
                'property_id' => 8,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'نور و روشنایی',
                'slug' => 'نور_و_روشنایی',
                'type' => 'category',
                'property_id' => 8,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'محتوای آموزشی',
                'slug' => 'محتوای_آموزشی',
                'type' => 'category',
                'property_id' => 9,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'کتاب صوتی',
                'slug' => 'کتاب_صوتی',
                'type' => 'category',
                'property_id' => 9,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'دوچرخه',
                'slug' => 'دوچرخه',
                'type' => 'category',
                'property_id' => 10,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'کوهنوردی و کمپینگ',
                'slug' => 'کوهنوردی_و_کمپینگ',
                'type' => 'category',
                'property_id' => 10,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'موتورسیکلت',
                'slug' => 'موتورسیکلت',
                'type' => 'category',
                'property_id' => 11,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'ابزاربرقی',
                'slug' => 'ابزاربرقی',
                'type' => 'category',
                'property_id' => 11,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => ' گوشی اپل',
                'slug' => ' گوشی_اپل',
                'type' => 'category',
                'property_id' => 12,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'گوشی سامسونگ',
                'slug' => 'گوشی_سامسونگ',
                'type' => 'category',
                'property_id' => 12,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'گوشی تا 7 میلیون تومان',
                'slug' => 'گوشی تا 7 میلیون تومان',
                'type' => 'category',
                'property_id' => 13,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'گوشی تا 10 میلیون تومان',
                'slug' => 'گوشی تا 10 میلیون تومان',
                'type' => 'category',
                'property_id' => 13,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'گوشی تا 32 گیگ',
                'slug' => 'گوشی تا 32 گیگ',
                'type' => 'category',
                'property_id' => 14,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'گوشی تا 64 گیگ',
                'slug' => 'گوشی تا 64 گیگ',
                'type' => 'category',
                'property_id' => 14,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'تا 13 مگاپیکسل',
                'slug' => 'تا 13 مگاپیکسل',
                'type' => 'category',
                'property_id' => 15,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'تا 16مگاپیکسل',
                'slug' => 'تا 16مگاپیکسل',
                'type' => 'category',
                'property_id' => 15,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'گوشی اقتصادی',
                'slug' => 'گوشی اقتصادی',
                'type' => 'category',
                'property_id' => 16,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'گوشی میان رده',
                'slug' => 'گوشی میان رده',
                'type' => 'category',
                'property_id' => 16,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'کیف و کاور گوشی',
                'slug' => 'کیف و کاور گوشی',
                'type' => 'category',
                'property_id' => 17,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'پاور بانک',
                'slug' => 'پاور بانک',
                'type' => 'category',
                'property_id' => 17,
                'local' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'کیف و کوله لپ تاپ',
                'slug' => 'کیف و کوله لپ تاپ',
                'type' => 'category',
                'property_id' => 18,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'باطری لپ تاپ',
                'slug' => 'باطری لپ تاپ',
                'type' => 'category',
                'property_id' => 18,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'جی پلاس',
                'slug' => 'جی پلاس',
                'type' => 'category',
                'property_id' => 19,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'ال جی',
                'slug' => 'ال جی',
                'type' => 'category',
                'property_id' => 19,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'دوربین عکاسی دیجیتال',
                'slug' => 'دوربین عکاسی دیجیتال',
                'type' => 'category',
                'property_id' => 20,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'دوربین ورزشی و فیلم برداری',
                'slug' => 'دوربین ورزشی و فیلم برداری',
                'type' => 'category',
                'property_id' => 20,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'کاور تبلت',
                'slug' => 'کاور تبلت',
                'type' => 'category',
                'property_id' => 21,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'شارژر تبلت',
                'slug' => 'شارژر تبلت',
                'type' => 'category',
                'property_id' => 21,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'سویشرت',
                'slug' => 'سویشرت',
                'type' => 'category',
                'property_id' => 22,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'ژاکت',
                'slug' => 'ژاکت',
                'type' => 'category',
                'property_id' => 22,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'کاپشن زنانه',
                'slug' => 'کاپشن زنانه',
                'type' => 'category',
                'property_id' => 23,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'هودی زنانه',
                'slug' => 'هودی زنانه',
                'type' => 'category',
                'property_id' => 23,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'کتونی زنانه',
                'slug' => 'کتونی زنانه',
                'type' => 'category',
                'property_id' => 24,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'کفش مجلسی',
                'slug' => 'کفش مجلسی',
                'type' => 'category',
                'property_id' => 24,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'میگو',
                'slug' => 'میگو',
                'type' => 'category',
                'property_id' => 25,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'ماهی',
                'slug' => 'ماهی',
                'type' => 'category',
                'property_id' => 25,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'دمنوش',
                'slug' => 'دمنوش',
                'type' => 'category',
                'property_id' => 26,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'قهوه',
                'slug' => 'قهوه',
                'type' => 'category',
                'property_id' => 26,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'پارچ سنتی',
                'slug' => 'پارچ سنتی',
                'type' => 'category',
                'property_id' => 27,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'لیوان سنتی',
                'slug' => 'لیوان سنتی',
                'type' => 'category',
                'property_id' => 27,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'گلدان سنتی',
                'slug' => 'گلدان سنتی',
                'type' => 'category',
                'property_id' => 28,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'مجسمه سنتی',
                'slug' => 'مجسمه سنتی',
                'type' => 'category',
                'property_id' => 28,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'دوچرخه',
                'slug' => 'دوچرخه',
                'type' => 'category',
                'property_id' => 29,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'کفش و لباس کودک',
                'slug' => 'کفش و لباس کودک',
                'type' => 'category',
                'property_id' => 30,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'بادی اسپلش',
                'slug' => 'بادی اسپلش',
                'type' => 'category',
                'property_id' => 31,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'آرایش صورت',
                'slug' => 'آرایش صورت',
                'type' => 'category',
                'property_id' => 32,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'سرویس غذا خوری',
                'slug' => 'سرویس غذا خوری',
                'type' => 'category',
                'property_id' => 33,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'لوستر',
                'slug' => 'لوستر',
                'type' => 'category',
                'property_id' => 34,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'آموزش موسیقی',
                'slug' => 'آموزش موسیقی',
                'type' => 'category',
                'property_id' => 35,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'کتاب اثرمرکب',
                'slug' => 'کتاب اثرمرکب',
                'type' => 'category',
                'property_id' => 36,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'لوازم جانبی دوچرخه',
                'slug' => 'لوازم جانبی دوچرخه',
                'type' => 'category',
                'property_id' => 37,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'کفش کوهنوردی',
                'slug' => 'کفش کوهنوردی',
                'type' => 'category',
                'property_id' => 38,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'موتور کویر 125سی سی ',
                'slug' => 'موتور کویر 125سی سی ',
                'type' => 'category',
                'property_id' => 39,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'دریل',
                'slug' => 'دریل',
                'type' => 'category',
                'property_id' => 40,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'صورتی',
                'slug' => 'صورتی',
                'type' => 'color',
                'property_id' => 1,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'مشکی',
                'slug' => 'مشکی',
                'type' => 'color',
                'property_id' => 2,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'سفید',
                'slug' => 'سفید',
                'type' => 'color',
                'property_id' => 3,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'آبی',
                'slug' => 'آبی',
                'type' => 'color',
                'property_id' => 4,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'قرمز',
                'slug' => 'قرمز',
                'type' => 'color',
                'property_id' => 5,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'لارج',
                'slug' => 'لارج',
                'type' => 'size',
                'property_id' => 61,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'ایکس لارج',
                'slug' => 'ایکس لارج',
                'type' => 'size',
                'property_id' => 62,
                'local' => 'fa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}