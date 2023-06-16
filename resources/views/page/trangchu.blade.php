@extends('master')
@section('content')


<!-- @php $gio= gmdate("H", time() +3600*7); @endphp
	@if ($gio <12)
	Chào buổi sáng
	@elseif ($gio < 18)
	Chào buổi chiều
	@else 
	Chào buổi tối
	@endif -->
<!-- @php 
   $ngay = date('d/m/Y');
   $thu = date('N');
   switch ($thu) {
      case 1:
         $chuoi_thu = 'Thứ 2';
         break;
      case 2:
         $chuoi_thu = 'Thứ 3';
         break;
      case 3:
         $chuoi_thu = 'Thứ 4';
         break;
      case 4:
         $chuoi_thu = 'Thứ 5';
         break;
      case 5:
         $chuoi_thu = 'Thứ 6';
         break;
      case 6:
         $chuoi_thu = 'Thứ 7';
         break;
      default:
         $chuoi_thu = 'Chủ nhật';
         break;
   }
@endphp -->

<!-- <div>
   Hôm nay là {{$chuoi_thu}}, ngày {{$ngay}}
</div> -->

<!-- <style>
	.grid {
    width: 400px; /* Chiều rộng của lưới */
    height: 400px; /* Chiều cao của lưới */
}

.square {
    display: inline-block;
    width: 20%; /* Chiều rộng của mỗi ô vuông */
    height: 20%; /* Chiều cao của mỗi ô vuông */
    border: 1px solid #000; /* Đường viền của mỗi ô vuông */
}

</style> -->
<!-- <div class="grid">
    @for ($i = 1; $i <= 5; $i++)
        @for ($j = 1; $j <= 5; $j++)
            <button class="square">
				OK
			</button>
        @endfor
    @endfor
</div> -->

<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer">
			<div class="banner">
				<ul>
					<!-- THE FIRST SLIDE -->
					@foreach($slide as $ss1)
                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden;
                        z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width: 100%; height: 100%;" data-duration="undifined" data-zoomstart="undifined" data-zoomend="undifined"
                        data-bgposition="undifined" data-kenburns="undifined" data-easeme="undifined" data-bgfit="undifined" data-bgfitend="undifined" ></div>
                        </li>   
                            <img style="width: 100%; height: 100%;" src="/source/image/slide/{{$ss1->image}}" alt="It'ok">
                        @endforeach
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
			<div class="beta-products-list">
						<h4 style="text-align: center;">New Products</h4>
						<div class="beta-products-details">
						<p style="text-align: center;">Tìm thấy {{count($new_product_array)}} san pham</p>							
						<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($new_product_array as $new)
							<div class="col-sm-3">
							<div class="single-item">
										<div class="single-item-header">			
											<a href="product.html"><img width="200px"; height="200px" src="source/image/product/{{$new['image']}}" alt=""></a>
										</div>
										<div class="single-item-body">

											<p class="single-item-title"> {{$new['name']}}</p>
											<p class="single-item-price">
											<span class="flash-del">{{$new['unit_price']}} đồng</span>
											<!-- <span class="flash-del" >{{ $new ['unit_price'] }} đồng</span> -->
											<span class="flash-sale">{{$new['promotion_price']}} đồng</span>
												
											</p>
									</div>
									<div class="single-item-caption"~>
									<a class="add-to-cart pull-left" href="add-to-cart/{{$new['id']}}"><i class="fa fa-shopping-cart"></i></a>

										<a class="beta-btn primary" href="detail/{{ $new['id'] }}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div><br/>
								</div>
							</div>
							@endforeach 
						</div>
						
				</div>
			</div><br/><br/>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4 style="text-align: center;">Top Products</h4>
						<div class="beta-products-details">
							<p style="text-align: center;">Tìm thấy {{count($sanpham_khuyenmai)}} san pham</p>							
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($sanpham_khuyenmai as $spkm)
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">			
										<a href="product.html"><img width="200px"; height="200px" src="source/image/product/{{$spkm['image']}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"> {{$spkm['name']}}</p>
										<p class="single-item-price">
											<span class="flash-del">{{$spkm['unit_price']}} đồng</span>
											<!-- <span class="flash-del" >{{ $spkm ['unit_price'] }} đồng</span> -->
											<span class="flash-sale">{{$spkm['promotion_price']}} đồng</span>
										</p>
									</div>
									<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="add-to-cart/{{$new['id']}}"><i class="fa fa-shopping-cart"></i></a>
										
										<a class="beta-btn primary" href="detail/{{ $spkm['id'] }}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>	
					</div>
				</div> 


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection