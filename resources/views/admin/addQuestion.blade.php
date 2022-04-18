
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .title{
            color: white; 
            padding-top:25px;
             font-size:25px;
        }
        label{
            display: inline-block;
            width: 200px;

        }
        .inp{
            color: black;
            width: 50%;
            padding:10px;
        }

    </style>

  </head>
  <body>

@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
                <div class="container" align="center">
                <h1 class="title">Add Question</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-bs-dismiss="alert">x</button>
                        {{ session()->get('message') }}

                    </div>
                    
                @endif
                <form action="{{ url('UploadQuestionnaire') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div style="padding: 15px;">
                    <label for="product_title">Question title</label>
                    <input class="inp" type="text" name="question_title" id="" required placeholder="give a question title">
                </div>    
                <div style="padding: 15px;">
                    <label for="question_type">Question Type</label>
                    <select name="question_type" id="question_title" class="inp">
                        <option  value="Wether">Wether</option>
                        <option  value="Food">Food</option>
                        <option  value="Transportation">Transportation</option>
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="answer_one">Answer one</label>
                    <input class="inp" type="text" name="answer_one" id="answer_one" required placeholder="give a product description">
                </div>
                <div style="padding: 15px;">
                    <label for="answer_two">Answer two</label>
                    <input class="inp" type="text" name="answer_two" id="answer_two" required placeholder="give a product description">
                </div>
                <div style="padding: 15px;">
                    <label for="answer_three">Answer three</label>
                    <input class="inp" type="text" name="answer_three" id="answer_three" required placeholder="give a product description">
                </div>
                <div style="padding: 15px;">
                    <label for="question_title">Question Statues</label>
                    <select name="question_statues" id="question_title" class="inp">
                        <option  value="Show">Show</option>
                        <option  value="Hide">Hide</option>
                        
                    </select>
                </div>


                <div style="padding: 15px;">
                    
                    <input type="submit" class="btn btn-success" value="ADD" name="question_submit" id="" required >
                </div>
                </form>
            
            </div>

        </div>

          <!-- partial -->
@include('admin.script')
  </body>
</html>