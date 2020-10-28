
<h1>Homework_1.</h1>
<p><b>1. Создайте класс Into и реализуйте метод getClassName() который должен вывести имя класса в котором вызывается метода, используйте магическую константу для получения имени класса (подсказка: константа __CLASS__).</b></p>

<?php

class Into
{
  public function getClassName() {
      echo "<b>Answer:</b> This is " . __CLASS__ . " class.";
  }
}

    $userProfile = new Into(); 
    $userProfile->getClassName();

?>

<br><br>

<p><b>2. Создайте класс Math и реализйте метод calcFactorial($number) который будет расчитывать факториал целых чисел.</b></p>

<?php

class Math
{

   public $number;

   public function calcFactorial($number)
  {
     if (!is_int($number)) {
         exit('Invalid number!');
      } else {
        $this->number = $number;
        $factorial = 1;
        if ($this->number > 0) {
          $factorial = 1;
          for ($i=1; $i <= $this->number; $i++) { 
              $factorial = $factorial * $i;
           }
        }
        return $factorial;
      }
   }
 }

    $math = new Math();
    $number = 0;
    echo "<b>Answers:</b><br>"; 
    echo 'Value - '.$number.'! = '.$math->calcFactorial($number).';<br>';
    $number = 5;
    echo 'Value - '.$number.'! = '.$math->calcFactorial($number).';<br>';

?>

<br>

<p><b>3. Дополните класс Math из предыдущего задание и реализуйте метод для простого калькулятора.</b></p>

<?php

class MathCalc extends Math
{

   private $var1;
   private $var2;

   public function setVar($var1, $var2)
  {
    if (!is_int($var1) || !is_int($var2)) {
         exit('Invalid variable type!');
      }
      $this->var1 = $var1;
      $this->var2 = $var2;
   }

   public function addition()
  {
    return $this->var1 + $this->var2;
   }
   
   public function subtraction()
  {
    return $this->var1 - $this->var2;
   }

   public function multiplication()
  {
    return $this->var1 * $this->var2;
   }

   public function division()
  {
    return $this->var1 / $this->var2;
   }
 
 }

    $var1 = 12;
    $var2 = 4;
    $mathcalc = new MathCalc();
    $mathcalc->setVar($var1, $var2); 
    echo "<b>Answers:</b><br>";
    echo $var1.' + '.$var2.' = '.$mathcalc->addition().'<br>';
    echo $var1.' - '.$var2.' = '.$mathcalc->subtraction().'<br>';
    echo $var1.' * '.$var2.' = '.$mathcalc->multiplication().'<br>';
    echo $var1.' / '.$var2.' = '.$mathcalc->division().'<br>'; 
    
?>

<br><br>

<p><b>4. Создайте класс который будет принимать массив целых чисел при создании объекта класса и сортировать их (можно использовать PHPешный sort()), также создайте свойство где этот массив будет хранится и метод для получения этого свойства.</b></p>

<?php

class intSort
{

  private $ints = [];
  private $sortinst = [];
  
   public function __construct($ints)
  {
        if (!is_array($ints)) {
          exit('Invalid array');
        }
        
        foreach ($ints as $key => $value) {
    
           if (!is_int($value)) {
             exit('Invalid variable type - '.$value);
           }
        }
        $this->ints = $ints;
       
   }

  public function sortInt()
  {
       sort($this->ints);
       $sortinst = $this->ints;
       $this->sortinst = $sortinst;
  }

   public function getArrInts()
  {
      return $this->ints;
      
  }
    public function getSortArrInt ()
  {
      return $this->sortinst;
  }
}

    $ints = [1, 3, 2, 5, 4];
    $intsort = new intSort($ints);
    echo '<b>Answer:</b><br>';
    echo 'Array without sorting:<br>';
    var_dump($intsort->getArrInts());
    $intsort->sortInt();
    echo '<br>Array with sorting:<br>';
    var_dump($intsort->getSortArrInt());

?>

<br><br>