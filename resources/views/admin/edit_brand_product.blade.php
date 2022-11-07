@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhập Thương Hiệu Sản Phẩm
                        </header>
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo'<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
                            
                            <div class="position-center">
                                 @foreach($edit_brand_product as  $key =>$edit_value)
                                <form role="form" action ="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}"method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{$edit_value->brand_name}}" name ="brand_product_name"class="form-control" id="exampleInputEmail1" placeholder="Tên Danh Mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea style="resize: none" rows="5" type="password"name ="brand_product_desc"class="form-control" id="exampleInputPassword1">{{$edit_value->brand_desc}}</textarea>
                                </div>
                                
                                
                                <button type="submit" name="add_brand_product"class="btn btn-info">Cập Nhật Danh Mục</button>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div
@endsection             