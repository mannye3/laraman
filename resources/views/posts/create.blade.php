@extends('layouts.app')


@section('content')

<h1>Create Post</h1>


<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="modern-title"><h3>Please fill the form below, We will response soon.</h3> </div>
                            <form method="POST"  action="{{ action('PostsController@store') }}">
                            <div class="form-group">
                                <label for="emtitleail">Tile:</label>
                                <input required="" type="text" class="form-control" name="title">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Body:</label>
                                <textarea required="" class="form-control" name="body" ></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Submit</button>
                            </form> 
                            </div>									
						</div>
						
					</div>
				</div>				
			</div>
		</section>


		
       
	

@endsection