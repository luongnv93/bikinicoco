<?php namespace App\Http\Controllers;

use App\Dao\CartDao;
use App\Dao\UserData;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductGalery;
use App\Role;
use App\UserInfos;
use App\UserRole;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Input;
use Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {

        $categories = Category::all();
        $products = Product::all();
        $productNew = Product::orderBy('created_at', 'DESC')->limit(6)->get();
        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();
        $productBestsellers2 = Product::orderBy('listed_price', 'DESC')->limit(5)->get();

        // Cart
        $total = Cart::total();
        $count = Cart::count();
        $content = Cart::content();

        return view('client.index', [
            'categories' => $categories,
            'count' => $count,
            'products' => $products,
            'productNew' => $productNew,
            'productBestsellers' => $productBestsellers,
            'productBestsellers2' => $productBestsellers2,
            'cart_total' => $total,
            'cart_count' => $count,
            'cart_contents' => $content,
        ]);
    }

    public function getListProduct($slug)
    {

        $categories = Category::all();

        $category = Category::where('slug', $slug)->first();

        $products = Product::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(9);

        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(6)->get();

        // Cart
        $total = Cart::total();
        $count = Cart::count();
        $content = Cart::content();

        return view('client.list',
            [
                'categories' => $categories,
                'category' => $category,
                'products' => $products,
                'productBestsellers' => $productBestsellers,
                'cart_total' => $total,
                'cart_count' => $count,
                'cart_contents' => $content,
            ]
        );

    }

    public function getProductDetail($slug)
    {
        $categories = Category::all();

        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();

        $product = Product::where('slug', $slug)->first();

        $productGallery = ProductGalery::where('product_id', $product->id);
        $productAttribute = ProductAttribute::where('product_id', $product->id);

        // Cart
        $total = Cart::total();
        $count = Cart::count();
        $content = Cart::content();

        $order = new Order();

        $order->deleted = 0;
        $order->save();
        $newOrder = Order::find($order->id);

        if ($content) {
            foreach ($content as $item) {
                $item_id = $item->id;
                $item_quantity = $item->qty;
                $orderItems = new OrderItems();
                $orderItems->deleted = 0;
                $orderItems->order_id = $order->id;
                $orderItems->quantity = $item_quantity;
                $orderItems->product_id = $item_id;
                $orderItems->save();
            }
        }

        return view('client.detail',
            [
                'categories' => $categories,
                'product' => $product,
                'productBestsellers' => $productBestsellers,
                'productGallery' => $productGallery,
                'cart_total' => $total,
                'cart_count' => $count,
                'cart_contents' => $content,
            ]
        );
    }

    public function showCart()
    {

        $categories = Category::all();

        $productBestsellers = Product::orderBy('listed_price', 'ASC')->limit(5)->get();

        $total = Cart::total();
        $count = Cart::count();
        $content = Cart::content();

        return view('client.cart',
            [
                'categories' => $categories,
                'productBestsellers' => $productBestsellers,
                'cart_total' => $total,
                'cart_count' => $count,
                'cart_contents' => $content,
            ]
        );
    }

    public function checkout()
    {

        $categories = Category::all();

        $total = Cart::total();
        $count = Cart::count();
        $content = Cart::content();

        $order = new Order();

        $order->deleted = 0;
        $order->save();
        $newOrder = Order::find($order->id);

        $orderItems = null;

        if ($content) {
            foreach ($content as $item) {
                $item_id = $item->id;
                $item_quantity = $item->qty;
                $orderItems = new OrderItems();
                $orderItems->deleted = 0;
                $orderItems->order_id = $order->id;
                $orderItems->quantity = $item_quantity;
                $orderItems->product_id = $item_id;
                $orderItems->save();
            }
        }

        return view('client.checkout',
            [
                'categories' => $categories,
                'cart_total' => $total,
                'cart_count' => $count,
                'cart_contents' => $content,
                'new_order' => $newOrder,
                'order_details' => $orderItems
            ]
        );


    }


    //*************************CART********************
    public function postAddToCart()
    {
        return CartDao::postAddToCart();
    }

    public function getDeleteRow($rowId)
    {
        return CartDao::getDeleteRow($rowId);
    }

    public function postUpdateCart()
    {
        return CartDao::postUpdateCart();
    }

    public function postAddToCartCategory()
    {
        return CartDao::postAddToCartCategory();
    }

    public function paymenSuccess($orderid, $email, $first_name, $last_name, $phone, $address)
    {
        $order = Order::find($orderid);
        $order->first_name = $first_name;
        $order->last_name = $last_name;
        $order->email = $email;
        $order->phone = $phone;
        $order->address = $address;
        $order->deleted = 1;
        $order->save();

        return redirect('/');
    }

    public function getLogin()
    {
        return view('theme.login');
    }

//    LOGIN
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email', 'password' => 'required',
        ]);
        $users = User::with('roles')->where('email', '=', Input::get('email'))->first();
        $roles = $users->roles;
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

    public function getLogout()
    {
        Auth::logout();
        if (Session::has('isAdmin')) {
            Session::forget('isAdmin');
        }
        if (Session::has('isManager')) {
            Session::forget('isAdmin');
        }
        if (Session::has('isCustomer')) {
            Session::forget('isAdmin');
        }
        return redirect('login');

    }

    public function Test()
    {
        $file = File::get(base_path('resources\views\index.blade.php'));
        return response()->json($file);
    }
}
