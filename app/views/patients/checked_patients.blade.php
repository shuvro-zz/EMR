@extends('patients.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    View Checked Patients
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        View Checked Patients
            </div>
		</div>


		<!--========================================================
                                     Data Table
            =========================================================-->

            <div class="form" style="margin-top: 5%; margin-left: 10%;">

            {{ Form::open(array('url' => 'patients/filter', 'method' => 'post')) }}
                <input name="date_range" id="d" class="form__daterange" placeholder="Select Date to filter:">
                {{ Form::button('Go', ['type' => 'submit', 'class' => 'data_table_submit_btn']) }}
            {{Form::close()}}

            </div>
            <br/>

            <center>
                <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th style="width: 25%">Action</th>
                    </tr>
                </thead>

                <tbody>
                @if(isset($appointments))
                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{{ $appointment->patient->name }}}</td>
                            <td>{{{ $appointment->employee->name }}}</td>
                            <td>{{{ date('j F, Y', strtotime($appointment->date)) }}}</td>
                            <td>{{{ $appointment->timeslot->slot }}}</td>
                            <td>
                                @if($appointment->status == 0)
                                    Reserved
                                @elseif($appointment->status == 1)
                                    Waiting
                                @elseif($appointment->status == 2)
                                    Check-in
                                @elseif($appointment->status == 3)
                                    No Show
                                @elseif($appointment->status == 4)
                                    Cancelled
                                @elseif($appointment->status == 5)
                                    Closed
                                @endif
                            </td>
                            <td>
                                {{ link_to_route('appointments.show', 'View', [$appointment->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            @if(Request::is('patients_reporting'))
                {{ $appointments->links('partials.pagination') }}
            @endif
            </center>

    
@stop

@section('scripts')
    <script>
            $(function () {
                $("#d").daterange({
                    dateFormat: "yy-mm-dd",
                     rangeSeparator: " -- ",
                    onClose: function (dateRangeText) {
                        console.log(dateRangeText)
                    }
                });
            });
        </script>
@stop
