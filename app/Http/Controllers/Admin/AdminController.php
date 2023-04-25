<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MealPlanning;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{

    public function user() {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return view('admin.show-user', compact('user'));
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'birthdate' => ['required'],
            'age' => ['required'],
            'gender' => ['required'],
            'contact' => ['required'],
            'address' => ['required'],
            'medical_condition' => ['required'],
            'allergy' => ['required'],
            'current_medication' => ['required'],
            'family_doctor' => ['required'],
            'doctors_phone' => ['required'],
            'guardian_name' => ['required'],
            'guardian_contact' => ['required'],
            'guardian_address' => ['required'],
            'membership_type' => ['required'],
            'membership_start' => ['required'],
            'membership_end' => ['required'],
        ]);

        $userData = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthdate' => $request->birthdate,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'address' => $request->address,
            'medical_condition' => $request->medical_condition,
            'allergy' => $request->allergy,
            'current_medication' => $request->current_medication,
            'family_doctor' => $request->family_doctor,
            'doctors_phone' => $request->doctors_phone,
            'guardian_name' => $request->guardian_name,
            'guardian_contact' => $request->guardian_contact,
            'guardian_address' => $request->guardian_address,
            'membership_type' => $request->membership_type,
            'membership_start' => $request->membership_start,
            'membership_end' => $request->membership_end
        ]);

        // event(new Registered($user));
        // // Auth::login($user);
        return redirect('admin/list-of-user');
    }

    // MEAL PLANNING
    public function storeMeal() {
        $meal = new MealPlanning();
        $meal->user_id = request('user_id');
        $meal->meal_1 = request('meal_1');
        $meal->meal_2 = request('meal_2');
        $meal->meal_3 = request('meal_3');
        $meal->meal_4 = request('meal_4');
        $meal->meal_5 = request('meal_5');
        $meal->meal_6 = request('meal_6');
        $meal->meal_7 = request('meal_7');
        $meal->meal_8 = request('meal_8');
        $meal->meal_9 = request('meal_9');
        $meal->meal_10 = request('meal_10');
        $meal->meal_11 = request('meal_11');
        $meal->meal_12 = request('meal_12');
        $meal->meal_13 = request('meal_13');
        $meal->meal_14 = request('meal_14');
        $meal->meal_15 = request('meal_15');
        $meal->meal_16 = request('meal_16');
        $meal->meal_17 = request('meal_17');
        $meal->meal_18 = request('meal_18');
        $meal->meal_19 = request('meal_19');
        $meal->meal_20 = request('meal_20');
        $meal->meal_21 = request('meal_21');
        $meal->meal_22 = request('meal_22');
        $meal->meal_23 = request('meal_23');
        $meal->meal_24 = request('meal_24');
        $meal->meal_25 = request('meal_25');
        $meal->save();

        return redirect()->route('admin.user')->with('success', 'Model created successfully.');
    }
}