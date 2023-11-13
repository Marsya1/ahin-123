include __DIR__ . '/../src/Calculator.php';

class CalculatorTest
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }
}

$test = new CalculatorTest();
$test->testAdd();