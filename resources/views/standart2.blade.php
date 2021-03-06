@extends('layouts.app')

@section('content')
    <div class="loader" id="loader-page"></div>

    <div class="container" style="display: none;" id="container-st2">
    	<div class="row">
    		<div class="col-md-10 col-md-offset-1">
    			<div class="panel panel-default">
    				<div class="panel-heading display-flex">
                        <h3 class="d-flex-2"><strong>STANDAR 2</strong></h3>
                        <div class="d-flex-1 text-right btn-title">
                            <a href="{{ route('menu') }}" class="btn btn-default hvr-icon-drop">Menu</a>
                            <a href="{{ route('standart3') }}" class="btn btn-default hvr-icon-wobble-horizontal">Lewati</a>
                        </div>
                    </div>
    				<div class="panel-body">
    					{!! Form::open(['url' => route('post_standart2')]) !!}
                        <div class="form-group">
                            <label>2.1 &nbsp; Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab dan adil.</label>
                            <div class="radio">
                                <label>{{ Form::radio('2.1', 4, 0, ['required' => 'true']) }}Program studi memiliki tatapamong yang memungkinkan terlaksananya secara konsisten prinsip tatapamong, dan menjamin penyelenggaraan program studi yang memenuhi 5 aspek berikut:
                                <ul>
                                    <li>kredibel</li>
                                    <li>transparan</li>
                                    <li>akuntabel</li>
                                    <li>bertanggung jawab</li>
                                    <li>adil</li>
                                </ul></label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.1', 3) }}Program studi memiliki tatapamong yang memunkinkan terlaksananya secara konsiten prinsip tatapamong, dan menjamin penyelenggaraan program studi yang memenuhi 4 dari 5 aspek berikut:
                                <ul>
                                    <li>kredibel</li>
                                    <li>transparan</li>
                                    <li>akuntabel</li>
                                    <li>bertanggung jawab</li>
                                    <li>adil</li>
                                </ul></label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.1', 2) }}Program studi memiliki tatapamong yang memungkinkan terlaksananya secara konsisten prinsip tatapamong, dan menjamin penyelenggaraan program studi yang memenuhi 3 dari 5 aspek berikut:
                                <ul>
                                    <li>kredibel</li>
                                    <li>transparan</li>
                                    <li>akuntabel</li>
                                    <li>bertanggung jawab</li>
                                    <li>adil</li>
                                </ul></label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.1', 1) }}Program studi memiliki tatapamong namun hanya memenuhi 1 s.d. 2 dari 5 aspek berikut:
                                <ul>
                                    <li>kredibel</li>
                                    <li>transparan</li>
                                    <li>akuntabel</li>
                                    <li>bertanggung jawab</li>
                                    <li>adil</li>
                                </ul></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>2.2 &nbsp; Karakteristik kepemimpinan yang efektif (kepemimpinan operasional, kepemimpinan organisasi, kepemimpinan publik)</label>
                            <div class="radio">
                                <label>{{ Form::radio('2.2', 4, 0, ['required' => 'true']) }}Kepemimpinan program studi memiliki karakteristik yang kuat dalam:
                                <ul>
                                    <li>kepemimpinan operasional</li>
                                    <li>kepemimpinan organisasi</li>
                                    <li>kepemimpinan publik</li>
                                </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.2', 3) }}Kepemimpinan program studi memiliki karakter kepemimipinan yang kuat dalam dua dari karakteristik berikut:
                                <ul>
                                    <li>kepemimpinan operasional</li>
                                    <li>kepemimpinan organisasi</li>
                                    <li>kepemimpinan publik</li>
                                </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.2', 2) }}Kepemimpinan program studi memiliki karakter kepemimpinan yang kuat dalam salah satu dari karakteristik berikut:
                                <ul>
                                    <li>kepemimpinan operasional</li>
                                    <li>kepemimpinan organisasi</li>
                                    <li>kepemimpinan publik</li>
                                </ul>
                                </label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.2', 1) }}kepemimpinan program studi lemah dalam karakteristik berikut:
                                <ul>
                                    <li>kepemimpinan operasional</li>
                                    <li>kepemimpinan organisasi</li>
                                    <li>kepemimpinan publik</li>
                                </ul>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>2.3 &nbsp; Sistem pengelolaan fungsional dan operasional program studi mencakup: <i>planning, organizing, staffing, leading, controlling</i> yang efektif dilaksanakan</label>
                            <div class="radio">
                                <label>{{ Form::radio('2.3', 4, 0, ['required' => 'true']) }}Sistem pengelolaan funsional dan operasional program studi berjalan sesuai dengan SOP, yang didukung dokumen yang lengkap</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.3', 3) }}Sistem pengelolaan funsional dan operasional program studi dilakukan dengan cukup baik, sesuai dengan SOP, namun dokumen kurang lengkap</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.3', 2) }}Sistem pengelolaan funsional dan operasional program studi dilakukan hanya sebagian sesuai dengan SOP dan dokumen kurang lengkap</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.3', 1) }}Sistem pengelolaan funsional dan operasional program studi dilakukan tidak sesuai dengan SOP</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>2.4 &nbsp; Pelaksanaan penjamin mutu di program studi.</label>
                            <div class="radio">
                                <label>{{ Form::radio('2.4', 4, 0, ['required' => 'true']) }}Sistem penjamin mutu berjalan sesuai dengan standar penjamin mutu, ada umpan balik dan tindak lanjutnya, yang didukung dokumen yang lengkap</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.4', 3) }}Sistem penjamin mutu berjalan sesuai dengan standar penjaminan mutu, umpan balik tersedia tetapi tidak ada tindak lanjut.</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.4', 2) }}Sistem penjamin mutu berfungsi sebagian namun tidak ada umpan balik dan dokumen kurang lengkap.</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.4', 1) }}Ada sistem penjamin mutu, tetapi tidak berfungsi</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>2.5 &nbsp; Penjaringan umpan balik dan tindak lanjutnya</label>
                            <div class="radio">
                                <label>{{ Form::radio('2.5', 4, 0, ['required' => 'true']) }}Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara berkelanjutan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.5', 3) }}Umpan balik diperoleh dari dosen, mahasiswa, alumni dan pengguna serta ditindaklanjuti secara insidental.</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.5', 2) }}Umpan balik hanya diperoleh dari sebagian dan ada tindak lanjut secara insidental</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.5', 1) }}Umpan balik hanya diperoleh dari sebagian dan tidak ada tindak lanjut</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>2.6 &nbsp; Upaya untuk menjamin keberlanutan (<i>sustainability</i>) program studi, khususnya dalam hal:
                            <ul>
                                <li>Upaya untuk peningkatan animo calon mahasiswa</li>
                                <li>Upaya peningkatan mutu manajemen</li>
                                <li>Upaya untuk peningkatan mutu lulusan</li>
                                <li>Upaya untuk pelaksanaan dan hasil kerjasama kemitraan</li>
                                <li>Upaya dan prestasi memperoleh dana hibah kompetitif</li>
                            </ul>
                            </label>
                            <div class="radio">
                                <label>{{ Form::radio('2.6', 4, 0, ['required' => 'true']) }}Ada bukti semua usaha dilakukan berikut hasilnya</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.6', 3) }}Ada bukti sebagian usaha (>3) dilakukan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.6', 2) }}Ada bukti hanya sebagian kecil usaha (2-3) yang dilakukan</label>
                            </div>
                            <div class="radio">
                                <label>{{ Form::radio('2.6', 1) }}Ada bukti hanya 1 usaha yang dilakukan</label>
                            </div>
                        </div>
                        <div id="hidden"></div>
                        {{ Form::submit('LANJUT KE STANDAR 3', ['class' => 'btn btn-block btn-success']) }}
                        {!! Form::close() !!}
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <script type="text/javascript">
        var hasil = {!! json_encode($hasil) !!}
        var value = {!! json_encode($value) !!}

        if (hasil || value) {
            localStorage.nilaiStandart2 = hasil;
            localStorage.setItem('value2', JSON.stringify(value));
            window.location.href = '{{ route("standart3") }}';
        } else {
            var akreditasi_id = localStorage.accreditation_id;
            $('#hidden').append('<input type="hidden" name="accreditation_id" value="'+ akreditasi_id +'"/>');
            setTimeout(function() {
                $('#loader-page').css('display', 'none');
                $('#container-st2').css('display', 'block');
            }, 500);
        }
    </script>
@endsection
