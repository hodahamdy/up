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
                                                    <form class="form form-horizontal" method="POST" action="{{ route('fund_cat.store' ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> category </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_categories_name" />
                                                                        <span class="text-danger">{{ $errors->first('fund_categories_name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> categories </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-select form-select-lg" name="fund_categories_id"  id="selectLarge">
                                                                            <option value="" selected disabled> {{('category name')}} </option>
                                                                            @foreach ($fund as $cate)
                                                                            <option value="{{ $cate->id }}"> {{ $cate->fund_categories_name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="text-danger">{{ $errors->first('fund_categories_id') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> save </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('fund_cat.index') }}">back</a>
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
