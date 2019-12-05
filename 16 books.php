<?php
//создание массива
$array = array(
    [
        "name" => "Пушкин",
        "year" => 1799,
        "email" => "alexandr@sergeevich.ru",
        "books" => array(
            [
                "name" => "Пиковая дама",
                "year" => "1833",
            ],
            [
                "name" => "Руслан и Людмила",
                "year" => "1820",
            ],
        )
    ],
    [
        "name" => "Булгаков",
        "year" => 1891,
        "email" => "bulgakov@mail.ru",
        "books" => array(
            [
                "name" => "Мастер и Маргарита",
                "year" => "1940",
            ],
            [
                "name" => "Собачье сердце",
                "year" => "1925",
            ],
        )
    ],
    [
        "name" => "Николай Васильевич",
        "year" => 1809,
        "email" => "gogol@gogol.ru",
        "books" => array(
            [
                "name" => "Мертвые души",
                "year" => "1841",
            ],
            [
                "name" => "Вий",
                "year" => "1834",
            ],
        )
    ],
);

$book = "Мертвые души";
// Вывод списка книг(закоментирован поиск книги по названию)
function book($book, $array)
{
    echo "<br/>Книги:<br/>";
    foreach ($array as $a) {
        $books = $a["books"];
//        $name = $a["name"];;
        foreach ($books as $b) {
//            if ($b["name"] == $book) {
            echo $b["name"], '-' . $a["name"], '-' . $b["year"], "<br/>";
//            }
        }
    }
}

// Вывод списка авторов(закоментирован поиск автора по имени)
$author_name = "Пушкин";
function authors($author_name, $array)
{
    echo "Авторы:<br/>";
    foreach ($array as $a) {
        $year = $a["year"];
        $author = $a["name"];
        $email = $a["email"];


//            if ($author == $author_name) {
        echo $author, '-' . $year, '-' . $email, "<br/>";
//            }
    }
}
authors($author_name, $array);
book($book, $array);
?>