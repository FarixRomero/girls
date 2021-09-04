<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Service;
use Illuminate\Http\Request;

/**
 * Class AdvertisementController
 * @package App\Http\Controllers
 */
class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisements = Advertisement::paginate();

        return view('advertisement.index', compact('advertisements'))
            ->with('i', (request()->input('page', 1) - 1) * $advertisements->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertisement = new Advertisement();
        $services = Service::get();
        return view('advertisement.create', compact('advertisement','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Advertisement::$rules);
        $data = $request->all();
        $data['user_id']=auth()->user()->id;
        $advertisement = Advertisement::create($data);
        if(isset($data['services'])){
            $advertisement->services()->attach($data['services']);
          }


        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advertisement = Advertisement::find($id);

        return view('advertisement.show', compact('advertisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertisement = Advertisement::find($id);
        $services = Service::get();
        return view('advertisement.edit', compact('advertisement','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Advertisement $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $data = $request->all();
        request()->validate(Advertisement::$rules);
        $advertisement->update($request->all());
        // dd($data['services']);
        if(isset($data['services'])){
            $advertisement->services()->sync($data['services']);
            // dd($advertisement->toArray());
        }
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement updated successfully');
    }
    public function updateByUser(Request $request, Advertisement $advertisement)
    {
        $data = $request->all();
        request()->validate(Advertisement::$rules);
        $advertisement->update($request->all());
        // dd($data['services']);
        if(isset($data['services'])){
            $advertisement->services()->sync($data['services']);
            // dd($advertisement->toArray());
        }
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::find($id)->services()->detach ();
        $advertisement = Advertisement::find($id)->delete();

        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement deleted successfully');
    }
}
