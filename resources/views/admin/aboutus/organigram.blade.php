@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>

@stop @extends('layouts.app') @section('content')

<div class="container-fluid">
  <h2>Custom Tree</h2>
  <div id="custom-tree"><div class="org-tree"><div class="row"><div class="item col-lg-12 col-md-12 child-width-4" data-width="100"><div class="child root"><div class="parent"><div class="node center-block text-center">
                        <strong>John Doe</strong><br>
                        <em>President</em>
                    </div></div></div><div class="row"><div class="item col-lg-4 col-md-4 child-width-2" data-width="33"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Jane Smith</strong><br>
                        <em>Vice President of Administration</em>
                    </div></div></div><div class="row"><div class="item col-lg-6" data-width="16"><div class="child"><div class="node center-block text-center">
                        <strong>Peter West</strong><br>
                        <em>Director of Finance</em>
                    </div></div></div><div class="item col-lg-6" data-width="16"><div class="child"><div class="node center-block text-center">
                        <strong>Sarah Jones</strong><br>
                        <em>Director of Human Resources</em>
                    </div></div></div></div></div><div class="item col-lg-4 col-md-4 child-width-2" data-width="33"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Richard Easton</strong><br>
                        <em>Vice President of Operations</em>
                    </div></div></div><div class="row"><div class="item col-lg-6" data-width="16"><div class="child"><div class="node center-block text-center">
                        <strong>Amy Thomas</strong><br>
                        <em>Director of Distribution</em>
                    </div></div></div><div class="item col-lg-6 child-width-2" data-width="16"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Greg Li</strong><br>
                        <em>Director of Customer Service</em>
                    </div></div></div><div class="row"><div class="item col-lg-12" data-width="16"><div class="child"><div class="node center-block text-center">
                        <strong>Laronda Phillips</strong><br>
                        <em>Technical Support Manager</em>
                    </div></div></div></div></div></div></div><div class="item col-lg-4 col-md-4 child-width-1" data-width="33"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Alice Ozaltin</strong><br>
                        <em>Vice President of Merchandising</em>
                    </div></div></div><div class="row"><div class="item col-lg-12 child-width-1" data-width="8"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Zach Kwon</strong><br>
                        <em>Director of Purchasing</em>
                    </div></div></div><div class="row"><div class="item col-lg-12" data-width="8"><div class="child"><div class="node center-block text-center">
                        <strong>Jonathan Branham</strong><br>
                        <em>Internal Purchasing Manager</em>
                    </div></div></div></div></div><div class="item col-lg-12" data-width="8"><div class="child"><div class="node center-block text-center">
                        <strong>Elizabeth Norman</strong><br>
                        <em>Director of Appliances</em>
                    </div></div></div><div class="item col-lg-12 child-width-1" data-width="8"><div class="child"><div class="parent"><div class="node center-block text-center">
                        <strong>Peter Stevens</strong><br>
                        <em>Director of Clothing</em>
                    </div></div></div><div class="row"><div class="item col-lg-12" data-width="4"><div class="child"><div class="node center-block text-center">
                        <strong>Rebecca Hammond</strong><br>
                        <em>Womens Clothing Planner</em>
                    </div></div></div><div class="item col-lg-12" data-width="4"><div class="child"><div class="node center-block text-center">
                        <strong>Alex Kaplan</strong><br>
                        <em>Mens Clothing Planner</em>
                    </div></div></div></div></div><div class="item col-lg-12" data-width="8"><div class="child"><div class="node center-block text-center">
                        <strong>Mark Hughes</strong><br>
                        <em>Product Information Coordinator</em>
                    </div></div></div></div></div></div></div></div></div></div>
</div>


@endsection