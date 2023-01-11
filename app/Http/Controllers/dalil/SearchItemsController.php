<?php

namespace App\Http\Controllers\dalil;

// session_start();

use App\Http\Controllers\Controller;
use App\Models\Adds;
use App\Models\Category;
use App\Models\Countries;
use App\Models\PinnedPages;
use App\Models\Sites;
use App\Models\sitting;
use Illuminate\Http\Request;

class SearchItemsController extends Controller
{

    public function search(Request $request)
    {
        $DataSittings = sitting::where("id", 1)->first();
        $all_pinned_page = PinnedPages::all();
        $cat = Category::where('category_name', 'LIKE', "%{$request->q}%")->get();
        $sitess = Sites::where('site_name', 'LIKE', "%{$request->q}%")->get();
        $country_namess = Countries::select('id', 'country_name','href' , 'country_flag')->where('show_status' , 1)->first();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        if ($request->q == "") {
            return view('errors.404',compact('country_names' , 'country_namess' , 'all_pinned_page'));
        }

        // dd($cat);
        if(count($cat) > 0){
            return view('dalil.search', compact('cat','country_namess', 'all_pinned_page', 'DataSittings' , 'country_names','get_about_waslat'));
        }
        else if(count($sitess) > 0){
            return view('dalil.search', compact('sitess', 'all_pinned_page', 'DataSittings' , 'country_names','get_about_waslat'));
        }
        else{
            // return view('dalil.search')->with('success' , 'sorry')
            //                             ->with('country_names' , $country_names);
            return view('errors.404' , compact('country_names' , 'country_namess' , 'all_pinned_page'));

        }

    }
}
