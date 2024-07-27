
@extends('layout.admin')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function() {
       
        $('#keyword').keyup(function() {

            var keyword = $(this).val();
            $.ajax({
                type: 'GET',
                url: "{{ url('/admin/management/searchByName') }}",
                data: {
                    keyword: keyword
                },
                success: function(data) {
                    var n = data.oto.length;
                    var s = '';
                    for (var i = 0; i < n; i++) {
                        s += '<tr>';
                        s += '<td>' + data.oto[i].id + '</td>';
                        s += '<td>' + data.oto[i].name + '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].quantity +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].price +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i]
                            .yearofmanufacture +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].orgin +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].engine +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].engine +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].wattage +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].fuelcapacity +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].segmentid +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].carlineid +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].showroomid +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].brandid +
                            '</td>';
                        s += '<td style=text-align:right;>' + data.oto[i].photo +
                            '</td>';
                        s += '</tr>';
                    }
                    // đưa html vào dùng html()
                    $('#example2 tbody').html(s);
                    
                }
            })
            
        });
    })
</script>




<div class="container">
    <h1>Car listing</h1>
    <a href="{{ url('/admin/action/addnewcar') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">ADD MORE CAR</a>
    <br><br>
    <div class="row">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id
                           
                        </th>
                        <th>Name
                            <br><input type="text" id="keyword">
                        </th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Year</th>
                        <th>Orgin</th>
                        <th>Engine</th>
                        <th>Wattage</th>
                        <th>Fuel capacity</th>
                        <th>SegmentId</th>
                        <th>CarlineId</th>
                        <th>ShowroomId</th>
                        <th>BrandId</th>
                        <th>Photo</th>
                        <th align="center" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($oto as $oto)
                    <tr>
                        <td>{{ $oto->id }}</td>
                        <td>{{ $oto->name }}</td>
                        <td>{{ $oto->quantity }}</td>
                        <td>{{ $oto->price }}</td>
                        <td>{{ $oto->yearofmanufacture }}</td>
                        <td>{{ $oto->orgin }}</td>
                        <td>{{ $oto->engine }}</td>
                        <td>{{ $oto->wattage }}</td>
                        <td>{{ $oto->fuelcapacity }}</td>
                        <td>{{ $oto->segmentid }}</td>
                        <td>{{ $oto->carlineid }}</td>
                        <td>{{ $oto->showroomid }}</td>
                        <td>{{ $oto->brandid }}</td>
                        <td>{{ $oto->photo }}</td>
                        <td><a href="{{ url('/admin/action/editcar/' . $oto->id) }}">Edit</a></td>
                        <td><a href="{{ url('/admin/action/savedeletecar/' . $oto->id) }}" onclick="return confirm('Are you sure??')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection