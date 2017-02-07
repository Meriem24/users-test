
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Modifier Email</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            {!! Form :: open(array('action' => array('UserController@save',"$user->id"),'method' => 'POST','enctype'=>"multipart/form-data"))!!}
                            <div class="box-body">
                                <div class="form-group">
                                    {!! Form:: label('name','Nom',['class'=>'control-label'])!!}
                                    {!! Form::text('name',"$user->name")!!}
                                </div>
                                <div class="form-group">
                                    {!! Form:: label('email','Email',['class'=>'control-label','type'=>'email'])!!}
                                    {!! Form::text('email',"$user->email",['type'=>'email'])!!}
                                </div>
                                <div class="box-footer">
                                    {!! Form::submit('Enregistrer',['class'=>'btn btn-primary'])!!}
                                </div>
                                {!! Form :: close()!!}
                            </div>
                        </div>
                    </div>
                </div>
