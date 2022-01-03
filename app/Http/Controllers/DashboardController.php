<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;




//Class created to manage which dashboard show to which type of user
class DashboardController extends Controller
{
    public function page() {
        //if(Auth::user()->hasRole('administrator')){
            return Inertia::render('adminDashboard');
        //}// elseif(Auth::user()->hasRole('customer')){
           // return Inertia::render('Dashboard');
                

    }
//Function created to call the view of user management
    public function users_management(){
        return Inertia::render('users_management');
            }
}
