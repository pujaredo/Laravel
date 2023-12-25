@include('mst-pangkat.search', ['url' => 'mst-pangkat', 'link' => 'mst-pangkat'])
{!! Form::open(['method' => 'GET', 'url' => $url, 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
<div class="input-group custom-search-form">
    <a href="{{ url($link.'/create') }}" class="btn btn-primary btn-sm">
        <span class="glyphicon glyphicon-plus"></span> Tambah
    </a>
    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>
{!! Form::close() !!}
