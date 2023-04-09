<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;

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
            'services'=> Service::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request) : RedirectResponse
    {
        
        $service = new Service($request->$validated());
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
        return view('services.edit',[
            'service'=> $service
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
    public function destroy(Service $service)
    {
        try {
            $product->delete();
            return response()->json([
                'status' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd!'
            ])->setStatusCode(500);
        }
    }
}
