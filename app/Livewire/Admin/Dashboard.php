<?php

namespace App\Livewire\Admin;

use App\Models\AssessmentResponse;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Dashboard extends Component
{
    public $totalDSPs;
    public $totalQuestionnaires;
    public $totalUsers;
    public $totalDTCs;
    public $assessments;
    public $assessmentMonths = [];
    public $assessmentCounts = [];

    public function mount()
    {
        $this->totalQuestionnaires = AssessmentResponse::count();
        $this->totalDSPs = User::where('role_id', 2)->count();
        $this->totalUsers = User::count();
        $this->totalDTCs = User::where('role_id', 3)->count();

        $from = Carbon::now()->subMonths(7)->startOfMonth();
        $to   = Carbon::now()->endOfMonth();

        // 1) Fetch all responses in the window
        $responses = AssessmentResponse::whereBetween('created_at', [$from, $to])
            ->get(['created_at']);

        // 2) Group by "YYYY-MM" for each record
        $countsByMonth = $responses
            ->groupBy(fn($r) => $r->created_at->format('Y-m'))
            ->map->count();

        // 3) Build an array of labels (month names) & counts, filling missing months with 0
        $labels = [];
        $data = [];
        foreach (CarbonPeriod::create($from, '1 month', $to) as $month) {
            $key = $month->format('Y-m');          // grouping key
            $labels[] = $month->format('M Y');     // pretty label e.g. "Jan 2025"
            $data[] = (int) ($countsByMonth[$key] ?? 0);
        }

        $this->assessmentMonths = $labels;
        $this->assessmentCounts = $data;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
