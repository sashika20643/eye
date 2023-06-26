<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lense;
use RealRashid\SweetAlert\Facades\Alert;
class CartController extends Controller
{

    public function addtocart(Request $request,$id){
if($request->type=='lens'){
        $product=Lense::find($id);

        $cartItems = $request->session()->get('cart.items', []);

        // Check if the product already exists in the cart
        if (isset($cartItems[$id])) {
            // Increment the quantity if the product already exists
            $cartItems[$id]['quantity']++;
        } else {
            // Add the product with a quantity of 1 if it's not in the cart
            $cartItems[$id] = [
                'product' => $product,
                'quantity' => 1
            ];
        }

        // Store the updated cart items back in the session
        $request->session()->put('cart.items', $cartItems);

}

        Alert::success('Product Added successfully',"You have added product to cart");
        return redirect()->back();

            }

            public function showcart(Request $request){

                $cartItems = $request->session()->get('cart.items');

       return view('shop.pages.cart',compact('cartItems'));

            }


            public function DeleteCart($id){
                $cart=Cart::find($id);
                $cart->delete();
        Alert::success('Product deleted successfully',"You have removed product to cart");

                return redirect()->back();



            }

            public function Addqty($id){

                $cart=Cart::find($id);
                $product=Product::where('id',$cart->p_id)->first();

                if(0<$product->quantity){
                    $cart->quantity +=1;
                    $cart->total=$cart->price*$cart->quantity;
                    $product->quantity -=1;
                    $product->save();
                    $cart->save();
                }


                return redirect()->back();



            }
            public function Minqty($id){
                $cart=Cart::find($id);
                $product=Product::where('id',$cart->p_id)->first();
                if($cart->quantity>0){
                    $cart->quantity -=1;
                    $cart->total=$cart->price*$cart->quantity;
                    $product->quantity +=1;
                    $product->save();
                }


                $cart->save();
                return redirect()->back();



            }


            public function clearCart(Request $request)
{
    $request->session()->forget('cart.items');

    Alert::success('Cart Cleared', 'Your cart has been cleared.');
    return redirect()->back();
}
public function deleteCartItem(Request $request, $itemId)
{
    $cartItems = $request->session()->get('cart.items', []);

    if (isset($cartItems[$itemId])) {
        unset($cartItems[$itemId]);

        $request->session()->put('cart.items', $cartItems);

        Alert::success('Item Removed', 'The item has been removed from the cart.');
    } else {
        Alert::error('Item Not Found', 'The item you are trying to remove does not exist in the cart.');
    }

    return redirect()->back();
}

}
