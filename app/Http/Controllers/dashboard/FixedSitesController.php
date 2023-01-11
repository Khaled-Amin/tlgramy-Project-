<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\FixedSites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
class FixedSitesController extends Controller
{

    public function index()
    {
        $displayAll = FixedSites::select('*')->latest()->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.fixedsites.showall' , compact('country_names','displayAll'));
    }

    public function getfixedSitesWithCountry($count_id){
        $country_namess = Countries::select('id', 'country_name', 'country_flag' , 'href')->where('id' , $count_id)->first();
        $fixedSites_show = FixedSites::with('country')->where('country_id' ,$count_id)->get();
        $country_names = Countries::select('id', 'country_name','href' , 'country_flag')->get();
        return view('dash-board.fixedsites.showall' , compact('fixedSites_show','country_names','country_namess'));
    }

    public function create()
    {
        $countries = Countries::all();
        return view('dash-board.fixedsites.create' , compact('countries'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'site_name'     => 'required',
            'href'          => 'required',
            'photo'         => 'required|image|mimes:png,jpg,jpeg,svg,gif',
            // 'country_name'  => 'required'
        ]);

        // if($request->hasFile('photo')){
        //     $newImageName = time(). '.' . $request->photo->extension();
        //     $request->photo->move(public_path('uploading/') , $newImageName);
        // }
        if($request->photo){
            $time=time();
            $image = Image::make($request->file('photo')->getRealPath())->encode('webp', 100)->resize(60, 60)->save(public_path('uploading/'  .  $time . '.webp'));
            $newImageName = time(). '.' . $request->photo->extension();
        }else{
            $time=Null;
        }

        $d =explode(',' ,$request->countries);

        $create_data = FixedSites::create([
            'site_name'       => $request->input('site_name'),
            'href'            => $request->input('href'),
            'photo'           => $time . '.' . 'webp',
            'country_id'     => $d[0],
            'show_status'    => $d[1]
        ]);

        return redirect()->route('fixedsites.main')
                ->with('success' , 'Successfully Added Data');
    }
    public function edit(FixedSites $fixedSites , $id)
    {
        $fixedSites = FixedSites::find($id);
        // $sites_fixed = $fixedSites->findOrFail($id);
        $countries = Countries::all();
        return view('dash-board.fixedsites.edit' , compact(['fixedSites' , 'countries']));
    }
    public function update(Request $request, FixedSites $fixedSites , $id)
    {
        $fixedSites = FixedSites::find($id);
        $request->validate([
            'site_name'     => 'required',
            'href'          => 'required',
            'photo'         => 'required|image|mimes:png,jpg,jpeg,svg,gif',
            // 'country_name'  => 'required'
        ]);

        if($request->photo){
            $pathImg = str_replace('\\' , '/' ,public_path('uploading/')).$fixedSites->photo;

            if(File::exists($pathImg)){
                File::delete($pathImg);
            }
            $time=time();
            $image = Image::make($request->file('photo')->getRealPath())->encode('webp', 100)->resize(60, 60)->save(public_path('uploading/'  .  $time . '.webp'));
            $newImageName = time(). '.' . $request->photo->extension();
            // $newImageName = time() .'.'. $request->photo->extension();
            // $request->photo->move(public_path('uploading/') , $newImageName);
        }else{
            $time=Null;
        }
        $fixedSites->site_name      = $request->site_name;
        $fixedSites->href           = $request->href;
        $fixedSites->photo          = $time . '.' . 'webp';
        $fixedSites->country_id     = $request->countries;
        $fixedSites->update();
        return redirect()->route('fixedsites.main')
                ->with('success' , 'Successfully Added Data');
    }
    public function destroy(FixedSites $fixedSites , $id)
    {
        $fixedSites = FixedSites::find($id);
        $destination =  str_replace('\\' , '/' ,public_path('uploading/')).$fixedSites->photo;
        if(File::exists($destination)){
            File::delete($destination);
            $fixedSites->delete();
            return  redirect()->route('fixedsites.main')
                ->with('success' , 'Successfully Deleted Data');
        }
        $fixedSites->delete();
        return  redirect()->route('fixedsites.main')
            ->with('success' , 'Successfully Deleted Data');
    }
}
