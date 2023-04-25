<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\MealPlanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function mealPlanning() {
        $id = Auth::id();
        $meal = MealPlanning::where('user_id', $id)
                        ->orderBy('created_at', 'desc')
                        ->first();

        return view('member.meal', compact('meal'));
    }

    public function profile() {
        return view('member.profile');
    }
}