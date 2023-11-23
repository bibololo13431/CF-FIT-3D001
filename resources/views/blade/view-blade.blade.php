<h1>VIEW PHP</h1>
@php
    $scores = [1, 3, 4, 5, 3, 3, 7];
@endphp


 <!--In ra lấy luốn thẻ html-->
<table border="1">
    <tr>
        <th>STT</th>
        <th>Điểm</th>
        <th>KetQua</th>
    </tr>
    
    <!-- @foreach ($scores as $score):
        @php
         
        $mauSac = $loop->odd ? '': "style ='background: grey'"; 
        @endphp
        <tr {!! $mauSac !!}>
        <td><?= $loop->iteration ?></td> 
        <td><?= $score ?></td> 
        <?= $score < 5 ? 'Khong dat' : 'dat' ?></td>
        <td>
            @if($score < 5)
                khong dat 
            @else
                dat
            @endif
        </td>
        </tr>
    @endforeach -->

<!--Khi dùng for else thì có empty từ empty -> endforelse là set điều kiện rỗng -->
    @forelse($scores as $score)
        @php
        $mauSac = $loop->odd ? '': "style ='background: grey'"; 
        @endphp
        <tr <?= $mauSac ?>>
        <td><?= $loop->iteration ?></td> 
        <td><?= $score ?></td> 
        <!-- <td><?= $score < 5 ? 'Khong dat' : 'dat' ?></td>  -->
        <td>
            @if($score < 5)
                khong dat 
            @else
                dat
            @endif
        </td>
        </tr>
    @empty
        <tr>
            <td colspan ="3">No data</td>
        </tr>
    @endforelse


</table>


<!-- $mauSac = $loop->even ? "style='background: grey'" : ''; cách 2 của dòng 17-->