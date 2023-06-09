<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardDetails;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CardController extends Controller
{
    public function index(): View
    {

        $card = $this->getOrCreateCard();
        $categories = Category::all()->where("is_active", true);
        $cardDetails = $card->details;
        $subTotal = 0;
        foreach ($cardDetails as $detail) {
            $subTotal += $detail->product->price * $detail->quantity;
        }
        $user = new User();
        return view("ui.card.index", ["card" => $card, "categories" => $categories, "user" => $user, "subTotal" => $subTotal]);
    }

    /**
     *
     * Lists the cart content
     *
     * @return Card
     */
    private function getOrCreateCard(): Card
    {
        $user = Auth::user();
        $card = Card::firstOrCreate(
            ['user_id' => $user->user_id, 'is_active' => true],
            ['code' => Str::random(8)]
        );
        return $card;
    }

    /**
     * Add product as cart detail
     *
     * @param Product $product
     * @param int $quantity
     * @return RedirectResponse
     */
    public function add(Product $product, int $quantity = 1): RedirectResponse
    {
        $card = $this->getOrCreateCard();
        $card->details()->create(["product_id" => $product->product_id,
            "quantity" => $quantity,]);
        return back();
    }

    /**
     *
     * Remove cart detail from cart
     *
     * @param CardDetails $cardDetails
     * @return RedirectResponse
     */
    public
    function remove(CardDetails $cardDetails): RedirectResponse
    {
        $cardDetails->delete();
        return back();
    }
}
