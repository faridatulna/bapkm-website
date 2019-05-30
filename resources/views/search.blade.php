<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $article)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->url}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>