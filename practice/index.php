<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: #000000; color: #ffffff">

    <main>
        <form action="./includes/formHandler.inc.php" method = "post">
            <label for="firstname">Firstname: </label>
            <input type="text" name="firstname" id="firstname" placeholder = "enter your firstname...">
            <br><br>
            <label for="lastname">Lastname: </label>
            <input type="text" name="lastname" id="lastname" placeholder = "enter your lastname...">
            <br><br>
            <label for="favpet">Favourite pet: </label>
            <select name="favpet" id="favpet">
                <option value="none">None</option>
                <option value="dogs">Dogs</option>
                <option value="cats">Cats</option>
                <option value="fishes">Fishes</option>
                <option value="birds">Birds</option>
            </select>
            <br><br>
            <button type="submit">submit</button>
         </form>
    </main>
    <?php

        // echo "hello world<br>";
        // $name = "Aritra Kumar";
        // echo $name;
        // echo "<br>";
        // echo $_SERVER["DOCUMENT_ROOT"];
        // echo "<br>";
        // echo $_SERVER["SERVER_NAME"];

        // string operator:

        // $a = "Hello";
        // $b = "World";
        // echo $a . " " . $b;

        // switch case:

        // $number = 2;
        // switch ($number) {
        //     case 1:
        //         echo 1;
        //         break;

        //     case 2:
        //         echo 2;
        //         break;
            
        //     default:
        //         echo "no numebr";
        //         break;
        // }
        
        // // arrays:

        // $foods = array("pasta", "pizza", "fried-chickne");
        // // $country = ["India", "USA", "Japan"];
        // echo $foods[1] . "<br><br>";
        // $foods[] = "biriyani"; // appends this item at the end
        // foreach($foods as $food){
        //     echo $food . "<br>";
        // }

        // print_r($foods);

        // echo "<br>";

        // // remove from the array:

        // unset($foods[1]); // unsets the value of the index but index still exists. It does not moves the array up, if printed throws an error
        // // echo $foods[1]; // now removed
        // foreach($foods as $food){
        //     echo $food . "<br>";
        // }

        // // better method to remove item from array: this would actually remove pasta and move pizza to index 0

        // array_splice($foods, 0, 1); // array, starting index, length to go
        // echo $foods[0];
        
        // // associative array:

        // $myFavFoods = [
        //     1 => "pasta",
        //     2 => "pizza",
        //     3 => "biriyani"
        // ];

        // echo count($myFavFoods); // returns how many elements in the array

        // echo "<br>";
        // echo $myFavFoods[1];

        // // multidiamentional array:

        // $fruits = [
        //     array("apple", "banana"),
        //     "orange",
        //     "mango"
        // ];

        // echo "<br>";
        // print_r($fruits); // literally prints the arrray as it is, if used on normal array, it prints it like an associative array

        // echo "<br>";
        // echo $fruits[2][0];

        // echo "<br>";
        // $f1Drivers = ["Max", "Lando", "Oscar"];
        // echo $f1Drivers[0][0];

        // array_splice($fruits, 0, 1);
        // echo "<br>";
        // echo $fruits[0]; 
        // echo "<br>";
        // print_r($fruits);

        // // array functions:

        // $array = ["apple", "banana", "orange"];
        // $array2 = ["mango", "pear", "date"];
        // echo count($array); // count elements
        
        // array_push($array, "kiwi"); // pushed at the end

        // array_pop($array); // pops last element
        
        // echo "<br>";
        // print_r(array_reverse($array));
        
        // echo "<br>";
        // print_r(array_merge($array, $array2));

        // // Strings:
        
        // $string = "hello world!";

        // echo strlen($string);
        // echo "<br>";
        // echo str_replace("world!", "World!", $string); // "what_do_you_want_to_replace", "with_what", array
        // echo "<br>";
        // echo strtolower($string);

        // // substrings:

        // $string = "Aritra Kumar";
        // echo substr($string, 1, 2); // array, starting_index, length to go
        // echo "<br>";
        // echo substr($string, 2, -2); // -2 here means stop that many characters before the end of the string, result: itra Kum

        // foreach loop:

        // $array = ["apple", "banana", "orange"];
        // foreach ($array as $fruit) {
        //     echo $fruit . "<br>";
        // }

        // $myFavFoods = [
        //     1 => "pasta",
        //     2 => "pizza",
        //     3 => "biriyani"
        // ];

        // foreach ($myFavFoods as $key => $value) {
        //     echo "key: " . $key . " " . "value: " . $value . "<br>";
        // }

        // foreach ($myFavFoods as $food) {
        //     echo $food . "<br>"; // here it would spit out the value, not key
        // }
    ?>
</body>
</html>