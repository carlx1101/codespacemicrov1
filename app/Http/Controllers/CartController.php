<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($courseId)
    {
        $studentId = Auth::id();

        Cart::create([
            'student_id' => $studentId,
            'course_id' => $courseId,
        ]);

        return redirect()->back()->with('success', 'Course added to your cart.');
    }

    public function removeFromCart($cartId)
    {
        $cart = Cart::find($cartId);

        if ($cart && $cart->student_id == Auth::id()) {
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Course removed from your cart.');
    }

    public function viewCart()
    {
        $studentId = Auth::id();
        $cartItems = Cart::where('student_id', $studentId)->get();

        return view('cart', compact('cartItems'));
    }
}
