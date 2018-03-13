@extends('layouts.layout')

@section('content')
<article class="article-container" itemscope itemtype="http://schema.org/Article">

    <div class="article-content authors-page">
        <header>

            <div class="breadcrumb-container clearfix" itemscope itemtype="http://schema.org/WebPage">
                <ul class="breadcrumb ltr" itemprop="breadcrumb">
                    <li><i class="icon-home3"></i><a href="#">Home</a></li>
                    <li>Diretoria</li>
                </ul>
            </div>

            <h1 itemprop="headline">Diretoria</h1>

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
                                <img alt="avatar" src="" data-src="holder.js/85x85/sky" class="avatar">
                            </div>
                        </div>

                        <div class="box-content clearfix">
                            <h4 class="name">
                                <a itemprop="name" href="pg-category.html" title="Pessoa 1">Pessoa 1</a>
                            </h4>

                            <div itemprop="description">
                                <p>A few words about article's author, I am a Web Developer and Designer, i love computer programming either Desktop or Web</p>
                            </div>

                            <div class="social-icons">
                                <ul class="clearfix">
                                    <li class="tooltip_item fb-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="facebook">
                                        <div class="mask-background animated lightSpeedIn"></div>
                                        <a href="#"><i class="zoc-facebook"></i></a>
                                    </li>

                                    <li class="tooltip_item twitter-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="twitter">
                                        <div class="mask-background animated lightSpeedIn"></div>
                                        <a href="#"><i class="zoc-twitter"></i></a>
                                    </li>

                                    <li class="tooltip_item googleplus-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="google+">
                                        <div class="mask-background animated lightSpeedIn"></div>
                                        <a href="#"><i class="zoc-gplus"></i></a>
                                    </li>

                                    <li class="tooltip_item email-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="send an email to Serpentsoft">
                                        <div class="mask-background animated lightSpeedIn"></div>
                                        <a href="#"><i class="zoc-email"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </aside>
                </li>


                <li class="post-item" data-showonscroll="true" data-animation="fadeIn">
                    <aside class="author-box clearfix" itemprop="author" itemscope="" itemtype="http://schema.org/Person" data-showonscroll="true" data-animation="fadeIn">
                        <div class="box-title">
                            <h3 class="hidden">Written By:</h3>
                            <div itemprop="image">
                                <img alt="avatar" src="" data-src="holder.js/85x85/sky" class="avatar">
                            </div>
                        </div>

                        <div class="box-content clearfix">
                            <h4 class="name">
                                <a itemprop="name" href="pg-category.html" title="Pessoa 2">Pessoa 2</a>
                            </h4>

                            <div itemprop="description">
                                <p>A few words about article's author, I am a Web and Graphic Designer</p>
                            </div>

                            <div class="social-icons">
                              <ul class="clearfix">
                                  <li class="tooltip_item fb-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="facebook">
                                      <div class="mask-background animated lightSpeedIn"></div>
                                      <a href="#"><i class="zoc-facebook"></i></a>
                                  </li>

                                  <li class="tooltip_item twitter-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="twitter">
                                      <div class="mask-background animated lightSpeedIn"></div>
                                      <a href="#"><i class="zoc-twitter"></i></a>
                                  </li>

                                  <li class="tooltip_item googleplus-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="google+">
                                      <div class="mask-background animated lightSpeedIn"></div>
                                      <a href="#"><i class="zoc-gplus"></i></a>
                                  </li>

                                  <li class="tooltip_item email-metro-but-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="send an email to Serpentsoft">
                                      <div class="mask-background animated lightSpeedIn"></div>
                                      <a href="#"><i class="zoc-email"></i></a>
                                  </li>
                              </ul>
                            </div>

                        </div>
                    </aside>
                </li>

            </ul>

            <footer class="blog-pagination">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </footer>

        </div>

    </div>
</article>
@endsection
