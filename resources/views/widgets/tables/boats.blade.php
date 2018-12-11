<table class="table {{ $class }}">
    <thead>
		<tr>
            <th>VIN</th>
			<th>Model</th>
			<th>Manufacturer</th>
			<th>Date Prod.</th>
			<th>Date Purchased</th>
			<th>Actions</th>
		</tr>
	</thead>
    <tbody>
        @foreach($users as $key=>$user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                <td><a href="mailto:{{$user->email}}" title="Email {{$user->first_name}}">{{$user->email}}</a></td>
                <td>{{$user->postalcode}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href=""><i class="fa-envelope-o fa fa-lg" title="Create a mailing label for {{$user->first_name}}"></i></a>
                    <a onclick="return confirm('Are you sure you wish to permanently delete this user?')" href="/admin/users/delete/{{$user->id}}" style="color:red"><i class="fa-times fa fa-lg" title="Delete this user"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>