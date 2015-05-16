<header>

    <!-- Facebook div for like button -->
    <div id="fb-root"></div>

    <!-- Div for shade line -->

    <div class="row hidden-print">
        <div class="col-xs-12 col-sm-offset-12 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-8 col-lg-8 ">

            <!-- START CONTENT ITEM -->
            <nav class="navbar navbar-right header-nav" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-content">
                                    <br>
                                    <form role="form">
                                        <input type="text" class="form-control" placeholder="Username"><br>
                                        <input type="password" class="form-control" placeholder="Password"><br>
                                        <button class="btn btn-default">reset</button>
                                        <button type="submit" class="btn btn-primary">login</button>
                                    </form>
                                    <br>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="column1.html">Arabic</a></li>
                </ul>
            </nav>
            <!-- END CONTENT ITEM -->

        </div>
    </div>

    <div class="row header-top hidden-print">
        <div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 ">

            <!-- START CONTENT ITEM -->
            <img src="/img/logo.png" alt="Logo" class="img-responsive logo">
            <!-- END CONTENT ITEM -->

        </div>

        <div class="hidden-xs hidden-sm col-md-offset-6 col-lg-offset-5 col-md-3 col-lg-4">
            <img src="/img/banner_top.jpg" alt="No shipping" class="img-responsive">

            <!-- START CONTENT ITEM -->
            <div class="input-group form-search header-search">
                <input class="form-control search-query" type="text" placeholder="Search all books...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Search</button>
                </span>
            </div>
            <!-- END CONTENT ITEM -->

        </div>
    </div>

    @include('partials.mainmenu')

</header>