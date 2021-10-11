<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InterestResource;
use App\Models\TypeInterest;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interest = TypeInterest::all();
        return InterestResource::collection($interest);
    }
}
