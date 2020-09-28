<h1 class="title">Star Wars</h1>

Will the following block of code accomplish that?

<?php

$movies[] = array(

        "title" => "Star Wars",

        "year" => 1977

    );

$movies[] = array(

        "title" => "The Empire Strikes Back",

        "year" => 1980

    );

$movies[] = array(

        "title" => "Return of the Jedi",

        "year" => 1983

    );

?><h1 class="title"><?php echo $movies[1]["title"]; ?></h1>