<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Member</title>
    <style>
        body { font-family: sans-serif; margin: 40px; max-width: 500px; }
        .detail-item { margin-top: 12px; }
        .label { font-weight: bold; }
        .btn { display: inline-block; margin-top: 20px; padding: 8px 16px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>Detail Member</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar member</a></p>

    <div class="detail-item">
        <div class="label">Nama:</div>
        <div>{{ $member->nama }}</div>
    </div>

    <div class="detail-item">
        <div class="label">NIM:</div>
        <div>{{ $member->nim }}</div>
    </div>

    <div class="detail-item">
        <div class="label">Email:</div>
        <div>{{ $member->email }}</div>
    </div>

    <div class="detail-item">
        <div class="label">Nomor Telepon:</div>
        <div>{{ $member->nomor_telepon }}</div>
    </div>

    <div class="detail-item">
        <div class="label">Alamat:</div>
        <div>{{ $member->alamat }}</div>
    </div>

    <div class="detail-item">
        <div class="label">Status:</div>
        <div>{{ ucfirst($member->status) }}</div>
    </div>

    <a href="{{ route('members.edit', $member->id) }}" class="btn">Edit Member</a>
</body>
</html>