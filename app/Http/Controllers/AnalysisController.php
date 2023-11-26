<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;

class AnalysisController extends Controller
{
    public function index(){

        $data = song::all()->toArray();
        $scnddata = User::latest()->paginate(10);

        //To get User Registrations
        $userRegistrations = User::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, COUNT(*) as count")
        ->groupBy('month')
        ->orderBy('month')
        ->get();


        // Fetch invoices paid and unpaid per month
        $invoices = Invoice::selectRaw("DATE_FORMAT(updated_at, '%Y-%m') as month, COUNT(*) as count, status")
        ->groupBy('month', 'status')
        ->orderBy('month')
        ->get();

        // Transform the data for paid and unpaid invoices
        $invoicesData = $invoices->groupBy('status')->map(function ($group) {
        return $group->mapWithKeys(function ($item) {
            return [$item['month'] => $item['count']];
        });
        })->toArray();

        // Use COALESCE to replace null values with 0
        $invoicesData['paid'] = $invoicesData['paid'] ?? [];
        $invoicesData['pending'] = $invoicesData['pending'] ?? [];

        // Calculate the sums for paid and unpaid invoices
        $paidSum = array_sum($invoicesData['paid']);
        $unpaidSum = array_sum($invoicesData['pending']);

        // Prepare data for charts
        $graphData = [
        'userRegistrations' => $userRegistrations,
        'invoicesPaid' => [
            'paid' => $invoicesData['paid'],
            'unpaid' => $invoicesData['pending'],
            'paidSum' => $paidSum,
            'unpaidSum' => $unpaidSum,
        ],
        ];

        return view('admin.analysis', compact('data', 'scnddata', 'graphData'));

    }
}
