@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-xl-0"><strong>DOKUMEN</strong></h2>

                        <div class="non-home p-5 bg-white">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">NAMA</td>
                                        <td class="font-weight-bold">FILE</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_dokumen as $dokumen)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $dokumen->nama_dokumen }}</td>
                                        <td> <a href="{{ asset('assets-beranda/dokumen/'.$dokumen->file_dokumen) }}" class="text-black"> {{ $dokumen->file_dokumen }} </a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop