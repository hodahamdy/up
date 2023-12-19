@extends('Admin.navbar')

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

                                <a href="{{ route('fund_agency.create') }}">
                                    <button type="button" class="btn btn-success"><i class="fas fa-plus"></i>Add funding agency</button>
                                </a>
                                <br><br>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>title</th>
                                                <th>desc</th>
                                                <th>interset percentage</th>
                                                <th>repayment period</th>
                                                <th>rules</th>
                                                <th>cost from</th>
                                                <th>cost to</th>
                                                <th>category name</th>
                                                <th>img </th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($fund as $view )
                                                <tr>
                                                    <td>{{ $view->fund_name}}</td>
                                                    <td>{{ $view->fund_desc}}</td>
                                                    <td>{{ $view->fund_interset_percentage}}</td>
                                                    <td>{{ $view->fund_repay_period}}</td>
                                                    <td>{{ $view->fund_rules}}</td>
                                                    <td>{{ $view->fund_cost_from}}</td>
                                                    <td>{{ $view->fund_cost_to}}</td>
                                                    <td>{{ $view->agencyCategory->fund_categories_name}}</td>
                                                    <td>
                                                        <img class="card-img-top" src="{{ asset('Uploads/fund_agency/') }}/{{ $view->fund_logo }}" style="width:100px;height:100px;">
                                                    </td>
                                                    <td> <a href="{{ route('fund_agency.edit', $view->id) }}" class="btn btn-info" id="edit">
                                                      Edit </a>
                                                     </td>
                                                     <td> <a href="{{ route('fund_agency.delete', $view->id) }}" class="btn btn-danger" id="delete">
                                                        Delete </a>
                                                       </td>

                                                </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
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
