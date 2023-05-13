<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoreReservationRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use function PHPUnit\Framework\throwException;
use Illuminate\Http\RedirectResponse;
use App\Models\Service;
use Illuminate\Contracts\Auth\Authenticatable;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $results = DB::select('SELECT reservations.id,services.name,reservations.bookerName,reservations.bookerSurname,reservations.reservationDate FROM reservations LEFT JOIN services ON reservations.serviceId = services.id');
        return view('reservations.index',[
            'reservations'=> $results
           ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("reservations.create", [
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request) : RedirectResponse
    {
        $reservation = new Reservation($request->validated());
        $reservation->save();
        return redirect(route('reservations.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show',[
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReservationRequest $request, Reservation $reservation) : RedirectResponse
    {
        $reservation->fill($request->validated());
        $reservation->save();
        return redirect(route('reservations.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

}
