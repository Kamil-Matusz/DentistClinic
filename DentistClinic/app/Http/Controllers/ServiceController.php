<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Exception;
use DB;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreServiceRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use function PHPUnit\Framework\throwException;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View 
    {
        return view('services.index',[
            'services'=> Service::paginate(5)
           ]);
    }

    public function implants() : View 
    {
        $results = DB::select('select * from services where type_id = ?', [3]);
        return view('services.implants',[
            'services'=> $results,
            'types' => ServiceType::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("services.create", [
            'types' => ServiceType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request) : RedirectResponse
    {
        $service = new Service($request->validated());
        $service->save();
        return redirect(route('services.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service) : View
    {
        return view('services.show',[
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service) : View
    {
        return view("services.edit", [
            'service' => $service,
            'types' => ServiceType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreServiceRequest $request, Service $service) : RedirectResponse
    {
        $service->fill($request->validated());
        $service->save();
        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Service::find($id);
        $flight->delete();
        return redirect('/services');
    }
}
