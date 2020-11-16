<?php
trait NumberSeriesOne {
    function numberSeriesA() {
        echo "Number Series A\n";
        parent::NumberSeriesA();
    }

    function NumberSeriesB() {
        echo "Number Series B\n";
    }
}

class SomeClass {
    function numberSeriesA() {
        echo "printing + Printing Number Series A\n";
    }
}

class NumberSeries extends SomeClass {
    use NumberSeriesOne;
}

$ns = new NumberSeries();
$ns->numberSeriesA();