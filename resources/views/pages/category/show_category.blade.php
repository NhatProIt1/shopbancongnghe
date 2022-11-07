@extends('layout')
@section ('content')
<div class="features_items"><!--features_items-->
                        @foreach($category_name as $key => $name)
						<h2 class="title text-center">{{$name->category_name}}</h2>
                        @endforeach

						@foreach($category_by_id as $key =>$product)
							<a heref ="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
												<div class="productinfo text-center">
												<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" /></a>
													<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{number_format(floatval($product->product_price)).' '.'VND'}}</a>
													<p>{{$product->product_name}}</p>
													<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
												</div>
												
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="fa fa-plus-square"></i>Yêu Thích</a></li>
												<li><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="fa fa-plus-square"></i>So Sánh</a></li>
											</ul>
										</div>
									</div>
								</div>
							</a>
						@endforeach	
</div><!--features_items-->
        <!--/recommended_items-->
@endsection 