@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12">
                  <h1>Edit New Product</h1>
                </div>
              </div>
            </div>
          </section>
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Title <span style="color:red">*</span></label>
                                <input type="text" class="form-control" required value="{{ old('title', $product->title) }}" name="title" placeholder="Title">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>SKU <span style="color:red">*</span></label>
                                <input type="text" class="form-control" required value="{{ old('sku', $product->sku) }}" name="sku" placeholder="SKU">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Category <span style="color:red">*</span></label>
                                <select class="form-control" name="category_id">
                                  <option value="">Select</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Sub Category <span style="color:red">*</span></label>
                                <select class="form-control" name="sub_category_id">
                                  <option value="">Select</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Brand <span style="color:red">*</span></label>
                                <select class="form-control" name="brand_id">
                                  <option value="">Select</option>
                                </select>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </section>
     
</div>

@endsection

@section('script')

@endsection