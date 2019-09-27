
@if ((Auth::User()->roleid)==1)

        @foreach ($userData as $dta)
        <tr>
            <th scope="row">{{$dta->id}}</th>
            <td>
                
                @if (($dta->roleid)==1)
                Admin
                @elseif(($dta->roleid)==2)
                User
                @endif
                    
            </td>
            <td>{{$dta->name}}</td>
            <td>{{$dta->email}}</td>

            
            <td class="form-css-btn">
                <a  href="/profile/{{$dta->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
            </td>
            <td class="form-css-btn">
                <form class="form-controller" action="/profile/{{$dta->id}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </td>
            <td class="form-css-btn">
                <a href="/profile/{{$dta->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>                           
            </td>
        </tr>
        @endforeach


        <tr>
        <td colspan="8" class="fixed-right">
        {!! $userData->links() !!}
        </td>
        </tr>




@elseif((Auth::User()->roleid)==2)
<tr>
        <th scope="row">{{auth::User()->id}}</th>
        <td>
            User                
        </td>
        <td>{{auth::User()->name}}</td>
        <td>{{auth::User()->email}}</td>

        
        <td class="form-css-btn">
            <a  href="/profile/{{auth::User()->id}}/edit" class="btn btn-outline-info form-controller"><i class="fas fa-edit"></i> Edit</a>
        </td>
        <td class="form-css-btn">
            <form class="form-controller" action="/profile/{{auth::User()->id}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-outline-danger form-controller"><i class="fa fa-trash"></i> Delete</button>
            </form>
        </td>
        <td class="form-css-btn">
            <a href="/profile/{{auth::User()->id}}" class="btn btn-outline-info"><i class=" fa fa-plus"></i> Read More</a>                           
        </td>
    </tr>
@endif

