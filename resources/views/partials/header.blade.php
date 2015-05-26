<header>

    <!-- Facebook div for like button -->
    <div id="fb-root"></div>

    <!-- Div for shade line -->

    <div class="row hidden-print">
        <div class="col-xs-12">

            <!-- START CONTENT ITEM -->
            <nav class="navbar navbar-right header-nav" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ trans('word.login') }}</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-content">
                                    {!! Form::open(['url' => '/auth/login', 'method' => 'post']) !!}
                                    <div class="form-group">
                                        {!! Form::text('email', null , ['class' => 'form-control','placeholder'=>trans('word.email')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::password('password', ['class' => 'form-control','placeholder'=>trans('word.password')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit(trans('word.login'), ['class' => 'form-control']) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </li>
                        </ul>
                    </li>
                    @if(App::getLocale() == 'en')
                        <li><a href="{{ action('LocaleController@setLocale',['lang'=>'ar'])}}">العربية</a></li>
                    @else
                        <li><a href="{{ action('LocaleController@setLocale',['lang'=>'en'])}}">En</a></li>
                    @endif
                </ul>
            </nav>
            <!-- END CONTENT ITEM -->

        </div>
    </div>

    <div class="row header-top hidden-print">
        <div class="col-xs-12 col-sm-5 col-md-2 col-lg-1 ">

            <!-- START CONTENT ITEM -->
            <img src="/img/logo.png" alt="Logo" class="img-responsive logo">
            <!-- END CONTENT ITEM -->

        </div>

        <div class="hidden-xs hidden-sm col-md-offset-6 col-lg-offset-5 col-md-3 col-lg-4">
            {{--<img src="/img/banner_top.jpg" alt="No shipping" class="img-responsive">--}}

            <!-- START CONTENT ITEM -->
            <div class="input-group form-search header-search">
                <input class="form-control search-query" type="text" placeholder="Search all books...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">{{ trans('word.search') }}</button>
                </span>
            </div>
            <!-- END CONTENT ITEM -->

        </div>
    </div>

    @include('partials.mainmenu')

</header>