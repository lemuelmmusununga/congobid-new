<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paiement');
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
        $jsons = json_encode([
            'order' => [
                'paymentPageId' => $request->paymentPageId,
                'customerFullName' => $request->customerFullName,
                'customerPhoneNumber' => $request->customerPhoneNumber,
                'customerEmailAdress' => $request->customerEmailAdress,
                'transactionReference' => $request->transactionReference,
                'amount' => $request->amount,
                'currency' => $request->currency,
                'redirectURL' => $request->redirectURL,
            ],
            'paymentChannel' => [
                'channel' => 'MOBILEMONEY',
                'provider' => 'MPESA',
                'walletID' => 'MSISDN',
            ]
        ]);

        $client = new Client(); //GuzzleHttp\Client
        $reponse = $client->post('https://api.arakapay.com/api/pay/paymentrequest/', [
            'order' => [
                'paymentPageId' => $request->paymentPageId,
                'customerFullName' => $request->customerFullName,
                'customerPhoneNumber' => $request->customerPhoneNumber,
                'customerEmailAdress' => $request->customerEmailAdress,
                'transactionReference' => $request->transactionReference,
                'amount' => $request->amount,
                'currency' => $request->currency,
                'redirectURL' => $request->redirectURL,
            ],
            'paymentChannel' => [
                'channel' => 'MOBILEMONEY',
                'provider' => 'MPESA',
                'walletID' => 'MSISDN',
            ]
        ]);


        // $client = New \GuzzleHttp\Client();
        // $reponse = Http::post('https://api.arakapay.com/api/pay/paymentrequest/', [
        //     $jsons,
        // ]);
            // dd($jsons);

        $reponse_result = json_decode($reponse->getBody());

        dd($reponse, $reponse->getBody(), $reponse_result);
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
