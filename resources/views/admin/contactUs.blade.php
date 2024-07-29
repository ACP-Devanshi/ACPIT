@include('admin/header')
               <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Sr.No </th>
                          <th> Name </th>
                          <th  style="width: 25%;"> Email Address </th>
                          <th> Contact Number </th>
                          <th  style="width: 20%;"> Message </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($data as $value)
                          <td class="py-1">
                           {{$loop->iteration}}
                          </td>
                          <td> {{$value->name}}</td>
                          <td> {{$value->email}}</td>
                          <td> {{$value->phone}}</td>
                          <td> {{$value->message}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
</div>
@include('admin/footer')