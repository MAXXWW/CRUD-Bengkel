@extends('layout-registrasi')

@section('title', 'Surya Motor | Registrasi')

@section('body')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger mt-3" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    <div class="mb-1 mt-3"><a type="button" class="btn btn-danger btn-sm" href="/">Back</a></div>
                    <form action="{{route('registrasi-submit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1 class="text-default text-center mb-5">Register</h1>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" type="text" name="nama" value="{{old('nama')}}" id="nama" spellcheck="false">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{old('email')}}" id="email" required spellcheck="false">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" value="{{old('password')}}" id="password" required spellcheck="false">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control @error('konfirmasi') is-invalid @enderror" placeholder="Konfirmasi Password" type="password" name="konfirmasi" value="{{old('konfirmasi')}}" id="konfirmasi" required spellcheck="false">
                                @error('konfirmasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input mt-4 @error('foto') is-invalid @enderror" id="customFileLang" name="foto">
                                    <label class="custom-file-label" for="customFileLang">Select file</label>
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div> -->

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-4">Create account</button>
                        </div>
                    </form>
                    <!-- @if ($message = Session::get('error'))
                    <div class="alert alert-danger mt-3" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        <strong>{{$message}}</strong>
                    </div>
                    @endif -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection