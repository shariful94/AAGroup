<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AA Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card card-hover shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-info">Applicant Form</h6>
            </div>
            <div class="card-body">
                @include('partial.flash')
                @include("partial.error")
                {{Form::open(['route' => 'applicant.store','class'=>'user','enctype'=>'multipart/form-data'])}}
                <div class="form-group row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name']) !!}    
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email('email', null, ['required', 'class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <p>Address:</p>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        {!! Form::label('division_id', 'Division', ['class' => 'form-label']) !!}
                        {!! Form::select('division_id', $divisions, null, ['required', 'class'=>'form-control', 'id'=>'division_id', 'placeholder'=>'Select Division']) !!}
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        {!! Form::label('district_id', 'District', ['class' => 'form-label']) !!}
                        {!! Form::select('district_id', $districts, null, ['required', 'class'=>'form-control', 'id'=>'district_id', 'placeholder'=>'Select District']) !!}
                    </div>
                    <div class="col-sm-4">
                        {!! Form::label('upozila_id', 'Upazila', ['class' => 'form-label']) !!}
                        {!! Form::select('upozila_id', $upozilas, null, ['required', 'class'=>'form-control', 'id'=>'upozila_id', 'placeholder'=>'Select Upazila']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        {!! Form::label('address', 'Address Details', ['class' => 'form-label']) !!}
                        {!! Form::textarea('address', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                    <p>Programming Language:</p>
                    {!! Form::checkbox('language', '1', false, ['class'=>'form-check-input', 'id' => 'php']) !!}
                    {!! Form::label('php', 'PHP', ['class' => 'form-label']) !!}
                
                    {!! Form::checkbox('language', '2', false, ['class'=>'form-check-input', 'id' => 'python']) !!}
                    {!! Form::label('python', 'Python', ['class' => 'form-label']) !!}
                
                    {!! Form::checkbox('language', '3', false, ['class'=>'form-check-input', 'id' => 'java']) !!}
                    {!! Form::label('java', 'Java', ['class' => 'form-label']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <p>Educational Qualification:</p>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::label('exam', 'Exam', ['class' => 'form-label']) !!}
                        {!! Form::select('exam', 
                        [
                            'ssc' => 'SSC',
                            'hsc' => 'HSC',
                            'honours' => 'Honours',
                            'masters' => 'Masters',
                        ]
                        , null, ['required', 'class'=>'form-control', 'id'=>'exam', 'placeholder'=>'Select']) !!}   
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::label('university', 'University', ['class' => 'form-label']) !!}
                        {!! Form::select('university', 
                        [
                            'du' => 'Dhaka University',
                            'ru' => 'Rajshahi University',
                            'ku' => 'Khulna University',
                            'cu' => 'Chittagong University',
                            'nu' => 'National University',
                        ]
                        , null, ['required', 'class'=>'form-control', 'id'=>'university', 'placeholder'=>'Select']) !!}   
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::label('board', 'Board', ['class' => 'form-label']) !!}
                        {!! Form::select('board', 
                        [
                            'dha' => 'Dhaka',
                            'raj' => 'Rajshahi',
                            'chu' => 'Chittagong',
                            'com' => 'Comilla',
                            'din' => 'Dinajpur',
                            'bar' => 'Barisal',
                            'syl' => 'Sylhet',
                            'jess' => 'Jessore',
                        ]
                        , null, ['required', 'class'=>'form-control', 'id'=>'board', 'placeholder'=>'Select']) !!}   
                    </div>
                    <div class="col-sm-3">
                        {!! Form::label('result', 'Result', ['class' => 'form-label']) !!}
                        {!! Form::text('result', null, ['required', 'class'=>'form-control', 'id'=>'result', 'placeholder'=>'Result']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        {!! Form::label('photo', 'Applicant Photo', ['class' => 'form-label']) !!}
                        {!! Form::file('photo', null, ['required', 'class'=>'form-control', 'id'=>'photo', 'placeholder'=>'Photo']) !!}   
                    </div>
                    <div class="col-sm-6">
                        {!! Form::label('cv', 'Applicant CV', ['class' => 'form-label']) !!}
                        {!! Form::file('cv', null, ['required', 'class'=>'form-control', 'id'=>'cv', 'placeholder'=>'CV']) !!}
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-sm-12 mt-3 mb-sm-0">
                        <p>Training:</p>
                        {{ Form::radio('training', 1, '', ['class'=>'form-check-input', 'id' => 'yes']) }}
                        {{ Form::label('yes', 'Yes', ['class' => 'form-check-label']) }}
                    
                        {{ Form::radio('training', 2, '', ['class'=>'form-check-input', 'id' => 'no']) }}
                        {{ Form::label('no', 'No', ['class' => 'form-check-label']) }}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Submit Form', ['class'=>'btn btn-info btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            function createselect(ob){
                $("#district_id").html("");
                let html = "";
                for (const key in ob) {
                    if (Object.hasOwnProperty.call(ob, key)) {
                        // const element = ob[key];
                        html += `<option value="${key}">${ob[key]}</option>`;
                    }
                }
                $("#district_id").html(html);
            }
            $("#division_id").change(function(){
                let URL = "{{url('get-districts')}}";
                $.ajax({
                    type : "GET",
                    url: URL + "/" + $(this).val(),
                    data : "data",
                    dataType: "json",
                    success: function (response) {
                        createselect(response);
                    }
                });
            });
            function createupazila(ob){
                $("#upozila_id").html("");
                let html = "";
                for (const key in ob) {
                    if (Object.hasOwnProperty.call(ob, key)) {
                        // const element = ob[key];
                        html += `<option value="${key}">${ob[key]}</option>`;
                    }
                }
                $("#upozila_id").html(html);
            }
            $("#district_id").change(function(){
                let URL = "{{url('get-upozilas')}}";
                $.ajax({
                    type : "GET",
                    url: URL + "/" + $(this).val(),
                    data : "data",
                    dataType: "json",
                    success: function (response) {
                        createupazila(response);
                    }
                });
            });
        });
    </script>
</body>
</html>