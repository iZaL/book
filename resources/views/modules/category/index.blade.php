@extends('layouts.one_col')

@section('content')


    <div class="row">

        {{--Sub-Menu--}}
        @include('partials.sub-menu-category')

        <div class="col-xs-12 col-sm-9">


            <!-- START CONTENT ITEM -->
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h2>Product category name</h2>
                </div>
            </div>
            <!-- END CONTENT ITEM -->



            <!-- START CONTENT ITEM -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="row product-list-inline-small">
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <a href="detail.html"><img src="img/product_01.jpg" alt=""></a>
                                <div class="caption">
                                    <a href="detail.html">Product A</a>
                                    <p>Lorem ipsum dolor sit amet <span class="label label-info price pull-right">&euro; 123,-</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <a href="detail.html"><img src="img/product_02.jpg" alt=""></a>
                                <div class="caption">
                                    <a href="detail.html">Product B</a>
                                    <p>Lorem ipsum dolor sit amet <span class="label label-info price pull-right">&euro; 123,-</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="thumbnail">
                                <a href="detail.html"><img src="img/product_03.jpg" alt=""></a>
                                <div class="caption">
                                    <a href="detail.html">Product C</a>
                                    <p>Lorem ipsum dolor sit amet <span class="label label-danger price pull-right">&euro; 123,-</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT ITEM -->



        </div>

    </div>

    <div class="row">
        <div class="col-xs-12">

            <!-- START CONTENT ITEM -->
            <ul class="pagination pull-right">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&hellip;</a></li>
                <li><a href="#">93</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
            <!-- END CONTENT ITEM -->

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="well">

                <!-- START CONTENT ITEM -->
                &copy; <script>document.write(new Date().getFullYear());</script> - All taxes are excluded - shipping costs depends on location - <a href="column3.html">more info <span class="glyphicon glyphicon-chevron-right"></span></a>
                <!-- END CONTENT ITEM -->

            </div>
        </div>
    </div>

@stop('content')

