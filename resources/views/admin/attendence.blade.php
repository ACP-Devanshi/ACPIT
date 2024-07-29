@include('admin/header')
               <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="mt-4">
                <form action="{{url('/admin/attendence/')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label for="month">Select Month:</label>
                            <input type="month" class="form-control" id="month" name="month">
                        </div>
                        </div>
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
                            <label for="roll_number"><font color="white">Apply Filters</font></label>
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 25%;">Roll Number</th>
                        <th style="width: 45%;">Name</th>
                        @for ($i = 1; $i <= 31; $i++)
                        <th style="width: 5%;">{{$i}}</th>
                        @endfor
                        <th style="width: 5%;">Present</th>
                       
                    </tr>
                </thead>
                <hr>
                <tbody>
                    @if(count($data)>0)
                    @foreach ($data as $value)
                    <tr>
                    <td>{{$value->rollno}}</td>
                    <td >{{$value->name}}</td>
                    @if($value->{'01th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'01th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'01th'} }}</td>
                    @endif
                    @if($value->{'02th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'02th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'02th'} }}</td>
                    @endif
                    @if($value->{'03th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'03th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'03th'} }}</td>
                    @endif
                    @if($value->{'04th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'04th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'04th'} }}</td>
                    @endif
                    @if($value->{'05th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'05th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'05th'} }}</td>
                    @endif
                    @if($value->{'06th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'06th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'06th'} }}</td>
                    @endif
                    @if($value->{'07th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'07th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'07th'} }}</td>
                    @endif
                    @if($value->{'08th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'08th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'08th'} }}</td>
                    @endif
                    @if($value->{'09th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'09th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'09th'} }}</td>
                    @endif
                    @if($value->{'10th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'10th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'10th'} }}</td>
                    @endif
                    @if($value->{'11th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'11th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'11th'} }}</td>
                    @endif
                    @if($value->{'12th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'12th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'12th'} }}</td>
                    @endif
                    @if($value->{'13th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'13th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'13th'} }}</td>
                    @endif
                    @if($value->{'14th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'14th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'14th'} }}</td>
                    @endif
                    @if($value->{'15th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'15th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'15th'} }}</td>
                    @endif
                    @if($value->{'16th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'16th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'16th'} }}</td>
                    @endif
                    @if($value->{'17th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'17th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'17th'} }}</td>
                    @endif
                    @if($value->{'18th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'18th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'18th'} }}</td>
                    @endif
                    @if($value->{'19th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'19th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'19th'} }}</td>
                    @endif
                    @if($value->{'20th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'20th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'20th'} }}</td>
                    @endif
                    @if($value->{'21th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'21th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'21th'} }}</td>
                    @endif
                    @if($value->{'22th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'22th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'22th'} }}</td>
                    @endif
                    @if($value->{'23th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'23th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'23th'} }}</td>
                    @endif
                    @if($value->{'24th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'24th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'24th'} }}</td>
                    @endif
                    @if($value->{'25th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'25th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'25th'} }}</td>
                    @endif
                    @if($value->{'26th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'26th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'26th'} }}</td>
                    @endif
                    @if($value->{'27th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'27th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'27th'} }}</td>
                    @endif
                    @if($value->{'28th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'28th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'28th'} }}</td>
                    @endif
                    @if($value->{'29th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'29th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'29th'} }}</td>
                    @endif
                    @if($value->{'30th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'30th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'2th'} }}</td>
                    @endif
                    @if($value->{'31th'} == "A")
                    <td style="color: red; font-weight: bold;">{{ $value->{'31th'} }}</td>
                    @else
                    <td style="color: blue; font-weight: bold;">{{ $value->{'31th'} }}</td>
                    @endif
                    <td>{{$value->total}}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                    <td colspan="37" align="center"><font color="red">Record not found</font></td>
                </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin/footer')