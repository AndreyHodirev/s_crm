@extends('layouts.app')    

@section('content')
                    <div class="row">
                        <div id="paper-top">
                                    <div class="col-sm-3">
                                        <h2 class="tittle-content-header">
                                            <i class="icon-window"></i> 
                                            <span>CRM</span>
                                        </h2>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="devider-vertical visible-lg"></div>
                                        <div class="tittle-middle-header">
                                            <div class="alert">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <span class="tittle-alert entypo-info-circled"> Для составления заявки нажмите на кнопку "Составить заявку"</span>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
            <!--/ TITLE -->
            <!-- END OF BREADCRUMB -->
            <div class="content-wrap">
                <hr>
            <div class="row">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newJoinModal">
                            Составить заявку
                    </button> | 
                <div class="btn-group" position="rigth">
<<<<<<< HEAD
                    <button class="btn btn-warning" id="test">Test</button>
                    <button class="btn btn-danger">Кнопка 2</button>
                    <button class="btn btn-info">Кнопка 3</button>

=======
                    <button class="btn btn-warning btn-select-1">Кнопка 1</button>
                    <button class="btn btn-danger btn-select-2">Кнопка 2</button>
                    <button class="btn btn-info btn-select-3">Кнопка 3</button>
>>>>>>> d3e9aea499a8434b5f023a9d9bb467967da5c033
                </div>
                <button class="btn btn-warning testingtest">ТЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕСТ</button>
            </div>
        <hr>
            <table id="joins_table" class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Улица</th>
                        <th>Дом</th>
                        <th>ФИО</th>
                        <th>Телефон</th>
                        <th>Дата составления заявки</th>
                        <th>Статус заявки</th>
                        <th>Комментарий</th>
                        <th>action</th>
                    </tr>
            </table>
            {{-- INCLUDE modal windows --}}
   @include('joins._formNew')
<<<<<<< HEAD
   @include('joins._formEdit')
        <!-- Update button -->
        <script>
            $(document).on('click', '.update', function(){
                var id = $(this).attr("id");
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{ url('datablesFindById') }}",
                        method:"POST",
                        data: {id:id} ,
                        dataType:"json",
                        success:function(data)
                        {
                            $('#updateJoin').modal('show');
                            $('#str').val(data.street);
                            $('#build').val(data.build);
                            $('#full_name').val(data.full_name);
                            $('#phone_num').val(data.phone_num);
                            $('#comment').val(data.comment);
                            $('#action').val(data.id);
                            $('#action_module').attr('action','/joins/'+data.id);
                        }
                })
            });
        </script>

        {{-- test reload tables --}}
        


          <script type="text/javascript">
                $(document).on('click', '#test', function(){  
                    //alert("xuy");
                   var table = $('#joins_table').DataTable();
                    table.destroy();
                     $(function() {
                    $('#joins_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url('reload_test') }}',
                    columns: [
                                { data: 'id',               name: 'id' },
                                { data: 'street',           name: 'street' },
                                { data: 'build',            name: 'build' },
                                { data: 'full_name',        name: 'full_name'},
                                { data: 'phone_num',        name: 'phone_num'},
                                { data: 'created_at',       name: 'created_at'},
                                { data: 'ticket_status_id', name: 'ticket_status_id'},
                                { data: 'comment',          name: 'comment'},
                                { data: 'action',           name: 'action', orderable: false, searchable: false}
                            ]
                    });
                });
            });
            </script>



        {{-- END test reload tables --}}
   
=======
   @include('joins._formEdit')      
>>>>>>> d3e9aea499a8434b5f023a9d9bb467967da5c033
@endsection
@section('dt_script')
        <!-- DataTables loader -->
            <script type="text/javascript">
                $(function() {
                    $('#joins_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url('datablesAllJoins') }}',
                    columns: [
                                { data: 'id',               name: 'id' },
                                { data: 'street',           name: 'street' },
                                { data: 'build',            name: 'build' },
                                { data: 'full_name',        name: 'full_name'},
                                { data: 'phone_num',        name: 'phone_num'},
                                { data: 'created_at',       name: 'created_at'},
                                { data: 'ticket_status_id', name: 'ticket_status_id'},
                                { data: 'comment',          name: 'comment'},
                                { data: 'action',           name: 'action', orderable: false, searchable: false}
                            ]
                    });
                });

                // <!-- edit form button -->
                $(document).on('click', '.update', function(){
                var id = $(this).attr("id");
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{ url('datablesFindById') }}",
                        method:"POST",
                        data: {id:id} ,
                        dataType:"json",
                        success:function(data)
                        {
                            $('#updateJoin').modal('show');
                            $('#str').val(data.street);
                            $('#build').val(data.build);
                            $('#full_name').val(data.full_name);
                            $('#phone_num').val(data.phone_num);
                            $('#comment').val(data.comment);
                            $('#action').val(data.id);
                            $('#action_module').attr('action','/joins/'+data.id);
                        }
                })
            });
            </script>
        
@endsection
    