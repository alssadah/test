<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use Zttp\Zttp;

class ExchangeFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  dd($request->account_id && $request->account_type);
        // if (!$request->account_id && !$request->account_type) {

        //     return redirect('https://www.messenger.com/t/nmfy.org');
        // }

        return view('Nano.ExchangeForm', compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $account_id = $request->account_id;
        $image = $request->file('idCard');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . 'Card.' . $extension;
        $image->move(public_path('uploads/Exchangeimages/' . $account_id), $filename);
        $cardfilename = 'uploads/Exchangeimages/' . $account_id . $filename;

        $image = $request->file('bank_license');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . 'bank.' . $extension;
        $image->move(public_path('uploads/Exchangeimages/' . $account_id), $filename);
        $bankfilename = 'uploads/Exchangeimages/' . $account_id . $filename;

        $image = $request->file('commercial_card');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . 'commer.' . $extension;
        $image->move(public_path('uploads/Exchangeimages/' . $account_id), $filename);
        $cofilename = 'uploads/Exchangeimages/' . $account_id . $filename;

        $request->merge(['idCard2' => $cardfilename, 'bank_license2' => $bankfilename, 'commercial_card2' => $cofilename,]);
        //  dd($request->except(['_token', 'idCard', 'bank_license', 'commercial_card']));
        $params = $request->except(['_token', 'idCard', 'bank_license', 'commercial_card']);

        //send data

        $url = "http://82.114.183.53/api/v1/web/nano/exchange";


        $response = Zttp::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjZkNDA4MmIzY2E2NGYzNjlmODFhMDIzOTY5MzcxY2IwMWQyMmYyNDZiMDY1OTYyNzdjYjE2MWJmOWM2NjUyNGM5ZjFkYzNhZjMwOWQ5YjhkIn0.eyJhdWQiOiIxIiwianRpIjoiNmQ0MDgyYjNjYTY0ZjM2OWY4MWEwMjM5NjkzNzFjYjAxZDIyZjI0NmIwNjU5NjI3N2NiMTYxYmY5YzY2NTI0YzlmMWRjM2FmMzA5ZDliOGQiLCJpYXQiOjE1NTU1NjQ1ODgsIm5iZiI6MTU1NTU2NDU4OCwiZXhwIjoxNTg3MTg2OTg4LCJzdWIiOiIxIiwic2NvcGVzIjpbIndlYiJdfQ.lmD_xe2cBj76bMK4ms_daTXdtgPc7MB7lJhnbNJ9nrH0blNuYH-tP8h7VI10jZvNIiZWqSC5MLy3wnGJxDZ16H9QQYU6cDSCMks4954faLRfCHNlzDkD9qVNnvwSbsJ12v164TGZ58oS17ZmtaeA-9xzOHmFq96N_SwuNf1HO78egu3r785_oXfBfqxm6OuoLkJy9-H4O-Qbnzo8EJLEGlkxYYD1-hZztfr1WerzwmC5o9JtZ9upo-Q4h4d1iguc7Kh56-d1Cz4NpuCG2Rjy6WcG94dwacbRxGvw7cCvl0DdznneYk7s6eD8te5gCZ5YBQs7QNJZBaan6xAqDaRmvSmOW14auf6SSHUkw34-to6JgIQ96ywLlTK0q0QRsbKC9mjqPAy7pW944vaUNq5qnJ_tUO-au5VnHXcDdwMp1a-lYG75frxA4mL2QhbJ5ivB5h79RZasydk-akq_UvMqY-um1m4mgrz-1jcvdweFblHY8Cc3_e4gfDIoKSxkfWdy1DxdmkOid36Y0491d-KVrNmOAU7sFCtLg9STBmnrTiqK6GoFeeztZ6n4aJo8pCybYoyP2-cLRxg7ISTcds1p2CSvQT-92JQUoPUnA48UwEIVL-kOR8nlPMDsT5exQw_SxGrwDgdr2rJUF3v2K8VYCJCLKIdnLqA_0GrC4DO49CI',
        ])
            ->asJson()
            ->withoutVerifying()
            ->post($url, $params);

        $response = Zttp::asJson()->post($url, $params);

        // dd($response->json(), $params, 'hhh');
        if ($response->isOk()) {
            Alert::success('Success Title', 'تمت عملية تسجيلك ');
            return redirect('http://nmfy.me/ar/loans-products/nano-loans');
        }

        Alert::error('error Title', 'قم بالتحقق من البيانات المدخله');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function fileStore(Request $request)
    {

        dd($request->all());
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        return response()->json(['success' => $imageName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
