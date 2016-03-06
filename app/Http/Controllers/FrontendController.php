<?php namespace App\Http\Controllers;
use App\Dao\CartDao;
use App\Dao\ThemeOptionDao;
use App\Dao\UserData;
use App\Models\CategoriesArticle;
use App\Models\Category;
use App\Models\CategoryCustom;
use App\Models\Consult;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\Product;
use App\Models\ProductGalery;
use App\Models\ProductRate;
use App\Models\Script;
use App\Models\Slide;
use App\Role;
use App\UserInfos;
use App\UserRole;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Input;
use Session;
use Illuminate\Support\Facades\Response;
use App\Dao\UserDao;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class FrontendController extends Controller {

    public function index(){
        $count = Cart::count();
        $categories  = Category::all();

        $products = Product::all();
//        $scripts = Script::all();
//        $slides = Slide::all();

        $productNew = Product::orderBy('created_at', 'DESC')->limit(6)->get();
        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();
        $productBestsellers2 = Product::orderBy('listed_price', 'DESC')->limit(5)->get();

        return view('client.index',[
            'categories'=>$categories,
            'count'=>$count,
            'products' => $products,
            'productNew' => $productNew,
            'productBestsellers' => $productBestsellers,
            'productBestsellers2' => $productBestsellers2,
//            'scripts'=>$scripts,
//            'slides'=>$slides
        ]);
    }

    public function getListProduct($slug)
    {

        $categories = Category::all();

        $category = Category::where('slug', $slug)->first();

        $products = Product::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(9);

        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();

//        dd($products);

        return view('client.list',
            [
                'categories' => $categories,
                'category' => $category,
                'products' => $products,
                'productBestsellers' => $productBestsellers,
            ]
        );

    }

    public function getProductDetail($slug) {
        $categories = Category::all();

        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();

        $product = Product::where('slug', $slug)->first();

        $productGallery = ProductGalery::where('product_id', $product->id);

        return view('client.detail',
            [
                'categories' => $categories,
                'product' => $product,
                'productBestsellers' => $productBestsellers,
                'productGallery' => $productGallery,
            ]
        );
    }




    //*************************CART********************
//    public function postAddToCart(){
//        return CartDao::postAddToCart();
//    }
//
//    public function getDeleteRow($rowId){
//        return CartDao::getDeleteRow($rowId);
//    }
//    public function postUpdateCart(){
//        return CartDao::postUpdateCart();
//    }
//    public function postAddToCartCategory(){
//        return CartDao::postAddToCartCategory();
//    }
//    //***************************  RATING AND COMMENT*****************
//    public function postAddRateProduct(){
//        $rate = new ProductRate;
//        $rate->product_id = Input::get('product_id');
//        $rate->email = Input::get('email');
//        $rate->name = Input::get('name');
//        $rate->rate = Input::get('rate');
//        $rate->content  = Input::get('content');
//        $rate->save();
//        return response()->json([
//            'msg'=>'Thêm đánh giá thành công !'
//        ]);
//    }
//    public function postAddCommentPost(){
//    $comment = new PostComment;
//    $comment->post_id = Input::get('post_id');
//    $comment->name = Input::get('name');
//    $comment->email = Input::get('email');
//    $comment->content = Input::get('content');
//    $comment->save();
//    return response()->json([
//        'msg'=>'Thêm bình luận thành công !'
//    ]);
//
//}
//    public function paymenSuccess($orderid,$email,$first_name,$last_name,$phone){
//    $order = Order::find($orderid);
//    $order->first_name = $first_name;
//    $order->last_name = $last_name;
//    $order->email = $email;
//    $order->phone = $phone;
////    $order->address = Input::get('address');
////    $order->note = Input::get('note');
////    $order->order_method = Input::get('order_method');
////    $order->total = Cart::total();
////    $order->city = Input::get('city');
//    $order->deleted = 1;
//    $order->save();
//
//    return redirect('/');
//}
//    //***********************ORDER*********************
//    public function postSaveOrder(){
//        $order = new Order;
//        $order->first_name = Input::get('first_name');
//        $order->last_name = Input::get('last_name');
//        $order->email = Input::get('email');
//        $order->phone = Input::get('phone');
//        $order->address = Input::get('address');
//        $order->note = Input::get('note');
//        $order->order_method = Input::get('order_method');
//        $order->total = Cart::total();
//        $order->city = Input::get('city');
//        $order->save();
//        $carts = Cart::content();
//        foreach($carts as $cart){
//            $order_item = new OrderItems;
//            $order_item->order_id = $order->id;
//            $order_item->product_id = $cart->id;
//            $order_item->quantity = $cart->qty;
//            $order_item->save();
//        }
//        $check = Order::where('id','=',$order->id)->count();
//        if($check >0){
//            $order = Order::with('order_items')->where('id','=',$order->id)->first();
//            $data = array(
//                'success'=>1,
//                'first_name'=>$order->first_name,
//                'last_name'=>$order->last_name,
//                'email'=>$order->email,
//                'phone'=>$order->phone,
//                'address'=>$order->address,
//                'city'=>$order->city,
//                'note'=>$order->note,
//                'order_method'=>$order->order_method,
//                'total'=>$order->total,
//                'order_items'=>$order->order_items
//
//            );
//            Cart::destroy();
//            return response()->json($data);
//        }
//        else{
//            return response()->json(['success'=>0]);
//        }
//    }
//    public function postCreateConsult(){
//        $consult = new Consult;
//        $consult->title = Input::get('title');
//        $consult->full_name = Input::get('full_name');
//        $consult->phone = Input::get('phone');
//        $consult->email = Input::get('email');
//        $consult->address = Input::get('address');
//        $consult->date = Input::get('date');
//        $consult->content = Input::get('content');
//        DB::beginTransaction();
//        try {
//            $consult->save();
//            DB::commit();
//            return response()->json([
//                'success'=>'1',
//                'msg'=>'Chúc mừng bạn đã đặt lịch tư vấn thành công'
//            ]);
//        } catch (\Exception $e) {
//            DB::rollback();
//            return response()->json([
//                'success'=>'0',
//                'msg'=>'Bạn đặt lịch không thành công xin thử lại!'
//            ]);
//        }
//    }
//    public function postCreateContact(){
//        $contact = new Contact;
//        $contact->first_name = Input::get('first_name');
//        $contact->last_name = Input::get('last_name');
//        $contact->email = Input::get('email');
//        $contact->phone = Input::get('phone');
//        $contact->subject = Input::get('subject');
//        $contact->content = Input::get('content');
//        DB::beginTransaction();
//        try {
//            $contact->save();
//            DB::commit();
//            return response()->json([
//                'success'=>'1',
//                'msg'=>'Chúng tôi đã nhận được yêu cầu của bạn, chúng tôi sẽ liên hệ với bạn sớm nhất có thể!'
//            ]);
//        } catch (\Exception $e) {
//            DB::rollback();
//            return response()->json([
//                'success'=>'0',
//                'msg'=>'Bạn gửi yêu cầu không thành công xin thử lại!'
//            ]);
//        }
//    }


    public function Test(){
        $file = File::get(base_path('resources\views\index.blade.php'));
        return response()->json($file);
    }



    public function getLogin(){
        return view('theme.login');
    }
//    LOGIN
    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);
        $users= User::with('roles')->where('email','=',Input::get('email'))->first();
        $roles =  $users->roles;
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))) {
            foreach ($roles as $role) {
                if ($role->permission == 100) {
                    Session::put('isAdmin', 'Welcome Admin');
                    return Redirect::intended('admin/dashboard');
                }
                if ($role->permission == 80) {
                    Session::put('isShopManager', 'Welcome Shop Manager');
                    return Redirect::intended('admin/dashboard');
                }
                if ($role->permission == 60) {
                    Session::put('isArticleManager', 'Welcome Article Manager');
                    return Redirect::intended('admin/dashboard');
                }
                if ($role->permission == 10) {
                    Session::put('isCustomer', 'Welcome Customer');
                }
            }
        }
        return redirect('login')
            ->withInput($request->only('email', 'remember'))
            ->withErrors([
                'email' => 'Email or password not incorrect!'
            ]);
    }
    public function getLogout(){
        Auth::logout();
        if(Session::has('isAdmin')){
            Session::forget('isAdmin');
        }
        if(Session::has('isManager')){
            Session::forget('isAdmin');
        }
        if(Session::has('isCustomer')){
            Session::forget('isAdmin');
        }
        return redirect('login');

    }
}
