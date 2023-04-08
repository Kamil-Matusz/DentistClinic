<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Exception;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
    public function store(Request $request) : RedirectResponse
    {
        $service = new Service($request->all());
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
    public function update(Request $request, Service $service) : RedirectResponse
    {
        $service->fill($request->all());
        $service->save();
        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
