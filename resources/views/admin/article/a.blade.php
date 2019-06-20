<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>bootstrap4</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
    <script>
        var edit = function() {
            $('.click2edit').summernote({
                focus: true
            });
        };

        var save = function() {
            var markup = $('.click2edit').summernote('code');
            $('.click2edit').summernote('destroy');
        };
    </script>
</head>

<body>

    <button class="btn-primary btn fa fa-plus" data-toggle="modal" data-target="#add"><i class="fa fa-add"></i> Tambah</button>
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add">Form Tambah</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
                <form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
                        <button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
                        <div class="click2edit">click2edit</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

            </div>
            </form>
        </div>
    </div>
    

</body>

</html>