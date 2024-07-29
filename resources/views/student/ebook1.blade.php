@include('student/header')
<style>
    .img-fluid {
        width: 500px; /* Set the width */
        height: 200px; /* Set the height */
        object-fit: cover; /* Maintain aspect ratio */
    }
    
        /* CSS to style the iframe */
        #pdfViewer {
            width: 100%;
            height: 100vh; /* Adjust height as needed */
            /* border: none; */
        }

    
</style>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <div style="text-align: center;">
                  <div class="row g-12">
               
                       
                       
                  <iframe id="pdfViewer" src="{{ asset('uploads/image/1714727451.pdf') }}" width="100%" height="800px"></iframe>

                  <script>
    document.getElementById('pdfViewer').onload = function() {
        var iframeDocument = this.contentWindow.document;
        var style = iframeDocument.createElement('style');
        style.textContent = 'a[href][download] { display: none !important; }';
        iframeDocument.head.appendChild(style);
    };
</script>

            
               
           </div>
                  </div>
                  </div>
                </div>
              </div>

        
     

@include('student/footer')



