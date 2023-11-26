<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\song;
use App\Models\User;
use DB;

class ReportsChart extends LarapexChart
{
    public function __construct()
    {
        parent::__construct();

        // Set the type of the chart to pie
        $this->setType('pie')

        // Set the labels of the chart to the months from the user registrations and song counts data
        ->setLabels($this->getMonths())

        // Set the title of the chart to 'User Registrations and Song Counts per Month'
        ->setTitle('User Registrations and Song Counts per Month')

        // Set the subtitle of the chart to 'Year 2023'
        ->setSubtitle('Year 2023')

        // Add a dataset to the chart with the name 'User Registrations', the color 'blue', and the data from the user registrations model
        ->withDataFromModel(User::all(), 'count')

        // Add another dataset to the chart with the name 'Song Counts', the color 'red', and the data from the song counts model
        ->withDataFromModel(Song::all(), 'count')

        // Set the colors of the chart to blue and red
        ->setColors(['blue', 'red']);
    }

    // A helper method to get the months from the data
    private function getMonths()
    {
        // Get the user registrations data
        $userRegistrations = User::groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))->orderBy('created_at')->get()->mapWithKeys(function ($item) {
            return [$item->created_at->format('Y-m') => $item->count()];
        });

        // Get the song counts data
        $songCounts = song::groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))->orderBy('created_at')->get()->mapWithKeys(function ($item) {
            return [$item->created_at->format('Y-m') => $item->count()];
        });

        // Merge the two data sets and get the keys, which are the months
        return $userRegistrations->merge($songCounts)->keys()->toArray();
    }
}
