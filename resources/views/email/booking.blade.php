<h2>Hi {{$c_name}}</h2>
<p>
    Chúc mừng bạn đã đặt phòng thành công
</p>
<h4>
    Thông tin chi tiết về phòng và dịch vụ mà bạn đã đặt
</h4>
<h4>Mã đơn phòng: {{$order->id}}</h4>
<h4>Ngày đặt phòng: {{$order->created_at}}</h4>
<h4>Chi tiết các phòng</h4>
<table border="1" cellspacing="0" cellpadding="10" width="400">
	<thead>
        <th>STT</th>
        <th>Id phòng</th>
		<th>Tên phòng</th>
		<th>Giá phòng một đêm</th>
		<th>Ngày đến/ Ngày đi</th>
		<th>Số Ngày</th>
        <th>Thành tiền</th>
	</thead>
	<tbody>
		@foreach($room as $r)
		<tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$r['id']}}</td>
			<td>{{$r['name']}}</td>
			<td>{{$r['price']}}</td>
			<td>{{$r['arriveDate']}} -> {{$r['departDate']}}</td>
			<td>{{$r['songay']}}</td>
			<td>{{number_format($r['price']*$r['songay'])}}$</td>
		</tr>
		@endforeach
	</tbody>
</table>
<hr>
<h4>
    Chi tiết các dịch vụ đã đặt
</h4>
<table border="1" cellspacing="0" cellpadding="10" width="400">
	<thead>
		<th>STT</th>
		<th>Tên dịch vụ</th>
		<th>Giá dịch vụ</th>
		<th>Số lượng</th>
		<th>Thuộc về phòng</th>
        <th>Thành tiền</th>
	</thead>
	<tbody>
		@foreach($service as $s)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$s['name']}}</td>
			<td>{{$s['price']}}</td>
			<td>{{$s['quantity']}}</td>
			<td>{{$s['room_id']}}</td>
			<td>{{number_format($s['price']*$s['quantity'])}}$</td>
		</tr>
		@endforeach
	</tbody>
</table>