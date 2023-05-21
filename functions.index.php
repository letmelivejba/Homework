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

require "index.view.php";
