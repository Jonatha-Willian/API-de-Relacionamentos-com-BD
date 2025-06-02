<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\Invoice;


class InvoicesController extends Controller
{
    public function addInvoice(Request $r){
        $data = $r->only(['description', 'value', 'address_id', 'user_id']);
        $invoice = Invoice::create($data);
        return $invoice;
    }
    public function index(Request $r){
        $invoices = Invoice::all();
        return $invoices;
    }
    public function findOne(Request $r){
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        $invoice['address'] = $invoice->address;
        return $invoice;
    }
}
