@extends('vitalsigns.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Select Appointment
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                       Select Appointment
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
            <center style="margin-top: 7%;">

                    <br>
                <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th style="width: 25%">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($appointments as $appointment)
                        <tr>
                            <td>{{{ $appointment->patient->name }}}</td>
                            <td>{{{ $appointment->employee->name }}}</td>
                            <td>{{{ $appointment->date }}}</td>
                            <td>{{{ $appointment->timeslot->slot }}}</td>
                            <td>
                                {{ link_to_route('vitalsigns.show', 'View', ['id' => $appointment->id], ['class' => 'data_table_btn'])}}
                                {{ link_to_route('vitalsigns.edit', 'Edit', [$appointment->id], ['class' => 'data_table_btn'])}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </center>

@stop

