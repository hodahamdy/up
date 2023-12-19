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
                                                    <form class="form form-horizontal" method="POST" action="{{ route('opportunity.update',$id->id ) }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                             <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> name </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_name" value="{{ $id->opp_name ?? old('opp_name') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_name') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> description </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_desc" value="{{ $id->opp_desc ?? old('opp_desc') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_desc') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> contract duration </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_contract_duration" value="{{ $id->opp_contract_duration ?? old('opp_contract_duration') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_contract_duration') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> copyright percentage </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_copyrights_percentage" value="{{ $id->opp_copyrights_percentage ?? old('opp_copyrights_percentage') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_copyrights_percentage') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> markting percentage </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_markting_percentage" value="{{ $id->opp_markting_percentage ?? old('opp_markting_percentage') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_markting_percentage') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> cost from </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_cost_from" value="{{ $id->opp_cost_from ?? old('opp_cost_from') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_cost_from') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> cost to </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_cost_to" value="{{ $id->opp_cost_to ?? old('opp_cost_to') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_cost_to') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> rules </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_rules" value="{{ $id->opp_rules ?? old('opp_rules') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_rules') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label"> location </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control" name="opp_location" value="{{ $id->opp_location ?? old('opp_location') }}"/>
                                                                        <span class="text-danger">{{ $errors->first('opp_location') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label">opportunity category </label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <select class="form-select form-select-lg" name="category_id" >
                                                                            <option value="" selected disabled> {{('category name')}} </option>
                                                                            @foreach ($category as $cate)
                                                                            <option value="{{ $cate->id }}" @if($id->category_id == $cate->id ) selected @endif> {{ $cate->opp_cat_name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1 row">
                                                                    <div class="col-sm-3">
                                                                        <label class="col-form-label" for="contact-info"> image</label>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control" name="opp_image"  />
                                                                        <span class="text-danger">{{ $errors->first('opp_image') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9 offset-sm-3">
                                                                <button type="submit" class="btn btn-primary me-1"> update </button>
                                                                <a class="btn btn-outline-secondary" href="{{ route('opportunity.index') }}">back</a>
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
