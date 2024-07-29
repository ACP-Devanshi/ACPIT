@include("admin\header")
<div class="col-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
  <h4 class="card-title">{{$title}}</h4>
  <form method="post" action="{{$url}}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
    <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="rollno" name="rollno" placeholder="Roll Number" value="{{$student->rollno}}" required>
                <label for="name">Enter Roll Number</label>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="batch" name="batch" placeholder="Roll Number" value="{{$student->batch}}" required>
                <label for="name">Enter Batch</label>
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        
        <div class="col-md-6">
         <div class="form-group">
        <label for="image">Upload certificate as pdf</label>
        <input type="file" class="form-control" id="certificate" name="certificate" accept=".pdf">
        @if ($student->image)
            <p>Current Certificate:</p>
                <iframe src="{{ asset('uploads/image/' . $student->certificate) }}" alt="Current Image" height="200" width="250"></iframe>
                <input type="hidden" name="current_image" value="{{ $student->certificate }}">
        @endif
        <span class="text-danger">
         @error('image')
         {{$message}}
         @enderror
        </span>
         </div>
        </div>
        <div class="col-md-6">
         <div class="form-group">
        <label for="image">Upload certificate as image</label>
        <input type="file" class="form-control" id="image" name="image">
        @if ($student->image)
            <p>Current Image:</p>
                <img src="{{ asset('uploads/image/' . $student->image) }}" alt="Current Image" height="200" width="250">
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