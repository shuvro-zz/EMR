@extends('allergies.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Allergy Detail
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Allergy Detail
            </div>
		</div>
		<br><br><br>
@stop

@section('content2')

	   <center>
            <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="150">
              <tr>
                <td width="272" height="55"><label>Allergy Name:</label> </td>
                <td width="333"><label>{{{ $allergy->allergy_name}}}</label></td>
                </tr>


                <tr>
                <td width="272"><label>Allergy Note:</label></td>
                <td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $allergy->allergy_note }}}</div></label></td>
                </tr>

            </table>
            <center>
                  <section style="margin-bottom: 10%">
                     {{ link_to_route('allergies.index', 'Back', ['id' => $allergy->patient_id], ['class' => 'btn_3']) }}
                  </section>
             </center>
            </div>
        </center>

		<br><br>

     
@stop