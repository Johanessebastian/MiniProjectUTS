<?php
    $currentRouteName = Route::currentRouteName();
?>



<?php $__env->startSection('content'); ?>
    <div class="container py-5" >
        <div>
            <h2 class="text-center"> <i class="bi bi-stack"></i> Selamat Datang Di masterBarangUts</h2><br>

            <div class="row" >
                <div class="col-6">
                    <a class="btn btn-dark" id="btn-index2" href="<?php echo e(route('barangs.index')); ?>" class="nav-link <?php if($currentRouteName == 'barang.index'): ?> active <?php endif; ?>">List Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 ">
                <img class="rounded mx-auto d-block" src="<?php echo e(Vite::asset('resources/images/fotoprofile.jpg')); ?>" class="img-fluid" alt="Gambar" id="fprofile">
            </div>
            <div class="col-md-8"><br>
                <h2>Biodata</h2><br>
                <p ><strong> Nama:</strong> Johanes Abner Sebastian Diman</p>
                <p ><strong> Tempat,Tanggal lahir:</strong> Surabaya,10-Juli-2003</p>
                <p><strong>Umur:</strong> 19 tahun</p>
                <p><strong>Alamat:</strong> Jl. Sarpawisesa 50, Ujung, Kec. Semampir, Surabaya, Jawa Timur 60155</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\JOHANES\Documents\Tugas kuliah\Semester 4\Framework\uts\mini_project_uts\resources\views/default.blade.php ENDPATH**/ ?>