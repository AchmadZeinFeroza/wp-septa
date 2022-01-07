@extends('admin.template.master')
@section('header')
    <link href="{{asset('admin/css/bootstrap-tab.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<h3 class="mb-5">Pesan</h3>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Umum</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Furniture</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Rumah</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <ul class="list-group">
            @foreach ($data as $item)
                @if ($item->kategori === "umum")
                <a href="{{route('pesan.show' , $item->id)}}">
                    <li class="list-group-item list-group-item-action list-group-item-light">{{$item->nama}}<span class="badge float-right <?php echo ($item->status_id == 1) ? 'badge-info' : 'badge-success'; ?>">{{$item->status->status}}</span></li>
                </a>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @foreach ($data as $item)
            @if ($item->kategori === "furniture")
            <a href="{{route('pesan.show' , $item->id)}}">
                <li class="list-group-item list-group-item-action list-group-item-light">{{$item->nama}}<span class="badge float-right <?php echo ($item->status_id == 1) ? 'badge-info' : 'badge-success'; ?>">{{$item->status->status}}</span></li>
            </a>
            @endif
        @endforeach
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        @foreach ($data as $item)
            @if ($item->kategori === "rumah")
            <a href="{{route('pesan.show' , $item->id)}}">
                <li class="list-group-item list-group-item-action list-group-item-light">{{$item->nama}}<span class="badge float-right <?php echo ($item->status_id == 1) ? 'badge-info' : 'badge-success'; ?>">{{$item->status->status}}</span></li>
            </a>
            @endif
        @endforeach
    </div>
</div>
@endsection