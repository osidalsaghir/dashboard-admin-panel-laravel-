@include('incloude.dashboardHeader')

@extends('incloude.dashboardFooter')


    <div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col-md-6 justify-content-center align-items-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('assets/img/nonamesph.png?h=14bd0f9bce9c8e844b6e8d465ecb1798')}}" class="card-img-top" alt="..."> 
                   <br><br>
                <label class ="new-button text-center uploadfiletext" style="color : black; for="upload"> Change logo
                    <input id="upload" type="file" >





                    
                  </div>
                  <br>
                    <br>

            </div>
            
            <div class="col-md-6 mg-2">
                <ul class="list-group list-group-flush"  ">
                    
                    <li class="list-group-item" style="background-color:#f8f9fc !important;">Site Name : </li>
                    <li class="list-group-item" style="background-color:#f8f9fc !important;">Creation Time :  </li>
                    <li class="list-group-item" style="background-color:#f8f9fc !important;">Owner Name : </li>
                    <li class="list-group-item" style="background-color:#f8f9fc !important;">Latest update :   </li>
                  </ul>
            </div>
        </div>
    
        <br>
        <br>
      <form  method="POST" action="{{route('setting.save')}}">
          @csrf
        <div class="accordion " id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   Change Brand Name
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    
                            <div class="form-row">
                                <div class="col">
                                <div class="form-group"><input class="form-control" type="text" placeholder="Brand Name" name="sitename" value="{{$data->sitename}}"></div>
                                </div>
                            </div>
                           
                </div>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Change password  : 
                     
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                   
                            <div class="form-row">
                                <div class="col">
                                <div class="form-group"
                                ><input class="form-control" type="text" placeholder="Brand Name" name="brand" value="">
                                <br>
                                    <input class="form-control" type="text" placeholder="Brand Name" name="brand" value="">
                                </div>
                                </div>
                            </div>
                            
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     Change Slide Pictures : 
                       
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                      //**//
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     Change Categories One Home Page : 
                       
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
               

                      
                      <div class="col">
                          <select class="form-control" title="first" >
                        <option>Default select</option>
                        <option>Default select</option>
                        <option>Default select</option>
                      </select>
                    </div>
                    <br>
                      <div class="col">
                        <select class="form-control" title="second" >
                            <option>Default select</option>
                          </select>
                      </div>
                      <br>
                      <div class="col">
                        <select class="form-control" title="third">
                            <option>Default select</option>
                          </select>
                      </div>
                      <br>
                     
                  </div>
                </div>
              </div>
          </div>
          <div class="form-group" style="margin-top: 18px;"><button class="btn btn-primary btn-sm" type="submit" style="background-color: rgb(91,9,9);">Save Changes</button></div>
        </form>
      </div>
      <br>
      <br>
      <br>
      <br>

 
