<h1>Hello, this the students page!</h1>
<a href="{{url('/welcome')}}">Home</a>

@foreach{}
<h5>
The student ids are:
{{$student_list->id}}

@endforeach
</h5>

@foreach($student_list as $key => $value)
        <!--$student is imported from another file,
        with this function: $student = Student::all()-->
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td>{{$value->dob}}</td>
            <td>{{$value->gender}}</td>