<?php
require __DIR__ . '/../src/Input.php';

function pageController()
{
    $teams = Input::get('teams');  // You'll get an array with team IDs
    // You can var_dump the values if you're curious
    var_dump($teams);
    $teamId = implode(', ', $teams);
    var_dump($teamId);
    $sql = "SELECT * FROM teams WHERE id IN $teamId";
        // Generate the DELETE statement for each team_id
        $delete = "DELETE FROM teams WHERE id IN $teamId";
        // Copy and paste the statements in SQL PRO and verify they're correct.
        var_dump($delete);
    

    // In a real scenario you would normally redirect to the list of teams.
    //header('Location: teams.php');
}
pageController();