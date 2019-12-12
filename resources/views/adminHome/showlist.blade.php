<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
   
    	
    

    	
    		<table>
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Designation</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>

                @foreach($user as $key => $data)
                
    			<tr>
    				
    				<td>{{$data->name}}</td>
    			
    				
    				<td>{{$data->contactno}}</td>
    			
    				
    				<td>{{$data->designation}}</td>
    			
    				
    				<td>{{$data->username}}</td>
    			
    				
                    <td>{{$data->password}}</td>

                    <td><a href="{{route('member.edit',$data->name)}}">Edit</a></td>

    				<td><a href="#">Delete</a></td>
    			</tr>

    			

    			@endforeach
    		</table>
    	
</body>
</html>