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
                <a class="navbar-brand" href="login">aboodChat</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('Profile')}}">Profile</a></li>
                <li><a href="{{route('login')}}">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- ./nav -->
    <!-- main -->
    <main class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <hr>
                <div>
                    <!-- post -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table>
                                <td>
                                    <p>Title : </p>
                                </td>
                                <td>
                                    <p style=" padding-left:3px;"> {{$post->title}} </p>
                                </td>
                            </table>
                        </div>
                        <hr style=" margin-top:1px;">
                        <div class="panel-body">
                            <p> {{$post->post_content}} </p>
                        </div>
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            <hr>
                            <div style="margin-left:20px; margin-right:20px; ">
                                <input class="form-control" type="text" name="comment_text" placeholder="add comment">
                                <input type="hidden" name="post_id" value="39">
                                <input type="hidden" name="user_id" value="20">
                            </div>
                            <hr>
                            <div class="panel-footer">
                                <span>posted at {{$post->updated_at}} by $post->User->name</span>
                                <button class="pull-right" type="submit">save</button>
                            </div>
                        </form>
                    </div>
                    <!-- ./post -->
                </div>
                <!-- ./feed -->
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </main>
    <!-- ./main -->

    <script type="text/javascript" src="/master-template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/master-template/js/script.js"></script>
</body>

</html>