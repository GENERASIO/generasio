{{-- @php
    dd($data, $request)
@endphp --}}
<table>
    <thead>
        <tr>
            <th colspan="15">Interaksi User</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Page</th>
            <th>Device</th>
            <th>OS</th>
            <th>Browser</th>
            <th>IP</th>
            <th>City</th>
            <th>Region</th>
            <th>Country</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>ORG</th>
            <th>Timezone</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data['visitor'] as $adsUser)
            <tr>
                <td>{{ $loop->iteration ?? '-'}}</td>
                <td>{{ $adsUser->page ?? '-'}}</td>
                <td>{{ $adsUser->device ?? '-'}}</td>
                <td>{{ $adsUser->os ?? '-'}}</td>
                <td>{{ $adsUser->browser ?? '-'}}</td>
                <td>{{ $adsUser->ip ?? '-'}}</td>
                <td>{{ $adsUser->city ?? '-'}}</td>
                <td>{{ $adsUser->region ?? '-'}}</td>
                <td>{{ $adsUser->country ?? '-'}}</td>
                <td>{{ $adsUser->latitude ?? '-'}}</td>
                <td>{{ $adsUser->longitude ?? '-'}}</td>
                <td>{{ $adsUser->org ?? '-'}}</td>
                <td>{{ $adsUser->timezone ?? '-'}}</td>
                <td>{{ $adsUser->created_at ?? '-'}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th colspan="3">Perangkat User</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Perangkat - OS</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data['deviceCount'] as $deviceCount)
            <tr>
                <td>{{ $loop->iteration ?? '-'}}</td>
                <td>{{ $deviceCount['device'] ?? '-'}}</td>
                <td>{{ $deviceCount['count'] ?? '-'}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th colspan="3">Browser User</th>
        </tr>
        <tr>
            <th>No</th>
            <th>Browser</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data['browserCount'] as $browserCount)
            <tr>
                <td>{{ $loop->iteration ?? '-'}}</td>
                <td>{{ $browserCount['browser'] ?? '-'}}</td>
                <td>{{ $browserCount['count'] ?? '-'}}</td>
            </tr>
        @endforeach
    </tbody>
</table>