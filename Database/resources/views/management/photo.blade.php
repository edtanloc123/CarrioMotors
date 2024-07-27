<script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
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
                    var n = data.photo.length;
                    var s = '';
                    for (var i = 0; i < n; i++) {
                        s += '<tr>';
                        s += '<td>' + data.photo[i].id + '</td>';
                        s += '<td>' + data.photo[i].name + '</td>';
                        s += '<td style=text-align:right;>' + data.photo[i].quantity +
                            '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].price +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i]
                        //     .yearofmanufacture +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].orgin +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].engine +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].engine +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].wattage +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].fuelcapacity +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].segmentid +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].carlineid +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].showroomid +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].brandid +
                        //     '</td>';
                        // s += '<td style=text-align:right;>' + data.photo[i].phphoto +
                        //     '</td>';
                        // s += '</tr>';
                    }
                    // đưa html vào dùng html()
                    // $('#example2 tbody').html(s);
                    console.log(keyword);
                }
            })
            console.log($(this).val());
        });
    })
</script>
@extends('layout.admin')
@section('content')
    <div class="container">
        <h1>Car listing</h1>
        <br><br>
        <div class="row">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id
                              <br><input type="text" name="id">
                            </th>
                            <th>Name
                              <br><input type="text" name="keyword">
                            </th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Year</th>
                            <th align="center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($photo as $photo)
                            <tr>
                                <td>{{ $photo->id }}</td>
                                <td>{{ $photo->name }}</td>
                                <td>{{ $photo->quantity }}</td>
                                <td>{{ $photo->price }}</td>
                                <td>{{ $photo->yearofmanufacture }}</td>
                                <td><a href="{{ url('/admin/action/editcar/' . $photo->id) }}">Edit</a></td>
                                <td><a href="{{ url('/admin/action/savedeletecar/' . $photo->id) }}"
                                        onclick="return confirm('Are you sure??')">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
