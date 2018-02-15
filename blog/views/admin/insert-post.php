
<html>

<head>
    <title>Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Blog Title</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-md-8">
            <h2>New Post</h2>
           <p> <a class="btn btn-secondary" href="<?php echo BASE_URL;  ?>admin/posts" >Back</a> </p>
            <?php
             if (isset($result) && $result){
                 echo '<div class="alert alert-success">Post guardado satisfactoriamente</div>';
             }
            ?>

            <form  method="post">
                <div class="form-group">
                    <label  for="inputTitle">Title</label>
                    <input class="form-control" type="textt" name="title" id="inputTitle">
                </div>
                <textarea class="form-control" rows="5" name="content"></textarea>
                <br>
                <input class="btn btn-primary" type="submit" value="Save">
            </form>

        </div>
        <div class="col-md-4">
            <h2>Sidebar</h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum risus et posuere pharetra. Maecenas et nisl vitae dui efficitur maximus sed sit amet odio. Vestibulum non euismod est. Aenean sollicitudin erat non ultricies dictum. Aliquam a nisi ornare, ornare felis ut, bibendum leo. Nam mollis tellus non ipsum eleifend consectetur. Nullam sollicitudin turpis non lobortis ornare. Nunc feugiat, ex vel fermentum pharetra, mi neque sagittis lectus, et dignissim turpis massa ut purus. Nam ut leo eros. Fusce interdum pellentesque nulla eleifend faucibus.

        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    This is a footer
                    <a href="admin/index.php"
                </footer>
            </div>
        </div>
    </div>
</div>

</body>
</html>