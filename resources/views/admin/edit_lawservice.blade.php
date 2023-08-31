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
        <div class="row">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/services">Add services</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>
        </div>
    </div>
    <div class="container">
        
        <div class="row">
        <div class="col-5">

                <div style="color: black;background-color: white;margin: 8% 5%;padding: 6%;border-radius: 12px;">
                    <h1 style="text-align: center;margin:0% 0% 7% 0%">Edit Services</h1>
 

                    <form action="{{ url('/law_serviceedit/insert'  )}}" method="POST" >
                    @csrf 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Service Name</label>
                        <input type="text" name="l_name" class="widthinput" value="{{$sercive_ditels->l_name}}">
                        <input type="hidden" name="id" class="widthinput" value="{{$sercive_ditels->id}}">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">service provider name</label>
                        <input type="text" class="widthinput" name="service_provider" value="{{$sercive_ditels->service_provider}}"></input>
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputPassword1">Service Price</label>
                        <input type="number" class="widthinput"  name="service_price" value="{{$sercive_ditels->service_price}}"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Service review</label>
                        <input type="number" class="widthinput" name="service_provider_review" value="{{$sercive_ditels->service_provider_review}}"></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">service details</label>
                        <input type="text" class="widthinput"  name="service_provider_details" value="{{$sercive_ditels->service_provider_details}}"></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">service procedure</label>
                        <input type="text" class="widthinput"  name="service_procedure" value="{{$sercive_ditels->service_procedure}}"></input>
                    </div>
                    

                    <button type="submit" class="btn btn-success">Edit Course</button>
                    </form>
                </div>
           </div>
        </div>
    </div>

</x-admin-layout>