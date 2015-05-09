@extends('medicines.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Edit Medicine
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Edit Medicine
            </div>
		</div>
		<br><br><br>
@stop


@section('content2')

        @foreach($errors->all("<p class='error'>:message</p>") as $message)
	    {{ $message }}
		@endforeach

		<br/>
	   <center>
            <div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

            {{ Form::model($medicine, ['route' => ['medicines.update', $medicine->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

                @include('medicines._form')

            {{ Form::close() }}
            </div>
        </center>

		<br><br>

      
@stop