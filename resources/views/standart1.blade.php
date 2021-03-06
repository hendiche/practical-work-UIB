@extends('layouts.app')

@section('content')
    <div class="loader" id="loader-page"></div>

    <div class="container" style="display: none;" id="container-st1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading display-flex">
                        <h3 class="d-flex-2"><strong>STANDAR 1</strong></h3>
                        <div class="d-flex-1 text-right btn-title">
                            <a href="{{ route('menu') }}" class="btn btn-default hvr-icon-drop">Menu</a>
                            <a href="{{ route('standart2') }}" class="btn btn-default hvr-icon-wobble-horizontal">Lewati</a>
                        </div>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(['url' => route('post_standart1')]) !!}
                        <div class="form-group">
                            <label>1.1.a &nbsp; Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.</label>
                            <div class="radio">
                                <label>{{ Form::radio('1.1.a', 4, 0, ['required' => 'true']) }}Memiliki visi, misi, tujuan dan sasaran yang sangat jelas dan sangat realistik</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.1.a', 3) }}Memiliki visi, misi, tujuan dan sasaran jelas dan realistik</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.1.a', 2) }}Memiliki visi, misi, tujuan dan sasaran yang cukup jelas namun kurang realistik</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.1.a', 1) }}Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</label>
                            </div>
                        </div>

                        {{-- <div class="form-group" id="st1-11b" style="visibility: hidden;"> --}}
                        <div class="form-group">
                            <label>1.1.b &nbsp; Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen</label>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('1.1.b', 4, 0, ['required' => 'true']) }}
                                    Strategi pencapaian sasaran:
                                    <ul>
                                        <li>dengan tahapan waktu yang jelas dan sangat realistik</li>
                                        <li>didukung dokumen yang sangat lengkap</li>
                                    </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('1.1.b', 3) }}
                                    Strategi pencapaian sasaran:
                                    <ul>
                                        <li>dengan tahapan waktu yang jelas, dan realistik</li>
                                        <li>didukung dokumen yang lengkap</li>
                                    </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('1.1.b', 2) }}
                                    Strategi pencapaian sasaran:
                                    <ul>
                                        <li>dengan tahapan waktu yang jelas, dan cukup realistik</li>
                                        <li>didukung dokumen yang cukup lengkap</li>
                                    </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    {{ Form::radio('1.1.b', 1) }}
                                    Strategi pencapaian sasaran:
                                    <ul>
                                        <li>tanpa adanya tahapan waktu yang jelas</li>
                                        <li>didukung dokumen yang kurang lengkap</li>
                                    </ul>
                                </label>
                            </div>
                        </div>
                        {{-- <div class="form-group" style="visibility: hidden;" id="st1-12"> --}}
                        <div class="form-group">
                            <label>1.2 &nbsp; Sosialisasi visi-misi. Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan</label>
                            <div class="radio">
                                <label>{{ Form::radio('1.2', 4, 0, ['required' => 'true']) }}Dipahami dengan baik oleh seluruh sivitas akademika dan tenaga kependidikan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.2', 3) }}Dipahami dengan baik oleh sebagian sivitas akademika dan tenaga kependidikan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.2', 2) }}Kurang dipahami oleh sivitas akademika dan tenaga kependidikan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('1.2', 1) }}Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan</label>
                            </div>
                        </div>
                        <div id="hidden"></div>
                        {{-- {{ Form::submit('LANJUT KE STANDAR 2', ['class' => 'btn btn-block btn-success', 'id' => 'st1-submit', 'style' => 'visibility:hidden']) }} --}}
                        {{ Form::submit('LANJUT KE STANDAR 2', ['class' => 'btn btn-block btn-success']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var hasil = {!! json_encode($hasil) !!}
        var value = {!! json_encode($value) !!}
        var akreditasi_id = {!! json_encode($acc_id) !!}
        var prodi_name = {!! json_encode($prodi_name) !!}
        var akreditasi_date = {!! json_encode($acc_date) !!}        
        
        if (akreditasi_id) {
            localStorage.accreditation_id = akreditasi_id;
        }
        if (prodi_name) {
            localStorage.prodi_name = prodi_name;
        }
        if (akreditasi_date) {
            localStorage.accreditation_date = akreditasi_date;
        }
        if (hasil || value) {
            localStorage.nilaiStandart1 = hasil;
            localStorage.setItem('value1', JSON.stringify(value));
            window.location.href = '{{ route("standart2") }}';
        } else {
            var akreditasi_id = localStorage.accreditation_id;
            $('#hidden').append('<input type="hidden" name="accreditation_id" value="'+ akreditasi_id +'"/>');
            setTimeout(function() {
                $('#loader-page').css('display', 'none');
                $('#container-st1').css('display', 'block');
            }, 500);

            // setTimeout(function() {
            //     $('#st1-11b').addClass('animated fadeInRight');
            //     $('#st1-11b').css('visibility', 'visible');
            // }, 500);
            // setTimeout(function() {
            //     $('#st1-12').addClass('animated fadeInRight');
            //     $('#st1-12').css('visibility', 'visible');
            // }, 1050);
            // setTimeout(function() {
            //     $('#st1-submit').addClass('animated bounceInDown');
            //     $('#st1-submit').css('visibility', 'visible');
            // }, 1550);
        }

    </script>
@endsection
