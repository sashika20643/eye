<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\FcatController;
use App\http\Controllers\Admin\ColorController;

use App\http\Controllers\HomeController;

use App\http\Controllers\Admin\LenseController;
use App\http\Controllers\Admin\FrameController;
use App\http\Controllers\shop\PageController;
use App\http\Controllers\shop\CartController;





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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    route::get('/home',[HomeController::class,'redirect']);

    Route::get('/dashboard', function () {
        return redirect('/admin');
        return view('dashboard');
    })->name('dashboard');

Route::prefix('admin')->middleware([
  'isAdmin'
])->group(function () {
//...........................admin.............

    Route::get('/', function () {
        return view('Admin.pages.index');
    });
    //.....................category......
Route::prefix('catagories')->group(function () {
    route::get('/',[FcatController::class,'catagories'])->name('catagories');
    route::post('/create',[FcatController::class,'CreateCatagory'])->name('AddCatagory');
    route::get('/delete/{id}',[FcatController::class,'DeleteCatagory'])->name('DeleteCatagory');
});
//....................Frames...........................
Route::prefix('frame')->group(function () {
route::get('/addview',[FrameController::class,'AddProductview'])->name('addframeview');
route::post('/add',[FrameController::class,'addproduct'])->name('addframe');
route::get('/all',[FrameController::class,'allproductview'])->name('allframe');
route::get('/delete/{id}',[FrameController::class,'DeleteProduct'])->name('Deleteframe');
route::get('/edit/{id}',[FrameController::class,'EditProduct'])->name('Editframe');
route::post('/update',[FrameController::class,'updateproduct'])->name('updateframe');
route::post('/search',[FrameController::class,'searchp'])->name('searchframe');
});

//....................Color................................
Route::prefix('color')->group(function () {
    route::get('/',[ColorController::class,'catagories'])->name('Colorcatagories');
    route::post('/create',[ColorController::class,'CreateCatagory'])->name('AddColorCatagory');
    route::get('/delete/{id}',[ColorController::class,'DeleteCatagory'])->name('DeleteColorCatagory');
});

//............Lense.......................................
Route::prefix('lense')->group(function () {
    route::get('/addview',[LenseController::class,'AddProductview'])->name('addlenseview');
    route::post('/add',[LenseController::class,'addproduct'])->name('addlense');
    route::get('/all',[LenseController::class,'allproductview'])->name('alllense');
    route::get('/delete/{id}',[LenseController::class,'DeleteProduct'])->name('Deletelense');
    route::get('/edit/{id}',[LenseController::class,'EditProduct'])->name('Editlense');
    route::post('/update',[LenseController::class,'updateproduct'])->name('updatelense');
    route::post('/search',[LenseController::class,'searchp'])->name('searchlense');
    });

});


});




// ....................shop........................
//............................................................
//................................................................


route::get('/',[PageController::class,'index'])->name('shop.index');
route::get('/lenses/colorcontactlences',[PageController::class,'clens'])->name('shop.cllens');
route::get('/lenses/computerproductionglasses',[PageController::class,'cpglass'])->name('shop.cpglass');
route::get('/selectframes/{id}',[PageController::class,'selectframes'])->name('shop.selectframes');
route::get('/frames',[PageController::class,'frames'])->name('shop.frames');
route::post('/singleframe',[PageController::class,'singleframe'])->name('shop.singleframe');
route::post('/singleLens',[PageController::class,'singleLens'])->name('shop.singleLens');
route::get('/singleframepage/{id}',[PageController::class,'singleframepage'])->name('shop.singleframepage');
route::get('/singleLenspage/{id}',[PageController::class,'singleLenspage'])->name('shop.singleLenspage');



route::get('/processOrder/{id}',[PageController::class,'processOrder'])->name('shop.processOrder');

//...........................cart.....................

Route::prefix('cart')->group(function () {
    route::post('/addtocart/{id}',[CartController::class,'addtocart'])->name('shop.addcart');
    Route::get('/showcart', [CartController::class,'showcart'])->name('showcart');
    Route::get('/clearcart', [CartController::class,'clearCart'])->name('clearcart');
    Route::post('/cart/{itemId}/delete', [CartController::class, 'deleteCartItem'])->name('cart.delete');


});









