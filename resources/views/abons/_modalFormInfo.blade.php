 <!-- Modal window create new join -->
 <div class="modal fade" id="editAbon">
        <div class="modal-dialog">
            <div class="modal-content">      
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Новый клиент</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                        {!! Form::open(['id' => 'action_module', 'class' => 'form-horizontal', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('city', 'Город')}}
                            <select name="city_name" id="">
                                <option value=0>ВЫБОР ГОРОДА!</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {{Form::label('t_connection', 'Тип подключения')}}
                            <select name="t_connections" id="type-ch">
                                    <option value=0>ВЫБОР ТИПА ПОДКЛЮЧЕНИЯ</option>
                                @foreach($t_connections as $t_con)
                                    <option value="{{$t_con->id}}">{{$t_con->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- ОСНОВНЫЕ ЕЛЕМЕНТЫ ДЛЯ ВСЕХ ТИПО ПОДКЛЮЧЕНИЯ 
                            - логин 
                            - пароль 
                            - фио
                            - номер телефона
                            - улица
                            - дома 
                            - квартира
                            - сколько денег 
                            - смета по подключению
                                --}}
                        <div class="form-group">
                            {{Form::label('login', 'Логин')}}
                            {{Form::text('login','',['class' => 'form-control login'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('password', 'Пароль')}}
                            {{Form::text('password','',['class' => 'form-control password'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('tp_name', 'Тарифный план')}}
                            {{Form::text('tp_name','',['class' => 'form-control tp_name'])}}
                        </div>    
                        <div class="form-group">
                            {{Form::label('fullname', 'ФИО')}}
                            {{Form::text('fullname','',['class' => 'form-control fullname'])}}
                        </div>  
                        <div class="form-group">
                            {{Form::label('phone_num', 'Номер телефона')}}
                            {{Form::text('phone_num','',['class' => 'form-control phone_num'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('street', 'Улица')}}
                            {{Form::text('street','',['class' => 'form-control street'])}}
                        </div>           
                        <div class="form-group">
                            {{Form::label('build_flat', 'Дом - Квартира')}}
                                {{Form::text('build','',['class' => 'form-control build'])}}
                                {{Form::text('flat','',['class' => 'form-control flat'])}}
                        </div>              
                        <div class="form-group">
                                {{Form::label('all_money', 'Сумма')}}
                                {{Form::text('all_money','',['class' => 'form-control all_money'])}}
                        </div> 
                        <div class="form-group">
                                {{Form::label('comment', 'Смета')}}
                                {{Form::text('comment','',['class' => 'form-control comment'])}}
                        </div> 
                        {{-- КОНЕЦ ОСНОВНЫЕ ЕЛЕМЕНТЫ ДЛЯ ВСЕХ ТИПО ПОДКЛЮЧЕНИЯ --}}
                        {{-- ЭЛЕМЕНТЫ ДЛЯ ПОДКЛЮЧЕНИЯ ПО PON 
                            - mac_onu (мак ону)
                            - point_inc (точка включения)
                            --}}
                            <div class="form-group">
                                {{Form::label('mac_onu', 'MAC Ону')}}
                                {{Form::text('mac_onu','',['class' => 'form-control mac_onu'])}}
                            </div> 
                            <div class="form-group">
                                {{Form::label('point_inc', 'Место включения')}}
                                {{Form::text('point_inc','',['class' => 'form-control point_inc'])}}
                            </div> 
                        {{-- КОНЕЦ ПОНА --}}
                        {{-- ЭЛЕМЕНТЫ ДЛЯ ПОДКЛЮЧЕНИЯ ПО WiFi
                            - base_ip
                            - client_ip
                            --}}
                            <div class="form-group">
                                {{Form::label('base_ip', 'Базовая станция')}}
                                {{Form::text('base_ip','',['class' => 'form-control base_ip'])}}
                            </div> 
                            <div class="form-group">
                                {{Form::label('client_ip', 'Антена клиента')}}
                                {{Form::text('client_ip','',['class' => 'form-control client_ip'])}}
                            </div> 
                            <div class="form-group">
                                {{Form::label('leng', 'Кабель')}}
                                {{Form::text('leng','',['class' => 'form-control leng'])}}
                            </div> 
                        </div>     
                        {{-- КОНЕЦ WiFi --}}
                        
                <!-- Modal footer -->
                <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Изменить!', ['class' => 'btn btn-success'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>