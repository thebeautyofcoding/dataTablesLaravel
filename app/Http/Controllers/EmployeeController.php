<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\EmployeeDataTable;
use Yajra\Datatables\Datatables;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEmployees(Request $request)
    {
        if ($request->ajax()) {
            $data = Employee::latest()->get();

            foreach($data as $employee){
                $employee->firma=$employee->company;
            }
    
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('details_url', function($data){
                   return url('personsCompany/' .$data->id);
                })
                
                ->make(true);
        }
    }

    public function getPersonsCompany($id)

    {
        

        $company = Employee::find($id)->company();

        return Datatables::of($company)->make(true);
    }
}
