@include('incloude.dashboardHeader')
        
                <div class="container-fluid">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Create new Tag</p>
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
                        <form action="{{route('tags.store')}}"  method="POST">
                            @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Tag Name</strong></label><input class="form-control" type="text" placeholder="Tag Name" name="name"></div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 18px;"><button class="btn btn-primary btn-sm" type="submit" style="background-color: rgb(91,9,9);">Add Tag</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow">
                  @if($tags->count()>0)
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Tags</p>
                        </div>
                        @endif
                        <div class="card-body">
                            @if($tags->count()>0)
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>delete</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($tags as $tag)
                                            
                                        
                                        
                                        <tr>
                                        <td>{{$tag->id}}</td>
                                            <td>{{$tag->name}}</td>
                                        <td><a href="{{route('tags.delete' , ['id' => $tag->id])}}"><i class="material-icons">delete</i></a></td>
                                            <td><a href="editTag.html"> <i  class="material-icons">edit</i></a></td>
                                        </tr>
                                        @endforeach
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            @else
                            <div class="text-center"><h4 style="color:red">There is no tags yet</h4><br><h6>The tag table will be shown here when you add products</h6></div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
           @include('incloude.dashboardFooter')