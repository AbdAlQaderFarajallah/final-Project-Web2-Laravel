<!DOCTYPE html>
<html>
<head>
    <title>aboodChat</title>

    <link rel="stylesheet" type="text/css" href="/master-template/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/master-template/css/style.css">
</head>
<body>
<!-- nav -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('login')}}">aboodChat</a>
        </div>
    </div>
</nav>
<!-- ./nav -->

<!-- main -->
<main class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">

            <!-- feed -->
            <div>
                <!-- post -->
                <form method="post" action="{{route('post.store')}}">
                    @csrf
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input class="form-control" type="text" name="Title" placeholder="Title">
                            <hr>
                            <input class="form-control" type="text" name="content" placeholder="Post Content" multiple>

                            <input type="hidden" name="user_id" value= {{Auth::User()->id}} >

                        </div>
                        <div class="panel-footer">
              <span class="input-group-btn">
              <button style="margin-left:43%;" class="btn btn-success" type="submit" name="post">Post</button>
            </span>
                        </div>
                    </div>
                </form>
                <!-- ./post -->
            </div>
            <!-- ./feed -->
        </div>
    </div>
</main>
<!-- ./main -->


<script type="text/javascript" src="/master-template/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/master-template/js/script.js"></script>
</body>
</html>