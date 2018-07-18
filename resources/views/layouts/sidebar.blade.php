<style>
    .sidebar
    {
        height: 100%;
        width: 20%;
        position: fixed;
        z-index: 1;
        top: 55;
        right: 0;
        background-color: #212323;
        overflow-x: hidden;
        padding-top: 20px;
    }
    .side-content a
    {
        color: rgba(255,255,255,.5);
        font-size: 0.8rem;
        line-height: 35px;
        text-decoration: none;
    }

    .side-content a:hover
    {
        color: white;
    }
    
    .side-content
    {
        padding-left: 15px;
    }
</style>

<div class="sidebar">
@foreach($movie_latest as $movie)
    <div class="side-content">
      <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
    </div>
 @endforeach
    
<div>