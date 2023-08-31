<x-admin-layout>

<style>
        .widthinput{
            width: 100%;
        }
        label{
            display: block;
            margin: 10px 0px;
            font-weight: bold;
        }
        button{
            margin: 20px 0px;
            padding: 10px 24px;
        }
        .modifybutton{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: space-between;
            align-items: stretch;
        }
    </style>
    <div class="container">

        <div class="row"     style="display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    flex-direction: column;
    align-content: center;
    justify-content: space-between;">
            <div class="col-lg-9">
            @if (session('success'))
                <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
            </div>
            <div class="col-9">
           @if (session('delete_notic'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>{{session('delete_notic')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
            <div style="color: black;background-color: #212529;margin: 9% 3%;padding: 7% 1%;border-radius: 12px;">

            <h1 style="text-align: center;margin:0% 0% 3% 0%; color:white">Show all courses</h1>
            <table class="table table-dark table-hover" >
            
          <thead>
              <tr>
              <th scope="col">img</th>
              <th scope="col">product Name </th>
              <th scope="col">Product price</th>
              <th scope="col">Modify</th>
              </tr>
          </thead>
          <tbody>
              @foreach($all_service as $all_course)
              <tr>
              <th scope="row"><img src="{{$all_course->img}}" alt="" style="width: 51px;height: 53px;"></th>
            
              <td>{{$all_course->name}}</td>

              <td>{{$all_course->service_price}}</td>

              <td class="modifybutton" style="padding: 0;">
              <a href="{{ url('course/delete', ['course_id' => $all_course->id]) }}" type="button" class="btn btn-danger">Delete</a>
              <a href="{{ url('produc_edit/insert', ['course_id' => $all_course->id]) }}" type="button" class="btn btn-info" style="background-color: #4B49AC;">Edit</a>
              </td>
        
              </tr>
              
              @endforeach

          </tbody>

      </table>
 

            </div>
            
        
        </div>


        <div class="col-9">
                @if (session('add_notic'))
                <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('add_notic')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
                <div style="color: black;background-color: white;margin: 8% 5%;padding: 6%;border-radius: 12px;">
                    <h1 style="text-align: center;margin:0% 0% 7% 0%">Add Services</h1>

                    <form action="{{ url('/services/insert' )}}" method="POST" enctype="multipart/form-data">
                      @csrf 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Title </label>
                        <input type="text" name="name" class="widthinput" placeholder="Course Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Course image </label>
                        <input type="file" name="img" class="widthinput" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Course start</label>
                        <input type="date" class="widthinput" name="course_start" > </input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Course End</label>
                        <input type="date" class="widthinput" name="course_end" ></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">service provider</label>
                        <input type="text" class="widthinput" name="service_provider"></input>
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputPassword1">Crouse Price</label>
                        <input type="number" class="widthinput"  name="service_price"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Crouse review</label>
                        <input type="number" class="widthinput" name="service_review"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">service details</label>
                        <textarea type="text" class="widthinput"  name="service_details"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Discount</label>
                        <input type="number" class="widthinput"  name="service_discount"></input>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Add Course</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</x-admin-layout>