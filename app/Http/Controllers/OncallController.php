<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnCall;
use App\Models\Engineer;
use Carbon\Carbon;

class OncallController extends Controller
{
    public function Oncall(){
        $currentDate = Carbon::now();
        // $currentDate = Carbon::parse('2024-05-15');
        $weekStartDate = $currentDate->copy()->startOfWeek();
        $weekEndDate = $currentDate->copy()->endOfWeek();


        $onCallThisWeek = Oncall::whereBetween('date', [$weekStartDate->format('Y-m-d'), $weekEndDate->format('Y-m-d')])->orderBy('date', 'asc')->get();


        $onCallNextWeek = Oncall::whereBetween('date', [$weekStartDate->addWeeks(1)->format('Y-m-d H:i'), 
                                                        $weekEndDate->addWeeks(1)->format('Y-m-d H:i')])
                                                        ->orderBy('date', 'asc')->get();

        $onCallGroupsForDay = $onCallThisWeek->groupBy('date');

        $groupedByDate = $this->getOncallsByDate($onCallThisWeek, $weekStartDate, $weekEndDate);

        $oncalls = [ 'current' => $groupedByDate, 'next' => $onCallNextWeek, 'currentGroup' => $onCallGroupsForDay] ;
        return view('layout', compact('oncalls'));

    }

    /**
     * Genera un array asociativo ordenado segun el dia de la semana.
     * 
     * @params $onCallsEngineers OnCall
     * @params $weekStartDate Carbon fecha de inicio
     * @params $weekEndDate Cargobn fecha de termino
     */
    private function getOncallsByDate($onCallsEngineers, $startDate, $endDate) {
        $groupedByDate = [];
        // for( $currentDate = $startDate ; $currentDate < $endDate ; $startDate->addDay()) {
        //     $groupedByDate[$currentDate->format('Y-m-d')] = [];
        // }
        foreach($onCallsEngineers as $oncall) {
            $groupedByDate[$oncall->date][] = $oncall; 
        }
        ksort($groupedByDate);
        return $groupedByDate;
    }

    
}
