<?php

namespace App\Http\Controllers;

use App\Employee;
use App\SalarySheet;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::all();

        return view('employees.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Employee::create($requestData);

        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $requestData = $request->all();
        $employee->update($requestData);

        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect('employee');
    }

    public function SalarySheet(){
        $sheets = SalarySheet::all();
        $months    = [
            '1' => 'January',
            '2' => 'February',
            '3' => 'March',
            '4' => 'April',
            '5' => 'May',
            '6' => 'June',
            '7' => 'July',
            '8' => 'August',
            '9' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];

        return view('employees.salary_sheet', compact('sheets', 'months'));
    }

    public function CreateSalarySheet(){
        $employees = Employee::options();
        $months    = [
                        '1' => 'January',
                        '2' => 'February',
                        '3' => 'March',
                        '4' => 'April',
                        '5' => 'May',
                        '6' => 'June',
                        '7' => 'July',
                        '8' => 'August',
                        '9' => 'September',
                        '10' => 'October',
                        '11' => 'November',
                        '12' => 'December',
                    ];
        $years      = [
                        '2017' => '2017',
                        '2018' => '2018',
                        '2019' => '2019',
                        ];

        return view('employees.create_salary', compact('employees', 'months', 'years'));
    }

    public function EmpInfo(Request $request){
        $emp_id = $request->input('emp_id');

        $employees = Employee::findOrFail($emp_id);
        $join_date = $employees->joining_date;
        $salary  = $employees->salary;
        $house_rent = ($employees->salary * 25)/100;
        $medical_fee = ($employees->salary * 1.5)/100;
        $conveyance  = ($employees->salary * 0.5)/100;

        $data = [
                'join_date' => $join_date,
                'salary' => $salary,
                'house_rent' => $house_rent,
                'medical_fee' => $medical_fee,
                'conveyance' => $conveyance
            ];
        echo json_encode($data);
    }

    public function salaryStore(Request $request){
        $requestData = $request->all();
        SalarySheet::create($requestData);

        return redirect('salary_sheet');
    }

}
