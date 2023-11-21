<?php

namespace App\Http\Controllers;


use App\Models\Invoice;
use App\Models\User;
use App\Mail\InvoiceCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mpdf\Mpdf;





class InvoiceController extends Controller
{
    public function invoice()
    {
        $invoices = Invoice::all();
        return view('admin.invoices', compact('invoices'));
    }
    public function create()
    {
        $invoices = Invoice::all();
        $users = User::all(); // Assuming you want to associate invoices with users
        return view('admin.invoicecreate', compact('users'));
    }

    public function store(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,paid'
        ]);

        $invoice = Invoice::create([
            'user_id' => $request->input('user_id'),
            'amount' => $request->input('amount'),
            'status' => $request->input('status'),
        ]);

        //To save invoice to db
        $invoice->save();

        // Send email to the user with the invoice details
        $user = User::find($request->input('user_id'));

        Mail::to($user->email)->send(new InvoiceCreated($invoice));

        return redirect()->route('invoice.create')->with('success', 'Invoice created successfully and sent to the user via email');

    }

    public function InvoicesPDF(){

        $invoices = Invoice::all();
        $data = [
            'title'=>'Invoices',
            'date'=> date('Y-m-d'),
            'invoices' => $invoices,
        ];

        $mpdf = new Mpdf();

        $mpdf->WriteHTML(view('admin.invoicepdf_view',$data));

        return $mpdf->Output('invoicereport.pdf','D');
    }

    public function edit($invoicesId)
    {
        $invoice = Invoice::findOrFail($invoicesId);
        $users = User::all();
        return view('admin.invoiceedit', compact('invoice', 'users'));
    }

    public function update(Request $request, $invoicesId){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,paid'
        ]);

        try {
            $invoice = Invoice::findOrFail($invoicesId);

            $invoice->user_id = $request->input('user_id');
            $invoice->amount = $request->input('amount');
            $invoice->status = $request->input('status');

            $invoice->save();

            return redirect()->route('invoice.edit', ['invoicesId' => $invoice->invoicesId])->with('success', 'Invoice updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('invoice.edit' ,['invoicesId' => $invoice->invoicesId])->with('error', 'Failed to update invoice.');
        }
    }

    public function destroy($invoicesId)
    {
       try{
            $invoice = Invoice::findOrFail($invoicesId);
            $invoice->delete();
            return redirect('invoice.dash')->with('success', 'Record deleted successfully.');
        }
        catch (\Exception $e) {
            return redirect('invoice.dash')->with('error', 'Failed to delete record.');
        }
    }

}


