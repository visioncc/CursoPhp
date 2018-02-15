
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
             <?php

             foreach ($blogPosts as $blogPost){
              echo '<div class="blog-post">';
              echo '<h2>' . $blogPost['title'] . '</h2>';
              echo 'Fecha 00-00-00 by <a href="">alex</a>';
              echo '<div class="blog-post-image">';
              echo '<img src="img/Desert.jpg">';
              echo '</div>';
              echo '<div class="blog-post-content">';
              echo $blogPost['content'];
              echo '</div>';
              echo '</div>';
             }
             ?>
         </div>
         <div class="col-md-4">
             <h2>Sidebar</h2>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum risus et posuere pharetra. Maecenas et nisl vitae dui efficitur maximus sed sit amet odio. Vestibulum non euismod est. Aenean sollicitudin erat non ultricies dictum. Aliquam a nisi ornare, ornare felis ut, bibendum leo. Nam mollis tellus non ipsum eleifend consectetur. Nullam sollicitudin turpis non lobortis ornare. Nunc feugiat, ex vel fermentum pharetra, mi neque sagittis lectus, et dignissim turpis massa ut purus. Nam ut leo eros. Fusce interdum pellentesque nulla eleifend faucibus.

         </div>
         <div class="row">
             <div class="col-md-12">
             <footer>
                 This is a footer
                 <br>
                 <a href="<?php echo BASE_URL;?>admin/">Admin panel</a>
             </footer>
             </div>
         </div>
     </div>
 </div>

</body>
</html>