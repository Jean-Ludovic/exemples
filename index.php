<?php
$team_1_data = [
    "name" => "Cameroun",
    "score" => 3,
    "url" => "www.lionsIndomptables.com"
];
$team_2_data = [
    "name" => "Togo",
    "score" => 2,
    "url" => "www.Togo.com"
];

$team_3_data = [
    "name" => "Mali",
    "score" => 2,
    "url" => "www.Mali.com",
];
$teams = [$team_1_data, $team_2_data, $team_3_data];
$team_4_data = [
    "name" => "Burkina",
    "score" => 0.5,
    "url" => "www.burkina.com"
];
array_push($teams, $team_4_data);
function showTeams($teams)
{
    ?>
    <table border='4'>
    <tr><th>nom</th><th>score</th><th>url</th></tr>
    <?php
    foreach ($teams as $teamData) {
        ?>
        <tr>
        <td><?= $teamData["name"] ?></td>
        <td><?= $teamData["score"] ?></td>
        <td><?= $teamData["url"] ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}
echo "<br><br>";
function addTeam(&$teams, $name, $score, $url)
{
    $newTeam = [
        "name" => $name,
        "score" => $score,
        "url" => $url
    ];
    array_push($teams, $newTeam);
}
echo "<br><br>";
addTeam($teams, "Nigeria", 4, "www.Nigeria.com");
addTeam($teams, "Angola", 5, "www.Angola.com");
showTeams($teams);
function updateTeamScore(&$teams, $teamName, $newScore) {
    foreach ($teams as &$teamData) {
        if ($teamData['name'] === $teamName) {
            $teamData['score'] = $newScore;
            return; 
        }
    }
}


updateTeamScore($teams, "Burkina", 5);


showTeams($teams);


    
echo "<br>";
showTeams($teams);
?>
