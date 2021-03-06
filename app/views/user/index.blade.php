@extends('layouts.master')

@section('head')
	@parent
		<title>Ticket list | Cashbox</title>

@stop

@section('content')
		@parent

		<div class="container-liquid">
				<div class="row">

					<div class="col-xs-12">
							<div class="sec-box">
									<a class="closethis">Close</a>
									<header>
											<h2 class="heading">Condensed Table</h2>
									</header>


									<?php
											$errorShow = '';
											if ($errors->has()) {

														foreach ($errors->all() as $error){
																$errorShow .= $error .',';
														}
												$errorShow = rtrim($errorShow,',');
											}
									?>
									@if(!empty($errorShow))
											<a class="togglethis">Toggle</a>
											<div class="alert alert-danger">
											<strong>Error!</strong>
														{{ $errorShow }}
											</div>
									@endif


									<div class="contents">
											<a class="togglethis">Toggle</a>
											<section>
													<table class="table table-condensed">
															<thead>
																	<tr>
																			<th>#</th>
																			<th>Book Name</th>
																			<th>Writter Name</th>
																			<th> Action </th>
																	</tr>
															</thead>
															<tbody>
																	@foreach ( $books as $book )
																	<tr id="name_<?php echo $book->id;?>">
																			<td>{{ $count++ }}</td>
																			<td>{{ $book->book_name }}</td>
																			<td>{{ $book->writer_name }}</td>
																			<td><a href="/edit-books/{{ $book->id }}" class="btn btn-info">Edit</a> <button type="button" class="btn btn-danger" onclick="delete();" id="delete_book" />Delete</button></td>
																	</tr>
																	@endforeach
															</tbody>
													</table>
													<center>{{ $books->links() }}</center>
											</section>
									</div>
							</div>
					</div>


				</div>
				<!-- Row End -->
		</div>

		@stop
@stop
