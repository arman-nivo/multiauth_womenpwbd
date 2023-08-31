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
          

           <div class="col-7">
           <!-- @if (session('delete_notic'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>{{session('delete_notic')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif -->
            <div style="color: black;background-color: #212529;margin: 9% 3%;padding: 7% 1%;border-radius: 12px;">

            <h1 style="text-align: center;margin:0% 0% 3% 0%; color:white">Show all products</h1>
            <table class="table table-dark table-hover" >
            
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Admin Name </th>
                <th scope="col">Admin Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alladmin as $alladmin)
                <tr>
                <th scope="row">{{$alladmin->id}}</th>
                <td>{{$alladmin->name}}</td>
                <td>{{$alladmin->email}}</td>

            
                </tr>
                
                @endforeach
  
            </tbody>
  
        </table>
        

            </div>
        
        </div>


        </div>
    </div>

</x-admin-layout>
