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
        
        <div class="row" style="    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    flex-direction: column;
    align-content: center;
    justify-content: space-between;">
        <div class="col-8">

                <div style="color: black;background-color: white;margin: 8% 5%;padding: 6%;border-radius: 12px;">
                    <h1 style="text-align: center;margin:0% 0% 7% 0%">Edit Services</h1>
 

                    <form action="{{ url('/producedit/insert'  )}}" method="POST" >
                    @csrf 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Title </label>
                        <input type="text" name="name" class="widthinput" value="{{$product_ditels->name}}" required>
                        <input type="hidden" name="id" class="widthinput" value="{{$product_ditels->id}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Course start</label>
                        <input type="date" class="widthinput" name="course_start"  value="{{$product_ditels->course_start}}" required> </input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Course End</label>
                        <input type="date" class="widthinput" name="course_end"  value="{{$product_ditels->course_end}}" required></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">service provider</label>
                        <input type="text" class="widthinput" name="service_provider"  value="{{$product_ditels->service_provider}}" required ></input>
                    </div> 

                    <div class="form-group">
                        <label for="exampleInputPassword1">Crouse Price</label>
                        <input type="number" class="widthinput"  name="service_price" value="{{$product_ditels->service_price}}" required ></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Crouse review</label>
                        <input type="number" class="widthinput" name="service_review" value="{{$product_ditels->service_review}}"required ></input>
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">service details</label>
                        <input type="text" class="widthinput"  name="service_details" value="{{$product_ditels->service_details}}" required></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Discount</label>
                        <input type="number" class="widthinput"  name="service_discount" value="{{$product_ditels->service_discount}}" required></input>
                    </div>

                    <button type="submit" class="btn btn-success">Edit Course</button>
                    </form>
                </div>
           </div>
        </div>
    </div>

</x-admin-layout>