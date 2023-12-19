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
                                                <th> duration </th>
                                                <th>partnership percentage</th>
                                                <th>cost from</th>
                                                <th>rules</th>
                                               <th>cost</th>
                                                <th>location</th>
                                                <th>category name</th>
                                                <th>img </th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($part as $view )
                                                <tr>
                                                    <td>{{ $view->part_title}}</td>
                                                    <td>{{ $view->part_desc}}</td>
                                                    <td>{{ $view->part_duration}}</td>
                                                    <td>{{ $view->part_rules}}</td>
                                                    <td>{{ $view->part_percentage}}</td>
                                                     <td>{{ $view->part_location}}</td>
                                                    <td>{{ @$view->partnersCategory->category_name}}</td>
                                                    <td>
                                                        <img class="card-img-top" src="{{ asset('Uploads/partnership/') }}/{{ $view->partner_image }}" style="width:100px;height:100px;">
                                                    </td>
                                                    <td> <a href="{{ route('part.edit', $view->id) }}" class="btn btn-info" id="edit">
                                                      Edit </a>
                                                     </td>
                                                     <td> <a href="{{ route('part.delete', $view->id) }}" class="btn btn-danger" id="delete">
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
