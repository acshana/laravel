@if(Session::has('success'))
    <!-- 成功提示框 -->
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{Session::get('success')}}!</strong>
    </div>
@elseif(Session::has('fail'))
    <!-- 失败提示框 -->
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>失败!</strong>
    </div>
@endif