<?php

namespace App\Http\Controllers\dalil;
// session_start();
use App\Http\Controllers\Controller;
use App\Models\Adds;
use App\Models\Category;
use App\Models\sitting;
use App\Models\Countries;
use App\Models\FixedSites;
use App\Models\PinnedPages;
use App\Models\Sites;
use App\Models\Tag;
use App\Models\Sites_tag;
use Illuminate\Support\Facades\DB;
use Prophecy\Exception\Doubler\ReturnByReferenceException;
use Illuminate\Http\Request;
class dalilController extends Controller
{
    public function HomePage(Request $request)
    {

        $DataSittings = sitting::where("id", 1)->first();
        $country_namess = Countries::select('id', 'country_name','href' , 'country_flag')->where('show_status' , 1)->first();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        $fixed_sites = Countries::with('fixedsite')->where('show_status' , 1)->get();
        $check_isEmpty = Countries::with('fixedsite')->where('show_status' , 1)->first();
        // dd($check_isEmpty);
        // $category = Category::with('sites' , 'country')->where('parent_id', 0)->where('show_status' , 1)->get();
        $category = Countries::with('sites' , 'category')->where('show_status' , 1)->get();
        // dd($category);
        $all_pinned_page = PinnedPages::all();
        $ddd = Countries::select('show_status' , 'title')->where('show_status' , 1)->first();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        // dd($category);
        return view('dalil.index', compact(['check_isEmpty','get_about_waslat','ddd','DataSittings', 'country_names' , 'country_namess', 'fixed_sites', 'category' , 'all_pinned_page']));

    }



########################################## هنا قمنا ببرمجة الدولة بحيث يظهر محتوى لكل دولة ###########################################

    public function getReload($href){
        $all_pinned_page = PinnedPages::all();
        $category_two = Countries::with('category' , 'sites')->where('href' ,$href)->get();
        $DataSittings = sitting::where("id", 1)->first();
        // $country_names = Countries::select('id', 'country_name' ,'href')->get();
        $country_names = DB::table('countries')->select('id' , 'country_name' , 'country_flag' , 'href')->get();
        $fixed_sites = Countries::with('fixedsite')->where('href' ,$href)->get();
        $check_isEmpty = Countries::with('fixedsite')->where('href' , $href)->first();
// dd($category_two);

        $testt = Countries::select('id','title' , 'description' , 'keyword')->where('href' ,$href)->first();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        $country_namess = Countries::select('id', 'country_name', 'country_flag' , 'href')->where('href' , $href)->first();


        return view('dalil.index', compact(['check_isEmpty','country_namess','get_about_waslat','testt','DataSittings','country_names', 'fixed_sites', 'category_two' , 'all_pinned_page']));
    }


    public function showSubCats($href,$country_href,$id){
        $all_pinned_page = PinnedPages::all();
        $DataSittings = sitting::where("id", 1)->first();
        $country_names = Countries::select('id', 'country_name' , 'country_flag' , 'href')->get();
        // $subcats = Category::with('sites' , 'country')->where('href', $href_category)->get();
        $get_Category = Category::with('sites' , 'country')->where('id' , $id)->get();
        
        // dd($get_Category[0]->category()->where('href' , 'News')->get());
        
        // dd($get_Category);
        $test = Sites::where('category_id' ,  $id)->where('confirmed' , 1)->get();

        $country_namess = Countries::with('category')->where('href' , $href)->first();
        $titlee = Category::select('id','title')->where('id' , $id)->first();
        $testt = Countries::select('id','title' , 'description' , 'keyword')->where('href' ,$href)->first();
        // dd($titlee);
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        // dd($country_namess);
        return view('dalil.supcategoryPage' , compact(['testt','titlee','country_namess','test','get_about_waslat','get_Category', 'country_names', 'DataSittings', 'all_pinned_page']));
    }

    public function about($href , $id){
        // $findIdd = PinnedPages::findOrFail($id);
        $all_pinned_page = PinnedPages::all();
        $get_content = PinnedPages::select('id' , 'page_name', 'href' , 'content')->where('href' , $href)->get();
        $DataSittings = sitting::where("id", 1)->first();
        $country_names = Countries::select('id', 'country_flag' , 'country_name' , 'href')->get();
        // return $all_pinned_page;
        $title_about = PinnedPages::select('id' , 'title')->where('id', $id)->first();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        $country_namess = Countries::select('id', 'country_name','href')->where('id' , $id)->first();
        return view('dalil.about' , compact(['country_namess','get_about_waslat','title_about','country_names' , 'all_pinned_page' , 'DataSittings' , 'get_content']));
    }

