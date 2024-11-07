@extends('layout.body')
@section('title', $details->materi)

@section('konten')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h2 style="margin-top: 120px; margin-bottom: 20px;">{{ $details->materi }}</h2>

        <div style="display: flex; flex-direction: column; gap: 20px; max-width: 1400px; margin: 40px auto 40px auto;">
            <div style="flex: 1; background-color: #004aad; display: flex; align-items: center; justify-content: center;">
                <img src="{{ asset('images/HCI.png') }}" alt="HCI" style="width: 100%; height: 100%;">
            </div>
            <div style="display: flex; background-color: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                
                <div style="flex: 2; padding: 15px; display: flex; flex-direction: column;">
                    <p style="font-size: 12px; color: #666; margin: 5px 0;">{{ $details->tanggalPost }} | By {{ $details->writers->namaPenulis }}</p>
                    <p style="font-size: 14px; color: #444; margin: 10px 0; flex: 1;">{{ $details->konten }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection