<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sites;
use App\Models\Tag;
use App\Models\Sites_tag;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Countries;
use Illuminate\Support\Facades\App;

class SitesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $tags = Tag::all();
        $showSites = Sites::where('confirmed' , 1)->latest()->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.sites.allDataSites' , compact('tags','showSites' , 'country_names'));
    }
    public function getSitesWithCountry($count_id){
        $country_namess = Countries::select('id', 'country_name', 'country_flag' , 'href')->where('id' , $count_id)->first();
        $sites_show = Sites::with('country')->where('countries_id' ,$count_id)->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.sites.allDataSites' , compact('sites_show','country_names','country_namess'));
    }
    public function create(Request $request)
    {
        $tags = Tag::all();
        // if($tags->count() == 0){
        //     return redirect()->route('tags.create');
        // }
        $categories = Category::select('id','category_name')->where('parent_id' , 0)->get();
        $countries =  Countries::all();
        // return $countries;
        return view('dash-board.sites.createSites' , compact(['tags','categories' , 'countries']));
    }
    public function getCate(Request $request){
        $country_id = $request->country_id;
        // dd($parent_id);
        $getCatt = Category::where('country_id' , $country_id)
                                ->where('parent_id' , 0)
                                ->get();
        return $getCatt;
        // return response()->json(['getCatt' => $getCatt]);
    }

    public function supCate(Request $request){
        $parent_id = $request->cat_id;
        // dd($parent_id);
        $supcategories = Category::where('id' , $parent_id)
                                ->with('supcategories')
                                ->get();
        // return $supcategories;
        return response()->json(['supcategories' => $supcategories]);
    }

















    // public function supCate(Request $request){
    //     $parent_id = $request->cat_id;
    //     // dd($parent_id);
    //     $supcategories = Category::where('id' , $parent_id)
    //                             ->with('supcategories')
    //                             ->get();
    //     return response()->json(['supcategories' => $supcategories]);
    // }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'site_name'     => 'required',
            'href'          => 'required|unique:sites,href',
            'title'         => 'required',
            // 'name'          => 'required',
            'description'   => 'required',
            'countries_id'  => 'required',
            // 'keyword'       => 'required'
            // 'tags'          => 'required'
        ]);

        $mydataSites = Sites::create([
            'site_name'     =>$request->input('site_name'),
            'href'          =>$request->input('href'),
            'title'         =>$request->input('title'),
            'description'   =>$request->input('description'),
            'countries_id'  =>$request->countries_id,
            'keyword'       =>$request->input('keyword'),
            // 'tags'          =>$request->input('tags'),
            'facebook'      =>$request->input('facebook'),
            'twitter'       =>$request->input('twitter'),
            'instagram'     =>$request->input('instagram'),
            'snapchat'      =>$request->input('snapchat'),
            'youtube'       =>$request->input('youtube'),
            'telegram'      =>$request->input('telegram'),
            'android'       =>$request->input('android'),
            'ios'           =>$request->input('ios'),
            'subcategories' =>$request->subcategory? $request->subcategory : 0,
            'category_id'   =>$request->category ? $request->category : 0
        ]);
        // $tagg = [];
        foreach(explode(',' , $request->tags) as $tagss){
            $taggs = Tag::create([
                'name' => $tagss,
            ]);
            $mydataSites->tags()->attach($taggs);
        }




        // $mydataSites->tags()->attach($request->name);

        return redirect()->route('sites.main')
            ->with('success' , 'Successfuly added data');
    }
    // public function show($id)
    // {
    //     $sites = Sites::find($id);
    //     return view('dash-board.sites.showdetailsSites' , compact('sites'));
    // }

    public function toShowSites(){
        $tags = Tag::all();
        $showSites = Sites::where('confirmed', 0)->get();
        $country_names = Countries::select('id', 'country_name','href', 'country_flag')->get();
        return view('dash-board.waiting.waitList' , compact('tags','showSites' , 'country_names'));
        // dd("hello");
    }
    public function apply($id){
        $sitesWithStatusFalse = Sites::find($id);
        // $showallSites = Company::where('status',0)->get();
        // $sitesWithStatusFalse->confirmed = 1;
        Sites::where('id',$id)->select('confirmed')->update(['confirmed'=> 1]);
        // $sitesWithStatusFalse->update();
        return redirect()->back()
            ->with('success' , 'تمت الموافقة');
    }

    public function edit(Sites $sites,$id)
    {
        $tags = Tag::all();
        $sites = Sites::with('tags')->find($id);
        // $categories = Category::where('parent_id',0)->get();
        $categories = Category::select('id','category_name')->where('parent_id' , 0)->get();
        $scategories = Category::where('parent_id'  , '!=' , 0)->get();
        $countries =  Countries::all();


        return view('dash-board.sites.editSites' , compact(['scategories' , 'tags' , 'sites' , 'categories' , 'countries']));
    }
    public function update(Request $request, $id)
    {
        $sites = Sites::find($id);
        // dd($sites);
        $request->validate([
            'site_name'     => 'required',
            'href'          => 'required',
            'title'         => 'required',
            'description'   => 'required',
            'countries_id'  => 'required',
            // 'keyword'       => 'required',
            // 'tags'          => 'required',
            // 'facebook'      => 'required',
            // 'twitter'       => 'required',
            // 'instagram'     => 'required',
            // 'snapchat'      => 'required',
            // 'youtube'       => 'required',
            // 'telegram'      => 'required',
            // 'android'       => 'required',
            // 'ios'           => 'required'
        ]);
            $get_tags_id = Sites_tag::where('sites_id' , $sites->id)->get();
            if(count($get_tags_id) > 0){
                foreach($get_tags_id as $tag_id){
                    Tag::where('id' , $tag_id->tag_id)->delete();
                    Sites_tag::where('sites_id' , $sites->id)->delete();
                }
                

            }
            foreach(explode(',' , $request->tags) as $tagss){

                $taggs = Tag::create([
                    'name' => $tagss,
                ]);
                $sites->tags()->attach($taggs);
            }

            $sites->site_name    = $request->site_name;
            $sites->href         = $request->href;
            $sites->title        = $request->title;
            $sites->description  = $request->description;
            $sites->countries_id = $request->countries_id;
            $sites->keyword      = $request->keyword;
            // $sites->tags         = $request->tags;
            $sites->facebook     = $request->facebook;
            $sites->twitter      = $request->twitter;
            $sites->instagram    = $request->instagram;
            $sites->snapchat     = $request->snapchat;
            $sites->youtube      = $request->youtube;
            $sites->telegram     = $request->telegram;
            $sites->android      = $request->android;
            $sites->ios          = $request->ios;
            // $sites->tags()->sync($request->name);

            $sites->update();
        return redirect()->route('sites.main')
            ->with('success' , 'Successfuly updated data');

    }
    public function destroy(Sites $sites, $id)
    {
        $sites = Sites::find($id);
        $get_tags_id = Sites_tag::where('sites_id' , $sites->id)->get();
            if(count($get_tags_id) > 0){
                foreach($get_tags_id as $tag_id){
                    Tag::where('id' , $tag_id->tag_id)->delete();
                    Sites_tag::where('sites_id' , $sites->id)->delete();
                }
                

            }
        $sites->delete();

        return redirect()->route('sites.main')
            ->with('success' , 'Successfuly deleted data');
    }
}
