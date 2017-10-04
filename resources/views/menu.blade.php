@extends('layouts.app')
@push('pageCss')
    <style type="text/css">
        .top-row {
            margin-top: 5%;
        }
        .bot-col {
            margin-bottom: 1%;
        }
    	.button-in {
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 21px
        }
        .flat {
            border-radius: 0;
        }
        .img {
            width: 275px;
        }
        #startAsk, #detail, #reset {
            margin-top: 10%;
        }
        .modal-size {
            width: 700px
        }
        .modal-text {
            font-size: 18px;
        }
        .modal-text > p {
            white-space: nowrap;
            overflow: hidden;
            width: 670px;
            animation: type 4s steps(60, end);
        }
        @keyframes type{
            from { width: 0; }
        }

        .d-flex {
            display: flex;
            flex-direction: row;
        }
        .d-flex > div {
            flex: 1;
            border: 1px solid black;
            border-right: 0;
            text-align: left;
            padding: 10px 5px;
            font-size: 16px;
            color: #000;
        }
        .d-flex > div:last-child {
            border-right: 1px solid black;
        }
        .done {
            color: #5cb85c
        }
        .undone {
            color: #d9534f
        }
        .more-small {
            font-size: 12px
        }
        @media only screen and (max-width: 768px) {
            .d-flex {
                flex-direction: column;
            }
            .d-flex > div {
                border-right: 1px solid black;
                text-align: center;
            }
        }
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row top-row">
        <div class="col-md-10 col-md-offset-1 text-center">
        	<div>
        		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAqGWUSTmutwYDSeABtBViZjS-byHzn9QFcLkWThq_YA8M17fF" class="img">
        	</div>
        </div>
        <div class="col-md-12 text-center bot-col">
            <h2>Status pengisian</h2>
            <div class="d-flex">
                <div class="hvr-glow" id="standart1">Standar 1</div>
                <div class="hvr-glow" id="standart2">Standar 2</div>
                <div class="hvr-glow" id="standart3">Standar 3</div>
                <div class="hvr-glow" id="standart4">Standar 4</div>
                <div class="hvr-glow" id="standart5">Standar 5</div>
                <div class="hvr-glow" id="standart6">Standar 6</div>
                <div class="hvr-glow" id="standart7">Standar 7</div>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5" id="button-container">
        	<a class="btn btn-primary btn-block flat button-in hvr-float-shadow" id="startAsk">Mulai simulasi</a>
            <a class="btn btn-info btn-block flat button-in hvr-float-shadow" id="detail"> Rincian </a>
        </div>
    </div>
</div>

{{-- <div id="startModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-size">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Confirmation</h4>
        </div>
      <div class="modal-body modal-text">
        <p>Apakah anda ingin memulai penilaian simulasi akreditasi dari awal?</p>
        <br/>
        <small class="more-small"><i>jika 'YA', maka nilai status pengisian akan dihapus seluruhnya dan memulai pengisian dari awal</i></small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default flat" data-dismiss="modal">TIDAK</button>
        <button type="button" class="btn btn-default flat" data-dismiss="modal" id="start">YA</button>
      </div>
    </div>
  </div>
</div> --}}

<div id="detailModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-size">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body modal-text">
        <p>Silahkan isi standar yang belum terlebih dahulu sebelum melihat hasil rincian poin!!!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

@endsection
@push('pageJs')
<script type="text/javascript">
    var theresData = false;
    var route = '';
    var theresDataCount = 0;

    function init(data) {
        var changing = true;

        for (var i = 0; i < data.length; i++) {
            if (data[i].data) {
                theresData = true;
                theresDataCount += 1;
                if (changing) {
                    route = data[i + 1].id;
                }
                $('#'+data[i].id).append(' <i class="fa fa-check-circle done" aria-hidden="true"></i>');
            } else {
                charging = false;
                $('#'+data[i].id).append(' <i class="fa fa-times-circle undone" aria-hidden="true"></i>');
            }
        }

        if (theresData) {
            $('#startAsk').text('Lanjut simulasi');
        }

        if (theresDataCount == 7) {
            $('#button-container').append('<a class="btn btn-danger btn-block flat button-in hvr-float-shadow" onclick="reset()" id="reset">Reset skor</a>');
        }
    }

    function reset() {
        localStorage.clear();
        window.location.href = '/menu';
    }

    var allData = [
        {
            'data': JSON.parse(localStorage.getItem('value1')),
            'id': 'standart1'
        },
        {
            'data': JSON.parse(localStorage.getItem('value2')),
            'id': 'standart2'
        },
        {
            'data': JSON.parse(localStorage.getItem('value3')),
            'id': 'standart3'
        },
        {
            'data': JSON.parse(localStorage.getItem('value4')),
            'id': 'standart4'
        },
        {
            'data': JSON.parse(localStorage.getItem('value5')),
            'id': 'standart5'
        },
        {
            'data': JSON.parse(localStorage.getItem('value6')),
            'id': 'standart6'
        },
        {
            'data': JSON.parse(localStorage.getItem('value7')),
            'id': 'standart7'
        }
    ];

    // $('#startAsk').click(function() {
    //     $('#startModal').modal();
    // });
    $('#startAsk').click(function() {
        if (theresData) {
            window.location.href = '/' + route;
        } else {
            window.location.href = '{{ route('standart1') }}';
        }
    });
    $('#detail').click(function() {
        if (!theresData) {
            $('#detailModal').modal();
        }
    });

    init(allData);
</script>
@endpush