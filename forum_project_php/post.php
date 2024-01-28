<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!------ Include the above in your HEAD tag ---------->
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <title>Post</title>


    <style>
        .posting_guideline {
            border: 1px solid black;
            float: right;
        }

        .posting_guideline h3,
        .posting_guideline p {
            border-bottom: 1px solid black; /* Add a border to the bottom of h3 and p */
        }
        .short-search-bar {
            width: 50px !important;/* Adjust the width as needed */
        }
        .post-form,
        .search-bar {
            margin-left: 50px; /* Adjust the margin as needed */
        }

	</style>

</head>


    
    <?php
        include 'navbar.php';
    ?>
    <!--navbar end-->
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-3">
			</div>
			<div class="col-6">
                <!--search bar begins-->
                <div class = "container-pr-3">
                <div class = "col-5">
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm short-search-bar" id="searchInput" placeholder="Search Community">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                    </div>
                </div>    
            </div>
        </div>
                <!--search bar end-->
        <div class = "col-md-12">
				<!--- Post Form Begins -->
                <form action="homepage.php" method="post" enctype="multipart/form-data">
                <section class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Create Post</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <div class="form-group">
                                <label for="fileInput">Picture & Video</label>
                                <input type="file" class="form-control-file" accept="image/*, video/*" name="fileInput" id="fileInput">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="message">post</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Description"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="text-right">                      
                        	<button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
    </form>
                </section>
                <!--- Post Form Ends -->
			</div>
        </div>
            <!--posting guideline-->
            <div class="col-3">
                <div class="card">
                    <div class="card-body p-3">
                        <h5 class="card-title m-0">Posting guideline</h5>
                        <div class="list-group list-group-flush">
                            <p class="list-group-item mb-1 pb-1">1. Behave like you would in real life</p>
                            <p class="list-group-item mb-1 pb-1">2. Look for the original source of content</p>
                            <p class="list-group-item mb-1 pb-1">3. Search for duplicates before posting</p>
                            <p class="list-group-item mb-1 pb-1">4.Read the Community Rules</p>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>