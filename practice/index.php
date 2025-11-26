<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: #000000; color: #ffffff">

    <!-- <main>
        <form action="./formHandler.php" method = "post">
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
    </main> -->
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
        
        // arrays:

        $foods = array("pasta", "pizza", "fried-chickne");
        $country = ["India", "USA", "Japan"];
        echo $foods[1];
        $foods[] = "biriyani"; // appends this item at the end
        // remove from the array:
        unset($foods[1]);
        echo $foods[1]; // now removed
        // better metho to remove item from array:
        array_splice($foods, 0, 1); // array, starting index, 
        // for ($i=0;4 $i < 4; $i++) { 
            
        // }

    ?>
</body>
</html>