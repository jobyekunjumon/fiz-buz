<?php 
class NumbersCest 
{
    private $number = null;

    public function _before(UnitTester $I)
    {
        $this->number = new Number();
    }

    // tests
    public function testNumbersForMultiplesOfThree(UnitTester $I)
    {
        $I->wantToTest('Numbers method to find the multiples of 3 !');
        $this->number->setRange([3]);
        $I->assertEquals(['Linio'], $this->number->getSequence(), '3 must return Linio');
    }

    public function testNumbersForMultiplesOfFIve(UnitTester $I)
    {
        $I->wantToTest('Numbers method to find the multiples of  5 !');
        $this->number->setRange([5]);
        $I->assertEquals(['IT'], $this->number->getSequence(), '5 must return IT');
    }

    public function testNumbersForMultiplesOfThreeAndFive(UnitTester $I)
    {
        $I->wantToTest('Numbers method to find the multiples of 3 and 5 !');
        $this->number->setRange([15]);
        $I->assertEquals(['Linianos'], $this->number->getSequence(), '15 must return Linios');
    }

    public function testNumbersMethod(UnitTester $I)
    {
        $I->wantToTest('Numbers method with a range !');
        $this->number->setRange(range(1, 15));
        $expectedOutput = [1, 2, 'Linio', 4, 'IT', 'Linio', 7, 8, 'Linio', 'IT', 11, 'Linio', 13, 14, 'Linianos'];
        $I->assertEquals($expectedOutput, $this->number->getSequence(), 'Not correct pattern');
    }
}
