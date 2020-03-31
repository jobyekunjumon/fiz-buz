<?php
class Renderer {
    
    /**
     * variable to hold request parameters
     */
    private $numberSequence;
    
    /**
     * Set numbers
     * @author Joby E Kunjumon <jobyekunjumon@gmail.com>
     * @param String $message 
     */
    public function setNumberSequence(Array $numberSequence) {
        $this->numberSequence = $numberSequence ?? [];
    } // end: function setMessage

    /**
     * Get number squence string
     * @author Joby E Kunjumon <jobyekunjumon@gmail.com>
     * @return String $response 
     */
    public function getNumberSequenceString(): String {
        $response = '';
        $separator = '<br />';

        // if the number sequence is not empty, loop throgh teh sequence and prepare response string
        if(!empty($this->numberSequence)) {
            foreach($this->numberSequence as $sequenceEntry) {
                $response .= $sequenceEntry.$separator;
            } // end: foreach
        } // end: if

        return $response;
    } // end: function getErrorMessage
}