<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Exception;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreServiceRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use function PHPUnit\Framework\throwException;
use Illuminate\Database\QueryException;

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
        $services = Service::where('type_id', 2)->paginate(2);
        $types = ServiceType::all();
        return view('services.implants', compact('services', 'types'));
    }

    public function dentalSurgery() : View 
    {
        $services = Service::where('type_id', 1)->paginate(2);
        $types = ServiceType::all();
        return view('services.dentalSurgery', compact('services', 'types'));
    }

    public function childrenDentistry() : View 
    {
        $services = Service::where('type_id', 3)->paginate(2);
        $types = ServiceType::all();
        return view('services.childrenDentistry', compact('services', 'types'));
    }

    public function prevention() : View 
    {
        $services = Service::where('type_id', 4)->paginate(2);
        $types = ServiceType::all();
        return view('services.prevention', compact('services', 'types'));
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
    public function destroy(string $id): RedirectResponse
    {
    try {
        $service = Service::find($id);

        if ($service) {
            $service->delete();
            return redirect('/services')->with('success', 'The service has been successfully deleted.');
        } else {
            return redirect('/services')->with('error', 'The service with the specified ID was not found.');
        }
    } catch (QueryException $e) {
        return redirect('/services')->with('error', 'You cannot remove a service that has been assigned to a reservation');
    }
    }
}
