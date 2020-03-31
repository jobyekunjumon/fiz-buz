<?php
class Number {
    /**
     * property to hold number ranges
     */
    private $numberRange;

    /**
     * Set number range
     * @author Joby E Kunjumon <jobyekunjumon@gmail.com>
     * @param Array $numberRange
     */
    public function setRange(Array $numberRange) {
        $this->numberRange = $numberRange ?? [];
    }

    /**
     * get number sequence
     * @author Joby E Kunjumon <jobyekunjumon@gmail.com>
     */
    public function getSequence():Array { 
        $response = [];
        // define the texts array
        $texts = [0 => 'Linianos', 
                  3 => 'Linio', 6 => 'Linio', 9 => 'Linio', 12 => 'Linio', 
                  5 => 'IT', 10 => 'IT'];
        
        // loop throgh the number range and generate the sequence
        foreach($this->numberRange as $number) {
            $mod = $number % 15;
            if(!empty($texts[$mod])) {
                $response[] = $texts[$mod];
                continue;
            }
            $response[] = $number;
        }

        return $response;
    } // end: function getSquence
}
