@include('incloude.dashboardHeader')

                <div class="container-fluid">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Update Category {{$category->name}}"</p>
                        </div>
                        <div class="card-body">
                        <form action="{{route('categories.update' , ['id' => $category->id])}}" method="POST">
                            @csrf
                                <div class="form-row">
                                    <div class="col">
                                    <div class="form-group"><label for="username"><strong>Category Name</strong></label><input class="form-control" type="text" placeholder="Category Name" name="category" value="{{$category->name}}"></div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-top: 18px;"><button class="btn btn-primary btn-sm" type="submit" style="background-color: rgb(91,9,9);">Save</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('incloude.dashboardFooter')