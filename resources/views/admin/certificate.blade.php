@include('admin/header')
               <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <a href="{{url('/admin/uploadcertificate')}}" class="btn btn-gradient-primary btn-rounded btn-fw"><i class="mdi mdi-upload btn-icon-prepend"></i> Upload Certificate</a>

                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Sr.No </th>
                          <th> Roll No </th>
                          <th> Name </th>
                          <th> Batch </th>
                          <th> Certificate </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($data as $value)
                          <td class="py-1">
                           {{$loop->iteration}}
                          </td>
                          <td> {{$value->rollno}}</td>
                          <td> {{$value->name}}</td>
                          <td> {{$value->batch}}</td>
                          <td>
                           <a href="{{ asset('uploads/image/' . $value->certificate) }}" class="btn btn-gradient-primary btn-rounded btn-fw" download><i class="mdi mdi-download btn-icon-prepend"></i> Download </a></td>
                          <td><a href="{{url('/certificate/edit/')}}/{{$value->id}}"><i class="mdi mdi-tooltip-edit"></i></a>
                          <a onclick="return confirm(&#39;Are you sure Delete this Record?&#39;);" href="{{url('/certificate/delete/')}}/{{$value->id}}"><i class="mdi mdi-delete-forever"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
</div>
@include('admin/footer')