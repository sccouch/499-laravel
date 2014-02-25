<!doctype html>
<html>
<head>
    <title>DVD Search</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Search Results</h1>
    <?php if (count($dvds) > 0) : ?>
        <table class="table table-bordered table-striped">
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
            <?php foreach ($dvds as $dvd) : ?>
                <tr>
                    <td><?php echo $dvd->title; ?></td>
                    <td><?php echo $dvd->rating->rating_name; ?></td>
                    <td><?php echo $dvd->genre->genre_name; ?></td>
                    <td><?php echo $dvd->label->label_name; ?></td>
                    <td><?php echo $dvd->sound->sound_name; ?></td>
                    <td><?php echo $dvd->format->format_name; ?></td>
                    <td><?php echo $dvd->release_date; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-danger text-center">
            Your Search did not match any dvds in the database.
            Return to <a href="/dvds/search" class="alert-link">Search</a>.
        </div>
    <?php endif; ?>
</div>
</body>
</html>