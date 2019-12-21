<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
        //echo ($id);
        //return view('livesearch.index')->with($id);
        return view('livesearch.index');
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('user')
                    ->where('type', 2)
                    ->where('username', 'like', '%'.$query.'%')
                    ->get();

            }
            else
            {
                $data = DB::table('user')
                    ->where('type', 2)
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->city.'</td>
         <td>'.$row->gender.'</td>

        </tr>
        ';
                }
            }
            else
            {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
