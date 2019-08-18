@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $(".users").select2();
    });
</script>

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $(".uploads").change(readURL)
        $("#f").submit(function() {
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })
</script>


@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row mt-10">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card"> 
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Feedback</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = ($customers->currentpage()-1)* $customers->perpage() + 1;?>
                                @foreach( $customers as $customer )
                                <tr class="table-light">
                                    <td scope="row">{{$i++}}</td>
                                    <td>Username</td>
                                    <td>{{$customer->opinion}}</td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer float-right">
                        @if ($customers->hasPages()) Halaman <strong>{{ $customers->currentPage() }}</strong> dari <strong>{{ $customers->lastPage() }}</strong>.
                        <br/> Menampilkan <strong>{{ ((($customers->currentPage() -1) * $customers->perPage()) + 1) }}</strong> sampai <strong>{{ ((($customers->currentPage() -1) * $customers->perPage()) + $customers->count()) }}</strong> dari <strong>{{ $customers->total() }}</strong> data yang ada.
                        <br/> @endif
                        <br> {{ $customers->fragment('one')->links() }}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Customer Satisfaction</h5>
                    <!-- <div class="card-body"> -->
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="cd">
                                    <!-- <span>Excelent</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                </div>
                                <a href="/admin/customers/5"><span class="badge badge-primary badge-pill">{{ $feedbackRate->where('rating',5)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"> 
                                <div class="cd">
                                    <!-- <span>Good</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span> 
                                </div>
                                <a href="/admin/customers/4"><span class="badge badge-primary badge-pill">{{ $feedbackRate->where('rating',4)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"> 
                                <div class="cd">
                                    <!-- <span>Average</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span> 
                                </div>
                                <a href="/admin/customers/3"><span class="badge badge-primary badge-pill">{{ $feedbackRate->where('rating',3)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                
                                <div class="cd">
                                    <!-- <span>Poor</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                </div>
                                <a href="/admin/customers/2"><span class="badge badge-primary badge-pill">{{ $feedbackRate->where('rating',2)->count() }}</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="cd">
                                    <!-- <span>Terrible</span> -->
                                    <span class="star fa fa-star checked"></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                    <span class="star fa fa-star "></span>
                                </div>
                                <a href="/admin/customers/1"><span class="badge badge-primary badge-pill">{{ $feedbackRate->where('rating',1)->count() }}</span></a>
                            </li>
                        </ul>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection