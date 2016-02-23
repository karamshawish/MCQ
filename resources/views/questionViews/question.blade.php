
@extends('master')

@section('content')
{!!$url = Request::url()!!}
<div class="row">
{!!Form::open(['url'=>"$url",'class'=>'form-inline'])!!}
  &nbsp;&nbsp;&nbsp;{!!Form::label("Question : ",null,['size'=>'200','class'=>'control-label col-sm-1'])!!}
  {!!Form::text("question",null,['size'=>'150','class'=>'form-control'])!!}
</div>
<br/>
<div class="row">
  <div class="col-sm-1"></div>
 <div class="col-sm-2"> {!! Form::text("ch1",null,['class'=>'form-control','size'=>'30','value'=>'Choice1'])!!}</div>
 <div class="col-sm-2"> {!! Form::text("ch2",null,['class'=>'form-control','size'=>'30','value'=>'Choice1'])!!}</div>
 <div class="col-sm-2"> {!! Form::text("ch3",null,['class'=>'form-control','size'=>'30','value'=>'Choice1'])!!}</div>
 <div class="col-sm-2"> {!! Form::text("ch4",null,['class'=>'form-control','size'=>'30','value'=>'Choice1'])!!}</div>
 <div class="col-sm-2"> {!! Form::text("answer",null,['class'=>'form-control','size'=>'30','value'=>'Choice1'])!!}</div>
<div class="col-sm-1"> {!! Form::submit("Create",["class"=>"btn btn-success"]) !!}</div>
</div>
@foreach ($questions as $question)

<div class="row">
  &nbsp;&nbsp;&nbsp;<h3>Question :  {!!$question->content!!}</h3> 
</div>
<div class="row">
  <div class="col-sm-1"></div>
 <div class="col-sm-2">Ch1 :{!! $question->Choice1  !!}</div>
 <div class="col-sm-2">Ch1 : {!! $question->Choice2 !!}</div>
 <div class="col-sm-2">Ch1 : {!!$question->Choice3  !!}</div>
 <div class="col-sm-2">Ch1 : {!!$question->Choice4  !!}</div>
 <div class="col-sm-2">Ch1 : {!!$question->correctAnswer  !!}</div>
</div>
@endforeach
@stop