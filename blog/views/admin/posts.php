
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
            <h2>Posts</h2>
            <a href="<?php BASE_URL; ?>posts/create" class="btn btn-primary">New Post</a>
            <table class="table">
            <caption>Table content blogs</caption>
            <thead>
            <tr>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($blogPosts as $blogPost): ?>
            <tr>
                <td><?php echo $blogPost['title'] ?></td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php endforeach?>
            </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <h2>Sidebar</h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum risus et posuere pharetra. Maecenas et nisl vitae dui efficitur maximus sed sit amet odio. Vestibulum non euismod est. Aenean sollicitudin erat non ultricies dictum. Aliquam a nisi ornare, ornare felis ut, bibendum leo. Nam mollis tellus non ipsum eleifend consectetur. Nullam sollicitudin turpis non lobortis ornare. Nunc feugiat, ex vel fermentum pharetra, mi neque sagittis lectus, et dignissim turpis massa ut purus. Nam ut leo eros. Fusce interdum pellentesque nulla eleifend faucibus.

        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    This is a footer
                    <a href="<?php echo BASE_URL; ?>admin/">Admin panel</a>
                </footer>
            </div>
        </div>
    </div>
</div>

</body>
</html>