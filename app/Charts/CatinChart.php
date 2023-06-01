<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class CatinChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            // ->setTitle('Top 3 scorers of the team.')
            // ->setSubtitle('Season 2021.')
            ->addData([40, 50])
            ->setLabels(['Usia (<25)', 'Usia (>=25)']);
    }
}
