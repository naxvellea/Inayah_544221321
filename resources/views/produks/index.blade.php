@extends('menus.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right" style="margin-bottom: 10px; ">
                <a class="btn btn-success"style="background-color:#E0AED0;" href="{{ route('produks.create') }}"> tambah </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr style="background-color: #FFE5E5;">
            <th>No</th>
            <th>nama</th>
            <th>kategori</th>
            <th>harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($produks as $produk)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $produk->nama }}</td>
            <td>{{ $produk->kategori }}</td>
            <td>{{ $produk->harga_jual }}</td>
            <td>
                <form action="{{ route('produks.destroy',$produk->id) }}" method="POST">

                    <a class="btn btn-primary"style="background-color:#AC87C5;" href="{{ route('produks.edit',$produk->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger"style="backround-color:#7FC7D9;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $produks->links() !!}

@endsection

