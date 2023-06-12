<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'bookerName' => 'required|max:255',
            'bookerSurname' => 'required|max:255',
            'serviceId' => 'required|integer',
            'reservationDate' => 'required|after:today',
            'dentistId' => 'required|integer'
        ];
    }
}
