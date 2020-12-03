<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    public function landingPageForOrganiations(){

        return view('organisationLanding');

    }
}
