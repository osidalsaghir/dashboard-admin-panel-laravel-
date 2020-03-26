

                 @include('incloude.dashboardHeader')

                <div class="container-fluid">
                    <div class="card shadow mb-3">
                        
                        <div class="card-header py-3">
                        
                            <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Create new product</p>
                        </div>
                        <div class="card-body">
                            @if(count($errors)>0)
                        @foreach ($errors -> all() as $error)
                        <div class="alert alert-danger" role="alert">
                           {{$error}}
                          </div>
                        @endforeach
                        
                        @endif
                        @if(session('done'))
                        <div class="alert alert-success" role="alert">
                            {{session('done')}}
                        </div>
                        @endif
                        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="name"><strong>Product Name</strong></label><input class="form-control" type="text" placeholder="Product Name" name="name"></div>
                                        <label for="exampleFormControlSelect1">Tags</label>
                                        @foreach ($tags as $tag)
                                            
                                       
                                        <!--tags--> 
                                        <div class="form-check">
                                        <input class="form-check-input"name="tags[]" type="checkbox" value="{{$tag->id}}" id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                              {{$tag->name}}
                                            </label>
                                          </div>
                                          
                                          @endforeach
                                        <!--end tags--> 
                                          <br>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Category</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                                @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                        <div class="form-group"><label for="price"><strong>Price</strong></label><input class="form-control" type="text" style="width: 167px;" name="price"><select class="form-control" style="width: 80px;margin-top: 11px;" name="priceType"><optgroup><option value="$" selected="">$</option><option value="TL">TL</option><option value="SYP">SYP</option></optgroup></select></div>
                                    </div>
                                    <div class="col"><label for="status"><strong>Status</strong><br></label><select name="status" class="form-control" style="margin-top: 0px;"><optgroup><option value="1" selected>0nline</option><option value="0">Offline</option></optgroup></select><br><label for="content"><strong>Content</strong><br></label><textarea class="form-control" style="margin-bottom: 12px;" name="content"></textarea>
                                        <div
                                            class="form-group"><label for="photos"><strong>Photos</strong></label>
                                        <br>
                                        <label class ="new-button text-center uploadfiletext" style="color : black; for="upload"> Upload picture
                                            <input id="upload" type="file" name="picture">
                                    </div>
                                </div>
                        </div>
                        <div class="form-group text-right" style="margin-top: 18px;"><button class="btn btn-primary btn-sm" type="submit" style="background-color: rgb(104,29,30);">Add product</button></div>
                        </form>
                    </div>
                </div>
                <div class="card shadow">
                    @if($products->count() > 0)
                    <div class="card-header py-3" style="color: rgb(91,9,9)!important;">
                        <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Products</p>
                    </div>
                    @endif
                    <div class="card-body">
                        @if($products->count() > 0)
                       
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        @endif
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            @if($products->count() > 0)
                         
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Tags</th>
                                        <th>Price</th>
                                        <th>Categories</th>
                                        <th>Delete</th>
                                        <th>Edit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                    <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>FALAN&nbsp; - FISTAN&nbsp;</td>
                                        <td>{{$product->price}} {{$product->priceType}}</td>
                                        <td>CAT</td>
                                        <td>
                                        <a href="{{route('products.delete' , ['id' => $product->id])}}"><i class="material-icons">delete</i></a></td>
                                        <td><a href="{{route('products.edit' , ['id' => $product->id])}}"> <i  class="material-icons">edit</i></a></td>
                                        @if($product->status == 0 )
                                        <td><a href="{{route('products.changestate' , ['id' => $product->id])}}"> offline</a></td>
                                        @endif
                                        @if($product->status == 1 )
                                        <td> <a href="{{route('products.changestate' , ['id' => $product->id])}}"> online</a></td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr></tr>
                            </tfoot>
                            </table>
                            @else 
                            <div class="text-center"><h4 style="color:red">There is no products yet</h4><br><h6>The product table will be shown here when you add products</h6></div>
                            @endif
                        </div>
                        @if($products->count() > 0)
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                            <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing {{$products->count()}}</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active" style="background-color: rgb(91,9,9)!important;"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('incloude.dashboardFooter')