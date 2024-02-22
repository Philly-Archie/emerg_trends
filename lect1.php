<?php 
    // define("fuel_price", 4987);
    // echo fuel_price;
    // echo ' ';
    // # printing an array

    // $my_marks = array(10,90,82,87,66,43,60,21,49,57,12);
    // for ($i=0; $i < 11; $i++) { 
    //     echo $my_marks[$i];
    //     echo ",";
    // }

    // foreach($my_marks as $i){
    //     echo $i;
    //     echo "  ";
    // }

    // Making an associative array or dictionary
    $student = array('name'=>'John Doe', 'age'=>25, 'city'=>'New York');
    print_r($student);

    foreach($student as $key => $value){
        echo $key ." => " .$value;
    }

    // Making a multidimensional array of students and details
    $students = array("Philly" => array(
        "age" => 23,
        "race" => "black",
    ),
    "Rodgers" => array(
        "age" => 24,
        "race" => "white",
    )
);
print_r($students)
?>

git branch -M main
git push -u origin main