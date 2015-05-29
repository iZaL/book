<div class="row hidden-print ethiopic">
    <div class="col-xs-12">

        <!-- START CONTENT ITEM -->
        <nav class="navbar navbar-default main-nav" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left {{ App::getLocale() == 'ar' ? 'pull-right': '' }}">
                    <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> {{ trans('word.home') }}</a></li>
                    <li><a href="{{ url('/category') }}">{{ trans('word.category') }}</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ trans('word.read') }} <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="products.html">{{ trans('word.books') }}</a></li>
                            <li><a href="detail.html">{{ trans('word.poems') }}</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('contactus') }}">{{ trans('word.contact') }}</a></li>
                </ul>
            </div>
        </nav>
        <!-- END CONTENT ITEM -->

    </div>
</div>