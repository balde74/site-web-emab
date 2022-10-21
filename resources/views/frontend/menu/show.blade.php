@extends('layouts/main-layout-frontend')
@section('title')
    menu
@endsection

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">
                @if ($menu->type_menu->id == 1)
                    Nos filiales
                @endif  
                @if ($menu->type_menu->id == 2)
                    Groupe
                 @endif   
            </span>
            <h1 class="text-capitalize mb-4 text-lg">{{$menu->titre}}</h1>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="index.html" class="text-white">Accueil</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item text-white-50">
                @if ($menu->type_menu->id == 1)
                    Nos filiales
                @endif  
                @if ($menu->type_menu->id == 2)
                    Groupe
                 @endif    
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section blog-wrap bg-gray">
	<div class="container">
		<div class="row ">
			<div class="col-md-8">
				<div class="row ">
					<div class="col-md-12">
						<div class="single-blog-item">
							{{-- <img loading="lazy" src="{{asset('documents/'.$menu->image)}}" alt="blog" class="img-fluid rounded" style="width: 100%"> --}}

							<div class="blog-item-content bg-white p-2">
								

								{{-- <h2 class="mt-2 mb-4">{{$menu->titre}}</h2>
								<p class="lead mb-4 text-justify ">{{$menu->description}}</p> --}}

                                @foreach ($menu->section_menus as $section)
							        <img loading="lazy" src="{{asset('documents/'.$section->section_image)}}" alt="image de section" class="img-fluid rounded" style="width: 100%">
								    <p class="text-justify " >{!!$section->section!!}</p>
                                    
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 mt-5 mt-md-0">
				<div class="sidebar-wrap">


					<div class="sidebar-widget card border-0 mb-3">
						<img loading="lazy" src="{{asset('documents/'.$menu->image)}}" alt="blog-author" class="img-fluid">
						<div class="card-body p-4 text-center">
							<h5 class="mb-0 mt-4">{{$menu->titre}}</h5>
							<p class="text-justify">{{$menu->description}}</p>

							<ul class="list-inline author-socials">
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-twitter text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-pinterest text-muted"></i></a>
								</li>
								<li class="list-inline-item mr-3">
									<a href="#"><i class="fab fa-behance text-muted"></i></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Posts</h5>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="images/blog/bt-3.jpg" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Thoughtful living in los Angeles</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media border-bottom py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="images/blog/bt-2.jpg" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Vivamus molestie gravida turpis.</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>

						<div class="media py-3">
							<a href="#"><img loading="lazy" class="mr-4" src="images/blog/bt-1.jpg" alt="blog"></a>
							<div class="media-body">
								<h6 class="my-2"><a href="#">Fusce lobortis lorem at ipsum semper sagittis</a></h6>
								<span class="text-sm text-muted">03 Mar 2018</span>
							</div>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section About End -->



@endsection