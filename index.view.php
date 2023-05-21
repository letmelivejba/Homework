<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Function & Filters</title>
</head>
<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>  //error dda sa array   na $filteredBooks      
        <li>
                <a href="<?= $book['wiki']; ?>"> 
                     <?= $book['name']; ?> (<?= $book['published'] ?>) - By <?=  $book['author'] ?>
                </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>