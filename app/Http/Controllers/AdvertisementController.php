<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Service;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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
        return view('advertisement.create', compact('advertisement', 'services'));
    }
    public function listServicios()
    {
        $services = Service::get();
        return response()->json($services);
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
        $data['user_id'] = auth()->user()->id;
        $advertisement = Advertisement::create($data);
        if (isset($data['services'])) {
            $advertisement->services()->attach($data['services']);
        }


        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement created successfully.');
    }



    public function storeApi(Request $request)
    {
        try {
            request()->validate(Advertisement::$rules);
            $data = $request->all();
            $data['user_id'] = auth()->user()->id;
            $advertisement = Advertisement::create($data);
            if (isset($data['services'])) {
                $advertisement->services()->attach($data['services']);
            }
            $service = Service::create(["name" => $data["name"]]);
        } catch (Exception $e) {
            return response()->json(['status' => "error", 'data' => $e->getMessage()]);
        }
        return response()->json(['status' => "ok", 'data' => $advertisement]);
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
    public function showApi($id)
    {
        $advertisement = Advertisement::with(['user', 'user.files'])->find($id);
        return response()->json($advertisement);
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
        return view('advertisement.edit', compact('advertisement', 'services'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $data = $request->all();
        request()->validate(Advertisement::$rules);
        $advertisement->update($request->all());
        if (isset($data['services'])) {
            $advertisement->services()->sync($data['services']);
        }
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement updated successfully');
    }
    public function updateByUser(Request $request, Advertisement $advertisement)
    {
        $data = $request->all();
        request()->validate(Advertisement::$rules);
        $advertisement->update($request->all());
        if (isset($data['services'])) {
            $advertisement->services()->sync($data['services']);
        }
        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement updated successfully');
    }
    public function updateApi(Request $request, Advertisement $advertisement)
    {
        try {
            $data = $request->all();
            request()->validate(Advertisement::$rules);
            $advertisement->update($request->all());
            if (isset($data['services'])) {
                $advertisement->services()->sync($data['services']);
            }
        } catch (Exception $e) {
            return response()->json(['status' => "error", 'data' => $e->getMessage()]);
        }
        return response()->json(['status' => "ok", 'data' => $advertisement]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $advertisement = Advertisement::find($id)->services()->detach();
        $advertisement = Advertisement::find($id)->delete();

        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement deleted successfully');
    }
}
