<?php

namespace App\Http\Controllers\Voucher;

use App\Http\Controllers\Controller;
use App\Http\Requests\VoucherRequest;
use App\Http\Resources\VoucherCollection;
use App\Http\Resources\VoucherResource;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vouchers = Voucher::latest('id')->paginate(10);
        return new VoucherCollection($vouchers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoucherRequest $request)
    {
        $voucher = Voucher::create($request->validated());
        
        $image = $request->file('image')->store('image/voucher','public');
        $voucher->image = asset("storage/$image");
        $voucher->save();

        return new VoucherResource($voucher); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        return new VoucherResource($voucher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        $basic_rules = [
            'client_program_id'   => ['required','numeric'],
            'name'                => ['required','string', 'max:80'],
            // 'code'                => ['required','string', 'unique:vouchers,code'],
            // 'image'               => ['required', 'mimes:jpeg,jpg,jpe,png'],
            'state'               => ['required','string', 'max:10'],
            'description'         => ['nullable','string', 'max:200']
        ];

        if ($voucher->code != $request->code) {
            $rule = ['code' => ['required','string', 'unique:vouchers,code']];
            
            if($request->file('image') == null ) {
                $rule = $rule + ['image'=> ['nullable']];
            } else {
                $rule = $rule +['image' => ['mimes:jpeg,jpg,jpe,png']];
            }
        } else {
            $rule = ['code' => ['required','string']];
            if($request->file('image') == null ) {
                $rule = $rule + ['image'=> ['nullable']];
            } else {
                $rule = $rule +['image' => ['mimes:jpeg,jpg,jpe,png']];
            }
        }

        
        $rule = $rule + $basic_rules;
        
        $this->validate($request,$rule);
               
        $voucher->update($request->except('image'));
        
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($voucher->image);
            $img = $request->file('image')->store('image/voucher','public');
            $voucher->image = asset("storage/$img");
            $voucher->save();
        }
        return new VoucherResource($voucher); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(voucher $voucher)
    {
        $voucher->delete();
        return response()->json(null,204);
    }
}
