<?php
$team_1_data = ["cameroun", 3];// Création du tableau
echo $team_1_data[0];

// On remplit les équipes de leurs informations
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

var_dump($team_2_data); // Affiche les informations sur le tableau
print_r($team_2_data);

echo $team_2_data["name"];
//var_dump($team_2_data[0]); // Ne fonctionne pas. On n'accède pas à l'indice lorsque nous avons un tableau associatif
echo "<br><br>";

foreach ($team_2_data as $data) {
    echo "<br><br>";
    echo $data;
}

$team_3_data = [
    "name" => "Mali",
    "score" => 2,
    "url" => "www.Mali.com"
];

echo "<br><br>";

$teams = [$team_1_data, $team_2_data, $team_3_data];
var_dump($teams);

echo "<br><br>";
echo "<ul>";

foreach ($teams as $data) {
    echo "<br><br>";
    if ($data["score"] == 2) {
        ?>
        <li>L'équipe du <?= $data["name"] ?> a <?= $data["score"] ?> points</li>
        <?php
    }
}
echo "</ul>";

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
?>
