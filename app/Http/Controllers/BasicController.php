<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use DB;

class BasicController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function register_process()
    {
        $messages = [
            'required'  => 'ฟิลด์ :attribute จำเป็น'
        ];

        $rules = [
            'firstname'      => 'required',
            'lastname'      => 'required',
            'email'            => 'required',
            'tel'                 => 'required',
            'gender'         => 'required',
            'address'       => 'required'
        ];

        $validator = Validator::make(Request::all(),$rules,$messages);
        if ($validator->fails()) {
            // กรณีตรวจสอบฟอร์มไม่ผ่าน
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            
            $data_member = array(
				'firstname'	=> Request::input('firstname'),
				'lastname'		=> Request::input('lastname'),
				'email'	=> Request::input('email'),
                'tel'		=> Request::input('tel'),
                'gender' => Request::input('gender'),
                'address'	=> Request::input('address'),
                'created_at' => NOW()
			);

            //$add_member = DB::table('members')->insert(Request::except('_token'));
            $add_member = DB::table('members')->insert($data_member);

            // เช็คว่า insert success
            if( $add_member)
			{
                return redirect('register')->with('status','<div class="alert alert-success">Register success</div>');
            }else{
                return redirect('register')->with('status','<div class="alert alert-danger">Register Fail!!!</div>');
            }
        }

    }

    public function province()
    {
        ## Retrieving All Rows From A Table
        //$province = DB::table('tbl_provinces')->get(); // select * from tbl_provinces
        //$province = DB::table('tbl_provinces')->get(['province_id','province_name']); // select province_id,province_name from tbl_provinces

        ## Retrieving A Single Row / Column From A Table
        //$province = DB::table('tbl_provinces')->where('province_name', 'นนทบุรี')->first();
        //$province = DB::table('tbl_provinces')->where(array('province_id'=>'8','province_code'=>'17'))->first();
        /*$province = DB::table('tbl_provinces')
                                            ->where('province_id','8')
                                            ->where('province_code','17')
                                            ->first();
        */
        //$province = DB::table('members')->find(3); // แบบนี้จะค้นหาจากฟิลด์ id
        //$province = DB::table('members')->find(array(2,3)); // แบบนี้จะค้นหาจากฟิลด์ id

        ##Aggregates
        //$member = DB::table('tbl_provinces')->count();
        // $province_code = DB::table('tbl_provinces')->max('province_code');
        // $province_code = DB::table('tbl_provinces')->avg('province_code');

        ## Determining If Records Exist
        /*
        $province = DB::table('tbl_provinces')->where('province_code', 135);
        if($province->exists()){
            return "Data exists";
        }else{
            return "Data not exists";
        }
        */

        ## Raw Expressions
        // $province = DB::select("SELECT province_name,province_name_eng FROM tbl_provinces WHERE province_code='11'");

        ## Select to view
        // $province = DB::table('tbl_provinces')->get();

        ## Select and Pagination
        $province = DB::table('tbl_provinces')->paginate(20);

        ## Customizing the url
        //$province->withPath('province/page');
        
        ## Simple Pagination
        //$province = DB::table('tbl_provinces')->simplePaginate(20);

        // echo "<pre>";
        // print_r($province);
        // echo "</pre>";
        //echo $province->province_name;
        //return $province;

        return view('pages.province')->with('province',$province);

    }

}
