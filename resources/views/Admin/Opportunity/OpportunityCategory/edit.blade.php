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
                                                    <form class="form form-horizontal" method="POST" action="{{ route('opp_category.update',$id->id ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                             <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> name </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_cat_name" value="{{ $id->opp_name ?? old('opp_cat_name') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_cat_name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> description </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_cat_desc" value="{{ $id->fund_desc ?? old('opp_cat_desc') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_cat_desc') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> update </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('opp_category.index') }}">back</a>
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
