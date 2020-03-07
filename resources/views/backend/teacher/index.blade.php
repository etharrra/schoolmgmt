@extends('backendtemplate')
@section('content')

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="row">
        <div class="col-10">
          <h6 class="m-0 font-weight-bold text-primary">Teacher</h6>
        </div>
        <div class="col-2">
          <a href="{{route('teacher.create')}}" class="btn btn-block btn-outline-success mb-3">Add New</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
             <th class="text-center">No</th>
             <th>Name</th>
             <th>Phone</th>
             <th>Subject</th>
             <th class="text-right">Actions</th>
           </tr>
         </thead>
         <tbody>
          @php $i = 1; @endphp
          @foreach($teacher as $row)
          <tr>
           <td class="text-center">{{$i++}}</td>
           <td>{{$row->user->name}}</td>
           <td>{{$row->phone}}</td>
           <td>{{$row->subject->name}}</td>
           <td class="td-actions text-right">

            <a href="#" class="btn btn-info detail" data-id="{{$row->id}}" data-name="{{$row->user->name}}" data-email="{{$row->user->email}}" data-avatar="{{$row->avatar}}" data-phone="{{$row->phone}}" data-education="{{$row->education}}" data-address="{{$row->address}}" data-subject="{{$row->subject->name}}"
              data-rooms="
              @php
              $v = $row->rooms;
              @endphp
              @foreach($v as $key => $value)
              <span class='badge badge-pill badge-primary'>
                {{$value->name}},           
              </span>
              @endforeach">

                <i class="fas fa-search"></i>
              </a>


              <a href="{{route('teacher.edit',$row->id)}}" class="btn btn-success">
               <i class="fas fa-edit"></i>
             </a>

             <form method="post" action="{{ route('teacher.destroy',$row->id)}}" onsubmit="return confirm('Are You Sure?')" class="d-inline-block">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach


      </tbody>
      <tfoot>
        <tr>
         <th class="text-center">No</th>
         <th>Name</th>
         <th>Phone</th>
         
         <th>Subject</th>
         <th class="text-right">Actions</th>
       </tr>
     </tfoot>
   </table>
 </div>                
</div>
</div>    

</div>


<!-- Modal -->
<div class="modal fade" id="detailModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
          <div class="col-12" id="dmodalbody">

          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">

  $(document).ready(function() {
    $(".detail").click(
      function() {
                //alert("ok");
                var id = $(this).data('id');
                var name = $(this).data('name');
                var email = $(this).data('email');
                var avatar = $(this).data('avatar');
                var phone = $(this).data('phone');
                var education = $(this).data('education');
                var address = $(this).data('address');
                var subject = $(this).data('subject');
                var rooms = $(this).data('rooms')
                var modalbox = `
                <table class="table table-borderless">
                <tr>
                <td rowspan="2">
                <img src="${avatar}" class="img-fluid d-block rounded-circle">
                </td>
                <th>
                Email
                </th>
                <td>
                ${email}
                </td>
                </tr>
                <tr>
                <th>Phone</th>
                <td>${phone}</td>
                </tr>
                <tr>
                <th>Education</th>
                <th colspan="2">Sub</th>
                </tr>
                <tr>
                <td>${education}</td>
                <td colspan="2">${subject}</td>
                </tr>
                <tr>
                <th>Address</th>
                <th colspan="2">Rooms</th>
                </tr>
                <tr>
                <td>${address}</td>
                <td colspan="2">${rooms}</td>
                </tr>
                </table>`;

                //alert(id + name + email + avatar + phone + education + address + subject);
                $('#detailModalLabel').text(name);
                $('#dmodalbody').html(modalbox);
                $('#detailModal').modal('show');

              });
  });

</script>
@endsection