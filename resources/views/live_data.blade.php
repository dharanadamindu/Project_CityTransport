
@foreach($empdta as $row)
<tr>
 <th>{{ $row->id}}</th>
 <td>{{ $row->post_title }}</td>
 <td>{{ $row->post_description }}</td>
</tr>
@endforeach
<tr>
 <td colspan="3" align="center">
  {!! $empdta->links() !!}
 </td>
</tr>
