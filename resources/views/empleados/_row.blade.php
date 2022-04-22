<tr>
    <td>{{ $valo['name'] }}</td>
    <td>{{ $valo['email'] }}</td>
    <th scope="row">
        {{ $valo['position'] }}
    </th>
    <td>{{ $valo['salary'] }}</td>
    <td class="text-right">
            <form action="" method="POST">
                <a href="{{ route('empleados.show', $valo['position']) }}" class="btn btn-outline-secondary btn-sm"><span class="oi oi-eye">ver</span></a>
                {{-- <a href="{{ route('users.edit', $valo) }}" class="btn btn-outline-secondary btn-sm"><span class="oi oi-pencil"></span></a>
                <button type="submit" class="btn btn-outline-danger btn-sm"><span class="oi oi-trash"></span></button> --}}
            </form>
    </td>
    