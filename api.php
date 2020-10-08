<?php

include "database-dischi.php";

header("Content-type: application/json");
echo json_encode($dischi);

?>
