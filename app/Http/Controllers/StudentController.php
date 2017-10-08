<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/5
 * Time: 14:07
 */


namespace App\Http\Controllers;

use App\Student;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller
{
    public function test1()
    {
//        return 'test1';
        $student = DB::select('select * from student');
        dd($student);
//        $bool=DB::insert('insert into student(name,age) values(?,?)',['alex',33]);
//        var_dump($bool);
//        DB::update('update student set age = ? where name = ?',[30,'alex']);
    }

    //sql 增删改查
    public function query1()
    {
        DB::table('student')->insert(
            [
                'name' => 'sean',
                'age' => 18
            ]
        );
        return 'your operation success';
    }
    public function query2()
    {
        DB::table('student')
            ->where('id', 2)
            ->update(['age' => 33]);
        return 'update成功';
    }
    public function query3()
    {
        DB::table('student')
            ->where('id', '>', 3)
            ->delete();
        return 'delete成功';
    }
    public function query4()
    {
//        $student=DB::table('student')->get();
//        $student=DB::table('student')
//            ->where('id','>',0)
//            ->get();
//        $student = DB::table('student')
//            ->select('id','name','age')
//            ->get();

        DB::table('student')
            ->chunk(2,function ($student)
            {var_dump($student);});
        echo DB::table('student')
            ->max('age');

        //dd($student);
    }

    //orm增删改查
    public function orm1()
    {
//        $students=Student::all();
        $students=Student::find(7);
//        $students=Student::findOrFail(2);
//        $students=Student::get();
//        $students=Student::where('id','>',0)->orderBy('age','desc')->first();
//        dd($students);
//        Student::chunk(1,function ($students){var_dump($students);});
//        $max=Student::max('age');
        echo $students->created_at;
    }
    public function orm2()
    {
//        $student= new Student();
//        $student->name='zhangyang';
//        $student->age=17;
//        $bool=$student->save();
//        echo $bool;
//        $student=Student::create(
//            ['name'=>'haha','age'=>24]
//        );
        $student=Student::firstOrCreate(['name'=>'haha']);
        dd($student);
    }
    public function orm3()
    {
//        $student=Student::find(7);
//        $student->name='kitty';
//        $student->save();
        echo Student::where('id','>',7)->update(['age'=>40]);
        echo 'save success';
    }
    public function orm4()
    {
//        $student=Student::find(9);
//        echo $student->delete();
//        echo Student::destroy(8);
        $student=Student::where('name','chenronghua')->delete();
        var_dump($student);
    }

    //模版视图
    public function section1()
    {
        $name='sean';
        $arr=['alex','sean'];
        $arr2=[];
        $students=Student::get();
        return view('section1',['name'=>$name,'arr'=>$arr,'arr2'=>$arr2,'students'=>$students]);
    }

    public function url1()
    {
        return 'urltest';
    }

    //request
    public function request1(Request $request)
    {
//        echo $request->name;
//        echo '<br>';
//        echo $request->input('name');
//        echo '<br>';
//        dd($request->all());
//        echo '<br>';
//        echo $request->method();
        if ($request->isMethod('get')){
            echo 'yes';
        }else{echo 'no';}
        if ($request->ajax()){
            echo 'ajax';
        }else{echo '<br>no ajax';}
        echo '<br>';
        echo $request->is('student/*');
        echo '<br>';
        echo $request->url();
    }

    //session
    public function session1()//(Request $request)
    {
        //$request->session()->put('name','alex');
        session()->put('age',33);
        echo 'put success';
        Session::put(['sex'=>'male','weight'=>60,'height'=>175]);
        Session::push('student','sean');
        Session::push('student','alex');
//        Session::forget('name');
        Session::flash('name','alex');
    }
    public function session2()//(Request $request)
    {
        //echo $request->session()->get('name').'<br>';
//        echo session()->get('age','default').'<br>';
//        echo Session::get('sex').'<br>';
//        echo Session::get('height').'<br>';
//        echo Session::get('weight').'<br>';
//        var_dump(Session::pull('student'));
//        var_dump(Session::all());
        if(Session::has('name')){
            return Session::get('name');
        }else{return 'no name';}
    }

    //response
    public function response()
    {
        $data=[
          'errcode'=>403,
          'errmsg'=>'too strong',
          'trap'=>'SimElc'
        ];
//        return response()->json($data);
//        return redirect()->route('haha');
//        return redirect('session2')->with('name','jobs');
        return redirect()->back();
    }
    public function conduct()
    {
        return 'to be continue';
    }
    public function active1()
    {
        return 'ing from active1';
    }
    public function active2()
    {
        return 'ing from active2';
    }
}