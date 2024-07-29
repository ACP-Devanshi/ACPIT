@include("admin\header")
@php
    $qualificationArray = json_decode($ebook->batch, true);
@endphp
<div class="col-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
  <h4 class="card-title">{{$title}}</h4>
  <form method="post" action="{{$url}}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
    <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$ebook->title}}" >
                <label for="name">Enter Ebook Title</label>
                <span class="text-danger">
                    @error('title')
                    {{$message}}
                    @enderror
                </span>
            </div>
        </div>
        
        <div class="col-md-6">
         <div class="form-group">
        <label for="image">Upload Ebook as pdf</label>
        <input type="file" class="form-control" id="ebook" name="ebook" accept=".pdf">
        @if ($ebook->ebook)
            <p>Current Certificate:</p>
                <iframe src="{{ asset('uploads/image/' . $ebook->ebook) }}" alt="Current Image" height="200" width="250"></iframe>
                <input type="hidden" name="current_image" value="{{ $ebook->ebook }}">
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
    <label for="qualification">Select Batch</label>

    <div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="BCA" name="batch[]" value="BCA" {{ $qualificationArray && in_array('BCA', $qualificationArray) ? 'checked' : '' }}>

    <label class="form-check-label" for="BCA">BCA</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="MCA" name="batch[]" value="MCA " {{ $qualificationArray && in_array('MCA', $qualificationArray) ? 'checked' : '' }} >
    <label class="form-check-label" for="MCA">MCA</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="PGDCA" name="batch[]" value="PGDCA"  {{ $qualificationArray && in_array('PGDCA', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="PGDCA">PGDCA</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="ADCA" name="batch[]" value="ADCA" {{ $qualificationArray && in_array('ADCA', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="qualificationPostGraduation">ADCA</label>
</div>

<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="DCA" name="batch[]" value="DCA" {{ $qualificationArray && in_array('DCA', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="DCA">DCA</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="O-LEVEL" name="batch[]" value="O-LEVEL" {{ $qualificationArray && in_array('O-LEVEL', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="O Level">O-LEVEL</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="CCC" name="batch[]" value="CCC" {{ $qualificationArray && in_array('CCC', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="CCC">CCC</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="BCC" name="batch[]" value="BCC" {{ $qualificationArray && in_array('BCC', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="BCC">BCC</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="TALLY" name="batch[]" value="TALLY" {{ $qualificationArray && in_array('TALLY', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="TALLY">TALLY</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="TALLYWITHEXCEL" name="batch[]" value="TALLYWITHEXCEL" {{ $qualificationArray && in_array('TALLYWITHEXCEL', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="TALLY">TALLY WITH EXCEL</label>
</div>
<div class="form-check form-check-warning">
    <input type="checkbox" class="form-check-input" id="WD" name="batch[]" value="WD" {{ $qualificationArray && in_array('WD', $qualificationArray) ? 'checked' : '' }}>
    <label class="form-check-label" for="TALLY">WEB DEVELOPMENT</label>
</div>
<span class="text-danger">
        @error('batch')
            {{ $message }}
        @enderror
    </span>
</div>

    </div>
        <div class="col-md-6">
         <div class="form-group">
        <label for="image">Upload Ebook as image</label>
        <input type="file" class="form-control" id="image" name="image">
        @if ($ebook->image)
            <p>Current Certificate:</p>
                <iframe src="{{ asset('uploads/image/' . $ebook->image) }}" alt="Current Image" height="200" width="250"></iframe>
                <input type="hidden" name="current_image" value="{{ $ebook->ebook }}">
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