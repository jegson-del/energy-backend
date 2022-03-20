<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuotationResource;
use App\Models\Quotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $quotations = Quotation::all();
        try {
            return QuotationResource::collection($quotations);
        }catch (\Exception $e)
        {
            return $e->getMessage();
        }
    }


}
