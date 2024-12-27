<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function json_result($result_data, $decode = false)
    {
        header('Content-Type: application/json');
        if($decode)
            echo htmlspecialchars_decode(json_encode($result_data));
        else
            echo json_encode($result_data);
        exit();
    }
}
