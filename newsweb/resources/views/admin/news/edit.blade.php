@extends('admin.layout.app')
@section('content')
   	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>სიახლეები - რედაქტირება</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{ route('news.update' , $news_info->id) }}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
						<div class="row row--form">
							<div class="col-12 col-md-5 form__cover">
								<div class="row row--form">
									<div class="col-12 col-sm-2 col-md-12">
										<div class="form__img">
											<label for="form__img-upload">Upload cover</label>
											<input id="form__img-upload" name="image" type="file">
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12">
										<input type="text" value="{{ $news_info->title }}" class="form__input" name="title" placeholder="title">
									</div>

									<div class="col-12">
										<textarea id="text" name="desc" class="form__textarea" placeholder="desc">{{ $news_info->desc_ka }}</textarea>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<select class="js-example-basic-single" name="quality" id="quality">

											@foreach ($cats as $cat)
											<option value="{{ $cat->id }}"{{ $cat->id == $news_info->cat_id ? 'selected' : '' }}>{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>

								</div>
							</div>


                            <div class="col-12">
                                <button type="submit" class="form__btn">რედაქტირება</button>
                            </div>
						</div>
					</form>
				</div>
				<!-- end form -->
			</div>
		</div>
	</main>
	<!-- end main content --> 
@endsection