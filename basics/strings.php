<!DOCTYPE html>
<html>
    <head>
        <title>Strings</title>
    </head>
    <body>

        <?php
        
        echo str_word_count("Hello world!");//counts the words in string
        echo "<hr />";
        echo strlen("Hello world!");//counts the total letters in string
        echo "<hr />";


        echo strrev("Hello world!"); // reverse the string
        echo "<hr />";


        echo strpos("Hello world!", "world"); // outputs the position of text in the string
        echo "<hr />";


        echo str_replace("world", "John", "Hello world!"); // replaces text inside the string
        //replaces world with john in hello world....output- hello john
        echo "<hr />";
        ?>

    </body>
</html>