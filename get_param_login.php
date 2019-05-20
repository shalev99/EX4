<!DOCTYPE html>

<html>

<head>
    <title>TS-form2</title>

</head>

<body>

        <section>

            Welcome

                    <?php

                            $un  =$_GET{"reg_un"};

                            $pw  =$_GET{"reg_pass"};

                            if($un=="tal" && $pw==9999)
                            echo "<h2> Hey " . $un . " </h2>";
                            else
                            echo "<h2> Try agian!! </h2>";

                    ?>



        </section>          


</body>


</html>