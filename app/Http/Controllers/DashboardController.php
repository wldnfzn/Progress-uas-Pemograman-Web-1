<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Society;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik
        $complaints   = Complaint::count();
        $unprocessed  = Complaint::where('status', '0')->count();
        $process      = Complaint::where('status', 'process')->count();
        $finished     = Complaint::where('status', 'finished')->count();
        $users        = User::count();
        $society      = Society::count();

        // Data grafik per tahun
        $chart = DB::table('complaint')
            ->selectRaw('YEAR(date_complaint) as tahun, COUNT(id) as total')
            ->groupBy('tahun')
            ->orderBy('tahun', 'ASC')
            ->get();

        // Olah data grafik
        $th = [];
        $complaint1 = [];

        foreach ($chart as $row) {
            $th[] = $row->tahun;
            $complaint1[] = $row->total;
        }

        return view('admin.dashboards.index', compact(
            'complaints',
            'unprocessed',
            'process',
            'finished',
            'users',
            'society',
            'th',
            'complaint1'
        ));
    }

    public function welcome()
    {
        return view('frontend.home.index');
    }
}
