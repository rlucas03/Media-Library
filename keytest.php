<?php

$books["978-0743261690"] = "Gilgamesh";
$books["978-0060931957"] = "The Odyssey";
$books["978-0192840509"] = "Aesop's Fables";
$books["978-0520227040"] = "Mahabharta";
$books["978-0393320978"] = "Beowulf";

?><html>
<head>
    <title>Five Great Books</title>
</head>
<body>
    <h1>Five Great Books</h1>
    <ul> 
        <?php foreach($books as $isbn=> $book) { ?>
            <li><?php echo $book . " " . "($isbn)"; 

            ?></li>
        <?php } 

        // Next, modify the code inside the foreach loop to display both the $title and the $isbn. After the title, add a space, an opening parenthesis, the ISBN, and a closing parenthesis, like this:


        ?>
    </ul>
</body>
</html>