@extends('layouts.layout')

@section('pagina', 'Videos')

@section('content')



    <aside class="widget" data-showonscroll="true" data-animation="fadeIn">
        <div class="widget-title clearfix">
          <h1 itemprop="headline">Videos</h1>

          <div class="divider"></div>
            <div class="sep-widget"></div>
        </div>

        <div class="row">
          @foreach($videos as $video)
            <div class="col-lg-4">
              <div class="widget-content clearfix">
                  <div class="wdg-video clearfix">
                      <iframe itemprop="contentURL" class="youtube-player" type="text/html" width="100%" height="200" src="{{ $video->url }}" allowfullscreen="" frameborder="0"></iframe>
                  </div>
              </div>
            </div>
          @endforeach

          <div class="col-lg-12 text-center">{{ $videos->links() }}</div>

        </div>
    </aside>

@endsection
