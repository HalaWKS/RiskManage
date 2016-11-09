@extends('Basic.guidebarIni')
@section('login')

    <div class="container">

        {!! Form::open(['url'=>'/login']) !!}

        <div class="col-md-5 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-family: ΢���ź�; font-size: large">��¼�����˻�</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('home')}}">
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">�û���</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="text" id="username" name="username" placeholder="�û���/����/�ֻ���" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password:') !!}
                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {{--<label class="col-lg-2 control-label">����</label>--}}
                            {{--<div class="col-lg-10">--}}
                            {{--<input type="password" id="password" name="password" placeholder="����" class="form-control">--}}
                            {{--</div>--}}
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <div class="checkbox c-checkbox">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <span class="fa fa-check"></span>��ס��</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('��¼', ['class'=>'btn btn-primary form-control']) !!}
                            {{--<div class="col-lg-offset-2 col-lg-10">--}}
                            {{--<button type="submit" class="btn btn-sm btn-default">--}}
                            {{--��¼--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            <div class="col-md-10 col-lg-offset-2">
                                <br>
                                <a href="{{url('register')}}">û���˺ţ����ע��</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {!! Form::close() !!}

    </div>

@stop
