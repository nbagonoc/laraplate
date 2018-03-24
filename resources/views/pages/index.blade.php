@extends('layouts.app')
@section('content')

<!-- carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- slide 1 -->
        <div class="item active">
        <div class="first-slide carousel-slider" style="background-image: url('/img/banner.jpg'">
            <div class="vertical-align">
            <div class="vertical-align-element">
                <h1 class="heading">{{$title}}</h1>
                <h2 class="sub-heading">The first laravel project</h2>
            </div>
            </div>
        </div>
        </div>
        <!-- slide 2-->
        <div class="item">
        <div class="second-slide carousel-slider" style="background-image: url('/img/banner.jpg'">
            <div class="vertical-align">
                <div class="vertical-align-element">
                    <h1 class="heading">{{$title}}</h1>
                    <h2 class="sub-heading">The first laravel project</h2>
                </div>
            </div>
        </div>
        </div>
        <!-- slide 3-->
        <div class="item">
        <div class="third-slide carousel-slider" style="background-image: url('/img/banner.jpg'">
            <div class="vertical-align">
            <div class="vertical-align-element">
                <h1 class="heading">{{$title}}</h1>
                <h2 class="sub-heading">The first laravel project</h2>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- arrows -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fas fa-chevron-circle-left fa-2x left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fas fa-chevron-circle-right fa-2x right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

{{--  feature headings  --}}
<div class="space-md background-bright">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="sub-title">title here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque placeat repellat quo laudantium, sequi facilis illum doloremque vel aspernatur laborum dignissimos voluptate blanditiis inventore doloribus ex ipsa officia dolorum ad?</p>
                        <a class="btn btn-default center-block">button here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="sub-title">title here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, itaque sequi. Reprehenderit aliquam vel dignissimos laboriosam sapiente debitis minima cupiditate fugiat sed harum, distinctio vitae quod ratione magni repudiandae perferendis?</p>
                        <a class="btn btn-default center-block">button here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="sub-title">title here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas consectetur ea earum totam harum pariatur voluptatum nostrum. Saepe doloremque necessitatibus temporibus cumque similique at voluptates odio ea maxime et. Fugit.</p>
                        <a class="btn btn-default center-block">button here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--  content and sidebar  --}}
<div class="space-md background-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="content">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h1 class="title">title goes here</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla eum consequuntur quod magnam dolor expedita, asperiores et qui adipisci deleniti, est, officiis in neque exercitationem. Itaque deserunt sit officiis cumque.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar" data-offset-smart-dynamic>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="#">item goes here</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">item goes here</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">item goes here</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">item goes here</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{--  section background  --}}
{{--  <div class="section-background-home">
    <div class="vertical-align">
        <div class="vertical-align-element">
            <h1 class="heading">{{$title}}</h1>
            <h2 class="sub-heading">The first laravel project</h2>
        </div>
    </div>
</div>  --}}

{{--  full background  --}}
{{--  <div class="full-background-home">
    <div class="vertical-align">
        <div class="vertical-align-element">
            <h1 class="heading">{{$title}}</h1>
            <h2 class="sub-heading">The first laravel project</h2>
        </div>
    </div>
</div>  --}}

@endsection