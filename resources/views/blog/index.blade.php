@extends('layout.main')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg-shape"
        style="background-image: url(/assets/images/shapes/page-header-bg-shape.png);">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <div class="page-header__shape-1">
                <img src="/assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <h2>Notre blog</h2>
            <div class="thm-breadcrumb__box">
                <ul class="thm-breadcrumb list-unstyled">
                    <li>
                        <span>
                        @isset($category)
                        {{$category->name }}
                        @endisset
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Blog One Start -->
<section class="blog-one">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <!--Blog One Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".1s">
                <div class="blog-one__single">
                    <div class="blog-one__img-box">
                        <div class="blog-one__img">
                            <img src="{{$blog->getFirstMediaUrl('*') }}" alt="">
                        </div>
                        <div class="blog-one__date">
                            <div class="blog-one__date-shape-1">
                                <img src="assets/images/shapes/blog-one-date-shape-1.png" alt="">
                            </div>
                            <div class="blog-one__date-shape-2">
                                <img src="assets/images/shapes/blog-one-date-shape-2.png" alt="">
                            </div>
                            <p>{{$blog->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        @isset($blog->category)
                        <ul class="blog-one__meta list-unstyled">
                            <li>
                                <a href="/blog?c={{$blog->category->id }}"><span class="icon-tag"></span>{{$blog->category->name }}</a>
                            </li>
                        </ul>
                        @endisset
                        <h3 class="blog-one__title"><a href="/blog/{{$blog->id }}">{{ $blog->title }}</a></h3>
                        <div class="blog-one__btn-box">
                            <a href="/blog/{{$blog->id }}" class="blog-one__btn thm-btn"><span>Lire la suite</span><i
                                    class="icon-arrow-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog One Single End-->
            @endforeach
        </div>
    </div>
</section>
<!--Blog One End -->
@endsection