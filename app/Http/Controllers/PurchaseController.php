<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Producto;
use App\Models\Provider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::get();
        //dd($purchases);
        return view('admin.purchases.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::get();
        $products = Producto::get();
        return view('admin.purchases.create', compact('providers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->product_id);

        $purchase = Purchase::create($request->all()+[
                'user_id' => Auth::user()->id,
                'purchase_date' => Carbon::now()
            ]);

        foreach ($request->product_id as $key => $product){
            $results[] = array(
                "product_id" => $request->product_id[$key],
                "quantity"   => $request->quantity[$key],
                "price"      => $request->price[$key]
            );

            $purchase->purchaseDetails()->createMany($results);
        }
        return redirect()->route('purchases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        $purchaseDetails = $purchase->purchaseDetails;
        $subtotal = 0;
        foreach ($purchaseDetails as $purchaseDetail) {
            $subtotal += $purchaseDetail->quantity * $purchaseDetail->price;
        }
        return view('admin.purchases.show', compact('purchase', 'purchaseDetails','subtotal'));
    }



}
