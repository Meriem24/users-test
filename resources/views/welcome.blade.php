@extends('base')
@section('title') Liste des utilisateurs @endsection
@section('body')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Table des utilisateurs
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row" style="margin-left: 2%;">
                                <div class="col-md-8">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1"
                                                aria-label="Rendering engine: activate to sort column ascending"
                                                aria-sort="descending">
                                                Nom
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                email
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                passeword
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $row)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$row->name}}</td>
                                                <td><a href="#" data-toggle="modal"
                                                       data-target="#myModal" onclick="modifier_email({{$row->id}})">{{$row->email}}</a></td>
                                                <td>{{$row->password}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div id="test"></div>

                <div class="modal-footer">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

@section('js')
        <script>
            function modifier_email(id) {

                $.ajax({
                    url: 'editer/'+ id,
                    type: 'GET',
                    data: {'id': id},
                    success: function (data) {

                        $("#test").html(data);
                    }
                });

            }

        </script>
@endsection