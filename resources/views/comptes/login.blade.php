@extends("Layouts/mainLayout")
@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Identification à CID Project </strong>
                </div>
                <div class="panel-body">
                    {{ Form::open(['action' => 'ComptesController@postLogin'])}}
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                            {{Form::text('login', '',["class"=>"form-control" , "placeholder"=>"Nom d'utilisateur"])}}
                                            <!--input class="form-control" placeholder="Nom d'utilisateur" name="login" type="text" autofocus-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            {{Form::password('mdp',["class"=>"form-control" , "placeholder"=>"Mot de passe"])}}
                                        </div>
                                    </div>
                                    @include('flash::message')
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter"  name="connexion">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection