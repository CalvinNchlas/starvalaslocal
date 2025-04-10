@extends('cms.layout')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="container mt-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Umum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Akun</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="kode" class="form-label">Kode *</label>
                                    <input type="text" class="form-control" id="kode" placeholder="00104" required>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="currency" class="form-label">Currency *</label>
                                    <input type="text" class="form-control" id="currency" placeholder="Currency"
                                        required>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label for="nama" class="form-label">Nama *</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <input type="checkbox" class="form-check-input" id="tampilSaatLogin">
                                    <label class="form-check-label" for="tampilSaatLogin">Tampil Saat Login</label>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <input type="checkbox" class="form-check-input" id="active">
                                    <label class="form-check-label" for="active">Aktif</label>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <input type="checkbox" class="form-check-input" id="remittance">
                                    <label class="form-check-label" for="remittance">Remittance</label>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <input type="checkbox" class="form-check-input" id="nonStok">
                                    <label class="form-check-label" for="nonStok">Non Stok</label>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <input type="checkbox" class="form-check-input" id="tampilTransaksi">
                                    <label class="form-check-label" for="tampilTransaksi">Tampil Transaksi</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="denomination" class="form-label">Denomination</label>
                                    <input type="text" class="form-control" id="denomination" placeholder="Denomination">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="kursBeli" class="form-label">Kurs Beli</label>
                                    <input type="text" class="form-control" id="kursBeli" placeholder="0.00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="kursJual" class="form-label">Kurs Jual</label>
                                    <input type="text" class="form-control" id="kursJual" placeholder="0.00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="kursTengah" class="form-label">Kurs Tengah</label>
                                    <input type="text" class="form-control" id="kursTengah" placeholder="0.00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="benua" class="form-label">Benua</label>
                                    <select class="form-select" id="benua">
                                        <option selected>Asia</option>
                                        <option value="1">Afrika</option>
                                        <option value="2">Eropa</option>
                                        <option value="3">Amerika</option>
                                        <option value="4">Oceania</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="maksimalPenambahan" class="form-label">Maksimal Penambahan</label>
                                    <input type="text" class="form-control" id="maksimalPenambahan"
                                        placeholder="0.00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="maksimalPengurangan" class="form-label">Maksimal Pengurangan</label>
                                    <input type="text" class="form-control" id="maksimalPengurangan"
                                        placeholder="0.00">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="group" class="form-label">Group</label>
                                    <input type="text" class="form-control" id="group" placeholder="Group">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="fileUpload" class="form-label">Upload Logo</label>
                                    <input class="form-control" type="file" id="fileUpload">
                                    <small class="form-text text-muted">Maksimal file upload: 500kb.</small>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="akunHPP" class="form-label">Akun HPP</label>
                                <select class="form-select" id="akunHPP">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunPersediaan" class="form-label">Akun Persediaan</label>
                                <select class="form-select" id="akunPersediaan">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunHutang" class="form-label">Akun Hutang</label>
                                <select class="form-select" id="akunHutang">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunPiutang" class="form-label">Akun Piutang</label>
                                <select class="form-select" id="akunPiutang">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunPenjualan" class="form-label">Akun Penjualan</label>
                                <select class="form-select" id="akunPenjualan">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="akunAdjusment" class="form-label">Akun Adjusment</label>
                                <select class="form-select" id="akunAdjusment">
                                    <option selected>Pilih Akun</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary ms-2">Batal</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
