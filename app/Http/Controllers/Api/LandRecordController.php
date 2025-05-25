<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LandRecord;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;

class LandRecordController extends Controller
{
    public function search(Request $request)
    {
        // Validate input
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        // Search for land records
        $search = $request->input('search');
        $records = LandRecord::where('parcel_id', 'like', "%{$search}%")
            ->orWhere('plot_number', 'like', "%{$search}%")
            ->orWhere('owner_name', 'like', "%{$search}%")
            ->get();

        if ($records->isEmpty()) {
            return response()->json(['message' => 'No records found'], 404);
        }

        // Generate PDF
        $data = ['records' => $records];
        $pdf = Pdf::loadView('pdf.land_record', $data);

        // Return PDF as response
        return $pdf->download('land_record_summary.pdf');
    }
}
