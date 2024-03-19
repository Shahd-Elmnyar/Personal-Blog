@extends('admin.dashboard.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Article</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">article</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('admin.inc.message')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All articles</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add-modal">
                                    Add new
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>content</th>
                                        <th>img</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($articles as $article)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->content}}</td>
                                        <td>
                                            <img src= "{{asset("images/$article->img" )}}" height="50px" alt="">
                                        </td>
                                        <td>
                                            <button type="button" href="{{url("dashboard/articles/update")}}" class="btn btn-sm btn-info edit-btn" data-id="{{$article->id}}" data-title="{{$article->title}}" data-content="{{$article->content}}" data-toggle="modal" data-target="#edit-modal">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <a href="{{url("dashboard/articles/delete/$article->id")}}" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex my-3 justify-content-center">
                                {{$articles->links()}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="add-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            @include('admin.inc.errors')
                <form method="POST" action="{{url("dashboard/articles/store")}}" id="add-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter the title">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>content</label>
                                <input type="text" name="content" class="form-control" placeholder="Enter the content">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="img">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                </form>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" form="add-form" class="btn btn-primary">submit</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="edit-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @include('admin.inc.errors')
                <form method="POST" action="{{url("dashboard/articles/update")}}" id="edit-form" >
                    @csrf
                    <input type="hidden" name="id" id="edit-form-id">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>title</label>
                                <input type="text" name="title" class="form-control" id="edit-form-title">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>content</label>
                                <input type="text" name="content" class="form-control" id="edit-form-content">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" form="edit-form" class="btn btn-primary">submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('.edit-btn').click(function() {
        let id = $(this).attr('data-id');
        let title = $(this).attr('data-title');
        let content = $(this).attr('data-content');
        let img = $(this).attr('data-img');
        console.log(title, content);
        $('#edit-form-id').val(id)
        $('#edit-form-title').val(title)
        $('#edit-form-content').val(content)
    })
</script>
@endsection
