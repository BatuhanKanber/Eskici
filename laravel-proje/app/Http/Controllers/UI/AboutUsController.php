<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Category;
use App\Models\User;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    public function index(Card $card): View
    {
        $user = new User();
        $categories = Category::all()->where("is_active", true);
        $details = $card->details;
        return view("ui.about_us.index", ["categories" => $categories, "details" => $details, "card" => $card, "user" => $user]);
    }
}
