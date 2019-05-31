 @foreach($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
       
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach