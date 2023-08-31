<x-teacher-layout>
<style>
    label{
        display: block;
    font-weight: bold;
    }
    input{
        width: 68%;
    padding: 8px;
    margin: 23px 0px 0px 0px;
    font-weight: bold;
    }
    textarea{
        width: 68%;
    padding: 8px;
    margin: 23px 0px 0px 0px;
    font-weight: bold;
    }
    form{
       text-align: center
    }
</style>
            @if (session('success'))
                <div class="alert alert alert-success alert-dismissible fade show" role="alert">
                   <strong>{{session('success')}}</strong> 
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding: 0px 17px;position: absolute;top: -6px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
<div class="row" style="    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    flex-direction: column;
    align-content: center;
    justify-content: space-between;">
        <div class="col-8">

                <div style="color: black;background-color: white;margin: 8% 5%;padding: 6%;border-radius: 12px;">
                    <h1 style="text-align: center;margin:0% 0% 7% 0%">Add Class time</h1>
 

                    <form  action="{{ route('add_edit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Course Provider Name</label>
                        <input type="text" name="name" class="widthinput" value="" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputPassword1">Crouse ID</label>
                        <input type="number" class="widthinput"  name="course_id" value="" required ></input>
                    </div> 
      
                    <div class="form-group">
                        <label for="exampleInputPassword1">service details</label>
                        <textarea class="widthinput"  name="course_timig" value="Course Timing" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Live Link</label>
                        <input type="text" name="liveLink" class="widthinput" value="" required>
                    </div>

                    <button type="submit" class="btn btn-success">Add class Time</button>
                    </form>
                </div>
           </div>
        </div>
</x-teacher-layout>