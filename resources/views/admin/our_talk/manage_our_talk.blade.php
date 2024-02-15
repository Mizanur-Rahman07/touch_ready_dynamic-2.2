@extends('admin.master')
@section('title')
ourTalk List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">All ourTalkment List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add ourTalk" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> ourTalkment Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-description">
                                                </p>
                                                <form action="{{ route ('new.ourtalk')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Content</label>
                                                        <input type="text" class="form-control" name="our_talk_content"
                                                            id="exampleInputUsername1" placeholder="Enter Content Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Video</label>
                                                        <input type="text" class="form-control" name="our_talk_content"
                                                            id="exampleInputUsername1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Our Talk URL </label>
                                                        <input type="text" class="form-control" name="slug"
                                                            id="exampleInputEmail1" placeholder="Enter ourTalk URL">
                                                    </div>
                                                    <div class="form-check form-check-flat form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button class="btn btn-light">Cancel</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> Video</th>
                            <th> Content</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($ourTalks as $ourTalk)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>
                                <iframe class="ourTalk_video" style="height: 80px; width: 80px;" src="{{ asset($ourTalk->our_talk_video) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </td>
                            <td>{{ $ourTalk->our_talk_content}}</td>
                            <td>{{ $ourTalk->slug}}</td>
                            <td>{{ $ourTalk->status==1? 'Active':'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($ourTalk->status==1)
                                <a href=" {{route ('ourtalk.status',['id'=>$ourTalk->id])}}"
                                    class="btn btn-primary mr-1" data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route ('ourtalk.status',['id'=>$ourTalk->id])}}"
                                    class="btn btn-warning mr-1" data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route ('edit.ourtalk',['id'=>$ourTalk->id])}}"
                                    class="btn btn-success mr-1 " data-bs-toggle="tooltip" title="Edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.ourtalk')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="ourTalk_id" value="{{$ourTalk->id}}">
                                    <button type="submit" class="btn btn-danger" title="Delete"
                                        onclick="return confirm('Are You Sure delete this!!')" data-bs-toggle="tooltip"
                                        title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection