@extends('layout.layout')

@section('title', 'Admin panel')

@section('content')
<section style="padding-top: 120px;" class="admin-panel">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 mb-4">
            </div>

            <div class="col-lg-12">
                <h2 class="mb-2">Articles</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Created At</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <th scope="row">{{ $article->id }}</th>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->author()->username }}</td>
                                <td>{{ $article->updated_at->format('d.m.Y (h:i:s)') }}</td>
                                <td>{{ $article->created_at->format('d.m.Y (h:i:s)') }}</td>
                                <td>
                                    <div class='table-action'>
                                        <button class="btn btn-success w-100 mb-2 btn-show">Show action</button>

                                        <ul class="d-none flex-column">
                                            <li class="mb-2">
                                                <a class="btn btn-warning w-100" href="">Edit</a>
                                            </li>
                                            <li>
                                                <a class="btn btn-danger w-100" href="{{ route('admin.delete',  $article->id) }}">Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="/assets/js/admin.js"></script>
@endsection