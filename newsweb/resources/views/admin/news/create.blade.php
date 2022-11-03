@extends('admin.layout.app')
@section('content')
   	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>სიახლეები - დამატება</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{ route('news.store') }}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
						<div class="row row--form">
							<div class="col-12 col-md-5 form__cover">
								<div class="row row--form">
									<div class="col-12 col-sm-2 col-md-12">
										<div class="form__img">
											<label for="form__img-upload">Upload cover</label>
											<input id="form__img-upload" name="image" type="file" required>
											<img id="form__img" src="#" alt=" ">
										</div>
									</div>
								</div>
							</div>

							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12">
										<input type="text" class="form__input" name="title" placeholder="title" required>
									</div>

									<div class="col-12">
										<textarea id="text" name="desc" class="form__textarea" placeholder="desc" required></textarea>
									</div>

									<div class="col-12 col-sm-6 col-lg-3">
										<select class="js-example-basic-single" name="quality" id="quality">

											@foreach ($cats as $cat)
											<option value="{{ $cat->id }}">{{ $cat->name }}</option>
											@endforeach
										</select>
									</div>
	
								</div>
							</div>


                            <div class="col-12">
                                <button type="submit" class="form__btn">publish</button>
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