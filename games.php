<?php 
    header('Access-Control-Allow-Origin: *');

    $games = [
        [
            "image" => "spiderman.jpg",
            "name" => "Marvel Spider Man",
            "playermode" => "Single Player",
            "developer" => "Insominiac",
            "publisher" => "Sony Interactive Entertainment",
            "genre" => ["Action", "Adventure", "Free-Roam", "Open-World", "Figthing"]
        ],

        [
            "image" => "howarts.jpg",
            "name" => "Hogwarts Legacy",
            "playermode" => "Single Player",
            "developer" => "Avalanche Software",
            "publisher" => "Warner Bros. Games",
            "genre" => ["Action", "Adventure", "Magic", "Open-World", "Fantasy"]
        ],
        
        [
            "image" => "valorant.jpg",
            "name" => "Valorant",
            "playermode" => "Multiplayer",
            "developer" => "Riot Games",
            "publisher" => "Riot Games",
            "genre" => ["Tactical-Shooter", "First Person Shooter", "Action", "Team-Based Game", "Competitive Game"]
        ],

        [
            "image" => "league.jpg",
            "name" => "League of Legends",
            "playermode" => "Multiplayer",
            "developer" => "Riot Games",
            "publisher" => "Riot Games",
            "genre" => ["Action", "Multiplayer Online Battle Arena", "Magic", "Team-Based Game", "Fantasy"]
        ],

        [
            "image" => "callofduty.jpg",
            "name" => "Call of Duty Warzone",
            "playermode" => "Multiplayer",
            "developer" => "Raven Software",
            "publisher" => "Activision",
            "genre" => ["Tactical-Shooter", "First Person Shooter", "Action", "Team-Based Game", "Battle Royale"]
        ],

    ];

    $data = json_encode($games);
    echo $data;
?>