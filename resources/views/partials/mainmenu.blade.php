<div class="row hidden-print">
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
                    <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="category.html">Categories</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Read <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="products.html">Books</a></li>
                            <li><a href="detail.html">Poems</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right {{ App::getLocale() == 'ar' ?  'pull-left':'' }}">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-question-sign"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-content dropdown-content-wide">
                                    <form class="col-xs-12 form-search">
                                        <div class="input-group">
                                            <input class="form-control search-query" type="text"
                                                   placeholder="Type your question...">
															<span class="input-group-btn">
																<button class="btn btn-default" type="button">ok
                                                                </button>
															</span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-envelope"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="dropdown-content">
                                    <address>
                                        <strong>CompanyName</strong><br>
                                        Address 123<br>
                                        Zipcode, State and City
                                    </address>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-content">
                                    <strong>Phone</strong>: 012-345 67 89<br>
                                </div>
                            </li>
                            <li><a href="contact.html"><strong>E-mail</strong>: info@example.com</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span
                                    class="glyphicon glyphicon-shopping-cart"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="detail.html"><span class="pull-left"><small>5x</small> Product A</span>
                                    &nbsp;
                                    <small class="pull-right label label-info">&euro; 123,-</small>
                                </a></li>
                            <li><a href="detail.html"><span class="pull-left"><small>1x</small> Product B</span>
                                    &nbsp;
                                    &nbsp;
                                    <small class="pull-right label label-info">&euro; 139,-</small>
                                </a></li>
                            <li class="divider"></li>
                            <li><a href="order.html">Show all items in shopping cart <i
                                            class="glyphicon glyphicon-chevron-right"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END CONTENT ITEM -->

    </div>
</div>