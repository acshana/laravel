@extends('common.layouts')

@section('title')
    —修改
@stop

@section('content')
    @include('common.validate')
    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">修改舰娘</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[name]"
                               @unless($errors->first('al.name'))
                               value="{{old('al')['name'] ? old('al')['name'] : $al->name}}"
                               @endunless
                               class="form-control" id="name" placeholder="请输入舰娘姓名">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.name')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">炮击</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[pj]"
                               @unless($errors->first('al.pj'))
                               value="{{old('al')['pj'] ? old('al')['pj'] : $al->pj}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘炮击值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.pj')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">雷击</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[lj]"
                               @unless($errors->first('al.lj'))
                               value="{{old('al')['lj'] ? old('al')['lj'] : $al->lj}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘雷击值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.lj')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">防空</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[fk]"
                               @unless($errors->first('al.fk'))
                               value="{{old('al')['fk'] ? old('al')['fk'] : $al->fk}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘防空值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.fk')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">航空</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[hk]"
                               @unless($errors->first('al.hk'))
                               value="{{old('al')['hk'] ? old('al')['hk'] : $al->hk}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘航空值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.hk')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">装填</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[zt]"
                               @unless($errors->first('al.zt'))
                               value="{{old('al')['zt'] ? old('al')['zt'] : $al->zt}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘装填值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.zt')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">耐久</label>
                    <div class="col-sm-5">
                        <input type="text" name="al[nj]"
                               @unless($errors->first('al.nj'))
                               value="{{old('al')['nj'] ? old('al')['nj'] : $al->nj}}"
                               @endunless
                               class="form-control" id="age" placeholder="请输入舰娘耐久值">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{$errors->first('al.nj')}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">阵营</label>
                    <div class="col-sm-5">
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="option1"> 白鹰
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="option2"> 皇家
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="option3"> 铁血
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="option3"> 重樱
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" value="option3"> 东煌
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">请选择阵营</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop