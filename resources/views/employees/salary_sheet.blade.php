@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6" style="padding-left: 30px">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green-sharp bold">Salary Sheet</span>
                </div>
                <div class="table-toolbar">
                    <div class="pull-right">
                        <a href="{{ url('/create_salary_sheet') }}" class="btn btn-sm btn-primary">
                            Add New
                        </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <article>
                    <div id="reload">
                        <table class="table table-bordered" id="example">
                            <thead>
                                <tr role="row">
                                    <th>Serial No</th>
                                    <th>Name</th>
                                    <th>Joining Date</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Salary(Basic)</th>
                                    <th>House Rent(25% of Basic))</th>
                                    <th>Medical allowance(1.5% of Basic))</th>
                                    <th>Conveyance(0.5% of Basic))</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sheets as $item)
                                    <tr class="item">
                                    <td class="text-center">{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->employee->name }}</td>
                                    <td>{{ $item->joining_date }}</td>
                                    <td>{{ $item->month }}</td>
                                    <td>{{ $item->year }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>{{ $item->house_rent }}</td>
                                    <td>{{ $item->medical_fee }}</td>
                                    <td>{{ $item->conveyance }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
@endsection
