<x-app>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Product {{$id}}'s Extra Details</h5>
            </div>
            <div class="card-body">
                    <form action="{{route('product.storeExtraDetails',$id)}}" method="post">
                        @csrf
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th width="25%">Title</th>
                                    <th width="25%">Details</th>
                                    <th width="25%">Remove</th>
                                </tr>
                            </thead>
                            
                            <tbody id="tbody" style="text-align: center">
                                @if (is_array($productDetails) || is_object($productDetails))
                                
                                    @foreach ($productDetails as $key => $productDetail)
                                        {!!$productDetail!!}
                                    @endforeach
                                @endif
                                    <td class="text-left"><input type="text" class="form-control @error('title') is-invalid @enderror" name="title[]" placeholder="Title" value = "{!!old('title')!!}">
                                        @error('title')
                                        <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                        @enderror
                                    </td>
                                    
                                
                                                                 
                                    <td class="text-left">
                                        <textarea onkeyup="handleInput(event)" rows="10" cols="50" class="form-control @error('details') is-invalid @enderror" name="details[]" placeholder="details">{!!old('details')!!}</textarea>
                                        @error('details')
                                        <span class="text-danger" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                        @enderror
                                    </td>
                                    <td class="text-left">
                                        <button class="btn btn-danger remove" 
                                            type="button">Remove</button>
                                    </td>
                                

                            </tbody>

                        </table>
                        <div class="row">
                            <button class="btn btn-md btn-success" id="addMore">Add more</button>
                        </div>
                        @if(Session::has('message'))
                        <span class="text-success">
                            <p>{{ Session::get('message') }}</p>
                        </span>
                        @endif                       
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </div>
                    </div>  
                </form>             
            </div>
        </div>
    </div>
@push('addrow-section')
<script>
const bullet = "\u2022";
const bulletWithSpace = `${bullet} `;
const enter = 13;


const handleInput = (event) => {
  const { keyCode, target } = event;
  const { selectionStart, value } = target;
  
  if (keyCode === enter) {
    // console.log('a');
    target.value = [...value]
      .map((c, i) => i === selectionStart - 1
        ? `\n${bulletWithSpace}`
        : c
      )
      .join('');
    //   console.log(target.value);
      
    target.selectionStart = selectionStart+bulletWithSpace.length;
    target.selectionEnd = selectionStart+bulletWithSpace.length;
  }
  
  if (value[0] !== bullet) {
    target.value = `${bulletWithSpace}${value}`;
  }
}
    $('document').ready(function(){
        $('#addMore').click(function(e){
            e.preventDefault();
            // console.log("change happens");
            var rowIdx = 0;
            // Adding a row inside the tbody.
            $('#tbody').append(`<tr id="R${++rowIdx}">
                <td class="row-index text-left">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title[]" placeholder="Title" value="{{old('title')}}">
                        @error('title')
                        <span class="text-danger" role="alert">
                            <p>{{ $message }}</p>
                        </span>
                        @enderror
                </td>
                <td class="row-index text-left">
                    <textarea onkeyup="handleInput(event)" rows="10" cols="50" class="form-control @error('details') is-invalid @enderror" name="details[]" placeholder="details">{{old('details')}}</textarea>
                                @error('details')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror        
                </td>                        
                <td class="text-left">
                    <button class="btn btn-danger remove" 
                        type="button">Remove</button>
                </td>
                </tr>`); 
  // jQuery button click event to remove a row.
  $('#tbody').on('click', '.remove', function () {
  
  // Getting all the rows next to the row
  // containing the clicked button
  var child = $(this).closest('tr').nextAll();

  // Iterating across all the rows 
  // obtained to change the index
  child.each(function () {

    // Getting <tr> id.
    var id = $(this).attr('id');

    // Getting the <p> inside the .row-index class.
    var idx = $(this).children('.row-index').children('p');

    // Gets the row number from <tr> id.
    var dig = parseInt(id.substring(1));

    // Modifying row index.
    idx.html(`Row ${dig - 1}`);

    // Modifying row id.
    $(this).attr('id', `R${dig - 1}`);
  });

  // Removing the current row.
  $(this).closest('tr').remove();

  // Decreasing total number of rows by 1.
//   rowIdx--;
});                           

                });
    });
</script>      
@endpush
</x-app>
