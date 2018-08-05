<div class="contenedor-menu">
                                <!-- -->
                                <ul id="accordion" class="accordion">
                                    <li>
                                        <div class="link"><a rel="nofollow" rel="noreferrer" href="/arreglos">Todos los Arreglos</a></div>
                                    </li>
                                    <li>
                                        <div class="link"><a rel="nofollow" rel="noreferrer" href="/arreglos/destacados/1">Los mas vistos</a></div>
                                    </li>
                                    
                                    <li>
                                        <div class="link">Categorias<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                        @foreach($categories as $category)
                                        
                                        <li><a rel="nofollow" rel="noreferrer" href="/arreglos/categorias/{{$category->id}}">{{$category->name}}</a></li>

                                        
                                        @endforeach

                                        </ul>
                                    </li>
                                    <li><div class="link">Ocasiones<i class="fa fa-chevron-down"></i></div>
                                        <ul class="submenu">
                                         @foreach($ocasiones as $ocasion)
                                         <li><a rel="nofollow" rel="noreferrer" href="/arreglos/ocasiones/{{$ocasion->id}}">{{$ocasion->ocasion}}</a></li>

                                         @endforeach

                                        </ul>
                                    </li>
                                    <li>
                                        <div class="link"><a rel="nofollow" rel="noreferrer" href="/arreglos/mas_vendidos/1">Los mas vendidos</a></div>
                                    </li>

                                </ul>
                            <!-- -->
                        </div>                       