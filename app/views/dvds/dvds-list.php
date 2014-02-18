<!doctype html>
<html>
<head>
    <title>DVD Search</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>

<h1>My DVDs</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Title</th>
        <th>Rating</th>
        <th>Genre</th>
        <th>Label</th>
        <th>Sound</th>
        <th>Format</th>
        <th>Release Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($dvds as $dvd) : ?>
        <tr>
            <td><?php echo $dvd->title ?></td>
            <td><?php echo $dvd->rating_name ?></td>
            <td><?php echo $dvd->genre_name ?></td>
            <td><?php echo $dvd->label_name ?></td>
            <td><?php echo $dvd->sound_name ?></td>
            <td><?php echo $dvd->format_name ?></td>
            <td><?php echo $dvd->added ?></td>

        </tr>
    <?php endforeach ?>
    </tbody>
</table>

</body>
</html>