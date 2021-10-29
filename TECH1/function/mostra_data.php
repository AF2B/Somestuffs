<?php

function mostra_data($data) {
    $data = explode("-", $data);
    $data = $data[2] . "/" . $data[1] . "/" . $data[0];
    return $data;
}
