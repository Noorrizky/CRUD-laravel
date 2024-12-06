@extends('layout')

@section('konten')

    <div class="d-flex text-center">
        <h4 class="text-center">List Siswa</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{route('siswa.tambah')}}">Tambah</a>
        </div>
    </div>

    <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $no => $data)
        <tr>
            <td>{{ $no + 1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_hp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->hobi }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="POST" style="display:inline;" class="delete-form">
                @csrf
                <button type="button" class="btn btn-danger btn-sm delete-button">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
     document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default button behavior

            const form = this.closest('.delete-form'); // Get the closest form
            const title = 'Delete User!';
            const text = "Are you sure you want to delete?";

            Swal.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if confirmed
                }
            });
        });
    });
</script>
@endsection