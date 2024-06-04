<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PagosController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Pagos/Index');
    }
}
