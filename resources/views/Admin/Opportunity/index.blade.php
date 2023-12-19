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

                                <a href="{{ route('opportunity.create') }}">
                                    <button type="button" class="btn btn-success"><i class="fas fa-plus"></i>Add opportunity</button>
                                </a>
                                <br><br>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>name</th>
                                                <th>desc</th>
                                                <th>contract duration </th>
                                                 <th>rules</th>
                                                <th>copyrights percentage</th>
                                                <th>markting percentage</th>
                                                <th>cost from</th>
                                                <th>cost to</th>
                                                <th>location</th>
                                                <th>category name</th>
                                                <th>img </th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($opportunity as $view )
                                                <tr>
                                                    <td>{{ $view->opp_name}}</td>
                                                    <td>{{ $view->opp_desc}}</td>
                                                    <td>{{ $view->opp_contract_duration}}</td>
                                                    <td>{{ $view->opp_rules}}</td>
                                                    <td>{{ $view->opp_copyrights_percentage}}</td>
                                                    <td>{{ $view->opp_markting_percentage}}</td>
                                                    <td>{{ $view->opp_cost_from}}</td>
                                                    <td>{{ $view->opp_cost_to}}</td>
                                                     <td>{{ $view->opp_location}}</td>
                                                    <td>{{ $view->category->opp_cat_name}}</td>
                                                    <td>
                                                        <img class="card-img-top" src="{{ asset('Uploads/opportunity/') }}/{{ $view->opp_image }}" style="width:100px;height:100px;">
                                                    </td>
                                                    <td> <a href="{{ route('opportunity.edit', $view->id) }}" class="btn btn-info" id="edit">
                                                      Edit </a>
                                                     </td>
                                                     <td> <a href="{{ route('opportunity.delete', $view->id) }}" class="btn btn-danger" id="delete">
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
