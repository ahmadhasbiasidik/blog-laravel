<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        User::create([
            'name'=>'Ahmad Hasbi Asidik',
            'username' => 'hasbi',
            'email'=>'hasbi@gmail.com',
            'password'=>bcrypt('123456'),
        ]);
        
        User::factory(4)->create();
        Post::factory(20)->create();
        
        
        // User::create([
        //     'name'=>'Hasbi A',
        //     'email'=>'hasbia@hasbi.com',
        //     'password'=>bcrypt('12345'),
        // ]);

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'category_id'=>'1',
        //     'user_id'=>'2',
        //     'slug'=>'judul-pertama',    
        //     'excerpt'=>'Lorem ipsum pertama',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore exercitationem nam beatae provident natus nostrum consequuntur! Perspiciatis, autem quo? Maxime natus assumenda illum velit repellendus amet corrupti et provident, quam sunt, ex, necessitatibus rem magni similique? Ut aliquam fugit quaerat laborum numquam inventore doloremque qui architecto atque optio maxime laboriosam totam impedit debitis dolorem consequatur, ea hic. Cumque ullam distinctio optio vero laborum consequatur doloribus necessitatibus temporibus ut eaque praesentium porro ipsum nemo, atque, modi et rem error velit est, expedita fugit. </p><p>Deleniti accusantium corrupti quas obcaecati facilis unde reiciendis. Amet assumenda modi aliquam veniam fugit voluptatibus laboriosam, nostrum iure, vero corporis atque debitis cupiditate! Tempora nisi corporis provident sed, ut porro facilis animi vitae reiciendis molestiae repudiandae, veritatis dolores excepturi vel. Corrupti consectetur, aliquid quidem optio in repudiandae inventore tempora odit et quas voluptates doloremque nulla dicta tenetur ullam rem expedita voluptatem enim dolor? Pariatur, nesciunt deleniti! Porro quaerat quia quod reiciendis voluptate harum vel dolorem iste sapiente, ea excepturi dolore quis necessitatibus modi rerum corrupti obcaecati cupiditate nulla qui consequuntur laborum animi vero ipsam? Dolorem rerum unde odit id nemo accusamus, dignissimos ut numquam vero maxime sed sint. Ex officiis aut dolore quibusdam aliquam ipsum eaque rerum id.</p>'
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'category_id'=>'2',
        //     'user_id'=>'1',
        //     'slug'=>'judul-kedua',    
        //     'excerpt'=>'Lorem ipsum kedua',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore exercitationem nam beatae provident natus nostrum consequuntur! Perspiciatis, autem quo? Maxime natus assumenda illum velit repellendus amet corrupti et provident, quam sunt, ex, necessitatibus rem magni similique? Ut aliquam fugit quaerat laborum numquam inventore doloremque qui architecto atque optio maxime laboriosam totam impedit debitis dolorem consequatur, ea hic. Cumque ullam distinctio optio vero laborum consequatur doloribus necessitatibus temporibus ut eaque praesentium porro ipsum nemo, atque, modi et rem error velit est, expedita fugit. </p><p>Deleniti accusantium corrupti quas obcaecati facilis unde reiciendis. Amet assumenda modi aliquam veniam fugit voluptatibus laboriosam, nostrum iure, vero corporis atque debitis cupiditate! Tempora nisi corporis provident sed, ut porro facilis animi vitae reiciendis molestiae repudiandae, veritatis dolores excepturi vel. Corrupti consectetur, aliquid quidem optio in repudiandae inventore tempora odit et quas voluptates doloremque nulla dicta tenetur ullam rem expedita voluptatem enim dolor? Pariatur, nesciunt deleniti! Porro quaerat quia quod reiciendis voluptate harum vel dolorem iste sapiente, ea excepturi dolore quis necessitatibus modi rerum corrupti obcaecati cupiditate nulla qui consequuntur laborum animi vero ipsam? Dolorem rerum unde odit id nemo accusamus, dignissimos ut numquam vero maxime sed sint. Ex officiis aut dolore quibusdam aliquam ipsum eaque rerum id.</p>'
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'category_id'=>'1',
        //     'user_id'=>'2',
        //     'slug'=>'judul-ketiga',    
        //     'excerpt'=>'Lorem ipsum ketiga',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore exercitationem nam beatae provident natus nostrum consequuntur! Perspiciatis, autem quo? Maxime natus assumenda illum velit repellendus amet corrupti et provident, quam sunt, ex, necessitatibus rem magni similique? Ut aliquam fugit quaerat laborum numquam inventore doloremque qui architecto atque optio maxime laboriosam totam impedit debitis dolorem consequatur, ea hic. Cumque ullam distinctio optio vero laborum consequatur doloribus necessitatibus temporibus ut eaque praesentium porro ipsum nemo, atque, modi et rem error velit est, expedita fugit. </p><p>Deleniti accusantium corrupti quas obcaecati facilis unde reiciendis. Amet assumenda modi aliquam veniam fugit voluptatibus laboriosam, nostrum iure, vero corporis atque debitis cupiditate! Tempora nisi corporis provident sed, ut porro facilis animi vitae reiciendis molestiae repudiandae, veritatis dolores excepturi vel. Corrupti consectetur, aliquid quidem optio in repudiandae inventore tempora odit et quas voluptates doloremque nulla dicta tenetur ullam rem expedita voluptatem enim dolor? Pariatur, nesciunt deleniti! Porro quaerat quia quod reiciendis voluptate harum vel dolorem iste sapiente, ea excepturi dolore quis necessitatibus modi rerum corrupti obcaecati cupiditate nulla qui consequuntur laborum animi vero ipsam? Dolorem rerum unde odit id nemo accusamus, dignissimos ut numquam vero maxime sed sint. Ex officiis aut dolore quibusdam aliquam ipsum eaque rerum id.</p>'
        // ]);

        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'category_id'=>'2',
        //     'user_id'=>'1',
        //     'slug'=>'judul-keempat',    
        //     'excerpt'=>'Lorem ipsum keempat',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore exercitationem nam beatae provident natus nostrum consequuntur! Perspiciatis, autem quo? Maxime natus assumenda illum velit repellendus amet corrupti et provident, quam sunt, ex, necessitatibus rem magni similique? Ut aliquam fugit quaerat laborum numquam inventore doloremque qui architecto atque optio maxime laboriosam totam impedit debitis dolorem consequatur, ea hic. Cumque ullam distinctio optio vero laborum consequatur doloribus necessitatibus temporibus ut eaque praesentium porro ipsum nemo, atque, modi et rem error velit est, expedita fugit. </p><p>Deleniti accusantium corrupti quas obcaecati facilis unde reiciendis. Amet assumenda modi aliquam veniam fugit voluptatibus laboriosam, nostrum iure, vero corporis atque debitis cupiditate! Tempora nisi corporis provident sed, ut porro facilis animi vitae reiciendis molestiae repudiandae, veritatis dolores excepturi vel. Corrupti consectetur, aliquid quidem optio in repudiandae inventore tempora odit et quas voluptates doloremque nulla dicta tenetur ullam rem expedita voluptatem enim dolor? Pariatur, nesciunt deleniti! Porro quaerat quia quod reiciendis voluptate harum vel dolorem iste sapiente, ea excepturi dolore quis necessitatibus modi rerum corrupti obcaecati cupiditate nulla qui consequuntur laborum animi vero ipsam? Dolorem rerum unde odit id nemo accusamus, dignissimos ut numquam vero maxime sed sint. Ex officiis aut dolore quibusdam aliquam ipsum eaque rerum id.</p>'
        // ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        Category::create([
            'name'=>'Hardware Computer',
            'slug'=>'hardware-computer',
        ]);
    }
}
