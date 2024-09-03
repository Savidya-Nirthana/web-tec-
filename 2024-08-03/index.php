<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $my_str = "php";
        echo "\$hellow world $my_str!!!<br>";
        echo "<pre>\$hell\tow world $my_str!!!<pre><br>";
        echo "<pre>\$hell\tow world $my_str!!!<pre><br>";
        echo "<pre>\$hell\tnow world $my_str!!!<pre><br>";
        echo "<pre>\$hell\tow world $my_str!!!<pre><br>";
        echo "<pre>\$hell\\tow world $my_str!!!<pre><br>";
        echo "<pre>\$hell\row world $my_str!!!<pre><br>";
        echo "<pre>\$hellow world \"$my_str\"!!!<pre><br>";


        $favorite_animal = "cat";
        echo "my favourite animals are {$favorite_animal}s<br>";
        echo "my favourite animals are ${favorite_animal}s<br>";
        

        $my_array["age"] = 34;
        echo "My age is {$my_array["age"]}<br>";

        $my_str = "hellow";
        echo strlen($my_str);
        echo "<br>";
        echo "$my_str[5]";
        $my_str[6] = ".";
        echo "<br>";
        echo $my_str;

        $myString = "Hello, World!";
        echo "<br>";
        echo substr($myString, 0,5);
        echo "<br>";
        echo substr($myString, 7);
        echo "<br>";
        echo substr($myString, -1);
        echo "<br>";
        echo substr($myString,-5, -1);
        echo "<br>";
        
        echo strstr($myString, "Wor")."<br>";
        echo strpos($myString, "o")."<br>";
        $myString = "nay nay nay";
        echo substr_count($myString, "nay")."<br>";

        $url = "www.example.com/public_html/index.php";
        $arr =  explode("/", $url);

        echo $arr[2];

        for($i=strlen($url); $i>=0; $i--){
            if($url[$i] == '/'){
                echo $url[$i];
            }
        }

        $str1 = "football";
        $str2 = "footboll";
        echo "<br>";
        for($i=0; $i<strlen($str1); $i++){
            if($str1[$i] != $str2[$i]){
                echo "first difference between two string at position $i : \"$str1[$i]\" vs \"$str2[$i]\"";
                return;
            }
        }
    ?>
</body>
</html>