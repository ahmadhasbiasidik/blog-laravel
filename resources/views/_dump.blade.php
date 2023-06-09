tinker

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolore dolorum dicta non iusto repellendus repudiandae maiores velit officiis alias, necessitatibus, mollitia nulla. Ipsa officiis beatae reprehenderit iste dolore esse tempora quos natus assumenda deleniti placeat, rerum consectetur eum optio quod cupiditate totam repellendus aliquid.</p>
<p>Impedit sit tempora iusto ducimus, quasi accusantium dignissimos voluptatum est sunt tenetur provident tempore cumque voluptate dolor eius. Nulla sunt dolor animi eos quo impedit non, voluptatibus facilis eum deleniti omnis nihil itaque aspernatur nemo quisquam illum deserunt, odit optio cum? Fuga cumque, vero, neque aperiam dolor quam est, voluptates dicta cum praesentium minima.</p>
<p>Repellat inventore ducimus non architecto unde minima, maiores minus pariatur amet praesentium quis voluptas ipsum esse quia, officia fuga magnam nisi. Error deserunt praesentium doloremque distinctio consequatur vero perspiciatis optio fugit maiores saepe, cum incidunt minima nobis. Inventore placeat repudiandae blanditiis dolores ipsum ex libero reiciendis, iusto, rerum doloribus porro! Dolor, incidunt fugiat?</p>
<p>Recusandae iste dolorum voluptate accusantium nisi debitis, earum corporis sit? Similique eaque laboriosam asperiores placeat recusandae quo voluptas sequi soluta ipsa accusamus veritatis beatae aut, culpa libero repudiandae voluptate consequatur doloremque praesentium. Nam natus, ducimus sit minima ut necessitatibus possimus ea veritatis sequi. Fugit blanditiis commodi distinctio laboriosam quod sed iusto fugiat ipsa repellendus quae, consequatur rerum unde culpa dolorum minima ratione neque facilis magnam explicabo placeat? Tempora assumenda animi quam itaque!</p>
<p>Excepturi deleniti, voluptatem voluptates perspiciatis doloribus accusantium ullam? Excepturi rem earum cupiditate quisquam, soluta animi magnam eum, tempore tempora reiciendis perferendis commodi ratione aliquam. Debitis corrupti eius ullam vitae suscipit blanditiis, vero dolorem quidem facilis necessitatibus maxime quaerat. Sint repellendus alias animi harum enim, accusamus molestias quo mollitia. Voluptatibus natus eum sit laborum, neque accusantium praesentium aperiam officiis maxime! Soluta mollitia, explicabo officia doloribus quaerat minima? Facilis earum mollitia fugit, tempora cumque autem blanditiis quis nobis.</p> 


Post::find(3)->update(['title'=>'Judul Ketiga v2'])

Post::where('title','Judul Ketiga v2')->update(['excerpt'=>'Excerpt Ketiga berubah'])

Post::create([
    'title'=>'Judul Keempat',
    'category_id'=>'3',
    'slug'=>'judul-programming-keempat',    
    'excerpt'=>'Lorem ipsum keempat',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore exercitationem nam beatae provident natus nostrum consequuntur! Perspiciatis, autem quo? Maxime natus assumenda illum velit repellendus amet corrupti et provident, quam sunt, ex, necessitatibus rem magni similique? Ut aliquam fugit quaerat laborum numquam inventore doloremque qui architecto atque optio maxime laboriosam totam impedit debitis dolorem consequatur, ea hic. Cumque ullam distinctio optio vero laborum consequatur doloribus necessitatibus temporibus ut eaque praesentium porro ipsum nemo, atque, modi et rem error velit est, expedita fugit. </p><p>Deleniti accusantium corrupti quas obcaecati facilis unde reiciendis. Amet assumenda modi aliquam veniam fugit voluptatibus laboriosam, nostrum iure, vero corporis atque debitis cupiditate! Tempora nisi corporis provident sed, ut porro facilis animi vitae reiciendis molestiae repudiandae, veritatis dolores excepturi vel. Corrupti consectetur, aliquid quidem optio in repudiandae inventore tempora odit et quas voluptates doloremque nulla dicta tenetur ullam rem expedita voluptatem enim dolor? Pariatur, nesciunt deleniti! Porro quaerat quia quod reiciendis voluptate harum vel dolorem iste sapiente, ea excepturi dolore quis necessitatibus modi rerum corrupti obcaecati cupiditate nulla qui consequuntur laborum animi vero ipsam? Dolorem rerum unde odit id nemo accusamus, dignissimos ut numquam vero maxime sed sint. Ex officiis aut dolore quibusdam aliquam ipsum eaque rerum id.</p>'
])

// tombol cari di controller
    public function index()
    {
        $posts= Post::latest();

        if (request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => $posts->get(),
        ]);
    }