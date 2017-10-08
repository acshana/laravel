<?php
/**
 * Created by PhpStorm.
 * User: acone
 * Date: 2017/10/7
 * Time: 10:38
 */

namespace App\Http\Controllers;

use App\ALmodel;
use Dotenv\Validator;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //首页
    public function index($sort='id',$flag=0)
    {
        if ($sort=='id'){
            $als = ALmodel::orderBy($sort)->paginate(10);
        }
        else{if ($flag){
            $als = ALmodel::orderBy($sort)->paginate(10);}else{
            $als = ALmodel::orderBy($sort,'desc')->paginate(10);
        }
        }
        //传参
        return view('myviews.index',['als'=>$als,'sort'=>$sort]);
    }

    //新增
    public function create()
    {
        return view('myviews.create');
    }

    //存值
    public function save(Request $request)
    {
        //1.控制器表单验证
        //第一个参数：请求
        //第二个参数：[字段=>规则]
        //第三个参数：[规则=>：attribute错误信息]（：attribute为占位符，关联第四个参数）
        //第四个参数：[字段=>格式化信息]
//        $this->validate($request,[
//            'al.name'=>'required|min:2',
//            'al.pj'=>'required|integer',
//            'al.lj'=>'required|integer',
//            'al.fk'=>'required|integer',
//            'al.hk'=>'required|integer',
//            'al.zt'=>'required|integer',
//            'al.nj'=>'required|integer',
//        ],[
//            'required'=>':attribute为必填项',
//            'min'=>':attribute最小长度为2',
//            'integer'=>':attribute必须是整数'
//        ],[
//            'al.name'=>'姓名',
//            'al.pj'=>'炮击',
//            'al.lj'=>'雷击',
//            'al.fk'=>'防空',
//            'al.hk'=>'航空',
//            'al.zt'=>'装填',
//            'al.nj'=>'耐久',
//        ]);

        //2.validator类表单验证
        $validator=\Validator::make($request->input(),[
            'al.name'=>'required|min:2',
            'al.pj'=>'required|integer',
            'al.lj'=>'required|integer',
            'al.fk'=>'required|integer',
            'al.hk'=>'required|integer',
            'al.zt'=>'required|integer',
            'al.nj'=>'required|integer',
        ],[
            'required'=>':attribute为必填项',
            'min'=>':attribute最小长度为2',
            'integer'=>':attribute必须是整数'
        ],[
            'al.name'=>'姓名',
            'al.pj'=>'炮击',
            'al.lj'=>'雷击',
            'al.fk'=>'防空',
            'al.hk'=>'航空',
            'al.zt'=>'装填',
            'al.nj'=>'耐久',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data=$request->input('al');
        $jn=ALmodel::create(
            [
                'name'=>$data['name'],
                'pj'=>$data['pj'],
                'lj'=>$data['lj'],
                'fk'=>$data['fk'],
                'hk'=>$data['hk'],
                'zt'=>$data['zt'],
                'nj'=>$data['nj']
            ]
        );
        if ($jn){
            return redirect('al/index')->with('success','添加成功');
        }else{
            return redirect()->back();
        }
    }

    //修改
    public function update(Request $request,$id)
    {
        $al=ALmodel::find($id);
        $data=$request->input('al');

        if ($request->isMethod('post')){
            $validator=\Validator::make($request->input(),[
                'al.name'=>'required|min:2',
                'al.pj'=>'required|integer',
                'al.lj'=>'required|integer',
                'al.fk'=>'required|integer',
                'al.hk'=>'required|integer',
                'al.zt'=>'required|integer',
                'al.nj'=>'required|integer',
            ],[
                'required'=>':attribute为必填项',
                'min'=>':attribute最小长度为2',
                'integer'=>':attribute必须是整数'
            ],[
                'al.name'=>'姓名',
                'al.pj'=>'炮击',
                'al.lj'=>'雷击',
                'al.fk'=>'防空',
                'al.hk'=>'航空',
                'al.zt'=>'装填',
                'al.nj'=>'耐久',
            ]);
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $lines=ALmodel::where('id','=',$id)->update([
                'name'=>$data['name'],
                'pj'=>$data['pj'],
                'lj'=>$data['lj'],
                'fk'=>$data['fk'],
                'hk'=>$data['hk'],
                'zt'=>$data['zt'],
                'nj'=>$data['nj']
            ]);
            if ($lines){
                return redirect('al/index')->with('success','修改成功:'.$id);
            }else{
                return redirect()->back();
            }
        }
        return view('myviews.update',['al'=>$al]);
    }

    //详情
    public function detail($id)
    {
        $al=ALmodel::find($id);
        return view('myviews.detail',['al'=>$al]);
    }

    //删除
    public function delete($id)
    {
        $al=ALmodel::find($id);
        if ($al->delete()){
            return redirect('al/index')->with('success','删除成功:'.$id);
        }else{
            return redirect('al/index')->with('success','删除失败:'.$id);
        }
    }

    //展示
    public  function show($sort='id',$flag=0)
    {
        if ($sort=='id'){
            $als = ALmodel::orderBy($sort)->paginate(10);
        }
        else{if ($flag){
            $als = ALmodel::orderBy($sort)->paginate(10);}else{
            $als = ALmodel::orderBy($sort,'desc')->paginate(10);
        }
        }
        return view('myviews.show',['als'=>$als,'sort'=>$sort]);
    }

    //temp增
    public function insert()
    {
        $al=ALmodel::create(
            ['name'=>'企业','pj'=>0,'lj'=>0,'fk'=>291,'hk'=>394,'zt'=>115,'nj'=>5385]
        );
        echo $al;
    }
}