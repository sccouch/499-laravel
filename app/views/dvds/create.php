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
    <?php foreach($errors->all() as $error) : ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
    <?php endforeach; ?>
    <form method="post" action="/dvds">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo Input::old("title")?>">
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
                    $option = "<option value=$genre->id";
                    if (Input::old("genre") == $genre->id)
                        $option .= " selected";
                    $option .= ">$genre->genre_name</option>";
                    echo $option;
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Label</label>
            <select class="form-control" name="label">
                <?php foreach ($labels as $label) {
                    $option = "<option value=$label->id";
                    if (Input::old("label") == $label->id)
                        $option .= " selected";
                    $option .= ">$label->label_name</option>";
                    echo $option;
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Sound</label>
            <select class="form-control" name="sound">
                <?php foreach ($sounds as $sound) {
                    $option = "<option value=$sound->id";
                    if (Input::old("sound") == $sound->id)
                        $option .= " selected";
                    $option .= ">$sound->sound_name</option>";
                    echo $option;
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Format</label>
            <select class="form-control" name="format">
                <?php foreach ($formats as $format) {
                    $option = "<option value=$format->id";
                    if (Input::old("format") == $format->id)
                        $option .= " selected";
                    $option .= ">$format->format_name</option>";
                    echo $option;
                } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>