@extends('layout.body')
@section('title', 'Home')

@section('konten')
    <div class="row no-gutters">
        <div class="col-12">
            <h1 style="margin-left: 240px;  margin-top: 120px;">Popular</h1>
            <div style="display: flex; flex-direction: column; align-items: center;">
                <div style="display: flex; flex-direction: column; gap: 20px; max-width: 1000px; margin: 40px auto 40px auto;">
                    @foreach ($details as $detail)
                        <div style="display: flex; background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            <div style="flex: 1; background-color: #004aad; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ asset('images/multimedia.jpg') }}" alt="Interactive Multimedia" style="width: 100%; height: 100%;">
                            </div>
                            <div style="flex: 2; padding: 15px; display: flex; flex-direction: column;">
                                <h2 style="margin: 0; font-size: 18px; color: #333;">{{ $detail->materi }}</h2>
                                <p style="font-size: 12px; color: #666; margin: 5px 0;">{{ $detail->tanggalPost }} | By {{ $detail->writers->namaPenulis }}</p>
                                <p style="font-size: 14px; color: #444; margin: 10px 0; flex: 1;">{{ $detail->deskripsi }}</p>
                                <a href="{{ route('materi.detail', ['categoryId' => $detail->categories->id, 'detailId' => $detail->id]) }}" style="align-self: flex-end; padding: 8px 50px; background-color: #000; color: #fff; text-decoration: none; border-radius: 50px; font-size: 12px;">read more...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
    
                <div>
                    {{ $details->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection