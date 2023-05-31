@extends('master')
@section('content')

	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<div class="bannercontainer" >
				<div class="banner" >
						<ul>
						@foreach ( $slide as $slider )
							<!-- THE FIRST SLIDE -->
							<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
							<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
								<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="source/image/slide/{{$slider->image}}" data-src="source/image/slide/{{$slider->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$slider->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
								</div>
							</div>

							</li>
						@endforeach
						</ul>
				</div>
			</div>
			<div class="tp-bannertimer"></div>
		</div>
	</div>		<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach ( $new_product as $new )
									<div class="col-sm-3">
									<div class="single-item">
										@if ($new->promition_price!=0)
											<div class="ribbon-wraper"><div class="ribbon sale">I love you</div></div>
										@endif
										<div class="single-item-header">			
											<a href="product.html"><img src="source/image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $new ->name }}</p>
											<p class="single-item-price">
												@if($new->promotion_price !=0)
												<span class="flash-sale">{{ $new ->init_price }} đồng</span>
												@else
												<span class="flash-del" >{{ $new ->init_price }} đồng</span>
												<span class="flash-sale">{{ $new ->promotion_price }} đồng</span>
												@endif
											</p>
										</div>
										<div cflass="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Top Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sanpham_khuyenmai as $spkm)	
									<div class="col-sm-3">				
										<div class="single-item">			
											<div class="single-item-header">		
												<a href="product.html"><img src="source/image/product/{{$spkm->image}}" alt=""></a>	
											</div>		
											<div class="single-item-body">		
												<p class="single-item-title">{{$spkm->name}}</p>	
												<p class="single-item-price" style="font-size: 18px">	
													<span class="flash-del">{{number_format($spkm->unit_price)}}đồng</span>
													<span class="flash-sale">{{number_format($spkm->promotion_price)}}đồng</span>
													
												</p>	
											</div>		
											<div class="single-item-caption">		
												<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>	
												<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>	
												<div class="clearfix"></div>	
											</div>		
										</div>			
									</div>				
								@endforeach					
							</div>
							<div class="space40">&nbsp;</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
@php $gio = gmdate("H", time() + 3600*7); @endphp
@if ($gio < 12)
   Chào buổi sáng
@elseif ($gio < 18)
	Chào buổi chiều
@else
	Chào buổi tối 
@endif

@php $dayOfWeek = date('N'); @endphp
@switch($dayOfWeek)
    @case(0)
        Today is Sunday.
        @break

    @case(1)
        Today is Monday.
        @break

    @case(2)
        Today is Tuesday.
        @break

    @case(3)
        Today is Wednesday.
        @break

    @case(4)
        Today is Thursday.
        @break

    @case(5)
        Today is Friday.
        @break

    @case(6)
        Today is Saturday.
        @break

    @default
        Invalid day of week.
@endswitch

