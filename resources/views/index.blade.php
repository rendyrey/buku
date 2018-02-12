@foreach ($buku as $value)
{{$value}}
<br>
@endforeach
<br>
{{-- {{$penerbit}} --}}
penerbit<br>
@foreach ($penerbit as $key => $value)
  {{$value->penerbit->nama_penerbit}}
  {{$value->penulis->nama_penulis}}
  {{-- {{$value->nama_penerbit}} --}}
<br>
@endforeach
<br>
<br>
@foreach ($buku_satu as $key => $value)
  //isi buku
  {{$value}}
  <br>
  //isi Penerbit
  {{$value->penerbit}}
  <br>
  //isi penulis
  {{$value->penulis}}
  <br>
  <br>
  {{-- {{$value->penerbit->nama_penerbit}} --}}
  {{-- {{$value->penulis->nama_penulis}} --}}
  {{-- {{$penerbit}} --}}
@endforeach
{{-- {{$buku_satu}} --}}
{{-- {{$buku_satu->penerbit->nama_penerbit}} --}}
