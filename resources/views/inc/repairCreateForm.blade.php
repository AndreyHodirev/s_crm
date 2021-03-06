<!-- The Modal -->
<div class="modal fade" id="createRepair">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Заявка на ремонт</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        {!! Form::open(['action' => 'RepairsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        <div class="form-group">
            {{Form::label('login', 'Логин')}}
            {{Form::text('login','',['class' => 'form-control', 'placeholder' => 'Логин'])}}
        </div>
        <div class="form-group">
            {{Form::label('city', 'Город')}}
            <select name="city_name" id="">
                @foreach($cities as $city)
                  @if($city->visibility_everywhere != 0)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                  @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{Form::label('street', 'Улица')}}
            {{Form::text('street','',['class' => 'form-control', 'placeholder' => 'Ульяновская ул.'])}}
        </div>
        <div class="form-group">
                {{Form::label('build', 'Дом')}}
                {{Form::text('build','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => '23Д'])}}
        </div>
        <div class="form-group">
            {{Form::label('vlan_name', 'VLAN')}}
            {{Form::text('vlan_name','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => '12'])}}
         </div>
         <div class="form-group">
            {{Form::label('phone_num', 'Номер телефона')}}
            {{Form::text('phone_num','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => '+380501234567'])}}
         </div>
         <div class="form-group">
            {{Form::label('cause', 'Причина составления заявки')}}
            {{Form::textarea('cause','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Что болит, на что жалуется'])}}
         </div>
         <div class="form-group">
            {{Form::label('comment', 'Комментарий')}}
            {{Form::textarea('comment','',['id'=> 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Тут можно указать любой комментарий по текущей заявке'])}}
         </div>
         
        {{Form::submit('Составить заявку на ремонт!', ['class' => 'btn btn-warning'])}}
        {!! Form::close() !!}
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
      </div>

    </div>
  </div>
</div>