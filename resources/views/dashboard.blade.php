<x-app-layout>
    <x-slot name="header">
        <br><br>
    </x-slot>
<div class="container-fluid my-3 py-3 px-3 mx-3">
	<div class="row">
		<div class="col-xl-4 col-md-3">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$total_issues}}</h1>
					<h5 class="text-center">Total Book Issue</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$returned_book}} </h1>
					<h5 class="text-center">Total Book Returned</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$not_returned_book}} </h1>
					<h5 class="text-center">Total Book Not Return</h5>
				</div>
			</div>
		</div>
		
		<hr style="color:#778899">
		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$total_books}}</h1>
					<h5 class="text-center">Total Book</h5>
				</div>
			</div>
		</div>
		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$total_authors}}</h1>
					<h5 class="text-center">Total Author</h5>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$total_categories}}</h1>
					<h5 class="text-center">Total Category</h5>
				</div>
			</div>
		</div>
		<hr style="color:#778899">
		<div class="col-xl-4 col-md-6">
			<div class="card text-white mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<div class="card-body">
					<h1 class="text-center">{{$total_locations}}</h1>
					<h5 class="text-center">Total Location Rack</h5>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6">
			<img src ="https://www.freeiconspng.com/uploads/open-book-png-32.png" style="width:310px; height:110px;">
			
		</div>

		<div class="col-xl-4 col-md-6">
			<div class="card  mb-4" style="background:url(https://t3.ftcdn.net/jpg/00/93/57/78/360_F_93577816_iDsgcm2ryYkDmRCkcPhMNrKH5muJBEpj.jpg)">
				<a href = "https://laravel.com/" target=_blank>
					<img src = "https://asamamun.files.wordpress.com/2018/09/laravel-logo.png" style="width:320px; height:115px;">
				</a>
			</div>
		</div>
	</div>
	
</div>

</x-app-layout>