@extends('admin.layout.app')
@section('content')
 	<!-- main content -->
     <main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>სიახლეები - სია</h2>
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($news as $new)
                                <tr>
									<td>
										<div class="main__table-text">{{ $new->id }}</div>
									</td>
									<td>
										<div class="main__table-text"><a href="#">{{ $new->title }}</a></div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="{{ route('news.edit' , $new->id) }}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>

											<form action="{{ route('news.destroy' , $new->id) }}" method="POST">
											@csrf
											@method('DELETE')
											<input type="submit" value="DELETE" class="bton btn-danger" onclick="return confirm('ნამდვილად გსურთ წაშლა?')">
											
											</form>
										</div>
									</td>
								</tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</main>
	<!-- end main content -->   
@endsection