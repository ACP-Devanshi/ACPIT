@include('admin/header')
               <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                     <div class="mt-4">
                <form action="{{url('/admin/student/')}}" method="post">
                    @csrf
                    <div class="row">
                       
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roll_number">Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="roll_number">Roll Number:</label>
                                <input type="text" class="form-control" id="rollno" name="rollno">
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="form-group">
                                <label for="roll_number">Course</label>
                                <input type="text" class="form-control" id="course" name="course">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label for="roll_number"><font color="white">Apply Filters</font></label>
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
                  <a href="{{url('/admin/studentform')}}" class="btn btn-gradient-primary btn-rounded btn-fw">Add Student</a>

                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10%;"> Sr.No </th>
                          <th style="width: 10%;"> Image </th>
                          <th style="width: 25%;"> Name </th>
                          <th style="width: 10%;"> Roll No </th>
                          <th style="width: 25%;"> Father name </th>
                          <th style="width: 12%;"> Date Of Birth </th>
                          <th style="width: 12%;"> Reg. Date </th>
                          <th style="width: 10%;"> Course </th>
                          <th style="width: 10%;"> Password </th>
                          <th> Action </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($data as $value)
                          <td class="py-1">
                           {{$loop->iteration}}
                          </td>
                          <td class="py-1">
                            <img src="{{ asset('uploads/image/' . $value->image) }}" alt="image" />
                          </td>
                          <td> {{$value->name}} </td>
                          <td> {{$value->rollno}}</td>
                          <td> {{$value->fname}} </td>
                          <td> {{$value->dob}} </td>
                          <td> {{$value->regdate}} </td>
                          <td> {{$value->course}} </td>
                          <td> {{$value->password}} </td>
                          <td><a href="{{url('/student/edit/')}}/{{$value->id}}"><i class="mdi mdi-tooltip-edit"></i></a>
                          <a onclick="return confirm(&#39;Are you sure Delete this Record?&#39;);" href="{{url('/student/delete/')}}/{{$value->id}}"><i class="mdi mdi-delete-forever"></i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
</div>
@include('admin/footer')