<?php $users = [
    [
        "name" => "Mari",
        "favoriteColor" => "blue"
    ],
    [
        "name" => "Santa",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Shrek",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Iron Man",
        "favoriteColor" => "red"
    ],
    [
        "name" => "Hulk",
        "favoriteColor" => "green"
    ],
    [
        "name" => "Hugues",
        "favoriteColor" => "blue"
    ]
];

foreach ($users as $user){
    if ($user["favoriteColor"] === $_GET["colour"]){ ?>
        <p><?= $user["name"] ?></p>
    <?php } ?>
<?php } ?>