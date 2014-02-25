<!DOCTYPE html>
<html>
<head>
    <title>Add a DVD</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Add a DVD</h1>
    <?php if (Session::has("success")) : ?>
        <div class="text-center alert alert-success">
            <?php echo Session::get("success") ?>
        </div>
    <?php endif; ?>
    <form method="post" action="/dvds">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Rating</label>
            <select class="form-control" name="rating">
                <?php foreach ($ratings as $rating) {
                    echo "<option value=$rating->id>$rating->rating_name</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Genre</label>
            <select class="form-control" name="genre">
                <?php foreach ($genres as $genre) {
                    echo "<option value=$genre->id>$genre->genre_name</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Label</label>
            <select class="form-control" name="label">
                <?php foreach ($labels as $label) {
                    //if (! is_null($label->label_name))
                        echo "<option value=$label->id>$label->label_name</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Sound</label>
            <select class="form-control" name="sound">
                <?php foreach ($sounds as $sound) {
                    echo "<option value=$sound->id>$sound->sound_name</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Format</label>
            <select class="form-control" name="format">
                <?php foreach ($formats as $format) {
                    echo "<option value=$format->id>$format->format_name</option>";
                } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>