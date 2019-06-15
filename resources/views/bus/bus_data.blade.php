@foreach ($busData as $dta)
<tr>
    <th scope="row">{{$dta->id}}</th>
    <td>{{$dta->b_regno}}</td>
    <td>{{$dta->v_type}}</td>
    <td>{{$dta->m_type}}</td>
   
    
    <td class="form-css-btn">
        <a  href="/bus/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
    </td>
    <td class="form-css-btn">
        <form class="form-controller" action="/bus/{{$dta->id}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
        </form>
    </td>
    <td class="form-css-btn">
        <a href="/bus/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>                           
    </td>
</tr>
@endforeach


<tr>
<td colspan="8" class="fixed-right">
{!! $busData->links() !!}
</td>
</tr>

