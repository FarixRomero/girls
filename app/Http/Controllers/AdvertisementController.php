<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
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
        return view('advertisement.create', compact('advertisement'));
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

        $advertisement = Advertisement::create($request->all());

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

        return view('advertisement.edit', compact('advertisement'));
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
        request()->validate(Advertisement::$rules);

        $advertisement->update($request->all());

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
        $advertisement = Advertisement::find($id)->delete();

        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement deleted successfully');
    }
}
