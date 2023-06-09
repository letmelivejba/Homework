<?
/*Create an array of your favorites movies, including their 
respective release dates. Then, write a function that filters 
your list of movies down to only those that were released in 
the year 2000 or higher. Display the results in an unordered 
list.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Function & Filters</title>
</head>
<body>
        <?php
        $books = [
            [
                'name' => 'All the Light We Cannot See',
                'published' => '2005',
                'author' => 'Anthony Doerr',
                'wiki' => 'https://en.wikipedia.org/wiki/All_the_Light_We_Cannot_See'
            ],
            [
                'name' => 'Wolf Totem',
                'published' => '2004',
                'author' => 'Jiang Rong',
                'wiki' => 'https://en.wikipedia.org/wiki/Wolf_Totem'
            ],
            [
                'name' => 'The Fault in Our Stars',
                'published' => '2012',
                'author' => 'John Green',
                'wiki' => 'https://en.wikipedia.org/wiki/The_Fault_in_Our_Stars'
            ],
            [
                'name' => 'Uncle Styopa',
                'published' => '1936',
                'author' => 'Sergel Stypa',
                'wiki' => 'https://en.wikipedia.org/wiki/Uncle_Styopa'
            ],
            [
                'name' => 'Pride and Prejudice',
                'published' => '1813',
                'author' => 'Jane Austen',
                'wiki' => 'https://en.wikipedia.org/wiki/Pride_and_Prejudice'
            ],

        ];

        function filter($datas, $fn) {
           $filteredData = [];

           foreach ($datas as $data) {
            if ($fn($data)) {
                $filteredData[] = $data;
            }
           }
         return $filteredData;
        };
         $filteredBooks = filter($books, function ($book){ 
            return $book['published'] >= 1930  && $book['published'] <= 2005;
         });
    ?>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
          
        <li>
                <a href="<?= $book['wiki']; ?>"> 
                     <?= $book['name']; ?> (<?= $book['published'] ?>) - By <?=  $book['author'] ?>
                </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>