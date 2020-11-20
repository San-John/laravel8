<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Lg Mobile',
                'price'=>'100',
                'description'=>'Good Product and Services',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/search?q=lg+mobile&rlz=1C1CHWL_enKH894KH894&sxsrf=ALeKk019YEqqiCI6vEKfS2Aq0GrGq0m_og:1605797467616&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiTuo3d7Y7tAhWeyIsBHW11AAkQ_AUoAXoECA8QAw&biw=1920&bih=947#imgrc=XvXf8wPiXhbd8M',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>'100',
                'description'=>'Good Product and Services',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/search?q=panasonic+tv&rlz=1C1CHWL_enKH894KH894&sxsrf=ALeKk01TI01rpbYANWK2vQpdEj6or85OVQ:1605797570511&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjk0pWO7o7tAhVZyosBHWZIBEQQ_AUoAXoECA4QAw&biw=1920&bih=947#imgrc=znq52RFB6IGPYM',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Laptop Asus',
                'price'=>'100',
                'description'=>'Good Product and Services',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/search?q=laptop+ausu&tbm=isch&ved=2ahUKEwjSn46P7o7tAhXDAaYKHRGKAwUQ2-cCegQIABAA&oq=laptop+ausu&gs_lcp=CgNpbWcQAzICCAAyBggAEAgQHjIGCAAQCBAeMgYIABAKEBg6BAgjECc6BAgAEEM6BQgAELEDOgcIABCxAxBDOgQIABAeUMDrAViZ-gFg7fwBaAFwAHgAgAFqiAGWCZIBAzguNJgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=xIa2X9KtHcODmAWRlI4o&bih=947&biw=1920&rlz=1C1CHWL_enKH894KH894#imgrc=ozbrjsnJF6mX2M',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Computer Asus',
                'price'=>'100',
                'description'=>'Good Product and Services',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/search?q=computer+asus&tbm=isch&chips=q:computer+asus,g_1:gaming:J5i2V1YN8to%3D&rlz=1C1CHWL_enKH894KH894&hl=en&sa=X&ved=2ahUKEwjVo6Wu7o7tAhUK15QKHfdpBBoQ4lYoAHoECAEQFA&biw=1903&bih=947#imgrc=fvH6049XFW4fGM',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Iphone 12Max',
                'price'=>'100',
                'description'=>'Good Product and Services',
                'category'=>'Mobile',
                'gallery'=>'https://www.google.com/search?q=iphone+12&tbm=isch&ved=2ahUKEwjwzfSw7o7tAhX1xIsBHZ79CSgQ2-cCegQIABAA&oq=iphone+12&gs_lcp=CgNpbWcQAzIHCAAQsQMQQzIECAAQQzIHCAAQsQMQQzIHCAAQsQMQQzIHCAAQsQMQQzIFCAAQsQMyBQgAELEDMgUIABCxAzIFCAAQsQMyBQgAELEDOgIIAFD6W1jNb2CscGgCcAB4AIABaogB0QeSAQM2LjSYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=C4e2X7CcFvWJr7wPnvunwAI&bih=947&biw=1903&rlz=1C1CHWL_enKH894KH894&hl=en#imgrc=mNd6FozzT7ogiM',
                'created_at'=>now(),
                'updated_at'=>now()
            ]

        ]);
    }
}
