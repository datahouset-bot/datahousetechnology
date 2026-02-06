<?php

namespace App\Http\Controllers;

use App\Models\itemgroup;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //

    public function show_secondindexpage()
    { $itemgroup = itemgroup::where('head_group', '=', 'nav')->get();
        return view ('second_index', compact('itemgroup'));

    }
    public function freetrial()
    {
        $itemgroup = itemgroup::where('head_group', '=', 'nav')->get();
        return view('frontui.frontpartials.freetrial', compact('itemgroup'));
    }

       public function accounting()
    {
        $itemgroup = itemgroup::where('head_group', '=', 'nav')->get();
        return view('frontui.frontpartials.accounting', compact('itemgroup'));
    }
        public function accountingguide()
    {
        $itemgroup = itemgroup::where('head_group', '=', 'nav')->get();
        return view('frontui.frontpartials.accountingguide', compact('itemgroup'));
    }
        public function financialaccounting()
    {

        return view('frontui.frontpages.financialaccounting');
    }
        public function auto_eway_bill()
    {

        return view('frontui.frontpages.autoebill');
    }
}
