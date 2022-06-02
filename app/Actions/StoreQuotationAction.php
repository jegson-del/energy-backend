<?php

namespace App\Actions;

use App\Http\Requests\StoreEnquiryRequest;
use App\Models\Enquiry;


class StoreQuotationAction{
    /**
     * Extracted the create enquiries to action class.
     */
    public function handle(StoreEnquiryRequest $request):Enquiry
    {
       $data = $request->all();
       $enquiry = new Enquiry($data);
       $enquiry->save();
        /**
         * returning model instance.
         */
       return $enquiry;
    }


}
