@extends('dutydays.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Edit Schedule
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Edit Doctor Schedule
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
            {{ Form::open(['route' => ['dutydays.update', $doctor->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm']) }}
                <table width="621" height="720" border="0">
                  <tr>
                    <td width="272" height="55"><label>Doctor Name:</label> </td>
                    <td width="333">
                        <label>{{$doctor->name}}</label>
                        {{ Form::hidden('employee_id', $doctor->id) }}
                    </td>
                  </tr>
                <tr><td><br></td><td></td></tr>
               <tr>
                   <td width="272" height="55"><label>Sunday:</label> </td>
                   <td width="333">
                      {{ Form::checkbox('Sunday', 'Sunday', ($dutydays[0]->day != '')? 'checked' : '', ['id' => 'sunday']) }}
                   </td>
                </tr>
                <tr>
                   <td width="272" height="55"><label>Start Time:</label> </td>
                   <td width="333">
                      {{ Form::input('time', 'sun_start_time',Form::getValueAttribute('start', $dutydays[0]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'sun_start_time']) }}
                   </td>
                </tr>
                <tr>
                   <td width="272" height="55"><label>End Time:</label> </td>
                   <td width="333">
                      {{ Form::input('time', 'sun_end_time', Form::getValueAttribute('end', $dutydays[0]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'sun_end_time']) }}
                   </td>
                </tr>
                  <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Monday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Monday', 'Monday', ($dutydays[1]->day != '')? 'checked' : '', ['id' => 'monday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'mon_start_time',Form::getValueAttribute('start', $dutydays[1]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'mon_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'mon_end_time', Form::getValueAttribute('end', $dutydays[1]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'mon_end_time']) }}
                    </td>
                 </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Tuesday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Tuesday', 'Tuesday', ($dutydays[2]->day != '')? 'checked' : '', ['id' => 'tuesday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'tue_start_time',Form::getValueAttribute('start', $dutydays[2]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'tue_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'tue_end_time', Form::getValueAttribute('end', $dutydays[2]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'tue_end_time']) }}
                    </td>
                 </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Wednesday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Wednesday', 'Wednesday', ($dutydays[3]->day != '')? 'checked' : '', ['id' => 'wednesday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'wed_start_time',Form::getValueAttribute('start', $dutydays[3]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'wed_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'wed_end_time', Form::getValueAttribute('end', $dutydays[3]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'wed_end_time']) }}
                    </td>
                 </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Thursday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Thursday', 'Thursday', ($dutydays[4]->day != '')? 'checked' : '', ['id' => 'thursday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'thu_start_time',Form::getValueAttribute('start', $dutydays[4]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'thu_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'thu_end_time', Form::getValueAttribute('end', $dutydays[4]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'thu_end_time']) }}
                    </td>
                 </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Friday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Friday', 'Friday', ($dutydays[5]->day != '')? 'checked' : '', ['id' => 'Friday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'fri_start_time',Form::getValueAttribute('start', $dutydays[5]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'fri_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'fri_end_time', Form::getValueAttribute('end', $dutydays[5]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'fri_end_time']) }}
                    </td>
                 </tr>
                <tr><td><br></td><td></td></tr>
                <tr>
                    <td width="272" height="55"><label>Saturday:</label> </td>
                    <td width="333">
                       {{ Form::checkbox('Saturday', 'Saturday', ($dutydays[6]->day != '')? 'checked' : '', ['id' => 'saturday']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>Start Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'sat_start_time',Form::getValueAttribute('start', $dutydays[6]->start), ['placeholder' => 'hh:min AM/PM', 'id' => 'sat_start_time']) }}
                    </td>
                 </tr>
                 <tr>
                    <td width="272" height="55"><label>End Time:</label> </td>
                    <td width="333">
                       {{ Form::input('time', 'sat_end_time', Form::getValueAttribute('end', $dutydays[6]->end), ['placeholder' => 'hh:min AM/PM', 'id' => 'sat_end_time']) }}
                    </td>
                 </tr>
                  <tr><td><br></td><td></td></tr><tr>
                <tr>
                <td colspan="2">
                    <center>
                        <div class="btn-wrap">
                            <a class="btn_3" href="../" >Back</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <input type="submit" value="Update" class="submit" />
                        </div>
                    </center>
                </td>
                </tr>
            </table>
            {{ Form::close() }}
            </div>
        </center>
		
		<br><br>

      
@stop