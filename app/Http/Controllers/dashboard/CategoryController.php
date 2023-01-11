<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Countries;
use App\Models\Sites;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $showCategory = Category::select('*')->latest()->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.categories.showallCategories' , compact('showCategory','country_names'));
    }

    public function getCategorWithCountry($count_id){
        $country_namess = Countries::select('id', 'country_name', 'country_flag' , 'href')->where('id' , $count_id)->first();
        $category_show = Category::with('country')->where('country_id' ,$count_id)->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.categories.showallCategories' , compact('category_show','country_names','country_namess'));
    }
    public function create()
    {
        $categories = Category::where('parent_id',0)->get();
        $countries =  Countries::all();
        // $categories = Category::where('parent_id' , '==',0)->get();
        // $supcategories = Category::where('parent_id' , '!=',0)->get();
        // $categories = DB::table('categories')->get();
        // $categories = Category::all();
        return view('dash-board.categories.createCategories' , compact('categories' , 'countries'));
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



    public function store(Request $request)
    {
        // $category = new Category();
        $request->validate([
            'category_name'  => 'required',
            'href'           => 'required',
            'title'          => 'required',
            'visible_status' => 'required'
        ]);
        $d =explode(',' ,$request->countries);

        $mydataCreated = Category:: create([
            'category_name'  => $request->input('category_name'),
            'href'           => $request->input('href'),
            'title'          => $request->input('title'),
            'country_id'     => $d[0],
            'show_status'    => $d[1],
            'visible_status' => $request->visible_status ? '1': '0',
            'parent_id'      => $request->category ? $request->category : 0 // or Null
        ]);
        // if($mydataCreated->save()){
        //     return redirect()->route('categories.index')->with(['success' => 'Category added succes']);
        // }
        return redirect()->route('categories.main')
            ->with('success' , 'Successfuly added data');
    }
    public function edit(Category $category , $id)
    {
        $find_id_category = new Category();
        $category = $find_id_category->findOrFail($id);
        $categories = Category::with('supcategories')->where('parent_id',0)->get();
        $scategory = Category::with('supcategories')->where('parent_id','!=',0)->get();
        $countries =  Countries::select('id' , 'country_name' , 'show_status')->get();
        // foreach($scategory as $index => $key){
        //     dd($key->category_name);
        // }
// dd($category);
        return view('dash-board.categories.editCategories' , compact(['scategory','category' , 'categories' , 'countries']));
    }
    public function update(Request $request, Category $category , $id)
    {
        $category = Category::find($id);
        $request->validate([
            'category_name'  => 'required',
            'href'           => 'required',//|unique:categories,href
            'title'          => 'required',
            'visible_status' => 'required'
        ]);
        $d =explode(',' ,$request->countries);

        $category->category_name = $request->category_name;
        $category->href = $request->href;
        $category->title = $request->title;
        $category->country_id  = $d[0];
        $category->show_status = $d[1];
        $category->parent_id   = $request->category ? $request->category : 0;
        $category->visible_status = $request->visible_status;
        $category->update();

        return redirect()->route('categories.main')
            ->with('success' , 'Successfuly updated data');
    }
    public function destroy(Category $category , $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('categories.main')
            -> with('success' , 'Successfuly deleted data');
    }

}


