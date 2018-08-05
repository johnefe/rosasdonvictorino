@extends('layouts.adminBase')


@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">PUBLICACIONES EN MI BLOG FLORAL</h4>
            <p class="category">www.floristeriaColors.com</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                <!--inicio un producto -->
                    <tr>
                        <td>¿QUÉ SIGNIFICA REGALAR ROSAS?</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eos aliquid porro id, perferendis excepturi iusto quae voluptatem aut velit, quis ut unde, nulla. Similique blanditiis illum magni ratione, omnis.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                <!--inicio un producto -->
                    <tr>
                        <td>¿QUÉ SIGNIFICA REGALAR ROSAS?</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eos aliquid porro id, perferendis excepturi iusto quae voluptatem aut velit, quis ut unde, nulla. Similique blanditiis illum magni ratione, omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eos aliquid porro id, perferendis excepturi iusto quae voluptatem aut velit, quis ut unde, nulla. Similique blanditiis illum magni ratione, omnis.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                <!--inicio un producto -->
                    <tr>
                        <td>¿QUÉ SIGNIFICA REGALAR ROSAS?</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eos aliquid porro id, perferendis excepturi iusto quae voluptatem aut velit, quis ut unde, nulla. Similique blanditiis illum magni ratione, omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt eos aliquid porro id, perferendis excepturi iusto quae voluptatem aut velit, quis ut unde, nulla. Similique blanditiis illum magni ratione, omnis.</td>
                        <td>rosas.jpg</td>
                        <td>
                            <button type="submit" class="btn btn-success" ><span class="fa fa-pencil fa-1x"></span></button>
                            <button type="submit" class="btn btn-danger" ><span class="fa fa-trash fa-1x"></span></button>
                        </td>
                    </tr>
                <!-- finr un producto -->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

@stop