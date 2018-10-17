
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label"><span style="color:red">*</span>&nbsp;Month</label>
    {!! Form::select('month', $months, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'placeholder' => __('Select')
    ]) !!}
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label"><span style="color:red">*</span>&nbsp;Year</label>
    {!! Form::select('year', $years, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'placeholder' => __('Select')
    ]) !!}
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('emp_id') ? 'has-error' : ''}}">
    <label for="emp_id" class="control-label"><span style="color:red">*</span>&nbsp;Employee</label>
    {!! Form::select('emp_id', $employees, null, [
        'class' => 'form-control select2',
        'required' => 'required',
        'id' => 'emp_id',
        'placeholder' => __('Select'),
        'onclick' => 'getEmpInfoById()'
    ]) !!}
    {!! $errors->first('emp_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('joining_date') ? 'has-error' : ''}}">
    <label for="joining_date" class="control-label"><span style="color:red">*</span>&nbsp;Joining Date</label>
    {!! Form::text('joining_date', null, [
        'class' => 'form-control date',
        'id' => 'joining_date',
        'required' => 'required',
        'readonly' => 'true'
        ]) !!}
    {!! $errors->first('joining_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    <label for="salary" class="control-label"><span style="color:red">*</span>&nbsp;Salary</label>
    {!! Form::text('salary', null, [
        'class' => 'form-control',
        'id' => 'salary',
        'required' => 'required',
        'readonly' => 'true'
        ]) !!}
    {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('house_rent') ? 'has-error' : ''}}">
    <label for="house_rent" class="control-label"><span style="color:red">*</span>&nbsp;House Rent</label>
    {!! Form::text('house_rent', null, [
        'class' => 'form-control',
        'id' => 'house_rent',
        'readonly' => 'true'
        ]) !!}
    {!! $errors->first('house_rent', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('medical_fee') ? 'has-error' : ''}}">
    <label for="medical_fee" class="control-label"><span style="color:red">*</span>&nbsp;Medical Fee</label>
    {!! Form::text('medical_fee', null, [
        'class' => 'form-control',
        'id' => 'medical_fee',
        'readonly' => 'true'
        ]) !!}
    {!! $errors->first('medical_fee', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('conveyance') ? 'has-error' : ''}}">
    <label for="conveyance" class="control-label"><span style="color:red">*</span>&nbsp;Conveyance</label>
    {!! Form::text('conveyance', null, [
        'class' => 'form-control',
        'id' => 'conveyance',
        'readonly' => 'true'
        ]) !!}
    {!! $errors->first('conveyance', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-md btn-success']) !!}
</div>

<script>

    function getEmpInfoById(){
        var emp_id = $('#emp_id').val();
        $.ajax({
            type: "GET",
            url:  "/emp_info",
            data:{emp_id: emp_id},
            dataType: "json",
            success: function(data) {
                //console.log(data);
                $("#joining_date").val(data.join_date);
                $("#salary").val(data.salary);
                $("#house_rent").val(data.house_rent);
                $("#medical_fee").val(data.medical_fee);
                $("#conveyance").val(data.conveyance);
            }
        });
    }

</script>
