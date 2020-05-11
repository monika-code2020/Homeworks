<?php
echo "Exercise 1 <br>";

    $numbers = [0, 1, 2, 3, 4 ];
        echo $numbers[3];

echo "<br><br>";
    
echo "Exercise 2 <br>";

    $numbersName = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
        echo $numbersName["three"];
    
echo "<br><br>";

echo "Exercise 3 <br>";

    $numberArr = [
        [0,1],
        [2 , [3]]
    ];
        echo $numberArr[1][1][0];

echo "<br><br>";

echo "Exercise 4 <br>";

    $letterNumber = ["a" => ["b" => 0, "c" => 1],
          "b" => ["e" => 2, 
                  "o" => ["b" => 3]
                ]
        ];
        echo ($letterNumber["b"]["o"]["b"]);

echo "<br><br>";
        
echo "Exercise 5 <br>";

    $letterString = "a,b,c,d,e,f";
    $letter = explode(",", $letterString);
        var_dump($letter);
    
echo "<br><br>";

echo "Exercise 6 <br>";

    $letterArray = [];
    foreach($letter as $key => $value){
       $letterArray[$value] = $value;
        // echo "Key is ". $key . " value is " . $value;
    }
        var_dump($letterArray);
echo "<br><br>";

echo "Exercise 7 <br>";

    $keys =[
        "field1"=>"first",
        "field2"=>"second",
        "field3"=>"third"
    ];
    $values = [
        "field1value"=>"dinosaur",
        "field2value"=>"pig",
        "field3value"=>"platypus"
    ];
    // $keysAndValues = [];
    // foreach($key as $field => $serial){
    //     $keysAndValues[$field] = [];
    //     foreach($values as $fieldValue => $animal){
    //         $keysAndValues[$field] = $animal;
    //     }
    // }
    // ???

    $keysAndValues = array_combine($keys, $values);
    var_dump($keysAndValues);

echo "<br><br>";

echo "Exercise 8 <br>";

    $transactions = [
        [
            "debit"=>2,
            "credit"=>3
        ],
        [
            "debit"=>15,
            "credit"=>14
        ]
    ];
    foreach($transactions as $key => $value){
        $amount = abs($transactions[$key]["debit"] - $transactions[$key]["credit"]);
        $transactions[$key]["amount"]=$amount;

     }
        var_dump($transactions);
        
echo "<br><br>";

echo "Exercise 9 <br>";
     $a = [0, 1, 2, 3, 4, 5, 6];
     $sum = 0;
     foreach($a as $value){
         $sum += $value;
     }
     echo $sum;
echo "<br><br>";
    
?>