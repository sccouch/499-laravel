<!doctype html>
<html>
<head>
    <title>DVD Search</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>
<form method="get" action="/dvds">
    <div>
Title:
        <input type="text" name="title"/>
    </div>
    <div>
<?php
$host = 'itp460.usc.edu';
$dbname = 'dvd';
$user = 'student';
$pass = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$sql = "
    SELECT genre_name
    FROM genres
";

$statement = $pdo->prepare($sql);

$statement->execute();
$genres = $statement->fetchAll(PDO::FETCH_OBJ);
?>
Genre:
        <select name="genre">
            <option value="all">All</option>
        <?php foreach($genres as $genre) : ?>
            <option value=<?php echo $genre->genre_name?>><?php echo $genre->genre_name ?></option>
        <?php endforeach ?>
        </select>
    </div>
    <?php
    $sql = "
    SELECT rating_name
    FROM ratings
";

    $statement = $pdo->prepare($sql);

    $statement->execute();
    $ratings = $statement->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div>
        Rating:
        <select name="rating">
            <option value="all">All</option>
            <?php foreach($ratings as $rating) : ?>
                <option value=<?php echo $rating->rating_name?>><?php echo $rating->rating_name ?></option>
            <?php endforeach ?>
        </select>
    </div>
    </div>
    <div>
        <input type="submit" value="Search" />
    </div>
</form>


</body>
</html>