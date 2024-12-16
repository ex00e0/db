<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){return view('index');})->name('index');
Route::get('/q1_products', function(){
    $cat = DB::table('categories')->select('*')->get();
    return view('q1_products', ['categories' => $cat]);})->name('q1_products');
Route::get('/q1_couriers', function(){return view('q1_couriers');})->name('q1_couriers');
Route::get('/q1_categories', function(){return view('q1_categories');})->name('q1_categories');
Route::get('/q1_users', function(){return view('q1_users');})->name('q1_users');
Route::get('/q1_users', function(){return view('q1_users');})->name('q1_users');


Route::get('/q2', function(){
    $query2 = DB::table('products')->select('products.*')->get();
    return view('q2', ['q'=>$query2]);})->name('q2');
Route::get('/q3', function(){
    $query3 = DB::table('products')->select('products.*')->where('discount', '>', '20')->get();
    return view('q3', ['q'=>$query3]);})->name('q3');
Route::get('/q4', function(){
    $query4 = DB::table('products')->select('products.*')->where('new', '=', 'yes')->get();
    return view('q4', ['q'=>$query4]);})->name('q4');
Route::get('/q5', function(){
    $query5 = DB::table('products')->select('products.*')->where('compound', 'LIKE', '%шерсть%')->get();
    return view('q5', ['q'=>$query5]);})->name('q5');
Route::get('/q6', function(){
    $query6 = DB::table('products')->select('products.*')->where('weight', '<', '200')->get();
    return view('q6', ['q'=>$query6]);})->name('q6');
Route::get('/q7', function(){
    $category_id = DB::table('categories')->select('id')->where('name', '=', 'Овощи')->get()[0]->id;
    $query7 = DB::table('products')->select('products.*')->where('category_id', '=', $category_id)->get();
    return view('q7', ['q'=>$query7]);})->name('q7');
Route::get('/q8', function(){
    $query8 = DB::table('categories')->select('categories.*')->orderBy('name', 'ASC')->get();
    return view('q8', ['q'=>$query8]);})->name('q8');
Route::get('/q9', function(){
    $query9 = DB::table('users')->where('role', '=', 'user')->update(['role'=> 'client']);  
    return back()->withErrors(['message'=>'Роли изменены']);})->name('q9');
Route::get('/q10', function(){
    $query10 = DB::table('couriers')->select('couriers.*')->where('name', 'LIKE', '%иван')->get();
    return view('q10', ['q'=>$query10]);})->name('q10');
Route::get('/q11', function(){
    $query11 = DB::table('couriers')->select('couriers.*')->where('status', '=', 'Свободен')->get();
    return view('q11', ['q'=>$query11]);})->name('q11');
Route::get('/q12', function(){
    $query12 = DB::table('couriers')->where('status', '=', 'Занят')->update(['status'=> 'Свободен']);
    return back()->withErrors(['message'=>'Статус курьеров изменен']);})->name('q12');

Route::get('/q13', function(){
    $query13 = DB::table('products')->select('products.*')->where('weight', '=', 200)->where('date_remove', '=', NULL)->get();
    return view('q13', ['q' => $query13]);})->name('q13');
Route::get('/q14', function(){
    $query14 = DB::table('categories')->select("categories.*", DB::raw("count(products.id) as how_much"))->join('products', 'categories.id', '=', 'products.category_id', 'left outer')->groupBy('categories.id')->get();
    return view('q14', ['q' => $query14]);})->name('q14');
Route::get('/q15', function(){
    $query15 = DB::table('products')->select("products.*", DB::raw("count(order_products.id) as how_much"))->join('order_products', 'products.id', '=', 'order_products.product_id', 'left outer')->groupBy('products.id')->orderBy( DB::raw("count(order_products.id)"), 'DESC')->get();
    return view('q15', ['q' => $query15]);})->name('q15');
Route::get('/q16', function(){
    $query16 = DB::table('products')->select("products.*", DB::raw("count(order_products.id) as how_much"))->join('order_products', 'products.id', '=', 'order_products.product_id', 'left outer')->groupBy('products.id')->having(DB::raw("count(order_products.id)"), '>', 1)->get();
    return view('q16', ['q' => $query16]);})->name('q16');
Route::get('/q17', function(){
    $query17 = DB::table('categories')->select("categories.*", DB::raw("sum(products.current_price) as how_much"))->join('products', 'categories.id', '=', 'products.category_id', 'left outer')->groupBy('categories.id')->get();
    return view('q17', ['q' => $query17]);})->name('q17');
