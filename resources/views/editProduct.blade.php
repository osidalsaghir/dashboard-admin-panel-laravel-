@include('incloude.dashboardHeader')

                <div class="container-fluid">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold" style="color: rgb(91,9,9)!important;">Update {{$product->name}}</p>
                        </div>
                        <div class="card-body">
                            @if(count($errors)>0)
                            @foreach ($errors -> all() as $error)
                            <div class="alert alert-danger" role="alert">
                               {{$error}}
                              </div>
                            @endforeach
                            
                            @endif
                        <form action="{{route('products.update' , ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Product Name</strong></label><input class="form-control" type="text" placeholder="user.name" name="name" value="{{$product->name}}"></div>
                                        <div class="form-group"><label for="email"><strong>Tag</strong></label><input class="form-control" type="email" placeholder="user@example.com" name="tag" value="" ></div>
                                        <div class="form-group"><label for="first_name"><strong>Category</strong></label><input class="form-control" type="text" placeholder="John" name="category"></div>
                                    <div class="form-group"><label for="price"><strong>Price</strong></label><input value="{{$product->price}}" class="form-control" type="text" style="width: 167px;" name="price"><select class="form-control" style="width: 80px;margin-top: 11px;" name="priceType"><optgroup><option value="$" selected="">$</option><option value="TL">TL</option><option value="SYP">SYP</option></optgroup></select></div>
                                    </div>
                                <div class="col"><label for="last_name"><strong>Status</strong><br></label><select class="form-control" style="margin-top: 0px;" name="status"><optgroup label="This is a group"><option @if($product->status ==1) selected @endif value="1" selected>0nline</option><option @if($product->status ==0) selected @endif  value="0">Offline</option></optgroup></select><br><label for="last_name"><strong>Content</strong><br></label><textarea class="form-control" style="margin-bottom: 12px;" rows="8" col="8" name="content">{{$product->content}}</textarea>
                                        <div
                                            class="form-group"><label for="email"><strong>Photos</strong></label>
                                        <br>
                                        <input type="file" name="picture"></div>
                                </div>
                        </div>
                        <div class="form-group text-right" style="margin-top: 18px;"><button class="btn btn-primary btn-sm" type="submit" style="background-color: rgb(104,29,30);">Save</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        @include('incloude.dashboardFooter')