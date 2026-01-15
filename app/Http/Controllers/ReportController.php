<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Maatwebsite\Excel\Facades\Excel;


class ReportController extends Controller
{
    public function day()
    {
        $data['data'] = Complaint::all();
        return view('admin.report.day.index', $data);
    }

    public function day_search(Request $request)
    {
        $date1 = $request->date1;
        $date2 = $request->date2;

        $query = DB::table('complaint')
            ->whereBetween('date_complaint', [$date1, $date2])
            ->orderBy('id', 'desc')
            ->get();

        $data['data'] = $query;

        return view('admin.report.day.index', $data);
    }

public function day_pdf(Request $request)
{
    $date1 = $request->date1;
    $date2 = $request->date2;

    if (!$date1 || !$date2) {
        $data['data'] = Complaint::all();
    } else {
        $data['data'] = Complaint::whereBetween('date_complaint', [$date1, $date2])
            ->orderBy('id', 'asc')
            ->get();
    }

    return Pdf::loadView('admin.report.day.print_data', $data)
        ->setPaper('A4', 'portrait')
        ->stream('laporan-harian.pdf');
}

public function day_excel(Request $request)
{
    $date1 = $request->date1;
    $date2 = $request->date2;

    if (!$date1 || !$date2) {
        $data = Complaint::orderBy('id', 'asc')->get();
    } else {
        $data = Complaint::whereBetween('date_complaint', [$date1, $date2])
            ->orderBy('id', 'asc')
            ->get();
    }

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'NIK');
    $sheet->setCellValue('C1', 'Pengaduan');
    $sheet->setCellValue('D1', 'Tanggal');
    $sheet->setCellValue('E1', 'Status');

    // Data
    $row = 2;
    $no = 1;
    foreach ($data as $item) {
        $sheet->setCellValue('A' . $row, $no++);
        $sheet->setCellValue('B' . $row, $item->nik);
        $sheet->setCellValue('C' . $row, $item->contents_of_the_report);
        $sheet->setCellValue('D' . $row, $item->date_complaint);
        $sheet->setCellValue('E' . $row,
            $item->status == '0' ? 'Belum Diproses' :
            ($item->status == 'process' ? 'Proses' : 'Selesai')
        );
        $row++;
    }

    $writer = new Xlsx($spreadsheet);

    $filename = 'laporan-harian.xlsx';
    $path = storage_path('app/' . $filename);
    $writer->save($path);

    return response()->download($path)->deleteFileAfterSend(true);
}


}
