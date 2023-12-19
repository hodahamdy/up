@extends('admin.navbar')

@section('content')

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->

                                <section id="multiple-column-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <!-- Basic Horizontal form layout section start -->
                                                    <form class="form form-horizontal" method="POST" action="{{ route('opp_app.update',$id->id ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> date submit </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_date_submit" />
                                                                        <span class="text-danger">{{ $errors->first('opp_date_submit') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">

                                                                    <div class="col-sm-9">
                                                                        <select class="form-select form-select-lg" name="user_id"  id="selectLarge">
                                                                            <option value="" selected disabled> {{('user name')}} </option>
                                                                            @foreach ($user as $name)
                                                                            <option value="{{ $name->id }}"> {{ $name->name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="text-danger">{{ $errors->first('user_id') }}</span>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-select form-select-lg" name="opp_id"  id="selectLarge">
                                                                            <option value="" selected disabled> {{('opp_id')}} </option>
                                                                            @foreach ($opportunity as $name)
                                                                            <option value="{{ $name->id }}"> {{ $name->opp_name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="text-danger">{{ $errors->first('opp_id') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> update </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('opp_app.index') }}">back</a>
                                                            </div>

                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection('content')
