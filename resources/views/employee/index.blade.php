@extends('layouts.app')

@section('content')



   {{-- <h3 align="center">{{count($feedData)}}</h3><br /> --}}
   <div class="row">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
     <div class="form-group">
     </div>
    </div>
   </div>

   @if ((Auth::User()->roleid)==1)
   <a href="/employee/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
   @elseif((Auth::User()->roleid)==2)
   @endif

   <div class="table-responsive">
    <table class="table table table-hover table-dark">
     <thead>
    <tr>
        <th colspan="5"><input type="text" name="serach" id="serach" placeholder="Search Here" class="form-control" /></th>
        <th colspan="7"></th>
    </tr>
      <tr>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">ID</th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Name </th>
       <th>Address </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Role </th>
{{--       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">bus Registration no </th>--}}
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">NIC </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Gender </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Contact Number</th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Birth Day</th>
       <th width=""></th>
       <th colspan="2">
           {{-- <input type="text" name="serach" id="serach" placeholder="Search Here" class="form-control" /> --}}
        </th>
      </tr>
     </thead>
     {{-- <thead>
     <tr>
            <td colspan="8">
            {!! $empData->links() !!}
            </td>
    </tr>
    </thead> --}}
     <tbody>
      @include('employee/employee_data')
     </tbody>
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
   </div>
   <br>
   <br>
   <br>

<div class="fixed-bottom_">
    @include('layouts.footer')
</div>
<script>
    $(document).ready(function(){function a(a,e,n,t){$.ajax({url:"/employee/employee/fetch_data?page="+a+"&sortby="+n+"&sorttype="+e+"&query="+t,success:function(a){$("tbody").html(""),$("tbody").html(a)}})}$(document).on("keyup","#serach",function(){var e=$("#serach").val(),n=$("#hidden_column_name").val(),t=$("#hidden_sort_type").val();a($("#hidden_page").val(),t,n,e)}),$(document).on("click",".sorting",function(){var e=$(this).data("column_name"),n=$(this).data("sorting_type"),t="";"asc"==n&&($(this).data("sorting_type","desc"),t="desc",clear_icon(),$("#"+e+"_icon").html('<span class="glyphicon glyphicon-triangle-bottom"></span>')),"desc"==n&&($(this).data("sorting_type","asc"),t="asc",clear_icon,$("#"+e+"_icon").html('<span class="glyphicon glyphicon-triangle-top"></span>')),$("#hidden_column_name").val(e),$("#hidden_sort_type").val(t),a($("#hidden_page").val(),t,e,$("#serach").val())}),$(document).on("click",".pagination a",function(e){e.preventDefault();var n=$(this).attr("href").split("page=")[1];$("#hidden_page").val(n);var t=$("#hidden_column_name").val(),c=$("#hidden_sort_type").val(),i=$("#serach").val();$("li").removeClass("active"),$(this).parent().addClass("active"),a(n,c,t,i)})});
</script>
@endsection
