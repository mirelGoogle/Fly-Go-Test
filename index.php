<?php

function get_crossword_data_by_date($input_date)
{

    $crossword_data = json_decode(file_get_contents('answers.json'), true);

    $result = $crossword_data;

    // Filter data by input_date
    $input_date &&
        $result = array_filter($crossword_data, function ($entry) use ($input_date) {
            return $entry["date"] === $input_date;
        });

    return $result;
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $input_date = $_GET["date"] ?? null;

    $crossword_data_by_date = get_crossword_data_by_date($input_date);

    // Convert the result to a JSON format and print each entry separately
    foreach ($crossword_data_by_date as $entry) {
        echo json_encode($entry) . PHP_EOL;
    }
}