    public function showDescr($href,$id){

        $DataSittings = sitting::where("id", 1)->first();
        $country_names = Countries::select('id', 'country_name', 'country_flag' , 'href')->get();
        $all_pinned_page = PinnedPages::all();
        $get_site_descr = Sites::with('country' , 'category' , 'tags')->select('id' , 'site_name' , 'href' , 'title'  ,'description', 'keyword' ,'category_id', 'countries_id' , 'facebook' , 'twitter' , 'instagram' , 'telegram')->where('id' , $id)->where('confirmed' , 1)->get();
        $get_site_descrr = Sites::with('country' , 'category')->select('id' , 'href' , 'title')->where('id' , $id)->where('confirmed' , 1)->first();
        
        
        $get_tags = Sites::with('tags')->where('id' , $id)->first();
        // dd($ff);
        $scategories = Category::where('parent_id'  , '!=' , 0)->get();

        $meta_tags = Sites::select('id' ,'title','description' , 'keyword' , 'confirmed')->where('id' , $id)->where('confirmed' , 1)->first();
        $title_descr = Sites::select('id' , 'site_name')->where('id' , $id)->where('confirmed' , 1)->first();
        $get_categoryTo_descr = Sites::with(['country' , 'category'])->select('id' , 'category_id' , 'countries_id')->where('id' , $id)->where('confirmed' , 1)->first();
        $get_SupCategory = Sites::with(['country' , 'category'])->select('id' , 'category_id' , 'countries_id' , 'subcategories')->where('id' , $id)->where('confirmed' , 1)->first();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        // $country_namess = Countries::select('id', 'country_name','href')->where('id' , $id)->first();
        $country_namess = Sites::with('country')->where('id' , $id)->where('confirmed' , 1)->first();
        $addss = Adds::select('atTop' , 'atRight' , 'otherSite' , 'atHead')->first();
        return view('dalil.describtion' , compact(['meta_tags','get_tags','scategories' ,'addss','get_site_descrr','country_namess','get_about_waslat','get_SupCategory','get_categoryTo_descr','title_descr','DataSittings' , 'country_names' , 'all_pinned_page' , 'get_site_descr']));
    }

    public function showTag($id){
        $all_pinned_page = PinnedPages::all();
        $DataSittings = sitting::where("id", 1)->first();
        $country_names = Countries::select('id', 'country_flag' ,  'country_name' , 'href')->get();
        $subcats = Category::with('supcategories')->where('parent_id', $id)->get();
        $test = Sites::with('tags')->where('category_id' ,  $id)->get();
        $titlee = Category::select('id','title')->where('id' , $id)->first();
        $country_namess = Category::with('country')->where('id' , $id)->first();
        $get_about_waslat = PinnedPages::select('id' , 'page_name' , 'href' , 'content')->first();
        $tagss= Tag::with('sites')->where('name' , $id)->select('id' , 'name')->get();
        
        // foreach($subcats as $ke){
        //     foreach($ke->supcategories as $index => $f)
        //     // if($ke->id == $f->parent_id){
        //     //     dd("yes");
        //     // }
        //     dd($f);
        // }
        return view('dalil.tagsSites' , compact(['tagss','all_pinned_page' , 'DataSittings' , 'country_names' , 'subcats' , 'test' , 'titlee' , 'country_namess' , 'get_about_waslat']));
    }


    // Add Sites by user

    public function createSites(){
        $category = Category::with('sites' , 'country')->where('parent_id', 0)->where('show_status' , 1)->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        $tags = Tag::all();
        $categories = Category::select('id','category_name')->where('parent_id' , 0)->get();
        $countries =  Countries::all();
        $all_pinned_page = PinnedPages::all();
        return view('dalil.pageCreateSites' , compact(['all_pinned_page','tags','categories' , 'countries' , 'category' , 'country_names']));
    }

    public function StoreSites(Request $request){
        $all_pinned_page = PinnedPages::all();
        $DataSittings = sitting::where("id", 1)->first();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        $country_namess = Countries::select('id', 'country_name','href' , 'country_flag')->where('show_status' , 1)->first();
        $request->validate([
            'site_name'     => 'required',
            'href'          => 'required|unique:sites,href',
            // 'title'         => 'required',
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
            'confirmed'     => 0,
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
        \Session::flash('success', 'تم اضافة الموقع بانتظار المشرف للموافقة عليها');
        return view('dalil.AddedSuccess',compact('all_pinned_page' , 'DataSittings' , 'country_names' , 'country_namess'));
    }
    

}

