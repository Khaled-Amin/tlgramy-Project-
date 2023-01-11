<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;
class CountriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $showallcountries = Countries::select('*')->latest()->get();
        return view('dash-board.countries.allcountry', compact('showallcountries'));
    }


    public function create()
    {
        return view('dash-board.countries.createcountry');
    }


    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'country_name'  => 'required',
            'href'          => 'required',
            'title'         => 'required'
        ]);
        if($request->show_status){
            $countries_status = DB::table('countries')->select('show_status')->update(['show_status'=> 0]);
            if($request->country_flag){
                $time=time();
                $image = Image::make($request->file('country_flag')->getRealPath())->encode('webp', 100)->resize(16, 11)->save(public_path('uploading/'  .  $time . '.webp'));
                $newImageName = time(). '.' . $request->country_flag->extension();
            }else{
                $time=Null;
            }

            // $image = $request->file('country_flag');
            // $newImageName = time() . '.' . $request->country_flag->extension();
            // $request->country_flag->move(public_path('uploading/'), $newImageName);
            $datacountry = Countries::create([
                'country_name'      => $request->input('country_name'),
                'href'              => $request->input('href'),
                'country_flag'      => $time . '.' . 'webp',
                'show_status'       => $request->input('show_status'),
                'title'             => $request->input('title'),
                'description'       => $request->input('description'),
                'keyword'           => $request->input('keyword')
            ]);
        }
        else{
            // $newImageName = time() . '.' . $request->country_flag->extension();
            // $request->country_flag->move(public_path('uploading/'), $newImageName);
            if($request->country_flag){
                $time=time();
                $image = Image::make($request->file('country_flag')->getRealPath())->encode('webp', 100)->resize(16, 11)->save(public_path('uploading/'  .  $time . '.webp'));
                $newImageName = time(). '.' . $request->country_flag->extension();
            }else{
                $time=Null;
            }
            $request->show_status=0;
            $datacountry = Countries::create([
                'country_name'      => $request->input('country_name'),
                'href'              => $request->input('href'),
                'country_flag'      => $time . '.' . 'webp',
                'show_status'       => $request->show_status,
                'title'             => $request->input('title'),
                'description'       => $request->input('description'),
                'keyword'           => $request->input('keyword')
            ]);
        }
        // if($request->show_status == Null){
        //     $request->show_status=0;

        //     $datacountry = Countries::create([
        //         'country_name'      => $request->input('country_name'),
        //         'href'              => $request->input('href'),
        //         'country_flag'      => $newImageName,
        //         'show_status'       => $request->show_status,
        //         'title'             => $request->input('title')
        //     ]);
        // }
        // echo $request->show_status;


        // dd($datacountry);
        return  redirect()->route('countries.main')
            ->with('success', 'Successfuly Added Country');
    }


    // public function show($id)
    // {
    //     $countries = Countries::find($id);
    //     return view('countries.detailcountry', compact('countries'));
    // }


    public function edit(Countries $countries, $id)
    {
        $countries = Countries::find($id);
        return view('dash-board.countries.editcountry', compact('countries'));
    }

    public function update(Request $request, Countries $countries, $id)
    {
        $countries = Countries::find($id);

        $request->validate([
            'country_name'  => 'required',
            'href'          => 'required',
            // 'country_flag'  => 'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048|dimensions:max_width=600,max_height=600',
            'title'         => 'required'
        ]);
        $pathImg = str_replace('\\', '/', public_path('uploading/')) . $countries->country_flag;

        if (File::exists($pathImg)) {
            File::delete($pathImg);
        }
        // $newImageName = time() .'-' . $request->name_product .'.'. $request->photo->extension();
        // $newImageName = time() . '.' . $request->country_flag->extension();
        // $request->country_flag->move(public_path('uploading/'), $newImageName);
        if($request->country_flag){
            $time=time();
            $image = Image::make($request->file('country_flag')->getRealPath())->encode('webp', 100)->resize(16, 11)->save(public_path('uploading/'  .  $time . '.webp'));
            $newImageName = time(). '.' . $request->country_flag->extension();
        }else{
            $time=Null;
        }
        // if($request->show_status){
            
            // $countries->show_status = 0;
            
            $countries->show_status = $request->show_status ? DB::table('countries')->select('show_status')->update(['show_status'=> 0]) :DB::table('countries')->select('show_status')->update(['show_status'=> 1]);
            // $countries->show_status = DB::table('countries')->select('show_status')->update(['show_status'=> 0]);
            $countries->country_name = $request->country_name;
            $countries->href         = $request->href;
            $countries->country_flag = $time . '.' . 'webp';
            $countries->title         = $request->title;
            $countries->description   = $request->description;
            $countries->keyword       = $request->keyword;
            $countries->update();
        // }
        // $countries->update(['show_status' =>0]);
            
        return  redirect()->route('countries.main')
            ->with('success', 'Successfuly Added Country');
    }

    public function destroy(Countries $countries, $id)
    {
        $countries = Countries::find($id);

        $destination = str_replace('\\', '/', public_path('uploading/')) . $countries->country_flag;
        // $path =str_replace('\\' , '/' ,public_path('uploads/picture/'));

        // dd($destination);
        if (File::exists($destination)) {
            File::delete($destination);
            $countries->delete();
            return redirect()->route('countries.main')
                ->with('success', 'deleted data');
        }
        $countries->delete();
        return redirect()->route('countries.main')
            ->with('success', 'deleted data');
    }
}
