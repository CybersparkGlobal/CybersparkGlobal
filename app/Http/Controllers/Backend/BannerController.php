<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    //banner index
    function index()
    {
        $banners=Banner::orderBy('id','DESC')->paginate(10);
        return view('backend.banner.index', compact('banners'));
    }

//    banner create
    function create()
    {
        return view('backend.banner.create');
    }

//    banner store
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        // return $slug;
        $status = Banner::create($data);
        if ($status) {
         return  redirect()->route('admin.banner.index')->with('success', 'Banner has been saved successfully!');
        } else {
          return  redirect()->back()->with('error', 'Error occurred while adding banner');
        }
    }

//banner edit
    function edit($slug)
    {
        $banner=Banner::where('slug', $slug)->first();
        return view('backend.banner.edit', compact('banner'));
    }

//    update
    public function update(Request $request,$slug)
    {

        $this->validate($request, [
            'title' => 'string|required|max:50',
            'description' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $banner=Banner::where('slug',$slug)->first();
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Banner::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;

        // return $slug;
        $status = $banner->update($data);
        if ($status) {
            return  redirect()->route('admin.banner.index')->with('success', 'Banner has been Updated successfully!');
        } else {
            return  redirect()->back()->with('error', 'Error occurred while Updating banner');
        }
    }

//    banner destroy
    public function destroy($slug)
    {
        $status=Banner::where('slug',$slug)->delete();
        if ($status) {
            return  redirect()->route('admin.banner.index')->with('success', 'Banner has been Deleted successfully!');
        } else {
            return  redirect()->back()->with('error', 'Error occurred while Deleted banner');
        }
    }

}


