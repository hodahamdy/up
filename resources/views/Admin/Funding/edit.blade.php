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
                                                    <form class="form form-horizontal" method="POST" action="{{ route('fund_agency.update',$id->id ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                             <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> funding name </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_name" value="{{ $id->fund_name ?? old('fund_name') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> description </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_desc" value="{{ $id->fund_desc ?? old('fund_desc') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_desc') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> funding cost from </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_cost_from" value="{{ $id->fund_cost_from ?? old('fund_cost_from') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_cost_from') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> funding cost to </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_cost_to" value="{{ $id->fund_cost_to ?? old('fund_cost_to') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_cost_to') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> interset percentage </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_interset_percentage" value="{{ $id->fund_interset_percentage ?? old('fund_interset_percentage') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_interset_percentage') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> repayment period </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="fund_repay_period" value="{{ $id->fund_repay_period ?? old('fund_repay_period') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('fund_repay_period') }}</span>
                                                                    </div>
                                                                </div>
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

                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="contact-info"> image</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control" name="fund_logo"  />
                                                                        <span class="text-danger">{{ $errors->first('fund_logo') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> update </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('fund_agency.index') }}">back</a>
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