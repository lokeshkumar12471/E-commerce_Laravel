<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Checkout;
use App\Models\User;


class GuestLayout extends Component

{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public function render()
    {    $userdetails=User::get();
        $checkout = Checkout::get();
        $checkcount=Checkout::count();
        return view('layouts.guest',compact('checkout','checkcount','userdetails'));
    }

}