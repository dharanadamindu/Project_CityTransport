@extends('layouts.app')
    
@section('content') 
   <div class="row">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
     <div class="form-group">
      
     </div>
    </div>
   </div>
   @if ((Auth::User()->roleid)==1)
   <a href="/halt/create"><button class="btn btn-secondary form-control my-1">Add Data</button></a>
   @elseif((Auth::User()->roleid)==2)
   @endif
   
   <div class="table-responsive">
    <table class="table table table-hover table-dark">
     <thead>
      <tr>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">ID</th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Name </th>
       <th>Address </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Latitude </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Longitude </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">Description </th>
       <th width="" class="sorting" data-sorting_type="asc" style="cursor: pointer">timetable</th>
       <th width=""></th>
       <th colspan="2"><input type="text" name="serach" id="serach" placeholder="Search Here" class="form-control" /></th>
      </tr>
     </thead>
     <tbody>
      @include('halt/halt_data')
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
$(document).ready(function(){

 

 function fetch_data(page, sort_type, sort_by, query)
 {
  $.ajax({
   url:"/halt/halt/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
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

 $(document).on('click', '.sorting', function(){
  var column_name = $(this).data('column_name');
  var order_type = $(this).data('sorting_type');
  var reverse_order = '';
  if(order_type == 'asc')
  {
   $(this).data('sorting_type', 'desc');
   reverse_order = 'desc';
   clear_icon();
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
  }
  if(order_type == 'desc')
  {
   $(this).data('sorting_type', 'asc');
   reverse_order = 'asc';
   clear_icon
   $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
  }
  $('#hidden_column_name').val(column_name);
  $('#hidden_sort_type').val(reverse_order);
  var page = $('#hidden_page').val();
  var query = $('#serach').val();
  fetch_data(page, reverse_order, column_name, query);
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
