
<div class="row" style=" #424949;">
  <div class="col-xs-12">
    <div class="form-group">


            &nbsp; &nbsp;&nbsp; <strong>AsNumber:    </strong>
  <!--firstposition:type,secondposition:name,-->
        {!! Form::text('asnumber', null,['placeholder'=>'asnumber','class'=>'form-control']) !!}
 <br>
            &nbsp;&nbsp;&nbsp;   <strong>peeringRS:     </strong>
       <strong>Yes</strong> {!!  Form::radio('peeringrs', 'yes', ['placeholder'=>'peeringrs','class'=>'form-control'])!!}
        <strong>No</strong>{!!  Form::radio('peeringrs', 'no', ['placeholder'=>'peeringrs','class'=>'form-control'])!!}

        <br>
            &nbsp;  &nbsp;&nbsp;    <strong>peeringDB:   </strong>
        {!! Form::text('peeringdb', null,['placeholder'=>'peeringdb','class'=>'form-control']) !!}
<br>
            &nbsp;  &nbsp;&nbsp;  <strong>AS-SET:     </strong>
        {!! Form::text('asset', null,['placeholder'=>'asset','class'=>'form-control']) !!}
 <br>
            &nbsp;&nbsp;&nbsp;  <strong>contact:     </strong>
        {!! Form::email('contact', null,['placeholder'=>'contact','class'=>'form-control']) !!}
<!--<input class="btn" type="submit" value="submit">-->
<br>
            {!!Form::submit('Click Me!')!!}
    </div>
  </div>
</div>
