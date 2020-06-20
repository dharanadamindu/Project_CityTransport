@foreach ($empData as $dta)
<tr>
    <th scope="row">{{$dta->id}}</th>
    <td>{{$dta->name}}</td>
    <td>{{$dta->address}}</td>
    <td>{{$dta->role}}</td>
{{--    <td>{{$dta->b_regno}}</td>--}}
    <td>{{$dta->nic}}</td>
    <td>{{$dta->gender}}</td>
    <td>{{$dta->contactno}}</td>
    <td>{{$dta->bdate}}</td>

    @if ((Auth::User()->roleid)==1)
    <td class="form-css-btn">
        <a  href="/employee/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
    </td>
    <td class="form-css-btn">
        <form class="form-controller" action="/employee/{{$dta->id}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
        </form>
    </td>
    <td class="form-css-btn">
        <a href="/employee/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>
    </td>

    @elseif((Auth::User()->roleid)==2)
    @endif


</tr>
@endforeach


<tr>
<td colspan="8" class="fixed-right">
{!! $empData->links() !!}
</td>
</tr>

