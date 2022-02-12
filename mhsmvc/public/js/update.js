$(function(){
    $('.tombolTambah').on('click',function(){
        $('#formMhsLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbah').on('click',function(){
        $('#formMhsLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/mhsmvc/public/mahasiswa/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/mhsmvc/public/mahasiswa/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nim').val(data.nim);
                $('#nama').val(data.name);
                $('#tgl_lahir').val(data.born);
                $('#email').val(data.email);
                $('#jekel').val(data.gender);
                $('#alamat').val(data.address);
                $('#id').val(data.id);
                // console.log(data);
                if (data.jenis_kelamin=='P') {
                    $("#jekel_p").prop( "checked",true);
                } else {
                    $("#jekel_l").prop( "checked",true);
                }
                
            }
        });
    });
});

$(function(){
    $('.tombolTambahBrg').on('click',function(){
        $('#formBrgLabel').html('Tambah Data Barang');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahBrg').on('click',function(){
        $('#formBrgLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/mhsmvc/public/barang/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/mhsmvc/public/barang/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#kode_barang').val(data.kode_barang);
                $('#nama_barang').val(data.nama_barang);
                $('#id_jenis').val(data.id_jenis);
                $('#stok').val(data.stok);
                $('#harga').val(data.harga);
                $('#satuan').val(data.satuan);
                $('#id_supplier').val(data.id_supplier);
                $('#id').val(data.id);                
            }
        });
    });
});

$(function(){
    $('.tombolTambahJns').on('click',function(){
        $('#formJnsLabel').html('Tambah Data Jenis');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahJns').on('click',function(){
        $('#formJnsLabel').html('Ubah Data Jenis');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/mhsmvc/public/jenis/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/mhsmvc/public/jenis/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_jenis').val(data.nama_jenis);
                $('#keterangan').val(data.keterangan);
                $('#id').val(data.id);                
            }
        });
    });
});

$(function(){
    $('.tombolTambahSpl').on('click',function(){
        $('#formSplLabel').html('Tambah Data Supplier');
        $('.modal-footer button[type=submit]').html('Simpan');

    });

    $('.modalUbahSpl').on('click',function(){
        $('#formSplLabel').html('Ubah Data Supplier');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action','http://localhost/mhsmvc/public/supplier/ubah')

        const id=$(this).data('id');

        $.ajax({
            url:'http://localhost/mhsmvc/public/supplier/getubah',
            data:{id : id},
            method:'post',
            dataType:'json',
            success:function(data) {
                $('#nama_supplier').val(data.nama_supplier);
                $('#notelp').val(data.notelp);
                $('#email').val(data.email);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);                
            }
        });
    });
});