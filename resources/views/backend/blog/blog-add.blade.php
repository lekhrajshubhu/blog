<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formBlog">
          <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">

          </div>
          <div class="form-group">
            <label for="body">Body</label>
           <textarea class="form-control" placeholder="Body" name="body" id="body"></textarea>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSaveBlog">Save Blog</button>
      </div>
    </div>
  </div>
</div>


<script>

    $('#btnSaveBlog').on('click',function(e) {

      e.preventDefault();


      let formData =  $('#formBlog').serializeArray();

      $.ajaxSetup({
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      

      $.ajax({

        url:'blog-store',

        method:'POST',

        data: formData,

        success:function(response) {
          console.log("success", response);
        },

        error: function(error) {
          console.log("error ",error);
        }

      });

  

    });

</script>
