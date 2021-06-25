<?php
require_once("php_parts/header.php");
$targetTable=$_GET["table"];
$targetIndex=array();
?>
<div class="container">

    <div class="row">
        <table class="table m-2">

            <tr class="text-light bg-secondary">
                <?php
                
                $row=grabTable($targetTable);
                $rowTitles=grabTable($targetTable);
                 
                 foreach ($row as $index => $data)
                {
                  
                    if ($index==0) {
                        //---récupérer les intitulés des colonnes de la table
                        $keys=array_keys($rowTitles->fetch(PDO::FETCH_ASSOC));
                        foreach ($keys as $keyName) {
                            echo "<th>".$keyName."</th>";
                        };
                    }
                    ?>
            </tr>

            <tr>
                <?php
                    foreach($data as $key=>$value)
                    if (gettype($key)=="string") {
                        {
                    echo "<td>".$value."</td>";
                    }
                    }

                ?>

            </tr>
            <?php
                }
                ?>
        </table>
    </div>
</div>




<?php
require_once("php_parts/footer.php");
?>