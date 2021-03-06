<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/assets/css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('post-create') }}">Create Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/assets/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>CREATE POST</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <form action="{{ route('post-submit') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="post">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-control-label" for="title">Title</label>
                        <div class="controls">
                            <div class="input-group">
                                <input id="title" class="form-control" type="text" name="title" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-control-label" for="slug">Slug</label>
                        <div class="controls">
                            <div class="input-group">
                                <input id="slug" class="form-control" type="text" name="slug">
                            </div>
                        </div>
                    </div>                                      
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-control-label" for="description">Description</label>
                        <div class="controls">
                            <div class="input-group">
                                <textarea name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-control-label" for="content">Content</label>
                        <div class="controls">
                            <div class="input-group">
                                <textarea name="content"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-control-label" for="category_id">Category</label>
                        <div class="controls">
                            <div class="input-group">
                                <select id="category_id" name="category_id" class="form-control" placeholder="Please Select" required>
                                    <option value="">&nbsp;</option>
                                    @foreach($categories as $val)
                                        <option value="{{ $val->id }}">{{ $val->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-6">
                        <label class="form-control-label" for="images">Image</label>
                        <div class="controls">
                            <div class="input-group">
                                <input id="images" class="form-control" type="file" name="images">
                            </div>
                        </div>
                    </div>                                    
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/assets/js/clean-blog.min.js"></script>

  </body>

</html>
