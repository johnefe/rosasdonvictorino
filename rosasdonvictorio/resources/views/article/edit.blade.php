@extends('layouts.adminBase')

@section('content')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">NUEVO POST FLORAL</h4>
                                  <p class="category">www.floristeriaColors.com</p>
                            </div>
                            <div class="content">
                                <!-- aqui inicia el formulario de crear nuevo producto -->
                                {!!Form::model($article,['route'=> ['articulos.update',$article->id], 'method'=>'PUT','files' => true])!!}
                                 @include('article.forms.formArticle')
                             <button type="submit" class="btn btn-info btn-fill pull-right">Guardar</button>
    <div class="clearfix"></div>
                            {!!Form::close()!!}
                                </form>
                                <!-- aqui finaliza el formulario de crear nuevo producto -->
                            </div>
                        </div>
                    </div>

@stop