Route::get('/q18', function(){
    $query18 = DB::table('products')->select('products.*')->orderBy('products.current_price', 'DESC')->limit(5)->get(); 
    return view('q18', ['q' => $query18]);})->name('q18');
Route::get('/q19', function(){
    $query19 = DB::table('products')->select('products.*', DB::raw('count(order_products.product_id)'))->join('order_products', 'products.id', '=', 'order_products.product_id', 'left outer')->groupBy('products.id')->having(DB::raw('count(order_products.product_id)'), '=', 0)->get(); 
    return view('q19', ['q' => $query19]);})->name('q19');
Route::get('/q20', function(){
    $query20 = DB::table('orders')->select(DB::raw("(count(CASE 
    WHEN created_at <= '2024-12-31' AND created_at >= '2024-12-01' THEN 1 
    ELSE NULL 
    END)) as december"), DB::raw("
    (count(CASE 
    WHEN created_at <= '2024-11-30' AND created_at >= '2024-11-01' THEN 1 
    ELSE NULL 
    END)) as november, 
    (count(CASE 
    WHEN created_at <= '2024-10-31' AND created_at >= '2024-10-01' THEN 1 
    ELSE NULL 
    END)) as 'october',  
    (count(CASE 
    WHEN created_at <= '2024-09-30' AND created_at >= '2024-09-01' THEN 1 
    ELSE NULL 
    END)) as 'september',  
    (count(CASE 
    WHEN created_at <= '2024-08-31' AND created_at >= '2024-08-01' THEN 1 
    ELSE NULL 
    END)) as 'august',  
    (count(CASE 
    WHEN created_at <= '2024-07-31' AND created_at >= '2024-07-01' THEN 1 
    ELSE NULL 
    END)) as 'july',  
    (count(CASE 
    WHEN created_at <= '2024-06-30' AND created_at >= '2024-06-01' THEN 1 
    ELSE NULL 
    END)) as 'june',  
    (count(CASE 
    WHEN created_at <= '2024-05-31' AND created_at >= '2024-05-01' THEN 1 
    ELSE NULL 
    END)) as 'may',  
    (count(CASE 
    WHEN created_at <= '2024-05-31' AND created_at >= '2024-04-01' THEN 1 
    ELSE NULL 
    END)) as 'april',  
    (count(CASE 
    WHEN created_at <= '2024-03-31' AND created_at >= '2024-03-01' THEN 1 
    ELSE NULL 
    END)) as 'march',  
    (count(CASE 
    WHEN created_at <= '2024-02-29' AND created_at >= '2024-02-01' THEN 1 
    ELSE NULL 
    END)) as 'february',  
    (count(CASE 
    WHEN created_at <= '2024-01-31' AND created_at >= '2024-01-01' THEN 1 
    ELSE NULL 
    END)) as 'january'"))->get(); 
    return view('q20', ['q' => $query20]);})->name('q20');
Route::get('/q21', function(){
    $query21 = DB::table('orders')->select(DB::raw('avg(orders.sum) as how_much'))->where('created_at', '<=', '2024-12-31')->where('created_at', '>=', '2024-10-01')->get(); 
    return view('q21', ['q' => $query21]);})->name('q21');
Route::get('/q22', function(){
    $query22 = DB::table('products')->select('categories.*', DB::raw('avg(products.current_price) as how_much'))->join('categories', 'products.category_id', '=', 'categories.id', 'left outer')->groupBy('categories.id')->get(); 
    return view('q22', ['q' => $query22]);})->name('q22');
Route::get('/q23', function(){
    $query23 = DB::table('products')->select('products.*')->orderBy('products.current_price', 'DESC')->get(); 
    return view('q23', ['q' => $query23]);})->name('q23');
Route::get('/q24', function(){
    $query24 = DB::table('orders')->select("couriers.name as c_name", DB::raw('count(orders.id) as how_much'))->join('couriers', 'couriers.id', '=', 'orders.courier_id', 'left outer')->where('courier_id', '=', 1)->where('orders.created_at', '<=', '2024-12-31')->where('orders.created_at', '>=', '2024-12-01')->groupBy('couriers.id')->get();
    return view('q24', ['q' => $query24]);})->name('q24');

Route::post('/create_category', [PageController::class, 'create_category'])->name('create_category');
Route::post('/create_product', [PageController::class, 'create_product'])->name('create_product');
Route::post('/create_user', [PageController::class, 'create_user'])->name('create_user');
Route::post('/create_courier', [PageController::class, 'create_courier'])->name('create_courier');