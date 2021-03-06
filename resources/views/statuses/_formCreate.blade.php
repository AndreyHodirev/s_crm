<div class="modal fade" id="newStatusForm">
        <div class="modal-dialog">
            <div class="modal-content">      
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Создание нового объекта</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                        {!! Form::open(['action' => 'StatusesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Укажите название статуса')}}
                            {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'Полное название!'])}}
                        </div>
                </div>      
                <!-- Modal footer -->
                <div class="modal-footer">
                        {{Form::submit('Создать запись!', ['class' => 'btn btn-success'])}}
                        {!! Form::close() !!}
                </div>
                    
            </div>
        </div>
    </div>