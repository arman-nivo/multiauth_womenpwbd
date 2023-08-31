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

        <div class="row" style="display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    flex-direction: column;
    align-content: center;
    justify-content: space-between;">

        <div class="col-10">
                @if (session('add_notic'))
                <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('add_notic')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
                <div style="color: black;background-color: white;margin: 8% 5%;padding: 6%;border-radius: 12px;">
                    <h1 style="text-align: center;margin:0% 0% 7% 0%">Add Law Services</h1>

                    <form action="{{ url('/law_services/insert' )}}" method="POST" enctype="multipart/form-data">
                      @csrf 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" name="l_name" class="widthinput" placeholder="Course Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Law service image </label>
                        <input type="file" name="law_img" class="widthinput" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">service provider name</label>
                        <input type="text" class="widthinput" name="service_provider"></input>
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputPassword1">Service Price</label>
                        <input type="number" class="widthinput"  name="service_price"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Service review</label>
                        <input type="number" class="widthinput" name="service_provider_review"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">service details</label>
                        <textarea type="text" class="widthinput"  name="service_provider_details"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">service procedure</label>
                        <input type="text" class="widthinput"  name="service_procedure"></input>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Add Course</button>
                    </form>
                </div>
        </div>



        <div class="col-10">
            @if (session('success'))
                <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
            </div>
            <div class="col-10">
           @if (session('delete_notic'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>{{session('delete_notic')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif
            <div style="color: black;background-color: #212529;margin: 9% 3%;padding: 7% 1%;border-radius: 12px;">

            <h1 style="text-align: center;margin:0% 0% 3% 0%; color:white">Law Services</h1>
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
              @foreach($all_service as $service)
              <tr>
              <th scope="row"><img src="{{$service->law_img}}" alt="" style="width: 51px;height: 53px;"></th>
            
              <td>{{$service->l_name}}</td>

              <td>{{$service->service_price}}</td>

              <td class="modifybutton">
              <a href="{{ url('law_service/delete', ['law_service_id' => $service->id]) }}" type="button" class="btn btn-danger">Delete</a>
              <a href="{{ url('law_service_edit/insert', ['law_service_id' => $service->id]) }}" type="button" class="btn btn-info" style="background-color: #4B49AC;">Edit</a>
              </td>
        
              </tr>
              
              @endforeach

          </tbody>

      </table>


            </div>
            {{ $all_service -> links() }}
        </div>
    </div>
</div>
</x-admin-layout>