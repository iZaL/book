@extends('layouts.one_col')

@section('content')
    <div class="row">
        <div class="col-xs-12">

            <!-- START CONTENT ITEM -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#step1" data-toggle="tab"><b>step 1:</b> Books</a></li>
                <li><a href="#step2" data-toggle="tab"><b>step 2:</b> Published Books</a></li>
                <li><a href="#step3" data-toggle="tab"><b>step 3:</b> Personal Info</a></li>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active" id="step1">
                    <div class="row">
                        <div class="col-xs-12 paddingTop10">
                            Books
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="step2">
                    <div class="row">
                        <div class="col-xs-12 paddingTop10">
                            Published Books
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="step3">
                    <div class="row">
                        <div class="col-xs-12 paddingTop10">
                            Personal Info
                        </div>
                    </div>
                </div>

            </div>

            <br>

        </div>
        <!-- END CONTENT ITEM -->

    </div>

@stop
