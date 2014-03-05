<!doctype html>
<html>
<head>
    <title>Movie Search</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Search Results</h1>
    <?php if (count($movies) > 0) : ?>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Release Year</th>
                <th>Critic's Score</th>
                <th>Audience Score</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($movies as $movie) : ?>
                <tr>
                    <td><?php echo $movie->title; ?></td>
                    <td><?php echo $movie->year; ?></td>
                    <td><?php echo $movie->ratings->critics_score; ?></td>
                    <td><?php echo $movie->ratings->audience_score; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-danger text-center">
            Your Search did not match any movies in the database.
            Return to <a href="/rt/search" class="alert-link">Search</a>.
        </div>
    <?php endif; ?>
</div>
</body>
</html>