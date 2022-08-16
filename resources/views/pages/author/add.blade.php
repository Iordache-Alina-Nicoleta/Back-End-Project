
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
           Add a new Author
        </h2>
    </x-slot>

    <div class = "row">
        <div class = "col-6 offset-3">
            <div class = "card">
                <div class="card-header text-center">
                     <h2>Add a new Author</h2>
                </div>
                
                <div class = "card-body">
                    <form method ="POST" action = "{{route ("store-author")}}">
                        @CSRF
                        <div class="mb-3">
                            <label for="Author_Name" class="form-label">Author Name</label>
                            <input type="text" name = "Author_Name" class="form-control" id="Author_Name" aria-describedby="AuthorNameHelp">
                                <div id="AuthorNameHelp" class="form-text">Name of the Author</div>
                        </div>

                        <div class="mb-3">
                            <label for="Status" class="form-label">Status</label>
                            <select id="Status" name="Status" class="form-select">
                                @foreach($statuss as $value =>$key )
                                    <option value="{{strtolower($value)}}">{{strtolower($value)}}</option>
                                @endforeach
                            </select>
                                <div id="StatusHelp" class="form-text">Issue Book - Status</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name = "description" class="form-control" id="description"  rows="4" aria-describedby="descriptionHelp"></textarea>
                                <div id="descriptionHelp" class="form-text">Description of the book author</div>
                        </div>

                        <div class="mb-3">
                            <label for="Created_On" class="form-label">Created On</label>
                            <input name = "Created_On" type="date" class="form-control" id="Created_On" aria-describedby="CreatedOnHelp">
                                <div id="CreatedOnHelp" class="form-text">Author - Created On</div>
                        </div>

                        <div class="mb-3">
                            <label for="Updated_On" class="form-label">Updated On</label>
                            <input name = "Updated_On" type="date" class="form-control" id="Updated_On" aria-describedby="UpdatedOnHelp">
                                <div id="UpdatedOnHelp" class="form-text">Author - Updated On</div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type = "submit" class = "btn btn-success text-white ">Add Author</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>