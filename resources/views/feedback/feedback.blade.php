@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
     <div class="form-group">
           <br>
      <input type="text" name="serach" id="serach" class="form-control" />
     </div>
    </div>
   </div>
   
<a href="/feedback/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
   <div class="table-responsive">
    {{-- <table class="table table-striped table-bordered"> --}}
    <table class="table table-hover table-dark" style="width:100%">
     <thead>
      <tr>
       <th data-sorting_type="asc" style="cursor: pointer">ID </span></th>
       <th data-sorting_type="asc" style="cursor: pointer">Name </span></th>
       <th data-sorting_type="asc" style="cursor: pointer">Email</th>
       <th data-sorting_type="asc" style="cursor: pointer">Contact No</th>
       <th >Comment</th>
       <th></th>
       <th></th>
      </tr>
     </thead>
     <tbody>
      @include('feedback/feedback_data')
     </tbody>
    </table>
    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
   </div>



<script>
$(document).ready(function(){

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
   url:"/feedback/feedback/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }

 $(document).on('keyup', '#serach', function(){
  var query = $('#serach').val();
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();
  var page = $('#hidden_page').val();
  fetch_data(page, sort_type, column_name, query);
 });


 $(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

  var query = $('#serach').val();

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, query);
 });
});
</script>
@endsection