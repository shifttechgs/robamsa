<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ContactUsController extends Controller
{
    public function index(): View
    {
        return view('company.contact_us');
    }
}
