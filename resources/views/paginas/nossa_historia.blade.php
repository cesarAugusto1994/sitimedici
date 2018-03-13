@extends('layouts.layout')

@section('content')

<article class="article-container" itemscope itemtype="http://schema.org/Article">

    <div class="article-content authors-page">
        <header>

            <div class="breadcrumb-container clearfix" itemscope itemtype="http://schema.org/WebPage">
                <ul class="breadcrumb ltr" itemprop="breadcrumb">
                    <li><i class="icon-home3"></i><a href="#">Inicio</a></li>
                    <li>Nossa História</li>
                </ul>
            </div>

            <h1 itemprop="headline">Nossa História</h1>

            <div class="divider"></div>
        </header>

        <div class="post-entry" itemprop="articleBody">
        </div>

        <div class="authors">
            <ul class="list-unstyled">

                <li class="post-item" data-showonscroll="true" data-animation="fadeIn">
                    <aside class="author-box clearfix" itemprop="author" itemscope="" itemtype="http://schema.org/Person" data-showonscroll="true" data-animation="fadeIn">
                        <div class="box-title">
                            <h3 class="hidden">Written By:</h3>
                            <div itemprop="image">
                                <img alt="Serpentsoft" src="{{ asset('images/inline.jpg') }}" style="max-width:86px;max-height:86px;" data-src="{{ asset('images/inline.jpg') }}" class="avatar">
                            </div>
                        </div>

                        <div class="box-content clearfix">
                            <h4 class="name">
                                <a itemprop="name" href="pg-category.html" title="Sindicato">{{ config('app.name', 'Sindicato') }}</a>
                            </h4>

                            <div itemprop="description">
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                            </div>


                        </div>
                    </aside>
                </li>

            </ul>



        </div>

    </div>
</article>


@endsection
