@extends('master')

@section('content')

<table> </table>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Exam Name</th>
        <th>Class Name</th>
        <th>Availability</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      {!! Form::open(["url"=>"/exam"]) !!}
        <td>Exam Name : {!! Form::text("examName")!!}
</td>
        <td>Class Name : {!! Form::text("className")!!}
</td>
        <td>

{!!Form::select('available', ['no' => 'NO','yes' => 'YES'])!!}
</td><td>
{!! Form::submit("Create",["class"=>"btn btn-success"]) !!}</td>

      </tr>
{!! Form::close() !!}

    @foreach($exams as $exam)
    {!!$id = $exam->id!!}
    <tr>
    	<td><a href="exam/{{$id}}/question">{{$exam->name}}</a></td>
    	<td>{{$exam->className}}</td>
    	<td>{!! Form::open(["url"=>"exam/$exam->id","method"=>"patch"]) !!}
        @if($exam->available=="yes")
        {!! Form::submit("YES",["class"=>"btn btn-primary"]) !!}
        @else
        {!! Form::submit("NO",["class"=>"btn btn-default"]) !!}
        @endif
        {!! Form::close() !!}
     </td>
    	<td>{!! Form::open(["url"=>"exam/$exam->id","method"=>"delete"]) !!}
    		{!! Form::submit("delete",["class"=>"btn btn-danger"]) !!}
    		{!! Form::close() !!}
    	</td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop