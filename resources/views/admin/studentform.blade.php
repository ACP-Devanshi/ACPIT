@include("admin.header")

@php
    $qualificationArray = json_decode($student->qualification, true);
@endphp
<div class="col-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
  <h4 class="card-title">{{$title}}</h4>
  <p class="card-description"> Total Records Found</p>
  <form method="post" action="{{$url}}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$student->name}}">
                <label for="name">Name</label>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $student->email}}">
                <label for="email">Email</label>
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Name" value="{{ $student->fname }}">
                <label for="name">Father Name</label>
                <span class="text-danger">
                    @error('fname')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="mname" name="mname" placeholder="Mother name" value="{{ $student->mname }}">
                <label for="mname">Mother Name</label>
                <span class="text-danger">
                    @error('mname')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="contact" name="contact" placeholder="contact number"value="{{ $student->contact }}" >
                <label for="contact">Contact Number</label>
                <span class="text-danger">
                    @error('contact')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="course" name="course" placeholder="Subject" value="{{ $student->course }}">
                <label for="subject">Course</label>
                <span class="text-danger">
                    @error('course')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" id="dob" name="dob" placeholder="DOB" value="{{ $student->dob}}">
                <label for="contact">Date of Birth</label>
                <span class="text-danger">
                    @error('dob')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="date" class="form-control" id="regdate" name="regdate" placeholder="Subject" value="{{ $student->regdate }}"> 
                <label for="subject">Registration Date</label>
                <span class="text-danger">
                    @error('regdate')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
       
        <div class="col-md-6">
        <div class="form-group">
    <label for="qualification">Qualification</label>

    <div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="qualification10th" name="qualification[]" value="10th" {{ $qualificationArray && in_array('10th', $qualificationArray) ? 'checked' : '' }}>

    <label class="form-check-label" for="qualification10th">10th</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="qualification12th" name="qualification[]" value="12th" {{ $qualificationArray && in_array('12th', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="qualification12th">12th</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="qualificationGraduation" name="qualification[]" value="Graduation" {{ $qualificationArray && in_array('Graduation', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="qualificationGraduation">Graduation</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="qualificationPostGraduation" name="qualification[]" value="Post Graduation" {{ $qualificationArray && in_array('Post Graduation', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="qualificationPostGraduation">Post Graduation</label>
</div>


    <span class="text-danger">
        @error('qualification')
            {{ $message }}
        @enderror
    </span>
</div>

    </div>
     <div class="col-md-6">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="address" name="address" style="height: 200px" >{{ $student->address }}</textarea>
                <label for="message">Address</label>
                 <span class="text-danger">
                    @error('message')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
        <div class="form-floating">
        <select class="form-select" id="gender" name="gender" aria-label="Gender">
        <option value="" disabled>Select Gender</option>
        <option value="male" {{ $student->gender === 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $student->gender === 'female' ? 'selected' : '' }}>Female</option>
       </select>
       <label for="gender">Gender</label>
       <span class="text-danger">
        @error('gender')
            {{ $message }}
        @enderror
       </span>
       </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
        <label for="image">Upload image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
         @if ($student->image)
            <p>Current Image:</p>
                <img src="{{ asset('uploads/image/' . $student->image) }}" alt="Current Image" height="100" width="100">
                <input type="hidden" name="current_image" value="{{ $student->image }}">
        @endif
        <span class="text-danger">
         @error('image')
         {{$message}}
         @enderror
        </span>
         </div>
        </div>

        <div class="col-md-6">
        <button class="btn btn-gradient-primary w-100 py-3" type="submit">Submit</button>
        </div>
        <div class="col-md-6">
        <button type="reset" class="btn btn-gradient-warning w-100 py-3">Cancel</button>
        </div>
    </div>
</form>
                  </div>
                </div>
              </div>



@include('admin/footer')
        