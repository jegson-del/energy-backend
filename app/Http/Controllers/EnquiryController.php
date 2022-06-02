<?php

namespace App\Http\Controllers;

use App\Actions\StoreQuotationAction;
use App\Http\Requests\StoreEnquiryRequest;

class EnquiryController extends Controller
{

    /**
     * Store a newly created enquiry in storage.
     *
     * @param  \App\Http\Requests\StoreEnquiryRequest  $request
     * @return string
     */
    public function store(StoreEnquiryRequest $request, StoreQuotationAction $action)
    {
        try {
            $enquiry = $action->handle($request);
            return \response()->json($enquiry, 200);
        }catch (\Exception $e)
        {
            return $e->getMessage();
        }

    }


}
