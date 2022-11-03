@extends('admin.layout.app')
@section('content')
   	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>კატეგორიები - რედაქტირება</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{ route('category.update' , $cat_info->id) }}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
						<div class="row row--form">
							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12">
										<input type="text" value="{{ $cat_info->name }}" class="form__input" name="name" placeholder="title" required>
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