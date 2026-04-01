<?php

namespace App\Http\Controllers;

use App\Actions\StoreContactLeadAction;
use App\Http\Requests\StoreContactLeadRequest;
use Illuminate\Http\RedirectResponse;

class ContactLeadController extends Controller
{
    public function __invoke(StoreContactLeadRequest $request, StoreContactLeadAction $action): RedirectResponse
    {
        $action->execute($request->validated(), $request);

        return redirect()
            ->to(route('home').'#contacto')
            ->with('status', 'Recibimos tu consulta. Te vamos a responder para coordinar la visita y el presupuesto.');
    }
}
