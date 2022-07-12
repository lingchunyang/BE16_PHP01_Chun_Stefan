<?php
$char_arr = array(
    "SonGoku" => array(
        "name" => "Songoku",
        "age" => 50,
        "anime_name" => "Dragonball"
    ),
    "Pikachu" => array(
        "name" => "Pikachu",
        "age" => 5,
        "anime_name" => "Pokemon"
    )
);
echo    "<table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Name</th>
                        <th scope='col'>Age</th>
                        <th scope='col'>Anime</th>
                    </tr>
                </thead>";

foreach ($char_arr as $key => $val) {
    echo "<tbody>
                <td>{$val['name']}</td>
                <td>{$val['age']}</td>
                <td>{$val['anime_name']}</td>
            </tbody><br>";
}
echo "</table>";