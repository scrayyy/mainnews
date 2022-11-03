@extends('admin.layout.app')
@section('content')
   	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>კატეგორიები - დამატება</h2>
					</div>
				</div>
				<!-- end main title -->

				<!-- form -->
				<div class="col-12">
					<form action="{{ route('category.store') }}" method="post" class="form" enctype="multipart/form-data">
                        @csrf
						<div class="row row--form">

							<div class="col-12 col-md-7 form__content">
								<div class="row row--form">
									<div class="col-12">
										<input type="text" class="form__input" name="name" placeholder="name" required>
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