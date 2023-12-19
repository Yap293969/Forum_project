<!DOCTYPE html>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="CSS/resourceslibrary.css">
    </head>
    <body>
        

    <?php
    include '';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="search-form">
                    <div class="input-group">
                        <input id="input-1" class="form-control" type="text" aria-describedby="search-btn">
                        <label for="input-1" class="sr-only">Search</label>
                        <div class="input-group-append">
                            <button id="search-btn" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="topics-table">
                    <li class="topics-header">
                    <ul class="header-titles">
                        <li>Forum</li>
                        <li>Topics</li>
                        <li>Posts</li>
                        <li>Freshness</li>
                    </ul>
                    </li>
                    <li class="topics-body">
                        <ul class="topic-item-1">
                            <li>
                                <a class="badge badge-primary" href="">Around the Boards</a>
                            </li>
                            <li>4</li>
                            <li>5</li>
                            <li>
                                
                                <a class="badge badge-info" href="http://skatingbuzz.test/forums/topic/random-4/" title="Random 4">1 week ago</a>
                                <p class="bbp-topic-meta">
                                    <span class="bbp-topic-freshness-author">
                                        <a 
                                        href="http://skatingbuzz.test/forums/user/admin/" 
                                        title="View admin's profile" 
                                        class="bbp-author-name badge badge-info" 
                                        rel="nofollow">
                                            admin
                                        </a>
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <ul class="topic-item-2">
                            <li>
                                <a class="badge badge-primary" href="">Skating Events</a>
                            </li>
                            <li>2</li>
                            <li>4</li>
                            <li>
                                
                                <a class="badge badge-info" href="http://skatingbuzz.test/forums/topic/random-4/" title="Random 4">1 day ago</a>
                                <p class="bbp-topic-meta">
                                    <span class="bbp-topic-freshness-author">
                                        <a 
                                        href="http://skatingbuzz.test/forums/user/admin/" 
                                        title="View admin's profile" 
                                        class="bbp-author-name badge badge-info" 
                                        rel="nofollow">
                                            leslie
                                        </a>
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <?php
    include '';
    ?>

    </body>

</html>