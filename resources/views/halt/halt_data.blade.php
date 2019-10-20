@foreach ($hltdata as $dta)
<tr>
    <th scope="row">{{$dta->id}}</th>
    <td>{{$dta->name}}</td>
    <td>{{$dta->haddress}}</td>
    <td>{{$dta->lat}}</td>
    <td>{{$dta->lng}}</td>
    <td>{{$dta->description}}</td>
    <td>{{$dta->timetable}}</td>



    @if ((Auth::User()->roleid)==1)
    <td class="form-css-btn">
        <a  href="/halt/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
    </td>
    <td class="form-css-btn">
        <form class="form-controller" action="/halt/{{$dta->id}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
        </form>
    </td>
    @elseif((Auth::User()->roleid)==2)
    @endif
    <td class="form-css-btn">
        <a href="/halt/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>                           
    </td>

    

</tr>
@endforeach


<tr>
    <td colspan="8">
        {!! $hltdata-> links() !!}
    </td>
</tr>

