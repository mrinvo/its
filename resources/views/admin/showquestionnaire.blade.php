
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
    <style>
        .table_row{
            margin-top: 30px;
            float: left;
            margin-left: -100px;
            z-index: 888;


        }
        table tr{
            color: white;
        }

    </style>
  </head>
  <body>

@include('admin.sidebar')
      <!-- partial -->
@include('admin.nav')
        <!-- partial -->
 <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
    <div class="container" align="center">
        @if (session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-bs-dismiss="alert">x</button>
            {{ session()->get('message') }}

        </div>
        
    @endif
    <div class="table_row">
        <table class="table ">
            <tr>
                <td style="">Title</td>
                <td style="">Question-type</td>
                <td style="">Answer one</td>
                <td style="">Answer two</td>
                <td style="">Answer three</td>
                <td style="">statues</td>
                <td style="">update</td>
                <td style="">delete</td>
            </tr>
            @foreach ($data as $question)
                
           
            <tr style="z-index:999;">
                <td style="">{{ $question->question }}</td>
                <td style="">{{ $question->question_type }}</td>
                <td style="">{{ $question->answer_one }}</td>
                <td style="">{{ $question->answer_two }}</td>
                <td style="">{{ $question->answer_three }}</td>
                <td style="">{{ $question->statues }}</td>
                <td><a href="{{ url('updateview',$question->id) }}" class="btn btn-primary">update</a></td>
                <td><a href="{{ url('deleteQuestion',$question->id) }}" class="btn btn-danger">delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>

    </div>
 </div>    
        <!-- partial -->
@include('admin.script')
  </body>
</html>