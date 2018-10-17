@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6" style="padding-left: 30px">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-green-sharp bold">Employee</span>
                </div>
                <div class="table-toolbar">
                    <div class="pull-right">
                        <a class="navbar-brand" href="{{ url('/salary_sheet') }}">
                            Go to Salary Sheet
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
                                    <th>Salary</th>
                                    <th>Joining Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $item)
                                    <tr class="item">
                                    <td class="text-center">{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->salary }}</td>
                                    <td>{{ $item->joining_date }}</td>
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
