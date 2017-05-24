{{-- regular object attribute --}}
<td>{{ trim(preg_replace('/(id|at|\[\])$/i', '', ucfirst(str_replace('_', ' ', $entry->{$column['name']})))) }}</td>
