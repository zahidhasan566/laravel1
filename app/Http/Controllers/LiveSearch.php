<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
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
                $data = DB::table('offer')
                    ->where('offername', 'like', '%'.$query.'%')
                    ->orWhere('offercode', 'like', '%'.$query.'%')
                    ->get();

            }
            else
            {
                $data = DB::table('offer')
                    ->orderBy('offerid', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach($data as $row)
                {
                    $output .= '
        <tr>
         <td>'.$row->offername.'</td>
         <td>'.$row->offercode.'</td>

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
