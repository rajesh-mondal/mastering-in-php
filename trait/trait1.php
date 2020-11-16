<?php
trait NumberSeriesOne {
    private function numberSeriesA() {
        echo "Number Series A\n";
    }

    function NumberSeriesB() {
        $this->numberSeriesA();
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo {
    use NumberSeriesOne;
    function numberSeriesC() {
        $this->numberSeriesA();
        echo "Number Series C\n";
    }

    function NumberSeriesD() {
        echo "Number Series D";
    }
}

class NumberSeries {
    use NumberSeriesTwo;
}

$ns = new NumberSeries();
//$ns->numberSeriesA();
$ns->NumberSeriesB();
$ns->NumberSeriesC();