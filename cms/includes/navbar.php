<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                // 1 get data
                $categoriesQuery = " SELECT * FROM `categories` ";
                $allCategories = mysqli_query($connection, $categoriesQuery);

                //2 divid
                while ($row = mysqli_fetch_assoc($allCategories)) :
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_name'];
                ?>
                    <li>
                        <a href="categories.php?cat=<?=$cat_id?>"><?=$cat_title?></a>
                    </li>

                <?php endwhile; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>