@extends('layouts.app')

@section('title', 'Slider Create || admin')

@section('content')

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create A Slider Cover Pages</h4>
                   </div>
                <div class="card-body">

                    <form action="{{route('slider.store')}}" method="POST"  enctype="multipart/form-data">
                       @csrf

                       @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" name="title" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sub_Title</label>
                          <input type="text" name="sub_title" class="form-control">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">name</label>
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">qualification</label>
                          <input type="text" name="qualification" class="form-control">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">descriptions</label>
                          <input type="text" name="descriptions" class="form-control">
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">phone</label>
                          <input type="text" name="phone" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">quoteBtn</label>
                          <input type="text" name="quoteBtn" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">downloadBtn</label>
                          <input type="text" name="downloadBtn" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">quoteBtn</label>
                          <input type="text" name="quoteBtn" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">downloadBtn</label>
                          <input type="text" name="downloadBtn" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">quoteBtn</label>
                          <input type="text" name="quoteBtn" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">education1</label>
                          <input type="text" name="education1" class="form-control">
                        </div>
                      </div>
                    </div>

                    
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">youtube</label>
                          <input type="text" name="youtube" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">facebook</label>
                          <input type="text" name="facebook" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">twitter</label>
                          <input type="text" name="twitter" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">linkdln</label>
                          <input type="text" name="linkdln" class="form-control">
                        </div>
                      </div>
                    </div>

              
                    <div class="row">
                      <div class="col-md-12">
                         <label class="bmd-label-floating">Background image</label>
                          <input type="file" name="image" class="form-control">
                       
                    </div>
                     
                    </div>

                  
                    <button type="submit" class="btn btn-primary pull-right mt-4">Add Slider</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
   
          </div>
        </div>
      </div>
      @endsection