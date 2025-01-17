<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ Storage::url( $data->logo ) }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ Storage::url( $data->logo ) }}" type="image/x-icon">
    <title>{{ $data->nama_yayasan}}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/date-picker.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('back/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('back/assets/css/responsive.css') }}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ Storage::url( $data->logo ) }}" width="30px" alt=""></a></div>
            <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ Storage::url( $data->logo ) }}" width="30px" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="{{ route('logout')}}"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{ asset('back/assets/images/dashboard/1.png') }}" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
                <h6 class="mt-3 f-14 f-w-600">Wali Santri</h6></a>
              <p class="mb-0 font-roboto">
                  @if(session('user'))
                      {{ session('user')['wali_santri'] }}
                   @else
                      Guest
                  @endif
              </p>
            </div>
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          @if (session('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil! </strong> {{ session('success')}}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close" data-bs-original-title="" title=""></button>
          </div>
          @endif

          @if (session('warning'))
            <div class="alert alert-warning outline-2x" role="alert">
                <p>{{ session ('warning')}}</p>
            </div>
          @endif

          @foreach ($santri as $s )
            <div class="container-fluid">
                <div class="email-wrap bookmark-wrap">
                <div class="row">
                    <div class="col-xl-3 box-col-4 xl-30">
                    <div class="email-sidebar">
                        <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">Bayar Tagihan Bulanan: {{ $s->nama}}</a>
                        <div class="email-left-aside">
                        <div class="card">
                            <div class="card-body">
                            <div class="email-app-sidebar left-bookmark">
                                <div class="media">
                                <div class="media-size-email">
                                    @if ( $s->jenis_kelamin == 'Laki-laki')
                                        <img class="me-3"
                                        src="{{ $s->gambar ? Storage::url($s->gambar) : asset('logo/man.png') }} "
                                        alt="User Image"
                                        width="70px" width="70px">
                                    @else
                                        <img class="me-3"
                                        src="{{ $s->gambar ? Storage::url($s->gambar) : asset('logo/human.png') }} "
                                        alt="User Image"
                                        width="70px" width="70px">
                                    @endif
                                </div>
                                <div class="media-body">
                                    <h6 class="f-w-600">
                                        Nama: {{ $s->nama}}
                                    </h6>
                                    <p>Tingkat: {{ $s->tingkat_pendidikan}}</p>
                                    <p>Alamat: {{ $s->alamat}}</p>
                                    <p>Jk: {{ $s->jenis_kelamin}}</p>
                                    <p>Tgl: {{ $s->tempat_tgl}}</p>
                                </div>
                                </div>
                                <ul class="nav main-menu" role="tablist">
                                <li class="nav-item">
                                    <button class="badge-light btn-block btn-mail" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$s->id}}"><i class="me-2" data-feather="check-circle"></i>Bayar Sekarang </button>
                                    <div class="modal fade modal-bookmark" id="exampleModal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$s->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Pembayaran Tunggakan Santri</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('pembayaran') }}" enctype="multipart/form-data" class="form-bookmark needs-validation" id="bookmark-form">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label>Silahkan Lakukan Pembayaran / Transfer ke Salah Satu Payment Dibawah</label>
                                                            @foreach ($payment as $p )
                                                                <div class="card p-3 mb-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <img src="{{ asset('back/assets/images/logo/'. $p->logo.'.svg') }}" alt="Bank Icon" class="me-3" style="width: 48px; height: 48px;">
                                                                        <div>
                                                                            <span style="font-size: 1.25rem;">No. {{ $p->no_rek }}</span>
                                                                            <p class="mb-0">Nama: {{ $p->nama_nasabah}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        @foreach($s->tunggakan as $t)
                                                        <label for="file-upload">Jumlah Yang Harus Ditransfer : Rp {{ number_format($t->kategoriTunggakan->jumlah, 0, ',', '.') }}</label>
                                                        @endforeach
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="file-upload">Upload Bukti Pembayaran</label>
                                                        <input name="bukti_pembayaran" class="form-control" id="file-upload" type="file" required="" autocomplete="off">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                    </div>

                                                    <div class="row">
                                                    <div class="form-group col">
                                                        <label>Pilih Nama Santri Yang Ingin DIbayar</label>
                                                        <select  name="tunggakan_santri_id" class="js-example-basic-single" id="bm-group">
                                                          @foreach($santri as $idtg)
                                                                @foreach($idtg->tunggakan as $tunggakan)  <!-- looping untuk menampilkan setiap tunggakan -->
                                                                    <option value="{{ $tunggakan->id }}">{{ $idtg->nama }} - {{ $tunggakan->kategoriTunggakan->nama }}</option>
                                                                @endforeach
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label>Pilih Bulan</label>
                                                        <select name="bulan" class="js-example-disabled-results" id="bm-collection">
                                                            <option value="Januari">Januari</option>
                                                            <option value="Februari">Februari</option>
                                                            <option value="Maret">Maret</option>
                                                            <option value="April">April</option>
                                                            <option value="Mei">Mei</option>
                                                            <option value="Juni">Juni</option>
                                                            <option value="Juli">Juli</option>
                                                            <option value="Agustus">Agustus</option>
                                                            <option value="September">September</option>
                                                            <option value="Oktober">Oktober</option>
                                                            <option value="November">November</option>
                                                            <option value="Desember">Desember</option>
                                                        </select>
                                                    </div>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label>Catatan</label>
                                                        <textarea name="nama" class="form-control" id="bm-desc" required="" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                                <input id="index_var" type="hidden" value="6">
                                                <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Kirim</button>
                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Batal</button>
                                            </form>
                                        </div>

                                        </div>
                                    </div>
                                    </div>
                                </li>
                                    <hr>
                                </li>
                                <li><span class="main-title">Transaksi</li>
                                <li><a class="show" id="pills-notification-tab" data-bs-toggle="pill" href="#pills-notification{{$s->id}}" role="tab" aria-controls="pills-notification" aria-selected="false"><span class="title">Status Transaksi</span></a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-9 col-md-12 box-col-8 xl-70">
                    <div class="email-right-aside bookmark-tabcontent">
                        <div class="card email-body radius-left">
                        <div class="ps-0">
                            <div class="tab-content">

                            <div class="tab-pane fade active show" id="pills-created" role="tabpanel" aria-labelledby="pills-created-tab">
                                <div class="card mb-0">
                                <div class="card-header">
                                    <h5 class="mb-0">Tunggakan Santri</h5><a class="f-w-600" href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="taskadd">
                                    <div class="table-responsive">
                                        <table class="table">
                                            @foreach($s->tunggakan as $tunggakan)

                                                @if ($tunggakan->January == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan January</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan January</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->February == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan February</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan February</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->March == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan March</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan March</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->April == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan April</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan April</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->May == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan May</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan May</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->June == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan June</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan June</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->July == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan July</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan July</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->August == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan August</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan August</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->September == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan September</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan September</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->October == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan October</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan October</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                                @if ($tunggakan->November == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan November</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan November</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif
                                                @if ($tunggakan->December == 1)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan December</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <del>
                                                            <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                        </del>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-success">Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="check"></i></a>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Bulan December</h6>
                                                        <p class="project_name_0">{{$tunggakan->kategoriTunggakan->nama }}</p>
                                                        <p class="project_name_0">Rp.{{ number_format($tunggakan->kategoriTunggakan->jumlah, 0, ',', '.') }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">Status : <span class="badge bg-light text-danger">Belum Lunas</span></p>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)"><i data-feather="x"></i></a></td>
                                                </tr>
                                                @endif

                                            @endforeach
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="fade tab-pane" id="pills-notification{{$s->id}}" role="tabpanel" aria-labelledby="pills-notification-tab">
                                <div class="card mb-0">
                                <div class="card-header d-flex">
                                    <h6 class="mb-0">Status Transaksi</h6><a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center">Metode</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Bukti Transfer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($s->tunggakan as $tunggakan)
                                                    @foreach ($tunggakan->pembayaran as $pembayaran)
                                                        <tr>
                                                            <!-- Menampilkan status pembayaran -->
                                                            <th class="text-nowrap" scope="row">
                                                                @if ($pembayaran->status == 1)
                                                                    <span class="badge bg-light text-success">Berhasil</span>
                                                                @elseif ($pembayaran->status == 2)
                                                                    <span class="badge bg-light text-danger">Gagal</span>
                                                                @else
                                                                    <span class="badge bg-light text-warning">Proses</span>
                                                                @endif
                                                            </th>
                                                            <!-- Menampilkan metode pembayaran -->
                                                            <td class="text-center">{{ $pembayaran->metode_pembayaran }}</td>
                                                            <!-- Menampilkan tanggal pembayaran -->
                                                            <td class="text-center">{{ \Carbon\Carbon::parse($pembayaran->tanggal_pembayaran)->format('d M Y') }}</td>
                                                            <!-- Menampilkan bukti pembayaran -->
                                                            <td class="text-center">
                                                                <a href="{{ asset('storage/' . $pembayaran->bukti_pembayaran) }}" target="_blank">
                                                                    Lihat
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
          @endforeach
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright">
                <p class="mb-0">Copyright {{ date('Y') }} © {{$data->nama_yayasan}} All rights reserved.</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('back/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('back/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('back/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('back/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('back/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('back/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('back/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('back/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('back/assets/js/form-validation-custom.js') }}"></script>
    <script src="{{ asset('back/assets/js/task/custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('back/assets/js/script.js') }}"></script>
    <script src="{{ asset('back/assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
