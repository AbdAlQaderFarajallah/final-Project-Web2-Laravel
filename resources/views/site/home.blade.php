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
        <!-- profile brief -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>nicholaskajoh</h4>
            <p>I love to code!</p>
          </div>
        </div>
        <!-- ./profile brief -->
        <!-- friend requests -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>friend requests</h4>
            <ul>
              <li>
                <a href="#">johndoe</a>
                <a class="text-success" href="#">[accept]</a>
                <a class="text-danger" href="#">[decline]</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./friend requests -->
      </div>
      <div class="col-md-6">
        <!-- post form -->
        <div class="input-group">
          <span class="input-group-btn">
            <a class="btn btn-success" style="margin-left:43%;" href="{{route('post.create')}}"> Add Post </a>
          </span>
        </div>
        <hr>
        <!-- ./post form -->
        <!-- feed -->
        <div>
          <!-- post -->
          @foreach($posts as $post)
          <div class="panel panel-default">
            <div class="panel-body">
              <table>
                <td>
                  <p>Title : </p>
                </td>
                <td>
                  <p style=" padding-left : 3px; "> {{$post->title}} </p>
                </td>
              </table>
            </div>
            <hr style=" margin-top:1px;">
            <div class="panel-body">
              <p> {{$post->post_content}} </p>
            </div>
            <div class="panel-footer">
              <span>posted {{$post->updated_at}} by {{$post->User->name}}</span>
              @if(\Illuminate\Support\Facades\Auth::user()->id == $post->user_id)
              <form class="pull-right" action="{{route('post.destroy' , $post)}}" method="post">
                @method('DELETE')
                @csrf
                <button style="margin-left:5px;"> delete </button>
              </form>
              @endif
              <!-- feed -->
              <hr>
              <div>
                <!-- post -->
                <form method="post" action="{{route('comment.store')}}">
                  @csrf
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <input class="form-control" type="text" name="comment_text" placeholder="Comment">
                      <input type="hidden" name="post_id" value="{{$post->id}}">
                      <input type="hidden" name="user_id" value={{Auth::User()->id}}>
                    </div>
                    <div class="panel-footer">
                      <span class="input-group-btn">
                        <button style="margin-left:38%;" class="btn btn-success" type="submit" name="post">Add comment</button>
                      </span>
                    </div>
                  </div>
                </form>
                <hr>
                <!-- ./post -->
              </div>
              <!-- ./feed -->
              @foreach($post->comments as $comment)
              <!-- <div class="panel-body"> -->
              <p>name : {{$comment->user->name}} #=> comment : {{$comment->comment_text}} </p>
              <!-- </div> -->
              @endforeach
            </div>
          </div>
          @endforeach()
          <!-- ./post -->
        </div>
        <!-- ./feed -->
      </div>
      <div class="col-md-3">
        <!-- add friend -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>add friend</h4>
            <ul>
              <li>
                <a href="#">alberte</a>
                <a href="#">[add]</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./add friend -->
        <!-- friends -->
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>friends</h4>
            <ul>
              <li>
                <a href="#">peterpan</a>
                <a class="text-danger" href="#">[unfriend]</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- ./friends -->
      </div>
    </div>
  </main>
  <!-- ./main -->
  <!-- footer -->
  <footer class="container text-center">
    <ul class="nav nav-pills pull-right">
      <li>aboodChat - Made by [abood fouad]</li>
    </ul>
  </footer>
  <!-- ./footer -->
  <script type="text/javascript" src="/master-template/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/master-template/js/script.js"></script>
</body>

</html>